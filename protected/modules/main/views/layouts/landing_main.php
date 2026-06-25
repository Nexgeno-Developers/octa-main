<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
		<?php if(!empty($this->pageDescription)){ ?>
		<meta name="description" content="<?php echo CHtml::encode($this->pageDescription); ?>" />
		<meta name="keywords" content="<?php echo CHtml::encode($this->pageKeywords); ?>" />
		<?php } ?>
		<link rel="icon" href="<?php echo Yii::app()->request->getBaseUrl(true) ?>/img/favicon.png" type="image/x-icon">
    <div class="hide"><?php //var_dump($this->pageDescription); ?></div>
     <!-- Google Fonts 
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">-->
  <!-- Bootstrap CSS File -->
  <script async defer src='https://www.google.com/recaptcha/api.js'></script>
  <link href="<?php echo Yii::app()->request->getBaseUrl(true) ?>/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Libraries CSS Files  
 
  <link href="<?php echo Yii::app()->request->getBaseUrl(true) ?>/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?php echo Yii::app()->request->getBaseUrl(true)?>/lib/ionicons/css/ionicons.min.css" rel="stylesheet">-->
  <link href="<?php echo Yii::app()->request->getBaseUrl(true)?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo Yii::app()->request->getBaseUrl(true)?>/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <!--<link href="<?php echo Yii::app()->request->getBaseUrl(true) ?>/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">-->
  <!-- Main Stylesheet File -->
  <link href="<?php echo Yii::app()->request->getBaseUrl(true)?>/css/style.css" rel="stylesheet">
  <!--<link href="<?php echo Yii::app()->request->getBaseUrl(true)?>/css/custom.css" rel="stylesheet">-->
  

 <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet" />
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>-->


  <link rel="stylesheet" href="<?php echo Yii::app()->request->getBaseUrl(true)?>/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script async defer src="<?php echo Yii::app()->request->getBaseUrl(true)?>/js/bootstrap.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  
  <link rel="stylesheet" href="https://octanetworks.com/css/intlTelInput.css"> 
 
  <link rel="stylesheet" href="<?php echo Yii::app()->request->getBaseUrl(true)?>/css/jquery-ui.css">
  <script async defer src="<?php echo Yii::app()->request->getBaseUrl(true)?>/js/jquery-1.12.4.js"></script> 
  <script async defer src="<?php echo Yii::app()->request->getBaseUrl(true)?>/js/jquery-ui.js"></script>

	<script async defer language="javascript">
		 $(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 300) {
        $("#header").addClass("navbar-fixed-top");
    } else {
        $("#header").removeClass("navbar-fixed-top");
    }
});
	</script>
	<!-- Global site tag (gtag.js) - Google Ads: 760627314 -->
<script async defer src="https://www.googletagmanager.com/gtag/js?id=AW-760627314"></script>
<script async defer>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
	gtag('config', 'UA-132716396-1');
  gtag('config', 'AW-760627314');
</script>
<!-- Event snippet for CCIE India Conv conversion page -->
<script async defer>
  gtag('event', 'conversion', {'send_to': 'AW-760627314/esGeCPz8sbMBEPKA2eoC'});
</script>

<style type="text/css">
#g-recaptcha-response {
    display: block !important;
    position: absolute;
    margin: -78px 0 0 0 !important;
    width: 302px !important;
    height: 76px !important;
    z-index: -999999;
    opacity: 0;
	background-color:red;
	color:white;
}
p{
    margin: 0;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji" !important;
    font-size: 16px;
    font-weight: 350;
    line-height: 24px; 
    padding: 10px 0px;
    text-align: justify;
    word-spacing: 0.2px;
}
footer#footer ul li i {
    font-size: 16px;
    padding-right: 8px;
}
#footer .footer-contact li {
    padding-bottom: 7px;
    line-height: 25px;
}
.footer-links ul li{
    padding-left: 6px;
}
.footer-links ul li a {
	
    color: #fff !important;
}
.back-to-top {
   
    margin-bottom: 60px;
}
#footer .footer-top .footer-newsletter input[type="submit"] {
  border-radius: 3px;
    margin-left: -4px;
}
.landing_mian_hed h1
	{
		font-size: 38px;
    font-weight: 900;
    text-align: left;
    margin: 32px 0;
	}
	
	.landing_mian_hed p
	{
		    font-size: 22px;
    text-align: left;
    line-height: 36px;
	}
@media(max-width:767px)
{
	.landing_mian_hed h1
	{
	    font-size: 24px !important;
    font-weight: 900;
    text-align: left;
    margin: 20px -8px;
    line-height: 38px;
	}
	.landing_mian_hed p
	{
		font-size: 18px;
    text-align: left;
    line-height: 30px;
    padding: 0;
    margin: 0;
    padding-bottom: 20px;
	}
	.email-ph {
    float: right;
    list-style-type: none;
    padding: 4px 0px 0 0px;
    margin: 0;
    font-family: 'Work Sans', sans-serif;
    position: absolute;
}
.landing .email-ph li a {
    color: #0b304d;
    font-size: 13px;
    line-height: 21px;
    font-weight: 700;
    float: right;
}
ul.email-ph i.fa {
    color: #333;
    font-size: 14px;
    padding-right: 6px;
}
#header {
    height: 70px;
    padding: 10px 15px;
}
section.priviliges-enjoyed.job-guarantee-page.clearfix .col-xs-12 {
    padding: 0;
}
#footer .copyright {
    padding-top: 30px;
    width: 100%;
    text-align: center;
    font-family: open sans,sans-serif;
    font-size: 12px;
    line-height: 16px;
    color: #787878;
    border-top: 0px solid #4a4a4a !important;
}
.section-header h3 {
    font-size: 27px;
    line-height: 35px;
}
}
</style> 

</head>
<?php  
	if($_SERVER['REQUEST_URI'] == '/error' || $_SERVER['REQUEST_URI'] == '/error/'){
		header('Location: '.Yii::app()->request->getBaseUrl(true));	
	}


 ?>
<body> 
<header id="header" class="landing">
   <div class="container">
    <div class="custom-container">

      <div class="logo float-left col-lg-4 col-md-4 col-sm-4">
        <a href="<?php echo Yii::app()->request->getBaseURL(true);?>" class="scrollto">
        	<img src="<?php echo Yii::app()->request->getBaseURL(true);?>/img/logo.png" alt="Octa Networks" class="img-fluid">
		</a>
      </div>
 <div class="col-lg-8 col-md-8 col-sm-8">
				<div class="rght-inner-top-sec">
					<ul class="email-ph">
						<li><a href="mailto:info@octanetworks.com"><i class="fa fa-envelope" aria-hidden="true"></i> info@octanetworks.com</a></li>
						<li><a href="tel:+91 8976676689"><i class="fa fa-phone" aria-hidden="true"></i> +91 89 766 766 89</a></li>
					</ul>
				</div>
			</div>
      
    </div>
    </div>
  </header>
    
  <?php echo $content; ?>

    
    <footer id="footer"> 

    <div class="container">
      <div class="copyright">
        Copyright <?=date('Y')?>. &copy; Octa Networks. All Rights Reserved.
      </div>
    </div>
  </footer>

<div class="request-call" style="z-index:999;">
<a href="" class="callback-form-landing cboxElement" data-toggle="modal" data-target="#requestcallback">Request a call back</a></div>


<div class="modal fade" id="requestcallback" tabindex="-1" role="dialog" aria-labelledby="requestcallbackTitle" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content req_responsive">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>



<script async defer language="javascript">
$(function () {	
    $("#mcountry").on("change",function(){
       $id=$("#mcountry").val();
       $url=$("#mcountry").data("url");
       $.ajax({
            type: "POST",
            url: $url,
            data: {id:$id},
            dataType: "json",
            traditional: true,
            
            success: function (response) {
                if (response.status==="ok"){
                    if (!$.isEmptyObject(response.cert)){
                         $html = response.cert;
                        $("#mphone").val($html);
                    }
                }
            },
             error: function (response) {
                debugger;
                alert(response.d);
            }
       }) ;
    });
});
</script>



      <div class="modal-body">
       <div class="callback-form ">
    <h5>Request a call back</h5>
    <p>Enter your details below to request a call back and we will get back in touch as soon as possible.</p>
    <form class="clearfix callback-form-container" action="<?php echo Yii::app()->createUrl("main/forms/callback"); ?>" method="post">
               <div class="form-group">
            <label>Name<span class="required-syb">*</span></label>
            <input type="text" name="name" class="form-control" placeholder="Your name" required>
          </div>
		  <div class="form-group">
            <label>Country<span class="required-syb">*</span></label>
			<?php $countries = Countries::model()->findAll(); ?>
			<select class="dropdown form-control" id="mcountry" data-url="<?php echo Yii::app()->createUrl("main/exam/getphone");?>" name="mcountry" required="required">
				<?php foreach($countries as $country){ ?>
					<option value="<?=$country->sortname?>" <?php if($country->sortname == "IN"){?> selected="selected" <?php } ?>><?=$country->name?></option>
				<?php } ?>
			</select>
          </div>
          <div class="form-group">
            <label>Contact No<span class="required-syb">*</span></label>
            <input type="text" name="phone" class="form-control" id="mphone" placeholder="Your Contact No" value="91" required onkeypress="return isNumberKey(event)" maxlength="15">
          </div>
		  <div class="form-group">
            <label>Captcha<span class="required-syb">*</span></label>
            <div class="g-recaptcha" data-sitekey="<?=Yii::app()->params['siteKey']?>"></div>
          </div>
     		<input type="hidden" name="type" value="Call Back" />
          <button type="submit" class="callback-btn">Submit</button>
    </form>
</div>
      </div>
      
    </div>
  </div>
</div>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- /.container 
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>-->
  <!--  <script src="<?php echo Yii::app()->request->getBaseUrl(true)?>/lib/jquery/jquery.min.js"></script>  
  <script src="<?php echo Yii::app()->request->getBaseUrl(true)?>/lib/jquery/jquery-migrate.min.js"></script> -->
  <script async src="<?php echo Yii::app()->request->getBaseUrl(true)?>/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script async src="<?php echo Yii::app()->request->getBaseUrl(true)?>/lib/easing/easing.min.js"></script>
  <script async src="<?php echo Yii::app()->request->getBaseUrl(true)?>/lib/wow/wow.min.js"></script>
  <script async src="<?php echo Yii::app()->request->getBaseUrl(true)?>/lib/isotope/isotope.pkgd.min.js"></script>
  <script async src="<?php echo Yii::app()->request->getBaseUrl(true)?>/lib/owlcarousel/owl.carousel.min.js"></script>
  <script async src="<?php echo Yii::app()->request->getBaseUrl(true)?>/lib/lightbox/js/lightbox.min.js"></script>
  <script async src="<?php echo Yii::app()->request->getBaseUrl(true)?>/lib/mobile-nav/mobile-nav.js"></script>
  <script async src="<?php echo Yii::app()->request->getBaseUrl(true)?>/lib/waypoints/waypoints.min.js"></script>
  <script async src="<?php echo Yii::app()->request->getBaseUrl(true)?>/lib/counterup/counterup.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <!-- <script src="<?php echo Yii::app()->request->getBaseUrl(true)?>/contactform/contactform.js"></script>-->
  <!-- Template Main Javascript File -->
  <script async defer src="<?php echo Yii::app()->request->getBaseUrl(true)?>/js/main.js"></script>
  <script async defer src="https://octanetworks.com/js/intlTelInput.js"></script>
<script async defer>


/* TOP BAR SCROLLING */
$(document).ready(function() {
 

  $("#owl-demo1").owlCarousel({
 
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
	  items : 1,
		autoplay:true,
		autoplayTimeout: 5000
 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });
 
/* TOP BAR SCROLLING */	
	
 
  var owl = $("#owl-demo");
 
  owl.owlCarousel({
      items : 4, //10 items above 1000px browser width
      itemsDesktop : [1000,5], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,3], // betweem 900px and 601px
      itemsTablet: [600,2], //2 items between 600 and 0
      itemsMobile : [400,2], // itemsMobile disabled - inherit from itemsTablet option
	 responsiveClass:true,
	 
    responsive:{
        0:{
            items:4,
            nav:true
        },
		 400:{
            items:2,
            nav:false
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:4,
            //nav:true,
            loop:false
        }
    }
	
	  
  });
 
 
  // Custom Navigation Events
  $(".next").click(function(){
    owl.trigger('owl.next');
  })
  $(".prev").click(function(){
    owl.trigger('owl.prev');
  })
  $(".play").click(function(){
    owl.trigger('owl.play',1000); //owl.play event accept autoPlay speed as second parameter
  })
  $(".stop").click(function(){
    owl.trigger('owl.stop');
  })
 
});
</script>
<script async defer type="text/javascript">
  $(document).ready(function() {

// Gets the video src from the data-src on each button

var $videoSrc;  
$('.video-btn').click(function() {
    $videoSrc = $(this).data( "src" );
});
console.log($videoSrc);

  
  
// when the modal is opened autoplay it  
$('#myModal').on('shown.bs.modal', function (e) {
    
// set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
$("#video").attr('src',$videoSrc + "?autoplay=0&amp;modestbranding=1&amp;showinfo=0" ); 
})
  


// stop playing the youtube video when I close the modal
$('#myModal').on('hide.bs.modal', function (e) {
    // a poor man's stop video
    $("#video").attr('src',$videoSrc); 
}) 
    
    


  
  
// document ready  
});
$("#mobile-number").intlTelInput();  
  </script>

    <script async defer src="<?php echo Yii::app()->request->getBaseUrl(true)?>/js/manage.js"></script>

<style>#ps-timeline01b4485419e56f26a8c231cc034f4b69 .ps_timeline-marker:before{background:#3e9ff6 !important}#ps-timeline01b4485419e56f26a8c231cc034f4b69 .ps_timeline-content .ps_timeline-label{color:#284c9a !important;font-weight:600 !important;font-size:36px !important;font-family:'Open Sans',sans-serif !important}#ps-timeline01b4485419e56f26a8c231cc034f4b69 .ps_timeline-content .ps_timeline-title{border-bottom-color:#5ac17c !important;font-size:20px !important;font-family:'Poppins',sans-serif !important;border-bottom-style:dotted !important;margin-bottom:18px !important}#ps-timeline01b4485419e56f26a8c231cc034f4b69 .icon-placeholder-v
i{color:#15439f !important}#ps-timeline01b4485419e56f26a8c231cc034f4b69 .ps_timeline-marker:after{background:#5ac17c !important}</style><style>.icon-bar{position:fixed;top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%);z-index:999}.icon-bar
a{display:block;text-align:center;padding:5px
10px;transition:all 0.3s ease;color:white;font-size:20px}.icon-bar a:hover{background-color:#000}.facebook{background:#3B5998;color:white}.twitter{background:#55ACEE;color:white}.google{background:#dd4b39;color:white}.linkedin{background:#007bb5;color:white}.youtube{background:#b00;color:white}.envelope{background:#ccc;color:white}.whatsapp{background:#4fca4f;color:white}.facebook-messenger{background:#00b4ff;color:white}</style>
<div class=icon-bar>
	<a target=_blank href=https://www.facebook.com/Octanetworks/ class=facebook><i class="fa fa-facebook"></i></a>
	<a target=_blank href=https://twitter.com/OctaNetworks class=twitter><i class="fa fa-twitter"></i></a>
	<a target=_blank href=https://www.linkedin.com/company/octanetworks/ class=linkedin><i class="fa fa-linkedin"></i></a>
	<a target=_blank href=https://www.youtube.com/octanetworks class=youtube><i class="fa fa-youtube"></i></a>
	<a target=_blank href=mailto:info@octanetworks.com class=envelope><i class="fa fa-envelope"></i></a>
	<a target=_blank href="https://api.whatsapp.com/send?phone=918976676689" class=whatsapp><i class="fa fa-whatsapp"></i></a>
	<a target=_blank href=https://www.facebook.com/Octanetworks/ class=facebook-messenger style="padding: 12px 0;"><img src=<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/rashid1.png style="width:20px !important;"></a>
</div>



<!-- Start of LiveChat (www.livechatinc.com) code -->
<?php 
// /*<script type="text/javascript">
// window.__lc = window.__lc || {};
// window.__lc.license = 10189522;
// (function() {
//   var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
//   lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
//   var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
// })();
// var LC_API = LC_API || {};
// LC_API.on_prechat_survey_submitted = function(data)
// {
// 	fbq('trackCustom', 'LiveChat', { event: 'Pre-chat submitted' });
// };

// LC_API.on_chat_started = function(data)
// {
// 	fbq('trackCustom', 'LiveChat', { event: 'Chat Started' });
// };

// LC_API.on_postchat_survey_submitted = function(data)
// {
// 	fbq('trackCustom', 'LiveChat', { event: 'Post-chat submitted' });
// };

// LC_API.on_ticket_created = function(data)
// {
// 	fbq('trackCustom', 'LiveChat', { event: 'Ticket created' });
// };
// </script>

// <noscript>
// <a href="https://www.livechatinc.com/chat-with/10189522/">Chat with us</a>,
// powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener" target="_blank">LiveChat</a>
// </noscript>*/?>
</body>
</html>