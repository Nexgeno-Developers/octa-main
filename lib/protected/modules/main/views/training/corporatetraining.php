<style>
    section#mytraining {
        background: transparent;
}
section#footer-top {
    position: relative;
    z-index: 999;
}

footer#footer {
    position: relative;
    z-index: 999;
}

</style>

<?php 
   if(!empty($content->photo2)){
    $imgPath = Yii::app()->request->getBaseUrl(true) . '/img/ebackground/'.$content->photo2;
   
?>
               <picture>
               <?php if(!empty($content->photo_mob)){   ?>
                 <source srcset="<?php echo Yii::app()->request->getBaseURL(true);?>/img/ebackground/<?=$content->photo_mob?>" media="(max-width: 468px)">
               <?php } ?>
                <?php if(!empty($content->photo_tab)){   ?>
                 <source srcset="<?php echo Yii::app()->request->getBaseURL(true);?>/img/ebackground/<?=$content->photo_tab?>" media="(max-width: 967px)">
               <?php } ?>
               <?php if(!empty($content->photo2)){  ?>
                 <source srcset="<?php echo Yii::app()->request->getBaseURL(true);?>/img/ebackground/<?=$content->photo2?>">
                 <img class="slide-image"  src="<?php echo Yii::app()->request->getBaseURL(true);?>/img/ebackground/<?=$content->photo2?>" alt="" >
                 <?php } ?>
               </picture>

   <?php }else{

    $imgPath = Yii::app()->request->getBaseUrl(true) . '/img/ebackground/default.jpg';?>
<section class="inner-banner" style="background-image: url(<?=$imgPath?>);">
   <div class="container">
   <h1><?php echo $content->heading ?></h1>
   </div>
</section>
<?php    } ?>

<section class="breadcrumb">
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>"><i class="fa fa-home"></i></a></li>
			<li><a href="<?php echo Yii::app()->createUrl("main/training/index"); ?>">Training</a></li>
		  	<li class="active"><?php echo $content->heading ?></li>
		</ol>
	</div>
</section>

<section id="mytraining" class="corporates_traing ">
        <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 mtrainingtext">
        <div class="col-sm-12">
        <?php if(!empty($content->photo2)){ ?>
         <div class="text-center">
             <h1 class="about-head"><?php echo $content->heading ?></h1></div>
         <?php } ?>
        <?php 
		$myclients = '<div class="col-sm-12 no-padding">';
		 foreach($trainers as $client){ ?>
        	<?php 
			
			$myclients .= '<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 no-padding" style="padding:5px !important; border:1px solid #666; margin: 0px 10px 10px 0px;"><img src="'.Yii::app()->request->getBaseUrl(true).'/img/clients/'.$client->image.'" class="img-fluid" alt=""></div>';
			
			 ?>
        <?php }
		$myclients .= '</div>';
		 ?>
        <?php echo str_replace("[OURCLIENTS]",$myclients,$content->content); ?>
        </div>
        
        <div id="" class=" owl-theme">
        	
          </div>
		</div>
         <div class="col-lg-4 col-md-4 col-sm-12 width_30percent height_237">
                
                <div class="sidebaar_slider">
                      <div class="owl-carousel owl-carousel-90 owl-theme">
                         
                           <div class="item">
                            <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/gallery_images/35/corporate_traning_114.jpg" alt="Corporate Training">
                          </div>
                          
                           <div class="item">
                            <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/gallery_images/35/IMG-20190913-WA00084.jpg" alt="Corporate Training">
                          </div>
                          
                          <div class="item">
                            <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/gallery_images/35/1%20(3)11.jpg" alt="Corporate Training">
                          </div>
                          
                          <div class="item">
                            <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/gallery_images/35/1%20(1)3.jpg" alt="Corporate Training">
                          </div>
                          
                      </div>
                </div>
                
                
                <div class="position_stickys mtrainingright">
           
            
             <form action="<?php echo Yii::app()->createUrl("main/forms/freecorporatetraining"); ?>" method="post" role="form" class="quickcontact">
                 
               <table width="99%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><h4>Enquiry Form</h4></td>
  </tr>
  <tr>
    <td height="50"><input type="text" name="name" id="name" class="form-control" required="required" placeholder="Your Name*" /></td>
  </tr>
  <tr>
    <td height="50"><input type="email" name="email" id="email" class="form-control" required="required" placeholder="Your Mail*" /></td>
  </tr>
  <tr>
    <td height="50"><input type="tel" name="phone" id="mobile-number3" class="form-control" required="required" placeholder="Phone No.*" /></td>
  </tr>
  <tr>
    <td height="50"><input type="text" name="coursename" id="coursename" class="form-control" required="required" placeholder="Course Name*" /></td>
  </tr>
  <tr>
    <td height="50"><input type="text" name="companyname" id="companyname" class="form-control" required="required" placeholder="Company Name*" /></td>
  </tr>
  <tr>
    <td height="85"><div class="g-recaptcha" data-sitekey="<?=Yii::app()->params['siteKey']?>"></div></td>
  </tr>
   <input type="hidden" name="type" value="Request your Trial class" />
  <tr>
    <td height="50"><button type="submit" class="quickform-btn" />Send</button></td>
  </tr>
</table>

             </form>
                        
            </div>
            
            
            
            <div class="sidebar_quicks"> 
            <h4>Quick Links</h4>
                <div class="side_menu" style="padding-left: 0px;padding-top: 0px;">
                   <ul>
                        <li><a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/about-octa-network"><i class="fa fa-angle-double-right" aria-hidden="true"></i> About us</a></li>
                        <li><a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/our-journey"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Our Journey</a></li>
                        <li><a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/octa-networks-awards"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Awards &amp; Recognitions</a></li>
                        <li><a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>octa-networks-experts"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Certified Technical Team</a></li>
                        <li><a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/photo-gallery"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Photo Gallery</a></li>
                        <li><a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/student-reviews"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Students Reviews</a></li>
                        <li><a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/careers"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Career</a></li>
                        <li><a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/payment-modes"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Payment Modes</a></li>
                        <li><a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/contact-us"><i class="fa fa-angle-double-right" aria-hidden="true"></i>  Contact Us</a></li>
                    </ul>
                </div>
            </div>
            </div>
            
            
            
            
            
            
        </div>
    </section>

<script>
            $(document).ready(function() {
              var owl = $('.owl-carousel-90');
              owl.owlCarousel({
                items: 1,
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true
              });
            })
            
$(document).ready(function() {
  var owl = $('.owl-carousel-slider');
  owl.owlCarousel({
    items: 4,
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 2 // Display one item at a time on small screens
      },
      768: {
        items: 4 // Display two items at a time on medium screens
      },
      992: {
        items: 6 // Display three items at a time on large screens and above
      }
    }
  });
});


// Show the first four images
$(".img-321:lt(8)").show();

// Hide the "Show Less" button initially
$("#hide-btn").hide();

// When the "Show More" button is clicked
$(".btn-corporate-gallery").on('click', function(event) {
  // Prevent default behavior
  event.preventDefault();
  // All hidden images
  var $hidden = $(".img-321:hidden");
  // Show the next four images
  $($hidden).slice(0, 4).fadeIn(800);
  // If there are no more hidden images, hide "Show More" button and show "Show Less" button
  if ($hidden.length === 0) {
    $(this).fadeOut(function() {
      $("#hide-btn").fadeIn();
    });
  }
});

// When the "Show Less" button is clicked
$("#hide-btn").on('click', function(event) {
  // Prevent default behavior
  event.preventDefault();
  // Visible images
  var $visible = $(".img-321:visible");
  // Hide the last four visible images
  $($visible).slice(-4).fadeOut(800, function() {
    // If all images are hidden, reset to default set of four images
    if ($(".img-321:visible").length === 8) {
      // Hide "Show Less" button and show "Show More" button
      $(this).fadeOut(function() {
        $("#hide-btn").hide(); // Hide the "Show Less" button
        $(".btn-corporate-gallery").fadeIn(); // Show the "Show More" button
      });
      // Show the first four images
      $(".img-321:lt(8)").fadeIn(800);
    }
  });
});



            
//         $(document).ready(function() {
//   var owl = $('.owl-carousel-45');
//   owl.owlCarousel({
//     items: 4,
//     loop: true,
//     margin: 10,
//     autoplay: true,
//     autoplayTimeout: 3000,
//     autoplayHoverPause: true,
//      responsive: {
//       0: {
//         items: 2 // Display one item at a time on small screens
//       },
//       768: {
//         items: 3 // Display two items at a time on medium screens
//       },
//       992: {
//         items: 4 // Display three items at a time on large screens and above
//       }
//     }
//   });
// });
//         $(document).ready(function() {
//   var owl = $('.owl-carousel-60');
//   owl.owlCarousel({
//     items: 4,
//     loop: true,
//     margin: 10,
//     autoplay: true,
//     autoplayTimeout: 3000,
//     autoplayHoverPause: true,
//      responsive: {
//       0: {
//         items: 2 // Display one item at a time on small screens
//       },
//       768: {
//         items: 3 // Display two items at a time on medium screens
//       },
//       992: {
//         items: 4 // Display three items at a time on large screens and above
//       }
//     }
//   });
// });
     </script>

    
    