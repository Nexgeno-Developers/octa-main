
var config = EGALuckyWheelConfigs;
let EGALuckyWheel = function (config,wheel){

	 this.alertPrize =  function (){
						// Get the number of the winning segment.
					var winningSegmentNumber = wheel.getIndicatedSegmentNumber();

					// Loop and set fillStyle of all segments to gray.
					for (var x = 1; x < wheel.segments.length; x ++)
					{
							wheel.segments[x].fillStyle = config.segments[x-1].fillStyle;
					}
					// Make the winning one yellow.
					wheel.segments[winningSegmentNumber].fillStyle = config.winColor;

					// Call draw function to render changes.
					wheel.draw();
					this.drawIcon()
					var {coupon,content} = wheel.segments[winningSegmentNumber];
					fadeIn(message, .2,coupon,content);
			};
	 this.spin = JSON.parse(localStorage.getItem("spin"));
	 this.calculatePrize = function (){
				this.resetWheel()
				let segments = wheel.segments.slice(1).sort((a,b)=>{
					if(a && b){
						if	(a.priority > b.priority) return -1
						if  (a.priority < b.priority) return 1
						return 0
					}
				})

				
				if(this.spin <= config.spin){
					var random = Math.floor((Math.random() * 45));
					var stopAt;
					var max =	segments.reduce((seg1,seg2, currentIndex )=>{
								return seg1 + seg2.priority;
					},0)
					var randomPriority = getRandomInt(0,max)
					segments.reduce((seg1,seg2, currentIndex )=>{
						if((randomPriority > seg1) &&	randomPriority <= seg1+ seg2.priority){
									stopAt = segments[currentIndex].startAngle + random;
						}
						return seg1 + seg2.priority;
					},0)
						// Important thing is to set the stopAngle of the animation before stating the spin.
					wheel.animation.stopAngle = stopAt;
					// May as well start the spin from here.
					wheel.startAnimation();
					this.spin +=1;
					let json = JSON.stringify(this.spin);
					localStorage.setItem("spin", json);
			}
				else{
					fadeIn(message, .4, config.msg);
				}


			};
	 this.resetWheel = function(){
			wheel.stopAnimation(false);
			wheel.rotationAngle=0; 
			for(let i in wheel.segments){
				if(wheel.segments[i]){
						wheel.segments[i].fillStyle = config.segments[i-1].fillStyle;
				}		
			}

			wheel.draw();
			this.drawIcon();
		};
	 this.drawIcon =  function(){
	
			for(let segment of wheel.segments){
				if(segment){
				let i = wheel.segments.indexOf(segment)
				let drawIconImg = new Image();
				let ration = 0.3
				drawIconImg.src = wheel.segments[i].image;
				drawIconImg.onload = function(){
							let ratio = 0.6;
		
						let handCanvas = document.getElementById('lucky-wheel');
						let ctx = handCanvas.getContext('2d');
						let midDeg = 360/Math.round(360/(10*config.numSegments));
					
						let x =100*Math.cos((wheel.rotationAngle +  segment.startAngle - midDeg )  * Math.PI / 180.0) + 180 - drawIconImg.width*ration/2;
						let y =100*Math.sin((wheel.rotationAngle +  segment.startAngle - midDeg )  * Math.PI / 180.0) + 180 - drawIconImg.height*ration/2;
						if(ctx){
							ctx.save();
							ctx.drawImage(drawIconImg,x,y,drawIconImg.width*ration,drawIconImg.height*ration ) ; 
							ctx.restore();

						}
				}
				drawIconImg.onload()
				}
			}
		};
}




function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

let wheel = new Winwheel({
				'canvasId'    : 'lucky-wheel',
				'numSegments' : config.numSegments,
        'fillStyle'   : '#14c187',
        'lineWidth'   : -1,
				'strokeStyle'   : 'transparent',
				'textFontSize': config.textFontSize,             // hollow space inside the wheel.
				'textMargin'      : 20,
				'textFontWeight'    :config.textFontWeight,  
				'textFillStyle' : '#000',
				'textOrientation'   : config.textOrientation,
    		'textAlignment'     : 'outer',
				'textFontFamily'  : 'Courier', 
				'drawText'          : true, 
				'drawMode'          : 'code',
				'imageOverlay': false,
				'segments'    : config.segments,
				'animation' :                   // Note animation properties passed in constructor parameters.
					{
							'type'     : 'spinToStop',  // Type of animation.
							'duration' : config.duration,             // How long the animation is to take in seconds.
							'spins'    : 9,             // The number of complete 360 degree rotations the wheel is to do.
							'repeat'   : 0,
					 		'callbackAfter': 'luckyWheel.drawIcon()',
							'callbackFinished' : 'luckyWheel.alertPrize()',
							 
					}
				
			});
//====== init wheel ============//
let luckyWheel = new EGALuckyWheel(config,wheel)
		luckyWheel.drawIcon();
		$('#canvasContainer').show();
		let btnSpin = config.buttonText;
		if(luckyWheel.spin){
			$('#start span').html(btnSpin + ' ()');
			if(luckyWheel.spin < config.spin){
			$('#start span').html(btnSpin + ` (${config.spin - luckyWheel.spin })`);
		}else{
			$('#start span').html(btnSpin + ` (0) `);
		}
		}else {
		$('#start span').html(btnSpin + ` (${config.spin})`);
		}
//====== start wheel ============//
$('#start').click(function(){
    $(this).attr('disabled','true')
		if(luckyWheel.spin < config.spin){
			luckyWheel.calculatePrize();
			$('#start span').html( btnSpin + ` (${config.spin - luckyWheel.spin }) ` )
		}else{
				$('#start span').html( btnSpin + ' (0) ' )
					fadeIn(message, .3,config.msg);
					$('#start span').html( btnSpin + ' (0) ' )
		}
})
//====== Alert modal ============//
	let close = $(".ion-close-circled"),
			modal = $(".ega-modal"),
			message = $(".message"),
			tl = new TimelineLite({paused: true}),
			tl2 = new TimelineLite({paused: true}),
			text = $(".text");

	function fadeIn(element, time, coupon, content) {
		tl.set(modal, {className: "+=display"});
		tl.resume();
		tl.restart();
		tl.from(modal, time, {
			autoAlpha: 0
		}).from(element, time, {
			autoAlpha: 0,
			scale: .8,
			ease: Sine.easeInOut
		}, "-=.4").from(".message > button", time, {
			y: 20,
			autoAlpha: 0,
			ease: Power2.easeInOut

		}).addPause();
// Set values in the form fields
    $('input[name="couponcode"]').val(coupon);
    $('#coupon-description').val(content);
		element.find('h3').html(coupon);
		$('.price-container').html(content)
		if(content){
				text.find('span').html('Copy Copoun');
					$('.price-container').css('display','block')
		}else{
			$('.price-container').css('display','none')
				text.find('span').html('');
		}
	}
	function fadeOut(element, time) { 
		tl.resume();
		tl.to(element, time, {
			autoAlpha: 0
		}).to(modal, time, {
			autoAlpha: 0,
			onComplete: complete
		}, "-=.1").addPause();
		function complete() {
			modal.removeClass("display");
			luckyWheel.resetWheel();
			//tl.set(modal, {className: "-=display"});//class not being removed second time
			//tl.pause();
			$('#start').removeAttr('disabled')
		}
	}
	close.on("click", function() {
		fadeOut(message, .4);

	});
	text.find('h3').click(function(){
		if(text.find('span').html()){
			var $temp = text.find('input')
			$temp.val($(this).text()).select();
			document.execCommand("copy");
			text.find('span').html('Copied');
		}
	})

	modal.on("click", function(e) {
		let currentEl = e.target.parentNode.parentNode;
		if($(currentEl).hasClass('message') || $(currentEl).hasClass('text')) {
				modal.addClass("display")
		} else {
				fadeOut(message, .4);

			}
	})


