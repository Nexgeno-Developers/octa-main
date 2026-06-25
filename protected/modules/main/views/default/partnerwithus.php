<style type="text/css">
.rc-anchor.rc-anchor-normal.rc-anchor-light {
    width: 280px !important;
}

.rc-anchor-normal {
    height: 74px;
    width: 280px !important;
}
.career-frm.con_page iframe {
    width: 72.5%;
    margin-top: 0px;
    border-right: 1px solid #d3d3d3;
    border-radius: 3px;
    box-shadow: 0 0 4px 1px rgba(0,0,0,.08);
    -webkit-box-shadow: 0 0 4px 1px rgba(0,0,0,.08);
    -moz-box-shadow: 0 0 4px 1px rgba(0,0,0,.08);
}
#partner-withus h1 {
    padding-left: 96px;
}
section#partner-withus .g-recaptcha {
    transform: scale(0.77);
    -webkit-transform: scale(.96);
    transform-origin: 0 0;
    -webkit-transform-origin: 0 0;
}
.feedback-form1 input::placeholder {
    font-size: 13px;
}
@media(max-width:767px){
  #partner-withus h1 {
    padding-left: 0px !important;
}  
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
		  	<li><a href="<?php echo Yii::app()->createUrl("main/default/aboutus"); ?>">About us</a></li>
			<li class="active"><?php echo $content->heading ?></li>
		</ol>
	</div>
</section>
<section id="partner-withus">
	<div class="container">
  <?php if(!empty($content->photo2)){ ?>
  <div class="col-lg-12 col-md-12 col-sm-12" id="">
      <div class="text-center">
<h1 class="about-head"><?php echo $content->heading ?></h1></div>
         <?php } ?></div>
		<div class="col-lg-8 col-md-8 col-sm-12" id="">
			<?php echo $content->content ?>  
		</div>
        <div class="col-lg-4 col-md-4 col-sm-12">
        	<div class="col-sm-12 feedback-form1">
            <h2 class="text-center">Contact Us Now</h2>

				<?php

			$mType = Yii::app()->request->getParam("type");
			if($mType == 1){ $alertClass = "alert-success";}else{$alertClass = "alert-danger";}
			 ?>

			<?php if(Yii::app()->user->hasState('fmessage')){ ?>
			<div class="text-center alert <?=$alertClass?>"><span style=""><?php echo Yii::app()->user->getState("fmessage"); ?></span></div>
			<?php } ?>
			<?php Yii::app()->user->setState("fmessage", null); ?>

				<form role="form" method="post" action="<?php echo Yii::app()->createUrl("main/forms/feedback"); ?>" class="feedback" name="feedback">
            	
                    <div class="col-md-12 col-xs-12">
                        <div class="form-group">
                            <input type="text" class="form-control" name="fname" placeholder="Your Name*" required="required" />
                        </div>
                        </div>
                 
                 <div class="col-md-12 col-xs-12">
                         <div class="form-group">
                         <input type="email" class="form-control" name="femaill" placeholder="Email*" required="required" />
                         </div>
                         </div>
                
                <div class="col-md-12 col-xs-12">
                        <div class="form-group">
                        <textarea class="form-control" cols="40" rows="10" name="fmessage" placeholder="Feedback" required="required" style="color: #555 !important;"></textarea>
                        </div>
                        </div>
                  
                  <div class="col-md-12 col-xs-12">
                        <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="<?=Yii::app()->params['siteKey']?>"></div>
                        </div>
                        </div>
                 
                   <div class="col-md-12 col-xs-12">
                <div class="form-group">
					<input type="hidden" name="type" value="FeedBack" />
					<input type="submit" value="submit" class="btn btn-success" />
                  </div>
                  </div>
				</form>
            </div>
        </div>
	</div>
</section>