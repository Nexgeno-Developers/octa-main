<style>


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
			<li class="active"><?php echo $content->heading ?></li>
		</ol>
	</div>
</section>



<section id="mytraining" class="corporates_traing">
        <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 mtrainingtext"> 
        <?php if(!empty($content->photo2)){ ?>
         <div class="text-center"><h1 class="about-head"><?php echo $content->heading ?></h1></div>
         <?php } ?>
        <?php echo $content->content ?> 
        
        <div id="" class=" owl-theme">


          </div>
		</div>
           <div class="col-lg-4 col-md-4 col-sm-12 width_30percent height_237">
                <div class="sidebaar_slider">
                      <div class="owl-carousel owl-theme">
                           <div class="item">
                                <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/gallery_images/36/St%20Xaviers%20(6)40.jpg" alt="Industrial Visit">
                              </div>
                                      
                         <div class="item">
                            <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/gallery_images/36/Pillai%20College%20Panvel%20(25)2.jpg" alt="Industrial Visit">
                          </div>
                        
                          <div class="item">
                            <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/gallery_images/36/Pillai%20College%20Panvel%20(23)15.jpg" alt="Industrial Visit">
                          </div>
                          
                           <div class="item">
                            <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/gallery_images/36/MD%20College%20Parel%20(1)49.jpg" alt="Industrial Visit">
                          </div>
                          
                           <div class="item">
                            <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/gallery_images/36/IMG_142230.JPG" alt="Industrial Visit">
                          </div>
                          
                          <div class="item">
                            <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/gallery_images/36/IMG_141731.JPG" alt="Industrial Visit">
                          </div>
                          
                      </div>
                </div>
                
                <div class="position_stickys mtrainingright">
               
            <?php require_once Yii::getPathOfAlias('webroot').'/protected/modules/main/views/rightbar.php'; ?>
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
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                items: 1,
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true
              });
            })
     </script>
    