<style>
section.faculty p {
color: #333 !important;
}

.left_area {
background: #f1f1f1;
float: left;
width: 50%;
height: auto !important;
padding: 48px 100px !important;
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

.faculty .campus_images .networkconform .career-frm.con_page input.wpcf7-form-control.wpcf7-submit {
border-bottom: 0px !important;
}

.faculty .campus_images .career-frm.con_page p {
padding: 0;
margin: 0 0 17px;
}

.loadmore_button {
width: 200px;
color: #333;
display: block;
text-align: center;
margin: 20px auto;
padding: 10px;
border-radius: 8px;
background: transparent;
transition: .3s;
font-weight: 700;
border: 2px solid #000;
margin-top: 15px !important;
margin-bottom: 0px !important;
}

.fbc_bttn {
border: 2px solid #4267B2;
color: #4267B2;
}

.loadmore_button:hover {
color: #fff;
background: #284c9a;
text-decoration: none;
border: 2px solid #fff;
transform: scale(1);
transition: 0.8s;
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
			<source srcset="<?php echo Yii::app()->request->getBaseURL(true);?>/img/ebackground/<?=$content->photo2?>"> <img class="slide-image" src="<?php echo Yii::app()->request->getBaseURL(true);?>/img/ebackground/<?=$content->photo2?>" alt="">
			<?php } ?>
</picture>
<?php }else{

$imgPath = Yii::app()->request->getBaseUrl(true) . '/img/ebackground/default.jpg';?>
<section class="inner-banner" style="background-image: url(<?=$imgPath?>);">
<div class="container">
<h1><?php echo $content->heading ?></h1> </div>
</section>
<?php    } ?>
<section class="breadcrumb">
<div class="container">
	<ol class="breadcrumb">
		<li><a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>"><i class="fa fa-home"></i></a></li>
		<li class="active">
			<?php echo $content->heading ?>
		</li>
	</ol>
</div>
</section>
<section id="product-info">
<script language="javascript">
$(function() {
	$("#ccountry").on("change", function() {
		$id = $("#ccountry").val();
		$url = $("#ccountry").data("url");
		$.ajax({
			type: "POST",
			url: $url,
			data: {
				id: $id
			},
			dataType: "json",
			traditional: true,
			success: function(response) {
				if(response.status === "ok") {
					if(!$.isEmptyObject(response.cert)) {
						$html = response.cert;
						$("#cphone").val($html);
					}
				}
			},
			error: function(response) {
				debugger;
				alert(response.d);
			}
		});
	});
});
</script>
<style type="text/css">
p {
	line-height: 28px;
	font-weight: 400;
}

.trd_tb tr td {
	padding: 9px 100px 9px 20px;
	border-top: 1px solid #ccc;
	font-size: 15px;
	font-weight: 400;
}

section.faculty .network {
	padding: 89px;
	margin-top: 0%;
}

input.wpcf7-form-control.wpcf7-submit {
	top: -20px;
}

.career-frm.con_page {
	padding: 20px 20px 0px 20px !important;
	background: #259295;
	border-radius: 8px;
	float: left;
}

.section-header h3 {
	color: #283d50;
	text-align: center;
	font-weight: 400;
	/* padding-bottom: 10px; */
	position: relative;
	font-family: OctaSans, Arial, sans-serif !important;
	font-size: 30px;
}

section.faculty p {
	padding: 0;
}

section.faculty img {
	width: 150px !important;
}

ection.faculty p {
	color: #fff !important;
}

#testimonials .testimonial-item p {
	margin: 0 0 15px 0px;
	color: #ffffff !important;
}

#testimonials .testimonial-item h3 {
	margin: 10px 0 5px 0;
	color: #25a4c8 !important;
	font-size: 16px;
	font-weight: 700;
}

section#product-info h1 {
	font-size: 34px;
	text-align: center;
	font-weight: 400;
	padding-left: 0 !important;
	font-size: 34px !important;
	padding: 10px 0px 15px 0px;
}

.rc-anchor-container{
    padding-left
}

.list_one {
	display: none;
}

.noContent {
	display: none;
}

.pdbtm_40
{
   padding-bottom:30px !important;    
}

.capm_lg {
    padding: 5px !important;
    border: 1px solid #aaa;
    margin: 0px 10px 10px 0px;
}
@media(max-width:767px){
   .left_area { width: 100%!important; height: auto!important; padding: 0!important;}
.right_area {width:100%!important; padding: 30px 0!important;
}
section.faculty .network {padding: 93px 15px!important;}
}
@media(min-width:768px) and (max-width:991px){
   .left_area { width: 40%!important; height: 102vh!important; padding: 0!important;}
.right_area {width: 60%!important; padding: 30px 0!important;
}
section.faculty .network {padding: 93px 15px!important;}
}
@media(max-width:1200px) and (min-width:991px){
   .left_area { width: 50%!important; height: 70vh!important; padding: 0!important;}
.right_area {width: 50%!important; padding: 30px 0!important;
}
section.faculty .network {padding: 140px 15px!important;}
}


</style>
<div class="text-center">
	<?php if(!empty($content->photo2)){ ?>
		<h1 class="inner_headings1"><?php echo $content->heading ?></h1>
		<?php } ?>
</div>
<section class="faculty">
	<div class="left_area">
		<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-center network"> <img alt="Networking Experts" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/faculty_icon.png">
			<h4>In-Campus College Training</h4>
			<p>Octa Networks is Pioneer in organizing hands-on training programs for Colleges.</p>
		</div>
	</div>
	<div class="right_area campus_images">
	    <div class="col-md-12 col-sm-12 col-xs-12 campus_images networkconform">
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
				   
                  
                  
                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 rght-frm pddd_12">
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
	</div>
</section>
<section class="Howit text-center">
	<div class="container">
		<h4 class="sechead about-head pdd_btm">Learn from Market Leaders</h4>
		<p class="pdd_tpm">Our training program are tailor-made and well aligned with recent Enterprise Technologies.</p>
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 content-left"><img alt="Experienced Industry Experts" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/training_mode1.png">
			<h4 class="conhead">Certified Trainers</h4>
			<p>Get trained by Certified and Technical experts with 20+ years of Industry experience.</p>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 content-left"><img alt="Experienced Industry Experts" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/handsonlabs1.png">
			<h4 class="conhead">Industry Oriented Practical trainings</h4>
			<p>Rigorous Practical Training is delivered on physical devices along with tools used in Enterprise Networks.</p>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 content-left"><img alt="Experienced Industry Experts" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/certificate1.png">
			<h4 class="conhead how_he">Authorized Training Certificates</h4>
			<p>Every participants are provided with Training Certificate.</p>
		</div>
	</div>
</section>
<section class="trainer_cllg">
	<div class="container">
		<div class="text-center">
			<h2 class="about-head">20+ Colleges Trained in India</h2> </div>
		<p></p>
		<div class="trd_tb">
			<table>
				<tbody>
					<tr class="list_one">
						<td>Chetana College, Bandra East</td>
					</tr>
					<tr class="list_one">
						<td>C. H. M. College, Ulhasnagar</td>
					</tr>
					<tr class="list_one">
						<td>D. G. Ruparel College of Arts, Science and Commerce, Matunga </td>
					</tr>
					<tr class="list_one">
						<td>K.J. Somaiya College of Science & Commerce, Vidyavihar</td>
					</tr>
					<tr class="list_one">
						<td>Narsee Monjee College of Commerce and Economics, Vile Parle West</td>
					</tr>
					<tr class="list_one">
						<td>Sathaye College, formerly Parle College, Vile Parle</td>
					</tr>
					<tr class="list_one">
						<td>Shri M.D. Shah Mahila College of Arts and Commerce, Malad West</td>
					</tr>
					<tr class="list_one">
						<td>St. Andrew's College, Bandra</td>
					</tr>
					<tr class="list_one">
						<td>St. Xavier's College, Dhobitalao, Fort</td>
					</tr>
					<tr class="list_one">
						<td>Swami Vivekanand International School and Junior College, Kandivali</td>
					</tr>
					<tr class="list_one">
						<td>Thakur College of Science and Commerce, Thakur Village, Kandivali</td>
					</tr>
					<tr class="list_one">
						<td>M. H. Saboo Siddik College of Engineering - Byculla</td>
					</tr>
					<tr class="list_one">
						<td>Rizvi College of Engineering, Bandra (West)</td>
					</tr>
					<tr class="list_one">
						<td>St. Francis Institute of Technology, Borivali</td>
					</tr>
					<tr class="list_one">
						<td>Siddharth College, Fort</td>
					</tr>
					<tr class="list_one">
						<td>GD Ambedkar College, Parel</td>
					</tr>
					<tr class="list_one">
						<td>Swami Dayanand College, Dadar West</td>
					</tr>
					<tr class="list_one">
						<td>Khar Education Society, Khar West</td>
					</tr>
					<tr class="list_one">
						<td>R. D. National & W. A. Science College, Bandra West</td>
					</tr>
					<tr class="list_one">
						<td>Sathaye College, Vile Parle East</td>
					</tr>
					<tr class="list_one">
						<td>Mithibai College, Vile Parle West</td>
					</tr>
					<tr class="list_one">
						<td>SNDT College, Juhu</td>
					</tr>
					<tr class="list_one">
						<td>Asmita College, Vikhroli East</td>
					</tr>
					<tr class="list_one">
						<td>A. P. Shah Institute of Technology - Thane</td>
					</tr>
					<tr class="list_one">
						<td>Bharati Vidyapeeth College of Engineering, Belapur, Navi Mumbai</td>
					</tr>
					<tr class="list_one">
						<td>Don Bosco Institute of Technology, Kurla (West)</td>
					</tr>
					<tr class="list_one">
						<td>Dwarkadas J. Sanghvi College of Engineering, Vile Parle West</td>
					</tr>
					<tr class="list_one">
						<td>Fr. Conceicao Rodrigues College of Engineering, Bandra</td>
					</tr>
					<tr class="list_one">
						<td>KC College of Engineering, Thane East</td>
					</tr>
					<tr class="list_one">
						<td>Lokmanya Tilak College of Engineering, Kopar Khairane, Navi Mumbai</td>
					</tr>
					<tr class="list_one">
						<td>Padmabhushan Vasantdada Patil Pratishthan's College of Engineering, Sion</td>
					</tr>
					<tr class="list_one">
						<td>Rustomjee Academy for Global Careers, Thane</td>
					</tr>
					<tr class="list_one">
						<td>Shah and Anchor Kutchhi Engineering College, Chembur</td>
					</tr>
					<tr class="list_one">
						<td>Sindhudurg Shikshan Prasarak Mandal's College of Engineering, Kankavli</td>
					</tr>
					<tr class="list_one">
						<td>Thadomal Shahani Engineering College Mumbai, Bandra (W)</td>
					</tr>
					<tr class="list_one">
						<td>Vidyalankar Institute of Technology, Wadala(E),Mumbai</td>
					</tr>
					<tr class="list_one">
						<td>Vidyavardhini College of Engineering and Technology, Vasai Road(W)</td>
					</tr>
					<tr class="list_one">
						<td>Veermata Jijabai Technological Institute, Matunga, Mumbai</td>
					</tr>
					<tr class="list_one">
						<td>Xavier Institute of Engineering Mahim (West)</td>
					</tr>
					<tr class="list_one">
						<td>Watumull Institute of Electronics Engineering and Computer Technology, Ulhasnagar</td>
					</tr>
					<tr class="list_one">
						<td>Sydenham College of Commerce and Economics, Churchgate</td>
					</tr>
					<tr class="list_one">
						<td>VIVA College of Arts, Science and Commerce, Virar</td>
					</tr>
					<tr class="list_one">
						<td>Rajiv Gandhi College of Arts,Commerce & Science Vashi</td>
					</tr>
					<tr class="list_one">
						<td>SIES College of Arts, Science, and Commerce, Sion West</td>
					</tr>
					<tr class="list_one">
						<td>Hinduja College, Charni Road</td>
					</tr>
					<tr class="list_one">
						<td>Royal College of Science, Arts and Commerce, Mira Road</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div style="clear:both"></div> <a href="#" class="loadmore_button fbc_bttn" id="loadMore_two">Load More</a> </div>
	</div>
</section>
<section id="testimonials" class="section-bg">
	<div class="container">
		<header class="bg-sec-title text-center">
			<h3 class="color-white mainheaderWhite cntr pdbtm_40">What students say about us</h3> </header>
		<div class="row justify-content-center">
			<div class="col-lg-8 col-sm-12 col-xs-12">
				<div class="owl-carousel testimonials-carousel">
					<?php foreach($testimonials as $testimonials){ ?>
						<div class="testimonial-item">
							<div class="col-lg-3 col-md-12"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/testimonials/<?=$testimonials->image?>" class="testimonial-img" alt="<?=$testimonials->name?>"> </div>
							<div class="col-lg-9 col-md-12">
								<div class="apct-testimonial-content">
									<?=$testimonials->content?>
								</div>
								<h3 class="apct-testimonial-title-name"><?=$testimonials->name?></h3> </div>
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
								<button type="button" class="btn video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/<?=$demo->youtubeid?>" data-target="#myModal"> <img src="https://img.youtube.com/vi/<?=$demo->youtubeid?>/hqdefault.jpg" alt="image <?=$dcounter?>" style="width:100%;"> </button>
							</div>
							<?php $dcounter++;} ?>
					</div>
					<!-- Left and right controls -->
					<a class="left carousel-control tes-slide-caro" href="#myCarousel1" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> <span class="sr-only">Previous</span> </a>
					<a class="right carousel-control tes-slide-caro" href="#myCarousel1" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> <span class="sr-only">Next</span> </a>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="job-ready" class="about_clients common" style="background: #fff;">
	<div class="container">
		<div class="text-center">
			<h2 class="about-head">
Our Valuable Customers
</h2> </div>
		<div class="col-md-12">
			<div class="col-sm-12 no-padding">
				<div class=" col-xs-5 col-md-2 col-lg-2 no-padding capm_lg"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/clients/jio_16.jpg" class="img-fluid" alt=""> </div>
				<div class=" col-xs-5 col-md-2 col-lg-2 no-padding capm_lg"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/clients/cisco_15.jpg" class="img-fluid" alt=""> </div>
				<div class=" col-xs-5 col-md-2 col-lg-2 no-padding capm_lg"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/clients/idbi-bank_14.jpg" class="img-fluid" alt=""> </div>
				<div class=" col-xs-5 col-md-2 col-lg-2 no-padding capm_lg"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/clients/dhl_13.jpg" class="img-fluid" alt=""> </div>
				<div class=" col-xs-5 col-md-2 col-lg-2 no-padding capm_lg"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/clients/wipro_12.jpg" class="img-fluid" alt=""> </div>
				<div class=" col-xs-5 col-md-2 col-lg-2 no-padding capm_lg"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/clients/qatar-university_11.jpg" class="img-fluid" alt=""> </div>
				<div class=" col-xs-5 col-md-2 col-lg-2 no-padding capm_lg"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/clients/orange_10.jpg" class="img-fluid" alt=""> </div>
				<div class=" col-xs-5 col-md-2 col-lg-2 no-padding capm_lg"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/clients/ooredoo_9.jpg" class="img-fluid" alt=""> </div>
				<div class=" col-xs-5 col-md-2 col-lg-2 no-padding capm_lg"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/clients/mannai_8.jpg" class="img-fluid" alt=""> </div>
				<div class=" col-xs-5 col-md-2 col-lg-2 no-padding capm_lg"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/clients/maersk_7.jpg" class="img-fluid" alt=""> </div>
				<div class=" col-xs-5 col-md-2 col-lg-2 no-padding capm_lg"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/clients/intuit_6.jpg" class="img-fluid" alt=""> </div>
				<div class=" col-xs-5 col-md-2 col-lg-2 no-padding capm_lg"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/clients/hcl_5.jpg" class="img-fluid" alt=""> </div>
				<div class=" col-xs-5 col-md-2 col-lg-2 no-padding capm_lg"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/clients/gbm_4.jpg" class="img-fluid" alt=""> </div>
				<div class=" col-xs-5 col-md-2 col-lg-2 no-padding capm_lg"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/clients/bt_3.jpg" class="img-fluid" alt=""> </div>
				<div class=" col-xs-5 col-md-2 col-lg-2 no-padding capm_lg"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/clients/aricent_2.jpg" class="img-fluid" alt=""> </div>
				<div class=" col-xs-5 col-md-2 col-lg-2 no-padding capm_lg"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/clients/accenture_1.jpg" class="img-fluid" alt=""> </div>
			</div>
		</div>
	</div>
</section>
</div>
</div>
<div style="clear:both;"></div>
</section>

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

<script language="javascript">
$(document).ready(function(){
  $(".list_one").slice(0, 20).show();
  $("#loadMore_two").on("click", function(e){
    e.preventDefault();
    $(".list_one:hidden").slice(0, 10).slideDown();
    if($(".list_one:hidden").length == 0) {
      $("#loadMore_two").text("").addClass("noContent");
    }
  });
})
</script>

<script async type="text/javascript">
         $(document).ready(function() {
         
         var $videoSrc;  
         $('.video-btn').click(function() {
           $videoSrc = $(this).data( "src" );
         }); 
         // when the modal is opened autoplay it  
         $('#myModal').on('shown.bs.modal', function (e) {
           
         // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
         $("#video").attr('src',$videoSrc + "?autoplay=0&amp;modestbranding=1&amp;showinfo=0" ); 
         })
         
         // stop playing the youtube video when I close the modal
         $('#myModal').on('hide.bs.modal', function (e) {
           // a poor man's stop video
           $("#video").attr('src',''); 
         }) 
           
         });
      </script>

