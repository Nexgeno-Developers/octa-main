
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
    h2.step-title
    {
    padding: 0;
    padding-bottom: 0 !important;
    padding-top: 9px;
    margin-bottom: -10px;
}

    @media(max-width:767px)
    {
        .job-g-course .g-recaptcha {
    transform: scale(0.77);
    -webkit-transform: scale(0.96);
    transform-origin: 0 0;
    -webkit-transform-origin: 0 0;
    margin-bottom: 22px;
}
    }
    
    @media(max-width:1024px) and (min-width:768px)
    {
        #placement-stories button.btn.video-btn
        {
            width:100%;
            margin-top:20px;
        }
    }
    
    .guarantee_btn {
    font-size: 20px;
    padding: 7px 30px;
    border-radius: 50px;
    color: #fff;
    background: #45a3f7;
    text-decoration: none;  
    cursor: pointer;
    border: none;
    width: 200px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 19px;
}


.white_txte {
    color: #fff;
}

.white_txte::before {
    background: #fff;
}

.white_txte::after {
    background: #fff;
}

section.priviliges-enjoyed.job-guarantee-page .col-lg-2 {
    max-width: inherit;
}

</style>


<div class="job-g-course">

<section class="">
	<img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/placement_banner.png" alt="1 on 1 training" width="100%;">
</section>


<section class="breadcrumb">
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>"><i class="fa fa-home"></i></a></li>
		  	<li class="active"><?php echo $content->heading ?></li>
		</ol>
	</div>
</section>

<div class="wrapper text-center job-guaranteed-courses pd_tp25">
    <div>
        <h1 class="txt-wht guarantee_font">100% Job Guaranteed Courses</h1></div>
    <div><p class="text-center" style="padding:0px;">with starting package of <strong>4-8 lacs per annum</strong> after <strong>CCIE Training</strong> from <strong>Octa Networks.</strong> </p>
    <a href="#salary-graph" class="btn btn-sm btn-default btn-block btn-courses guarantee_btn enquire-now-btn">Enquire Now</a></div>
</div>


<section class="priviliges-enjoyed job-guarantee-page ">
<div class="text-center"> <h4 class="about-head">Privileges enjoyed by a CCIE</h4></div>
    <div class="container">
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
            <div class="factSectionContent">
                <div class="factSectionLeft"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/privileges/highest-paid-salary-in-it-sector.png" alt="highest paid salary in it sector"></div>
                <div class="Privileges-heading">
                    <h4 style="color:black;">Highest Paid Salary in IT Sector</h4>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
            <div class="factSectionContent">
                <div class="factSectionLeft"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/privileges/international-job-opportunities.png" alt="international job opportunities"></div>
                <div class="Privileges-heading">
                    <h4 style="color:black;">International Job Opportunities</h4>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
            <div class="factSectionContent">
                <div class="factSectionLeft"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/privileges/flexible-working-hours.png" alt="flexible working hours"></div>
                <div class="Privileges-heading">
                    <h4 style="color:black;">Flexible Working Hours</h4>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
            <div class="factSectionContent">
                <div class="factSectionLeft"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/privileges/cisco-partnership-requirement.png" alt="cisco partnership requirement"></div>
                <div class="Privileges-heading">
                    <h4 style="color:black;">Cisco Partnership Requirement</h4>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
            <div class="factSectionContent">
                <div class="factSectionLeft"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/privileges/expert-level-skillset.png" alt="expert level skillset"></div>
                <div class="Privileges-heading">
                    <h4 style="color:black;">Expert Level <br>Skillset</h4>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
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
    <div class="text-center"> <h4 class="about-head about_head_pdb0"> What is CCIE?</h4></div>
    <div class="container">
        <p> Cisco Certified Internetwork Expert [CCIE] is the Most Respected, Reputed, Prestigious and Highest paid IT Certification. CCIE is offered by Cisco systems which is world's Largest Networking Equipment Manufacturer. It’s the pinnacle of Certification offered by Cisco. CCIE is also known as PhD level of IT certification. CCIE is accepted worldwide as the most prestigious networking certification in the industry. To be a CCIE one requires to Pass 3 hours written exam followed by a 8 hours Practical Lab. After completion of CCIE, an Engineer will have ability to design, implement, maintain and troubleshoot complex Enterprise network.</p>
    </div>
</section>


<section id="demand-supply" class="dark-bg job-guarantee-page">
    <div class="container">
         <div class="text-center"> <h4 class="about-head white_txte"> Reasons to Become CCIE</h4></div>
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



<section id="Ready-ccie" class="job-guarantee-page blue_backcolor cont-sec">
    <div class="container">
        <div class="text-center"> <h4 class="about-head about_head_pdb0"> Are you Ready to be a CCIE?</h4></div>
        <p class="text-center">Let’s review Cisco’s certification lineup to see how they can shape your career and where the CCIE fits in.</p>
        <div class=" col-md-12">
            <div style="margin: auto; text-align: center;"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/ready-to-be-a-ccie.png" alt="Ready to be a CCIE" class="img-responsive"></div>
        </div>
    </div>
</section>


<section id="eligibility" class="job-guarantee-page">
    <div class="container">
        <div class="text-center"> <h4 class="about-head about_head_pdb0"> Target Audience</h4></div>
        <div class=" col-md-12">
            <p class="text-center m15">All Undergraduates/Graduates from <strong>BCA, BE, BSC, BCOM, BA Background or Diploma Holders</strong> who are interested in Networking Domain are <strong>eligible for this training</strong>. Admission to this training program is given only after face to face discussion with our Training counselors.</p>
        </div>
    </div>
</section>

<section id="training-program" class="job-guarantee-page job_guarantee_courses_traning_sec" style="background:#f5f5f5;">
    <div class="container">
            <div class="text-center"> <h4 class="about-head about_head_pdb0"> Training Program</h4></div>
            <p class="text-center">For candidates who wish to make a career in IT networking field, we recommend to choose one of the below mention courses.</p>
       <div class="row">
		 
          
         
          <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
            <div class="box">
              <div class="item">
                <div class="site-logo-inner">
                <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/training-exam/ccie-enterprise-infrastructure/"><img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/exam/enterprise-infrastructure111.png" alt="CCIE ENTERPRISE" class="item-logo-img"></a>
                 <h4><a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/training-exam/ccie-enterprise-infrastructure/">CCIE Enterprise Infrastructure</a></h4>
                <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/training-exam/ccie-enterprise-infrastructure/" class="btn btn-sm btn-default btn-block btn-courses">Details</a>
                </div>
                </div>
            </div>
          </div>
         
          <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
            <div class="box">
              <div class="item">
                <div class="site-logo-inner">
                <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/training-exam/ccie-security/"><img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/exam/ccie-security.png" alt="CCIE SECURITY" class="item-logo-img"></a>
            <h4><a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/training-exam/ccie-security/">CCIE Security</a></h4>
                <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/training-exam/ccie-security/" class="btn btn-sm btn-default btn-block btn-courses">Details</a>
                </div>
                </div>
            </div>
          </div>  
         
          <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
            <div class="box">
              <div class="item">
                <div class="site-logo-inner">
                <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/training-exam/ccie-collaboration/"><img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/exam/ccie-collaboration.png" alt="CCIE COLLABORATION" class="item-logo-img"></a>
            <h4><a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/training-exam/ccie-collaboration/">CCIE Collaboration</a></h4>
                <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/training-exam/ccie-collaboration/" class="btn btn-sm btn-default btn-block btn-courses">Details</a>
                </div>
                </div>
            </div>
          </div>
          <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
            <div class="box">
              <div class="item">
                <div class="site-logo-inner">
                <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/training-exam/ccie-data-center/"><img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/exam/ccie-data-center.png" alt="CCIE DATA CENTER" class="item-logo-img"></a>
            <h4><a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/training-exam/ccie-data-center/">CCIE Data Center</a></h4>
                <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/training-exam/ccie-data-center/" class="btn btn-sm btn-default btn-block btn-courses">Details</a>
                </div>
                </div>
            </div>
          </div>
        </div>
    </div>
</section>


<section id="training-process" class="job-guarantee-page">
     <div class="text-center"> <h4 class="about-head ">Training and Placement Process</h4></div>
    <div class="container">
        <div style=" margin:0 auto;"><img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/training-and-placement-process.jpg" alt="training and placement process" class="img-responsive"></div>
    </div>
</section>

<section id="job-ready" class="job-guarantee-page cont-sec" style="background: #f5f5f5;">
    <div class="container">
        <div class=" col-md-12">
            <div class="text-center"> <h4 class="about-head about_head_pdb0">How we make Candidates Job Ready</h4></div>
        <p class="text-center">Along with Cisco CCIE Technical Training, we also provide Personality Development sessions to groom you like a Professional. </p>
        </div>
        <div class=" col-md-12">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
                <div class="factSectionContent">
                    <div class="candidate-job-icon"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/icon_eight.png" alt="resume writings"></div>
                    <div class="factSectionRight">
                        <h4>Resume Writing</h4></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
                <div class="factSectionContent">
                    <div class="candidate-job-icon"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/icon_seven.jpg" alt="presentation skills"></div>
                    <div class="factSectionRight">
                        <h4>Presentation Skill</h4></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
                <div class="factSectionContent">
                    <div class="candidate-job-icon"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/icon_six.png" alt="documentation skills"></div>
                    <div class="factSectionRight">
                        <h4>Documentation Skill</h4></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
                <div class="factSectionContent">
                    <div class="candidate-job-icon"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/icon_five.png" alt="visio skills"></div>
                    <div class="factSectionRight">
                        <h4>Visio Skill</h4></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
                <div class="factSectionContent">
                    <div class="candidate-job-icon"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/icon_four.png" alt="mock interivews with manager/hr"></div>
                    <div class="factSectionRight">
                        <h4>Mock Interivews <br>with Manager/HR</h4></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
                <div class="factSectionContent">
                    <div class="candidate-job-icon"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/icon_three.jpg" alt="group discussion"></div>
                    <div class="factSectionRight">
                        <h4>Group Discussion</h4></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
                <div class="factSectionContent">
                    <div class="candidate-job-icon"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/icon_two.jpg" alt="email etiquette"></div>
                    <div class="factSectionRight">
                        <h4>Email Etiquette</h4></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
                <div class="factSectionContent">
                    <div class="candidate-job-icon"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/icon_one.png" alt="soft skills and personality development classes "></div>
                    <div class="factSectionRight">
                        <h4>Soft Skills &amp; Personality Development Classes</h4></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="overviews" class="job-guarantee-page">
    <div class="container">
        <div class="">
            <?php echo $content->content ?> 
        </div>
    </div>
</section>

<section id="placement-facts" class="factSectionNw job-guarantee-page">
    <div class="text-center"> <h4 class="about-head white_txte">Placement Facts:</h4></div>
    <div class="container">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
            <div class="factSectionContent">
                <div class="factSectionRight">
                    <h4>More than <br>85% Students</h4>

                    <p>Get Placed Without Appearing CCIE Lab</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
            <div class="factSectionContent">
                <div class="factSectionRight">
                    <h4>More than <br>20% Students</h4>
                    <p>Get offer Letter in their First Interview</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
            <div class="factSectionContent">
                <div class="factSectionRight">
                    <h4>More than <br>30% Students</h4>
                    <p>Working Internationally Majorly in USA, Australia, UAE, Qatar</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
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

<div class="text-center"> <h4 class="about-head">Recent Placements</h4></div>
<div class="col-md-7 col-xs-12">

<div class="col-md-3 col-sm-3 col-xs-6 pd0">
<div class="our-team">
<img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/stories/sahil_dess.jpg" alt="">
<div class="team-prof">
<h3>Sahil Darvesh

</h3>
<span>Intuit - US

</span>
</div>
</div>
</div>
<div class="col-md-3 col-sm-3 col-xs-6 pd0">
<div class="our-team">
<img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/stories/owais_plcmtn.jpg" alt="">
<div class="team-prof">
<h3>Owais Ansari

</h3>
<span>NSE - India

</span>
</div>
</div>
</div>
<div class="col-md-3 col-sm-3 col-xs-6 pd0">
<div class="our-team">
<img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/stories/farisha_begimg.jpg" alt="">
<div class="team-prof">
<h3>Faris Baig

</h3>
<span>Cisco - India

</span>
</div>
</div>
</div>

<div class="col-md-3 col-sm-3 col-xs-6 pd0">
<div class="our-team">
<img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/stories/aditya_guptaa.jpg" alt="">
<div class="team-prof">
<h3>Aditya Gupta

</h3>
<span>Capgemini - France

</span>

</div>
</div>
</div>
<div class="col-md-3 col-sm-3 col-xs-6 pd0">
<div class="our-team">
<img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/stories/Vaibhav-Kaiser_224.jpg" alt="">
<div class="team-prof">
<h3>Vaibhav Kaiser

</h3>
<span>NSE - India

</span>
</div>
</div>
</div>
<div class="col-md-3 col-sm-3 col-xs-6 pd0">
<div class="our-team">
<img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/stories/Sahil-Darvesh_232.jpg" alt="">
<div class="team-prof">
<h3>Vikas Tawde

</h3>
<span>Accenture - India

</span>
</div>
</div>
</div>
<div class="col-md-3 col-sm-3 col-xs-6 pd0">
<div class="our-team">
<img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/stories/Muaawiyah-Agwan_225.jpg" alt="">
<div class="team-prof">
<h3>Muaawiyah Agwan

</h3>
<span>Orange - France

</span>
</div>
</div>
</div>
<div class="col-md-3 col-sm-3 col-xs-6 pd0">
<div class="our-team">
<img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/stories/Suryakant_227.jpg" alt="">
<div class="team-prof">
<h3>Suryakant

</h3>
<span>Cisco

</span>
</div>
</div>
</div>
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
    
    
    <section class="succes_section blue_gradian">
	<div class="container">
		<h4 class="p-0 section_pd_heading pd_b10" style="color:#fff;">Reasons why Octa Networks is Market Leader for CCIE Trainings</h4>
		<div class="row">
			<div class="col-md-3 col-sm-4 col-xs-6 hvr-bounce-in text-center">
				<div class="ccie_results"> <i class="fa fa-graduation-cap"></i>
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
    
    
    <section id="salary-graph" class="job-guarantee-page cont-sec">
    <div class="container">
        <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
         <div class="text-center"> <h4 class="about-head">Salary Graph</h4></div>
        <p> Average Salary Package Growth Chart Y-O-Y</p> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/salary-graph12.jpg" alt="jb-feature"class="img-responsive"></div>
         
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 feedback-form partner_form" id="contact">
			   <h2> Enquire Now</h2>
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
                  <div class="">
                    <input type="text" name="name" class="form-control" placeholder="Your Name*" required="required">
                    <div class="validation"></div>
                  </div>
                </div>
                
               
                <div class="form-row">
                  <div class="">
                    <input type="email" name="emaill" class="form-control" placeholder="E-mail*" required="required">
                    <div class="validation"></div>
                  </div>
                  <div class="">
                    <input type="qualification" class="form-control" name="subject" id="qualification" placeholder="Qualification">
                    <div class="validation"></div>
                  </div>
                </div>
              
                <div class="form-row">
                  <div class="">
                    <input type="tel" id="mobile-number1" placeholder="+91">
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
    </div>
</section>

<!--<section id="reason-join" class="factSectionNw job-guarantee-page">
    <h3 class="color-white"> Reasons to Join Octa Networks</h3>
    
    <div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-2 col-xs-6">
            <div class="factSectionContent">
                <div class="factSectionLeft"> <i class="fa fa-server" aria-hidden="true"></i></div>
                <div class="factSectionRight">
                    <h4>Worlds Largest <br>Cisco Labs</h4></div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-2 col-xs-6">
            <div class="factSectionContent">
                <div class="factSectionLeft"> <i class="fa fa-clock-o" aria-hidden="true"></i></div>
                <div class="factSectionRight">
                    <h4>24x7 <br>Lab Facility</h4></div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-2 col-xs-6">
            <div class="factSectionContent">
                <div class="factSectionLeft"> <i class="fa fa-users" aria-hidden="true"></i></div>
                <div class="factSectionRight">
                    <h4>Biggest Team <br>of CCIE Certified Trainers</h4></div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-2 col-xs-6">
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
        <div class="col-lg-3 col-md-3 col-sm-2 col-xs-6">
            <div class="factSectionContent">
                <div class="factSectionLeft"> <i class="fa fa-book" aria-hidden="true"></i></div>
                <div class="factSectionRight">
                    <h4>Free Practical <br>Workbooks</h4></div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-2 col-xs-6">
            <div class="factSectionContent">
                <div class="factSectionLeft"> <i class="fa fa-question-circle" aria-hidden="true"></i></div>
                <div class="factSectionRight">
                    <h4>Free Interview <br>Questions Workbook</h4></div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-2 col-xs-6">
            <div class="factSectionContent">
                <div class="factSectionLeft"> <i class="fa fa-search" aria-hidden="true"></i></div>
                <div class="factSectionRight">
                    <h4>Dedicated <br>Placement Cell</h4></div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-2 col-xs-6">
            <div class="factSectionContent">
                <div class="factSectionLeft"> <i class="fa fa-server" aria-hidden="true"></i></div>
                <div class="factSectionRight">
                    <h4>100% Practicals <br>on Real Devices</h4></div>
            </div>
        </div>
         </div>
    </div>
</section>--->
</div>