<style>
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


<main id="main">
              <?php
             $spacetop = 1;
             ?>
   <section id="ncourse_section">
      <div class="container">
			<div class="course-header">
			    <p class="mr-t0 para_1">Popular Courses</p>
         <p class="mr-t0 para_2">Embark on your learning journey with our acclaimed, popular courses designed for today's industry relevance.</p> 
				 </div>
<div class="row mt-2">
            <?php 
            foreach ($exampopular as $item): ?>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-bottom-4 <?php echo ($spacetop > 4) ?  : ''; ?>">
            <a href="<?php echo Yii::app()->baseUrl . '/training-exam/' . $item->url; ?>">
                <div class="sec_card">
                    <div class="main_img">
                        <img src="<?php echo Yii::app()->baseUrl . '/img/exam/' . $item->image; ?>" alt="<?php echo CHtml::encode($item->code); ?>">
                    </div>
                    <div class="card_body">
                        <div class="card_title"><?php echo CHtml::encode($item->code); ?></div>
                        <div class="card_text"><?php echo CHtml::encode($item->short_description); ?></div>
                    </div>
                    <div class="card_footer">
                        <?php if ($item->cert !== null): ?>
                            <div class="expert_text"><?php echo CHtml::encode($item->cert->menu_name); ?></div>
                        <?php endif; ?>
                        <div class="duration_text"><i class="fa fa-calendar-alt"></i><?php echo CHtml::encode($item->duration); ?></div>
                        <?php if ($item->vendor !== null): ?>
                            <div class="logo_cisco">
                                <img src="<?php echo Yii::app()->baseUrl . '/img/vendor/' . $item->vendor->image; ?>" alt="Vendor Logo">
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </a>
            </div>
            <?php 
            $spacetop ++;
            endforeach; ?>
         </div>
        
        
        <div class="bat_maidiv">
        <div class="button_exp mt-2">
                 <a class="enquire" data-toggle="modal" data-target="#enroll_popup">Contact Us Now <img src="<?php echo octa_asset('arrnew.webp'); ?>" alt="Cisco"></a>  
            </div>
            </div>
      </div>
   </section>
   
   <section class="creating_sec">
       <div class="marq_title">
                <marquee behavior="" direction="" scrollamount="25"><p class="mar-p">Creating Network Engineers for Future! - A Better Learning for Better Future! - Committed to Excellence in Training!</p></marquee>
           </div>
       <div class="container">
            
           <div class="row mt-4 align-items-center">
               <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                   <h4 class="create_title">We promise to unleash the complete power of your abilities, charting a course toward unparalleled achievement.</h4>
                   <p class="create_p">Backed by a team of experienced professionals and industry experts, we offer a wealth of practical knowledge spanning various technological fields. Our carefully curated training programs aim to furnish you with the latest and most in-demand skills, guaranteeing your proficiency in today's dynamic digital environment.</p>
                   <p class="create_p">Through immersive learning experiences and hands-on lab simulations, we prioritize your transition into adept professionals ready for the industry. Having successfully guided numerous students to fulfill their career goals, we warmly welcome you to join us on this transformative journey.</p>
<div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
            <h5 class="count_number" data-target="10">0+</h5>
            <p class="count_title">Years of Professional Training Experience</p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
            <h5 class="count_number" data-target="90">0%</h5>
            <p class="count_title">CCIE Success Ratio in First Attempt</p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <h5 class="count_number" data-target="85">0%</h5>
            <p class="count_title">Success Ratio in Job Placement</p>
        </div>
    </div>
               </div>
               <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                   <div class="im_age mob_res">
                   <div class="main">
          <div class="big_circle">
            <div class="ic_block">
              <img src="images/im-circle.png" alt="web design icon" />
            </div>
            <div class="ic_block">
              <!-- <img src="https://www.yudiz.com/codepen/animated-portfolio/game-design-icon.png" alt="game design icon" /> -->
            </div>
            <div class="ic_block">
              <img src="images/im-circle.png" alt="game dev icon" />
            </div>
            <div class="ic_block">
              <!-- <img src="https://www.yudiz.com/codepen/animated-portfolio/ui-ux-icon.png" alt="ui-ux icon" /> -->
            </div>
          </div>
          <div class="cir_cle">
            <div class="ic_block">
              <img src="images/im-circle.png" alt="app icon" />
            </div>
            <div class="ic_block">
              <!-- <img src="https://www.yudiz.com/codepen/animated-portfolio/blockchain-icon.png" alt="blockchain icon" /> -->
            </div>
            <div class="ic_block">
              <!-- <img src="https://www.yudiz.com/codepen/animated-portfolio/arvr-icon.png" alt="ar-vr icon" /> -->
            </div>
            <div class="ic_block">
              <!-- <img src="https://www.yudiz.com/codepen/animated-portfolio/artificial-intelligence-icon.png" alt="artificial intelligence icon" /> -->
            </div>
          </div>
          <div class="center-logo">
            <img src="<?php echo octa_asset('first.webp'); ?>" alt="logo" />
          </div>
        </div>
        </div>
               </div>
           </div>
       </div>
       
   </section>
   
   
   
      <section id="newest_section">
            <?php
                $spacetop2 = 1;
            ?>
             
      <div class="container">
			<div class="course-header">
			    <p class="mr-t0 para_1">Newest Courses</p>
         <p class="mr-t0 para_2">Embrace the future with our cutting-edge courses, meticulously crafted to meet the constantly evolving needs of the tech industry.</p> 
				 </div>
         <div class="row mt-2">

            <?php foreach ($examnew as $item): ?>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-bottom-4 <?php echo ($spacetop2 > 4) ?  : ''; ?>">
               <a href="<?php echo Yii::app()->baseUrl . '/training-exam/' . $item->url; ?>">
                <div class="sec_card">
                    <div class="main_img">
                        <img src="<?php echo Yii::app()->baseUrl . '/img/exam/' . $item->image; ?>" alt="<?php echo CHtml::encode($item->code); ?>">
                    </div>
                    <div class="card_body">
                        <div class="card_title"><?php echo CHtml::encode($item->code); ?></div>
                        <div class="card_text"><?php echo CHtml::encode($item->short_description); ?></div>
                    </div>
                    <div class="card_footer">
                        <?php if ($item->cert !== null): ?>
                            <div class="expert_text"><?php echo CHtml::encode($item->cert->menu_name); ?></div>
                        <?php endif; ?>
                        <div class="duration_text"><i class="fa fa-calendar-alt"></i><?php echo CHtml::encode($item->duration); ?></div>
                        <?php if ($item->vendor !== null): ?>
                            <div class="logo_cisco">
                                <img src="<?php echo Yii::app()->baseUrl . '/img/vendor/' . $item->vendor->image; ?>" alt="Vendor Logo">
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                </a>
            </div>
            <?php 
            $spacetop2 ++;
            endforeach; ?>
         </div>
         
        <div class="bat_maidiv">
        <div class="button_exp mt-2">
                 <a class="enquire" data-toggle="modal" data-target="#new_popup">Reach Out for Assistance <img src="<?php echo octa_asset('arrnew.webp'); ?>" alt="Cisco"></a>
            </div>
            </div>
      </div>
   </section>
   
   
   
      <section id="cciecourse_section">
            <?php
                $spacetop3 = 1;
            ?>
      <div class="container">
			<div class="course-header">
			    <p class="mr-t0 para_1">CCIE Courses</p>
         <p class="mr-t0 para_2">Distinguish yourself as best of the best and set yourself apart as the epitome of excellence and expertise.</p> 
				 </div>

        <div class="row mt-2">
            <?php foreach ($examccie as $item): ?>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-bottom-4 <?php echo ($spacetop3 > 4) ? : ''; ?>">
              <a href="<?php echo Yii::app()->baseUrl . '/training-exam/' . $item->url; ?>">
                <div class="sec_card">
                    <div class="main_img">
                        <img src="<?php echo Yii::app()->baseUrl . '/img/exam/' . $item->image; ?>" alt="<?php echo CHtml::encode($item->code); ?>">
                    </div>
                    <div class="card_body">
                        <div class="card_title"><?php echo CHtml::encode($item->code); ?></div>
                        <div class="card_text"><?php echo CHtml::encode($item->short_description); ?></div>
                    </div>
                    <div class="card_footer">
                        <?php if ($item->cert !== null): ?>
                            <div class="expert_text"><?php echo CHtml::encode($item->cert->menu_name); ?></div>
                        <?php endif; ?>
                        <div class="duration_text"><i class="fa fa-calendar-alt"></i><?php echo CHtml::encode($item->duration); ?></div>
                        <?php if ($item->vendor !== null): ?>
                            <div class="logo_cisco">
                                <img src="<?php echo Yii::app()->baseUrl . '/img/vendor/' . $item->vendor->image; ?>" alt="Vendor Logo">
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                </a>
            </div>
            <?php 
            $spacetop3 ++;
            endforeach; ?>
         </div>
        
        <div class="bat_maidiv">
        <div class="button_exp mt-2">
                 <a class="enquire" data-toggle="modal" data-target="#ccie_popup">Ask for a Free Consultation <img src="<?php echo octa_asset('arrnew.webp'); ?>" alt="Cisco"></a>
            </div>
            </div>
      </div>
   </section>
   
   
   <section class="succes_section blue_gradian">
	<div class="container bg_fig">
	    <p class="mr-t0 para_1">Why Us</p>
		<h4 class="p-0 section_pd_heading pd_b10" style="color:#454545;">Reasons why Octa Networks is Market Leader for CCIE Trainings</h4>
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
<section class="new_textimonial">
           <div class="container">
               <div class="row">
                <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12">   
           <div class="course-header">
			    <p class="mr-t0 para_1">Testimonials</p>
         <p class="mr-t0 para_2">What students say about us</p> 
				 </div>
            <div id="nw-test" class="owl-carousel owl-theme">
                 <?php foreach($testimonials as $testimonials){ ?>
                <div class="item">
                    <div class="review-card">
                        <div class="prof-img">
                            <img loading="lazy" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/testimonials/<?=$testimonials->image?>" class="testimonial-img" alt="<?=$testimonials->name?>">
                            <h3 class="pr-h3"><?=$testimonials->name?></h3>
                        </div>
                        <div  class="test-p">
                            <div><?=$testimonials->content?></div>
                        </div>
                        <div class="rating">
                            <img src="<?php echo octa_asset('g-image.webp'); ?>" alt="Google" class="rating-icon">
                            <img src="<?php echo octa_asset('starreview.webp'); ?>" alt="Google" class="r-star">
                            <span>4.9</span>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            </div>
            </div>
    </div>
   </section>
   <section class="testvid_sec">
       <div class="container">
       <div class="row vidver">
             <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
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
             <div class="col-lg-1 col-md- col-sm-12 col-xs-12">
                 <a class="right carousel-control" href="#myCarousel1" data-slide="next">
                 <div class="vid_arrow">
                 <img src="<?php echo octa_asset('arrnew.webp'); ?>" alt="Next">
                  </a>
                  </div>
             </div>
             <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                   <h4 class="create_title">Video Testimonials from Our Students</h4>
                   <p class="create_p">Don't just take our word for it – listen to the professionals who've transformed their careers with Octa Networks.</p>
             <div class="vid_maidiv">
            <div class="button_exp mt-4">
                 <a href="https://updated.octanetworks.com/student-reviews" target="_blank">Explore <img src="<?php echo octa_asset('arrnew.webp'); ?>" alt="Cisco"></a>
            </div>
            </div>
             </div>
            </div>
         </div>
    </section>
   
   
   <section class="success-stories-sec cont-sec ">
      <div class="container">
          <div class="row">
          <div class="col-md-6">
               <div class="suc_maititle">
                  <h4 class="parastory">Success Stories</h4>
                  <h4 class="create_title">Discover the tales of triumph from Octa Networks' CCIE certification achievers.</h4>
               </div>
            </div>
            <div class="col-md-6 col-sm-6">
               <div class="ve_all_button d_mobile">
                  <p class="view-all-link"><a style="color:#000;" href="<?php echo Yii::app()->createUrl("main/default/successstories"); ?>">View all <i class="tmi- tmi-next leftpadding_10"></i></a></p>
               </div>
            </div>
            </div>
         <div class="row">
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
               <div class="row">
                             <div class="col-md-4 col-sm-3 col-xs-6 pd0">
                                    <div class="our-team">
                                       <img loading="lazy" class="lazyload" data-src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/stories/Media (1).jpg" alt="">
                                      
                                        <div class="team-prof">
                                            <h3>Khaled Gamal Ali Abd Elghani</h3>
                                            <span>Security v6.1 #69642</span>
                                        </div>
                                    </div>
                             </div> 
                            
                             <div class="col-md-4 col-sm-3 col-xs-6 pd0">
                                    <div class="our-team">
                                       <img loading="lazy" class="lazyload" data-src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/stories/shared image (5).png" alt="">
                                        <div class="team-prof">
                                            <h3>Raed Musaab </h3>
                                            <span>Data Center v3.1 #60498</span>
                                        </div>
                                    </div>
                             </div> 
                             
                             <!--<div class="col-md-4 col-sm-3 col-xs-6 pd0">-->
                             <!--       <div class="our-team">-->
                             <!--           <img loading="lazy" class="lazyload" data-src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/stories/c43b4599-175d-4a50-aa0f-b96476d63165.webp" alt="">-->
                             <!--           <div class="team-prof">-->
                             <!--               <h3>Manish Kumar Tiwari </h3>-->
                             <!--               <span>CCIE Security v6.1 #68730</span>-->
                             <!--           </div>-->
                             <!--       </div>-->
                             <!--</div>-->
                             <div class="col-md-4 col-sm-3 col-xs-6 pd0">
                                    <div class="our-team">
                                        <img loading="lazy" class="lazyload" data-src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/stories/shared image (8).png" alt="">
                                        <div class="team-prof">
                                            <h3>Priyadharshini Mariya Raj  </h3>
                                            <span>Collaboration v3.1  #69672</span>
                                        </div>
                                    </div>
                             </div>
                             
                             <div class="col-md-4 col-sm-3 col-xs-6 pd0">
                                    <div class="our-team">
                                       <img loading="lazy" class="lazyload" data-src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/stories/shared image (6).png" alt="">
                                        <div class="team-prof">
                                            <h3>Ahmed Osama Ahmed Mohamed  </h3>
                                            <span>Collaboration v3.1  #69643</span>
                                        </div>
                                    </div>
                             </div> 
                             <div class="col-md-4 col-sm-3 col-xs-6 pd0">
                                    <div class="our-team">
                                       <img loading="lazy" class="lazyload" data-src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/stories/shared image (7).png" alt="">
                                        <div class="team-prof">
                                            <h3>Tshepiso Macheng  </h3>
                                            <span>Service Provider v5.1 #69685</span>
                                        </div>
                                    </div>
                             </div>
                            
                             
                             <div class="col-md-4 col-sm-3 col-xs-6 pd0">
                                    <div class="our-team">
                                        <img loading="lazy" class="lazyload" data-src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/stories/shared image (9).png" alt="">
                                        <div class="team-prof">
                                            <h3>Muhammad Omer Farooq </h3>
                                            <span>Collaboration v3.1  #696709</span>
                                        </div>
                                    </div>
                             </div> 
                             <div class="col-md-6">
               <div class="ve_all_button d_desk">
                  <p class="view-all-link"><a style="color:#000;" href="<?php echo Yii::app()->createUrl("main/default/successstories"); ?>">View all <i class="tmi- tmi-next leftpadding_10"></i></a></p>
               </div>
            </div>
                             </div> 
                            
            </div>
            <div class="col-md-4 col-xs-12">
               <div class="textwidget">
                  <div class="right_event">
                     <div class="right_event_area">
                        <div class="marquee marque_ hgt3" style="overflow:hidden;">
                            <!--<marquee behavior="alternate" direction="up" class="hgt3" style="text-align:left;" scrolldelay="10" scrollamount="3">-->
 
 <!-----ent open-------------->
 
 <span class="col-md-9">  </span><span class="col-md-3">  </span><br>
<span class="row blue_clr"><strong>CCIE Enterprise Infrastructure v1.1</strong> </span>
<span class="col-md-9">Vinothchellappa Kumar   </span><span class="col-md-3">#69735</span><br />
<span class="col-md-9">Sidheequl Akbar Kottu Purath  </span><span class="col-md-3">#65781</span><br />
<span class="col-md-9">Stephen Baker  </span><span class="col-md-3">#69584</span><br />
<span class="col-md-9">Bulent Fidan </span><span class="col-md-3">#68367</span><br />
<span class="col-md-9">Suchit Chikane </span><span class="col-md-3">#63844</span><br />
<span class="col-md-9">Mahmoud Ikhlas </span><span class="col-md-3">#46742</span><br />
<span class="col-md-9">Ibrahim EL Arja </span><span class="col-md-3">#69197</span><br />
<span class="col-md-9">Maziar Bijari  </span><span class="col-md-3">#69180</span><br />
<span class="col-md-9">Muhammad Shahbaz  </span><span class="col-md-3">#69159</span><br />
<span class="col-md-9">Abdulrahman Oloruntobi Odunaye </span><span class="col-md-3">#50238</span><br />
<span class="col-md-9"> Alaa Jaber Alfaifi </span><span class="col-md-3">#69078</span><br />
<span class="col-md-9"> Jakub Chovanec  </span><span class="col-md-3">#66032</span><br />
<span class="col-md-9"> Rafael Henrique</span><span class="col-md-3">#69062</span><br />
<span class="col-md-9">Kamile De Jong  </span><span class="col-md-3">#69050</span><br />
<span class="col-md-9">Neelima Radha Kishore Nayak  </span><span class="col-md-3">#69027</span><br />
<span class="col-md-9">Tshireletso Innocent Tlhokabatho </span><span class="col-md-3">#68972</span><br />
<span class="col-md-9">Shachar Alon   </span><span class="col-md-3">#63167</span><br />
<span class="col-md-9">Ibrahim Khalil  </span><span class="col-md-3">#68945</span><br />
<span class="col-md-9">Nishant Kala </span><span class="col-md-3">#68858</span><br />
<span class="col-md-9">Trunal Bane</span><span class="col-md-3">#68608</span><br />
<span class="col-md-9">Dominik Dobrowolski </span><span class="col-md-3">#68614</span><br />
<span class="col-md-9">Salih U Dogan</span><span class="col-md-3">#68678</span><br />
<span class="col-md-9">Shaked Abouksis</span><span class="col-md-3">#68688</span><br />
<span class="col-md-9">Marcin Sleczek</span><span class="col-md-3">#67501</span><br />
<span class="col-md-9">Aruna Ramesh Sarada</span><span class="col-md-3">#68717</span><br />
<span class="col-md-9">Abdoulaye Diakite</span><span class="col-md-3">#44462</span><br />
<span class="col-md-9">Ivan Janjic</span><span class="col-md-3">#68745</span><br />
<span class="col-md-9">Tihomir Radovanovic</span><span class="col-md-3">#68763</span><br />
<span class="col-md-9">Waldir Jahir Dueas Malaga</span><span class="col-md-3">#68756</span><br />
<span class="col-md-9">Vesna Jancic</span><span class="col-md-3">#68785</span><br />
<span class="col-md-9">Ngo Van Huy</span><span class="col-md-3">#68805</span><br />
<span class="col-md-9">Faisal Alasali</span><span class="col-md-3">#68446</span><br />
<span class="col-md-9">Yusuke Tsuboi</span><span class="col-md-3"> #68445</span><br />
<span class="col-md-9">Sandeep Gregory</span><span class="col-md-3">#68100</span><br />
<span class="col-md-9">Asad Akbar</span><span class="col-md-3"> #65953</span><br />
<span class="col-md-9">William Slade</span><span class="col-md-3">#68467</span><br />
<span class="col-md-9">Scott Wofford</span><span class="col-md-3">#66019</span><br />
<span class="col-md-9">Mohd Magdy El-Salam</span><span class="col-md-3">#68544</span><br />
<span class="col-md-9">Giorgi Tchkoidze</span><span class="col-md-3">#68549</span><br />
<span class="col-md-9">Shehin Pattathuvalapil Muhammed Unny</span><span class="col-md-3">#66461</span><br />
<span class="col-md-9">Ibrahim R Zayed </span><span class="col-md-3">#68572</span><br />
<span class="col-md-9">Aayush Goel </span><span class="col-md-3">#68432</span><br> 
<span class="col-md-9">Kazuaki Sasaki</span><span class="col-md-3">#68407</span><br> 
<span class="col-md-9">Ahmed Albreiki </span><span class="col-md-3">#68391</span><br> 
<span class="col-md-9">Chrisostomos Christofi </span><span class="col-md-3">#68354</span><br> 
<span class="col-md-9">Edson Hernandez</span><span class="col-md-3">#68318</span><br> 
<span class="col-md-9">Dmitrii Netrusov</span><span class="col-md-3">#68308</span><br> 
<span class="col-md-9">Peter Farkas</span><span class="col-md-3">#36250</span><br> 
<span class="col-md-9">Putmano Keo</span><span class="col-md-3">#68243</span><br> 
<span class="col-md-9">Yuta Takahashi</span><span class="col-md-3">#68240</span><br> 
<span class="col-md-9">Ahmed S Swalmeh</span><span class="col-md-3">#68224</span><br> 
<span class="col-md-9">Douglas Aguirre Dias</span><span class="col-md-3">#68204</span><br> 
<span class="col-md-9">Huseyin Burak Taskesen</span><span class="col-md-3">#68199</span><br>
<span class="col-md-9">Nikolay Pishchikov</span><span class="col-md-3">#68194</span><br>
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
<span class="row green_clr"><strong>CCIE Security v6.1</strong>  </span>
<span class="col-md-9"> Khaled Gamal Ali Abd Elghani   </span><span class="col-md-3">#69642</span><br> 
<span class="col-md-9"> Tebogo Pholo  </span><span class="col-md-3">#56678</span><br> 
<span class="col-md-9"> Mohammed Mohammed </span><span class="col-md-3">#69570</span><br> 
<span class="col-md-9"> Abdul Waheed Mohammed</span><span class="col-md-3">#69290</span><br>  
<span class="col-md-9">Vivek Krishnan   </span><span class="col-md-3">#69278</span><br>  
<span class="col-md-9">Maneetanand Sharma   </span><span class="col-md-3">#69137</span><br>  
<span class="col-md-9">Joel Ajayi  </span><span class="col-md-3">#69138</span><br>  
<span class="col-md-9">Naveedullah Totakhail  </span><span class="col-md-3">#61435</span><br>  
<span class="col-md-9">Piotr Smietanka </span><span class="col-md-3">#61435</span><br>  
<span class="col-md-9">Vahid Koohpayehzadeh Esfahani</span><span class="col-md-3">#63594</span><br>  
<span class="col-md-9">Torsti Vtinen </span><span class="col-md-3">#68936</span><br>  
<span class="col-md-9">Maxim Sevostyanov </span><span class="col-md-3">#68901</span><br>  
<span class="col-md-9">Abdallah Alrimawi</span><span class="col-md-3">#50243</span><br>  
<span class="col-md-9">Khalid Haidary</span><span class="col-md-3">#68872</span><br>  
<span class="col-md-9">Riyad Babikir</span><span class="col-md-3">#66994</span><br>  
<!--<span class="col-md-9">Krishna Arun Rajasekharuni</span><span class="col-md-3">#68820</span><br>  -->
<span class="col-md-9">Mohammed Yahia Ali Hajeltaieb</span><span class="col-md-3">#68793</span><br>  
<span class="col-md-9">Franz Schrefl</span><span class="col-md-3">#68653</span><br>  
<span class="col-md-9">Guillermo Calvo</span><span class="col-md-3">#68702</span><br>
<span class="col-md-9">Ibrahim Reda Ibrahim Aboushousha</span><span class="col-md-3">#68719</span><br>
<span class="col-md-9">Manish Kumar Tiwari</span><span class="col-md-3">#68730</span><br>
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
<span class="row blue_clr"><strong>CCIE Collaboration v3.1</strong> </span>
<span class="col-md-9">Hamza Alattari </span><span class="col-md-3">#69774</span><br>
<span class="col-md-9">Ahmad Eid Al Marie </span><span class="col-md-3">#69768</span><br>
<span class="col-md-9">Sidhan Changappa </span><span class="col-md-3">#69734</span><br>
<span class="col-md-9">Khaled Yassin </span><span class="col-md-3">#69697 </span><br>
<span class="col-md-9">Justin Puckett </span><span class="col-md-3">#69710 </span><br>
<span class="col-md-9">Muhammad Omer Farooq  </span><span class="col-md-3">#696709 </span><br>
<span class="col-md-9">Muhammad Omer Farooq  </span><span class="col-md-3">#696709 </span><br>
<span class="col-md-9">Shabic Roshan K P </span><span class="col-md-3">#69679 </span><br>
<span class="col-md-9">Priyadharshini Mariya Raj </span><span class="col-md-3">#69672 </span><br>
<span class="col-md-9">Ahmed Osama Ahmed Mohamed Elsoudany Elrayes   </span><span class="col-md-3">#69643 </span><br>
<span class="col-md-9">Juan Gonzalez Lara </span><span class="col-md-3">#69652 </span><br>
<span class="col-md-9">Ibrahim Baqais  </span><span class="col-md-3">#69578</span><br>
<span class="col-md-9">Emirhan Ozgun  </span><span class="col-md-3">#69579</span><br>
<span class="col-md-9">German A  Rico  Gonzalez  </span><span class="col-md-3">#69566</span><br>
<span class="col-md-9">Abdallah Dalahmeh </span><span class="col-md-3">#69561</span><br>
<span class="col-md-9">Ashif M V </span><span class="col-md-3">#69416</span><br>
<span class="col-md-9">Yassir Abdelbassat Haddi </span><span class="col-md-3">#69443</span><br>
<span class="col-md-9">Cecil Wilson </span><span class="col-md-3">#69366</span><br>
<span class="col-md-9">Filipe  Eduardo Dapolito Faria</span><span class="col-md-3">#68206</span><br>
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
<span class="row green_clr"><strong> CCIE Data Center v3.1</strong> </span>
<span class="col-md-9">Amit Kumar Goyal  </span><span class="col-md-3">#69212</span><br>
<span class="col-md-9">Muhammad Bilal Waheed  </span><span class="col-md-3">#65905</span><br>
<span class="col-md-9">Rahul Bhat </span><span class="col-md-3">#69721</span><br>
<span class="col-md-9">Hassan Rifi   </span><span class="col-md-3">#65530</span><br>
<span class="col-md-9">Raed Musaab  </span><span class="col-md-3">#60498</span><br>
<span class="col-md-9">Charles Assy </span><span class="col-md-3">#69550</span><br>
<span class="col-md-9">Hyunseok Lee </span><span class="col-md-3">#69535</span><br>
<span class="col-md-9">Vishal Hathi </span><span class="col-md-3">#69377</span><br>
<span class="col-md-9">Se Woong Kim </span><span class="col-md-3">#69375</span><br>
<span class="col-md-9">Naresh Murali</span><span class="col-md-3">#57726</span><br>
<span class="col-md-9">Mehboob Elahi </span><span class="col-md-3">#69370</span><br>
<span class="col-md-9">Abdelhamid Mohamed Abouraya</span><span class="col-md-3">#69348</span><br>
<span class="col-md-9">Thohith Shameem </span><span class="col-md-3">#69328</span><br>
<span class="col-md-9">Hossam Khader </span><span class="col-md-3">#27373</span><br>
<span class="col-md-9">Keon Kim </span><span class="col-md-3">#69295</span><br>
<span class="col-md-9">Adrian Harris </span><span class="col-md-3">#69283</span><br>
<span class="col-md-9">Haytham S. Almukhallalati </span><span class="col-md-3">#69282</span><br>
<span class="col-md-9">Hartanto Muljadi </span><span class="col-md-3">#69281</span><br>
<span class="col-md-9">Mohamed Elshahawy </span><span class="col-md-3">#67726</span><br>
<span class="col-md-9">Mustain   </span><span class="col-md-3">#69217</span><br>
<span class="col-md-9">Javier Gustavo Utrilla  Arellano  </span><span class="col-md-3">#69194</span><br>
<span class="col-md-9">Adolfo Mestre </span><span class="col-md-3">#69170</span><br>
<span class="col-md-9">Adolfo Mestre </span><span class="col-md-3">#69170</span><br>
<span class="col-md-9">Gabriel De Almeida Ayres Leite</span><span class="col-md-3">#69066</span><br>
<span class="col-md-9">Justine Njau</span><span class="col-md-3">#65710</span><br>
<span class="col-md-9">Sathish Subramanian </span><span class="col-md-3">#50115</span><br>
<span class="col-md-9">Sharukh Khan </span><span class="col-md-3">#61674</span><br />
<span class="col-md-9">David Lehner </span><span class="col-md-3">#68106</span><br />
<span class="col-md-9">Tawanda Ndafa </span><span class="col-md-3">#68104</span><br />
<span class="col-md-9">Saif Alhmoud </span><span class="col-md-3">#68048</span><br />
<span class="col-md-9">Manish Meshram </span><span class="col-md-3">#68047</span><br />
<span class="col-md-9">Vishal Saroha </span><span class="col-md-3">#67075</span><br />
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
<span class="col-md-9">Ahmed G Abd Elhakim   </span><span class="col-md-3">#69228</span><br>
<span class="col-md-9">Juri Jestin  </span><span class="col-md-3">#65617</span><br>
<span class="col-md-9">Uday Kiran Challa </span><span class="col-md-3">#68248</span><br>
<span class="col-md-9">Biswajit Talukdar</span><span class="col-md-3">#68225</span><br>
<span class="col-md-9">Abdul Rahman Oloruntobi Odunaye</span><span class="col-md-3">#50238</span><br>
<span class="col-md-9">Aaron Greene</span><span class="col-md-3">#56652</span><br>
<span class="col-md-9">Swamy Cheluvanarayana</span><span class="col-md-3">#57234</span><br>
<span class="col-md-9">Mohammed Abdul Quddus</span><span class="col-md-3">#68128</span><br>
<span class="col-md-9">Aaron Reyes Garcia</span><span class="col-md-3">#68111</span><br>
<span class="col-md-9">Marek Sumny</span><span class="col-md-3">#68108</span><br>
<span class="col-md-9">Hatim Abdelmageed</span><span class="col-md-3">#68102</span><br>
<span class="col-md-9">Joshua Plemons</span><span class="col-md-3">#67377</span><br>
<span class="col-md-9">Kresteen Alfalahat </span><span class="col-md-3">#66843</span><br>
<span class="col-md-9">Waseem Ullah </span><span class="col-md-3">#61136</span><br>
<span class="col-md-9">Abdul Haseeb Ali Malik </span><span class="col-md-3">#63470</span><br>
<span class="col-md-9">Utkarsha Asthana </span><span class="col-md-3">#63464</span><br>
<span class="col-md-9">Jeyakumar Sathurappan  </span><span class="col-md-3">#62437</span><br>
<span class="col-md-9">Kuheli Sarkar  </span><span class="col-md-3">#62409</span><br>
<span class="col-md-9">Astha Goyal  </span><span class="col-md-3">#62376</span><br>
<!----- wireless close-------------->
 
<!----- sp open-------------->
<span class="col-md-9">  </span><span class="col-md-3">  </span><br>
<span class="row blue_clr"><strong>CCIE Service Provider v5.1</strong>  </span>
<span class="col-md-9">Tshepiso Macheng  </span><span class="col-md-3">#69685</span><br>
<span class="col-md-9">Dwimas Retnoko  </span><span class="col-md-3">#64377</span><br>
<span class="col-md-9">Leonardo Muniz Danelli </span><span class="col-md-3">#69063</span><br>
<span class="col-md-9">Keith Jordan  </span><span class="col-md-3">#69033</span><br>
<span class="col-md-9">Anton Kupriyanov </span><span class="col-md-3">#69024</span><br>
<span class="col-md-9">Gofentsmang Sekerese </span><span class="col-md-3">#68950</span><br>
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
<span class="row green_clr"><strong>CCIE DevNet v1.0</strong>  </span>
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

</main>




   <section class="trust_sec rev_mob">
       <div class="container">
            
           <div class="row mt-2 align-items-center">
               <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                   <h1 class="create_title">Trusted & Reputed Institute for CCNA, CCNP & CCIE Trainings in Mumbai, India</h1>
                   
                       <p class="create_p">Octa Networks is the preferred and sought after Training Institute for Cisco Certifications in India.
Octa Networks provide latest trending Networking Course such as
<a href="https://octanetworks.com/certification-course/ccna-training-institute/"><strong>CCNA</strong></a>,
<a href="https://octanetworks.com/training-exam/ccnp-enterprise/"><strong>CCNP Enterprise</strong></a>,
<a href="https://octanetworks.com/training-exam/ccnp-security/"><strong>CCNP Security</strong></a>,
<a href="https://octanetworks.com/training-exam/ccnp-collaboration/"><strong>CCNP Collaboration</strong></a>,
<a href="https://octanetworks.com/training-exam/ccnp-data-center/"><strong>CCNP Data Center</strong></a>,
<a href="https://octanetworks.com/training-exam/ccie-enterprise-infrastructure/"><strong>CCIE Enterprise Infrastructure v1</strong></a>,
<a href="https://octanetworks.com/training-exam/ccie-security/"><strong>CCIE Security v6</strong></a>,
<a href="https://octanetworks.com/training-exam/ccie-collaboration/"><strong>CCIE Collaboration v3</strong></a>,
<a href="https://octanetworks.com/training-exam/ccie-data-center/"><strong>CCIE Data Center v3</strong></a>,
<a href="https://octanetworks.com/training-exam/ccie-service-provider/"><strong>CCIE Service Provider v5</strong></a>,
<a href="https://octanetworks.com/training-exam/aws-certified-solutions-architect-professional/"><strong>AWS Solution Architect</strong></a>,
<a href="https://octanetworks.com/certification-course/vmware-network-virtualization/"><strong>VMware NSX</strong></a>,
<a href="https://octanetworks.com/training-exam/mcse-core-infrastructure-and-mcse-productivity-solutions/"><strong>MCSE</strong></a>,
<a href="https://octanetworks.com/training-exam/palo-alto-networks/"><strong>Palo Alto</strong></a> and
<a href="https://octanetworks.com/certification-course/checkpoint/"><strong>Checkpoint</strong></a>.
Currently located at Mumbai and plans to expand to Bangalore, Gurgaon and Pune, Octa Networks has one of the largest
<a href="#" data-toggle="modal" data-target="#myModalt"><strong>CCNA</strong></a>,
<a href="#" data-toggle="modal" data-target="#myModal1"><strong>CCNP</strong></a> and
<a href="#" data-toggle="modal" data-target="#myModal1"><strong>CCIE</strong></a>
training labs in the world. Octa Networks provide both
<strong>onsite and online Networking training</strong> for their
<strong>domestic and international students all over the world</strong>. We have become one of
<strong>the reliable and trust worthy learning center for Cisco Certification Courses</strong> and mastering the networking with
<strong>95% passed out result</strong>. Octa Networks is one of the
<strong>leading, trusted and preferred Corporate Training providers in India
</strong>offering high-quality corporate training for various courses like
<strong>Cisco (CCNA CCNP CCIE), Microsoft, VMware, AWS, Palo Alto, Huawei, Juniper</strong> z
to companies and clients all over the world.<a href="https://octanetworks.com/about-octa-network/"><strong>Read More about octa networks</strong></a>.
</p>
                       
                   
               </div>
               <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                   <div class="im_age">
                   <div class="main">
          <div class="big_circle">
            <div class="ic_block">
              <img src="images/im-circle.png" alt="web design icon" />
            </div>
            <div class="ic_block">
              <!-- <img src="https://www.yudiz.com/codepen/animated-portfolio/game-design-icon.png" alt="game design icon" /> -->
            </div>
            <div class="ic_block">
              <img src="images/im-circle.png" alt="game dev icon" />
            </div>
            <div class="ic_block">
              <!-- <img src="https://www.yudiz.com/codepen/animated-portfolio/ui-ux-icon.png" alt="ui-ux icon" /> -->
            </div>
          </div>
          <div class="cir_cle">
            <div class="ic_block">
              <img src="images/im-circle.png" alt="app icon" />
            </div>
            <div class="ic_block">
              <!-- <img src="https://www.yudiz.com/codepen/animated-portfolio/blockchain-icon.png" alt="blockchain icon" /> -->
            </div>
            <div class="ic_block">
              <!-- <img src="https://www.yudiz.com/codepen/animated-portfolio/arvr-icon.png" alt="ar-vr icon" /> -->
            </div>
            <div class="ic_block">
              <!-- <img src="https://www.yudiz.com/codepen/animated-portfolio/artificial-intelligence-icon.png" alt="artificial intelligence icon" /> -->
            </div>
          </div>
          <div class="center-logo">
            <img src="<?php echo octa_asset('first.webp'); ?>" alt="logo" />
          </div>
        </div>
        </div>
               </div>
           </div>
       </div>
       
   </section>
   <section class="trust_sec trust_second">
       <div class="container">
            
           <div class="row align-items-center">
               <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                   <div class="im_age">
                   <div class="main">
          <div class="big_circle">
            <div class="ic_block">
              <img src="images/im-circle.png" alt="web design icon" />
              <!--<img src="/img/vendor/others.jpg" alt="web design icon" />-->
            </div>
            <div class="ic_block">
              <!-- <img src="https://www.yudiz.com/codepen/animated-portfolio/game-design-icon.png" alt="game design icon" /> -->
            </div>
            <div class="ic_block">
              <img src="images/im-circle.png" alt="game dev icon" />
              <!--<img src="/img/vendor/juniper.png" alt="web design icon" />-->
            </div>
            <div class="ic_block">
              <!-- <img src="https://www.yudiz.com/codepen/animated-portfolio/ui-ux-icon.png" alt="ui-ux icon" /> -->
            </div>
          </div>
          <div class="cir_cle">
            <div class="ic_block">
              <img src="images/im-circle.png" alt="app icon" />
              <!--<img src="/img/vendor/cisco.png" alt="app icon" />-->
            </div>
            <div class="ic_block">
              <!-- <img src="https://www.yudiz.com/codepen/animated-portfolio/blockchain-icon.png" alt="blockchain icon" /> -->
            </div>
            <div class="ic_block">
              <!-- <img src="https://www.yudiz.com/codepen/animated-portfolio/arvr-icon.png" alt="ar-vr icon" /> -->
            </div>
            <div class="ic_block">
              <!-- <img src="https://www.yudiz.com/codepen/animated-portfolio/artificial-intelligence-icon.png" alt="artificial intelligence icon" /> -->
            </div>
          </div>
          <div class="center-logo">
            <img src="<?php echo octa_asset('thirdd.webp'); ?>" alt="logo" />
          </div>
        </div>
        </div>
               </div>
               <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                   <h2 class="create_title">CCIE Training Program at Octa Networks</h2>
                   <p class="create_p">Octa Networks has become most <strong>reliable and preferred institute in the networking training industry</strong>. We have committed in <strong>delivering quality and advance technology</strong> training to our Candidates. Candidates are exposed to <strong>Real Cisco devices</strong> during their hands-on labs which assist them in production environment. Our hard work is recognized and appreciated by reputed institutions in 2018 and 2019 as “<strong>Best Emerging Cisco Training Institute Empowering Youth with IT Skills</strong>” in India. To know more about Octa Networks, Please click here. To Know More about <strong>Our Journey<strong>, Please <a href="https://octanetworks.com/our-journey/"><strong>click here to explore our journey<strong></strong></strong></a><strong><strong>.
</strong></strong></strong></strong></p>
                   <p class="create_p">We make sure our <strong>training programs rigorously follow latest Cisco exam blueprints</strong>. We offer all new revamped <strong>CCIE Enterprise Infrastructure v1, CCIE Security v6, CCIE Collaboration v3, CCIE Data Center v3, CCIE Service Provider v5 </strong>training on physical Cisco devices. Octa Networks is proud to be the <strong>only </strong> <a href="#" data-toggle="modal" data-target="#myModalh2"><strong>training</strong></a> <strong>institute in the world</strong> having fully equipped <strong>CCIE labs as per Cisco equipment checklist</strong>. We also offer placement assistance for our CCIE Zero to Hero program. We make sure <strong>equal importance is given to technology learning and practical hands on using Cisco Real Devices</strong>, thus making us the most preferred and trusted CCIE training institute globally. To know more about Our Awards &amp; Accolades, Please<a href="https://octanetworks.com/octa-networks-awards/"> <strong>click here to view octa networks awards </strong></a></p>
               </div>
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




<section class="faq_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="fa_header">
			    <p class="mr-t0 parastory parafaq">FAQ</p>
         <p class="mr-t0 fasecondpara">Frequently Asked Questions</p> 
				 </div>
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="collapsed">What courses does Octa Networks offer?</a>
                </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse">
                <div class="panel-body">
                    Octa Networks offers training and courses in Cisco, AWS, VMware, Juniper, and Microsoft technologies. Courses range from beginner to advanced levels, including certification preparation.
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="collapsed">Are there online training options available?</a>
                </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
                <div class="panel-body">
                    Yes, Octa Networks provides both online and in-person training options to suit different learning preferences.
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="collapsed">Do you offer job guarantee programs?</a>
                </h4>
            </div>
            <div id="collapse3" class="panel-collapse collapse">
                <div class="panel-body">
                    Yes, we offer "Zero to Hero" job guarantee courses for CCIE Enterprise, CCIE Security, CCIE Data Center, and CCIE Collaboration.
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="collapsed">How can I enroll in a course?</a>
                </h4>
            </div>
            <div id="collapse4" class="panel-collapse collapse">
                <div class="panel-body">
                    You can enroll through our website or by contacting our support team. Various payment options are available for convenience.
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse5" class="collapsed">What support do students receive during their courses?</a>
                </h4>
            </div>
            <div id="collapse5" class="panel-collapse collapse">
                <div class="panel-body">
                    Students have access to experienced instructors, study materials, practice exams, and dedicated support teams to ensure their success.
                </div>
            </div>
        </div>
        
        <!-- Add more panels as needed -->
    </div>

            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 all_view">
                <div class="fa_header">
         <p class="mr-t0 para_2">Request for Trial Class</p> 
				 </div>
                 <div class="trail-form">
                  <div class="form">
                     <form id="form-2" action="<?php echo Yii::app()->createUrl("main/forms/gettouch"); ?>" method="post" role="search" class="contactForm">
					    <div class="form-group form-row">
                           <input type="name" name="name" class="form-control" placeholder="Name" required="required">
                        </div>
                        <div class="form-group form-row">
                           <input type="email" name="myemail" class="form-control" placeholder="Email" required="required" >
                        </div>

                        <div class="form-group form-row">
                            <input type="tel" id="mobile-number" name="phone" class="form-control" placeholder="+91">
                        </div>
                       
                         <div class="form-group mrg_t">
                           <input type="text" name="course" class="form-control" placeholder="Course Name" required="required" >
                        </div>
                        
                        <div class="form-group">
                          <input type="tel" name="whatsapp_no" class="form-control" placeholder="Whatsapp No" required="required" >
                        </div>
                        
                        <div class=" ">
                           <div class="g-recaptcha" data-sitekey="<?=Yii::app()->params['siteKey']?>"></div>
                           <input type="hidden" name="type" value="Request your Trial class" />
													  
                        </div>
												<div class="form-group form-row">
												<input type="checkbox" aria-label="checkbox" class="subscribe_approval" name="subscribe_approval" value="1" unchecked="unchecked">&nbsp;&nbsp;Subscribe to our Newsletter. <br>  <br> 
                        </div>
                        <div class="fo_rmbutton">
                        <div class="form-group form-row button_formexp1 fo_rmbut"> 
                           <button type="submit" title="Submit">Submit <img src="<?php echo octa_asset('arrnew.webp'); ?>" alt="arrow image"></button>
                        </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
        </div>
    </div>
</section>
<section id="blog" class="blg_section">
   <div class="container bg_fig">
       <div class="row">
          <div class="col-md-6">
               <div class="suc_maititle">
                  <h4 class="parastory bl_ti">Blogs</h4>
                  <h4 class="create_title">Discover the tales of triumph from Octa Networks' CCIE certification achievers.</h4>
               </div>
            </div>
            <div class="col-md-6 col-sm-6">
               <div class="ve_all_button d_mobile">
                  <p class="view-all-link"><a style="color:#000;" href="https://blog.octanetworks.com/">VIEW ALL</a></p>
               </div>
            </div>
            </div>
      <div class="row">

				 <?php foreach($blogs as $blog){
                    $thumbnail_id = Yii::app()->db_blog->createCommand()->select('meta_value')->from('wp_postmeta')->where('post_id = :post_id AND meta_key = "_thumbnail_id"', [':post_id' => $blog['ID']])->queryScalar();
				    
                    // Get the image path
                    $thumbnail = Yii::app()->db_blog->createCommand()->select('meta_value')->from('wp_postmeta')->where('post_id = :thumbnail_id AND meta_key = "_wp_attached_file"', [':thumbnail_id' => $thumbnail_id])->queryScalar();
					//$thumbnail = Yii::app()->db_blog->createCommand()->select('meta_value')->from('wp_postmeta')->where('post_id ='.$blog['ID'].' AND meta_key = "_wp_attached_file"')->queryRow();

                    $user_name = Yii::app()->db_blog->createCommand()->select('display_name')->from('wp_users')->where('ID ='.$blog['post_author'])->queryRow();
					 ?>
         <div class="col-md-4 col-sm-4 col-xs-12 sid-border-pad">
            <div class="gc-blog-detail col-md-12 side-bot">
    <div class="wa-color fxd-hgt">
        <div class="bl_img">
            <img src="https://blog.octanetworks.com/wp-content/uploads/<?= $thumbnail; ?>"  alt="<?= CHtml::encode($blog['post_title']); ?>">
        </div>
        <div class="bl-cont">
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
    </div>
    <div class="bl-fot">
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
</div>

            <div class="clearfix"></div>
         </div>
         
				 <?php } ?>
				 <div class="col-md-6 d_desk">
               <div class="ve_all_button">
                  <p class="view-all-link"><a style="color:#000;" href="https://blog.octanetworks.com/">VIEW ALL</a></p>
               </div>
            </div>
      </div>
   </div>
</section>



<!----popular button popup open------->
<div class="popular_buttonpopup">
   <div class="enrl">
      <div class="modal fade" id="enroll_popup" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
               <div class="modal-body">
                  <h4>Contact Us Now</h4>
                  <div class="trail-form">
                     <div class="form">
                        <form action="<?php echo Yii::app()->createUrl("main/forms/courseinquiry"); ?>" method="post" role="form" class="contactForm">
                           <div class="form-group"> 
                              <input type="name" name="name" class="form-control" placeholder="Name" required="required">
                           </div>
                           <div class="form-group">
                              <input type="email" name="myemail" class="form-control" placeholder="Email" required="required" >
                           </div>
                           <div class="form-group">
                              <input type="tel" id="mobile-number1" name="phone" placeholder="+91">
                           </div>
                           <select class="dropdown form-control" id="batche" data-url="/main/exam/getphone/" name="batche" required="required">
                              <option value="NONE">Select Batch</option>
                              <option value="Weekdays (Mon-Fri)">Weekdays (Mon-Fri)</option>
                              <option value="Weekend (Sat-Sun)">Weekend (Sat-Sun)</option>
                           </select>
                           <div class="form-group mrg_t">
                              <input type="text" name="course" class="form-control" placeholder="Course Name" required="required" >
                           </div>
                           
                           <div class="form-group">
                             <input type="tel" name="whatsapp_no" class="form-control" placeholder="Whatsapp No" required="required" >
                           </div>
                           
                           <div class="form-group">
                              <div class="g-recaptcha" data-sitekey="<?=Yii::app()->params['siteKey']?>"></div>
                              <input type="hidden" name="type" value="Inquire for <?php echo $examcode ?? ''; ?>" />
                           </div>
                                       <div class="form-group form-row">
                                                         <input type="checkbox" class="subscribe_approval" name="subscribe_approval" value="1" checked="checked">&nbsp;&nbsp;<span class="subscribe">Subscribe to our Newsletter.</span><br>  
                                                         </div>
                           <div class="form-group enroll_btn">
                              <button type="submit" title="Submit">Enquire Now</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div> 
   </div>
 <!----popular button popup close------->
 <!----newest button popup open------->
<div class="newest_buttonpopup">
   <div class="enrl">
      <div class="modal fade" id="new_popup" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
               <div class="modal-body">
                 <h4>Reach Out for Assistance</h4>
                  <div class="trail-form">
                     <div class="form">
                        <form action="<?php echo Yii::app()->createUrl("main/forms/courseinquiry"); ?>" method="post" role="form" class="contactForm">
                            
                           <div class="form-group"> 
                              <input type="name" name="name" class="form-control" placeholder="Name" required="required">
                           </div>
                           <div class="form-group">
                              <input type="email" name="myemail" class="form-control" placeholder="Email" required="required" >
                           </div>
                           <div class="form-group">
                              <input type="tel" id="mobile-number1" name="phone" placeholder="+91">
                           </div>
                           <select class="dropdown form-control" id="batche" data-url="/main/exam/getphone/" name="batche" required="required">
                              <option value="NONE">Select Batch</option>
                              <option value="Weekdays (Mon-Fri)">Weekdays (Mon-Fri)</option>
                              <option value="Weekend (Sat-Sun)">Weekend (Sat-Sun)</option>
                           </select>
                           <div class="form-group mrg_t">
                              <input type="text" name="course" class="form-control" placeholder="Course Name" required="required" >
                           </div>
                           
                           <div class="form-group">
                             <input type="tel" name="whatsapp_no" class="form-control" placeholder="Whatsapp No" required="required" >
                           </div>
                           
                           <div class="form-group">
                              <div class="g-recaptcha" data-sitekey="<?=Yii::app()->params['siteKey']?>"></div>
                              <input type="hidden" name="type" value="Inquire for <?php echo $examcode ?? ''; ?>" />
                           </div>
                                       <div class="form-group form-row">
                                                         <input type="checkbox" class="subscribe_approval" name="subscribe_approval" value="1" checked="checked">&nbsp;&nbsp;<span class="subscribe">Subscribe to our Newsletter.</span><br>  
                                                         </div>
                           <div class="form-group enroll_btn">
                              <button type="submit" title="Submit">Enquire Now</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div> 
   </div>
 <!----Newest button popup close------->
 <!----CCie button popup open------->
<div class="ccie_buttonpopup">
   <div class="enrl">
      <div class="modal fade" id="ccie_popup" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
               <div class="modal-body">
                  <h4>Ask for a Free Consultation</h4> 
                  <div class="trail-form">
                     <div class="form">
                        <form action="<?php echo Yii::app()->createUrl("main/forms/courseinquiry"); ?>" method="post" role="form" class="contactForm">
                            
                           <div class="form-group"> 
                              <input type="name" name="name" class="form-control" placeholder="Name" required="required">
                           </div>
                           <div class="form-group">
                              <input type="email" name="myemail" class="form-control" placeholder="Email" required="required" >
                           </div>
                           <div class="form-group">
                              <input type="tel" id="mobile-number1" name="phone" placeholder="+91">
                           </div>
                           <select class="dropdown form-control" id="batche" data-url="/main/exam/getphone/" name="batche" required="required">
                              <option value="NONE">Select Batch</option>
                              <option value="Weekdays (Mon-Fri)">Weekdays (Mon-Fri)</option>
                              <option value="Weekend (Sat-Sun)">Weekend (Sat-Sun)</option>
                           </select>
                           <div class="form-group mrg_t">
                              <input type="text" name="course" class="form-control" placeholder="Course Name" required="required" >
                           </div>
                           
                           <div class="form-group">
                             <input type="tel" name="whatsapp_no" class="form-control" placeholder="Whatsapp No" required="required" >
                           </div>
                           
                           <div class="form-group">
                              <div class="g-recaptcha" data-sitekey="<?=Yii::app()->params['siteKey']?>"></div>
                              <input type="hidden" name="type" value="Inquire for <?php echo $examcode ?? ''; ?>" />
                           </div>
                                       <div class="form-group form-row">
                                                         <input type="checkbox" class="subscribe_approval" name="subscribe_approval" value="1" checked="checked">&nbsp;&nbsp;<span class="subscribe">Subscribe to our Newsletter.</span><br>  
                                                         </div>
                           <div class="form-group enroll_btn">
                              <button type="submit" title="Submit">Enquire Now</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div> 
   </div>
 <!----CCIE button popup close------->
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
   
   
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
 <script>
 $(document).ready(function(){
  $(".testi_monials-carousel").owlCarousel({
    
    loop: false, // Loop through items
    autoplay: true, // Enable autoplay
    autoplayTimeout: 3000, // Autoplay interval in milliseconds
    autoplayHoverPause: true, // Pause on hover
    nav: false, // Show next and prev buttons
    dots: true, // Show pagination dots
    responsive: {
      0: {
        items: 1 // 0px to 479px displays 1 item
      },
      480: {
        items: 1 // 480px to 767px displays 1 item
      },
      768: {
        items: 2 // 768px to 991px displays 2 items
      },
      992: {
        items: 3 // 992px and above displays 3 items
      }
    }
  });
});
</script>
<script>
    $(document).ready(function(){
        $("#nw-test").owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            dots: true,
            //autoplay: true,              // Enable auto-slide
            // autoplayTimeout: 3000,       // Interval for auto-slide (in milliseconds)
            // autoplayHoverPause: true,    // Pause on hover
            navText: [
                '<img src="" alt="Previous">',
                '<img src="<?php echo octa_asset('arrnew.webp'); ?>" alt="Next">'
            ],
            responsive: {
    0: {         // Mobile (portrait)
        items: 1
    },
    480: {       // Mobile (landscape)
        items: 1.3
    },
    768: {       // Tablet (portrait)
        items: 2
    },
    992: {       // Tablet (landscape)
        items: 2.5
    },
    1200: {      // Laptop
        items: 3
    },
    1600: {      // Desktop
        items: 3
    }
}

        });
    });
</script>

 <script>
        document.addEventListener("DOMContentLoaded", () => {
            const counters = document.querySelectorAll(".count_number");
            
            counters.forEach(counter => {
                const updateCount = () => {
                    const target = +counter.getAttribute('data-target');
                    let current = parseFloat(counter.textContent) || 0;
                    const increment = target / 100; // Adjust for speed

                    if (current < target) {
                        current = Math.ceil(current + increment);
                        counter.textContent = `${current}${counter.textContent.includes('+') ? '+' : '%'}`;
                        setTimeout(updateCount, 30); // Adjust for speed
                    } else {
                        counter.textContent = `${target}${counter.textContent.includes('+') ? '+' : '%'}`;
                    }
                };

                updateCount();
            });
        });
    </script>
