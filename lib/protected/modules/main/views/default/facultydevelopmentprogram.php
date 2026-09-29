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
<style>
    p {
    font-weight: 400;
    line-height: 28px;
}
.career-frm.con_page {
    padding: 20px 20px 0px 20px !important;
    background: #259295;
    border-radius: 8px;
    float: left;
}
section.faculty .network {
       padding: 120px 45px 0px 45px;
    margin-top: -3%;
}
.faculty .networkconform .career-frm.con_page {
    margin: 15px 0px;
    background: #fff;
    box-shadow: 0 0 15px 15px rgba(0,0,0,0.1);
    border-radius: 4px;
}
input.wpcf7-form-control.wpcf7-submit {
    top: -19px;
}


.campus_images .networkconform span input.wpcf7-form-control.wpcf7-text.wpcf7-validates-as-required::placeholder {
    color: #333 !important;
}
.campus_images input:focus-visible {
    outline: none !important;
}

.campus_images textarea.wpcf7-form-control.wpcf7-textarea::placeholder {
    color: #333 !important;
}
.faculty .networkconform .career-frm.con_page input.wpcf7-form-control.wpcf7-submit {
    border-bottom: 0px !important;
}

.faculty .career-frm.con_page p {
    padding: 0;
    margin: 0 0 17px;
}

.campus_images {
    padding-left: 90px;
    padding-right: 90px;
}
.campus_images.networkconform input.wpcf7-form-control.wpcf7-text.wpcf7-validates-as-required::placeholder {
    color: #333 !important;
}

</style>

<section id="product-info">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script language="javascript">
   $(function () {	
       $("#ccountry").on("change",function(){
          $id=$("#ccountry").val();
          $url=$("#ccountry").data("url");
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
                           $("#cphone").val($html);
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
<style type="text/css">
   .con_page .g-recaptcha {
    transform: scale(0.77);
    -webkit-transform: scale(0.90);
    transform-origin: 0 0;
    -webkit-transform-origin: 0 0;
    margin-left: -0px;
    margin-top: -8px;
    margin-bottom: 21px;
}
.con_page .mrg_p {
    margin-top: -57px;
}
</style>
	<div class="text-center">
	<?php if(!empty($content->photo2)){ ?>
         <h1 class="inner_headings1"><?php echo $content->heading ?></h1>
         <?php } ?>
		</div>
		<section class="faculty">
<div class="">
<div class="col-md-5 col-lg-6 col-xl-6 col-sm-12 col-xs-12 text-center network">
<img alt="Networking Experts" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/user_iconss.png">
<h4>Learn Networking From Industry Experts</h4>
<p style="color: #58585b !important">Exclusive training programs designed for college faculties and teachers. Get acquainted you with latest technologies in networking domain.</p>
</div>

		<div class="col-md-7 col-lg-6 col-xl-6 col-sm-12 col-xs-12 campus_images networkconform">
            <?php if(!empty($msg)){ ?>
            <div class="alert alert-info"><?php echo $msg; ?></div>
            <?php } ?>
            <div class="career-frm con_page campus_collge_tr">
               <h2 style="margin-top:0px; color:#333 !important;">Contact Us</h2>
               <?php
                  $mType = Yii::app()->request->getParam("type");
                  if($mType == 1){ $alertClass = "alert-success";}else{$alertClass = "alert-danger";}
                   ?>
               <?php if(Yii::app()->user->hasState('fmessage')){ ?>
               <div class="text-center alert <?=$alertClass?>"><span style=""><?php echo Yii::app()->user->getState("fmessage"); ?></span></div>
               <?php } ?>
               <?php Yii::app()->user->setState("fmessage", null); ?>
               <form role="form" method="post" action="<?php echo Yii::app()->createUrl("main/default/contactus"); ?>" name="contact-us">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 lft-frm">
                     <p> 
                        <span class="wpcf7-form-control-wrap text-892">
                        <input type="text" name="name" size="40" class="form-control wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your Name*" required="required"></span>
                     </p>
                     <!---<p> 
                        <span class="wpcf7-form-control-wrap email-859">
                           <?php /* $countries = Countries::model()->findAll(); ?>
                           <select class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="ccountry" data-url="<?php echo Yii::app()->createUrl("main/exam/getphone");?>" name="ccountry" required="required">
                              <?php foreach($countries as $country){ ?>
                              <option value="<?=$country->sortname?>" <?php if($country->sortname == "IN"){ ?> selected <?php } ?>><?=$country->name?></option>
                              <?php } */?>
                           </select>
                        </span>
                     </p>-->
                    
                    </p>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 rght-frm">
				   <p class="mrg_btm0"> 
                        <span class="wpcf7-form-control-wrap email-859">
                        <input type="email" name="cemail" size="40" class="form-control wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="E-mail*" required="required"></span>
                     </p>
                     <!---<p> 
                        <span class="wpcf7-form-control-wrap text-132">
                            <input type="text" name="course" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Course" required="required"></span>
                            
                     </p>-->
                     
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 rght-frm">
				  <p> 
                       <div class="form-group">
                            <input type="tel" id="mobile-number1" class="form-control" placeholder="+91">
                        </div>
                        
                  </p>
                  </div>
                  
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 rght-frm">
				    <p> 
                        <span class="wpcf7-form-control-wrap textarea-88"><textarea name="message" class="form-control wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Comments"></textarea></span>
                     </p>
				   </div>
				   
                  
                  
                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 rght-frm pddd_00">
				  <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 rght-frm">
				   <div class="g-recaptcha" data-sitekey="<?=Yii::app()->params['siteKey']?>">
				   </div>
				   </div>
				   </div>
				  
                  
                  
				   
				 
                  <p class="sub-btn" style="margin-bottom:10px;">
                     <input type="submit" value="Submit" class="wpcf7-form-control wpcf7-submit"><span class="ajax-loader"></span>
                  </p>
               </form>
            </div>
    </div>
</section>
			<?php echo $content->content ?>   
		</div>
	</div>
	<div style="clear:both;"></div>
</section>