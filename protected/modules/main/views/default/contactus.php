

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
   .rc-anchor.rc-anchor-normal.rc-anchor-light {
   width: 220px;
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
   section#contact-p .career-frm.con_page p {
    padding: 0;
    margin: 0 0 8px;
    margin-bottom:25px !important;
}
section#contact-p .career-frm.con_page .intl-tel-input input#mobile-number {
    height: 41px;
    margin-top: 0px;
}
section#contact-p .intl-tel-input .flag-dropdown .selected-flag {
    margin: 1px;
    padding: 3px 16px 6px 10px;
}

section#contact-p .intl-tel-input input {
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    padding-left: 47px;
    position: relative;
    z-index: 0;
    margin-top: -9px;
    outline:0px !important;
}
.career-frm.con_page ::-webkit-input-placeholder {
    color: #333 !important;
}

section#contact-p .con_page .g-recaptcha {
    margin-top: -8px;
}

.pdbtm25
{
    padding-bottom:25px;
}

section#contact-p .career-frm.con_page {
    float: left;
    position: relative;
    background: #0d274df7;
    padding: 35px 10px 25px 10px;
    margin-bottom: 30px;
    box-shadow: 0px 30px 60px 0px rgb(0 96 255 / 0%);
}

section#contact-p .con_page .contact_add_right .form-control {
    height: 40px !important;
}
input.wpcf7-form-control.wpcf7-text {
    height: 40px;
}
section#contact-p .con_page .contact_add_right .intl-tel-input input {
   height: 40px;
}

section#contact-p .con_page .contact_add_right input {
   border-radius: 2px !important;
    padding: 10px 10px !important;
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
		  	<li class="active"><?php echo $content->heading ?></li>
		</ol>
	</div>
</section>

<section id="contact-p">
   <div class="container">
      <div class="row">
          
           <?php if(!empty($content->photo2)){ ?>
         <div class="text-center"> <h1 class="about-head pdbtm25"><?php echo $content->heading ?></h1></div>
         
         <?php } ?>
         
         
         
         <!---<div class="contact_message">
               <ul>
                   <li><a href="tel:+918976676689"><i class="fa fa-phone-square" aria-hidden="true"></i></a><p>Phone Call</p></li>
                    <li><a href="https://api.whatsapp.com/send?phone=918976676689"><i class="fa fa-whatsapp" aria-hidden="true"></i></a><p>Whatsapp</p></li>
                    <li><a href="mailto:support@octanetworks.com"><i class="fa fa-commenting" aria-hidden="true"></i></a><p>Feedback</p></li>
               </ul>
             
         </div>--->
         
         
         
         
         <div class="col-md-7 col-sm-12 col-xs-12 pdd_right">
        
                 <div class="contact_add_left" style="
    padding-top: 20px;
">
<div class="continfo contact_lft">
<ul>
<li style="
    padding-top: 0px;
"><i class="fa fa-map" aria-hidden="true" style="
"></i>
<div class="contacts_boxex">
<h4>Visit our office</h4>
<span>803 and 804 Chambers W.E.H Metro station, Andheri - Kurla Rd, Andheri East, Mumbai, Maharashtra 400069.</span><br>

</div>
</li><li><i class="fa fa-train" aria-hidden="true"></i>
<div class="contacts_boxex" style="
    margin-left: 4px;
">
<h4>Nearest Metro Station</h4>
<span>Western Express Highway</span>
</div>
</li>
<li><i class="fa fa-phone" aria-hidden="true" style="
"></i>
<div class="contacts_boxex" style="
    padding-left: 5px;
">
<h4>Call Us Now</h4>
<span><a href="tel:+91 8976676689">+91 8976676689</a></span>
</div>
</li>
<li><i class="fa fa-envelope" aria-hidden="true" style="
"></i>
<div class="contacts_boxex">
<h4>Drop Us a Query</h4>
<span><a href="support@octanetworks.com">support@octanetworks.com</a></span>
</div>
</li><li style="
    border-bottom: 0px solid #000;
    padding-top: 13px !important;
"><i class="fa fa-whatsapp" aria-hidden="true" style="
    font-size: 35px !important;
    font-weight: 800;
"></i>
<div class="contacts_boxex" style="
    position: relative;
    left: -3px;
">
<h4>Chat with Us</h4>
<span><a href="https://api.whatsapp.com/send?phone=918976676689">+91 8976676689</a></span>
</div>
</li>
</ul>
</div> </div>
         </div>
         <div class="col-md-5 col-sm-12 col-xs-12 pdd_lft">
            <?php if(!empty($msg)){ ?>
            <div class="alert alert-info"><?php echo $msg; ?></div>
            <?php } ?>
            <div class="career-frm con_page" style="    margin-top: 30px;
    border-radius: 5px">
                <div class="contact_add_right">
                    
                    <h3>Let us help you</h3>
                    
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
                   
                   <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <span class="wpcf7-form-control-wrap text-892">
                        <input type="text" name="name" size="40" class="form-control wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your Name" required="required"></span>
                     </div>
                     </div>
                     
                       <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                        <span class="wpcf7-form-control-wrap text-132"><input type="text" name="course" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="course" required="required"></span>
                    </div>
                    </div>
                    
                    
                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                     <div class="form-group">
                      <span class="wpcf7-form-control-wrap email-859">
                        <input type="email" name="cemail" size="40" class="form-control wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="E-mail" required="required"></span>
                     </div>
                     </div>
                     
                      
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">  
                         <div class="form-group">
                            <input type="tel" id="mobile-number1" name="phone" placeholder="+91">
                        </div>
                       </div>
                       </div>
                     
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pdd_07">
                     <div class="form-group">   
                        <span class="wpcf7-form-control-wrap textarea-88">
                            <textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Comments"></textarea></span>
                    </div>
                    </div>
                   
                  
                       
                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pdd_07">
                          <div class="form-group">
                           <div class="g-recaptcha" data-sitekey="<?=Yii::app()->params['siteKey']?>"></div>
                           <input type="hidden" name="type" value="Get Touch" />
                        </div>
                        </div>
                        
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pdd_07">
                          <div class="form-group sub_btn">
                            <input type="submit" value="Submit" class="wpcf7-form-control wpcf7-submit" style="    background: #3e9ff6 !important;
    font-size: 18px !important;
    font-weight: 600 !important;
    margin-top: -8px !important;"><span class="ajax-loader"></span>
                        </div>
                        </div>
                        
                        
                        
                        
                         </div>
               
               </form>
            </div>
            </div>
         </div>
      

         
      </div>
   </div>
   </div>
</section> 

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.813820824812!2d72.85337677497846!3d19.115821882096952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c982e8c77f75%3A0xbd96733c38cbec51!2sOcta%20Networks%20-%20CCNA%20CCNP%20CCIE%20Training%20in%20Mumbai%20-%20Best%20Networking%20Institute%20India!5e0!3m2!1sen!2sin!4v1707304797241!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>