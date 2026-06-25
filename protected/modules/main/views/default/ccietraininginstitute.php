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

<section class="">
	<img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/slider_images/bannerdesk.webp" alt="1 on 1 training" width="100%;">
</section>
<section class="breadcrumb">
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>"><i class="fa fa-home"></i></a></li>
			<li class="active"><?php echo $content->heading ?></li>
		</ol>
	</div>
</section>
<div class="wrapper text-center job-guaranteed-courses">
    <div>
        <h1 class="txt-wht text-uppercase" style="font-size: -webkit-xxx-large;font-weight: 900;">100% Job Guaranteed Courses</h1></div>
    <div>with starting package of <strong>4-8 lacs per annum</strong> after <strong>CCIE Training</strong> from <strong>Octa Networks.</strong> <a href="#salary-graph" class="btn btn-sm btn-default btn-block btn-courses enquire-now-btn" style="width: 180px;
margin: 20px auto 0;font-size: 20px;">Enquire Now</a></div>
</div>


<section class="priviliges-enjoyed job-guarantee-page">
    <h2> Privileges enjoyed by a CCIE</h2>
    <div class="container">
        <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
            <div class="factSectionContent">
                <div class="factSectionLeft"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/privileges/highest-paid-salary-in-it-sector.png" alt="highest paid salary in it sector"></div>
                <div class="Privileges-heading">
                    <h4 style="color:black;">Highest Paid Salary in IT Sector</h4>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
            <div class="factSectionContent">
                <div class="factSectionLeft"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/privileges/international-job-opportunities.png" alt="international job opportunities"></div>
                <div class="Privileges-heading">
                    <h4 style="color:black;">International Job Opportunities</h4>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
            <div class="factSectionContent">
                <div class="factSectionLeft"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/privileges/flexible-working-hours.png" alt="flexible working hours"></div>
                <div class="Privileges-heading">
                    <h4 style="color:black;">Flexible Working Hours</h4>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
            <div class="factSectionContent">
                <div class="factSectionLeft"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/privileges/cisco-partnership-requirement.png" alt="cisco partnership requirement"></div>
                <div class="Privileges-heading">
                    <h4 style="color:black;">Cisco Partnership Requirement</h4>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
            <div class="factSectionContent">
                <div class="factSectionLeft"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/privileges/expert-level-skillset.png" alt="expert level skillset"></div>
                <div class="Privileges-heading">
                    <h4 style="color:black;">Expert Level <br>Skillset</h4>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
            <div class="factSectionContent">
                <div class="factSectionLeft"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/privileges/prestige-and-credibility.png" alt="prestige and credibility"></div>
                <div class="Privileges-heading">
                    <h4 style="color:black;">Prestige &amp; <br>Credibility</h4>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="what-is-ccie" class="job-guarantee-page">
    <h2> What is CCIE?</h2>
    <div class="container">
        <p> Cisco Certified Internetwork Expert [CCIE] is the Most Respected, Reputed, Prestigious and Highest paid IT Certification. CCIE is offered by Cisco systems which is world's Largest Networking Equipment Manufacturer. It’s the pinnacle of Certification offered by Cisco. CCIE is also known as PhD level of IT certification. CCIE is accepted worldwide as the most prestigious networking certification in the industry. To be a CCIE one requires to Pass 3 hours written exam followed by a 8 hours Practical Lab. After completion of CCIE, an Engineer will have ability to design, implement, maintain and troubleshoot complex Enterprise network.</p>
    </div>
</section>


<section id="demand-supply" class="dark-bg job-guarantee-page">
    <div class="container">
        <h2>Reasons to Become CCIE</h2>
        <div class="row align-items-center c-mb-20 c-mb-lg-60">
            <div class="col-12 col-lg-12"><span class="color-main">01</span>
                <div class="step-left-part text-right">
                    <h2 class="step-title"> Salary</h2></div>
                <div class="step-right-part">
                    <p class="step-text">One of the surprising facts about the CCIE Certified professionals is that the CCIE experts are the highest paid IT professionals. It has consistently been at or near the top of the certifications with highest salaries. The demand for CCIE professionals is high, but the supply has fallen short over the years. In fact, CCIE Salary for a fresher is also quite good. Due to low supply, they are paid an excellent salary. So, if you are willing to earn a good package from the start of your career, then CCIE certification can help you to live your dream.</p>
                </div>
            </div>
        </div>
        <div class="row align-items-center c-mb-20 c-mb-lg-60">
            <div class="col-12 col-lg-12"><span class="color-main">02</span>
                <div class="step-left-part text-right">
                    <h2 class="step-title"> International Job Opportunities</h2></div>
                <div class="step-right-part">
                    <p class="step-text">CCIE is accepted globally as the most prestigious networking certification in the industry. Having CCIE certification means that you have proven track record, mastered your skills in networking technology and have in-depth knowledge of your domain of networking. CCIE Certified professionals are an inevitable requirement of every IT company and thus they are in high demand worldwide. Due to shortage of CCIE’s globally, CCIE tag can surely give you a plethora of job opportunities across diverse countries. CCIE is your ticket to abroad.</p>
                </div>
            </div>
        </div>
        <div class="row align-items-center c-mb-20 c-mb-lg-60">
            <div class="col-12 col-lg-12"><span class="color-main">03</span>
                <div class="step-left-part text-right">
                    <h2 class="step-title"> Exponential Growth Opportunities</h2></div>
                <div class="step-right-part">
                    <p class="step-text">Upon competing CCIE Certification, your job opportunities will increase manifolds as numerous top IT companies require highly skilled CCIE Certified professionals for Implementing, Managing, Operating and Troubleshooting their or client networks. As of date IT companies have multiple vacancies for the post of Network Engineer, Network Security Engineer, IT Administrators, Principal Solution Architect, Technical Consultant, etc. but they are unable to get a skilled professional. In addition to this, CCIE is the pinnacle in the field of networking and it takes dedicated years of effort to accomplish the goal of becoming CCIE Certified. Thus post completion of your certification, there is no dearth of job roles that will be waiting at your doorstep.</p>
                </div>
            </div>
        </div>
        <div class="row align-items-center c-mb-20 c-mb-lg-60">
            <div class="col-12 col-lg-12"><span class="color-main">04</span>
                <div class="step-left-part text-right">
                    <h2 class="step-title"> Attract More Recruiters</h2></div>
                <div class="step-right-part">
                    <p class="step-text">With the passage of time, technology is developing at a very fast pace, and next-generation networking devices are introduced in the market. Converged, Innovative and Highly secure networks are the requirement of every IT company in the world, and thus there is a high demand for the CCIE professionals in Networking Industry. Due to shortage of needed applicants and fast developing next-generation technology, the demand of CCIE is rising and attracts more recruiters.</p>
                </div>
            </div>
        </div>
        <div class="row align-items-center c-mb-20 c-mb-lg-60">
            <div class="col-12 col-lg-12"><span class="color-main">05</span>
                <div class="step-left-part text-right">
                    <h2 class="step-title"> With CCIE, Your Career is Secure</h2></div>
                <div class="step-right-part">
                    <p class="step-text">The demand for CCIE certified professionals will not be fulfilled in the years to come, thats why the fear of recession is barely any concern for CCIE professionals. For Companies like Orange, NTT, Dimension Data, World Wide, TCS, Wipro etc implementing complex, innovative and highly secured Network is of immense value as a downtime in the network for a short period can result in substantial losses. Hence, CCIE professionals are of great significance and importance to the IT companies. However, remember that the technology is advancing and you must update it to meet the increasing demands of the IT industry. So, if you are planning your career path and networking is your interest, then step forward to becoming CCIE certified professional for exploring the available possibilities and climbing up the ladder of success.</p>
                </div>
            </div>
        </div>
        <div class="row align-items-center c-mb-20 c-mb-lg-60">
            <div class="col-12 col-lg-12"><span class="color-main">06</span>
                <div class="step-left-part text-right">
                    <h2 class="step-title"> Prestige and Credibility</h2></div>
                <div class="step-right-part">
                    <p class="step-text">Cracking of CCIE examination is considered to be a herculean task. The CCIE is the most difficult IT certification in the world and becoming a CCIE makes you a member of an elite CCIE Club. Having an active CCIE certification automatically comes with a lot of prestige. It not only commands respect and admiration from employers but it also instill confidence and credibility among your customers. Clients start finding you reliable especially if you are working as a consultant.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="Opportunity" class="job-guarantee-page  cont-sec">
    <div class="container">
        <div class="col-md-4 col-sm-4 col-xs-12"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/worlds-needs-over.jpg" alt="worlds needs over"  class="img-responsive">
            <h3 class="text-uppercase mt5" style="text-align:center;"> <strong class="txt-violet">WORLDS NEEDS OVER</strong> <br> 500,000 CCIE Certified Engineers.</h3></div>
        <div class="col-md-4 col-sm-4 col-xs-12"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/can-you-see-the-opportunity.jpg" alt="can you see the opportunity" class="img-responsive"></div>
        <div class="col-md-4 col-sm-4 col-xs-12"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/certified-engineers-worldwide.jpg" alt="certified engineers worldwide"  class="img-responsive">
            <h3 class="text-uppercase mt5" style="text-align:center;"> <strong class="txt-orange">ONLY 61000 </strong> <br>Certified Engineers Worldwide</h3></div>
    </div>
</section>



<section id="Ready-ccie" class="job-guarantee-page  cont-sec">
    <div class="container">
        <h2>Are you Ready to be a CCIE? <br><span>Let’s review Cisco’s certification lineup to see how they can shape your career and where the CCIE fits in.</span></h2>
        <div class=" col-md-12">
            <div style="margin: auto; text-align: center;"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/ready-to-be-a-ccie.png" alt="Ready to be a CCIE" class="img-responsive"></div>
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

<section id="training-program" class="job-guarantee-page" style="background:#f5f5f5;">
    <div class="container">
        <h2>Training Program <br><span>For candidates who wish to make a career in IT networking field, we recommend to choose one of the below mention courses.</span></h2>
        <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-6 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
               <div class="box">
                  <div class="item">
                     <div class="site-logo-inner"> 
                        <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/exam/cisco-ccna-250x250.png" alt="CCNA Certifications " class="item-logo-img"> 
                        <h4>CCNA Certifications</h4>
                        <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/course/ccna-training-institute/" class="btn btn-sm btn-default btn-block btn-courses">Details</a>
                     </div>
                  </div>
               </div>
            </div>
             
            <div class="col-md-4 col-lg-4 col-sm-6 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
               <div class="box">
                  <div class="item">
                     <div class="site-logo-inner"> 
                        <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/exam/cisco-ccnp-250x250.png" alt="MCSA" class="item-logo-img"> 
                        <h4>CCNP Certifications </h4>
                        <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/course/ccnp-training-institute/" class="btn btn-sm btn-default btn-block btn-courses">Details</a>
                     </div>
                  </div>
               </div>
            </div>
             
            <div class="col-md-4 col-lg-4 col-sm-6 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
               <div class="box">
                  <div class="item">
                     <div class="site-logo-inner"> 
                        <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/exam/cisco-ccie-250x250.png" alt="CCIE Certifications" class="item-logo-img"> 
                        <h4> CCIE Certifications                         </h4>
                        <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/course/ccie-training-institute/" class="btn btn-sm btn-default btn-block btn-courses">Details</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
    </div>
</section>


<section id="training-process" class="job-guarantee-page">
    <h2>Training and Placement Process</h2>
    <div class="container">
        <div style=" margin:0 auto;"><img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/training-and-placement-process.jpg" alt="training and placement process" class="img-responsive"></div>
    </div>
</section>

<section id="job-ready" class="job-guarantee-page cont-sec" style="background: #f5f5f5;">
    <div class="container">
        <div class=" col-md-12">
            <h2>How we make Candidates Job Ready <br><span>Along with Cisco CCIE Technical Training, we also provide Personality Development sessions to groom you like a Professional. </span></h2></div>
        <div class=" col-md-12">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                <div class="factSectionContent">
                    <div class="candidate-job-icon"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/make-candidates/resume-writings.png" alt="resume writings"></div>
                    <div class="factSectionRight">
                        <h4>Resume Writing</h4></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                <div class="factSectionContent">
                    <div class="candidate-job-icon"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/make-candidates/presentation-skills.png" alt="presentation skills"></div>
                    <div class="factSectionRight">
                        <h4>Presentation Skill</h4></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                <div class="factSectionContent">
                    <div class="candidate-job-icon"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/make-candidates/documentation-skill.png" alt="documentation skills"></div>
                    <div class="factSectionRight">
                        <h4>Documentation Skill</h4></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                <div class="factSectionContent">
                    <div class="candidate-job-icon"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/make-candidates/visio-skill.png" alt="visio skills"></div>
                    <div class="factSectionRight">
                        <h4>Visio Skill</h4></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                <div class="factSectionContent">
                    <div class="candidate-job-icon"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/make-candidates/mock-interivews.png" alt="mock interivews with manager/hr"></div>
                    <div class="factSectionRight">
                        <h4>Mock Interivews <br>with Manager/HR</h4></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                <div class="factSectionContent">
                    <div class="candidate-job-icon"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/make-candidates/group-discussion.png" alt="group discussion"></div>
                    <div class="factSectionRight">
                        <h4>Group Discussion</h4></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                <div class="factSectionContent">
                    <div class="candidate-job-icon"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/make-candidates/email-etiquette.png" alt="email etiquette"></div>
                    <div class="factSectionRight">
                        <h4>Email Etiquette</h4></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                <div class="factSectionContent">
                    <div class="candidate-job-icon"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/make-candidates/soft-skills-and-personality-development-classes.png" alt="soft skills and personality development classes "></div>
                    <div class="factSectionRight">
                        <h4>Soft Skills &amp; Personality Development Classes</h4></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="overviews" class="job-guarantee-page">
    <div class="container">
        <div class=" col-md-12">
            <?php echo $content->content ?> 
        </div>
    </div>
</section>

<section id="placement-facts" class="factSectionNw job-guarantee-page">
    <h3 class="color-white"> Placement Facts:</h3>
    <div class="container">
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <div class="factSectionContent">
                <div class="factSectionRight">
                    <h4>More than <br>85% Students</h4>

                    <p>Get Placed Without Appearing CCIE Lab</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <div class="factSectionContent">
                <div class="factSectionRight">
                    <h4>More than <br>20% Students</h4>
                    <p>Get offer Letter in their First Interview</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <div class="factSectionContent">
                <div class="factSectionRight">
                    <h4>More than <br>30% Students</h4>
                    <p>Working Internationally Majorly in USA, Australia, UAE, Qatar</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <div class="factSectionContent">
                <div class="factSectionRight">
                    <h4>More than <br>80% Students</h4>
                    <p>Who did CCIE 5 Years back are Working @ Over 20 Lacs Package in India</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="placement-stories" class="job-guarantee-page" style="background: #f5f5f5;">

<div class="container">

<h2>Recent Placements</h2>

<div class="col-md-7 col-sm-12 col-xs-12">

<ul class="recent-member">

<?php $rcounter = 0; foreach($stories as $storie){ $rcounter++;
					if (($rcounter % 2)!=0 ){ $intColor = "success-text-bg1"; }else{ $intColor = "success-text-bg2"; }
					 ?>
<li>
	<img class="img-responsive" src="<?php echo Yii::app()->request->getBaseURL(true);?>/img/stories/<?=$storie->image?>" alt="<?=$storie->name?>">
	<div class="wonderplugin-gridgallery-item-text">
		<div class="wonderplugin-gridgallery-item-title"><?=$storie->name?></div>
		<div class="wonderplugin-gridgallery-item-description"><?=$storie->expert?></div>
	</div>
</li>
                     
            	
                <?php } ?>
</ul>

</div>

<div class="col-md-5 col-sm-12 col-xs-12">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class=""></li>
      <li data-target="#myCarousel" data-slide-to="1" class=""></li>
      <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <?php $dcounter = 0; foreach($demos as $demo){  ?>
      <div class="item <?php if($dcounter == 2){ ?>active<?php } ?>">
        <button type="button" class="btn video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/<?=$demo->youtubeid?>?list=PLWjqv2GOOfzKfOtGj90swA4U8Va4PmqQs&amp;index=15&amp;t=18s&amp;autoplay=1&amp;wmode=transparent&amp;rel=0&amp;enablejsapi=1&amp;origin=https://www.octanetworks.com" data-target="#myModal" style="padding:0px;">
		<img src="https://img.youtube.com/vi/<?=$demo->youtubeid?>/hqdefault.jpg" alt="image <?=$dcounter?>" style="width:100%;">
        </button>
      </div>
	  <?php $dcounter++;} ?>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
    
    
    </div>


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

    </section>
    
    
    
    <section id="salary-graph" class="job-guarantee-page cont-sec">
    <div class="container">
        <div class=" col-md-8">
            <h2> Salary Graph <br><span> Average Salary Package Growth Chart Y-O-Y</span></h2> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/salary-graph12.jpg" alt="jb-feature"class="img-responsive"></div>
            <h2> Enquire Now</h2>
            <div class="col-lg-4" id="contact">
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