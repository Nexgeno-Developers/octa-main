<style>
#footer-top {
    position: relative;
    z-index: 999;
}
#footer {
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

<section id="mytraining" class="corporates_traing pddbtm_0">
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-12 mtrainingtext">
			<div class="col-12">
			<?php if(!empty($content->photo2)){ ?>
			<div class="text-center">
         <h1 class="about-head"><?php echo $content->heading ?></h1>
         </div>
         <?php } ?>
				<?php 
		$myclients = '<div class="col-sm-12 no-padding">';
		 foreach($clients as $client){ ?>
		 
					<section id="lab_facelity">
        	<?php 
			
			$myclients .= '<div class="col-sm-2 no-padding" style="padding:5px !important; border:1px solid #666; margin: 0px 10px 10px 0px;"><img src="'.Yii::app()->request->getBaseUrl(true).'/img/clients/'.$client->image.'" class="img-fluid" alt=""></div>';
			
			 ?>
			 </section>
			 <section id="clients_sc">
        <?php }
		$myclients .= '</div>';
		 ?>
		 </section>
		 
				<?php echo str_replace("[OURCLIENTS]",$myclients,$content->content); ?>
        	</div>
            
            <div class="spacing"></div>
		</div>
		
		 <div class="col-lg-4 col-md-4 col-sm-12 width_30percent height_237">
                <div class="sidebaar_slider">
                      <div class="owl-carousel owl-theme">
                           <div class="item">
                                <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/gallery_images/1/39454325_1368406796623056_8517024618752507904_n33.jpg" alt="Fly Me a trainer Training">
                              </div>
                                      
                         <div class="item">
                            <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/gallery_images/1/39509526_1368394743290928_3086486949150588928_n-12.jpg" alt="Fly Me a trainer Training">
                          </div>
                        
                          
                           <div class="item">
                            <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/gallery_images/1/62348548_1591841177612949_7297548940876972032_o31.jpg" alt="Fly Me a trainer Training">
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
     
     
    