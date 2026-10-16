<?php

/**
 * Moves non-essential stylesheets and scripts out of the initial request waterfall (used for phones on the home page).
 *
 * Every <link rel="stylesheet" ... media="print" onload=...> (the "load later" pattern used by the layout) and every
 * <script defer src=...> is removed from the HTML and loaded by a tiny bootstrap script once the page has finished
 * loading (or on the first user interaction, whichever comes first). This keeps the bytes that compete with the hero
 * image and the critical CSS to a minimum.
 *
 *  - stylesheets are re-inserted at the position of the first removed one, so the cascade order is unchanged
 *  - scripts keep their relative order (async=false)
 *  - jQuery itself (and bootstrap.js) is loaded late as well: until then a small stub queues $(fn) / $(document).ready(fn)
 *    calls and replays them once the real jQuery and every plugin are in place
 *  - "load" / "DOMContentLoaded" listeners registered by the late scripts are replayed, because those events have long passed
 */
class LateAssets
{
	public static function apply($html)
	{
		if (!is_string($html) || strpos($html, '</head>') === false) {
			return $html;
		}

		$css = array();
		$js = array();
		$anchorPlaced = false;

		// stylesheets loaded with the media=print swap pattern
		$html = preg_replace_callback(
			'#<link\b[^>]*\brel="stylesheet"[^>]*\bmedia="print"[^>]*\bonload="[^"]*"[^>]*>#i',
			function ($m) use (&$css, &$anchorPlaced) {
				if (!preg_match('#\bhref="([^"]+)"#i', $m[0], $h)) {
					return $m[0];
				}
				$css[] = html_entity_decode($h[1]);
				if (!$anchorPlaced) {
					$anchorPlaced = true;
					return '<style id="octa-css-anchor"></style>';
				}
				return '';
			},
			$html
		);

		// jQuery + bootstrap.js (synchronous in <head>) go first in the late list, replaced by the stub
		$stubPlaced = false;
		$html = preg_replace_callback(
			'#<script\b[^>]*\bsrc="([^"]*/js/(?:jquery-1\.12\.4-migrate\.min|bootstrap\.min)\.js[^"]*)"[^>]*></script>#i',
			function ($m) use (&$js, &$stubPlaced) {
				$js[] = html_entity_decode($m[1]);
				if (!$stubPlaced) {
					$stubPlaced = true;
					return self::stub();
				}
				return '';
			},
			$html
		);
		$jqueryDeferred = $stubPlaced;

		// deferred scripts (the layout's libraries, the marquee plugin, ...)
		$html = preg_replace_callback(
			'#<script\b(?=[^>]*\bdefer\b)[^>]*\bsrc="([^"]+)"[^>]*></script>#i',
			function ($m) use (&$js) {
				$js[] = html_entity_decode($m[1]);
				return '';
			},
			$html
		);

		// lazysizes is only needed when the page actually uses it (native loading="lazy" covers the rest)
		if (strpos($html, 'lazyload') === false) {
			$js = array_values(array_filter($js, function ($src) { return strpos($src, 'lazysizes') === false; }));
		}

		if (!$css && !$js) {
			return $html;
		}

		$loader = '<script>(function(){var css=' . json_encode($css, JSON_UNESCAPED_SLASHES) . ',js=' . json_encode($js, JSON_UNESCAPED_SLASHES) . ',started=false,hold=' . ($jqueryDeferred ? 'false' : 'true') . ',ev=["scroll","touchstart","mousemove","keydown","click"];'
			. 'if(hold&&window.jQuery&&jQuery.holdReady){jQuery.holdReady(true);}'
			. 'function finish(cap){'
			. 'var q=window.__jqq||[];window.__jqq=null;'
			. '(cap.DOMContentLoaded||[]).forEach(function(f){try{f.call(document,new Event("DOMContentLoaded"));}catch(e){}});'
			. 'function tail(){if(hold&&window.jQuery&&jQuery.holdReady){jQuery.holdReady(false);}(cap.load||[]).forEach(function(f){try{f.call(window,new Event("load"));}catch(e){}});}'
			. 'if(!window.jQuery){tail();return;}'
			. 'var i=0;(function step(){if(i>=q.length){tail();return;}var f=q[i++];try{f(window.jQuery);}catch(e){if(window.console){console.error(e);}}setTimeout(step,0);})();}'
			. 'function boot(){if(started)return;started=true;'
			. 'ev.forEach(function(e){window.removeEventListener(e,boot);});'
			. 'var anchor=document.getElementById("octa-css-anchor");'
			. 'var links=[],pending=css.length;function apply(){links.forEach(function(l){l.media="all";});}'
			. 'function cssDone(){if(--pending<=0){apply();}}'
			. 'css.forEach(function(h){var l=document.createElement("link");l.rel="stylesheet";l.media="print";l.onload=l.onerror=cssDone;l.href=h;links.push(l);if(anchor&&anchor.parentNode){anchor.parentNode.insertBefore(l,anchor);}else{document.head.appendChild(l);}});'
			. 'setTimeout(apply,4000);'
			. 'var left=js.length,cap={DOMContentLoaded:[],load:[]},orig=window.addEventListener,origDoc=document.addEventListener;'
			. 'function restore(){window.addEventListener=orig;document.addEventListener=origDoc;if(!hold){try{delete document.readyState;}catch(e){}}}'
			. 'function done(){if(--left<=0){restore();finish(cap);}}'
			. 'if(!left){finish(cap);return;}'
			. 'window.addEventListener=function(t,f,o){if(t==="load"){cap.load.push(f);}else{orig.call(this,t,f,o);}};'
			. 'document.addEventListener=function(t,f,o){if(t==="DOMContentLoaded"){cap.DOMContentLoaded.push(f);}else{origDoc.call(this,t,f,o);}};'
			. 'if(!hold){try{Object.defineProperty(document,"readyState",{configurable:true,get:function(){return "loading";}});}catch(e){}}'
			. 'js.forEach(function(src){var s=document.createElement("script");s.src=src;s.async=false;s.onload=s.onerror=done;document.head.appendChild(s);});}'
			. 'if(document.readyState==="complete"){boot();}else{window.addEventListener("load",boot);'
			. 'ev.forEach(function(e){window.addEventListener(e,boot,{passive:true,once:true});});}'
			. '})();</script>';

		// right before </head>: runs before any inline $(document).ready in <body>
		$pos = strrpos($html, '</head>');
		return substr($html, 0, $pos) . $loader . substr($html, $pos);
	}

	/**
	 * Minimal jQuery stand-in used until the real library has been loaded: it queues $(fn) / $(document).ready(fn)
	 * and records chained calls on selectors so that they can be replayed on the real jQuery.
	 */
	private static function stub()
	{
		return '<script>(function(w){var q=w.__jqq=[];'
			. 'function rec(args){var ops=[];var p=new Proxy(function(){},{get:function(t,k){if(k==="then"||typeof k==="symbol"){return undefined;}return function(){ops.push([k,[].slice.call(arguments)]);return p;};},apply:function(){return p;}});'
			. 'q.push(function(J){var o=J.apply(null,args);ops.forEach(function(op){if(o&&typeof o[op[0]]==="function"){o=o[op[0]].apply(o,op[1]);}});});return p;}'
			. 'function $(a){if(typeof a==="function"){q.push(function(J){J(a);});return $;}return rec([].slice.call(arguments));}'
			. 'w.$=w.jQuery=$;})(window);</script>';
	}
}
