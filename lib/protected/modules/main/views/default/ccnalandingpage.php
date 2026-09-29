<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script language="javascript">
   $(function () {	
       $("#jcountry").on("change",function(){
          $id=$("#jcountry").val();
          $url=$("#jcountry").data("url");
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
                           $("#jphone").val($html);
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
<style>
#contact_frm2 {
       padding: 20px;
    overflow: hidden;
    padding-top: 20px;
    margin-top: 20px;
    border-radius: 0;
    background-image: linear-gradient(135deg,#19519e,#1dd5e6) !important;
    margin-bottom: 20px;
}
#contact_frm2 label {
    float: left !important;
    color: #fff !important;
}
div#contact_frm2 button.enquire-now-jobg {
    background: #0b304d;
    border-radius: 0;
    padding: 4px 16px !important;
    border-radius: 2px;
}
</style>
<section class="breadcrumb">
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>"><i class="fa fa-home"></i></a></li>
			<li class="active"><?php echo $content->heading ?></li>
		</ol>
	</div>
</section>
<div class="wrapper text-center job-guaranteed-courses landing_mian_hed  clearfix">
   <div class="container">
      <div class="col-md-8"> 
            <h1 class="txt-wht text-uppercase"> <strong>New CCNA Certification Training</strong></h1>  
         <p style="">Launch your career with the new CCNA Certification and training program which prepares you for associate-level job roles in the IT sector. The new refreshed course covers new topics such as security, automation and programmability which are required in the current generation.</p>
				 <p>Get your training for the new CCNA at Octa Networks and get certified by passing the new 200-301 CCNA exam with our new CCNA Bootcamp.</p>
      
      </div>
      <div class="col-md-4">
	  <div id="contact_frm2">
            <h3 class="enquiry_now_btn">Enquire Now</h3>
            <?php
               $mType = Yii::app()->request->getParam("type");
               if($mType == 1){ $alertClass = "alert-success";}else{$alertClass = "alert-danger";}
                ?>
            <?php if(Yii::app()->user->hasState('fmessage')){ ?>
            <div class="text-center alert <?=$alertClass?>"><span style=""><?php echo Yii::app()->user->getState("fmessage"); ?></span></div>
            <?php } ?>
            <?php Yii::app()->user->setState("fmessage", null); ?>
            <form role="form" method="post" action="<?php echo Yii::app()->createUrl("main/forms/enquirenow"); ?>" class="quickcontact" name="enquirenow"> 
               <div class="form-row">
                  <div class="col-lg-12">
					<label>Name:</label>
                     <input type="text" name="name" class="form-control" placeholder="Your Name*" required="required">
                     <div class="validation"></div>
                  </div>
               </div>
               <div class="form-row"> 
                  <div class="col-lg-12">
				  <label>Mobile No:</label>
                     <input type="text" class="form-control" name="phone" id="jphone" placeholder="Mobile Number*" value="" required="required" onkeypress="return isNumberKey(event)" maxlength="15">
                     <div class="validation"></div>
                  </div>
               </div>
               <div class="form-row">
                  <div class="col-lg-12">
				  <label>E-mail:</label>
                     <input type="email" name="emaill" class="form-control" placeholder="E-mail*" required="required">
                     <div class="validation"></div>
                  </div> 
               </div> 
               <div class="form-group">
                  <div class="g-recaptcha" data-sitekey="<?=Yii::app()->params['siteKey']?>"></div>
                  <div class="validation"></div>
               </div>
               <input type="hidden" name="type" value="Enquire Now" />
               <div class="text-center"><button class="enquire-now-jobg" type="submit" title="Send Message">Submit </button></div>
            </form>
         </div>
      </div>
   </div>
</div> 
<section class="priviliges-enjoyed job-guarantee-page clearfix">   
   <div class="container">
    <h2> Course Details</h2> 
      <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
         <div class="factSectionContent">
            <div class="factSectionLeft"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/Network-fundamentals200x200.jpg" alt="highest paid salary in it sector"></div>
            <div class="Privileges-heading">
               <h4 style="color:black;">Network fundamentals</h4>
               <p></p>
            </div>
         </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
         <div class="factSectionContent">
            <div class="factSectionLeft"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/Network-access200x200.png" alt="international job opportunities"></div>
            <div class="Privileges-heading">
               <h4 style="color:black;">Network access</h4>
               <p></p>
            </div>
         </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
         <div class="factSectionContent">
            <div class="factSectionLeft"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/IP-connectivity200x200.png" alt="flexible working hours"></div>
            <div class="Privileges-heading">
               <h4 style="color:black;">IP connectivity</h4>
               <p></p>
            </div>
         </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
         <div class="factSectionContent">
            <div class="factSectionLeft"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/IP-services-200x200.png" alt="cisco partnership requirement"></div>
            <div class="Privileges-heading">
               <h4 style="color:black;">IP services</h4>
               <p></p>
            </div>
         </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
         <div class="factSectionContent">
            <div class="factSectionLeft"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/Securit-fundamentals-200x200.png" alt="expert level skillset"></div>
            <div class="Privileges-heading">
               <h4 style="color:black;">Security <br>fundamentals</h4>
               <p></p>
            </div>
         </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
         <div class="factSectionContent">
            <div class="factSectionLeft"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/Automation-and-programmability-200x200.png" alt="prestige and credibility"></div>
            <div class="Privileges-heading">
               <h4 style="color:black;">Automation and <br>programmability</h4>
               <p></p>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="priviliges-enjoyed job-guarantee-page clearfix" style="background-color:#f5f5f5;">   
   <div class="container">
    <h2> Prerequisites<strong><p>There are no formal prerequisites for CCNA certification, but you should have an understanding of the exam topics before taking the exam.</p></strong></h2> 
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
              <p>CCNA candidates often also have:</p>
				<ul>
				<li>One or more years of experience implementing and administering Cisco solutions</li>
				<li>Knowledge of basic IP addressing</li>
				<li>A good understanding of network fundamentals</li>
				</ul>  
      </div>    
   </div>
</section>
 
<!---------------testminiols open------------------->
<section id="testimonials" class="section-bg">
   <div class="container">
      <header class="section-header">
         <h3 class="color-white mainheaderWhite">What student say about Octa Networks</h3>
      </header>
      <div class="row justify-content-center">
         <div class="landing_testi">
            <div class="owl-carousel testimonials-carousel owl-loaded owl-drag">
               <div class="owl-stage-outer">
                  <div class="owl-stage" style="transform: translate3d(-10160px, 0px, 0px); transition: 0.25s; width: 14605px;">
                     <div class="owl-item cloned" style="width: 635px;">
                        <div class="testimonial-item">
                           <div class="col-lg-3 col-md-12">
                              <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/testimonials/8F66ODyvrBa.png" class="testimonial-img" alt="Talib Ansari">
                           </div>
                           <div class="col-lg-9 col-md-12">
                              <div class="apct-testimonial-content">
                                 <p>I am pursuing CCNA from Octa Networks. I'm having a very good experience here.As the staff is very friendly in class.And the thing i like the most here is, everything taught in class is also practiced in lab and professor's are very experienced.</p>
                              </div>
                              <h3 class="apct-testimonial-title-name">Talib Ansari</h3>
                           </div>
                        </div>
                     </div>
                     <div class="owl-item cloned" style="width: 635px;">
                        <div class="testimonial-item">
                           <div class="col-lg-3 col-md-12">
                              <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/testimonials/9PUL2h1rnmj.jpg" class="testimonial-img" alt="Ajay Bhalla">
                           </div>
                           <div class="col-lg-9 col-md-12">
                              <div class="apct-testimonial-content">
                                 <p>Octa network is such great place . To hole world global training Centre . I such a trainer is Jagdish Rathore sir provide training CCNA. / CCNP/ CCIE tramendous.. there his mind set .it's great mentor , trainer , motivations .he is practically Person. Repeated every dout particular topic Clear</p>
                              </div>
                              <h3 class="apct-testimonial-title-name">Ajay Bhalla</h3>
                           </div>
                        </div>
                     </div>
                     <!--<div class="owl-item cloned" style="width: 635px;">
                        <div class="testimonial-item">
                           <div class="col-lg-3 col-md-12">
                              <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/testimonials/105jvWZqMruB.jpg" class="testimonial-img" alt="Ishwari Mhatre">
                           </div>
                           <div class="col-lg-9 col-md-12">
                              <div class="apct-testimonial-content">
                                 <p>If any one ask me about cisco CCNA and CCNP training then I would definitely recommend about octa networks as it’s a great experience of mine learning here.</p>
                              </div>
                              <h3 class="apct-testimonial-title-name">Ishwari Mhatre</h3>
                           </div>
                        </div>
                     </div>-->
                   </div>
               </div>
               <div class="owl-nav disabled">
                  <button type="button" role="presentation" class="owl-prev">
                  <span aria-label="Previous">‹</span>
                  </button>
                  <button type="button" role="presentation" class="owl-next">
                  <span aria-label="Next">›</span>
                  </button>
               </div>
               <div class="owl-dots">
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!---------------testiminiols close------------------>
<section id="portfolio" class="clearfix">
   <div class="container">
      <header class="section-header">
         <h3 class="section-title">Training Photo</h3>
         <!----<p class="view-all-link"><a style="color:#000;" href="/photo-gallery/">View all <i class="tmi- tmi-next leftpadding_10"></i></a></p>--->
      </header>
      <div class="portfolio-container" style="position: relative; height: 0px;">  
			 			<div class="col-lg-3 col-md-4 col-sm-6">				 
			<div class="row">
					 <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/photo-gallery/">
					 <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/gallery_images/26/934.jpg" class="img-fluid" alt="">
					 </a>
			</div>		 
			</div>
						<div class="col-lg-3 col-md-4 col-sm-6">				 
			<div class="row">
					 <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/photo-gallery/">
					 <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/gallery_images/26/1117.jpg" class="img-fluid" alt="">
					 </a>
			</div>		 
			</div>
						<div class="col-lg-3 col-md-4 col-sm-6">				 
			<div class="row">
					 <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/photo-gallery/">
					<img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/gallery_images/26/125.jpg" class="img-fluid" alt="">
					 </a>
			</div>		 
			</div>
						<div class="col-lg-3 col-md-4 col-sm-6">				 
			<div class="row">
					 <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/photo-gallery/">
					<img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/gallery_images/26/35027.jpg" class="img-fluid" alt="">
					 </a>
			</div>		 
			</div>
						<div class="col-lg-3 col-md-4 col-sm-6">				 
			<div class="row">
					 <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/photo-gallery/">
			  	    <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/gallery_images/26/home19.jpg" class="img-fluid" alt="">
					 </a>
			</div>		 
			</div>
						<div class="col-lg-3 col-md-4 col-sm-6">				 
			<div class="row">
					 <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/photo-gallery/">
					 <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/gallery_images/26/home34.jpg" class="img-fluid" alt="">
					 </a>
			</div>		 
			</div>
						<div class="col-lg-3 col-md-4 col-sm-6">				 
			<div class="row">
					 <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/photo-gallery/">
					 <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/gallery_images/26/hometran13.jpg" class="img-fluid" alt="">
					 </a>
			</div>		 
			</div>
						<div class="col-lg-3 col-md-4 col-sm-6">				 
			<div class="row">
					 <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/photo-gallery/">
					 <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/gallery_images/26/hometran213.jpg" class="img-fluid" alt="">
					 </a>
			</div>		 
			</div>
			 
         </div>
   </div>
</section>
<section id="reason-join" class="factSectionNw job-guarantee-page">
   <h3 class="color-white"> Reasons to Join Octa Networks</h3>
   <div class="container">
      <div class="row">
         <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <div class="factSectionContent">
               <div class="factSectionLeft"> <i class="fa fa-server" aria-hidden="true"></i></div>
               <div class="factSectionRight">
                  <h4>Worlds Largest <br>Cisco Labs</h4>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <div class="factSectionContent">
               <div class="factSectionLeft"> <i class="fa fa-clock-o" aria-hidden="true"></i></div>
               <div class="factSectionRight">
                  <h4>24x7 <br>Lab Facility</h4>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <div class="factSectionContent">
               <div class="factSectionLeft"> <i class="fa fa-users" aria-hidden="true"></i></div>
               <div class="factSectionRight">
                  <h4>Biggest Team <br>of CCIE Certified Trainers</h4>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <div class="factSectionContent">
               <div class="factSectionLeft">
                  <div class="infinity"></div>
               </div>
               <div class="factSectionRight">
                  <h4>Unlimited <br>Repetition</h4>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <div class="factSectionContent">
               <div class="factSectionLeft"> <i class="fa fa-book" aria-hidden="true"></i></div>
               <div class="factSectionRight">
                  <h4>Free Practical <br>Workbooks</h4>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <div class="factSectionContent">
               <div class="factSectionLeft"> <i class="fa fa-question-circle" aria-hidden="true"></i></div>
               <div class="factSectionRight">
                  <h4>Free Interview <br>Questions Workbook</h4>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <div class="factSectionContent">
               <div class="factSectionLeft"> <i class="fa fa-search" aria-hidden="true"></i></div>
               <div class="factSectionRight">
                  <h4>Dedicated <br>Placement Cell</h4>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <div class="factSectionContent">
               <div class="factSectionLeft"> <i class="fa fa-server" aria-hidden="true"></i></div>
               <div class="factSectionRight">
                  <h4>100% Practicals <br>on Real Devices</h4>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>