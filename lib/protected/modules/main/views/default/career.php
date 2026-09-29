<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script language="javascript">
$(function () {	
    $("#rcountry").on("change",function(){
       $id=$("#rcountry").val();
       $url=$("#rcountry").data("url");
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
                        $("#rphone").val($html);
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


<?php
$mType = Yii::app()->request->getParam("type");
if($mType == 1){ $alertClass = "alert-success";}else{$alertClass = "alert-danger";}
 ?>

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
<div class="career_main_page">

			<!--<div class="col-sm-12 col-xs-12">
			<div class="career_form_section">
			<?php if(Yii::app()->user->hasState('fmessage')){ ?>
			<div class="text-center alert <?=$alertClass?>"><span style=""><?php echo Yii::app()->user->getState("fmessage"); ?></span></div>
			<?php } ?>
			<?php Yii::app()->user->setState("fmessage", null); ?>


            	<form role="form" method="post" action="<?php echo Yii::app()->createUrl("main/forms/career"); ?>" name="contact-us"  enctype="multipart/form-data">
					  <div class="form-group col-sm-6">
                     	 <label for="InputEmail1">Your Name <span>*</span></label>
						<input type="text" name="name" class="form-control" id="exampleInputEmail1" required="required" placeholder="Your Name" />
					  </div>
					  <div class="form-group col-sm-6">
					    <label for="InputEmail1">Email address <span>*</span></label>
						<input type="email" name="myemail" class="form-control" id="exampleInputEmail1" required="required" placeholder="Email address">
					  </div>
					  <div class="form-group col-sm-6">
					    <label for="InputName1">Select Country <span>*</span></label>
                            <input type="tel" id="mobile-number1" class="form-control" placeholder="+91">
					  </div>
                      <div class="form-group col-sm-6">
					    <label for="InputEmail1">Qualification <span>*</span></label>
						<input type="text" name="qualification" class="form-control" id="exampleInputEmail1" placeholder="Qualification">
					  </div>
                      <div class="form-group col-sm-6">
					    <label for="InputName1">Select Experience <span>*</span></label>
						<select name="experience" class="form-control">
                        	<option value="">Select Experience</option>
                        	<option value="00 - 06 Months">00 - 06 Months</option>
                            <option value="06 - 12 Months">06 - 12 Months</option>
                            <option value="12 - 18 Months">12 - 18 Months</option>
                            <option value="18 - 24 Months">18 - 24 Months</option>
                            <option value="02 - 04 Years">02 - 04 Years</option>
                            <option value="04 - 07 Years">04 - 07 Years</option>
                            <option value="07 - 10 Years">07 - 10 Years</option>
                            <option value="10 - 15 Years">10 - 15 Years</option>
                            <option value="Above 15 Years">Above 15 Years</option>
                        </select>
					  </div>
					  <div class="form-group col-sm-6">
					    <label for="InputEmail1">Submit Your CV:</label>
                           <input type="file" name="photo" class="form-control" required="required">
					  </div>
					 
					  <div class="form-group col-sm-12">
					  	<label for="message1">Comment </label>
						<textarea class="form-control" name="message" id="comment" rows="3" placeholder="Message"></textarea>
					  </div>

					<div class="form-group col-sm-4 text-center">
						<div class="g-recaptcha" data-sitekey="<?=Yii::app()->params['siteKey']?>" style="display: inline-block;"></div>
					</div>
                    <div class="form-group col-sm-12 text-center">
					  <input type="hidden" name="type" value="Career" />
					  <button type="submit" class="btn btn-primary">Apply Now</button>
					</div>
					</form>
					</div>
            </div>-->
            
            

	</div>
	
	<div class="career_conten padd_45 carrer_bgimg">
                <div class="container">
  <div class="row">
    <div class="col-md-12">
     <h3 class="career_text1 text-center"> Be innovative. You must learn. With us, you can grow</h3>
     <p class="text-center">We are on a mission to revolutionize the way IT Training is delivered, We intend to ensure that career dreams of <br>students and professionals across the world turn into reality. </p>
    </div>
    
  </div>
  
  <hr>
  <div class="row padd_30">
			<div class="col-sm-6">
					<div class="growth_box">
						
						<img src="/images/growth_img.jpg">
					</div>
				</div>
				
					<div class="col-sm-6">
					<div class="growth_box">
						<h4 class="cul_bkhed">Growth</h4>
						<p>Be smart, work hard, and be awesome. Get rewarded with industry-best numbers when you put the paddle on achievements at Octa Networks.</p>
					</div>
				</div>
			</div>
			
			<div class="row padd_30">	
					<div class="col-sm-6">
					<div class="growth_box">
						<h4 class="cul_bkhed">Culture</h4>
						<p>What we do is what we love, and we celebrate every moment of it. Our work is a reflection of our commitments through our diverse workforce, disruptive thinking and creativity.</p>
					
					</div>
				</div>
				<div class="col-sm-6">
					<div class="growth_box">
						<img src="/images/culture.jpg">
					</div>
				</div>
		</div>
</div>
            </div>
            
     
<section class="whyocta_caeer padd_45">
	<div class="text-center padd_btm10">
		<h4 class="about-head">Why to work at Octa Networks</h4></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
              <div class="car_ylis">
					<ul>
						<li>
							<div class="ycarnbicon"><img src="/images/skills_new.png"></div>
							<div class="ynbcar_hd">Reinvent your Skills<p>As they say love what you do, at Octa Networks you start loving what you do. Get to reinvent your skills, explore more in you.</p></div>
						</li>
						<li>
							<div class="ycarnbicon"><img src="/images/growth_new.png"></div>
							<div class="ynbcar_hd">You Get to Lead<p>At Octa Networks you will not always be a follower, we love when our employees lead us to the new heights. We believe in your success.</p></div>
						</li>
						<li>
							<div class="ycarnbicon"><img src="/images/globalization_new.png"></div>
							<div class="ynbcar_hd">You're Shaping Future<p>Your every bit helps students &amp; professionals out there fighting for their career dreams. Help millions and change the future of nation.</p></div>
						</li>
						<li>
							<div class="ycarnbicon"><img src="/images/mediator_new.png"></div>
							<div class="ynbcar_hd">Outings, Party, Fun<p>We love to celebrate every day.  Fun Fridays, Parties and Outings are regular at Octa Networks. Fun never ends here. </p></div>
						</li>
					
					</ul>
				</div>
				</div>
				</div>
				</div>
				</div>
				</section>


<section class="career_faq padd_45 carrer_bgimg">
	<div class="text-center">
		<h4 class="about-head pdd_0">Career Opportunities at Octa Networks</h4>
		<p class="career_prg">We are looking for self-motivated individuals who are eager to learn, assist to the growth
			<br> of the company and excel to work for the wide range of services that we offer.</p>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						<div class="panel panel-default">
							<div class="panel-heading" id="headingOne" role="tab">
								<div class="row">
									<div class="col-md-10">
										<h4 class="panel-title">
                                   <h4 class="carrer_hed">Marketing Executive:</h4>
										<p>Octa Networks is looking for <strong>Marketing Executive.</strong></p>
										<p class="pd_0">As a marketing executive, you'll contribute to and develop integrated marketing campaigns to promote service or idea. This a varied role includes:</p>
										</h4>
									</div>
									<div class="col-md-2"> <a class="collapsed twm-bg-sky" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                        View More</a> </div>
								</div>
							</div>
							<div class="panel-collapse collapse" id="collapseOne" role="tabpanel" aria-labelledby="headingOne">
								<div class="panel-body pxlr-faq-body">
									
									<ul>
										<li>Planning.</li>
										<li>Advertising.</li>
										<li>Public Relations.</li>
										<li>Research.</li>
										<li>Excellent Communication Skills. </li>
										<li>Be responsible for our social digital assets including Facebook, Instagram, LinkedIn, Twitter, etc. (Making sure we are up to date on all aspects of these channels, updating our Bio monthly, cover pages, etc.).</li>
										<li>Work alongside the team to coordinate and create relevant social media content and campaigns across categories. (Information Technology).</li>
										<li>Own the visual language of the brand on social media.</li>
										<li>Share exciting ideas for regular social media posts, videos, and other content formats on a regular basis.</li>
									</ul>
									<p class="padd_10"><strong>No. of Openings:</strong> 05</p>
									<div class="apply_now"><a data-toggle="modal" data-target="#job_modal">Apply for this position</a></div>
								</div>
							</div>
						</div>
						
						
						<div class="panel panel-default">
							<div class="panel-heading" id="headingTwo" role="tab">
								<div class="row">
									<div class="col-md-10">
										<h4 class="panel-title">
                                   <h4 class="carrer_hed">Sales Executive:</h4>
										<p>Octa Networks is looking for <strong>Sales Executive.</strong></p>
										<p class="pd_0">We are looking for a passionate sales executive to join our sales team. The sales executive's responsibilities include closing leads, making sales calls, and meeting sales targets.</p>
										</h4>
									</div>
									<div class="col-md-2"> <a class="collapsed twm-bg-sky" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        View More</a> </div>
								</div>
							</div>
							<div class="panel-collapse collapse" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo">
								<div class="panel-body pxlr-faq-body">
									<p>To be successful as a sales executive you should be an inspired self-starter and able to drive sales growth. Ultimately, a top-notch sales executive should be able to build rapport with customers and close sales.</p>
									
									<ul>
										<li>Excellent communication skills.</li>
										<li>Follow up the leads forwarded by the marketing team.</li>
										<li>Meet and exceed sales targets (Closing deals).</li>
										<li>Successfully create business from new and existing guests.</li>
										<li>Answer clients queries in a prompt and professional manner.</li>
									</ul>
									<p class="padd_10"><strong>No. of Openings:</strong> 03</p>
								
									<div class="apply_now"><a data-toggle="modal" data-target="#job_modal">Apply for this position</a></div>
								</div>
							</div>
						</div>
						
						
						<div class="panel panel-default">
							<div class="panel-heading" id="headingThree" role="tab">
								<div class="row">
									<div class="col-md-10">
										<h4 class="panel-title">
                                   <h4 class="carrer_hed">HR:</h4>
										<p>Octa Networks is looking for <strong>HR.</strong></p>
										<p class="pd_0">Human resources (HR) are responsible for hiring, developing and looking after employees. </p>
										</h4>
									</div>
									<div class="col-md-2"> <a class="collapsed twm-bg-sky" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        View More</a> </div>
								</div>
							</div>
							<div class="panel-collapse collapse" id="collapseThree" role="tabpanel" aria-labelledby="headingThree">
								<p>A HR (human resources) is responsible to ensure that a workforce is able to perform optimally, ensuring that their sufficient people are recruited, retained, trained and supported to fulfil the organisation’s goals and commitments.</p>
								<div class="panel-body pxlr-faq-body">
								
									<ul>
										<li>Recruiting new staff
											<ol>
												<li>Making sure that staff get paid correctly and on time.</li>
												<li>Approving job descriptions and advertisements.</li>
												<li>Looking after the health, safety and welfare of all employees.</li>
												<li>Sorting out job placements for students in the institute.</li>
												<li>Negotiating salaries, contracts, working conditions and redundancy packages with staff.</li>
												<li>Monitoring staff performance and attendance.</li>
											</ol>
										</li>
										<li>Looking after hiring, job exiting, NDA formalities and performance appraisal.</li>
									</ul>
									<p class="padd_10"><strong>No. of Openings:</strong> 01</p>
									<div class="apply_now"><a data-toggle="modal" data-target="#job_modal">Apply for this position</a></div>
								</div>
							</div>
						</div>
						
						
						<div class="panel panel-default">
							<div class="panel-heading" id="headingFour" role="tab">
								<div class="row">
									<div class="col-md-10">
										<h4 class="panel-title">
                                   <h4 class="carrer_hed">Front Desk Receptionist:</h4>
										<p>Octa Networks is looking for <strong>Front Desk Receptionist.</strong></p>
										<p class="pd_0">We are looking for a receptionist to be responsible for greeting clients and visitors to our office. You will be in charge of giving clients directions to various parts of the office, contacting employees regarding visitors, answering phones and taking messages, and sorting and distributing mail.</p>
										</h4>
									</div>
									<div class="col-md-2"> <a class="collapsed twm-bg-sky" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        View More</a> </div>
								</div>
							</div>
							<div class="panel-collapse collapse" id="collapseFour" role="tabpanel" aria-labelledby="headingFour">
								<p>To be successful in this role, you will need excellent written and verbal communication skills, as well as competency in Microsoft Office applications such as Word and Excel. Prior experience as a receptionist is also helpful.</p>
								<div class="panel-body pxlr-faq-body">
									<p class="padd_20"><strong>Responsibilities:</strong></p>
									<ul>
										<li>Greet clients and visitors with a positive, helpful attitude.</li>
										<li>Assisting clients in finding their way around the office.</li>
										<li>Answering phone calls in a professional manner, and routing calls as necessary.</li>
										<li>Answering, forwarding, and screening phone calls.</li>
										<li>Sorting and distributing mail.</li>
										<li>Assisting walk in students.</li>
										<li>Competency in Microsoft applications including Word, Excel, and Outlook.</li>
										<li>Able to contribute positively as part of a team, helping out with various tasks as required.</li>
									</ul>
									<p class="padd_20"><strong>Requirements:</strong></p>
									<ul>
										<li>Prior experience as a receptionist or in a related field.</li>
										<li>Consistent, presentable and polite.</li>
										<li>Excellent written and verbal communication skills.</li>
									</ul>
									<p class="padd_10"><strong>No. of Openings:</strong> 01</p>
								
									<div class="apply_now"><a data-toggle="modal" data-target="#job_modal">Apply for this position</a></div>
								</div>
							</div>
						</div>
						
						
						<div class="panel panel-default">
							<div class="panel-heading" id="headingFive" role="tab">
								<div class="row">
									<div class="col-md-10">
										<h4 class="panel-title">
                                   <h4 class="carrer_hed">Counsellor:</h4>
										<p>Octa Networks is looking for <strong>Counsellor.</strong></p>
										<p class="pd_0">We are looking for an empathetic career counsellor to aid our clients with interpreting and selecting their preferred career routes. </p>
										</h4>
									</div>
									<div class="col-md-2"> <a class="collapsed twm-bg-sky" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                        View More</a> </div>
								</div>
							</div>
							<div class="panel-collapse collapse" id="collapseFive" role="tabpanel" aria-labelledby="headingFive">
								<p>The career counsellor will be required to uncover clients' prominent and latent strengths, administer and score aptitude measures, and then discuss with clients to deliberate findings obtained. To ensure success as a career counsellor, you should propose career-related options that clients might not have been able to detect without your intervention. </p>
								<div class="panel-body pxlr-faq-body">
									<p class="padd_20"><strong>Responsibilities:</strong></p>
									<ul>
										<li>Inspecting clients' career-related aspirations, concerns, and uncertainties throughout the consultation process.</li>
										<li>Reviewing clients' personal and educational undertakings and how the manifestation of these might inform their prospective job-related choices.</li>
										<li>Guiding clients through the completion of aptitude, personality, and adjacent tests.</li>
										<li>Proposing career-related options that are match with your validated insights.</li>
										<li>Informing clients about potential shortcomings in their skill sets and devising strategies to remedy these.</li>
										<li>Walking clients through the process of compiling and restructuring their resumes.</li>
										<li>Problem-solving and informing clients of potentially helpful career-related opportunities.</li>
									</ul>
									<p class="padd_20"><strong>Requirements:</strong></p>
									<ul>
										<li>Graduate degree in counselling plus an appropriate license is preferred.</li>
										<li>Demonstrable history of displaying excellent clinical judgment.</li>
										<li>Knowledgeable about ever-changing trends across all leading industries.</li>
										<li>Outstanding interpersonal skills.</li>
										<li>Top-notch investigative, assessment, and communication skills.</li>
										<li>Ability to equip all clients to enter their preferred disciplines.</li>
									</ul>
									<p class="padd_10"><strong>No. of Openings:</strong> 01</p>
									<div class="apply_now"><a data-toggle="modal" data-target="#job_modal">Apply for this position</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<!---job apply modal open-->

<div class="modal fade" id="job_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enquire Now</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          
           <form role="form" method="post" action="<?php echo Yii::app()->createUrl("main/forms/career"); ?>" name="contact-us"  enctype="multipart/form-data">
					 
					 <div class="form-group col-sm-12">
						<input type="text" name="Designation" class="form-control" id="designation" required="required" placeholder="Designation" />
					  </div>
					 
					  <div class="form-group col-sm-12">
						<input type="text" name="name" class="form-control" id="exampleInputEmail1" required="required" placeholder="Your Name" />
					  </div>
					  <div class="form-group col-sm-12">
						<input type="email" name="myemail" class="form-control" id="exampleInputEmail1" required="required" placeholder="Email address">
					  </div>
					  <div class="form-group col-sm-12">
                            <input type="tel" name="mobilenumber" class="form-control" placeholder="Phone" required="required">
					  </div>
                     
                     
					  <div class="form-group col-sm-12">
                           <input type="file" name="photo" class="form-control files" required="required">
					  </div>
					 

					<div class="form-group col-sm-4 text-center">
						<div class="g-recaptcha" data-sitekey="<?=Yii::app()->params['siteKey']?>" style="display: inline-block;"></div>
					</div>
                    <div class="form-group col-sm-12 text-center">
					  <input type="hidden" name="type" value="Career" />
					  <button type="submit" class="btn btn-primary">Apply Now</button>
					</div>
					</form>
          
      </div>
    </div>
  </div>
</div>

<!--job apply modal close-->

