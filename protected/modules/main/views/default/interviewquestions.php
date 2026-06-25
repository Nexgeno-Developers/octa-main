

<style>
    #myModalSubscribe1 input::placeholder {
    font-size: 14px;
}

#myModalSubscribe1 input {
    background: #fff !important;
}

.sub_modal_2 .g-recaptcha {
    transform: scale(0.77);
    -webkit-transform: scale(1.03) !important;
    transform-origin: 0 0;
    -webkit-transform-origin: 0 0;
    margin-left: -6px;
}
.career_bg input[type=email], input[type=tel], input[type=date], select {
    color: #333 !important;
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
<?php   } ?>

<section class="breadcrumb">
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>"><i class="fa fa-home"></i></a></li>
			<li class="active"><?php echo $content->heading ?></li>
		</ol>
	</div>
</section>
<section id="product-info">
	<div class="text-center">
	<?php if(!empty($content->photo2)){ ?>
         <h1 class="inner_headings1 pdd_btm20"><?php echo $content->heading ?></h1>
         <?php } ?>
		</div>
	
	
	    <div class="container">
	        <div class="interview_question">
	            <div class="interview_boxex">
	                <div class="row">
	                    <h3>CCNA Interview Question</h3>
	                    <div class="interview_sections">
    	                    <div class="col-md-6">
    	                         <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/pdf_icon.png"> <h4>Interview Question Topic - SD WAN</h4>
    	                    </div>
    	                     <div class="col-md-6">
    	                        <a class="download" data-toggle="modal" data-target="#myModalSubscribe1" style="cursor:pointer;"> Download PDF <i class="fa fa-download"></i></a>
    	                    </div>
	                     </div>
	                     
	                     <div class="interview_sections">
    	                    <div class="col-md-6">
    	                         <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/pdf_icon.png"> <h4>Interview Question Topic - BGP</h4>
    	                    </div>
    	                     <div class="col-md-6">
    	                        <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/interview_question/pdf/bgp_interview_question.pdf" download> Download PDF <i class="fa fa-download"></i></a>
    	                    </div>
	                     </div>
	                     
	                     <div class="interview_sections">
    	                    <div class="col-md-6">
    	                         <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/pdf_icon.png"> <h4>Interview Question Topic - MPLS</h4>
    	                    </div>
    	                     <div class="col-md-6">
    	                        <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/interview_question/pdf/mpls_inertview.pdf" download> Download PDF <i class="fa fa-download"></i></a>
    	                    </div>
	                     </div>
	                     
	                     
	                </div>
	            </div>	 
	        </div>           
	   </div>
	        
	<div style="clear:both;"></div>
</section>



<div class="sub_modal_2">
         <div class="modal fade" id="myModalSubscribe1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-smll subscribe_home" role="document">
               <div class="modal-content">
                  <div class="modal-header text-center">
                     <button type="button" class="close close1" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    
                  </div>
                  <div class="modal-body">
                     <div class="">
                              <div class="form">
                                 <form action="<?php echo Yii::app()->createUrl("main/forms/downloadbrochure"); ?>" method="post" role="form" class="contactForm" >
            					    <div class="form-group form-row"> 
                                    <input type="name" name="name" class="form-control" placeholder="Name" required="required">
                                    </div>
                                    <div class="form-group form-row">
                                       <input type="email" name="myemail" class="form-control" placeholder="Email" required="required" >
                                    </div>
            
                                    <div class="form-group form-row">
                                        <input type="tel" id="mobile-number2"  name="phone" placeholder="+91">
                                    </div>
                                    
                        <div class="form-group">
                          <input type="tel" name="whatsapp_no" class="form-control" placeholder="Whatsapp No" required="required" >
                        </div>
                        
                                    
                                    <div class="form-group form-row">
                                       <div class="g-recaptcha" data-sitekey="<?=Yii::app()->params['siteKey']?>"></div>
                                       <input type="hidden" name="type" value="Download Brochure <?php echo isset($examcode) ? $examcode : null; ?> " />
                                       <input type="hidden" name="brochure_link" value="<?php echo isset($exam_brochure_link) ? $exam_brochure_link : null; ?>" />
                                    </div>
																		<div class="form-group form-row">
																		<input type="checkbox" class="subscribe_approval" name="subscribe_approval" value="1" checked="checked">&nbsp;&nbsp;<span class="subscribe">Subscribe to our Newsletter.</span><br>  
																		</div>
                                    <div class="form-group form-row">
                                       <button class="brochure" type="submit" title="Submit">Download Brochure Now</button>
                                    </div>
                                 </form>
                          
               </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>