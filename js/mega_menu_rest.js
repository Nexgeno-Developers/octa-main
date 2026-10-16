var monsterinsights_frontend={"js_events_tracking":"true","download_extensions":"doc,pdf,ppt,zip,xls,docx,pptx,xlsx","inbound_paths":"[]","home_url":"","hash_tracking":"false"};
;var MonsterInsights=function(){var t=[],a='';this.setLastClicked=function(e,n,i){e=typeof e!=='undefined'?e:[];n=typeof n!=='undefined'?n:[];i=typeof i!=='undefined'?i:!1;t.valuesArray=e;t.fieldsArray=n};this.getLastClicked=function(){return t};this.setInternalAsOutboundCategory=function(e){a=e};this.getInternalAsOutboundCategory=function(){return a};this.sendEvent=function(t){e([],t)};function s(){if(window.monsterinsights_debug_mode){return!0}
else{return!1}};function e(e,n){e=typeof e!=='undefined'?e:[];n=typeof n!=='undefined'?n:{};__gaTracker('send',n);t.valuesArray=e;t.fieldsArray=n;t.tracked=!0;i('Tracked: '+e.type);i(t)};function n(e){e=typeof e!=='undefined'?e:[];t.valuesArray=e;t.fieldsArray=[];t.tracked=!1;i('Not Tracked: '+e.exit);i(t)};function i(e){if(s()){console.dir(e)}};function o(e){return e.replace(/^\s+|\s+$/gm,'')};function f(){var n=0,e=document.domain,i=e.split('.'),t='_gd'+(new Date()).getTime();while(n<(i.length-1)&&document.cookie.indexOf(t+'='+t)==-1){e=i.slice(-1-(++n)).join('.');document.cookie=t+'='+t+';domain='+e+';'};document.cookie=t+'=;expires=Thu, 01 Jan 1970 00:00:01 GMT;domain='+e+';';return e};function u(e){e=e.toString();e=e.substring(0,(e.indexOf('#')==-1)?e.length:e.indexOf('#'));e=e.substring(0,(e.indexOf('?')==-1)?e.length:e.indexOf('?'));e=e.substring(e.lastIndexOf('/')+1,e.length);if(e.length>0&&e.indexOf('.')!==-1){e=e.substring(e.indexOf('.')+1);return e}
else{return''}};function h(){return typeof(__gaTracker)!=='undefined'&&__gaTracker&&__gaTracker.hasOwnProperty('loaded')&&__gaTracker.loaded==!0};function y(e){return e.which==1||e.which==2||e.metaKey||e.ctrlKey||e.shiftKey||e.altKey};function c(){var e=[];if(typeof monsterinsights_frontend.download_extensions=='string'){e=monsterinsights_frontend.download_extensions.split(',')};return e};function d(){var e=[];if(typeof monsterinsights_frontend.inbound_paths=='string'){e=JSON.parse(monsterinsights_frontend.inbound_paths)};return e};function b(e){if(e.which==1){return'event.which=1'}
else if(e.which==2){return'event.which=2'}
else if(e.metaKey){return'metaKey'}
else if(e.ctrlKey){return'ctrlKey'}
else if(e.shiftKey){return'shiftKey'}
else if(e.altKey){return'altKey'}
else{return''}};function m(e){var h=c(),i=d(),t='unknown',g=e.href,p=u(e.href),v=f(),l=e.hostname,r=e.protocol,y=e.pathname;g=g.toString();var s,b,m=e.getAttribute('data-vars-ga-category');if(m){return m};if(g.match(/^javascript\:/i)){t='internal'}
else if(r&&r.length>0&&(o(r)=='tel'||o(r)=='tel:')){t='tel'}
else if(r&&r.length>0&&(o(r)=='mailto'||o(r)=='mailto:')){t='mailto'}
else if(l&&v&&l.length>0&&v.length>0&&!l.endsWith('.'+v)&&l!==v){t='external'}
else if(y&&JSON.stringify(i)!='{}'&&y.length>0){var w=i.length;for(var n=0;n<w;n++){if(i[n].path&&i[n].label&&i[n].path.length>0&&i[n].label.length>0&&y.startsWith(i[n].path)){t='internal-as-outbound';a='outbound-link-'+i[n].label;break}}}
else if(l&&window.monsterinsights_experimental_mode&&l.length>0&&document.domain.length>0&&l!==document.domain){t='cross-hostname'};if(p&&(t==='unknown'||'external'===t)&&h.length>0&&p.length>0){for(s=0,b=h.length;s<b;++s){if(h[s].length>0&&(g.endsWith(h[s])||h[s]==p)){t='download';break}}};if(t==='unknown'){t='internal'};return t};function w(e,t){var n=(e.target&&!e.target.match(/^_(self|parent|top)$/i))?e.target:!1;if(t.ctrlKey||t.shiftKey||t.metaKey||t.which==2){n='_blank'};return n};function g(e){if(e.getAttribute('data-vars-ga-label')&&e.getAttribute('data-vars-ga-label').replace(/\n/ig,'')){return e.getAttribute('data-vars-ga-label').replace(/\n/ig,'')}
else if(e.title&&e.title.replace(/\n/ig,'')){return e.title.replace(/\n/ig,'')}
else if(e.innerText&&e.innerText.replace(/\n/ig,'')){return e.innerText.replace(/\n/ig,'')}
else if(e.getAttribute('aria-label')&&e.getAttribute('aria-label').replace(/\n/ig,'')){return e.getAttribute('aria-label').replace(/\n/ig,'')}
else if(e.alt&&e.alt.replace(/\n/ig,'')){return e.alt.replace(/\n/ig,'')}
else if(e.textContent&&e.textContent.replace(/\n/ig,'')){return e.textContent.replace(/\n/ig,'')}
else{return undefined}};function x(e){var i=e.children,a=0,r,n;for(var t=0;t<i.length;t++){r=i[t];n=g(r);if(n){return n};if(a==99){return undefined};a++};return undefined};function v(i){var o=i.srcElement||i.target,t=[],l;t.el=o;t.ga_loaded=h();t.click_type=b(i);if(!h()||!y(i)){t.exit='loaded';n(t);return}
while(o&&(typeof o.tagName=='undefined'||o.tagName.toLowerCase()!='a'||!o.href)){o=o.parentNode};if(o&&o.href&&!o.hasAttribute('xlink:href')){var v=o.href,E=u(o.href),D=c(),I=d(),M=monsterinsights_frontend.home_url,S=f(),r=m(o),C=w(o,i),p=o.getAttribute('data-vars-ga-action'),k=o.getAttribute('data-vars-ga-label');t.el=o;t.el_href=o.href;t.el_protocol=o.protocol;t.el_hostname=o.hostname;t.el_port=o.port;t.el_pathname=o.pathname;t.el_search=o.search;t.el_hash=o.hash;t.el_host=o.host;t.debug_mode=s();t.download_extensions=D;t.inbound_paths=I;t.home_url=M;t.link=v;t.extension=E;t.type=r;t.target=C;t.title=g(o);if(!t.label&&!t.title){t.title=x(o)};if(r!=='internal'&&r!=='javascript'){var A=!1,T=function(){if(A){return};A=!0;window.location.href=v},L=function(){t.exit='external';n(t)},O=function(){t.exit='internal-as-outbound';n(t)},K=function(){t.exit='cross-hostname';n(t)};if(C||r=='mailto'||r=='tel'){if(r=='download'){l={hitType:'event',eventCategory:'download',eventAction:p||v,eventLabel:k||t.title,};e(t,l)}
else if(r=='tel'){l={hitType:'event',eventCategory:'tel',eventAction:p||v,eventLabel:k||t.title.replace('tel:',''),};e(t,l)}
else if(r=='mailto'){l={hitType:'event',eventCategory:'mailto',eventAction:p||v,eventLabel:k||t.title.replace('mailto:',''),};e(t,l)}
else if(r=='internal-as-outbound'){l={hitType:'event',eventCategory:a,eventAction:p||v,eventLabel:k||t.title,};e(t,l)}
else if(r=='external'){l={hitType:'event',eventCategory:'outbound-link',eventAction:p||v,eventLabel:k||t.title,};e(t,l)}
else if(r=='cross-hostname'){l={hitType:'event',eventCategory:'cross-hostname',eventAction:p||v,eventLabel:k||t.title,};e(t,l)}
else{if(r&&r!='internal'){l={hitType:'event',eventCategory:r,eventAction:p||v,eventLabel:k||t.title,};e(t,l)}
else{t.exit='type';n(t)}}}
else{if(r!='cross-hostname'&&r!='external'&&r!='internal-as-outbound'){if(!i.defaultPrevented){if(i.preventDefault){i.preventDefault()}
else{i.returnValue=!1}}};if(r=='download'){l={hitType:'event',eventCategory:'download',eventAction:p||v,eventLabel:k||t.title,hitCallback:T,};e(t,l)}
else if(r=='internal-as-outbound'){window.onbeforeunload=function(n){if(!i.defaultPrevented){if(i.preventDefault){i.preventDefault()}
else{i.returnValue=!1}};l={hitType:'event',eventCategory:a,eventAction:p||v,eventLabel:k||t.title,hitCallback:T,};if(navigator.sendBeacon){l.transport='beacon'};e(t,l);setTimeout(T,1000)}}
else if(r=='external'){window.onbeforeunload=function(n){if(!i.defaultPrevented){if(i.preventDefault){i.preventDefault()}
else{i.returnValue=!1}};l={hitType:'event',eventCategory:'outbound-link',eventAction:p||v,eventLabel:k||t.title,hitCallback:T,};if(navigator.sendBeacon){l.transport='beacon'};e(t,l);setTimeout(T,1000)}}
else if(r=='cross-hostname'){window.onbeforeunload=function(n){if(!i.defaultPrevented){if(i.preventDefault){i.preventDefault()}
else{i.returnValue=!1}};l={hitType:'event',eventCategory:'cross-hostname',eventAction:p||v,eventLabel:k||t.title,hitCallback:T,};if(navigator.sendBeacon){l.transport='beacon'};e(t,l);setTimeout(T,1000)}}
else{if(r&&r!=='internal'){l={hitType:'event',eventCategory:r,eventAction:p||v,eventLabel:k||t.title,hitCallback:T,};e(t,l)}
else{t.exit='type';n(t)}};if(r!='external'&&r!='cross-hostname'&&r!='internal-as-outbound'){setTimeout(T,1000)}
else{if(r=='external'){setTimeout(L,1100)}
else if(r=='cross-hostname'){setTimeout(K,1100)}
else{setTimeout(O,1100)}}}}
else{t.exit='internal';n(t)}}
else{t.exit='notlink';n(t)}};var l=window.location.hash;function p(){if(monsterinsights_frontend.hash_tracking==='true'&&l!=window.location.hash){l=window.location.hash;__gaTracker('set','page',location.pathname+location.search+location.hash);__gaTracker('send','pageview');i('Hash change to: '+location.pathname+location.search+location.hash)}
else{i('Hash change to (untracked): '+location.pathname+location.search+location.hash)}};var r=window;if(r.addEventListener){r.addEventListener('load',function(){document.body.addEventListener('click',v,!1)},!1);window.addEventListener('hashchange',p,!1)}
else{if(r.attachEvent){r.attachEvent('onload',function(){document.body.attachEvent('onclick',v)});window.attachEvent('onhashchange',p)}};if(typeof String.prototype.endsWith!=='function'){String.prototype.endsWith=function(e){return this.indexOf(e,this.length-e.length)!==-1}};if(typeof String.prototype.startsWith!=='function'){String.prototype.startsWith=function(e){return this.indexOf(e)===0}};if(typeof Array.prototype.lastIndexOf!=='function'){Array.prototype.lastIndexOf=function(e){'use strict';if(this===void 0||this===null){throw new TypeError()};var t,n,a=Object(this),i=a.length>>>0;if(i===0){return-1};t=i-1;if(arguments.length>1){t=Number(arguments[1]);if(t!=t){t=0}
else if(t!=0&&t!=(1/0)&&t!=-(1/0)){t=(t>0||-1)*Math.floor(Math.abs(t))}};for(n=t>=0?Math.min(t,i-1):i-Math.abs(t);n>=0;n--){if(n in a&&a[n]===e){return n}};return-1}}},MonsterInsightsObject=new MonsterInsights();
jQuery(document).ready(function(){jQuery('.slider').flexslider();jQuery("<select />").appendTo(".topmenu");jQuery("<option />",{"selected":"selected","value":"","text":"Menu Selection"}).appendTo(".topmenu select");jQuery(".topmenu a").each(function(){var el=jQuery(this);jQuery("<option />",{"value":el.attr("href"),"text":el.text()}).appendTo(".topmenu select");});jQuery(".topmenu select").change(function(){window.location=jQuery(this).find("option:selected").val();});});
var demo_data={"loaded_skin":"black-white-2","loaded_transition":"shift"};
jQuery(document).ready(function($){$('.plop-inner').each(function(){$(this).height($(this).find('.plop-header').outerHeight()+$(this).find('.plop-content').outerHeight());});$('.plop-trigger').on('click',function(e){e.preventDefault();e.stopPropagation();var $target=$('#plop-'+$(this).data('plop-target'));if(!$target.hasClass('plop-active')){$target.find('.plop-inner').height($target.find('.plop-header').outerHeight()+$target.find('.plop-content').outerHeight());}
$target.toggleClass('plop-active');});$('.plop').on('click',function(e){$(this).removeClass('plop-active');});$('.plop').on('click','.plop-inner',function(e){e.stopPropagation();});});jQuery(document).ready(function($){if(!window.demo_data)return;var current_skin=window.demo_data.loaded_skin;var current_transition=window.demo_data.loaded_transition;var skin_prefix='makmenu-skin-';var trans_prefix='makmenu-transition-';var $menu=$('.makmenu-main, .makmenu-responsive-toggle-main');$('.makmenu-demo-switcher').on('click','.makmenu-demo-skin',function(){$menu.removeClass(skin_prefix+current_skin);$(this).siblings().removeClass('makmenu-demo-op-selected');$(this).addClass('makmenu-demo-op-selected');current_skin=$(this).data('skin');$menu.addClass(skin_prefix+current_skin);});$('.makmenu-demo-switcher').on('click','.makmenu-demo-transition',function(){$menu.removeClass(trans_prefix+current_transition);$(this).siblings().removeClass('makmenu-demo-op-selected');$(this).addClass('makmenu-demo-op-selected');current_transition=$(this).data('transition');console.log(current_transition);$menu.addClass(trans_prefix+current_transition);});$('.makmenu-demo-tabs').on('click','h5',function(){$(this).siblings().removeClass('demo-tab-active');$(this).addClass('demo-tab-active');$('.makmenu-demo-tab-panels').find('.makmenu-demo-tab-panel').hide();$('#'+$(this).data('target')).fadeIn();});$('.makmenu-demo-tabs > h5:first').click();});
var makmenu_data={"remove_conflicts":"off","reposition_on_load":"off","intent_delay":"300","intent_interval":"100","intent_threshold":"7","scrollto_offset":"50","scrollto_duration":"1000","responsive_breakpoint":"959","accessible":"on","retractor_display_strategy":"responsive","touch_off_close":"on","submenu_indicator_close_mobile":"on","collapse_after_scroll":"on","v":"3.6.1","configurations":["vertical","main"],"ajax_url":"","plugin_url":"","disable_mobile":"off","prefix_boost":"","aria_role_navigation":"off","aria_nav_label":"on","aria_expanded":"on","aria_hidden":"on","aria_controls":"","aria_responsive_toggle":"on","icon_tag":"i","theme_locations":{"primary":"Primary Navigation","topsub":"Top Sub Menu Navigation","sidebarone":"Sidebar Menu","rsm":"Responsive Select Menu"}};
'use strict';var uber_supports=function(){var d=document.createElement("div"),g=["Khtml","Ms","O","Moz","Webkit"];return function(k){var l=g.length;if(k in d.style)return!0;for(k=k.replace(/^[a-z]/,function(d){return d.toUpperCase()});l--;)if(g[l]+k in d.style)return!0;return!1}}();
function uber_op(d,g,k){if(!makmenu_data.hasOwnProperty(d))return k;d=makmenu_data[d];if(g.hasOwnProperty("datatype"))switch(g.datatype){case "numeric":d=parseInt(d);break;case "boolean":d="on"==d||1==d||"1"==d?!0:!1}return d}(function(d,g){var k=function(d,g,k){var f;return function(){var l=this,m=arguments;f?clearTimeout(f):k&&d.apply(l,m);f=setTimeout(function(){k||d.apply(l,m);f=null},g||100)}};jQuery.fn[g]=function(d){return d?this.bind("resize",k(d)):this.trigger(g)}})(jQuery,"ubersmartresize");
(function(d,g,k,l){function f(a,c){var b=this;this.element=a;this.$makmenu=d(this.element);this.orientation=this.$makmenu.hasClass("makmenu-vertical")?"v":"h";this.settings=d.extend({},p,c);this._defaults=p;this._name="makmenu";this.settings.responsive=this.$makmenu.hasClass("makmenu-responsive")?!0:!1;this.settings.debug&&this.settings.debug_onscreen&&(d("body").append('<div id="uber-onscreen-debug" style="color:#eee;z-index:10000;background:#222;position:fixed;left:0; bottom:0; width:100%; height:50%; padding:10px;overflow:scroll;"> '),
this.debug_target=d("#uber-onscreen-debug"),this.debug_target.on("click",function(){100>d(this).height()?d(this).height("50%"):d(this).height("50px")}));this.log("-- START makmenu DEBUG --");this.suppress_clicks=this.events_disabled=!1;(this.touchenabled="ontouchstart"in g||0<navigator.maxTouchPoints||0<navigator.msMaxTouchPoints)?this.$makmenu.addClass("makmenu-touch"):this.$makmenu.addClass("makmenu-notouch");g.navigator.pointerEnabled?(this.touchStart="pointerdown",this.touchEnd="pointerup",
this.touchMove="pointermove",this.suppress_clicks=!0):g.navigator.msPointerEnabled?(this.touchStart="MSPointerDown",this.touchEnd="MSPointerUp",this.touchMove="MSPointerMove",this.suppress_clicks=!0):(this.touchStart="touchstart",this.touchEnd="touchend",this.touchMove="touchmove");this.toggleevent="touchend"==this.touchEnd?this.touchEnd+" click":this.touchEnd;this.transitionend="transitionend.makmenu webkitTransitionEnd.makmenu msTransitionEnd.makmenu oTransitionEnd.makmenu";(this.transitions=
uber_supports("transition")&&!this.$makmenu.hasClass("makmenu-transition-none"))||this.$makmenu.addClass("makmenu-no-transitions");a=navigator.userAgent.toLowerCase();this.log(a);this.allow_trigger_overrides=!0;this.noTouchEnd=!1;c=this.settings.android=/android/.test(a);var e=this.settings.windowsmobile=/iemobile/.test(a);if(c||e)if(c&&!(/chrome/.test(a)||/firefox/.test(a)||/opera/.test(a))||e)this.settings.touchOffClose=!1,this.disableTransitions(),c&&!e&&(this.$makmenu.removeClass("makmenu-trigger-hover_intent").removeClass("makmenu-trigger-hover").addClass("makmenu-trigger-click"),
this.allow_trigger_overrides=this.settings.touchEvents=!1);e&&(this.log("disable touchoff close and accessibility"),this.settings.touchOffClose=!1,this.settings.accessible=!1,this.settings.mouseEvents=!1);!/chrome/.test(a)&&/safari/.test(a)&&/version\/5/.test(a)&&this.disableTransitions();var h=this.last_width=g.innerWidth,f=b.$makmenu.find(".makmenu-item-level-0.makmenu-align-right");f.length&&d(g).ubersmartresize(function(){h=g.innerWidth;b.last_width<=b.settings.breakpoint&&h>=b.settings.breakpoint&&
(f.hide(),f[0].offsetHeight,f.show());b.last_width=h});this.settings.clicktest&&(this.touchEnd="click");this.init()}var p={breakpoint:uber_op("responsive_breakpoint",{datatype:"numeric"},959),touchEvents:!0,mouseEvents:!0,retractors:!0,touchOffClose:uber_op("touch_off_close",{datatype:"boolean"},!0),submenuIndicatorCloseMobile:uber_op("submenu_indicator_close_mobile",{datatype:"boolean"},!0),moveThreshold:10,submenuAnimationDuration:500,ignoreDummies:!0,clicktest:!1,windowstest:!1,debug:!1,debug_onscreen:!1,
remove_conflicts:uber_op("remove_conflicts",{datatype:"boolean"},!0),reposition_on_load:uber_op("reposition_on_load",{datatype:"boolean"},!1),accessible:uber_op("accessible",{datatype:"boolean"},!0),retractor_display_strategy:uber_op("retractor_display_strategy",{datatype:"string"},"responsive"),intent_delay:uber_op("intent_delay",{datatype:"numeric"},300),intent_interval:uber_op("intent_interval",{datatype:"numeric"},100),intent_threshold:uber_op("intent_threshold",{datatype:"numeric"},300),scrollto_offset:uber_op("scrollto_offset",
{datatype:"numeric"},0),scrollto_duration:uber_op("scrollto_duration",{datatype:"numeric"},1E3),collapse_after_scroll:uber_op("collapse_after_scroll",{datatype:"boolean"},!0),aria_role_navigation:uber_op("aria_role_navigation",{datatype:"boolean"},!1),aria_nav_label:uber_op("aria_nav_label",{datatype:"boolean"},!1),aria_expanded:uber_op("aria_expanded",{datatype:"boolean"},!1),aria_hidden:uber_op("aria_hidden",{datatype:"boolean"},!1),aria_responsive_toggle:uber_op("aria_responsive_toggle",{datatype:"boolean"},
!1),icon_tag:uber_op("icon_tag",{datatype:"string"},"i")},q,r,m,n;f.prototype={init:function(){this.log("Initializing makmenu");this.$makmenu.removeClass("makmenu-nojs");this.removeConflicts();this.initializeSubmenuToggleTouchEvents();this.initializeSubmenuToggleMouseEvents();this.initializeRetractors();this.initializeResponsiveToggle();this.initializeTouchoffClose();this.initializeTabs();this.initializeSubmenuPositioning();this.initializeSegmentCurrentStates();this.initializeAccessibilityOnTab();
this.initializeAccessibilityStates();this.initializeImageLazyLoad()},removeConflicts:function(){this.settings.remove_conflicts&&this.$makmenu.find(".makmenu-item, .makmenu-target, .makmenu-submenu").add(this.$makmenu).removeAttr("style").unbind().off()},initializeAccessibilityStates:function(){this.settings.aria_role_navigation&&this.$makmenu.attr("role","navigation");this.settings.aria_nav_label&&this.$makmenu.attr("aria-label",this.$makmenu.find("> .makmenu-nav").attr("data-title"));this.settings.aria_expanded&&
this.$makmenu.find(".makmenu-item.makmenu-has-submenu-drop > .makmenu-target").attr("aria-expanded",!1);this.settings.aria_hidden&&this.$makmenu.find(".makmenu-submenu-drop").attr("aria-hidden",!0)},initializeAccessibilityOnTab:function(){if(this.settings.accessible){var a=this;d("body").on("keydown.makmenu",function(c){9==(c.keyCode||c.which)&&(d("body").off("keydown.makmenu"),a.initializeAccessibility())})}},initializeImageLazyLoad:function(){var a=this;d(".makmenu-item-level-0").one("makmenuopen",
function(){d(this).find(".makmenu-image-lazyload").each(function(){d(this).data("srcset")&&d(this).attr("srcset",d(this).data("srcset")).attr("sizes",d(this).data("sizes"));d(this).attr("src",d(this).data("src")).removeClass("makmenu-image-lazyload")});setTimeout(function(){a.clearTabSizes();a.sizeTabs()},300)})},initializeAccessibility:function(){var a=this;a.$current_focus=!1;a.mousedown=!1;a.$makmenu.addClass("makmenu-accessible");a.$makmenu.on("focus",".makmenu-target, a, input, select, textarea",
function(){if(!a.mousedown){var c=d(this);a.$current_focus=c;var b=c.parent(".makmenu-item");b.length&&(b.is(".makmenu-item-level-0")&&a.closeAllSubmenus(),b.is(".makmenu-has-submenu-drop")&&setTimeout(function(){c.is(":focus")&&(b.siblings(".makmenu-has-submenu-drop").each(function(){a.closeSubmenu(d(this),"umac",a)}),a.openSubmenu(b,"umac",a))},500),c.on("blur.makmenu",".makmenu-target, a, input, select, textarea",function(b){a.mousedown||(a.$current_focus=!1,d(this).off("blur.makmenu"),
setTimeout(function(){a.$current_focus||a.closeAllSubmenus()},500));a.mousedown=!1}))}a.mousedown=!1});a.$makmenu.on("focusout",function(){setTimeout(function(){d(k.activeElement).closest(a.$makmenu).length||a.closeAllSubmenus()},10)});a.$makmenu.find(".makmenu-item-level-0").on("keydown",function(c){switch(c.which){case 39:a.closeAllSubmenus();d(this).next().find(">.makmenu-target").focus();break;case 37:a.closeAllSubmenus();jQuery(this).prev().find(">.makmenu-target").focus();break;case 27:a.closeAllSubmenus()}});
a.$makmenu.on("mousedown",function(c){a.mousedown=!0;setTimeout(function(){a.mousedown=!1},100)})},initializeSubmenuPositioning:function(){var a=this;a.positionSubmenus();d(g).ubersmartresize(function(){a.positionSubmenus()});if(this.settings.reposition_on_load)d(g).on("load",function(){a.positionSubmenus()})},initializeSubmenuToggleTouchEvents:function(){if(this.settings.touchEvents){var a=this;this.$makmenu.on(this.touchStart,".makmenu-target:not(.shiftnav-toggle)",function(c){a.handleTouchInteraction(c,
this,a)});this.$makmenu.on("click",".makmenu-has-submenu-drop > .makmenu-target, .makmenu-tab.makmenu-item-has-children > .makmenu-target",function(c){a.handleClicks(c,this,a)})}},initializeSubmenuToggleMouseEvents:function(a){a=a||this;if(a.settings.mouseEvents&&!a.settings.clicktest&&!a.settings.windowstest){a.log("initializeSubmenuToggleMouseEvents");var c="hover";a.$makmenu.hasClass("makmenu-trigger-click")?c="click":a.$makmenu.hasClass("makmenu-trigger-hover_intent")&&(c="hover_intent");
"click"==c?this.suppress_clicks||(this.$makmenu.on("click.makmenu-submenu-toggle",".makmenu-item.makmenu-has-submenu-drop:not([data-makmenu-trigger]) > .makmenu-target",function(b){a.handleMouseClick(b,this,a)}),this.$makmenu.on("click.makmenu-click-target",".makmenu-item:not(.makmenu-has-submenu-drop):not([data-makmenu-trigger]) > .makmenu-target",function(b){a.handleLink(b,this,a)})):"hover_intent"==c?(this.$makmenu.on("mouseenter.mouse_intent",".makmenu-item.makmenu-has-submenu-drop:not([data-makmenu-trigger])",
function(b){a.handleMouseIntent(b,this,a)}),this.$makmenu.on("click.makmenu-click-target",".makmenu-item:not([data-makmenu-trigger]) > .makmenu-target",function(b){a.handleLink(b,this,a)})):(this.$makmenu.on("mouseenter.makmenu-submenu-toggle",".makmenu-item.makmenu-has-submenu-drop:not([data-makmenu-trigger]) > .makmenu-target",function(b){a.handleMouseover(b,this,a)}),this.$makmenu.on("click.makmenu-click-target",".makmenu-item:not([data-makmenu-trigger]) > .makmenu-target",function(b){a.handleLink(b,
this,a)}));if(this.allow_trigger_overrides)a.$makmenu.find(".makmenu-item[data-makmenu-trigger]").each(function(){var b=d(this);c=b.data("makmenu-trigger");if("click"==c){if(!this.suppress_clicks)b.on("click.makmenu-submenu-toggle","> .makmenu-target",function(b){a.handleMouseClick(b,this,a)})}else if("hover_intent"==c)b.on("mouseenter.mouse_intent",function(b){a.handleMouseIntent(b,this,a)});else b.on("mouseenter.makmenu-submenu-toggle","> .makmenu-target",function(b){a.handleMouseover(b,
this,a)})});else a.$makmenu.find(".makmenu-tab").on("click.makmenu-submenu-toggle",".makmenu-target",function(b){a.handleMouseClick(b,this,a)})}},disableSubmenuToggleMouseEvents:function(){this.log("disableSubmenuToggleMouseEvents");this.events_disabled=!0},reenableSubmenuToggleMouseEvents:function(a){a=a||this;a.log("reenableSubmenuToggleMouseEvents");a.events_disabled=!1},initializeRetractors:function(){if(this.settings.retractors){var a=this;this.$makmenu.on("click",".makmenu-retractor",
function(b){a.handleSubmenuRetractorEnd(b,this,a)});if(this.settings.touchEvents)this.$makmenu.on(this.touchStart,".makmenu-retractor",function(b){a.handleSubmenuRetractorStart(b,this,a)});this.touchenabled||"touch"!=a.settings.retractor_display_strategy||(this.$makmenu.find(".makmenu-retractor-mobile").remove(),this.$makmenu.find(".makmenu-submenu-retractor-top").removeClass("makmenu-submenu-retractor-top").removeClass("makmenu-submenu-retractor-top-2"));if(this.settings.submenuIndicatorCloseMobile){var c=
this.$makmenu.find(".makmenu-has-submenu-drop > .makmenu-target").append('<span class="makmenu-sub-indicator-close"><'+a.settings.icon_tag+' class="fas fa-times"></'+a.settings.icon_tag+"></span>").find(">.makmenu-sub-indicator-close");c.on("click",function(b){b.preventDefault();b.stopPropagation();a.closeSubmenuInstantly(d(this).closest(".makmenu-item"),"togglemakmenuSubmenuClosed",a);return!1});if(this.settings.touchEvents)c.on(this.touchStart,function(b){b.preventDefault();b.stopPropagation();
a.closeSubmenuInstantly(d(this).closest(".makmenu-item"),"togglemakmenuSubmenuClosed",a);return!1})}}},initializeResponsiveToggle:function(){var a=this,c=".makmenu-responsive-toggle[data-makmenu-target="+a.$makmenu.attr("id")+"], .makmenu-responsive-toggle[data-makmenu-target=_any_]",b=d(c);a.log("initializeResponsiveToggle "+this.toggleevent);if(a.settings.aria_responsive_toggle){b.attr("aria-hidden",g.innerWidth>a.settings.breakpoint);d(g).ubersmartresize(function(){b.attr("aria-hidden",
g.innerWidth>a.settings.breakpoint)});var e=b.hasClass("makmenu-responsive-toggle-open");b.attr("aria-expanded",e)}d(k).on(this.toggleevent,c,function(b){a.handleResponsiveToggle(b,this,a)});if(/Trident.*rv[ :]*11\./.test(navigator.userAgent))b.on("keypress",function(b){13!==b.keyCode&&32!==b.keyCode||a.handleResponsiveToggle(b,this,a)})},initializeTouchoffClose:function(){if(this.settings.touchOffClose){var a=this;d(k).on(this.touchStart+".makmenu_touchoff",function(c){a.handleTouchoffCloseStart(c,
this,a)});d(k).on(this.touchEnd+".makmenu_touchoff",function(c){a.handleTouchoffClose(c,this,"touch",a)});if(!this.suppress_clicks)d(k).on("mouseup.makmenu_clickoff",function(c){a.handleTouchoffClose(c,this,"click",a)})}},initializeTabs:function(){var a=this,c=a.settings.responsive&&g.innerWidth<=a.settings.breakpoint?!0:!1;a.$tab_blocks=a.$makmenu.find(".makmenu-tabs");a.$tab_blocks=d(a.$tab_blocks.get().reverse());d(g).on("load",function(){a.sizeTabs()});a.windowwidth=g.innerWidth;d(g).ubersmartresize(function(){a.oldwindowwidth=
a.windowwidth;a.windowwidth=g.innerWidth;a.windowwidth!=a.oldwindowwidth&&(a.clearTabSizes(a),a.sizeTabs(),a.checkActiveTabs(a))});a.$makmenu.find(".makmenu-item-level-0.makmenu-has-submenu-drop").on("makmenuopen.sizetabs",function(){d(this).off("makmenuopen.sizetabs");a.sizeTabs()});a.$makmenu.find(".makmenu-tabs.makmenu-tabs-dynamic-sizing").on("makmenuopen","> .makmenu-tabs-group > .makmenu-tab",function(){a.sizeTabsDynamic(d(this).closest(".makmenu-tabs"))});c||a.initializeActiveTab(a)},
checkActiveTabs:function(a){g.innerWidth<=a.settings.breakpoint?a.$tab_blocks.find(".makmenu-tab.makmenu-active").removeClass("makmenu-active"):a.initializeActiveTab(a)},initializeActiveTab:function(a){a.$tab_blocks.each(function(){var c=d(this).hasClass("makmenu-tabs-show-default"),b=d(this).hasClass("makmenu-tabs-show-current"),e=d(this).find("> .makmenu-tabs-group");if(!e.find("> .makmenu-tab.makmenu-active").length){var h=!1;b&&(e.find(".makmenu-current-menu-item").parentsUntil(e,".makmenu-tab:not( .makmenu-nocurrent )").addClass("makmenu-current-menu-ancestor"),
b=e.find("> .makmenu-tab.makmenu-current-menu-ancestor, > .makmenu-tab.makmenu-current-menu-item"),b.length&&(a.openSubmenu(b.first(),"tab current",a),h=!0));c&&!h&&0===e.find("> .makmenu-tab.makmenu-active").length&&a.openSubmenu(e.find("> .makmenu-tab").first(),"tab default",a)}})},clearTabSizes:function(a){(a||this).$makmenu.find(".makmenu-submenu , .makmenu-tabs , .makmenu-tab-content-panel , .makmenu-tabs-group").css("min-height","")},sizeTabs:function(){var a=this,c=a.settings.responsive&&
g.innerWidth<=a.settings.breakpoint?!0:!1;c||(a.initializeActiveTab(a),a.$tab_blocks.each(function(){var b=!1;!d(this).hasClass("makmenu-tab-layout-top")&&!d(this).hasClass("makmenu-tab-layout-bottom")||c||(b=!0);d(this).data("um-stacked",b);var e=0,b=c?d(this).parentsUntil(".makmenu").add(d(this).parents(".makmenu")):d(this).parentsUntil(".makmenu-item-level-0");b.addClass("makmenu-test-dimensions");var h;d(this).find(" > .makmenu-tabs-group > .makmenu-tab > .makmenu-tab-content-panel").each(function(){d(this).addClass("makmenu-test-dimensions");
h=d(this).outerHeight();h>e&&(e=h);d(this).data("um-oh",h);d(this).removeClass("makmenu-test-dimensions")});d(this).data("um-max-panel-height",e);d(this).hasClass("makmenu-tabs-dynamic-sizing")?a.sizeTabsDynamic(d(this),!1):a.sizeTabsMax(d(this));b.removeClass("makmenu-test-dimensions")}))},sizeTabsMax:function(a){var c=a.data("um-max-panel-height"),b=a.data("um-stacked"),d=a.find("> .makmenu-tabs-group");b?a.css("min-height",c+d.outerHeight()):(d.outerHeight()>c&&(c=a.outerHeight()),d.css("min-height",
c));d.find("> .makmenu-tab > .makmenu-tab-content-panel").css("min-height",c)},sizeTabsDynamic:function(a,c){c===l&&(c=!0);c&&(c=a.hasClass("makmenu-tabs-dynamic-sizing-animate"));if(!(this.settings.responsive&&g.innerWidth<=this.settings.breakpoint)){var b=a.data("um-stacked"),d=a.find("> .makmenu-tabs-group"),h=d.outerHeight();d.css("min-height","0");var f=d.find("> .makmenu-active > .makmenu-tab-content-panel"),k=f.data("um-oh"),k=d.outerHeight()>k?a.outerHeight():k;b?c?a.stop().animate({"min-height":k+
d.outerHeight()},300,"swing",function(){f.css("overflow","auto")}):a.css("min-height",k+d.outerHeight()):c?(d.css("min-height",h),d.stop().animate({"min-height":k},300,"swing",function(){f.css("overflow","auto")})):d.css("min-height",k)}},initializeSegmentCurrentStates:function(){this.$makmenu.find(".makmenu-current-menu-item").first().parents(".makmenu-item:not( .makmenu-nocurrent )").addClass("makmenu-current-menu-ancestor")},disableTransitions:function(){this.transitions=!1;this.$makmenu.removeClass("makmenu-transition-slide").removeClass("makmenu-transition-fade").removeClass("makmenu-transition-shift").addClass("makmenu-no-transitions").addClass("makmenu-transition-none")},
handleClicks:function(a,c,b){d(c).data("makmenu-killClick")&&(a.preventDefault(),b.log("killed click after touchend ",a))},handleTouchInteraction:function(a,c,b){a.stopPropagation();0<=a.type.indexOf("pointer")&&b.disableTransitions();c=d(c);c.parent().off("mouseleave.mouse_intent_none");b.log("touchstart "+a.type+" "+c.text(),a);c.on(b.touchEnd,function(a){b.handleTap(a,this,b)});c.on(b.touchMove,function(a){b.preventInteractionOnScroll(a,this,b)});a.originalEvent.touches?(c.data("makmenu-startX",
a.originalEvent.touches[0].clientX),c.data("makmenu-startY",a.originalEvent.touches[0].clientY)):a.originalEvent.clientY&&(c.offset(),c.data("makmenu-startX",a.originalEvent.clientX),c.data("makmenu-startY",a.originalEvent.clientY))},preventInteractionOnScroll:function(a,c,b){b.log("touchmove interaction "+a.type,a);c=d(c);if(a.originalEvent.touches)Math.abs(a.originalEvent.touches[0].clientX-c.data("makmenu-startX"))>b.settings.moveThreshold||Math.abs(a.originalEvent.touches[0].clientY-c.data("makmenu-startY"))>
b.settings.moveThreshold?(b.log("Preventing interaction on scroll, reset handlers (standard)"),b.resetHandlers(c,"preventScroll touches",b)):b.log("diff = "+Math.abs(a.originalEvent.touches[0].clientY-c.data("makmenu-startY")));else if(a.originalEvent.clientY){var e=c.data(e);Math.abs(a.originalEvent.clientX-c.data("makmenu-startX"))>b.settings.moveThreshold||Math.abs(a.originalEvent.clientY-c.data("makmenu-startY"))>b.settings.moveThreshold?(b.log("Preventing interaction on scroll, reset handlers (standard)"),
b.resetHandlers(c,"preventScroll client",b)):b.log("diff = "+a.originalEvent.clientY+" - "+c.data("makmenu-startY")+" = "+Math.abs(a.originalEvent.clientY-c.data("makmenu-startY")))}else b.log("no touch points found!")},handleTap:function(a,c,b){a.preventDefault();a.stopPropagation();var e=d(c);if(e.data("makmenu-killTouch"))b.log("kill tap"),a.preventDefault(),a.stopPropagation();else{var h=e.parent();b.log("handleTap ["+e.text()+"]",a.type);e.data("makmenu-killClick",!0);e.data("makmenu-killHover",
!0);setTimeout(function(){e.data("makmenu-killClick",!1).data("makmenu-killHover",!1)},1E3);b.closeSubmenuInstantly(h.siblings(".makmenu-active"));h.hasClass("makmenu-has-submenu-drop")?h.hasClass("makmenu-active")?((!h.hasClass("makmenu-tab")||g.innerWidth<=b.settings.breakpoint)&&b.closeSubmenu(h,"togglemakmenuActive",b),b.handleLink(a,c,b,!0)):b.openSubmenu(h,"toggle",b):b.handleLink(a,c,b,!0)}e.data("makmenu-killTouch",!1);b.resetHandlers(e,"handleTap",b)},handleLink:function(a,c,b,e){e=
e||!1;b.log("handleLink");var h=d(c);if(h.is("a")){var f=h.attr("href"),k=h.data("makmenu-scrolltarget");if(k){c=d(k).first();if(0<c.length){a.preventDefault();h.trigger("makmenuscrollto");a=h.parent(".makmenu-item");a.addClass("makmenu-current-menu-item");a.siblings().removeClass("makmenu-current-menu-item").removeClass("makmenu-current-menu-parent").removeClass("uberemnu-current-menu-ancestor");var l=!1;d("html,body").animate({scrollTop:c.offset().top-b.settings.scrollto_offset},b.settings.scrollto_duration,
"swing",function(){l||(b.closeSubmenu(h.closest(".makmenu-item-level-0"),"handeLink",b),b.settings.collapse_after_scroll&&!b.$makmenu.hasClass("makmenu-responsive-nocollapse")&&b.toggleMenuCollapse("toggle",!1,b),h.trigger("makmenuscrollto_complete"),l=!0)});return!1}f&&-1==f.indexOf("#")&&(-1==k.indexOf("#")&&(k="#"+k),g.location=f+k,a.preventDefault())}f?e&&a.isDefaultPrevented()&&(b.log("default prevented, follow link"),"_blank"==h.attr("target")?g.open(f,"_blank"):g.location=f):a.preventDefault()}},
handleMouseClick:function(a,c,b){b.log("handleMouseClick",a);var e=d(c);if(e.data("makmenu-killClick"))b.log("handleMouseClick: killClick");else{var h=e.parent(".makmenu-item");h.length&&(h.hasClass("makmenu-active")?(e.is("a")&&b.handleLink(a,c,b),h.hasClass("makmenu-tab")||b.closeSubmenu(h,"retract")):h.hasClass("makmenu-has-submenu-drop")&&(a.preventDefault(),b.closeSubmenuInstantly(h.siblings(".makmenu-active")),b.openSubmenu(h,"click",b)))}},handleMouseIntent:function(a,c,b){b.log("handleMouseIntent");
var e=d(c);e.data("mouse_intent_timer")&&e.data("mouse_intent_timer",clearTimeout(e.data("mouse_intent_timer")));var h=e.find(".makmenu-target");h.data("makmenu-killHover")?(b.log("killHover MouseIntent"),a.preventDefault(),a.stopPropagation()):(m=a.pageX,n=a.pageY,e.on("mousemove.mouse_intent",b.trackMouse),e.data("mouse_intent_timer",setTimeout(function(){b.compare(a,e,b.handleMouseIntentSuccess,b)},b.settings.intent_interval)),e.on("mouseleave.mouse_intent_none",function(){d(this).data("mouse_intent_timer",
clearTimeout(d(this).data("mouse_intent_timer")));e.data("mouse_intent_state",0);e.off("mouseleave.mouse_intent_none");h.data("makmenu-killHover")?(b.log("killHover MouseIntent_Cancel"),a.preventDefault(),a.stopPropagation()):b.closeSubmenu(e,"mouse_intent_cancel",b)}))},handleMouseIntentSuccess:function(a,c,b){b.log("handleMouseIntentSuccess");c.off("mouseleave.mouse_intent_none");var d=c.find(".makmenu-target");if(d.data("makmenu-killHover"))b.log("Kill hover on IntentSuccess"),a.preventDefault(),
a.stopPropagation();else if(d.data("makmenu-killHover",!1),b.triggerSubmenu(a,c,b),!c.hasClass("makmenu-tab")||g.innerWidth<=b.settings.breakpoint)c.on("mouseleave.mouse_intent",function(a){b.handleMouseIntentLeave(a,this,b)})},handleMouseIntentLeave:function(a,c,b){var e=d(c);e.data("mouse_intent_timer")&&e.data("mouse_intent_timer",clearTimeout(e.data("mouse_intent_timer")));e.off("mousemove.mouse_intent",b.trackMouse);1==e.data("mouse_intent_state")&&e.data("mouse_intent_timer",setTimeout(function(){b.delayMouseLeave(a,
e,b.handleMouseIntentLeaveSuccess,b)},b.settings.intent_delay))},handleMouseIntentLeaveSuccess:function(a,c,b){c.off("mouseleave.mouse_intent");c.find("> .makmenu-target").data("makmenu-killHover")||b.closeSubmenu(c,"mouse_intent_leave",b)},delayMouseLeave:function(a,c,b,d){c.data("mouse_intent_timer",clearTimeout(c.data("mouse_intent_timer")));c.data("mouse_intent_state",0);return b.apply(c,[a,c,d])},trackMouse:function(a){q=a.pageX;r=a.pageY},compare:function(a,c,b,d){c.data("mouse_intent_timer",
clearTimeout(c.data("mouse_intent_timer")));if(Math.abs(m-q)+Math.abs(n-r)<d.settings.intent_threshold)return c.off("mousemove.mouse_intent",d.track),c.data("mouse_intent_state",1),b.apply(c,[a,c,d]);m=q;n=r;c.data("mouse_intent_timer",setTimeout(function(){d.compare(a,c,b,d)},d.settings.intent_interval))},triggerSubmenu:function(a,c,b){b.closeSubmenuInstantly(c.siblings(".makmenu-active, .makmenu-in-transition"));b.openSubmenu(c,"mouseenter",b)},handleMouseover:function(a,c,b){if(!b.events_disabled){var e=
d(c);e.data("makmenu-killTouch",!0);setTimeout(function(){e.data("makmenu-killTouch",!1)},1E3);b.log("handleMouseenter, add mouseleave",a);c=e.parent(".makmenu-item");if(c.length&&!c.hasClass("makmenu-active")&&(b.triggerSubmenu(a,c,b),!c.hasClass("makmenu-tab")||g.innerWidth<=b.settings.breakpoint))c.on("mouseleave.makmenu-submenu-toggle",function(a){b.handleMouseleave(a,this,b)})}},handleMouseleave:function(a,c,b){b.log("handleMouseleave, remove mouseleave",a);d(c).off("mouseleave.makmenu-submenu-toggle");
b.closeSubmenu(d(c),"mouseout")},handleSubmenuRetractorStart:function(a,c,b){a.preventDefault();a.stopPropagation();d(c).on(b.touchEnd,function(a){b.handleSubmenuRetractorEnd(a,this,b)});b.log("handleSubmenuRetractorStart "+d(c).text())},handleSubmenuRetractorEnd:function(a,c,b){a.preventDefault();a.stopPropagation();a=d(c).closest(".makmenu-item");b.closeSubmenu(a,"handleSubmenuRetractor");d(c).off(b.touchEnd);b.log("handleSubmenuRetractorEnd "+a.find("> .makmenu-target").text());return!1},handleResponsiveToggle:function(a,
c,b){b.log("handleResponsiveToggle "+a.type,a);a.preventDefault();a.stopPropagation();if("touchend"==a.type)b.$makmenu.data("makmenu-prevent-click",!0),setTimeout(function(){b.$makmenu.data("makmenu-prevent-click",!1)},500);else if("click"==a.type&&b.$makmenu.data("makmenu-prevent-click")){b.$makmenu.data("makmenu-prevent-click",!1);return}b.toggleMenuCollapse("toggle",c,b)},handleTouchoffCloseStart:function(a,c,b){b.touchoffclosestart=d(g).scrollTop()},handleTouchoffClose:function(a,c,b,
e){d(a.target).closest(".makmenu").length||"click"!=b&&e.touchoffclosestart!=d(g).scrollTop()||(e.log("touchoff close ",a),e.closeAllSubmenus()&&(e.disableSubmenuToggleMouseEvents(),g.setTimeout(function(){e.reenableSubmenuToggleMouseEvents(e)},e.settings.submenuAnimationDuration)))},toggleMenuCollapse:function(a,c,b){b=b||this;c=c||".makmenu-resposive-toggle";c="object"==typeof c?d(c):d(c+'[data-makmenu-target="'+b.$makmenu.attr("id")+'"]');a=a||"toggle";"toggle"==a&&(a=b.$makmenu.hasClass("makmenu-responsive-collapse")?
"open":"close");"open"==a?(b.$makmenu.removeClass("makmenu-responsive-collapse"),c.trigger("makmenutoggledopen"),c.toggleClass("makmenu-responsive-toggle-open"),b.settings.aria_responsive_toggle&&c.attr("aria-expanded",!0)):(b.$makmenu.addClass("makmenu-responsive-collapse"),c.trigger("makmenutoggledclose"),c.toggleClass("makmenu-responsive-toggle-open"),b.settings.aria_responsive_toggle&&c.attr("aria-expanded",!1));b.transitions&&!b.$makmenu.hasClass("makmenu-responsive-nocollapse")&&(b.$makmenu.addClass("makmenu-in-transition"),
b.$makmenu.on(b.transitionend+"_togglemakmenu",function(){b.$makmenu.removeClass("makmenu-in-transition");b.$makmenu.off(b.transitionend+"_togglemakmenu")}))},positionSubmenus:function(){var a=this;"h"==a.orientation&&a.$makmenu.find(".makmenu-submenu-drop.makmenu-submenu-align-center").each(function(){var c=d(this).parent(".makmenu-item"),b=d(this);if(a.$makmenu.hasClass("makmenu-bound"))var e=c.closest(".makmenu , .makmenu-submenu");else if(a.$makmenu.hasClass("makmenu-bound-inner"))e=
c.closest(".makmenu-nav , .makmenu-submenu");else{var h=c.closest(".makmenu-submenu");0===h.length?(e=a.$makmenu.offsetParent())||(e=d("body")):e=h}var h=b.outerWidth(),f=c.outerWidth(),g=c.offset().left,c=e.width();e=e.offset().left;f=g+f/2-(e+h/2);f=0<f?f:0;h>c?f=(h-c)/-2:f+h>c&&(b.css({right:0,left:"auto"}),f=!1);!1!==f&&b.css("left",f)})},openSubmenu:function(a,c,b){b=b||this;b.log("Open Submenu "+c);a.hasClass("makmenu-active")||(a.addClass("makmenu-active"),b.settings.aria_expanded&&a.find(">.makmenu-target").attr("aria-expanded",
"true"),b.settings.aria_hidden&&a.find(">.makmenu-submenu").attr("aria-hidden","false"),b.transitions&&(a.addClass("makmenu-in-transition"),a.find("> .makmenu-submenu").on(b.transitionend+"_opensubmenu",function(){b.log("finished submenu open transition");a.removeClass("makmenu-in-transition");d(this).off(b.transitionend+"_opensubmenu")})),a.trigger("makmenuopen"))},closeSubmenu:function(a,c,b){b=b||this;b.log("closeSubmenu "+a.find(">a").text()+" ["+c+"]");a.hasClass("makmenu-item-has-children")&&
a.hasClass("makmenu-active")&&(b.transitions&&a.addClass("makmenu-in-transition"),a.each(function(){var a=d(this),c=a.find("> .makmenu-submenu");if(b.transitions)c.on(b.transitionend+"_closesubmenu",function(){b.log("finished submenu close transition");a.removeClass("makmenu-in-transition");c.off(b.transitionend+"_closesubmenu")})}));a.removeClass("makmenu-active");a.trigger("makmenuclose");b.settings.aria_expanded&&a.find(">.makmenu-target").attr("aria-expanded","false");b.settings.aria_hidden&&
a.find(">.makmenu-submenu").attr("aria-hidden","true")},closeSubmenuInstantly:function(a){0!==a.length&&(a.addClass("makmenu-notransition"),a.removeClass("makmenu-active").removeClass("makmenu-in-transition"),a[0].offsetHeight,a.removeClass("makmenu-notransition"),a.trigger("makmenuclose"),this.settings.aria_expanded&&a.find(">.makmenu-target,>.makmenu-submenu").attr("aria-expanded","false"),this.settings.aria_hidden&&a.find(">.makmenu-submenu").attr("aria-hidden","true"))},closeAllSubmenus:function(){var a=
this.$makmenu.find(".makmenu-item-level-0.makmenu-active");a.length&&this.closeSubmenuInstantly(a);return a.length},resetHandlers:function(a,c,b){b.log("ResetHandlers: "+c);a.off(this.touchEnd);a.off(this.touchMove);a=a.parent();a.off("mousemove.mouse_intent");a.off("mouseleave.mouse_intent_none");a.data("mouse_intent_timer",clearTimeout(a.data("mouse_intent_timer")));a.data("mouse_intent_state",0)},log:function(a,c,b){b=b||this;b.settings.debug&&(b.settings.debug_onscreen?this.debug_target.prepend('<div class="um-debug-content">'+
a+"</div>"):console.log(a,c))}};d.fn.makmenu=function(a){var c=arguments;if(a===l||"object"===typeof a)return this.each(function(){d.data(this,"plugin_makmenu")||d.data(this,"plugin_makmenu",new f(this,a))});if("string"===typeof a&&"_"!==a[0]&&"init"!==a){var b;this.each(function(){var e=d.data(this,"plugin_makmenu");e instanceof f&&"function"===typeof e[a]&&(b=e[a].apply(e,Array.prototype.slice.call(c,1)));"destroy"===a&&d.data(this,"plugin_makmenu",null)});return b!==l?b:this}}})(jQuery,window,
document);
(function(d){function g(g){k||(k=!0,"undefined"!=typeof console&&"window.load"==g&&console.log("Notice: makmenu initialized via "+g+".  This indicates that an unrelated error on the site prevented it from loading via the normal document ready event."),"."==window.location.hash.substring(1,2)?(g=d("body").find(window.location.hash.substring(1)),g.length&&(window.scrollTo(0,g.offset().top-makmenu_data.scrollto_offset),d(".makmenu").find('.makmenu-target[data-makmenu-scrolltarget="'+window.location.hash.substring(1)+'"]').parent().addClass("makmenu-current-menu-item"))):
window.location.hash.length&&setTimeout(function(){try{var f=d("body").find(window.location.hash);f.length&&(window.scrollTo(0,f.offset().top-makmenu_data.scrollto_offset),d(".makmenu").find('.makmenu-target[data-makmenu-scrolltarget="'+window.location.hash+'"]').parent().addClass("makmenu-current-menu-item"))}catch(p){}},100),d(".makmenu-item:empty").each(function(){var f=d(this).parent();d(this).remove();0==f.find(".makmenu-item").length&&(f.parent().removeClass("makmenu-has-submenu-drop").removeClass("makmenu-has-submenu-flyout").off().find(".makmenu-target > .makmenu-sub-indicator").remove(),
f.remove())}),d(".makmenu-submenu:empty").each(function(){var f=d(this).parent("li");f.removeClass("makmenu-has-submenu-drop");f.find(".makmenu-sub-indicator").remove()}),d("#wp-admin-bar-makmenu_loading").remove(),d(".makmenu").makmenu({}).trigger("makmenuinit"),d(".makmenu-submenu .makmenu-search-input-autofocus").closest(".makmenu-has-submenu-drop").on("makmenuopen",function(){var f=d(this).find(".makmenu-submenu .makmenu-search-input");f.length&&setTimeout(function(){f[0].focus()},
250)}),"undefined"!==typeof google&&"undefined"!==typeof google.maps&&"undefined"!==typeof google.maps.LatLng&&d(".makmenu-map-canvas").each(function(){var f=d(this),g=f.attr("data-zoom")?parseInt(f.attr("data-zoom")):8,k=f.attr("data-lat")?new google.maps.LatLng(f.attr("data-lat"),f.attr("data-lng")):new google.maps.LatLng(40.7143528,-74.0059731),l=new google.maps.Map(this,{zoom:g,mapTypeId:google.maps.MapTypeId.ROADMAP,center:k});f.attr("data-address")?(new google.maps.Geocoder).geocode({address:f.attr("data-address")},
function(a,c){c==google.maps.GeocoderStatus.OK&&(l.setCenter(a[0].geometry.location),k=a[0].geometry.location,new google.maps.Marker({map:l,position:a[0].geometry.location,title:f.attr("data-mapTitle")}))}):new google.maps.Marker({map:l,position:k,title:f.attr("data-mapTitle")});var m=d(this).closest(".makmenu-has-submenu-drop"),n=function(){google.maps.event.trigger(l,"resize");l.setCenter(k);l.setZoom(g);m.off("makmenuopen",n)};m.on("makmenuopen",n)}))}var k=!1;jQuery(function(d){g("document.ready")});
d(window).on("load",function(){g("window.load")})})(jQuery);function makmenu_openMega(d){jQuery(".makmenu").makmenu("openSubmenu",jQuery(d))}function makmenu_openFlyout(d){jQuery(".makmenu").makmenu("openSubmenu",jQuery(d))}function makmenu_close(d){jQuery(".makmenu").makmenu("closeSubmenu",jQuery(d))}function makmenu_redrawSubmenus(){jQuery(".makmenu").makmenu("positionSubmenus")};
var makmenu_sticky_settings=[];
'use strict';jQuery(document).ready(function(b){if(makmenu_sticky_settings)for(var a in makmenu_sticky_settings)if(makmenu_sticky_settings.hasOwnProperty(a)){var f=1==makmenu_sticky_settings[a].is_sticky?!0:!1,g=b(".makmenu-"+a),e=b(".makmenu-responsive-toggle-"+a);g.find("> .makmenu-nav");g.add(e);1==makmenu_sticky_settings[a].is_mobile&&g.addClass("makmenu-is-mobile");if(f){if(f="on"==makmenu_sticky_settings[a].full_width_menu_bar?!0:!1)g.addClass("makmenu-sticky-full-width"),e.addClass("makmenu-sticky-full-width");
if(!f){var l=g.filter(".makmenu-bar-align-full");l.each(function(){b(this).css("width",b(this).parent().width())});e.each(function(){b(this).css("width",b(this).parent().width())});b(window).ubersmartresize(function(){l.each(function(){b(this).css("width",b(this).parent().width())});e.each(function(){b(this).css("width",b(this).parent().width())})})}e.css("height",e.outerHeight());makmenu_sticky_settings[a].permanent||(f=makmenu_sticky_settings[a].sticky_offset?makmenu_sticky_settings[a].sticky_offset:
0,g.sticky({topSpacing:f,className:"makmenu-sticky",wrapperClassName:"makmenu-sticky-wrapper"}),g.on("sticky-start sticky-end",function(){setTimeout(function(){g.makmenu("positionSubmenus")},100)}),e.sticky({topSpacing:f,className:"makmenu-sticky",wrapperClassName:"makmenu-sticky-toggle-wrapper"}))}}});
(function(b){var a={topSpacing:0,bottomSpacing:0,className:"is-sticky",wrapperClassName:"sticky-wrapper",center:!1,getWidthFrom:""},f=b(window),g=b(document),e=[],l=f.height(),p=function(){for(var b=f.scrollTop(),h=g.height(),n=h-l,n=b>n?n-b:0,d=0;d<e.length;d++){var c=e[d],a=c.stickyWrapper.offset().top-c.topSpacing-n;b<=a?null!==c.currentTop&&(c.stickyElement.css("position","").css("top",""),c.stickyElement.removeClass(c.className),c.stickyElement.trigger("sticky-end",[c]).parent().removeClass(c.className),
c.currentTop=null):(a=h-c.stickyElement.outerHeight()-c.topSpacing-c.bottomSpacing-b-n,a=0>a?a+c.topSpacing:c.topSpacing,c.currentTop!=a&&(c.stickyElement.css("position","fixed").css("top",a),c.stickyElement.trigger("sticky-start",[c]).parent().addClass(c.className),c.stickyElement.addClass(c.className),c.currentTop=a))}},q=function(){l=f.height()},k={init:function(m){var h=b.extend({},a,m);return this.each(function(){var a=b(this),d=a.attr("id");d||(d=a.data("makmenu-target")+"-toggle");d=b("<div></div>").attr("id",
d+"-sticky-wrapper").addClass(h.wrapperClassName);a.wrapAll(d);h.center&&a.parent().css({width:a.outerWidth(),marginLeft:"auto",marginRight:"auto"});"right"==a.css("float")&&a.css({"float":"none"}).parent().css({"float":"right"});d=a.parent();d.css("min-height",a.outerHeight());e.push({topSpacing:h.topSpacing,bottomSpacing:h.bottomSpacing,stickyElement:a,currentTop:null,stickyWrapper:d,className:h.className,getWidthFrom:h.getWidthFrom})})},update:p,unstick:function(a){return this.each(function(){for(var a=
b(this),m=-1,d=0;d<e.length;d++)e[d].stickyElement.get(0)==a.get(0)&&(m=d);-1!=m&&(e.splice(m,1),a.unwrap(),a.removeAttr("style"))})}};window.addEventListener?(window.addEventListener("scroll",p,!1),window.addEventListener("resize",q,!1)):window.attachEvent&&(window.attachEvent("onscroll",p),window.attachEvent("onresize",q));b.fn.sticky=function(a){if(k[a])return k[a].apply(this,Array.prototype.slice.call(arguments,1));if("object"!==typeof a&&a)b.error("Method "+a+" does not exist on jQuery.sticky");
else return k.init.apply(this,arguments)};b.fn.unstick=function(a){if(k[a])return k[a].apply(this,Array.prototype.slice.call(arguments,1));if("object"!==typeof a&&a)b.error("Method "+a+" does not exist on jQuery.sticky");else return k.unstick.apply(this,arguments)};b(function(){setTimeout(p,0)})})(jQuery);
/*! This file is auto-generated */
window.addComment=function(s){var u,f,v,y=s.document,p={commentReplyClass:"comment-reply-link",cancelReplyId:"cancel-comment-reply-link",commentFormId:"commentform",temporaryFormId:"wp-temp-form-div",parentIdFieldId:"comment_parent",postIdFieldId:"comment_post_ID"},e=s.MutationObserver||s.WebKitMutationObserver||s.MozMutationObserver,i="querySelector"in y&&"addEventListener"in s,n=!!y.documentElement.dataset;function t(){r(),function(){if(!e)return;new e(d).observe(y.body,{childList:!0,subtree:!0})}()}function r(e){if(i&&(u=I(p.cancelReplyId),f=I(p.commentFormId),u)){u.addEventListener("touchstart",a),u.addEventListener("click",a);var t=function(e){if((e.metaKey||e.ctrlKey)&&13===e.keyCode)return f.removeEventListener("keydown",t),e.preventDefault(),f.submit.click(),!1};f&&f.addEventListener("keydown",t);for(var n,r=function(e){var t,n=p.commentReplyClass;e&&e.childNodes||(e=y);t=y.getElementsByClassName?e.getElementsByClassName(n):e.querySelectorAll("."+n);return t}(e),d=0,o=r.length;d<o;d++)(n=r[d]).addEventListener("touchstart",l),n.addEventListener("click",l)}}function a(e){var t=I(p.temporaryFormId);t&&v&&(I(p.parentIdFieldId).value="0",t.parentNode.replaceChild(v,t),this.style.display="none",e.preventDefault())}function l(e){var t=this,n=m(t,"belowelement"),r=m(t,"commentid"),d=m(t,"respondelement"),o=m(t,"postid");n&&r&&d&&o&&!1===s.addComment.moveForm(n,r,d,o)&&e.preventDefault()}function d(e){for(var t=e.length;t--;)if(e[t].addedNodes.length)return void r()}function m(e,t){return n?e.dataset[t]:e.getAttribute("data-"+t)}function I(e){return y.getElementById(e)}return i&&"loading"!==y.readyState?t():i&&s.addEventListener("DOMContentLoaded",t,!1),{init:r,moveForm:function(e,t,n,r){var d=I(e);v=I(n);var o,i,a,l=I(p.parentIdFieldId),m=I(p.postIdFieldId);if(d&&v&&l){!function(e){var t=p.temporaryFormId,n=I(t);if(n)return;(n=y.createElement("div")).id=t,n.style.display="none",e.parentNode.insertBefore(n,e)}(v),r&&m&&(m.value=r),l.value=t,u.style.display="",d.parentNode.insertBefore(v,d.nextSibling),u.onclick=function(){return!1};try{for(var c=0;c<f.elements.length;c++)if(o=f.elements[c],i=!1,"getComputedStyle"in s?a=s.getComputedStyle(o):y.documentElement.currentStyle&&(a=o.currentStyle),(o.offsetWidth<=0&&o.offsetHeight<=0||"hidden"===a.visibility)&&(i=!0),"hidden"!==o.type&&!o.disabled&&!i){o.focus();break}}catch(e){}return!1}}}}(window);
var wpcf7={"apiSettings":{"root":"","namespace":""},"cached":"1"};
(function($){'use strict';if(typeof wpcf7==='undefined'||wpcf7===null){return;}
wpcf7=$.extend({cached:0,inputs:[]},wpcf7);$(function(){wpcf7.supportHtml5=(function(){var features={};var input=document.createElement('input');features.placeholder='placeholder'in input;var inputTypes=['email','url','tel','number','range','date'];$.each(inputTypes,function(index,value){input.setAttribute('type',value);features[value]=input.type!=='text';});return features;})();$('div.wpcf7 > form').each(function(){var $form=$(this);wpcf7.initForm($form);if(wpcf7.cached){wpcf7.refill($form);}});});wpcf7.getId=function(form){return parseInt($('input[name="_wpcf7"]',form).val(),10);};wpcf7.initForm=function(form){var $form=$(form);$form.submit(function(event){if(!wpcf7.supportHtml5.placeholder){$('[placeholder].placeheld',$form).each(function(i,n){$(n).val('').removeClass('placeheld');});}
if(typeof window.FormData==='function'){wpcf7.submit($form);event.preventDefault();}});$('.wpcf7-submit',$form).after('<span class="ajax-loader"></span>');wpcf7.toggleSubmit($form);$form.on('click','.wpcf7-acceptance',function(){wpcf7.toggleSubmit($form);});$('.wpcf7-exclusive-checkbox',$form).on('click','input:checkbox',function(){var name=$(this).attr('name');$form.find('input:checkbox[name="'+name+'"]').not(this).prop('checked',false);});$('.wpcf7-list-item.has-free-text',$form).each(function(){var $freetext=$(':input.wpcf7-free-text',this);var $wrap=$(this).closest('.wpcf7-form-control');if($(':checkbox, :radio',this).is(':checked')){$freetext.prop('disabled',false);}else{$freetext.prop('disabled',true);}
$wrap.on('change',':checkbox, :radio',function(){var $cb=$('.has-free-text',$wrap).find(':checkbox, :radio');if($cb.is(':checked')){$freetext.prop('disabled',false).focus();}else{$freetext.prop('disabled',true);}});});if(!wpcf7.supportHtml5.placeholder){$('[placeholder]',$form).each(function(){$(this).val($(this).attr('placeholder'));$(this).addClass('placeheld');$(this).focus(function(){if($(this).hasClass('placeheld')){$(this).val('').removeClass('placeheld');}});$(this).blur(function(){if(''===$(this).val()){$(this).val($(this).attr('placeholder'));$(this).addClass('placeheld');}});});}
if(wpcf7.jqueryUi&&!wpcf7.supportHtml5.date){$form.find('input.wpcf7-date[type="date"]').each(function(){$(this).datepicker({dateFormat:'yy-mm-dd',minDate:new Date($(this).attr('min')),maxDate:new Date($(this).attr('max'))});});}
if(wpcf7.jqueryUi&&!wpcf7.supportHtml5.number){$form.find('input.wpcf7-number[type="number"]').each(function(){$(this).spinner({min:$(this).attr('min'),max:$(this).attr('max'),step:$(this).attr('step')});});}
$('.wpcf7-character-count',$form).each(function(){var $count=$(this);var name=$count.attr('data-target-name');var down=$count.hasClass('down');var starting=parseInt($count.attr('data-starting-value'),10);var maximum=parseInt($count.attr('data-maximum-value'),10);var minimum=parseInt($count.attr('data-minimum-value'),10);var updateCount=function(target){var $target=$(target);var length=$target.val().length;var count=down?starting-length:length;$count.attr('data-current-value',count);$count.text(count);if(maximum&&maximum<length){$count.addClass('too-long');}else{$count.removeClass('too-long');}
if(minimum&&length<minimum){$count.addClass('too-short');}else{$count.removeClass('too-short');}};$(':input[name="'+name+'"]',$form).each(function(){updateCount(this);$(this).keyup(function(){updateCount(this);});});});$form.on('change','.wpcf7-validates-as-url',function(){var val=$.trim($(this).val());if(val&&!val.match(/^[a-z][a-z0-9.+-]*:/i)&&-1!==val.indexOf('.')){val=val.replace(/^\/+/,'');val='http://'+val;}
$(this).val(val);});};wpcf7.submit=function(form){if(typeof window.FormData!=='function'){return;}
var $form=$(form);$('.ajax-loader',$form).addClass('is-active');wpcf7.clearResponse($form);var formData=new FormData($form.get(0));var detail={id:$form.closest('div.wpcf7').attr('id'),status:'init',inputs:[],formData:formData};$.each($form.serializeArray(),function(i,field){if('_wpcf7'==field.name){detail.contactFormId=field.value;}else if('_wpcf7_version'==field.name){detail.pluginVersion=field.value;}else if('_wpcf7_locale'==field.name){detail.contactFormLocale=field.value;}else if('_wpcf7_unit_tag'==field.name){detail.unitTag=field.value;}else if('_wpcf7_container_post'==field.name){detail.containerPostId=field.value;}else if(field.name.match(/^_wpcf7_\w+_free_text_/)){var owner=field.name.replace(/^_wpcf7_\w+_free_text_/,'');detail.inputs.push({name:owner+'-free-text',value:field.value});}else if(field.name.match(/^_/)){}else{detail.inputs.push(field);}});wpcf7.triggerEvent($form.closest('div.wpcf7'),'beforesubmit',detail);var ajaxSuccess=function(data,status,xhr,$form){detail.id=$(data.into).attr('id');detail.status=data.status;detail.apiResponse=data;var $message=$('.wpcf7-response-output',$form);switch(data.status){case'validation_failed':$.each(data.invalidFields,function(i,n){$(n.into,$form).each(function(){wpcf7.notValidTip(this,n.message);$('.wpcf7-form-control',this).addClass('wpcf7-not-valid');$('[aria-invalid]',this).attr('aria-invalid','true');});});$message.addClass('wpcf7-validation-errors');$form.addClass('invalid');wpcf7.triggerEvent(data.into,'invalid',detail);break;case'acceptance_missing':$message.addClass('wpcf7-acceptance-missing');$form.addClass('unaccepted');wpcf7.triggerEvent(data.into,'unaccepted',detail);break;case'spam':$message.addClass('wpcf7-spam-blocked');$form.addClass('spam');wpcf7.triggerEvent(data.into,'spam',detail);break;case'aborted':$message.addClass('wpcf7-aborted');$form.addClass('aborted');wpcf7.triggerEvent(data.into,'aborted',detail);break;case'mail_sent':$message.addClass('wpcf7-mail-sent-ok');$form.addClass('sent');wpcf7.triggerEvent(data.into,'mailsent',detail);break;case'mail_failed':$message.addClass('wpcf7-mail-sent-ng');$form.addClass('failed');wpcf7.triggerEvent(data.into,'mailfailed',detail);break;default:var customStatusClass='custom-'
+data.status.replace(/[^0-9a-z]+/i,'-');$message.addClass('wpcf7-'+customStatusClass);$form.addClass(customStatusClass);}
wpcf7.refill($form,data);wpcf7.triggerEvent(data.into,'submit',detail);if('mail_sent'==data.status){$form.each(function(){this.reset();});wpcf7.toggleSubmit($form);}
if(!wpcf7.supportHtml5.placeholder){$form.find('[placeholder].placeheld').each(function(i,n){$(n).val($(n).attr('placeholder'));});}
$message.html('').append(data.message).slideDown('fast');$message.attr('role','alert');$('.screen-reader-response',$form.closest('.wpcf7')).each(function(){var $response=$(this);$response.html('').attr('role','').append(data.message);if(data.invalidFields){var $invalids=$('<ul></ul>');$.each(data.invalidFields,function(i,n){if(n.idref){var $li=$('<li></li>').append($('<a></a>').attr('href','#'+n.idref).append(n.message));}else{var $li=$('<li></li>').append(n.message);}
$invalids.append($li);});$response.append($invalids);}
$response.attr('role','alert').focus();});};$.ajax({type:'POST',url:wpcf7.apiSettings.getRoute('/contact-forms/'+wpcf7.getId($form)+'/feedback'),data:formData,dataType:'json',processData:false,contentType:false}).done(function(data,status,xhr){ajaxSuccess(data,status,xhr,$form);$('.ajax-loader',$form).removeClass('is-active');}).fail(function(xhr,status,error){var $e=$('<div class="ajax-error"></div>').text(error.message);$form.after($e);});};wpcf7.triggerEvent=function(target,name,detail){var $target=$(target);var event=new CustomEvent('wpcf7'+name,{bubbles:true,detail:detail});$target.get(0).dispatchEvent(event);$target.trigger('wpcf7:'+name,detail);$target.trigger(name+'.wpcf7',detail);};wpcf7.toggleSubmit=function(form,state){var $form=$(form);var $submit=$('input:submit',$form);if(typeof state!=='undefined'){$submit.prop('disabled',!state);return;}
if($form.hasClass('wpcf7-acceptance-as-validation')){return;}
$submit.prop('disabled',false);$('.wpcf7-acceptance',$form).each(function(){var $span=$(this);var $input=$('input:checkbox',$span);if(!$span.hasClass('optional')){if($span.hasClass('invert')&&$input.is(':checked')||!$span.hasClass('invert')&&!$input.is(':checked')){$submit.prop('disabled',true);return false;}}});};wpcf7.notValidTip=function(target,message){var $target=$(target);$('.wpcf7-not-valid-tip',$target).remove();$('<span role="alert" class="wpcf7-not-valid-tip"></span>').text(message).appendTo($target);if($target.is('.use-floating-validation-tip *')){var fadeOut=function(target){$(target).not(':hidden').animate({opacity:0},'fast',function(){$(this).css({'z-index':-100});});};$target.on('mouseover','.wpcf7-not-valid-tip',function(){fadeOut(this);});$target.on('focus',':input',function(){fadeOut($('.wpcf7-not-valid-tip',$target));});}};wpcf7.refill=function(form,data){var $form=$(form);var refillCaptcha=function($form,items){$.each(items,function(i,n){$form.find(':input[name="'+i+'"]').val('');$form.find('img.wpcf7-captcha-'+i).attr('src',n);var match=/([0-9]+)\.(png|gif|jpeg)$/.exec(n);$form.find('input:hidden[name="_wpcf7_captcha_challenge_'+i+'"]').attr('value',match[1]);});};var refillQuiz=function($form,items){$.each(items,function(i,n){$form.find(':input[name="'+i+'"]').val('');$form.find(':input[name="'+i+'"]').siblings('span.wpcf7-quiz-label').text(n[0]);$form.find('input:hidden[name="_wpcf7_quiz_answer_'+i+'"]').attr('value',n[1]);});};if(typeof data==='undefined'){$.ajax({type:'GET',url:wpcf7.apiSettings.getRoute('/contact-forms/'+wpcf7.getId($form)+'/refill'),beforeSend:function(xhr){var nonce=$form.find(':input[name="_wpnonce"]').val();if(nonce){xhr.setRequestHeader('X-WP-Nonce',nonce);}},dataType:'json'}).done(function(data,status,xhr){if(data.captcha){refillCaptcha($form,data.captcha);}
if(data.quiz){refillQuiz($form,data.quiz);}});}else{if(data.captcha){refillCaptcha($form,data.captcha);}
if(data.quiz){refillQuiz($form,data.quiz);}}};wpcf7.clearResponse=function(form){var $form=$(form);$form.removeClass('invalid spam sent failed');$form.siblings('.screen-reader-response').html('').attr('role','');$('.wpcf7-not-valid-tip',$form).remove();$('[aria-invalid]',$form).attr('aria-invalid','false');$('.wpcf7-form-control',$form).removeClass('wpcf7-not-valid');$('.wpcf7-response-output',$form).hide().empty().removeAttr('role').removeClass('wpcf7-mail-sent-ok wpcf7-mail-sent-ng wpcf7-validation-errors wpcf7-spam-blocked');};wpcf7.apiSettings.getRoute=function(path){var url=wpcf7.apiSettings.root;url=url.replace(wpcf7.apiSettings.namespace,wpcf7.apiSettings.namespace+path);return url;};})(jQuery);(function(){if(typeof window.CustomEvent==="function")return false;function CustomEvent(event,params){params=params||{bubbles:false,cancelable:false,detail:undefined};var evt=document.createEvent('CustomEvent');evt.initCustomEvent(event,params.bubbles,params.cancelable,params.detail);return evt;}
CustomEvent.prototype=window.Event.prototype;window.CustomEvent=CustomEvent;})();
(function(){function t(e){this.path=e;var t=this.path.split("."),n=t.slice(0,t.length-1).join("."),r=t[t.length-1];this.at_2x_path=n+"@2x."+r}function n(e){this.el=e,this.path=new t(this.el.getAttribute("src"));var n=this;this.path.check_2x_variant(function(e){e&&n.swap()})}var e=typeof exports=="undefined"?window:exports;e.RetinaImagePath=t,t.confirmed_paths=[],t.prototype.is_external=function(){return!!this.path.match(/^https?\:/i)&&!this.path.match("//"+document.domain)},t.prototype.check_2x_variant=function(e){var n,r=this;if(this.is_external())return e(!1);if(this.at_2x_path in t.confirmed_paths)return e(!0);n=new XMLHttpRequest,n.open("HEAD",this.at_2x_path),n.onreadystatechange=function(){return n.readyState!=4?e(!1):n.status>=200&&n.status<=399?(t.confirmed_paths.push(r.at_2x_path),e(!0)):e(!1)},n.send()},e.RetinaImage=n,n.prototype.swap=function(e){function n(){t.el.complete?(t.el.setAttribute("width",t.el.offsetWidth),t.el.setAttribute("height",t.el.offsetHeight),t.el.setAttribute("src",e)):setTimeout(n,5)}typeof e=="undefined"&&(e=this.path.at_2x_path);var t=this;n()},!1&&(window.onload=function(){var e=document.getElementsByTagName("img"),t=[],r,i;for(r=0;r<e.length;r++)i=e[r],t.push(new n(i))})})();
jQuery.easing['jswing']=jQuery.easing['swing'];jQuery.extend(jQuery.easing,{def:'easeOutQuad',swing:function(x,t,b,c,d){return jQuery.easing[jQuery.easing.def](x,t,b,c,d);},easeInQuad:function(x,t,b,c,d){return c*(t/=d)*t+b;},easeOutQuad:function(x,t,b,c,d){return-c*(t/=d)*(t-2)+b;},easeInOutQuad:function(x,t,b,c,d){if((t/=d/2)<1)return c/2*t*t+b;return-c/2*((--t)*(t-2)-1)+b;},easeInCubic:function(x,t,b,c,d){return c*(t/=d)*t*t+b;},easeOutCubic:function(x,t,b,c,d){return c*((t=t/d-1)*t*t+1)+b;},easeInOutCubic:function(x,t,b,c,d){if((t/=d/2)<1)return c/2*t*t*t+b;return c/2*((t-=2)*t*t+2)+b;},easeInQuart:function(x,t,b,c,d){return c*(t/=d)*t*t*t+b;},easeOutQuart:function(x,t,b,c,d){return-c*((t=t/d-1)*t*t*t-1)+b;},easeInOutQuart:function(x,t,b,c,d){if((t/=d/2)<1)return c/2*t*t*t*t+b;return-c/2*((t-=2)*t*t*t-2)+b;},easeInQuint:function(x,t,b,c,d){return c*(t/=d)*t*t*t*t+b;},easeOutQuint:function(x,t,b,c,d){return c*((t=t/d-1)*t*t*t*t+1)+b;},easeInOutQuint:function(x,t,b,c,d){if((t/=d/2)<1)return c/2*t*t*t*t*t+b;return c/2*((t-=2)*t*t*t*t+2)+b;},easeInSine:function(x,t,b,c,d){return-c*Math.cos(t/d*(Math.PI/2))+c+b;},easeOutSine:function(x,t,b,c,d){return c*Math.sin(t/d*(Math.PI/2))+b;},easeInOutSine:function(x,t,b,c,d){return-c/2*(Math.cos(Math.PI*t/d)-1)+b;},easeInExpo:function(x,t,b,c,d){return(t==0)?b:c*Math.pow(2,10*(t/d-1))+b;},easeOutExpo:function(x,t,b,c,d){return(t==d)?b+c:c*(-Math.pow(2,-10*t/d)+1)+b;},easeInOutExpo:function(x,t,b,c,d){if(t==0)return b;if(t==d)return b+c;if((t/=d/2)<1)return c/2*Math.pow(2,10*(t-1))+b;return c/2*(-Math.pow(2,-10*--t)+2)+b;},easeInCirc:function(x,t,b,c,d){return-c*(Math.sqrt(1-(t/=d)*t)-1)+b;},easeOutCirc:function(x,t,b,c,d){return c*Math.sqrt(1-(t=t/d-1)*t)+b;},easeInOutCirc:function(x,t,b,c,d){if((t/=d/2)<1)return-c/2*(Math.sqrt(1-t*t)-1)+b;return c/2*(Math.sqrt(1-(t-=2)*t)+1)+b;},easeInElastic:function(x,t,b,c,d){var s=1.70158;var p=0;var a=c;if(t==0)return b;if((t/=d)==1)return b+c;if(!p)p=d*.3;if(a<Math.abs(c)){a=c;var s=p/4;}
else var s=p/(2*Math.PI)*Math.asin(c/a);return-(a*Math.pow(2,10*(t-=1))*Math.sin((t*d-s)*(2*Math.PI)/p))+b;},easeOutElastic:function(x,t,b,c,d){var s=1.70158;var p=0;var a=c;if(t==0)return b;if((t/=d)==1)return b+c;if(!p)p=d*.3;if(a<Math.abs(c)){a=c;var s=p/4;}
else var s=p/(2*Math.PI)*Math.asin(c/a);return a*Math.pow(2,-10*t)*Math.sin((t*d-s)*(2*Math.PI)/p)+c+b;},easeInOutElastic:function(x,t,b,c,d){var s=1.70158;var p=0;var a=c;if(t==0)return b;if((t/=d/2)==2)return b+c;if(!p)p=d*(.3*1.5);if(a<Math.abs(c)){a=c;var s=p/4;}
else var s=p/(2*Math.PI)*Math.asin(c/a);if(t<1)return-.5*(a*Math.pow(2,10*(t-=1))*Math.sin((t*d-s)*(2*Math.PI)/p))+b;return a*Math.pow(2,-10*(t-=1))*Math.sin((t*d-s)*(2*Math.PI)/p)*.5+c+b;},easeInBack:function(x,t,b,c,d,s){if(s==undefined)s=1.70158;return c*(t/=d)*t*((s+1)*t-s)+b;},easeOutBack:function(x,t,b,c,d,s){if(s==undefined)s=1.70158;return c*((t=t/d-1)*t*((s+1)*t+s)+1)+b;},easeInOutBack:function(x,t,b,c,d,s){if(s==undefined)s=1.70158;if((t/=d/2)<1)return c/2*(t*t*(((s*=(1.525))+1)*t-s))+b;return c/2*((t-=2)*t*(((s*=(1.525))+1)*t+s)+2)+b;},easeInBounce:function(x,t,b,c,d){return c-jQuery.easing.easeOutBounce(x,d-t,0,c,d)+b;},easeOutBounce:function(x,t,b,c,d){if((t/=d)<(1/2.75)){return c*(7.5625*t*t)+b;}else if(t<(2/2.75)){return c*(7.5625*(t-=(1.5/2.75))*t+.75)+b;}else if(t<(2.5/2.75)){return c*(7.5625*(t-=(2.25/2.75))*t+.9375)+b;}else{return c*(7.5625*(t-=(2.625/2.75))*t+.984375)+b;}},easeInOutBounce:function(x,t,b,c,d){if(t<d/2)return jQuery.easing.easeInBounce(x,t*2,0,c,d)*.5+b;return jQuery.easing.easeOutBounce(x,t*2-d,0,c,d)*.5+c*.5+b;}});;
(function($){$.fn.hoverIntent=function(f,g){var cfg={sensitivity:7,interval:100,timeout:0};cfg=$.extend(cfg,g?{over:f,out:g}:f);var cX,cY,pX,pY;var track=function(ev){cX=ev.pageX;cY=ev.pageY;};var compare=function(ev,ob){ob.hoverIntent_t=clearTimeout(ob.hoverIntent_t);if((Math.abs(pX-cX)+Math.abs(pY-cY))<cfg.sensitivity){$(ob).unbind("mousemove",track);ob.hoverIntent_s=1;return cfg.over.apply(ob,[ev]);}else{pX=cX;pY=cY;ob.hoverIntent_t=setTimeout(function(){compare(ev,ob);},cfg.interval);}};var delay=function(ev,ob){ob.hoverIntent_t=clearTimeout(ob.hoverIntent_t);ob.hoverIntent_s=0;return cfg.out.apply(ob,[ev]);};var handleHover=function(e){var p=(e.type=="mouseover"?e.fromElement:e.toElement)||e.relatedTarget;while(p&&p!=this){try{p=p.parentNode;}catch(e){p=this;}}
if(p==this){return false;}
var ev=jQuery.extend({},e);var ob=this;if(ob.hoverIntent_t){ob.hoverIntent_t=clearTimeout(ob.hoverIntent_t);}
if(e.type=="mouseover"){pX=ev.pageX;pY=ev.pageY;$(ob).bind("mousemove",track);if(ob.hoverIntent_s!=1){ob.hoverIntent_t=setTimeout(function(){compare(ev,ob);},cfg.interval);}}else{$(ob).unbind("mousemove",track);if(ob.hoverIntent_s==1){ob.hoverIntent_t=setTimeout(function(){delay(ev,ob);},cfg.timeout);}}};return this.mouseover(handleHover).mouseout(handleHover);};})(jQuery);
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('(7($){$.H($.2L,{17:7(d){l(!6.F){d&&d.2q&&2T.1z&&1z.52("3y 3p, 4L\'t 17, 64 3y");8}p c=$.19(6[0],\'v\');l(c){8 c}c=2w $.v(d,6[0]);$.19(6[0],\'v\',c);l(c.q.3x){6.3s("1w, 3i").1o(".4E").3e(7(){c.3b=w});l(c.q.35){6.3s("1w, 3i").1o(":2s").3e(7(){c.1Z=6})}6.2s(7(b){l(c.q.2q)b.5J();7 1T(){l(c.q.35){l(c.1Z){p a=$("<1w 1V=\'5r\'/>").1s("u",c.1Z.u).33(c.1Z.Z).51(c.U)}c.q.35.V(c,c.U);l(c.1Z){a.3D()}8 N}8 w}l(c.3b){c.3b=N;8 1T()}l(c.L()){l(c.1b){c.1l=w;8 N}8 1T()}12{c.2l();8 N}})}8 c},J:7(){l($(6[0]).2W(\'L\')){8 6.17().L()}12{p b=w;p a=$(6[0].L).17();6.P(7(){b&=a.I(6)});8 b}},4D:7(c){p d={},$I=6;$.P(c.1I(/\\s/),7(a,b){d[b]=$I.1s(b);$I.6d(b)});8 d},1i:7(h,k){p f=6[0];l(h){p i=$.19(f.L,\'v\').q;p d=i.1i;p c=$.v.36(f);23(h){1e"1d":$.H(c,$.v.1X(k));d[f.u]=c;l(k.G)i.G[f.u]=$.H(i.G[f.u],k.G);31;1e"3D":l(!k){T d[f.u];8 c}p e={};$.P(k.1I(/\\s/),7(a,b){e[b]=c[b];T c[b]});8 e}}p g=$.v.41($.H({},$.v.3Y(f),$.v.3V(f),$.v.3T(f),$.v.36(f)),f);l(g.15){p j=g.15;T g.15;g=$.H({15:j},g)}8 g}});$.H($.5p[":"],{5n:7(a){8!$.1p(""+a.Z)},5g:7(a){8!!$.1p(""+a.Z)},5f:7(a){8!a.4h}});$.v=7(b,a){6.q=$.H(w,{},$.v.3d,b);6.U=a;6.3I()};$.v.W=7(c,b){l(R.F==1)8 7(){p a=$.3F(R);a.4V(c);8 $.v.W.1Q(6,a)};l(R.F>2&&b.2c!=3B){b=$.3F(R).4Q(1)}l(b.2c!=3B){b=[b]}$.P(b,7(i,n){c=c.1u(2w 3t("\\\\{"+i+"\\\\}","g"),n)});8 c};$.H($.v,{3d:{G:{},2a:{},1i:{},1c:"3r",28:"J",2F:"4P",2l:w,3o:$([]),2D:$([]),3x:w,3l:[],3k:N,4O:7(a){6.3U=a;l(6.q.4K&&!6.4J){6.q.1K&&6.q.1K.V(6,a,6.q.1c,6.q.28);6.1M(a).2A()}},4C:7(a){l(!6.1E(a)&&(a.u 11 6.1a||!6.K(a))){6.I(a)}},6c:7(a){l(a.u 11 6.1a||a==6.4A){6.I(a)}},68:7(a){l(a.u 11 6.1a)6.I(a);12 l(a.4x.u 11 6.1a)6.I(a.4x)},39:7(a,c,b){$(a).22(c).2v(b)},1K:7(a,c,b){$(a).2v(c).22(b)}},63:7(a){$.H($.v.3d,a)},G:{15:"61 4r 2W 15.",1q:"M 2O 6 4r.",1J:"M O a J 1J 5X.",1B:"M O a J 5W.",1A:"M O a J 1A.",2j:"M O a J 1A (5Q).",1G:"M O a J 1G.",1P:"M O 5O 1P.",2f:"M O a J 5L 5I 1G.",2o:"M O 47 5F Z 5B.",43:"M O a Z 5z a J 5x.",18:$.v.W("M O 3K 5v 2X {0} 2V."),1y:$.v.W("M O 5t 5s {0} 2V."),2i:$.v.W("M O a Z 3W {0} 3O {1} 2V 5o."),2r:$.v.W("M O a Z 3W {0} 3O {1}."),1C:$.v.W("M O a Z 5j 2X 46 3M 3L {0}."),1t:$.v.W("M O a Z 5d 2X 46 3M 3L {0}.")},3J:N,5a:{3I:7(){6.24=$(6.q.2D);6.4t=6.24.F&&6.24||$(6.U);6.2x=$(6.q.3o).1d(6.q.2D);6.1a={};6.54={};6.1b=0;6.1h={};6.1f={};6.21();p f=(6.2a={});$.P(6.q.2a,7(d,c){$.P(c.1I(/\\s/),7(a,b){f[b]=d})});p e=6.q.1i;$.P(e,7(b,a){e[b]=$.v.1X(a)});7 2N(a){p b=$.19(6[0].L,"v"),3c="4W"+a.1V.1u(/^17/,"");b.q[3c]&&b.q[3c].V(b,6[0])}$(6.U).2K(":3E, :4U, :4T, 2e, 4S","2d 2J 4R",2N).2K(":3C, :3A, 2e, 3z","3e",2N);l(6.q.3w)$(6.U).2I("1f-L.17",6.q.3w)},L:7(){6.3v();$.H(6.1a,6.1v);6.1f=$.H({},6.1v);l(!6.J())$(6.U).3u("1f-L",[6]);6.1m();8 6.J()},3v:7(){6.2H();Q(p i=0,14=(6.2b=6.14());14[i];i++){6.29(14[i])}8 6.J()},I:7(a){a=6.2G(a);6.4A=a;6.2P(a);6.2b=$(a);p b=6.29(a);l(b){T 6.1f[a.u]}12{6.1f[a.u]=w}l(!6.3q()){6.13=6.13.1d(6.2x)}6.1m();8 b},1m:7(b){l(b){$.H(6.1v,b);6.S=[];Q(p c 11 b){6.S.27({1j:b[c],I:6.26(c)[0]})}6.1n=$.3n(6.1n,7(a){8!(a.u 11 b)})}6.q.1m?6.q.1m.V(6,6.1v,6.S):6.3m()},2S:7(){l($.2L.2S)$(6.U).2S();6.1a={};6.2H();6.2Q();6.14().2v(6.q.1c)},3q:7(){8 6.2k(6.1f)},2k:7(a){p b=0;Q(p i 11 a)b++;8 b},2Q:7(){6.2C(6.13).2A()},J:7(){8 6.3j()==0},3j:7(){8 6.S.F},2l:7(){l(6.q.2l){3Q{$(6.3h()||6.S.F&&6.S[0].I||[]).1o(":4N").3g().4M("2d")}3f(e){}}},3h:7(){p a=6.3U;8 a&&$.3n(6.S,7(n){8 n.I.u==a.u}).F==1&&a},14:7(){p a=6,2B={};8 $([]).1d(6.U.14).1o(":1w").1L(":2s, :21, :4I, [4H]").1L(6.q.3l).1o(7(){!6.u&&a.q.2q&&2T.1z&&1z.3r("%o 4G 3K u 4F",6);l(6.u 11 2B||!a.2k($(6).1i()))8 N;2B[6.u]=w;8 w})},2G:7(a){8 $(a)[0]},2z:7(){8 $(6.q.2F+"."+6.q.1c,6.4t)},21:7(){6.1n=[];6.S=[];6.1v={};6.1k=$([]);6.13=$([]);6.2b=$([])},2H:7(){6.21();6.13=6.2z().1d(6.2x)},2P:7(a){6.21();6.13=6.1M(a)},29:7(d){d=6.2G(d);l(6.1E(d)){d=6.26(d.u)[0]}p a=$(d).1i();p c=N;Q(Y 11 a){p b={Y:Y,2n:a[Y]};3Q{p f=$.v.1N[Y].V(6,d.Z.1u(/\\r/g,""),d,b.2n);l(f=="1S-1Y"){c=w;6g}c=N;l(f=="1h"){6.13=6.13.1L(6.1M(d));8}l(!f){6.4B(d,b);8 N}}3f(e){6.q.2q&&2T.1z&&1z.6f("6e 6b 6a 69 I "+d.4z+", 29 47 \'"+b.Y+"\' Y",e);67 e;}}l(c)8;l(6.2k(a))6.1n.27(d);8 w},4y:7(a,b){l(!$.1H)8;p c=6.q.3a?$(a).1H()[6.q.3a]:$(a).1H();8 c&&c.G&&c.G[b]},4w:7(a,b){p m=6.q.G[a];8 m&&(m.2c==4v?m:m[b])},4u:7(){Q(p i=0;i<R.F;i++){l(R[i]!==20)8 R[i]}8 20},2u:7(a,b){8 6.4u(6.4w(a.u,b),6.4y(a,b),!6.q.3k&&a.62||20,$.v.G[b],"<4s>60: 5Z 1j 5Y Q "+a.u+"</4s>")},4B:7(b,a){p c=6.2u(b,a.Y),37=/\\$?\\{(\\d+)\\}/g;l(1g c=="7"){c=c.V(6,a.2n,b)}12 l(37.16(c)){c=1F.W(c.1u(37,\'{$1}\'),a.2n)}6.S.27({1j:c,I:b});6.1v[b.u]=c;6.1a[b.u]=c},2C:7(a){l(6.q.2t)a=a.1d(a.4q(6.q.2t));8 a},3m:7(){Q(p i=0;6.S[i];i++){p a=6.S[i];6.q.39&&6.q.39.V(6,a.I,6.q.1c,6.q.28);6.2E(a.I,a.1j)}l(6.S.F){6.1k=6.1k.1d(6.2x)}l(6.q.1x){Q(p i=0;6.1n[i];i++){6.2E(6.1n[i])}}l(6.q.1K){Q(p i=0,14=6.4p();14[i];i++){6.q.1K.V(6,14[i],6.q.1c,6.q.28)}}6.13=6.13.1L(6.1k);6.2Q();6.2C(6.1k).4o()},4p:7(){8 6.2b.1L(6.4n())},4n:7(){8 $(6.S).4m(7(){8 6.I})},2E:7(a,c){p b=6.1M(a);l(b.F){b.2v().22(6.q.1c);b.1s("4l")&&b.4k(c)}12{b=$("<"+6.q.2F+"/>").1s({"Q":6.34(a),4l:w}).22(6.q.1c).4k(c||"");l(6.q.2t){b=b.2A().4o().5V("<"+6.q.2t+"/>").4q()}l(!6.24.5S(b).F)6.q.4j?6.q.4j(b,$(a)):b.5R(a)}l(!c&&6.q.1x){b.3E("");1g 6.q.1x=="1D"?b.22(6.q.1x):6.q.1x(b)}6.1k=6.1k.1d(b)},1M:7(a){p b=6.34(a);8 6.2z().1o(7(){8 $(6).1s(\'Q\')==b})},34:7(a){8 6.2a[a.u]||(6.1E(a)?a.u:a.4z||a.u)},1E:7(a){8/3C|3A/i.16(a.1V)},26:7(d){p c=6.U;8 $(4i.5P(d)).4m(7(a,b){8 b.L==c&&b.u==d&&b||4g})},1O:7(a,b){23(b.4f.4e()){1e\'2e\':8 $("3z:3p",b).F;1e\'1w\':l(6.1E(b))8 6.26(b.u).1o(\':4h\').F}8 a.F},4d:7(b,a){8 6.32[1g b]?6.32[1g b](b,a):w},32:{"5N":7(b,a){8 b},"1D":7(b,a){8!!$(b,a.L).F},"7":7(b,a){8 b(a)}},K:7(a){8!$.v.1N.15.V(6,$.1p(a.Z),a)&&"1S-1Y"},4c:7(a){l(!6.1h[a.u]){6.1b++;6.1h[a.u]=w}},4b:7(a,b){6.1b--;l(6.1b<0)6.1b=0;T 6.1h[a.u];l(b&&6.1b==0&&6.1l&&6.L()){$(6.U).2s();6.1l=N}12 l(!b&&6.1b==0&&6.1l){$(6.U).3u("1f-L",[6]);6.1l=N}},2h:7(a){8 $.19(a,"2h")||$.19(a,"2h",{2M:4g,J:w,1j:6.2u(a,"1q")})}},1R:{15:{15:w},1J:{1J:w},1B:{1B:w},1A:{1A:w},2j:{2j:w},4a:{4a:w},1G:{1G:w},49:{49:w},1P:{1P:w},2f:{2f:w}},48:7(a,b){a.2c==4v?6.1R[a]=b:$.H(6.1R,a)},3V:7(b){p a={};p c=$(b).1s(\'5H\');c&&$.P(c.1I(\' \'),7(){l(6 11 $.v.1R){$.H(a,$.v.1R[6])}});8 a},3T:7(c){p a={};p d=$(c);Q(Y 11 $.v.1N){p b=d.1s(Y);l(b){a[Y]=b}}l(a.18&&/-1|5G|5C/.16(a.18)){T a.18}8 a},3Y:7(a){l(!$.1H)8{};p b=$.19(a.L,\'v\').q.3a;8 b?$(a).1H()[b]:$(a).1H()},36:7(b){p a={};p c=$.19(b.L,\'v\');l(c.q.1i){a=$.v.1X(c.q.1i[b.u])||{}}8 a},41:7(d,e){$.P(d,7(c,b){l(b===N){T d[c];8}l(b.2R||b.2p){p a=w;23(1g b.2p){1e"1D":a=!!$(b.2p,e.L).F;31;1e"7":a=b.2p.V(e,e);31}l(a){d[c]=b.2R!==20?b.2R:w}12{T d[c]}}});$.P(d,7(a,b){d[a]=$.44(b)?b(e):b});$.P([\'1y\',\'18\',\'1t\',\'1C\'],7(){l(d[6]){d[6]=2Z(d[6])}});$.P([\'2i\',\'2r\'],7(){l(d[6]){d[6]=[2Z(d[6][0]),2Z(d[6][1])]}});l($.v.3J){l(d.1t&&d.1C){d.2r=[d.1t,d.1C];T d.1t;T d.1C}l(d.1y&&d.18){d.2i=[d.1y,d.18];T d.1y;T d.18}}l(d.G){T d.G}8 d},1X:7(a){l(1g a=="1D"){p b={};$.P(a.1I(/\\s/),7(){b[6]=w});a=b}8 a},5A:7(c,a,b){$.v.1N[c]=a;$.v.G[c]=b!=20?b:$.v.G[c];l(a.F<3){$.v.48(c,$.v.1X(c))}},1N:{15:7(c,d,a){l(!6.4d(a,d))8"1S-1Y";23(d.4f.4e()){1e\'2e\':p b=$(d).33();8 b&&b.F>0;1e\'1w\':l(6.1E(d))8 6.1O(c,d)>0;5y:8 $.1p(c).F>0}},1q:7(f,h,j){l(6.K(h))8"1S-1Y";p g=6.2h(h);l(!6.q.G[h.u])6.q.G[h.u]={};g.40=6.q.G[h.u].1q;6.q.G[h.u].1q=g.1j;j=1g j=="1D"&&{1B:j}||j;l(g.2M!==f){g.2M=f;p k=6;6.4c(h);p i={};i[h.u]=f;$.2U($.H(w,{1B:j,3Z:"2Y",3X:"17"+h.u,5w:"5u",19:i,1x:7(d){k.q.G[h.u].1q=g.40;p b=d===w;l(b){p e=k.1l;k.2P(h);k.1l=e;k.1n.27(h);k.1m()}12{p a={};p c=(g.1j=d||k.2u(h,"1q"));a[h.u]=$.44(c)?c(f):c;k.1m(a)}g.J=b;k.4b(h,b)}},j));8"1h"}12 l(6.1h[h.u]){8"1h"}8 g.J},1y:7(b,c,a){8 6.K(c)||6.1O($.1p(b),c)>=a},18:7(b,c,a){8 6.K(c)||6.1O($.1p(b),c)<=a},2i:7(b,d,a){p c=6.1O($.1p(b),d);8 6.K(d)||(c>=a[0]&&c<=a[1])},1t:7(b,c,a){8 6.K(c)||b>=a},1C:7(b,c,a){8 6.K(c)||b<=a},2r:7(b,c,a){8 6.K(c)||(b>=a[0]&&b<=a[1])},1J:7(a,b){8 6.K(b)||/^((([a-z]|\\d|[!#\\$%&\'\\*\\+\\-\\/=\\?\\^X`{\\|}~]|[\\E-\\B\\C-\\x\\A-\\y])+(\\.([a-z]|\\d|[!#\\$%&\'\\*\\+\\-\\/=\\?\\^X`{\\|}~]|[\\E-\\B\\C-\\x\\A-\\y])+)*)|((\\3S)((((\\2m|\\1W)*(\\30\\3R))?(\\2m|\\1W)+)?(([\\3P-\\5q\\45\\42\\5D-\\5E\\3N]|\\5m|[\\5l-\\5k]|[\\5i-\\5K]|[\\E-\\B\\C-\\x\\A-\\y])|(\\\\([\\3P-\\1W\\45\\42\\30-\\3N]|[\\E-\\B\\C-\\x\\A-\\y]))))*(((\\2m|\\1W)*(\\30\\3R))?(\\2m|\\1W)+)?(\\3S)))@((([a-z]|\\d|[\\E-\\B\\C-\\x\\A-\\y])|(([a-z]|\\d|[\\E-\\B\\C-\\x\\A-\\y])([a-z]|\\d|-|\\.|X|~|[\\E-\\B\\C-\\x\\A-\\y])*([a-z]|\\d|[\\E-\\B\\C-\\x\\A-\\y])))\\.)+(([a-z]|[\\E-\\B\\C-\\x\\A-\\y])|(([a-z]|[\\E-\\B\\C-\\x\\A-\\y])([a-z]|\\d|-|\\.|X|~|[\\E-\\B\\C-\\x\\A-\\y])*([a-z]|[\\E-\\B\\C-\\x\\A-\\y])))\\.?$/i.16(a)},1B:7(a,b){8 6.K(b)||/^(5h?|5M):\\/\\/(((([a-z]|\\d|-|\\.|X|~|[\\E-\\B\\C-\\x\\A-\\y])|(%[\\1U-f]{2})|[!\\$&\'\\(\\)\\*\\+,;=]|:)*@)?(((\\d|[1-9]\\d|1\\d\\d|2[0-4]\\d|25[0-5])\\.(\\d|[1-9]\\d|1\\d\\d|2[0-4]\\d|25[0-5])\\.(\\d|[1-9]\\d|1\\d\\d|2[0-4]\\d|25[0-5])\\.(\\d|[1-9]\\d|1\\d\\d|2[0-4]\\d|25[0-5]))|((([a-z]|\\d|[\\E-\\B\\C-\\x\\A-\\y])|(([a-z]|\\d|[\\E-\\B\\C-\\x\\A-\\y])([a-z]|\\d|-|\\.|X|~|[\\E-\\B\\C-\\x\\A-\\y])*([a-z]|\\d|[\\E-\\B\\C-\\x\\A-\\y])))\\.)+(([a-z]|[\\E-\\B\\C-\\x\\A-\\y])|(([a-z]|[\\E-\\B\\C-\\x\\A-\\y])([a-z]|\\d|-|\\.|X|~|[\\E-\\B\\C-\\x\\A-\\y])*([a-z]|[\\E-\\B\\C-\\x\\A-\\y])))\\.?)(:\\d*)?)(\\/((([a-z]|\\d|-|\\.|X|~|[\\E-\\B\\C-\\x\\A-\\y])|(%[\\1U-f]{2})|[!\\$&\'\\(\\)\\*\\+,;=]|:|@)+(\\/(([a-z]|\\d|-|\\.|X|~|[\\E-\\B\\C-\\x\\A-\\y])|(%[\\1U-f]{2})|[!\\$&\'\\(\\)\\*\\+,;=]|:|@)*)*)?)?(\\?((([a-z]|\\d|-|\\.|X|~|[\\E-\\B\\C-\\x\\A-\\y])|(%[\\1U-f]{2})|[!\\$&\'\\(\\)\\*\\+,;=]|:|@)|[\\5e-\\5T]|\\/|\\?)*)?(\\#((([a-z]|\\d|-|\\.|X|~|[\\E-\\B\\C-\\x\\A-\\y])|(%[\\1U-f]{2})|[!\\$&\'\\(\\)\\*\\+,;=]|:|@)|\\/|\\?)*)?$/i.16(a)},1A:7(a,b){8 6.K(b)||!/5U|5c/.16(2w 5b(a))},2j:7(a,b){8 6.K(b)||/^\\d{4}[\\/-]\\d{1,2}[\\/-]\\d{1,2}$/.16(a)},1G:7(a,b){8 6.K(b)||/^-?(?:\\d+|\\d{1,3}(?:,\\d{3})+)(?:\\.\\d+)?$/.16(a)},1P:7(a,b){8 6.K(b)||/^\\d+$/.16(a)},2f:7(b,e){l(6.K(e))8"1S-1Y";l(/[^0-9-]+/.16(b))8 N;p a=0,d=0,2g=N;b=b.1u(/\\D/g,"");Q(p n=b.F-1;n>=0;n--){p c=b.59(n);p d=58(c,10);l(2g){l((d*=2)>9)d-=9}a+=d;2g=!2g}8(a%10)==0},43:7(b,c,a){a=1g a=="1D"?a.1u(/,/g,\'|\'):"57|56?g|55";8 6.K(c)||b.65(2w 3t(".("+a+")$","i"))},2o:7(c,d,a){p b=$(a).66(".17-2o").2I("3H.17-2o",7(){$(d).J()});8 c==b.33()}}});$.W=$.v.W})(1F);(7($){p c=$.2U;p d={};$.2U=7(a){a=$.H(a,$.H({},$.53,a));p b=a.3X;l(a.3Z=="2Y"){l(d[b]){d[b].2Y()}8(d[b]=c.1Q(6,R))}8 c.1Q(6,R)}})(1F);(7($){l(!1F.1r.38.2d&&!1F.1r.38.2J&&4i.3G){$.P({3g:\'2d\',3H:\'2J\'},7(b,a){$.1r.38[a]={50:7(){6.3G(b,2y,w)},4Z:7(){6.4Y(b,2y,w)},2y:7(e){R[0]=$.1r.2O(e);R[0].1V=a;8 $.1r.1T.1Q(6,R)}};7 2y(e){e=$.1r.2O(e);e.1V=a;8 $.1r.1T.V(6,e)}})};$.H($.2L,{2K:7(d,e,c){8 6.2I(e,7(a){p b=$(a.4X);l(b.2W(d)){8 c.1Q(b,R)}})}})})(1F);',62,389,'||||||this|function|return|||||||||||||if||||var|settings||||name|validator|true|uFDCF|uFFEF||uFDF0|uD7FF|uF900||u00A0|length|messages|extend|element|valid|optional|form|Please|false|enter|each|for|arguments|errorList|delete|currentForm|call|format|_|method|value||in|else|toHide|elements|required|test|validate|maxlength|data|submitted|pendingRequest|errorClass|add|case|invalid|typeof|pending|rules|message|toShow|formSubmitted|showErrors|successList|filter|trim|remote|event|attr|min|replace|errorMap|input|success|minlength|console|date|url|max|string|checkable|jQuery|number|metadata|split|email|unhighlight|not|errorsFor|methods|getLength|digits|apply|classRuleSettings|dependency|handle|da|type|x09|normalizeRule|mismatch|submitButton|undefined|reset|addClass|switch|labelContainer||findByName|push|validClass|check|groups|currentElements|constructor|focusin|select|creditcard|bEven|previousValue|rangelength|dateISO|objectLength|focusInvalid|x20|parameters|equalTo|depends|debug|range|submit|wrapper|defaultMessage|removeClass|new|containers|handler|errors|hide|rulesCache|addWrapper|errorLabelContainer|showLabel|errorElement|clean|prepareForm|bind|focusout|validateDelegate|fn|old|delegate|fix|prepareElement|hideErrors|param|resetForm|window|ajax|characters|is|than|abort|Number|x0d|break|dependTypes|val|idOrName|submitHandler|staticRules|theregex|special|highlight|meta|cancelSubmit|eventType|defaults|click|catch|focus|findLastActive|button|size|ignoreTitle|ignore|defaultShowErrors|grep|errorContainer|selected|numberOfInvalids|error|find|RegExp|triggerHandler|checkForm|invalidHandler|onsubmit|nothing|option|checkbox|Array|radio|remove|text|makeArray|addEventListener|blur|init|autoCreateRanges|no|to|equal|x7f|and|x01|try|x0a|x22|attributeRules|lastActive|classRules|between|port|metadataRules|mode|originalMessage|normalizeRules|x0c|accept|isFunction|x0b|or|the|addClassRules|numberDE|dateDE|stopRequest|startRequest|depend|toLowerCase|nodeName|null|checked|document|errorPlacement|html|generated|map|invalidElements|show|validElements|parent|field|strong|errorContext|findDefined|String|customMessage|parentNode|customMetaMessage|id|lastElement|formatAndAdd|onfocusout|removeAttrs|cancel|assigned|has|disabled|image|blockFocusCleanup|focusCleanup|can|trigger|visible|onfocusin|label|slice|keyup|textarea|file|password|unshift|on|target|removeEventListener|teardown|setup|appendTo|warn|ajaxSettings|valueCache|gif|jpe|png|parseInt|charAt|prototype|Date|NaN|greater|uE000|unchecked|filled|https|x5d|less|x5b|x23|x21|blank|long|expr|x08|hidden|least|at|json|more|dataType|extension|default|with|addMethod|again|524288|x0e|x1f|same|2147483647|class|card|preventDefault|x7e|credit|ftp|boolean|only|getElementsByName|ISO|insertAfter|append|uF8FF|Invalid|wrap|URL|address|defined|No|Warning|This|title|setDefaults|returning|match|unbind|throw|onclick|checking|when|occured|onkeyup|removeAttr|exception|log|continue'.split('|'),0,{}));
jQuery(function($){var errorContainer=$("<div class='error'>Validation errors occurred. Please confirm the fields and submit it again.</div>").appendTo("#commentform").hide();var errorLabelContainer=$("<div class='error errorlabels'></div>").appendTo("#commentform").hide();$("#commentform").validate({rules:{author:"required",email:{required:true,email:true},url:"url",comment:"required"},errorContainer:errorContainer,errorLabelContainer:errorLabelContainer,ignore:":hidden"});$.validator.messages.required="";$.validator.messages.email="&raquo; "+$.validator.messages.email;$.validator.messages.url="&raquo; "+$.validator.messages.url;});
;(function($){$.fn.superfish=function(op){var sf=$.fn.superfish,c=sf.c,$arrow=$(['<span class="',c.arrowClass,'"> &#187;</span>'].join('')),over=function(){var $$=$(this),menu=getMenu($$);clearTimeout(menu.sfTimer);$$.showSuperfishUl().siblings().hideSuperfishUl();},out=function(){var $$=$(this),menu=getMenu($$),o=sf.op;clearTimeout(menu.sfTimer);menu.sfTimer=setTimeout(function(){o.retainPath=($.inArray($$[0],o.$path)>-1);$$.hideSuperfishUl();if(o.$path.length&&$$.parents(['li.',o.hoverClass].join('')).length<1){over.call(o.$path);}},o.delay);},getMenu=function($menu){var menu=$menu.parents(['ul.',c.menuClass,':first'].join(''))[0];sf.op=sf.o[menu.serial];return menu;},addArrow=function($a){$a.addClass(c.anchorClass).append($arrow.clone());};return this.each(function(){var s=this.serial=sf.o.length;var o=$.extend({},sf.defaults,op);o.$path=$('li.'+o.pathClass,this).slice(0,o.pathLevels).each(function(){$(this).addClass([o.hoverClass,c.bcClass].join(' ')).filter('li:has(ul)').removeClass(o.pathClass);});sf.o[s]=sf.op=o;$('li:has(ul)',this)[($.fn.hoverIntent&&!o.disableHI)?'hoverIntent':'hover'](over,out).each(function(){if(o.autoArrows)addArrow($('>a:first-child',this));}).not('.'+c.bcClass).hideSuperfishUl();var $a=$('a',this);$a.each(function(i){var $li=$a.eq(i).parents('li');$a.eq(i).focus(function(){over.call($li);}).blur(function(){out.call($li);});});o.onInit.call(this);}).each(function(){var menuClasses=[c.menuClass];if(sf.op.dropShadows&&!($.browser.msie&&$.browser.version<7))menuClasses.push(c.shadowClass);$(this).addClass(menuClasses.join(' '));});};var sf=$.fn.superfish;sf.o=[];sf.op={};sf.IE7fix=function(){var o=sf.op;if($.browser.msie&&$.browser.version>6&&o.dropShadows&&o.animation.opacity!=undefined)
this.toggleClass(sf.c.shadowClass+'-off');};sf.c={bcClass:'sf-breadcrumb',menuClass:'sf-js-enabled',anchorClass:'sf-with-ul',arrowClass:'sf-sub-indicator',shadowClass:'sf-shadow'};sf.defaults={hoverClass:'sfHover',pathClass:'overideThisToUse',pathLevels:1,delay:800,animation:{opacity:'show',height:'show'},speed:'normal',autoArrows:true,dropShadows:true,disableHI:false,onInit:function(){},onBeforeShow:function(){},onShow:function(){},onHide:function(){}};$.fn.extend({hideSuperfishUl:function(){var o=sf.op,not=(o.retainPath===true)?o.$path:'';o.retainPath=false;var $ul=$(['li.',o.hoverClass].join(''),this).add(this).not(not).removeClass(o.hoverClass).find('>ul').hide().css('visibility','hidden');o.onHide.call($ul);return this;},showSuperfishUl:function(){var o=sf.op,sh=sf.c.shadowClass+'-off',$ul=this.addClass(o.hoverClass).find('>ul:hidden').css('visibility','visible');sf.IE7fix.call($ul);o.onBeforeShow.call($ul);$ul.animate(o.animation,o.speed,function(){sf.IE7fix.call($ul);o.onShow.call($ul);});return this;}});})(jQuery);;(function($){$.fn.supersubs=function(options){var opts=$.extend({},$.fn.supersubs.defaults,options);return this.each(function(){var $$=$(this);var o=$.meta?$.extend({},opts,$$.data()):opts;var fontsize=$('<li id="menu-fontsize">&#8212;</li>').css({'padding':0,'position':'absolute','top':'-999em','width':'auto'}).appendTo($$).width();$('#menu-fontsize').remove();$ULs=$$.find('ul');$ULs.each(function(i){var $ul=$ULs.eq(i);var $LIs=$ul.children();var $As=$LIs.children('a');var liFloat=$LIs.css('white-space','nowrap').css('float');var emWidth=$ul.add($LIs).add($As).css({'float':'none','width':'auto'}).end().end()[0].clientWidth/fontsize;emWidth+=o.extraWidth;if(emWidth>o.maxWidth){emWidth=o.maxWidth;}
else if(emWidth<o.minWidth){emWidth=o.minWidth;}
emWidth+='em';$ul.css('width',emWidth);$LIs.css({'float':liFloat,'width':'100%','white-space':'normal'}).each(function(){var $childUl=$('>ul',this);var offsetDirection=$childUl.css('left')!==undefined?'left':'right';$childUl.css(offsetDirection,emWidth);});});});};$.fn.supersubs.defaults={minWidth:9,maxWidth:25,extraWidth:0};})(jQuery);jQuery(document).ready(function(){jQuery("ul.sf-menu").supersubs({minWidth:10,maxWidth:45,extraWidth:1}).superfish();});;

/*
 * jQuery FlexSlider v1.8
 * http://www.woothemes.com/flexslider/
 *
 * Copyright 2012 WooThemes
 * Free to use under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 *
 * Contrib: Darin Richardson
 */
;(function ($) {
  $.flexslider = function(el, options) {
    var slider = el;
    slider.init = function() {
      slider.vars = $.extend({}, $.flexslider.defaults, options);
      slider.data('flexslider', true);
	  slider.container = $('.slides', slider).first();
	  slider.slides = $('.slides:first > li', slider);
      slider.count = slider.slides.length;
      slider.animating = false;
      slider.currentSlide = slider.vars.slideToStart;
      slider.animatingTo = slider.currentSlide;
      slider.atEnd = (slider.currentSlide == 0) ? true : false;
      slider.eventType = ('ontouchstart' in document.documentElement) ? 'touchstart' : 'click';
      slider.cloneCount = 0;
      slider.cloneOffset = 0;
      slider.manualPause = false;
      slider.vertical = (slider.vars.slideDirection == "vertical");
      slider.prop = (slider.vertical) ? "top" : "marginLeft";
      slider.args = {};
      slider.transitions = "webkitTransition" in document.body.style;
      if (slider.transitions) slider.prop = "-webkit-transform";
      if (slider.vars.controlsContainer != "") {
        slider.controlsContainer = $(slider.vars.controlsContainer).eq($('.slides').index(slider.container));
        slider.containerExists = slider.controlsContainer.length > 0;
      }
      if (slider.vars.manualControls != "") {
        slider.manualControls = $(slider.vars.manualControls, ((slider.containerExists) ? slider.controlsContainer : slider));
        slider.manualExists = slider.manualControls.length > 0;
      }
      if (slider.vars.randomize) {
        slider.slides.sort(function() { return (Math.round(Math.random())-0.5); });
        slider.container.empty().append(slider.slides);
      }
      if (slider.vars.animation.toLowerCase() == "slide") {
        if (slider.transitions) {
          slider.setTransition(0);
        }
        slider.css({"overflow": "hidden"});
        if (slider.vars.animationLoop) {
          slider.cloneCount = 2;
          slider.cloneOffset = 1;
          slider.container.append(slider.slides.filter(':first').clone().addClass('clone')).prepend(slider.slides.filter(':last').clone().addClass('clone'));
        }
		slider.newSlides = $('.slides:first > li', slider);
        var sliderOffset = (-1 * (slider.currentSlide + slider.cloneOffset));
        if (slider.vertical) {
          slider.newSlides.css({"display": "block", "width": "100%", "float": "left"});
          slider.container.height((slider.count + slider.cloneCount) * 200 + "%").css("position", "absolute").width("100%");
          setTimeout(function() {
            slider.css({"position": "relative"}).height(slider.slides.filter(':first').height());
            slider.args[slider.prop] = (slider.transitions) ? "translate3d(0," + sliderOffset * slider.height() + "px,0)" : sliderOffset * slider.height() + "px";
            slider.container.css(slider.args);
          }, 100);
        } else {
          slider.args[slider.prop] = (slider.transitions) ? "translate3d(" + sliderOffset * slider.width() + "px,0,0)" : sliderOffset * slider.width() + "px";
          slider.container.width((slider.count + slider.cloneCount) * 200 + "%").css(slider.args);
          setTimeout(function() {
            slider.newSlides.width(slider.width()).css({"float": "left", "display": "block"});
          }, 100);
        }
      } else { //Default to fade
        slider.transitions = false;
        slider.slides.css({"width": "100%", "float": "left", "marginRight": "-100%"}).eq(slider.currentSlide).fadeIn(slider.vars.animationDuration); 
      }
      if (slider.vars.controlNav) {
        if (slider.manualExists) {
          slider.controlNav = slider.manualControls;
        } else {
          var controlNavScaffold = $('<ol class="flex-control-nav"></ol>');
          var j = 1;
          for (var i = 0; i < slider.count; i++) {
            controlNavScaffold.append('<li><a>' + j + '</a></li>');
            j++;
          }
          if (slider.containerExists) {
            $(slider.controlsContainer).append(controlNavScaffold);
            slider.controlNav = $('.flex-control-nav li a', slider.controlsContainer);
          } else {
            slider.append(controlNavScaffold);
            slider.controlNav = $('.flex-control-nav li a', slider);
          }
        }
        slider.controlNav.eq(slider.currentSlide).addClass('active');
        slider.controlNav.bind(slider.eventType, function(event) {
          event.preventDefault();
          if (!$(this).hasClass('active')) {
            (slider.controlNav.index($(this)) > slider.currentSlide) ? slider.direction = "next" : slider.direction = "prev";
            slider.flexAnimate(slider.controlNav.index($(this)), slider.vars.pauseOnAction);
          }
        });
      }
      if (slider.vars.directionNav) {
        var directionNavScaffold = $('<ul class="flex-direction-nav"><li><a class="prev" href="#">' + slider.vars.prevText + '</a></li><li><a class="next" href="#">' + slider.vars.nextText + '</a></li></ul>');
        if (slider.containerExists) {
          $(slider.controlsContainer).append(directionNavScaffold);
          slider.directionNav = $('.flex-direction-nav li a', slider.controlsContainer);
        } else {
          slider.append(directionNavScaffold);
          slider.directionNav = $('.flex-direction-nav li a', slider);
        }
        if (!slider.vars.animationLoop) {
          if (slider.currentSlide == 0) {
            slider.directionNav.filter('.prev').addClass('disabled');
          } else if (slider.currentSlide == slider.count - 1) {
            slider.directionNav.filter('.next').addClass('disabled');
          }
        }
        slider.directionNav.bind(slider.eventType, function(event) {
          event.preventDefault();
          var target = ($(this).hasClass('next')) ? slider.getTarget('next') : slider.getTarget('prev');
          if (slider.canAdvance(target)) {
            slider.flexAnimate(target, slider.vars.pauseOnAction);
          }
        });
      }
      if (slider.vars.keyboardNav && $('ul.slides').length == 1) {
        function keyboardMove(event) {
          if (slider.animating) {
            return;
          } else if (event.keyCode != 39 && event.keyCode != 37){
            return;
          } else {
            if (event.keyCode == 39) {
              var target = slider.getTarget('next');
            } else if (event.keyCode == 37){
              var target = slider.getTarget('prev');
            }
            if (slider.canAdvance(target)) {
              slider.flexAnimate(target, slider.vars.pauseOnAction);
            }
          }
        }
        $(document).bind('keyup', keyboardMove);
      }
      if (slider.vars.mousewheel) {
        slider.mousewheelEvent = (/Firefox/i.test(navigator.userAgent)) ? "DOMMouseScroll" : "mousewheel";
        slider.bind(slider.mousewheelEvent, function(e) {
          e.preventDefault();
          e = e ? e : window.event;
          var wheelData = e.detail ? e.detail * -1 : e.wheelDelta / 40,
              target = (wheelData < 0) ? slider.getTarget('next') : slider.getTarget('prev');
          if (slider.canAdvance(target)) {
            slider.flexAnimate(target, slider.vars.pauseOnAction);
          }
        });
      }
      if (slider.vars.slideshow) {
        if (slider.vars.pauseOnHover && slider.vars.slideshow) {
          slider.hover(function() {
            slider.pause();
          }, function() {
            if (!slider.manualPause) {
              slider.resume();
            }
          });
        }
        slider.animatedSlides = setInterval(slider.animateSlides, slider.vars.slideshowSpeed);
      }
      if (slider.vars.pausePlay) {
        var pausePlayScaffold = $('<div class="flex-pauseplay"><span></span></div>');
        if (slider.containerExists) {
          slider.controlsContainer.append(pausePlayScaffold);
          slider.pausePlay = $('.flex-pauseplay span', slider.controlsContainer);
        } else {
          slider.append(pausePlayScaffold);
          slider.pausePlay = $('.flex-pauseplay span', slider);
        }
        var pausePlayState = (slider.vars.slideshow) ? 'pause' : 'play';
        slider.pausePlay.addClass(pausePlayState).text((pausePlayState == 'pause') ? slider.vars.pauseText : slider.vars.playText);
        slider.pausePlay.bind(slider.eventType, function(event) {
          event.preventDefault();
          if ($(this).hasClass('pause')) {
            slider.pause();
            slider.manualPause = true;
          } else {
            slider.resume();
            slider.manualPause = false;
          }
        });
      }
      if ('ontouchstart' in document.documentElement) {
        var startX,
          startY,
          offset,
          cwidth,
          dx,
          startT,
          scrolling = false;
        slider.each(function() {
          if ('ontouchstart' in document.documentElement) {
            this.addEventListener('touchstart', onTouchStart, false);
          }
        });
        function onTouchStart(e) {
          if (slider.animating) {
            e.preventDefault();
          } else if (e.touches.length == 1) {
            slider.pause();
            cwidth = (slider.vertical) ? slider.height() : slider.width();
            startT = Number(new Date());
            offset = (slider.vertical) ? (slider.currentSlide + slider.cloneOffset) * slider.height() : (slider.currentSlide + slider.cloneOffset) * slider.width();
            startX = (slider.vertical) ? e.touches[0].pageY : e.touches[0].pageX;
            startY = (slider.vertical) ? e.touches[0].pageX : e.touches[0].pageY;
            slider.setTransition(0);
            this.addEventListener('touchmove', onTouchMove, false);
            this.addEventListener('touchend', onTouchEnd, false);
          }
        }
        function onTouchMove(e) {
          dx = (slider.vertical) ? startX - e.touches[0].pageY : startX - e.touches[0].pageX;
          scrolling = (slider.vertical) ? (Math.abs(dx) < Math.abs(e.touches[0].pageX - startY)) : (Math.abs(dx) < Math.abs(e.touches[0].pageY - startY));
          if (!scrolling) {
            e.preventDefault();
            if (slider.vars.animation == "slide" && slider.transitions) {
              if (!slider.vars.animationLoop) {
                dx = dx/((slider.currentSlide == 0 && dx < 0 || slider.currentSlide == slider.count - 1 && dx > 0) ? (Math.abs(dx)/cwidth+2) : 1);
              }
              slider.args[slider.prop] = (slider.vertical) ? "translate3d(0," + (-offset - dx) + "px,0)": "translate3d(" + (-offset - dx) + "px,0,0)";
              slider.container.css(slider.args);
            }
          }
        }
        function onTouchEnd(e) {
          slider.animating = false;
          if (slider.animatingTo == slider.currentSlide && !scrolling && !(dx == null)) {
            var target = (dx > 0) ? slider.getTarget('next') : slider.getTarget('prev');
            if (slider.canAdvance(target) && Number(new Date()) - startT < 550 && Math.abs(dx) > 20 || Math.abs(dx) > cwidth/2) {
              slider.flexAnimate(target, slider.vars.pauseOnAction);
            } else {
              slider.flexAnimate(slider.currentSlide, slider.vars.pauseOnAction);
            }
          }
          this.removeEventListener('touchmove', onTouchMove, false);
          this.removeEventListener('touchend', onTouchEnd, false);
          startX = null;
          startY = null;
          dx = null;
          offset = null;
        }
      }
      if (slider.vars.animation.toLowerCase() == "slide") {
        $(window).resize(function(){
          if (!slider.animating) {
            if (slider.vertical) {
              slider.height(slider.slides.filter(':first').height());
              slider.args[slider.prop] = (-1 * (slider.currentSlide + slider.cloneOffset))* slider.slides.filter(':first').height() + "px";
              if (slider.transitions) {
                slider.setTransition(0);
                slider.args[slider.prop] = (slider.vertical) ? "translate3d(0," + slider.args[slider.prop] + ",0)" : "translate3d(" + slider.args[slider.prop] + ",0,0)";
              }
              slider.container.css(slider.args);
            } else {
              slider.newSlides.width(slider.width());
              slider.args[slider.prop] = (-1 * (slider.currentSlide + slider.cloneOffset))* slider.width() + "px";
              if (slider.transitions) {
                slider.setTransition(0);
                slider.args[slider.prop] = (slider.vertical) ? "translate3d(0," + slider.args[slider.prop] + ",0)" : "translate3d(" + slider.args[slider.prop] + ",0,0)";
              }
              slider.container.css(slider.args);
            }
          }
        });
      }
      /*
      slider.destroy = function() {
        slider.pause();
        if (slider.controlNav && slider.vars.manualControls == "") slider.controlNav.closest('.flex-control-nav').remove();
        if (slider.directionNav) slider.directionNav.closest('.flex-direction-nav').remove();
        if (slider.vars.pausePlay) slider.pausePlay.closest('.flex-pauseplay').remove();
        if (slider.vars.keyboardNav && $('ul.slides').length == 1) $(document).unbind('keyup', keyboardMove);
        if (slider.vars.mousewheel) slider.unbind(slider.mousewheelEvent);
        if (slider.transitions) slider.each(function(){this.removeEventListener('touchstart', onTouchStart, false);});
        if (slider.vars.animation == "slide" && slider.vars.animationLoop) slider.newSlides.filter('.clone').remove();
        if (slider.vertical) slider.height("auto");
        slider.slides.hide();
        slider.removeData('flexslider');
      }
      */
      slider.vars.start(slider);
    }
    slider.flexAnimate = function(target, pause) {
      if (!slider.animating) {
        slider.animating = true;
        slider.animatingTo = target;
        slider.vars.before(slider);
        if (pause) {
          slider.pause();
        }
        if (slider.vars.controlNav) {
          slider.controlNav.removeClass('active').eq(target).addClass('active');
        }
        slider.atEnd = (target == 0 || target == slider.count - 1) ? true : false;
        if (!slider.vars.animationLoop && slider.vars.directionNav) {
          if (target == 0) {
            slider.directionNav.removeClass('disabled').filter('.prev').addClass('disabled');
          } else if (target == slider.count - 1) {
            slider.directionNav.removeClass('disabled').filter('.next').addClass('disabled');
          } else {
            slider.directionNav.removeClass('disabled');
          }
        }
        if (!slider.vars.animationLoop && target == slider.count - 1) {
          slider.pause();
          slider.vars.end(slider);
        }
        if (slider.vars.animation.toLowerCase() == "slide") {
          var dimension = (slider.vertical) ? slider.slides.filter(':first').height() : slider.slides.filter(':first').width();
          if (slider.currentSlide == 0 && target == slider.count - 1 && slider.vars.animationLoop && slider.direction != "next") {
            slider.slideString = "0px";
          } else if (slider.currentSlide == slider.count - 1 && target == 0 && slider.vars.animationLoop && slider.direction != "prev") {
            slider.slideString = (-1 * (slider.count + 1)) * dimension + "px";
          } else {
            slider.slideString = (-1 * (target + slider.cloneOffset)) * dimension + "px";
          }
          slider.args[slider.prop] = slider.slideString;
          if (slider.transitions) {
              slider.setTransition(slider.vars.animationDuration); 
              slider.args[slider.prop] = (slider.vertical) ? "translate3d(0," + slider.slideString + ",0)" : "translate3d(" + slider.slideString + ",0,0)";
              slider.container.css(slider.args).one("webkitTransitionEnd transitionend", function(){
                slider.wrapup(dimension);
              });   
          } else {
            slider.container.animate(slider.args, slider.vars.animationDuration, function(){
              slider.wrapup(dimension);
            });
          }
        } else { //Default to Fade
          slider.slides.eq(slider.currentSlide).fadeOut(slider.vars.animationDuration);
          slider.slides.eq(target).fadeIn(slider.vars.animationDuration, function() {
            slider.wrapup();
          });
        }
      }
    }
    slider.wrapup = function(dimension) {
      if (slider.vars.animation == "slide") {
        if (slider.currentSlide == 0 && slider.animatingTo == slider.count - 1 && slider.vars.animationLoop) {
          slider.args[slider.prop] = (-1 * slider.count) * dimension + "px";
          if (slider.transitions) {
            slider.setTransition(0);
            slider.args[slider.prop] = (slider.vertical) ? "translate3d(0," + slider.args[slider.prop] + ",0)" : "translate3d(" + slider.args[slider.prop] + ",0,0)";
          }
          slider.container.css(slider.args);
        } else if (slider.currentSlide == slider.count - 1 && slider.animatingTo == 0 && slider.vars.animationLoop) {
          slider.args[slider.prop] = -1 * dimension + "px";
          if (slider.transitions) {
            slider.setTransition(0);
            slider.args[slider.prop] = (slider.vertical) ? "translate3d(0," + slider.args[slider.prop] + ",0)" : "translate3d(" + slider.args[slider.prop] + ",0,0)";
          }
          slider.container.css(slider.args);
        }
      }
      slider.animating = false;
      slider.currentSlide = slider.animatingTo;
      slider.vars.after(slider);
    }
    slider.animateSlides = function() {
      if (!slider.animating) {
        slider.flexAnimate(slider.getTarget("next"));
      }
    }
    slider.pause = function() {
      clearInterval(slider.animatedSlides);
      if (slider.vars.pausePlay) {
        slider.pausePlay.removeClass('pause').addClass('play').text(slider.vars.playText);
      }
    }
    slider.resume = function() {
      slider.animatedSlides = setInterval(slider.animateSlides, slider.vars.slideshowSpeed);
      if (slider.vars.pausePlay) {
        slider.pausePlay.removeClass('play').addClass('pause').text(slider.vars.pauseText);
      }
    }
    slider.canAdvance = function(target) {
      if (!slider.vars.animationLoop && slider.atEnd) {
        if (slider.currentSlide == 0 && target == slider.count - 1 && slider.direction != "next") {
          return false;
        } else if (slider.currentSlide == slider.count - 1 && target == 0 && slider.direction == "next") {
          return false;
        } else {
          return true;
        }
      } else {
        return true;
      }  
    }
    slider.getTarget = function(dir) {
      slider.direction = dir;
      if (dir == "next") {
        return (slider.currentSlide == slider.count - 1) ? 0 : slider.currentSlide + 1;
      } else {
        return (slider.currentSlide == 0) ? slider.count - 1 : slider.currentSlide - 1;
      }
    }
    slider.setTransition = function(dur) {
      slider.container.css({'-webkit-transition-duration': (dur/1000) + "s"});
    }
    slider.init();
  }
  $.flexslider.defaults = {
    animation: "slide",              //String: Select your animation type, "fade" or "slide"
    slideDirection: "horizontal",   //String: Select the sliding direction, "horizontal" or "vertical"
    slideshow: false,                //Boolean: Animate slider automatically
    slideshowSpeed: 7000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
    animationDuration: 600,         //Integer: Set the speed of animations, in milliseconds
    directionNav: true,             //Boolean: Create navigation for previous/next navigation? (true/false)
    controlNav: true,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
    keyboardNav: true,              //Boolean: Allow slider navigating via keyboard left/right keys
    mousewheel: false,              //Boolean: Allow slider navigating via mousewheel
    prevText: "Prev",           //String: Set the text for the "previous" directionNav item
    nextText: "Next",               //String: Set the text for the "next" directionNav item
    pausePlay: false,               //Boolean: Create pause/play dynamic element
    pauseText: 'Pause',             //String: Set the text for the "pause" pausePlay item
    playText: 'Play',               //String: Set the text for the "play" pausePlay item
    randomize: false,               //Boolean: Randomize slide order
    slideToStart: 0,                //Integer: The slide that the slider should start on. Array notation (0 = first slide)
    animationLoop: true,            //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
    pauseOnAction: true,            //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
    pauseOnHover: false,            //Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
    controlsContainer: "",          //Selector: Declare which container the navigation elements should be appended too. Default container is the flexSlider element. Example use would be ".flexslider-container", "#container", etc. If the given element is not found, the default action will be taken.
    manualControls: "",             //Selector: Declare custom control navigation. Example would be ".flex-control-nav li" or "#tabs-nav li img", etc. The number of elements in your controlNav should match the number of slides/tabs.
    start: function(){},            //Callback: function(slider) - Fires when the slider loads the first slide
    before: function(){},           //Callback: function(slider) - Fires asynchronously with each slider animation
    after: function(){}, 			//Callback: function(slider) - Fires after each slider animation completes
    end: function(){}               //Callback: function(slider) - Fires when the slider reaches the last slide (asynchronous)
  }
  $.fn.flexslider = function(options) {
    return this.each(function() {
      if ($(this).find('.slides li').length == 1) {
        $(this).find('.slides li').fadeIn(400);
      }
      else if ($(this).data('flexslider') != true) {
        new $.flexslider($(this), options);
      }
    });
  }  
})(jQuery);
/*! This file is auto-generated */
!function(d,l){"use strict";var e=!1,o=!1;if(l.querySelector)if(d.addEventListener)e=!0;if(d.wp=d.wp||{},!d.wp.receiveEmbedMessage)if(d.wp.receiveEmbedMessage=function(e){var t=e.data;if(t)if(t.secret||t.message||t.value)if(!/[^a-zA-Z0-9]/.test(t.secret)){var r,a,i,s,n,o=l.querySelectorAll('iframe[data-secret="'+t.secret+'"]'),c=l.querySelectorAll('blockquote[data-secret="'+t.secret+'"]');for(r=0;r<c.length;r++)c[r].style.display="none";for(r=0;r<o.length;r++)if(a=o[r],e.source===a.contentWindow){if(a.removeAttribute("style"),"height"===t.message){if(1e3<(i=parseInt(t.value,10)))i=1e3;else if(~~i<200)i=200;a.height=i}if("link"===t.message)if(s=l.createElement("a"),n=l.createElement("a"),s.href=a.getAttribute("src"),n.href=t.value,n.host===s.host)if(l.activeElement===a)d.top.location.href=t.value}}},e)d.addEventListener("message",d.wp.receiveEmbedMessage,!1),l.addEventListener("DOMContentLoaded",t,!1),d.addEventListener("load",t,!1);function t(){if(!o){o=!0;var e,t,r,a,i=-1!==navigator.appVersion.indexOf("MSIE 10"),s=!!navigator.userAgent.match(/Trident.*rv:11\./),n=l.querySelectorAll("iframe.wp-embedded-content");for(t=0;t<n.length;t++){if(!(r=n[t]).getAttribute("data-secret"))a=Math.random().toString(36).substr(2,10),r.src+="#?secret="+a,r.setAttribute("data-secret",a);if(i||s)(e=r.cloneNode(!0)).removeAttribute("security"),r.parentNode.replaceChild(e,r)}}}}(window,document);