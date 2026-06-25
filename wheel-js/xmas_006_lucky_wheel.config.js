let segments = [];
let startDeg = 0;
let copyText ='Copy text';

	
	

	

								
			segments.push({
			id: 0,
			fillStyle: '#274530',
			text:'Free CCNA Bootcamp',
			textFillStyle:'#ffffff',
			segmentId: 1, 
			priority: 5,
			coupon:'Free_CCNA',
			content: 'Free CCNA Bootcamp',
			// image: '//theme.hstatic.net/1000342532/1000434695/14/xmas_006_segment_1_img.png?v=1108'
		})
	
	
	

	

								
			segments.push({
			id: 1,
			fillStyle: '#9e1007',
			text:'10% Off on CCIE',
			textFillStyle:'#ffffff',
			segmentId: 2, 
			priority: 90,
			coupon:'10%_Off_CCIE',
			content: '10% Off on CCIE',
			// image: '//theme.hstatic.net/1000342532/1000434695/14/xmas_006_segment_2_img.png?v=1108'
		})
	
	
	

	

								
			segments.push({
			id: 2,
			fillStyle: '#274530',
			text:'25% Off on CCIE',
			textFillStyle:'#ffffff',
			segmentId: 3, 
			priority: 5,
			coupon:'25%_Off_CCIE',
			content: '25% Off on CCIE',
			// image: '//theme.hstatic.net/1000342532/1000434695/14/xmas_006_segment_3_img.png?v=1108'
		})
	
	
	

	

								
			segments.push({
			id: 3,
			fillStyle: '#9e1007',
			text:'Free CCIE EI Bootcamp',
			textFillStyle:'#ffffff',
			segmentId: 4, 
			priority: 0,
			coupon:'Free_CCIE',
			content: 'Free CCIE EI Bootcamp',
			// image: '//theme.hstatic.net/1000342532/1000434695/14/xmas_006_segment_4_img.png?v=1108'
		})
	
	
	

	

								
		// 	segments.push({
		// 	id: 4,
		// 	fillStyle: '#94eaff',
		// 	text:'15% off on CCIE',
		// 	textFillStyle:'#ffffff',
		// 	segmentId: 5, 
		// 	priority: 55,
		// 	coupon:'15%_off_CCIE',
		// 	content: '15% off on CCIE',
		// 	image: '//theme.hstatic.net/1000342532/1000434695/14/xmas_006_segment_5_img.png?v=1108'
		// })
	
	
	

	

								
			// segments.push({
			// id: 5,
			// fillStyle: '#fc3c3c',
			// text:'Laptop',
			// textFillStyle:'#ffffff',
			// segmentId: 6, 
			// priority: 2,
			// coupon:'Liên hệ www.egany.com để nhận thưởng',
			// content: 'Chúc mừng bạn đã trúng 1 Laptop',
			// image: '//theme.hstatic.net/1000342532/1000434695/14/xmas_006_segment_6_img.png?v=1108'
		// })

								
	
var segmentDeg =  Math.floor(360/segments.length)
segments = segments.map(seg => {
	seg =  {
	...seg,
	startAngle:startDeg
	};

	startDeg += segmentDeg + 1;
	return seg
})


var EGALuckyWheelConfigs = {
	segments: segments,
	numSegments:segments.length,
	segmentDeg,
	textFontSize: 17,
	textFontWeight: 600,
	textOrientation: 'curved',
	duration: '3',         
	spin: 1,
	segmentsShow: 3,
	msg: 'You have claimed your chance',
	buttonText:  'Spin' ,
	copyText: copyText,
	winColor: '#ffbd66'
}


