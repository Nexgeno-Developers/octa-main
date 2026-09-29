<style>
    .blue_clr {
    padding-top: 3px;
}
.green_clr {
    padding-top: 3px;
}
</style>

<section id="slider" class="clearfix">
   <div class="container-fluid">
      <div class="">
         <?php if (!empty($slider)) { ?>
         <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <?php 
                  $count = 0;
                  foreach ($slider as $sliders) {
                      $count++;
                     if ($count == 1) {
                       $class = "item active";  
                     } else {
                       $class = "item";  
                     } 
                  ?>
               <div class="<?=$class?>">
                  <?php if ($sliders->link != "") { ?><a href="<?=$sliders->link?>"><?php } ?>
                  <!--<img class="slide-image" src="<?php echo Yii::app()->request->getBaseURL(true);?>/img/slider_images/<?=$sliders->image?>" alt="<?=$sliders->alt?>">-->
				  <picture>
				    <?php if (!empty($sliders->image_mobile)) { ?>
					  <source srcset="<?php echo Yii::app()->request->getBaseURL(true);?>/img/slider_images/<?=$sliders->image_mobile?>" media="(max-width: 800px)">
					<?php } ?>
					<?php if (!empty($sliders->image)) { ?>
					  <source srcset="<?php echo Yii::app()->request->getBaseURL(true);?>/img/slider_images/<?=$sliders->image?>">
					  
					  <?php 
					  if ($count == 1) {
					    // Load the first image immediately
					    echo '<img class="slide-image" src="' . Yii::app()->request->getBaseURL(true) . '/img/slider_images/' . $sliders->image . '" alt="' . $sliders->alt . '" >';
					  } else {
					    // Add lazy loading attribute to the rest of the images
					    echo '<img class="slide-image" src="' . Yii::app()->request->getBaseURL(true) . '/img/slider_images/' . $sliders->image . '" alt="' . $sliders->alt . '" loading="lazy">';
					  }
					  ?>
					<?php } ?>
					</picture>
                  <?php if ($sliders->link != "") { ?></a><?php } ?>
               </div>
               <?php 	} ?>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
            </a>
         </div>
         <?php } ?>
      </div>
   </div>
</section>

<style>.modal-dialog {
    width: 100%;
}
.modal-dialog.modal-notify.modal-info .modal-header {
    background-color: #33b5e5;
	color:#fff;
}
.modal-dialog.modal-notify .modal-header {
    box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
    border: 0;
}
.modal-header .close {
    margin-top: 14px;
    margin-right: 30px;
    color: #fff !important;
}
.fxd-hgt {
    height: auto !important;
    overflow: hidden;
}
.item-logo-img {
    width: 70%;
}
</style>
<main id="main">
 
   <section id="about1">
      <div class="container">
			<div class="text-center span_hed">
         <span class=" mr-t0">Job Guarantee Courses</span> 
				 </div>
         <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-3 col-xs-6 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
               <div class="box">
                  <div class="item img_cl">
                     <div class="site-logo-inner"> 
										<a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/training-exam/ccie-enterprise-training-india/">
                        <img loading="lazy" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/exam/ccie-enterprise-training-india.png" alt="CCNA Certifications " class="item-logo-img"> 
                        <h4 class="gr_hed">CCIE Enterprise Infrastructure</br>Zero to Hero Program</h4>
										</a>
                      </div>
                  </div>
               </div>
            </div>
            <!-- Modal for ccie routing & switching zero to hero program -->
            
            <!--------------------->
            <div class="col-lg-3 col-md-4 col-sm-3 col-xs-6 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
               <div class="box">
                  <div class="item img_cl">
                     <div class="site-logo-inner"> 
										 <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/training-exam/ccie-security-training-india/">
                        <img loading="lazy" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/exam/ccie-security-training-india.png" alt="MCSA" class="item-logo-img"> 
                        <h4 class="gr_hed">CCIE Security </br>Zero to Hero Program</h4>
                      </a>
                     </div>
                  </div>
               </div>
            </div>
            <!--------------------->
            <div class="col-lg-3 col-md-4 col-sm-3 col-xs-6 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
               <div class="box">
                  <div class="item img_cl">
                     <div class="site-logo-inner">
												<a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/training-exam/ccie-data-center-zero-to-hero-program/">
                        <img loading="lazy" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/exam/ccie-data-center-zero-to-hero-program.png" alt="CCIE Certifications" class="item-logo-img"> 
                        <h4 class="gr_hed">CCIE Data Center</br> Zero to Hero Program</h4>
												</a>
                      </div>
                  </div>
               </div>
            </div> 
            
             <div class="col-lg-3 col-md-4 col-sm-3 col-xs-6 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
               <div class="box">
                  <div class="item img_cl">
                     <div class="site-logo-inner">
												<a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/training-exam/aws-certified-solutions-architect-professional/">
                        <img loading="lazy" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/exam/aws-certified-solutions-architect-professional.png" alt="AWS" class="item-logo-img"> 
                        <h4 class="gr_hed">AWS Solution Architect</br> 
Professional</h4>
                      
												</a>
                      </div>
                  </div>
               </div>
            </div> 
         </div>
      </div>
   </section>
	 
	 <?php /*<section id="about1">
      <div class="container">
			<div class="text-center span_hed">
         <span class=" mr-t0">100% Placement Guarantee Courses</span>
				 </div>
         <div class="row">
            <div class="col-md-3 col-lg-3 col-sm-6 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
               <div class="box">
                  <div class="item">
                     <div class="site-logo-inner"> 
                        <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/exam/cisco-ccna-250x250.png" alt="CCNA Certifications " class="item-logo-img"> 
                        <h4>CCNA Certifications</h4>
                        <a href="#" class="btn btn-sm btn-default btn-block btn-courses" data-toggle="modal" data-target="#myModalt">Details</a>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Modal for ccie routing & switching zero to hero program -->
            <div class="modal fade" id="myModalt" role="dialog">
               <div class="modal-dialog modal-notify modal-info">
                  <!-- Modal content-->
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">CCNA Certifications</h4>
                     </div>
                     <div class="modal-body">
                        <p>The ‘NEW CCNA' as the Cisco Certification Program team likes to call it is not a CONVERGED CCNA or a UNIFIED CCNA. The new CCNA (200-301) is designed for the audience who can start working in the networking industry and then go on growing higher in the certificate program in specific domains of their job requirements or growth aspirations.</p>
                        <p>These changes are made after a thorough study and research of the market needs and demands. Markets are demanding familiarity with broader and modern new concepts like Software Programmability, Automation, Virtualization, Data Center, Wireless along with R&S and Wireless. The new CCNA will arm network professionals with the necessary knowledge and experience to start their careers on a solid foundation. Once they get into the industry with a CCNA certificate, they can pivot to the most relevant and promising areas of Cisco Technologies while working. In short, CCNA is going to be the first step towards fulfilling personal and professional ambitions and goals in the networking field.</p>
                        <p>Currently, students and professionals can pursue their CCNA certifications based on the existing program until 23rd Feb 2020. The new CCNA (200-301) will be available from 24th Feb 2010. Cisco team has planned an elaborate migration plan for the existing CCNAs which will seamlessly transition them from the existing CCNA program to the new CCNA program...<b><a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/certification-course/ccna-training-institute/" target="_blank">Read More</a></b></p>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                     </div>
                  </div>
               </div>
            </div>
            <!--------------------->
            <div class="col-md-3 col-lg-3 col-sm-6 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
               <div class="box">
                  <div class="item">
                     <div class="site-logo-inner"> 
                        <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/exam/cisco-ccnp-250x250.png" alt="MCSA" class="item-logo-img"> 
                        <h4>CCNP Certifications </h4>
                        <a href="#" class="btn btn-sm btn-default btn-block btn-courses" data-toggle="modal" data-target="#myModal1">Details</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal fade" id="myModal1" role="dialog">
               <div class="modal-dialog modal-notify modal-info">
                  <!-- Modal content-->
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">CCNP Certifications</h4>
                     </div>
                     <div class="modal-body">
                        <p>CCNP is the professional-level certification for the students and professionals who are looking for enhancing their credentials with a global certificate which will open the doors of infinite possibilities in their careers.</p>
                        <p>This is an exciting phase in the networking industry since new networking technologies are changing the landscape of interrelations between applications and the role networks play in businesses. The lines between networks, IT infrastructure and software applications are getting blurred by every minute. They are becoming inseparable. Networks today need automation and programmability. For delivering the services and Wow client experiences, Networks are getting converged with infrastructure at the edge, in the data center, and the cloud while developers are building their applications on this platform. </p>
                        <p>In the new CCNP certification program, each CCNP certification requires only two exams: One core exam and one concentration exam of candidate’s choice depending on the candidate's job role, interest, and needs. The best part of the core exams is they also serve as the qualifying exams for CCIE lab exams in respective technology track...<b><a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/certification-course/ccnp-training-institute/" target="_blank">Read More</a></b></p>
                     <strong>>Following are the new CCNP certifications:</strong><br>
						1.	CCNP Enterprise<br>
						2.	CCNP Data Center<br>
						3.	CCNP Security<br>
						4.	CCNP Service Provider<br>
						5.	CCNP Collaboration<br>

					 </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                     </div>
                  </div>
               </div>
            </div>
            <!--------------------->
            <div class="col-md-3 col-lg-3 col-sm-6 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
               <div class="box">
                  <div class="item">
                     <div class="site-logo-inner"> 
                        <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/exam/cisco-ccie-250x250.png" alt="CCIE Certifications" class="item-logo-img"> 
                        <h4> CCIE Certifications                         </h4>
                        <a href="#" class="btn btn-sm btn-default btn-block btn-courses" data-toggle="modal" data-target="#myModal2">Details</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal fade" id="myModal2" role="dialog">
               <div class="modal-dialog modal-notify modal-info">
                  <!-- Modal content-->
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">CCIE</h4>
                     </div>
                     <div class="modal-body">
                        <p>Ever-evolving technologies and marketplace demands are pushing the CISCO certification program to anticipate future needs and to arrange for fulfillment of these needs in advance. It is estimated that approx. 58000-60000 networking professionals are certified as CCIEs to this point in time. The CCIE program has been the flagship certification in the networking world. Cisco has planned to revamp in the Certification program to reflect the changing dynamics of the networking world and the prevalent technologies. In Feb 2020, revamped Cisco certification program will take the place of the existing certification program. CCNA, CCNP, and CCIE programs have been designed to be agile and flexible so that candidates can save on their time and resources while getting certified in the most relevant and advanced technologies without having to follow left to the right formula of passing certificate exams e.g. Passing CCNA before attempting for the CCNP. </p>
                        <p>The existing CCIE program will get revamped completely to reflect the realities of the networking requirements and business needs. Enhancing the existing CCIE program with the new realities of the networking world and the future demands of the marketplace like SDN, Virtualization, Automation, Programmability, and network Assurance is the main objective of the revamped CCIE certification program. This is the reason behind calling CCIE Routing and Switching as CCIE Enterprise Infrastructure and CCIE Enterprise Wireless as it reflects the new realities of the enterprise nature of the networks.</p>
                        <p>CCIE Collaboration focuses on knowledge and practical application of collaboration solutions including infrastructure and design, protocols, codec’s, and endpoints, Cisco IOS XE gateway, and media resources, call control QoS and collaboration applications.</p>
                        <p>Cisco is rebooting the CCIE Data Center blueprint to cover the most relevant technologies and business needs by designing a qualifying core exam which covers technologies including Automation and Programmability while the lab exam will validate end-to-end lifecycle skills with complex infrastructure, from planning and design to operating and optimizing.</p>
                        <p>CCIE Security certification is an embodiment of core knowledge and practical skills in handling the most complex scenarios of the entire IT Security aspect of the network lifecycle (Designing, Deploying, Operating & Optimizing). CCIE Security training at Octa Networks revolves around acquiring a broader range of skills and a deeper focus in critical technology areas as per the course contents prescribed by the CISCO CCIE Security certification blueprint. In other words, CCIE Security is the evidence of the knowledge and skillsets acquired by an individual to architect, engineer, implement, troubleshoot and support complex security solutions and technologies.</p>
                        <p>Cisco is rebooting the CCIE Service Provider blueprint to cover the most relevant technologies and business needs by designing a qualifying core exam which covers technologies including Automation and Programmability while the lab exam will validate end-to-end lifecycle skills with complex infrastructure, from planning and design to operating and optimizing...<b><a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/certification-course/ccie-training-institute/" target="_blank">Read More</a></b></p>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                     </div>
                  </div>
               </div>
            </div> 
			 <!--------------------->
            <div class="col-md-3 col-lg-3 col-sm-6 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
               <div class="box">
                  <div class="item">
                     <div class="site-logo-inner">  
                        <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/exam/aws-certified-solutions-architect-associate.png" alt="CCIE Certifications" class="item-logo-img"> 
                        <h4>AWS Solutions Architect</h4>
                        <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/exam/aws-certified-solutions-architect-associate/" class="btn btn-sm btn-default btn-block btn-courses" data-toggle="modal" data-target="#myModal2">Details</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>*/?>
	 
   <!--<section id="why-us" class="wow fadeIn">
      <div class="container">
         <header class="bg-sec-title">
            <h3 class="color-white">Why Octa Networks</h3>
         </header>
         <div class="row row-eq-height justify-content-center">
            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6 whyus_icn">
               <div class="card wow bounceInUp">
                  <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                  <div class="card-body">
                     <h5 class="card-title">CCIE's</h5>
                     <p class="card-text">as Mentors</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6 whyus_icn">
               <div class="card">
                  <i class="fa fa-calendar" aria-hidden="true"></i>
                  <div class="card-body">
                     <h5 class="card-title">8+ YEARS</h5>
                     <p class="card-text">of Delivering Innovative Training</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6 whyus_icn">
               <div class="card wow bounceInUp">
                  <i class="fa fa-briefcase" aria-hidden="true"></i>
                  <div class="card-body">
                     <h5 class="card-title">85% Students</h5>
                     <p class="card-text">Get Placed Without Appearing CCIE Lab</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6 whyus_icn">
               <div class="card wow bounceInUp">
                  <i class="fa fa-certificate" aria-hidden="true"></i>
                  <div class="card-body">
                     <h5 class="card-title">90% CCIE</h5>
                     <p class="card-text">Students Passed in First Attempt</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6 whyus_icn">
               <div class="card wow bounceInUp">
                  <i class="fa fa-server" aria-hidden="true"></i>
                  <div class="card-body">
                     <h5 class="card-title">State Of Art</h5>
                     <p class="card-text">Infrastructure</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6 whyus_icn">
               <div class="card wow bounceInUp">
                  <i class="fa fa-users" aria-hidden="true"></i>
                  <div class="card-body">
                     <h5 class="card-title">100K+</h5>
                     <p class="card-text">Candidates Trained</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>--->
   
   <section class="succes_section blue_gradian">
	<div class="container">
		<h4 class="p-0 section_pd_heading pd_b10" style="color:#fff;">Reasons why Octa Networks is Market Leader for CCIE Trainings</h4>
		<div class="row">
			<div class="col-md-3 col-sm-4 col-xs-6 hvr-bounce-in text-center">
				<div class="ccie_results"> <i class="fa fa-graduation-cap"></i>
					<!--<h5>Octa CCIE's</h5>-->
					<h5>CCIE's</h5>
					<p>as Mentors</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-4 col-xs-6 hvr-bounce-in text-center">
				<div class="ccie_results"> <i class="fa fa-calendar"></i>
					<h5>8+ YEARS</h5>
					<p>of Delivering Quality Training</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-4 col-xs-6 hvr-bounce-in text-center">
				<div class="ccie_results"> <i class="fa fa-handshake"></i>
					<h5>Biggest Pool</h5>
					<p>of CCIE Certified Trainers</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-4 col-xs-6 hvr-bounce-in text-center">
				<div class="ccie_results"> <i class="fa fa-check-square"></i>
					<h5>90% CCIE Success</h5>
					<p>Ratio in First Attempt</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-4 col-xs-6 hvr-bounce-in text-center">
				<div class="ccie_results"> <i class="fa fa-server"></i>
					<h5>PODS for ALL</h5>
					<p>CCIE Tracks</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-4 col-xs-6 hvr-bounce-in text-center">
				<div class="ccie_results"> <i class="fa fa-clock"></i>
					<h5>24x7 &amp; 365 Days</h5>
					<p>Lab Support</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-4 col-xs-6 hvr-bounce-in text-center">
				<div class="ccie_results"> <i class="fa fa-search"></i>
					<h5>Placement </h5>
					<p>Assistance Team</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-4 col-xs-6 hvr-bounce-in text-center">
				<div class="ccie_results"> <i class="fa fa-calendar-check"></i>
					<h5>85% Success</h5>
					<p>Ratio in Job Placement</p>
				</div>
			</div>
		</div>
	</div>
</section>

   <section id="portfolio" class="clearfix">
      <div class="container">
         <header class="section-header">
            <h3 class="section-title">Photo Gallery</h3>
            <p class="view-all-link"><a style="color:#000;" href="<?php echo Yii::app()->createUrl("main/default/photogallery"); ?>">VIEW ALL <i class="tmi- tmi-next leftpadding_10"></i></a></p>
         </header>
         <div class="portfolio-container">  
			 <?php $gimgCon = 0; foreach($gallery as $gallerys){ $gimgCon++; ?>
			<div class="col-lg-3 col-md-4 col-sm-3 col-xs-6">				 
			<div class="row">
					 <a aria-label="gallery" href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/photo-gallery/">
					 <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/gallery_images/<?=$gallerys->ev_pg_id?>/<?=$gallerys->image?>" class="img-fluid" alt="">
					 </a>
			</div>		 
			</div>
			<?php   } ?> 
         </div>
      </div>
   </section>
   
   
   <section id="testimonials" class="section-bg">
      <div class="container">
         <header class="bg-sec-title text-center">
            <h3 class="color-white mainheaderWhite cntr">What students say about us</h3>
         </header>
         <div class="row justify-content-center">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
               <div class="owl-carousel testimonials-carousel">
                  <?php foreach($testimonials as $testimonials){ ?>
                  <div class="testimonial-item">
                     <div class="col-lg-3 col-md-12">
                        <img loading="lazy" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/testimonials/<?=$testimonials->image?>" class="testimonial-img" alt="<?=$testimonials->name?>">
                     </div>
                     <div class="col-lg-9 col-md-12">
                        <div class="apct-testimonial-content"><?=$testimonials->content?></div>
                        <h3  class="apct-testimonial-title-name"><?=$testimonials->name?></h3>
                     </div>
                  </div>
                  <?php } ?>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
               <div id="myCarousel1" class="carousel slide" data-ride="carousel">
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                     <?php $dcounter = 0; foreach($demos as $demo){  ?>
                     <div class="item <?php if($dcounter == 2){ ?>active<?php } ?>">
                         <button type="button" class="btn video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/<?=$demo->youtubeid?>" data-target="#myModal">
                        <img loading="lazy" src="https://img.youtube.com/vi/<?=$demo->youtubeid?>/hqdefault.jpg" alt="image <?=$dcounter?>" style="width:100%;">
                        </button>
                     </div>
                     <?php $dcounter++;} ?>
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
   
   
   <section class="success-stories-sec cont-sec ">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="section-header text-center">
                  <h3 class="success-stories">Success Stories</h3>
                  <p class="view-all-link"><a style="color:#000;" href="<?php echo Yii::app()->createUrl("main/default/successstories"); ?>">View all <i class="tmi- tmi-next leftpadding_10"></i></a></p>
               </div>
            </div>
            <div class="col-md-8 col-xs-12">
               <!---<ul class="recent-member">
                  <?php foreach($stories as $story){ ?>
                  <li>
                     <img class="img-responsive" alt="<?=$story->name?> <?=$story->expert?>" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/stories/<?=$story->image?>">
                     <div class="wonderplugin-gridgallery-item-text">
                        <div class="wonderplugin-gridgallery-item-title"><?=$story->name?></div>
                        <div class="wonderplugin-gridgallery-item-description"><?=$story->expert?></div>
                     </div>
                  </li>
                  <?php } ?>
               </ul>-->
                             <div class="col-md-3 col-sm-3 col-xs-6 pd0">
                                    <div class="our-team">
                                       <img loading="lazy" class="lazyload" data-src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/stories/filipe.png" alt="">
                                        <div class="team-prof">
                                            <h3>Filipe Eduardo Faria</h3>
                                            <span>CCIE Collabration #68206</span>
                                        </div>
                                    </div>
                             </div> 
                            
                             <div class="col-md-3 col-sm-3 col-xs-6 pd0">
                                    <div class="our-team">
                                       <img loading="lazy" class="lazyload" data-src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/stories/satish1.jpg" alt="">
                                        <div class="team-prof">
                                            <h3>Sathish Subramanian</h3>
                                            <span>CCIE DC #50115</span>
                                        </div>
                                    </div>
                             </div> 
                             
                             <div class="col-md-3 col-sm-3 col-xs-6 pd0">
                                    <div class="our-team">
                                        <img loading="lazy" class="lazyload" data-src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/stories/douglas.png" alt="">
                                        <div class="team-prof">
                                            <h3>Douglas Aguirre Dias</h3>
                                            <span>CCIE Enterprise #68204</span>
                                        </div>
                                    </div>
                             </div> 
                             <div class="col-md-3 col-sm-3 col-xs-6 pd0">
                                    <div class="our-team">
                                       <img loading="lazy" class="lazyload" data-src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/stories/nikolas.png" alt="">
                                        <div class="team-prof">
                                            <h3>Nikolay Pishchikov</h3>
                                            <span>CCIE Enterprise #68194</span>
                                        </div>
                                    </div>
                             </div> 
                             <div class="col-md-3 col-sm-3 col-xs-6 pd0">
                                    <div class="our-team">
                                       <img loading="lazy" class="lazyload" data-src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/stories/sharukhkhan.jpg" alt="">
                                        <div class="team-prof">
                                            <h3>Sharukh Khan</h3>
                                            <span>CCIE DC #61674</span>
                                        </div>
                                    </div>
                             </div>
                            
                             
                             <div class="col-md-3 col-sm-3 col-xs-6 pd0">
                                    <div class="our-team">
                                        <img loading="lazy" class="lazyload" data-src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/stories/Placement-Story-BG44.jpg" alt="">
                                        <div class="team-prof">
                                            <h3>Aaron Reyes Garcia</h3>
                                            <span>CCIE Wireless #56652</span>
                                        </div>
                                    </div>
                             </div> 
                             <div class="col-md-3 col-sm-3 col-xs-6 pd0">
                                    <div class="our-team">
                                       <img loading="lazy" class="lazyload" data-src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/stories/abdul.jpg" alt="">
                                        <div class="team-prof">
                                            <h3>Abdul Rahman</h3>
                                            <span>CCIE Wireless #50238</span>
                                        </div>
                                    </div>
                             </div> 
                             
                             
                             <div class="col-md-3 col-sm-3 col-xs-6 pd0">
                                    <div class="our-team">
                                        <img loading="lazy" class="lazyload" data-src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/stories/dummyimages001.jpg" alt="">
                                        <div class="team-prof">
                                            <h3>Swamy</h3>
                                            <span>CCIE Wireless #57234</span>
                                        </div>
                                    </div>
                             </div> 
                             
                             <!--<div class="col-md-3 col-sm-3 col-xs-6 pd0">-->
                             <!--       <div class="our-team">-->
                             <!--          <img loading="lazy" class="lazyload" data-src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/stories/Placement-Story-BG38.jpg" alt="">-->
                             <!--           <div class="team-prof">-->
                             <!--               <h3>Abu Hayat Khan</h3>-->
                             <!--               <span>CCIE DN Expert #20230029</span>-->
                             <!--           </div>-->
                             <!--       </div>-->
                             <!--</div> -->
                             
                             
                            <!--<div class="col-md-3 col-sm-3 col-xs-6 pd0">-->
                            <!--        <div class="our-team">-->
                            <!--            <img loading="lazy" class="lazyload" data-src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/stories/Placement-Story-BG34.jpg" alt="">-->
                            <!--            <div class="team-prof">-->
                            <!--                <h3>Van Thai Do</h3>-->
                            <!--                <span>CCIE EI #67990</span>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!-- </div> -->
                             
                            
                             
            </div>
            <div class="col-md-4 col-xs-12">
               <div class="textwidget">
                  <div class="right_event">
                     <div class="right_event_area">
                        <div class="marquee marque_ hgt3" style="overflow:hidden;">
                            <!--<marquee behavior="alternate" direction="up" class="hgt3" style="text-align:left;" scrolldelay="10" scrollamount="3">-->
 
 <!-----ent open-------------->
 
 <span class="col-md-9">  </span><span class="col-md-3">  </span><br>
<span class="row blue_clr"><strong>CCIE Enterprise Infrastructure v1.0</strong> </span>
<span class="col-md-9">Putmano Keo</span><span class="col-md-3">#68243</span><br>
<span class="col-md-9">Yuta Takahashi</span><span class="col-md-3">#68240</span><br>
<span class="col-md-9">Ahmed S Swalmeh</span><span class="col-md-3">#68224</span><br>
<span class="col-md-9">Douglas Aguirre Dias</span><span class="col-md-3">#68204</span><br>
<span class="col-md-9">Nikolay Pishchikov </span><span class="col-md-3">#68194</span><br>
<span class="col-md-9">Sathish Subramanian </span><span class="col-md-3">#50115</span><br>
<span class="col-md-9">Sharukh Khan</span><span class="col-md-3">#61674</span><br />
<span class="col-md-9">Phuc Nguyen </span><span class="col-md-3">#68002</span><br />
<span class="col-md-9">Van Thai Do</span><span class="col-md-3">#67990</span><br />
<span class="col-md-9">Orhan Berkay</span><span class="col-md-3">#66117</span><br />
<span class="col-md-9">Remon Ibrahim</span><span class="col-md-3">#67847</span><br />
<span class="col-md-9">Masaaki Shimizu</span><span class="col-md-3">#67826</span><br />
<span class="col-md-9">Kiran Chakkamadathil</span><span class="col-md-3">#67804</span><br />
 <span class="col-md-9">Cesar Duran </span><span class="col-md-3">#67783</span><br />
 <span class="col-md-9">Geons Joy</span><span class="col-md-3">#67724</span><br />
 <span class="col-md-9">Jeremiah J Wolfe</span><span class="col-md-3">#67696</span><br />
 <span class="col-md-9">Devender Pal</span><span class="col-md-3">#67706</span><br />
<span class="col-md-9">Zahid Saeed </span><span class="col-md-3"> #67680</span><br />
<!-----ent close-------------->

<!-----security open-------------->
<span class="col-md-9">  </span><span class="col-md-3">  </span><br>
<span class="row green_clr"><strong>CCIE Security v6.0</strong>  </span>
<span class="col-md-9">Sathish Subramanian </span><span class="col-md-3">#50115</span><br>
<span class="col-md-9">Thomsan Akpa </span><span class="col-md-3">#68033</span><br>
<span class="col-md-9">Teeradech Keadrat </span><span class="col-md-3">#63113</span><br>
<span class="col-md-9">Thomsan Akpa</span><span class="col-md-3">#68033</span><br>
<span class="col-md-9">Raskin Paul </span><span class="col-md-3">#67630</span><br>
<span class="col-md-9">Vijayakumar</span><span class="col-md-3">#67567</span><br>
<span class="col-md-9">Abed Itani </span><span class="col-md-3">#65609</span><br>
<span class="col-md-9">Jose L Vega Horton</span><span class="col-md-3">#67379</span><br>
<span class="col-md-9">Ivan Barisic</span><span class="col-md-3">#67336</span><br>
<span class="col-md-9">Mohamed S Elbashir </span><span class="col-md-3">#65861</span><br>
<span class="col-md-9">Naveen Kumar </span><span class="col-md-3">#40909</span><br>
<span class="col-md-9">Cedrick Keti Musumbu</span><span class="col-md-3">#51164</span><br>
<!-----security close-------------->

<!-----collab open-------------->
<span class="row blue_clr"><strong>CCIE Collaboration v3.0</strong> </span>
<span class="col-md-9">Filipe Eduardo Dapolito Faria</span><span class="col-md-3">#68206</span><br>
<span class="col-md-9">Ankit Khanna</span><span class="col-md-3">#67475</span><br>
<span class="col-md-9">Swathy Edayath </span><span class="col-md-3">#67493</span><br>
<span class="col-md-9">Yogesh Mhatre</span><span class="col-md-3">#67250</span><br>
<span class="col-md-9">D Praven Kumar</span><span class="col-md-3">#66734</span><br>
<span class="col-md-9">Leen Alkarmy</span><span class="col-md-3">#66870</span><br>
<span class="col-md-9">Ankit S Uppal </span><span class="col-md-3">#66836</span><br>
<span class="col-md-9">Devan Arumugam</span><span class="col-md-3">#66332</span><br>
<span class="col-md-9">Kumar Roshan</span><span class="col-md-3">#66310</span><br>
<span class="col-md-9">Ahmad Abu</span><span class="col-md-3">#66121</span><br>
<span class="col-md-9">Sameer MK</span><span class="col-md-3">#66094</span><br>
<!-----collab close-------------->

<!-----data center open-------------->
<span class="col-md-9">  </span><span class="col-md-3">  </span><br>
<span class="row green_clr"><strong> CCIE Data Center v3.0</strong> </span>
<span class="col-md-9">Justine Njau</span><span class="col-md-3">#65710</span><br>
<span class="col-md-9">Sathish Subramanian </span><span class="col-md-3">#50115</span><br>
<span class="col-md-9">Sharukh Khan </span><span class="col-md-3">#61674</span><br />
<span class="col-md-9">David Lehner </span><span class="col-md-3">#68106</span><br />
<span class="col-md-9">Tawanda Ndafa </span><span class="col-md-3">#68104</span><br />
<span class="col-md-9">Saif Alhmoud </span><span class="col-md-3">#68048</span><br />
<span class="col-md-9">Manish Meshram </span><span class="col-md-3">#68047</span><br />
<span class="col-md-9">Vishal Saroha </span><span class="col-md-3">#67075</span><br />
<span class="col-md-9">Anwesha Moitra </span><span class="col-md-3">#67993</span><br />
<span class="col-md-9">Kewal Agarwal </span><span class="col-md-3">#67981</span><br />
<span class="col-md-9">Vishal Basnet</span><span class="col-md-3">#54153</span><br />
<span class="col-md-9">Indrajit Pote</span><span class="col-md-3">#67971</span><br />
<span class="col-md-9">Tandel Bipin</span><span class="col-md-3">#67950</span><br />
<span class="col-md-9">Muntaha Mohammad Arafat </span><span class="col-md-3">#68131</span><br>
<span class="col-md-9">Songri Lin </span><span class="col-md-3">#68145</span><br>
<!-----data center close-------------->

<!----- wireless open-------------->
<span class="col-md-9"></span><span class="col-md-3">  </span><br>
<span class="row green_clr"><strong> CCIE Enterprise Wireless v1.0</strong>  </span>
<span class="col-md-9">Abdul Rahman Oloruntobi Odunaye</span><span class="col-md-3">#50238</span><br>
<span class="col-md-9">Aaron Greene</span><span class="col-md-3">#56652</span><br>
<span class="col-md-9">Swamy Cheluvanarayana</span><span class="col-md-3">#57234</span><br>
<span class="col-md-9">Mohammed Abdul Quddus</span><span class="col-md-3">#68128</span><br>
<span class="col-md-9">Aaron Reyes Garcia</span><span class="col-md-3">#68111</span><br>
<span class="col-md-9">Marek Sumny</span><span class="col-md-3">#68108</span><br>
<span class="col-md-9">Hatim Abdelmageed</span><span class="col-md-3">#68102</span><br>
<span class="col-md-9">Joshua Plemons</span><span class="col-md-3">#67377</span><br>
<span class="col-md-9">Kresteen Alfalahat </span><span class="col-md-3">#66843</span><br>
<span class="col-md-9">Kareem Ahmed </span><span class="col-md-3">#65901</span><br>
<span class="col-md-9">Waseem Ullah </span><span class="col-md-3">#61136</span><br>
<span class="col-md-9">Abdul Haseeb Ali Malik </span><span class="col-md-3">#63470</span><br>
<span class="col-md-9">Utkarsha Asthana </span><span class="col-md-3">#63464</span><br>
<span class="col-md-9">Jeyakumar Sathurappan  </span><span class="col-md-3">#62437</span><br>
<span class="col-md-9">Kuheli Sarkar  </span><span class="col-md-3">#62409</span><br>
<span class="col-md-9">Astha Goyal  </span><span class="col-md-3">#62376</span><br>
<!----- wireless close-------------->
 
<!----- sp open-------------->
<span class="col-md-9">  </span><span class="col-md-3">  </span><br>
<span class="row blue_clr"><strong>CCIE Service Provider v5.0</strong>  </span>
<span class="col-md-9">Vedran Karadza </span><span class="col-md-3">#67670</span><br>
<span class="col-md-9">Ibnu Yuniawan </span><span class="col-md-3">#41827</span><br>
<span class="col-md-9">Ahmed M Al Sheimat</span><span class="col-md-3">#67129</span><br>
<span class="col-md-9">Sai Eswar Kiran Bhagavatula</span><span class="col-md-3">#63615</span><br>
<span class="col-md-9">Syed Hussain </span><span class="col-md-3">#63588</span><br>
<span class="col-md-9">Pradyumna Garg </span><span class="col-md-3">#63599</span><br>
<span class="col-md-9">Nipun Gaindhar </span><span class="col-md-3">#62711</span><br>
<span class="col-md-9">Muhammad ali Butt  </span><span class="col-md-3">#59077</span><br>
<span class="col-md-9">Muhammad Wali Butt </span><span class="col-md-3">#56587</span><br>
<span class="col-md-9">Bhushan Dilip Kamble </span><span class="col-md-3">#49727</span><br>
<!----- sp close-------------->

<!----- Devnet open-------------->
<span class="col-md-9">  </span><span class="col-md-3">  </span><br>
<span class="row green_clr"><strong>CCIE DevNet</strong>  </span>
<span class="col-md-9">Harvey Fernandez</span><span class="col-md-3">#20240022</span><br>
<span class="col-md-9">Abhishek Das </span><span class="col-md-3">#20240016</span><br>
<span class="col-md-9">Madhavi  Nannapaneni </span><span class="col-md-3">#20230064</span><br>
<span class="col-md-9">Abu Hayat Khan </span><span class="col-md-3">#20230029</span><br>
<span class="col-md-9">Michail </span><span class="col-md-3">#20230017</span><br>
<span class="col-md-9">Nagaraj </span><span class="col-md-3">#20230009</span><br>
<span class="col-md-9">Thanh doan </span><span class="col-md-3">#20230008</span><br>
<span class="col-md-9">Omar Rivera Vazquez </span><span class="col-md-3">#20240004</span><br>
<!----- Devnet close-------------->

                        </div>
                        <p></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--<section id="team">
      <div class="container">
         <header class="section-header text-center">
            <h3 class="color-white tech-team">Our Technical Team</h3>
            <p class="view-all-link"><a href="<?php //echo Yii::app()->createUrl("main/default/etrainer"); ?>" style="color:#ffffff;">VIEW ALL</a></p>
         </header>
         <div class="">
            <div id="owl-demo" class="owl-carousel owl-theme">
               <?php /*foreach($trainers as $trainer){ ?>
               <div class="item partner-view-1">
                  <div class="member">
                     <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/trainer/<?=$trainer->image?>" class="img-fluid" alt="<?=$trainer->name?> <?=$trainer->lab?>">
                  </div>
                  <div class="testi-txt">
                     <h4><?=$trainer->name?></h4>
                     <span class="desig"> <?=$trainer->lab?> </span> 
                  </div>
               </div>
               <?php }*/ ?>
            </div>
         </div>
      </div>
   </section>-->
</main>
<?/*<section id="blog" class="">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="section-header text-center">
               <h3 class="success-stories">Blogs</h3>
               <p class="view-all-link"><a style="color:#000;" href="https://blog.octanetworks.com/">VIEW ALL</a></p>
            </div>
         </div>
				 <?php foreach($blogs as $blog){
					$thumbnail = Yii::app()->db_blog->createCommand()->select('meta_value')->from('wp_postmeta')->where('post_id ='.$blog['meta_value'].' AND meta_key = "_wp_attached_file"')->queryRow();

                  $user_name = Yii::app()->db_blog->createCommand()->select('display_name')->from('wp_users')->where('ID ='.$blog['post_author'])->queryRow();
					 ?>
         <div class="col-md-4 col-sm-4 col-xs-12 sid-border-pad">
            <div class="gc-blog-detail col-md-12 side-bot">
               <!-- <p class=" blog-para Blog_cat">News</p>-->
               <div class="fxd-hgt">
                  <a href="https://blog.octanetworks.com/<?= $blog['post_name']; ?>" style="margin-bottom: 10px;" alt="">
                     <h4> <?= $blog['post_title']; ?> </h4>
                  </a>
									<?php
									$post_cont = strip_tags($blog['post_content']);
									$blog_content = strlen($post_cont) > 160 ? substr($post_cont,0,160).' ... <a href="https://blog.octanetworks.com/'.$blog['post_name'].'">Read More</a>' : $post_cont;
									?>
                  <p><?= $blog_content; ?> </p>
               </div>
               <div class="col-md-7 col-sm-6 col-xs-6">
                  <div class="row">
                     <span class="blog-para "><i class="fa fa-calendar" aria-hidden="true"></i><?= date('d-m-Y',strtotime($blog['post_date'])); ?></span>
                  </div>
               </div>
               <div class="col-md-5 col-sm-6 col-xs-6">
                  <div class="row">
                     <p class="blog-para blog_user"><?=$user_name['display_name']?></p>
                  </div>
               </div>
            </div>
            <div class="clearfix"></div>
         </div>
				 <?php } ?>
      </div>
   </div>
</section>*/?>


 <section id="SocialMedia" class="">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center">
                    <h3 class="success-stories">Join our study group</h3>
                  
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                
                    <div class="make-this-center col-md-6 col-sm-12 col-xs-12">
                        <a href="https://t.me/octanetworks">
                            <img loading="lazy" class="img-responsive" aria-label="TelegramQR" src="https://octanetworks.com/img/TelegramQR4.webp" alt="TelegramQR">
                        </a>
                        <div class="m-3">
                       <span ><b> Telegram Group :</b></span><span><a href="https://t.me/octanetworks" aria-label="https://t.me/octanetworks"> https://t.me/octanetworks </a></span> 
                        </div>
                    
                    </div>
                    <div class="make-this-center col-md-6 col-sm-12 col-xs-12">
                        <a href="https://chat.whatsapp.com/KtvTghoOEK2EvFsz5178L6">
                            <img loading="lazy" class="img-responsive" aria-label="WhatsappQR" src="https://octanetworks.com/img/WhatsappQR3.webp" alt="WhatsappQR">
                        </a>
                        <div class="m-3">
                       <span><b> Whatsapp Group :</b></span><span><a href="https://chat.whatsapp.com/KtvTghoOEK2EvFsz5178L6" aria-label="https://chat.whatsapp.com/KtvTghoOEK2EvFsz5178L6"> https://chat.whatsapp.com/KtvTghoOEK2EvFsz5178L6 </a></span> 
                       </div>
                    </div>
                   
            </div>
        </div>
</section> 

<section id="blog" class="">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="section-header text-center">
               <h3 class="success-stories">Blogs</h3>
               <p class="view-all-link"><a style="color:#000;" href="https://blog.octanetworks.com/">VIEW ALL</a></p>
            </div>
         </div>
				 <?php foreach($blogs as $blog){
					$thumbnail = Yii::app()->db_blog->createCommand()->select('meta_value')->from('wp_postmeta')->where('post_id ='.$blog['ID'].' AND meta_key = "_wp_attached_file"')->queryRow();

                  $user_name = Yii::app()->db_blog->createCommand()->select('display_name')->from('wp_users')->where('ID ='.$blog['post_author'])->queryRow();
					 ?>
         <div class="col-md-4 col-sm-4 col-xs-12 sid-border-pad">
            <div class="gc-blog-detail col-md-12 side-bot">
    <div class="wa-color fxd-hgt">
        <a href="https://blog.octanetworks.com/<?= $blog['post_name']; ?>" style="margin-bottom: 10px;">
            <h4><?= $blog['post_title']; ?></h4>
        </a>
        <?php
            $post_cont = strip_tags($blog['post_content']);
            $read_more_text = strlen($post_cont) > 160 ? 'Read More about ' . $blog['post_title'] : 'Read Full Article';
            $blog_content = strlen($post_cont) > 160 ? substr($post_cont, 0, 160) . ' ... <a href="https://blog.octanetworks.com/' . $blog['post_name'] . '">' . $read_more_text . '</a>' : $post_cont;
        ?>
        <p><?= $blog_content; ?> </p>
    </div>
    <div class="col-md-7 col-sm-6 col-xs-6">
        <div class="row">
            <span class="blog-para"><i class="fa fa-calendar" aria-hidden="true"></i><?= date('d-m-Y', strtotime($blog['post_date'])); ?></span>
        </div>
    </div>
    <div class="col-md-5 col-sm-6 col-xs-6">
        <div class="row">
            <p class="blog-para blog_user"><?= $user_name['display_name'] ?></p>
        </div>
    </div>
</div>

            <div class="clearfix"></div>
         </div>
				 <?php } ?>
      </div>
   </div>
</section>

<!--Video model-->
<div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><img alt="close" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/lightbox-close.png"></span>
            </button>        
            <!-- 16:9 aspect ratio -->
            <div class="embed-responsive embed-responsive-16by9">
               <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
            </div>
         </div>
      </div>
   </div>
</div>


<section id="sec_hed">
<div class="line-bar">
<div class="container">
         <h1 class="text-center mr-t0">Trusted & Reputed Institute for CCNA, CCNP & CCIE Trainings in Mumbai, India</h1>
</div>	
</div>	 
      <div class="container">

     <p>Octa Networks is the preferred and sought after Training Institute for Cisco Certifications in India. 
        Octa Networks provide latest trending Networking Course such as 
        <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/certification-course/ccna-training-institute/"><strong>CCNA</strong></a>, 
        <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/training-exam/ccnp-enterprise/"><strong>CCNP Enterprise</strong></a>, 
        <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/training-exam/ccnp-security/"><strong>CCNP Security</strong></a>, 
        <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/training-exam/ccnp-collaboration/"><strong>CCNP Collaboration</strong></a>, 
        <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/training-exam/ccnp-data-center/"><strong>CCNP Data Center</strong></a>, 
        <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/training-exam/ccie-enterprise-infrastructure/"><strong>CCIE Enterprise Infrastructure v1</strong></a>, 
        <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/training-exam/ccie-security/"><strong>CCIE Security v6</strong></a>, 
        <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/training-exam/ccie-collaboration/"><strong>CCIE Collaboration v3</strong></a>, 
        <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/training-exam/ccie-data-center/"><strong>CCIE Data Center v3</strong></a>, 
        <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/training-exam/ccie-service-provider/"><strong>CCIE Service Provider v5</strong></a>, 
        <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/training-exam/aws-certified-solutions-architect-professional/"><strong>AWS Solution Architect</strong></a>, 
        <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/certification-course/vmware-network-virtualization/"><strong>VMware NSX</strong></a>, 
        <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/training-exam/mcse-core-infrastructure-and-mcse-productivity-solutions/"><strong>MCSE</strong></a>, 
        <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/training-exam/palo-alto-networks/"><strong>Palo Alto</strong></a> and 
        <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/certification-course/checkpoint/"><strong>Checkpoint</strong></a>. 
        Currently located at Mumbai and plans to expand to Bangalore, Gurgaon and Pune, Octa Networks has one of the largest 
        <a href="#" data-toggle="modal" data-target="#myModalt">CCNA</a>, 
        <a href="#" data-toggle="modal" data-target="#myModal1">CCNP</a> and 
        <a href="#" data-toggle="modal" data-target="#myModal1">CCIE</a> 
        training labs in the world. Octa Networks provide both 
        <strong>onsite and online Networking training</strong> for their 
        <strong>domestic and international students all over the world</strong>. We have become one of 
        <strong>the reliable and trust worthy learning center for Cisco Certification Courses</strong> and mastering the networking with 
        <strong>95% passed out result</strong>. Octa Networks is one of the 
        <strong>leading, trusted and preferred Corporate Training providers in India 

        </strong>offering high-quality corporate training for various courses like 
        <strong>Cisco (CCNA CCNP CCIE), Microsoft, VMware, AWS, Palo Alto, Huawei, Juniper</strong> z
        to companies and clients all over the world.<a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/about-octa-network/"><strong>Read More about octa networks</strong></a>.

</p>

					
					
            <!-- Modal for ccie routing & switching zero to hero program -->
            <div class="modal fade" id="myModalt" role="dialog">
               <div class="modal-dialog modal-notify modal-info">
                  <!-- Modal content-->
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">CCNA Certifications</h4>
                     </div>
                     <div class="modal-body">
                        <p>The ‘NEW CCNA' as the Cisco Certification Program team likes to call it is not a CONVERGED CCNA or a UNIFIED CCNA. The new CCNA (200-301) is designed for the audience who can start working in the networking industry and then go on growing higher in the certificate program in specific domains of their job requirements or growth aspirations.</p>
                        <p>These changes are made after a thorough study and research of the market needs and demands. Markets are demanding familiarity with broader and modern new concepts like Software Programmability, Automation, Virtualization, Data Center, Wireless along with R&S and Wireless. The new CCNA will arm network professionals with the necessary knowledge and experience to start their careers on a solid foundation. Once they get into the industry with a CCNA certificate, they can pivot to the most relevant and promising areas of Cisco Technologies while working. In short, CCNA is going to be the first step towards fulfilling personal and professional ambitions and goals in the networking field.</p>
                        <p>Currently, students and professionals can pursue their CCNA certifications based on the existing program until 23rd Feb 2020. The new CCNA (200-301) will be available from 24th Feb 2010. Cisco team has planned an elaborate migration plan for the existing CCNAs which will seamlessly transition them from the existing CCNA program to the new CCNA program...<b><a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/certification-course/ccna-training-institute/" target="_blank">Read More about CCNA Training</a></b></p>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                     </div>
                  </div>
               </div>
            </div>
            <!--------------------->
            
            <div class="modal fade" id="myModal1" role="dialog">
               <div class="modal-dialog modal-notify modal-info">
                  <!-- Modal content-->
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">CCNP Certifications</h4>
                     </div>
                     <div class="modal-body">
                        <p>CCNP is the professional-level certification for the students and professionals who are looking for enhancing their credentials with a global certificate which will open the doors of infinite possibilities in their careers.</p>
                        <p>This is an exciting phase in the networking industry since new networking technologies are changing the landscape of interrelations between applications and the role networks play in businesses. The lines between networks, IT infrastructure and software applications are getting blurred by every minute. They are becoming inseparable. Networks today need automation and programmability. For delivering the services and Wow client experiences, Networks are getting converged with infrastructure at the edge, in the data center, and the cloud while developers are building their applications on this platform. </p>
                        <p>In the new CCNP certification program, each CCNP certification requires only two exams: One core exam and one concentration exam of candidate’s choice depending on the candidate's job role, interest, and needs. The best part of the core exams is they also serve as the qualifying exams for CCIE lab exams in respective technology track...<b><a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/certification-course/ccnp-training-institute/" target="_blank">Read More about CCNP Training</a></b></p>
                     <strong>>Following are the new CCNP certifications:</strong><br>
						1.	CCNP Enterprise<br>
						2.	CCNP Data Center<br>
						3.	CCNP Security<br>
						4.	CCNP Service Provider<br>
						5.	CCNP Collaboration<br>

					 </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                     </div>
                  </div>
               </div>
            </div>
            <!--------------------->
           
            <div class="modal fade" id="myModal2" role="dialog">
               <div class="modal-dialog modal-notify modal-info">
                  <!-- Modal content-->
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">CCIE</h4>
                     </div>
                     <div class="modal-body">
                        <p>Ever-evolving technologies and marketplace demands are pushing the CISCO certification program to anticipate future needs and to arrange for fulfillment of these needs in advance. It is estimated that approx. 58000-60000 networking professionals are certified as CCIEs to this point in time. The CCIE program has been the flagship certification in the networking world. Cisco has planned to revamp in the Certification program to reflect the changing dynamics of the networking world and the prevalent technologies. In Feb 2020, revamped Cisco certification program will take the place of the existing certification program. CCNA, CCNP, and CCIE programs have been designed to be agile and flexible so that candidates can save on their time and resources while getting certified in the most relevant and advanced technologies without having to follow left to the right formula of passing certificate exams e.g. Passing CCNA before attempting for the CCNP. </p>
                        <p>The existing CCIE program will get revamped completely to reflect the realities of the networking requirements and business needs. Enhancing the existing CCIE program with the new realities of the networking world and the future demands of the marketplace like SDN, Virtualization, Automation, Programmability, and network Assurance is the main objective of the revamped CCIE certification program. This is the reason behind calling CCIE Routing and Switching as CCIE Enterprise Infrastructure and CCIE Enterprise Wireless as it reflects the new realities of the enterprise nature of the networks.</p>
                        <p>CCIE Collaboration focuses on knowledge and practical application of collaboration solutions including infrastructure and design, protocols, codec’s, and endpoints, Cisco IOS XE gateway, and media resources, call control QoS and collaboration applications.</p>
                        <p>Cisco is rebooting the CCIE Data Center blueprint to cover the most relevant technologies and business needs by designing a qualifying core exam which covers technologies including Automation and Programmability while the lab exam will validate end-to-end lifecycle skills with complex infrastructure, from planning and design to operating and optimizing.</p>
                        <p>CCIE Security certification is an embodiment of core knowledge and practical skills in handling the most complex scenarios of the entire IT Security aspect of the network lifecycle (Designing, Deploying, Operating & Optimizing). CCIE Security training at Octa Networks revolves around acquiring a broader range of skills and a deeper focus in critical technology areas as per the course contents prescribed by the CISCO CCIE Security certification blueprint. In other words, CCIE Security is the evidence of the knowledge and skillsets acquired by an individual to architect, engineer, implement, troubleshoot and support complex security solutions and technologies.</p>
                        <p>Cisco is rebooting the CCIE Service Provider blueprint to cover the most relevant technologies and business needs by designing a qualifying core exam which covers technologies including Automation and Programmability while the lab exam will validate end-to-end lifecycle skills with complex infrastructure, from planning and design to operating and optimizing...<b><a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/certification-course/ccie-training-institute/" target="_blank">Read More CCIE Training</a></b></p>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                     </div>
                  </div>
               </div>
            </div> 
			 
		 	 <!-- Modal for ccie routing & switching zero to hero program -->
            <div class="modal fade" id="myModalh1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
               <div class="modal-dialog modal-notify modal-info">
                  <!-- Modal content-->
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                        <h4 class="modal-title">CCNA CCNP CCIE Training Institute Mumbai</h4>
                     </div>
                     <div class="modal-body">    
                          <p> Octa Networks is focussed on skilling, re-skilling and up-skilling technical staff in such organizations. 
          We have been ranked #1 for CCNA CCNP CCIE Training Institute in Mumbai. </p>
                         
        <p>Octa Networks is founded in 2010 by two young and dynamic networking professionals with strong work experience with market leaders. 
        <!--With these two Octa CCIE founder members Mr. Joaquim Fernandes (CCIE#26908) and Mr. Arshad Dhunna (CCIE#27253) in the leadership role,--> 
        With these directors in the leadership role,
        Octa Networks is working very closely with students, professionals, and organizations on their networking training and certification needs. 
        The results are out in the open. Octa Networks has trained thousands of students/corporate professionals in various technologies and certifications.
        The success ratio of certification has been the biggest achievement of Octa Networks over the years. The best CCIE training institute in India,
        Octa Networks provides expert training and robust infrastructure for developing your enterprise networking specific technology and deployment skill sets 
        supplemented with vendor-neutral industry knowledge. Octa Networks makes sure that the students get real-world network implementation and troubleshooting 
        experience/skills that the market demands which in turn differentiates them from the rest of the crowd. We are proud of our track record of guiding and 
        coaching our students to achieve their CCIE certifications. We will strive to keep up the good work we are doing as the best CCIE training institute in India. 
        Octa Networks takes immense pride in providing world-class training facilities and infrastructure for the students and professionals pursuing their certifications.
        CCIE Boot Camps and CCIE Rack Rentals are noteworthy ingredients of CCIE training practice at Octa Networks. Octa Networks is providing CCIE boot camps 
        and focussed training facilities in and out of India. Highly experienced and certified coaches powered by 24x7 availability and access to Cisco and other 
        OEM hardware devices prepare the students at Octa Networks not only for their certification exams but also for their career success. Octa Networks 
        has a proven track record of training CCIE aspirants to achieve their certification goals followed by growth-oriented and prosperous careers.</p> 
                        </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                     </div>
                  </div>
               </div>
            </div>
						</div>
						</div>
						</section>


<section id="about1" style="padding-top:0px">
			<div class="line-bar">
            <div class="container">

            <h2>CCIE Training Program at Octa Networks</h2>
			</div>
			</div>
      <div class="container">
      <p>Octa Networks has become most <strong>reliable and preferred institute in the networking training industry</strong>. We have committed in <strong>delivering quality and advance technology</strong> training to our Candidates.  Candidates are exposed to <strong>Real Cisco devices</strong> during their hands-on labs which assist them in production environment. Our hard work is recognized and appreciated by reputed institutions in 2018 and 2019 as “<strong>Best Emerging Cisco Training Institute Empowering Youth with IT Skills</strong>” in India. To know more about Octa Networks, Please click here. To Know More about <strong>Our Journey<strong>, Please <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/our-journey/"><strong>click here to explore our journey<strong></a>.

</p>
<p>We make sure our <strong>training programs rigorously follow latest Cisco exam blueprints</strong>. We offer all new revamped <strong>CCIE Enterprise Infrastructure v1, CCIE Security v6, CCIE Collaboration v3, CCIE Data Center v3, CCIE Service Provider v5 </strong>training on physical Cisco devices.  Octa Networks is proud to be the <strong>only </strong> <a href="#" data-toggle="modal" data-target='#myModalh2'><strong>training</strong></a> <strong>institute in the world</strong> having fully equipped <strong>CCIE labs as per Cisco equipment checklist</strong>. We also offer placement assistance for our CCIE Zero to Hero program. We make sure <strong>equal importance is given to technology learning and practical hands on using Cisco Real Devices</strong>, thus making us the most preferred and trusted CCIE training institute globally. To know more about Our Awards & Accolades, Please<a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/octa-networks-awards/"> <strong>click here to view octa networks awards </strong></a></p>





  
       <!-- Modal for ccie routing & switching zero to hero program -->
            <div class="modal fade" id="myModalh2" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
               <div class="modal-dialog modal-notify modal-info">
                  <!-- Modal content-->
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                        <h4 class="modal-title">Cisco Certification Course Mumbai</h4>
                     </div>
                     <div class="modal-body">
        
           <p>Octa Networks training program focuses on acquiring a broader range of skills and a deeper focus in critical technology areas as per the course contents prescribed by different technology leaders in the industry. 
         In other words, achieving technical training certifications by getting trained at Octa Networks is the evidence of the knowledge and skill sets acquired by an individual to architect, engineer, implement, troubleshoot and support the specific complex solutions and technologies. 
				 
				 Individuals pursuing their careers in the field of networking get a major boost in their employability by achieving Cisco certificates. Inherent benefits of getting certified in the CISCO program are manifold. Cisco certification tracks are designed to meet the most advanced and pervasive technological demands from the market. Cisco tracks the technological trends in the market, gets them verified by consistent feedback from the industry. Cisco certification tries to meet the employer's expectations by empowering and training network engineers with the right set of knowledge and skill sets.</p><p> Cisco certifications are evidence of acquired expertise and skill sets in the specific area of technology. Cisco certified individuals are providing technological and skill set leadership in the industry. From Feb 24th, 2020, Cisco is revamping the entire Certification program to meet the ever-changing dynamics of technical skill sets and workplace prerequisites of a networking professional. Cisco is moving from ‘One Size Fits all’ certification programs to ‘Tailor-made Certifications’ in the critical domains of various technology domains. It means, networking professionals can now pick and choose various specific domains from the pool of various cutting edge technologies and get certified in them. For the professionals or students who are currently certified or are preparing for the Cisco certifications, Cisco has planned a very seamless and rewarding plan of migration. It will certainly motivate and inspire aspiring professionals to pursue their certifications more rigorously. 
</p><strong>Following are the CISCO certifications available at OCTA NETWORKS:</strong><br>
• CCNA/CCDA <br>  
• CCNP/CCDP <br>  
• CCIE<br>
                        </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                     </div>
                  </div>
               </div>
            </div> 
      </div>
   </section>
   
   
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.marquee/1.3.1/jquery.marquee.min.js"></script>
   
<script>
$('.marquee').marquee({
   //speed in milliseconds of the marquee
   duration: 18000,
   //gap in pixels between the tickers
   gap: 0,
   //time in milliseconds before the marquee will start animating
   delayBeforeStart: 0,
   //'left' or 'right'
   direction: 'up',
   //true or false - should the marquee be duplicated to show an effect of continues flow
   duplicated: true
});</script>
 
 