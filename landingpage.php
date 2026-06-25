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


<div class="wrapper text-center job-guaranteed-courses main_arehigh">
<div class="container">
<div class="col-md-8">
    <div>
        <h1 class="txt-wht text-uppercase" style="font-size: -webkit-xxx-large;font-weight: 900; text-align:left;">100% Job Guaranteed Courses</h1></div>
    <div style="text-align:left;">with starting package of <strong>4-8 lacs per annum</strong> after <strong>CCIE Training</strong> from <strong>Octa Networks.</strong></div>
</div>
<div class="col-md-4">
   
</div>
</div>
</div>

 
 


<section id="Ready-ccie" class="job-guarantee-page  cont-sec about_spc">
    <div class="container">
				<div class="col-md-8">
					<h2 class="head_align_lft">Are you Ready to be a CCIE? <br><span>Let’s review Cisco’s certification lineup to see how they can shape your career and where the CCIE fits in.</span></h2>
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
         
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-row">
                  <div class="col-lg-12">
                    <input type="text" name="name" class="form-control" placeholder="Your Name*" required="required">
                    <div class="validation"></div>
                  </div>
                </div>
				<div class="form-row">
                  <div class="col-lg-6">
                    <?php $countries = Countries::model()->findAll(); ?>
					<select class="dropdown form-control" id="jcountry" data-url="<?php echo Yii::app()->createUrl("main/exam/getphone");?>" name="jcountry" required="required">
						<?php foreach($countries as $country){ ?>
							<option value="<?=$country->sortname?>" <?php if($country->sortname == "IN"){?> selected="selected" <?php } ?>><?=$country->name?></option>
						<?php } ?>
					</select>
                    <div class="validation"></div>
                  </div>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" name="phone" id="jphone" placeholder="Mobile Number*" value="91" required="required" onkeypress="return isNumberKey(event)" maxlength="15">
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-lg-6">
                    <input type="email" name="emaill" class="form-control" placeholder="E-mail*" required="required">
                    <div class="validation"></div>
                  </div>
                  <div class="col-lg-6">
                    <input type="qualification" class="form-control" name="subject" id="qualification" placeholder="Qualification">
                    <div class="validation"></div>
                  </div>
                </div>
              
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Comments"></textarea>
                  <div class="validation"></div>
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
</section>


<section id="eligibility" class="job-guarantee-page">
    <div class="container">
        <h2>Target Audience</h2>
        <div class=" col-md-12">
            <p class="text-center m15">All Undergraduates/Graduates from <strong>BCA, BE, BSC, BCOM, BA Background or Diploma Holders</strong> who are interested in Networking Domain are <strong>eligible for this training</strong>. Admission to this training program is given only after face to face discussion with our Training counselors.</p>
        </div>
    </div>
</section>

<section id="portfolio" class="clearfix">
      <div class="container">
         <header class="section-header">
            <h3 class="section-title">Photo Gallerys</h3>
            <p class="view-all-link"><a style="color:#000;" href="/photo-gallery/">View all <i class="tmi- tmi-next leftpadding_10"></i></a></p>
         </header>
         <div class="portfolio-container" style="position: relative; height: 226.688px;">
            <ul>
                              <li class="index-gallery portfolio-item filter-app" style="position: absolute; left: 0px; top: 0px;">
                  <div class="portfolio-wrap">
                     <img src="https://octanetworks.com/gallery_images/1/12.jpg" class="img-fluid" alt="">
                     <div class="portfolio-info">
                        <div>
                           <a href="https://octanetworks.com/gallery_images/1/12.jpg" data-lightbox="portfolio" data-title="Image 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                        </div>
                     </div>
                  </div>
               </li>
                              <li class="index-gallery portfolio-item filter-app" style="position: absolute; left: 220px; top: 0px;">
                  <div class="portfolio-wrap">
                     <img src="https://octanetworks.com/gallery_images/1/1-1-300x2259.jpg" class="img-fluid" alt="">
                     <div class="portfolio-info">
                        <div>
                           <a href="https://octanetworks.com/gallery_images/1/1-1-300x2259.jpg" data-lightbox="portfolio" data-title="Image 2" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                        </div>
                     </div>
                  </div>
               </li>
                              <li class="index-gallery portfolio-item filter-app" style="position: absolute; left: 441px; top: 0px;">
                  <div class="portfolio-wrap">
                     <img src="https://octanetworks.com/gallery_images/1/1-300x18531.jpg" class="img-fluid" alt="">
                     <div class="portfolio-info">
                        <div>
                           <a href="https://octanetworks.com/gallery_images/1/1-300x18531.jpg" data-lightbox="portfolio" data-title="Image 3" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                        </div>
                     </div>
                  </div>
               </li>
                              <li class="index-gallery portfolio-item filter-app" style="position: absolute; left: 662px; top: 0px;">
                  <div class="portfolio-wrap">
                     <img src="https://octanetworks.com/gallery_images/1/233.jpg" class="img-fluid" alt="">
                     <div class="portfolio-info">
                        <div>
                           <a href="https://octanetworks.com/gallery_images/1/233.jpg" data-lightbox="portfolio" data-title="Image 4" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                        </div>
                     </div>
                  </div>
               </li>
                              <li class="index-gallery portfolio-item filter-app" style="position: absolute; left: 883px; top: 0px;">
                  <div class="portfolio-wrap">
                     <img src="https://octanetworks.com/gallery_images/1/2-132.jpg" class="img-fluid" alt="">
                     <div class="portfolio-info">
                        <div>
                           <a href="https://octanetworks.com/gallery_images/1/2-132.jpg" data-lightbox="portfolio" data-title="Image 5" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                        </div>
                     </div>
                  </div>
               </li>
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
            <div class="col-lg-7 col-sm-7">
               <div class="owl-carousel testimonials-carousel owl-loaded owl-drag">
                 <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-10160px, 0px, 0px); transition: 0.25s; width: 14605px;"><div class="owl-item cloned" style="width: 635px;"><div class="testimonial-item">
                     <div class="col-lg-3 col-md-12">
                        <img src="https://octanetworks.com/img/testimonials/8F66ODyvrBa.png" class="testimonial-img" alt="Talib Ansari">
                     </div>
                     <div class="col-lg-9 col-md-12">
                        <div class="apct-testimonial-content"><p>I am pursuing CCNA from Octa Networks. I'm having a very good experience here.As the staff is very friendly in class.And the thing i like the most here is, everything taught in class is also practiced in lab and professor's are very experienced.</p>
</div>
                        <h3 class="apct-testimonial-title-name">Talib Ansari</h3>
                     </div>
                  </div></div><div class="owl-item cloned" style="width: 635px;"><div class="testimonial-item">
                     <div class="col-lg-3 col-md-12">
                        <img src="https://octanetworks.com/img/testimonials/9PUL2h1rnmj.jpg" class="testimonial-img" alt="Ajay Bhalla">
                     </div>
                     <div class="col-lg-9 col-md-12">
                        <div class="apct-testimonial-content"><p>Octa network is such great place . To hole world global training Centre . I such a trainer is Jagdish Rathore sir provide training CCNA. / CCNP/ CCIE tramendous.. there his mind set .it's great mentor , trainer , motivations .he is practically Person. Repeated every dout particular topic Clear</p>
</div>
                        <h3 class="apct-testimonial-title-name">Ajay Bhalla</h3>
                     </div>
                  </div></div><div class="owl-item cloned" style="width: 635px;"><div class="testimonial-item">
                     <div class="col-lg-3 col-md-12">
                        <img src="https://octanetworks.com/img/testimonials/105jvWZqMruB.jpg" class="testimonial-img" alt="Ishwari Mhatre">
                     </div>
                     <div class="col-lg-9 col-md-12">
                        <div class="apct-testimonial-content"><p>If any one ask me about cisco CCNA and CCNP training then I would definitely recommend about octa networks as it’s a great experience of mine learning here.</p>
</div>
                        <h3 class="apct-testimonial-title-name">Ishwari Mhatre</h3>
                     </div>
                  </div></div><div class="owl-item cloned" style="width: 635px;"><div class="testimonial-item">
                     <div class="col-lg-3 col-md-12">
                        <img src="https://octanetworks.com/img/testimonials/11DW7W90f2T0.jpg" class="testimonial-img" alt="Michael Aldo">
                     </div>
                     <div class="col-lg-9 col-md-12">
                        <div class="apct-testimonial-content"><p>nice place to learn and sir is very friendly with all. Best place to learn</p>
</div>
                        <h3 class="apct-testimonial-title-name">Michael Aldo</h3>
                     </div>
                  </div></div><div class="owl-item cloned" style="width: 635px;"><div class="testimonial-item">
                     <div class="col-lg-3 col-md-12">
                        <img src="https://octanetworks.com/img/testimonials/12xQThgJ10Wz.png" class="testimonial-img" alt="Paramsukhdev Rayjada">
                     </div>
                     <div class="col-lg-9 col-md-12">
                        <div class="apct-testimonial-content"><p>The way teaching is excellent u can teach any one in this world even you have more patience</p>
</div>
                        <h3 class="apct-testimonial-title-name">Paramsukhdev Rayjada</h3>
                     </div>
                  </div></div><div class="owl-item cloned" style="width: 635px;"><div class="testimonial-item">
                     <div class="col-lg-3 col-md-12">
                        <img src="https://octanetworks.com/img/testimonials/13ndxNKY25Uk.jpg" class="testimonial-img" alt="Rehana Sarvaiya">
                     </div>
                     <div class="col-lg-9 col-md-12">
                        <div class="apct-testimonial-content"><p>Best place to learn networks, with experienced and friendly faculty. supportive staff members. beautiful ambience. Thanks #octanetworks.</p>
</div>
                        <h3 class="apct-testimonial-title-name">Rehana Sarvaiya</h3>
                     </div>
                  </div></div><div class="owl-item" style="width: 635px;"><div class="testimonial-item">
                     <div class="col-lg-3 col-md-12">
                        <img src="https://octanetworks.com/img/testimonials/3IPccWw5Xjt.jpg" class="testimonial-img" alt="Ahamed Rizam">
                     </div>
                     <div class="col-lg-9 col-md-12">
                        <div class="apct-testimonial-content"><p>Best place to learn and practice the networking technology. Thank you Mr. Sancchit Puri for your detailed explanation and guidance.</p>
</div>
                        <h3 class="apct-testimonial-title-name">Ahamed Rizam</h3>
                     </div>
                  </div></div><div class="owl-item" style="width: 635px;"><div class="testimonial-item">
                     <div class="col-lg-3 col-md-12">
                        <img src="https://octanetworks.com/img/testimonials/4Hpoop0jx2J.png" class="testimonial-img" alt="Farhan Qureshi">
                     </div>
                     <div class="col-lg-9 col-md-12">
                        <div class="apct-testimonial-content"><p>Best place for networking courses with qualified teachers...</p>
</div>
                        <h3 class="apct-testimonial-title-name">Farhan Qureshi</h3>
                     </div>
                  </div></div><div class="owl-item" style="width: 635px;"><div class="testimonial-item">
                     <div class="col-lg-3 col-md-12">
                        <img src="https://octanetworks.com/img/testimonials/5svnWNWjjrt.jpg" class="testimonial-img" alt="Jawahar Annadhurai">
                     </div>
                     <div class="col-lg-9 col-md-12">
                        <div class="apct-testimonial-content"><p>octa networks are experts in networking and every one can learn networking easily by their wonderful teaching</p>
</div>
                        <h3 class="apct-testimonial-title-name">Jawahar Annadhurai</h3>
                     </div>
                  </div></div><div class="owl-item" style="width: 635px;"><div class="testimonial-item">
                     <div class="col-lg-3 col-md-12">
                        <img src="https://octanetworks.com/img/testimonials/6DTFfWyHMRB.jpg" class="testimonial-img" alt="Omar Monads">
                     </div>
                     <div class="col-lg-9 col-md-12">
                        <div class="apct-testimonial-content"><p>Very good place to learn, convinent ours that fits your work Schedule, Sanchit is one of awesome Instructure I am taking class with, we are not just taking online class just to sit and watch, we actually interact and share Ideas in the class</p>
</div>
                        <h3 class="apct-testimonial-title-name">Omar Monads</h3>
                     </div>
                  </div></div><div class="owl-item" style="width: 635px;"><div class="testimonial-item">
                     <div class="col-lg-3 col-md-12">
                        <img src="https://octanetworks.com/img/testimonials/7WcO8ausnOb.jpg" class="testimonial-img" alt="Ravindu Yasanga">
                     </div>
                     <div class="col-lg-9 col-md-12">
                        <div class="apct-testimonial-content"><p>One of my friends recommended about this to me and unfortunately I ignored him for few months. Later I agreed him joined their classes. Since then I was blaming myself for not joining before. They are excellent in technology classes. They have students worldwide . If you want to get your #CCIE_Digit this is the right place for sure. When it comes to RnS classes, Sancchit Puri, You are the best!!!</p>
</div>
                        <h3 class="apct-testimonial-title-name">Ravindu Yasanga</h3>
                     </div>
                  </div></div><div class="owl-item" style="width: 635px;"><div class="testimonial-item">
                     <div class="col-lg-3 col-md-12">
                        <img src="https://octanetworks.com/img/testimonials/8F66ODyvrBa.png" class="testimonial-img" alt="Talib Ansari">
                     </div>
                     <div class="col-lg-9 col-md-12">
                        <div class="apct-testimonial-content"><p>I am pursuing CCNA from Octa Networks. I'm having a very good experience here.As the staff is very friendly in class.And the thing i like the most here is, everything taught in class is also practiced in lab and professor's are very experienced.</p>
</div>
                        <h3 class="apct-testimonial-title-name">Talib Ansari</h3>
                     </div>
                  </div></div><div class="owl-item" style="width: 635px;"><div class="testimonial-item">
                     <div class="col-lg-3 col-md-12">
                        <img src="https://octanetworks.com/img/testimonials/9PUL2h1rnmj.jpg" class="testimonial-img" alt="Ajay Bhalla">
                     </div>
                     <div class="col-lg-9 col-md-12">
                        <div class="apct-testimonial-content"><p>Octa network is such great place . To hole world global training Centre . I such a trainer is Jagdish Rathore sir provide training CCNA. / CCNP/ CCIE tramendous.. there his mind set .it's great mentor , trainer , motivations .he is practically Person. Repeated every dout particular topic Clear</p>
</div>
                        <h3 class="apct-testimonial-title-name">Ajay Bhalla</h3>
                     </div>
                  </div></div><div class="owl-item" style="width: 635px;"><div class="testimonial-item">
                     <div class="col-lg-3 col-md-12">
                        <img src="https://octanetworks.com/img/testimonials/105jvWZqMruB.jpg" class="testimonial-img" alt="Ishwari Mhatre">
                     </div>
                     <div class="col-lg-9 col-md-12">
                        <div class="apct-testimonial-content"><p>If any one ask me about cisco CCNA and CCNP training then I would definitely recommend about octa networks as it’s a great experience of mine learning here.</p>
</div>
                        <h3 class="apct-testimonial-title-name">Ishwari Mhatre</h3>
                     </div>
                  </div></div><div class="owl-item" style="width: 635px;"><div class="testimonial-item">
                     <div class="col-lg-3 col-md-12">
                        <img src="https://octanetworks.com/img/testimonials/11DW7W90f2T0.jpg" class="testimonial-img" alt="Michael Aldo">
                     </div>
                     <div class="col-lg-9 col-md-12">
                        <div class="apct-testimonial-content"><p>nice place to learn and sir is very friendly with all. Best place to learn</p>
</div>
                        <h3 class="apct-testimonial-title-name">Michael Aldo</h3>
                     </div>
                  </div></div><div class="owl-item" style="width: 635px;"><div class="testimonial-item">
                     <div class="col-lg-3 col-md-12">
                        <img src="https://octanetworks.com/img/testimonials/12xQThgJ10Wz.png" class="testimonial-img" alt="Paramsukhdev Rayjada">
                     </div>
                     <div class="col-lg-9 col-md-12">
                        <div class="apct-testimonial-content"><p>The way teaching is excellent u can teach any one in this world even you have more patience</p>
</div>
                        <h3 class="apct-testimonial-title-name">Paramsukhdev Rayjada</h3>
                     </div>
                  </div></div><div class="owl-item active" style="width: 635px;"><div class="testimonial-item">
                     <div class="col-lg-3 col-md-12">
                        <img src="https://octanetworks.com/img/testimonials/13ndxNKY25Uk.jpg" class="testimonial-img" alt="Rehana Sarvaiya">
                     </div>
                     <div class="col-lg-9 col-md-12">
                        <div class="apct-testimonial-content"><p>Best place to learn networks, with experienced and friendly faculty. supportive staff members. beautiful ambience. Thanks #octanetworks.</p>
</div>
                        <h3 class="apct-testimonial-title-name">Rehana Sarvaiya</h3>
                     </div>
                  </div></div><div class="owl-item cloned" style="width: 635px;"><div class="testimonial-item">
                     <div class="col-lg-3 col-md-12">
                        <img src="https://octanetworks.com/img/testimonials/3IPccWw5Xjt.jpg" class="testimonial-img" alt="Ahamed Rizam">
                     </div>
                     <div class="col-lg-9 col-md-12">
                        <div class="apct-testimonial-content"><p>Best place to learn and practice the networking technology. Thank you Mr. Sancchit Puri for your detailed explanation and guidance.</p>
</div>
                        <h3 class="apct-testimonial-title-name">Ahamed Rizam</h3>
                     </div>
                  </div></div><div class="owl-item cloned" style="width: 635px;"><div class="testimonial-item">
                     <div class="col-lg-3 col-md-12">
                        <img src="https://octanetworks.com/img/testimonials/4Hpoop0jx2J.png" class="testimonial-img" alt="Farhan Qureshi">
                     </div>
                     <div class="col-lg-9 col-md-12">
                        <div class="apct-testimonial-content"><p>Best place for networking courses with qualified teachers...</p>
</div>
                        <h3 class="apct-testimonial-title-name">Farhan Qureshi</h3>
                     </div>
                  </div></div><div class="owl-item cloned" style="width: 635px;"><div class="testimonial-item">
                     <div class="col-lg-3 col-md-12">
                        <img src="https://octanetworks.com/img/testimonials/5svnWNWjjrt.jpg" class="testimonial-img" alt="Jawahar Annadhurai">
                     </div>
                     <div class="col-lg-9 col-md-12">
                        <div class="apct-testimonial-content"><p>octa networks are experts in networking and every one can learn networking easily by their wonderful teaching</p>
</div>
                        <h3 class="apct-testimonial-title-name">Jawahar Annadhurai</h3>
                     </div>
                  </div></div><div class="owl-item cloned" style="width: 635px;"><div class="testimonial-item">
                     <div class="col-lg-3 col-md-12">
                        <img src="https://octanetworks.com/img/testimonials/6DTFfWyHMRB.jpg" class="testimonial-img" alt="Omar Monads">
                     </div>
                     <div class="col-lg-9 col-md-12">
                        <div class="apct-testimonial-content"><p>Very good place to learn, convinent ours that fits your work Schedule, Sanchit is one of awesome Instructure I am taking class with, we are not just taking online class just to sit and watch, we actually interact and share Ideas in the class</p>
</div>
                        <h3 class="apct-testimonial-title-name">Omar Monads</h3>
                     </div>
                  </div></div><div class="owl-item cloned" style="width: 635px;"><div class="testimonial-item">
                     <div class="col-lg-3 col-md-12">
                        <img src="https://octanetworks.com/img/testimonials/7WcO8ausnOb.jpg" class="testimonial-img" alt="Ravindu Yasanga">
                     </div>
                     <div class="col-lg-9 col-md-12">
                        <div class="apct-testimonial-content"><p>One of my friends recommended about this to me and unfortunately I ignored him for few months. Later I agreed him joined their classes. Since then I was blaming myself for not joining before. They are excellent in technology classes. They have students worldwide . If you want to get your #CCIE_Digit this is the right place for sure. When it comes to RnS classes, Sancchit Puri, You are the best!!!</p>
</div>
                        <h3 class="apct-testimonial-title-name">Ravindu Yasanga</h3>
                     </div>
                  </div></div><div class="owl-item cloned" style="width: 635px;"><div class="testimonial-item">
                     <div class="col-lg-3 col-md-12">
                        <img src="https://octanetworks.com/img/testimonials/8F66ODyvrBa.png" class="testimonial-img" alt="Talib Ansari">
                     </div>
                     <div class="col-lg-9 col-md-12">
                        <div class="apct-testimonial-content"><p>I am pursuing CCNA from Octa Networks. I'm having a very good experience here.As the staff is very friendly in class.And the thing i like the most here is, everything taught in class is also practiced in lab and professor's are very experienced.</p>
</div>
                        <h3 class="apct-testimonial-title-name">Talib Ansari</h3>
                     </div>
                  </div></div></div></div>
									
									<div class="owl-nav disabled">
										<button type="button" role="presentation" class="owl-prev">
												<span aria-label="Previous">‹</span>
										</button>
									
									<button type="button" role="presentation" class="owl-next">
									  <span aria-label="Next">›</span>
									</button>
									
									</div>
									
									<div class="owl-dots">
										
									</div></div>
            </div>
            <div class="col-lg-5 col-sm-5">
               <div id="myCarousel1" class="carousel slide" data-ride="carousel">
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                                          <div class="item">
                        <button type="button" class="btn video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/tZ4CQZTnofQ?list=PLWjqv2GOOfzKfOtGj90swA4U8Va4PmqQs&amp;index=15&amp;t=18s&amp;autoplay=1&amp;wmode=transparent&amp;rel=0&amp;enablejsapi=1&amp;origin=https://www.octanetworks.com" data-target="#myModal">
                        <img src="https://img.youtube.com/vi/tZ4CQZTnofQ/hqdefault.jpg" alt="image 0" style="width:100%;">
                        </button>
                     </div>
                                          <div class="item">
                        <button type="button" class="btn video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/ivO_ix77wfA?list=PLWjqv2GOOfzKfOtGj90swA4U8Va4PmqQs&amp;index=15&amp;t=18s&amp;autoplay=1&amp;wmode=transparent&amp;rel=0&amp;enablejsapi=1&amp;origin=https://www.octanetworks.com" data-target="#myModal">
                        <img src="https://img.youtube.com/vi/ivO_ix77wfA/hqdefault.jpg" alt="image 1" style="width:100%;">
                        </button>
                     </div>
                                          <div class="item active">
                        <button type="button" class="btn video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/2B0oD8dmG8s?list=PLWjqv2GOOfzKfOtGj90swA4U8Va4PmqQs&amp;index=15&amp;t=18s&amp;autoplay=1&amp;wmode=transparent&amp;rel=0&amp;enablejsapi=1&amp;origin=https://www.octanetworks.com" data-target="#myModal">
                        <img src="https://img.youtube.com/vi/2B0oD8dmG8s/hqdefault.jpg" alt="image 2" style="width:100%;">
                        </button>
                     </div>
                                          <div class="item">
                        <button type="button" class="btn video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/_iAZ4ECIY9Y?list=PLWjqv2GOOfzKfOtGj90swA4U8Va4PmqQs&amp;index=15&amp;t=18s&amp;autoplay=1&amp;wmode=transparent&amp;rel=0&amp;enablejsapi=1&amp;origin=https://www.octanetworks.com" data-target="#myModal">
                        <img src="https://img.youtube.com/vi/_iAZ4ECIY9Y/hqdefault.jpg" alt="image 3" style="width:100%;">
                        </button>
                     </div>
                                       </div>
                  <!-- Left and right controls -->
                  <a class="left carousel-control tes-slide-caro" href="#myCarousel1" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control tes-slide-caro" href="#myCarousel1" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </section>
<!---------------testiminiols close------------------>

<section id="reason-join" class="factSectionNw job-guarantee-page">
    <h3 class="color-white"> Reasons to Join Octa Networks</h3>
    <div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <div class="factSectionContent">
                <div class="factSectionLeft"> <i class="fa fa-server" aria-hidden="true"></i></div>
                <div class="factSectionRight">
                    <h4>Worlds Largest <br>Cisco Labs</h4></div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <div class="factSectionContent">
                <div class="factSectionLeft"> <i class="fa fa-clock-o" aria-hidden="true"></i></div>
                <div class="factSectionRight">
                    <h4>24x7 <br>Lab Facility</h4></div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <div class="factSectionContent">
                <div class="factSectionLeft"> <i class="fa fa-users" aria-hidden="true"></i></div>
                <div class="factSectionRight">
                    <h4>Biggest Team <br>of CCIE Certified Trainers</h4></div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <div class="factSectionContent">
                <div class="factSectionLeft">
                    <div class="infinity"></div>
                </div>
                <div class="factSectionRight">
                    <h4>Unlimited <br>Repetition</h4></div>
            </div>
        </div>
        
        </div>
        
        <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <div class="factSectionContent">
                <div class="factSectionLeft"> <i class="fa fa-book" aria-hidden="true"></i></div>
                <div class="factSectionRight">
                    <h4>Free Practical <br>Workbooks</h4></div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <div class="factSectionContent">
                <div class="factSectionLeft"> <i class="fa fa-question-circle" aria-hidden="true"></i></div>
                <div class="factSectionRight">
                    <h4>Free Interview <br>Questions Workbook</h4></div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <div class="factSectionContent">
                <div class="factSectionLeft"> <i class="fa fa-search" aria-hidden="true"></i></div>
                <div class="factSectionRight">
                    <h4>Dedicated <br>Placement Cell</h4></div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <div class="factSectionContent">
                <div class="factSectionLeft"> <i class="fa fa-server" aria-hidden="true"></i></div>
                <div class="factSectionRight">
                    <h4>100% Practicals <br>on Real Devices</h4></div>
            </div>
        </div>
         </div>
    </div>
</section>