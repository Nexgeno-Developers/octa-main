<style type="text/css">
.flex,
.flex2,
.flex3 {
	display: flex;
	flex-wrap: wrap;
	justify-content: center;
	align-items: center;
}

.content,
.content2,
.content3 {
	display: none;
}

#loadMore,
#loadMore2,
#loadMore3 {
	    width: 200px;
    color: #58585b;
    display: block;
    text-align: center;
    margin: 20px auto;
    padding: 10px;
    border-radius: 8px;
    background: transparent;
    transition: .3s;
    font-weight: 700;
    border: 2px solid #000;
}

#loadMore:hover {
color: #fff;
    background: #284c9a;
    text-decoration: none;
    border: 2px solid #fff;
    transform: scale(1);
    transition: 0.8s;
}

#loadMore2:hover {
color: #fff;
    background: #284c9a;
    text-decoration: none;
    border: 2px solid #fff;
    transform: scale(1);
    transition: 0.8s;
}

#loadMore3:hover {
	color: #fff;
    background: #284c9a;
    text-decoration: none;
    border: 2px solid #fff;
    transform: scale(1);
    transition: 0.8s;
}

.noContent,
.noContent2,
.noContent3 {
	color: #000 !important;
	background-color: transparent !important;
	pointer-events: none;
	background: none !important;
}

.item-logo-img {
	width: 70%;
}

.item .site-logo-inner {
	box-shadow: 0px 34px 90px 0px rgba(0, 0, 0, 0.07000000000000001);
	border-radius: 8px;
	padding: 10px 15px 10px 15px;
	text-align: center;
	margin-bottom: 20px;
	min-height: 290px;
	background: #fff;
}
section#reason-join h4 {
    color: #58585b !important;
    line-height:30px !important;
}
.factSectionContent i.fa {
    color: #58585b;
}
section#reason-join {
    background: #f0f0f0 !important;
}
.infinity:before, .infinity:after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 35px;
    height: 35px;
    border: 6px solid #58585b;
    border-radius: 50px 50px 0 50px;
    transform: rotate(-45deg);
}
.box-none .site-logo-inner {
    min-height: 158px !important;
    margin-bottom: 0 !important;
    padding-bottom: 0 !important;
}

.plc_stories .boxex_bg .compp_img
{
    width:114px !important;
    padding-top: 8px !important;
}
.box-none h4.gr_hed {
    line-height: 20px;
} 
@media(max-width:767px) {
	.item .site-logo-inner {
		min-height: 210px !important;
	}
	section#about1 .box {
		height: 250px !important;
	}
}


.success-text-bg2 {
    background: #fff;
}
.success-text-bg1 {
    background: #fff;
}
.job-guarantee-page h2 {
    padding-bottom: 10px;
}
.job-guarantee-page .factSectionContent {
    padding: 20px 0 0px;
}
.bottom_ara p
{
    text-align:center;
    padding:0px;
}
.bottom_ara a{
width: 200px;
    color: #58585b;
    display: block;
    text-align: center;
    margin: 20px auto;
    padding: 10px;
    border-radius: 8px;
    background: transparent;
    transition: .3s;
    font-weight: 700;
    text-decoration:none;
    border: 2px solid #000;
    
}
.bottom_ara a:hover{
color: #fff;
    background: #284c9a;
    text-decoration: none;
    border: 2px solid #fff;
    transform: scale(1);
    transition: 0.8s;
    
}
.awards_section a {
    text-decoration: none !important;
}
.awards_bx img 
{
    height:auto !important;
}
.mb_20 
{
    padding-bottom:30px !important;
}
.award_title p 
{
    color:#58585b !important;
    padding-bottom:0px;
}


.box-none .item .site-logo-inner {
    background: transparent !important;
    box-shadow: 0px 0px 9px -4px !important;
}
.box-none .item .site-logo-inner:hover {
    
    background:#f4f4f4 !important;
} 
#about1 {
    background: #fff;
    padding: 30px 0px 55px 0px;
}

.placement_hed
{
    font-size:26px !important;
}

.plc_stories .boxex_bg img {
    width: 100px
 !important;
    padding-top: 6px;
    padding-bottom: 5px;
    height: 45px !important;
    object-fit: contain;
    object-position: center;
}

@media(max-width:767px)
{
    .placement_hed
{
    font-size: 22px !important;
    line-height: 28px !important;
}

.abroad_area ul li {
    border-radius: 0;
}

.abroad_area .abrd-review.left {
   
    text-align: center !important;
    padding-left: 10px;
    padding-right: 10px;
    padding-bottom: 25px !important;
}
.student_main ul {
    margin-top: 0;
}

.awards_bx {
    margin-bottom: 20px;
}

}



@media(min-width:768px) and (max-width:991px)
{
    .awards_bx {
    margin-bottom: 24px;
}
}


.noContent {
    display: none !important;
}

</style>
<script language="javascript">
$(document).ready(function() {
	$(".content").slice(0, 12).show();
	$("#loadMore").on("click", function(e) {
		e.preventDefault();
		$(".content:hidden").slice(0, 12).slideDown();
		if($(".content:hidden").length == 0) {
			$("#loadMore").text("").addClass("noContent");
		}
	});
})
$(document).ready(function() {
	$(".content2").slice(0, 5).show();
	$("#loadMore2").on("click", function(e) {
		e.preventDefault();
		$(".content2:hidden").slice(0, 5).slideDown();
		if($(".content2:hidden").length == 0) {
			$("#loadMore2").text("").addClass("noContent2");
		}
	});
})
$(document).ready(function() {
	$(".content3").slice(0, 8).show();
	$("#loadMore3").on("click", function(e) {
		e.preventDefault();
		$(".content3:hidden").slice(0, 8).slideDown();
		if($(".content3:hidden").length == 0) {
			$("#loadMore3").text("").addClass("noContent3");
		}
	});
})
</script>
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
		<section class="inner-banner" style="background-image: url(<?=$imgPath?>);"> </section>
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
			<!---<section id="product-info" class="our-recent-placement section_pd plc_stories bg-gray">
				<div class="container">
					<h4 class="section_pd_heading">Our Recent Placement Stories</h4>
					<div class=" col-md-12">
						<div class="row">
							<div class="flex no-flex-xs">
                                <?php
                                    // Start of the PHP comment block
                                    /* $rcounter = 0;
                                    foreach($storiesb as $storie){
                                        $rcounter++;
                                        if (($rcounter % 2) != 0) {
                                            $intColor = "success-text-bg1";
                                        } else {
                                            $intColor = "success-text-bg2";
                                        }
                                ?>
                                    <div class="col-md-3 col-sm-12 content3" style="margin-bottom:25px;">
                                        <div class="r-b-p-stories-img">
                                            <img src="<?php echo Yii::app()->request->getBaseURL(true); ?>/img/stories/<?php echo $storie->image; ?>" alt="<?php echo CHtml::encode($storie->name); ?>" title="<?php echo CHtml::encode($storie->name); ?>" class="img-responsive" />
                                        </div>
                                        <div class="r-b-p-stories-info">
                                            <div class="col-sm-12 boxex_bg no-padding text-center success-text <?php echo $intColor; ?>">
                                                <h4><?php echo CHtml::encode($storie->name); ?></h4>
                                                <p><?php echo CHtml::encode($storie->expert); ?></p>
                                                <span><?php echo CHtml::encode($storie->content); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                <?php 
                                    } // End of the foreach loop
                                    */ // End of the PHP comment block
                                ?>
							</div>
						</div>
					</div>
				</div>
			</section>--->
			
			
			
		<section id="product-info" class="our-recent-placement section_pd plc_stories bg-gray">
        	<div class="container">
        		<h4 class="section_pd_heading">Our Recent Placement Stories</h4>
        		<div class=" col-md-12">
        			<div class="row">
        				<div class="flex no-flex-xs">
        				    
        				    	
        				    		<div class="col-md-3 col-xs-12 content3" style="margin-bottom: 25px; display: block;">
        						<div class="r-b-p-stories-img"> 
        						<img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/stories/Rahulajwanibig.png" alt="Rahul" title="Rahul" class="img-responsive"> </div>
        						<div class="r-b-p-stories-info">
        							<div class="col-sm-12 boxex_bg no-padding text-center success-text success-text-bg1">
        								<h4>Rahul Ajwani</h4>
        								<p>13.5 Lacs/pa</p> 
        							     	<img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/itrix.png">
        								</div>
        						</div>
        					</div>
        					
        					
        				    		<div class="col-md-3 col-xs-12 content3" style="margin-bottom: 25px; display: block;">
        						<div class="r-b-p-stories-img"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/stories/AmishaAgrawalbig.png" alt="Amisha" title="Amisha" class="img-responsive"> </div>
        						<div class="r-b-p-stories-info">
        							<div class="col-sm-12 boxex_bg no-padding text-center success-text success-text-bg1">
        								<h4>Amisha Agrawal</h4>
        								<p>6 Lacs/pa</p> 
        							     	<img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/shopsologo.png">
        								</div>
        						</div>
        					</div>
        					
        				    		<div class="col-md-3 col-xs-12 content3" style="margin-bottom: 25px; display: block;">
        						<div class="r-b-p-stories-img"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/stories/EmilyJonesbig.png" alt="Emily" title="Emily" class="img-responsive"> </div>
        						<div class="r-b-p-stories-info">
        							<div class="col-sm-12 boxex_bg no-padding text-center success-text success-text-bg1">
        								<h4>Emily Jones</h4>
        								<p> 10 Lacs/pa</p> 
        							     	<img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/Aryaka.png">
        								</div>
        						</div>
        					</div>
        					
        						<div class="col-md-3 col-xs-12 content3" style="margin-bottom: 25px; display: block;">
        						<div class="r-b-p-stories-img"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/stories/PradyutBorabig.png" alt="Pradyut" title="Pradyut" class="img-responsive"> </div>
        						<div class="r-b-p-stories-info">
        							<div class="col-sm-12 boxex_bg no-padding text-center success-text success-text-bg1">
        								<h4>Pradyut Bora</h4>
        								<p>18 Lacs/pa</p> 
        							     	<img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/Binance-logo.png">
        								</div>
        						</div>
        					</div>
        					
        					
        				    	<!--	<div class="col-md-3 col-xs-12 content3" style="margin-bottom: 25px; display: block;">
        						<div class="r-b-p-stories-img"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/stories/rashid_patel.jpg" alt="Rashid Patel" title="Rashid Patel" class="img-responsive"> </div>
        						<div class="r-b-p-stories-info">
        							<div class="col-sm-12 boxex_bg no-padding text-center success-text success-text-bg1">
        								<h4>Rashid Patel</h4>
        								<p>7.6 Lacs/pa</p> 
        							     	<img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/aricent_logo.png">
        								</div>
        						</div>
        					</div>
        					
        					
        				    	
        				    	<div class="col-md-3 col-xs-12 content3" style="margin-bottom: 25px; display: block;">
        						<div class="r-b-p-stories-img"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/kamlesh_images.jpg" alt="Kamlesh Surve" title="Kamlesh Surve" class="img-responsive"> </div>
        						<div class="r-b-p-stories-info">
        							<div class="col-sm-12 boxex_bg no-padding text-center success-text success-text-bg1">
        								<h4>Kamlesh Surve </h4>
        								<p>7.2 Lacs/pa</p> 
        							     	<img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/itrix.png">
        								</div>
        						</div>
        					</div>
        					
        					<div class="col-md-3 col-xs-12 content3" style="margin-bottom: 25px; display: block;">
        						<div class="r-b-p-stories-img"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/stories/sahil_des.jpg" alt="Owais Ansari" title="Sahil Darvesh" class="img-responsive"> </div>
        						<div class="r-b-p-stories-info">
        							<div class="col-sm-12 boxex_bg no-padding text-center success-text success-text-bg1">
        								<h4>Sahil Darvesh </h4>
        								<p>6.8 Lacs/pa</p> 
        							     	<img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/stories/inui.jpg">
        								</div>
        						</div>
        					</div>
        				    
        				    	<div class="col-md-3 col-xs-12 content3" style="margin-bottom: 25px; display: block;">
        						<div class="r-b-p-stories-img"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/stories/owais_ansari.jpg" alt="Owais Ansari" title="Owais Ansari" class="img-responsive"> </div>
        						<div class="r-b-p-stories-info">
        							<div class="col-sm-12 boxex_bg no-padding text-center success-text success-text-bg1">
        								<h4>Owais Ansari </h4>
        								<p>5.2 Lacs/pa</p> 
        							     	<img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/nse_logo.jpg">
        								</div>
        						</div>
        					</div>--->
        				</div>
        			</div>
        		</div>
        	</div>
        </section>



		<section id="product-info" class="job-guarantee-page  cont-sec section_pd">
            <div class="container">
                <h2 class="placement_hed">Placement Track Record which makes us Proud</h2>
                <div class="col-md-12">
                    <div class="row">
                        <div class="flex">
                            <?php 
                            $rcounter = 0; 
                            $reversedStories = array_reverse($stories); // Reverse the order of the stories array
                            foreach($reversedStories as $storie) { 
                                $rcounter++;
                                if (($rcounter % 2) != 0) { 
                                    $intColor = "success-text-bg1"; 
                                } else { 
                                    $intColor = "success-text-bg2"; 
                                } 
                            ?>
                                <div class="col-md-2 col-sm-3 col-xs-6 pd0 content">
                                    <div class="our-team"> 
                                        <img src="<?php echo Yii::app()->request->getBaseURL(true);?>/img/stories/<?=$storie->image?>" title="<?=$storie->name?>" class="img-responsive" /> 
                                        <div class="team-prof success-text <?=$intColor?>">
                                            <p><?=$storie->name?></p>
                                            <span><?=$storie->expert?></span>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                if($rcounter >= 51){ 
                                    break; 
                                } 
                            } ?>
                        </div>
                        <a href="#" id="loadMore">Load More</a>
                    </div>
                </div>
            </div>
        </section>

		<section id="" class="our-recent-placement section_pd bg-gray">
			<div class="container">
				<h4>Our Students Who Got Placed Speaks For Us</h4>
				<div class="flex no-flex-xs">
					<?php foreach($videossp as $videoss){ ?>
						<div class="stu-who-speak content2 text-center">
							<div class="video-box-overly">
								<button type="button" class="btn video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/<?=$videoss->youtubeid?>" data-target="#myModal"> <img class="video-gal-item-img" alt="Sufiyan Sodiwala" src="https://img.youtube.com/vi/<?=$videoss->youtubeid?>/0.jpg">
									<div class="stu-who-video-icon"></div>
								</button>
							</div>
							<div class="stu-who--item-title-box" style="display:block;">
								<div class="stu-who-spk-item-title">
									<?=$videoss->name?>
								</div>
							</div>
							<div class="">
								<button type="button" class="btn video-btn watch_btn" data-toggle="modal" data-src="https://www.youtube.com/embed/<?=$videoss->youtubeid?>" data-target="#myModal"> Watch Now
									<div class="stu-who-video-icon"></div>
								</button>
							</div>
						</div>
						<?php } ?>
						<div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg" role="document">
								<div class="modal-content">
									<div class="modal-body">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true"><img src="<?php /*echo Yii::app()->request->getBaseUrl(true); */?>/img/lightbox-close.png"></span> </button>
									
										<div class="embed-responsive embed-responsive-16by9">
											<iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
										</div>
									</div>
								</div>
							</div>
						</div>
    				</div>
    			</div>
    	</section>
			

			<section class="student_section section_pd">
				<div class="container">
					<h4 class="section_pd_heading">Students working at home (India) after our CCIE training program</h4>
					<div class="student_main">
						<ul class="list-unstyled">
							<li style="display: list-item;">
								<div class="abrd-std left"><img class="height_217" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/testimonials/harish_nair.jpg"></div>
								<div class="abrd-text right">
									<div class="abrd-name left"><span>Harish Nair</span>CCNA
										<br><b>Country:</b> India</div>
									<div class="abrd-review left">It is an amazing experience from #Octa Networks Octa Networks The training they are providing for CCNA Security is awesome. The lecture by @Munavar khan is wonderful. The way he explaining and relating technical stuffs with our real life example is amazing. <!--Special thanks to #Joaquim Fernanders and #Arshad Dhunna for giving us such a great opportunity.--></div>
								</div>
							</li>
							<li style="display: list-item;">
								<div class="abrd-std right"><img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/testimonials/azhar_ali.jpg"></div>
								<div class="abrd-text left">
									<div class="abrd-name right"><span>Azher Ali Mohammed</span>CCIE Wireless
										<br><b>Country:</b> India</div>
									<div class="abrd-review left"> Octa Networks, is one of the leading institute for all Cisco Technologies. The Trainers are well versed with latest offering from Cisco and are up to date in terms of Technology. I had a fantastic experience with their CCIE Wireless Training. <!--I am glad to be a part of learning under the guidance of Dan Parker Joaquim Fernandes and Arshad Dhunna.--></div>
								</div>
							</li>
							<li style="display: list-item;">
								<div class="abrd-std left"><img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/testimonials/meerag.jpg"></div>
								<div class="abrd-text right">
									<div class="abrd-name left"><span>Meerza BG</span>CCIE Collabaratinon 
										<br><b>Country:</b> India</div>
									<div class="abrd-review left"> Really the Octa Network team is working very hard to provide free training and which is very appreciative. Specially I am taking Collabaratinon training under Azmath sir, he as good knowledge and he explains the topic  in detail, which is very helpful. 
All the best Octa Network Team. </div>
								</div>
							</li>
							<li style="display: list-item;">
								<div class="abrd-std right"><img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/testimonials/arjun_singh.jpg"></div>
								<div class="abrd-text left">
									<div class="abrd-name right"><span>Arjun Singh</span>CCNP R&S training
										<br><b>Country:</b> India</div>
									<div class="abrd-review left">Currently, I am taking free CCNP R&S training which is lead by Mr. Jagdish Rathod.he is explaining very well.</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</section>
			
				<section class="student_section abroad_area section_pd">
				<div class="container">
					<h4 class="section_pd_heading">Students working around the world in foreign Countries after our CCIE training program</h4>
					<div class="student_main">
						<ul class="list-unstyled">
						    

							<!--<li style="display: list-item;">
								<div class="abrd-std left"><img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/testimonials/sigbatullah.jpg"></div>
								<div class="abrd-text right">
									<div class="abrd-name left"><span>Sibghatullah Mujdadi</span>CCNA
										<br><b>Country:</b> Pakistan </div>
									<div class="abrd-review left">I am Very Pleased with the study Mr.Munawar Khan teaching Method was very professional Great learning center.</div>
								</div>
							</li>-->
							
							
							<li style="display: list-item;">
								<div class="abrd-std left"><img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/saurabh_jadhav.jpg"></div>
								<div class="abrd-text right">
									<div class="abrd-name left"><span>Dinesh Jadhav</span>CCNA
										<br><b>Country:</b> United States </div>
									<div class="abrd-review left">I am Very Pleased with the study Mr.Munawar Khan teaching Method was very professional Great learning center.</div>
								</div>
							</li>
							
							<li style="display: list-item;">
								<div class="abrd-std right"><img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/testimonials/aldrin-luigi.jpg"></div>
								<div class="abrd-text left">
									<div class="abrd-name right"><span>Aldrin Luigi</span>CCIE
										<br><b>Country:</b> Australia </div>
									<div class="abrd-review left txt_right">I am very pleased with the study material, teaching methodology and professionalism of Octa Networks staff. The support team and rack equipment are also very good. I highly recommend it!</div>
								</div>
							</li>
							<li style="display: list-item;">
								<div class="abrd-std left"><img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/testimonials/supakorn.jpg"></div>
								<div class="abrd-text right">
									<div class="abrd-name left"><span>Supakorn Visutthicho</span> Cisco CCIE
										<br><b>Country:</b> Abroad </div>
									<div class="abrd-review left">Highly recommend for wireless training. If anyone want to join and get knowledge and certificate. Octa is your answer.</div>
								</div>
							</li>
							<li style="display: list-item;">
								<div class="abrd-std right"><img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/testimonials/robin.jpg"></div>
								<div class="abrd-text left">
									<div class="abrd-name right"><span>Robin Teotia</span>CCIE Wireless
										<br><b>Country:</b> United Arab Emirates </div>
									<div class="abrd-review left txt_right">I have joined Octa networks for CCIE Wireless Lab Exam and i found it is one of the best training institute. Octa Networks has extensive course material and including LAB with all time support. Big thanks to the entire network Octa team.
</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</section>
			
			<section class="section_pd bg-gray">
				<div class="container">
					<h4 class="section_pd_heading">Stay Ahead with Octa Networks</h4>
					 <p>Octa Networks has specialized itself in Job guaranteed courses after thorough discussions with industry experts like Hiring Manager, Technical Managers, Team leaders, HR, Recruitment Officers and much more. The courses are designed as per industry needs and are planned in such a way that candidate is guaranteed to get a job after successful completion of the training.</p>
					 <p>Octa Networks is the only cisco training Institute in India to give you “On Paper Job Guarantee” the day you enroll for our CCIE program.</p>
					 <p>Octa Networks is also world’s largest and only cisco training Institute having real devices for ALL CCIE tracks. Candidates can touch and feel routers, switches, next generation firewalls, next generation IPS, nexus 7000, nexus 9000, wireless controllers, access points, IP phones and basically all the devices used in all of the cisco CCIE tracks. No training center in the world houses all of the CCIE devices under one roof.</p>
					 <p>Octa Networks is the World’s only Cisco Training Center with <!--2 x Octa -->CCIE's as Mentors with 25+ years of experience among themselves and has one of the best Cisco CCIE Certified Trainers to motivate, nurture and guide you throughout your Cisco Certification career path.</p>
					 <p>Our Candidates are working with the best of the IT companies in the world like Cisco, Amazon, Vmware, World Wide, Dimension Data, NTT, Orange, Accenture, Tech-Mahindra, HCL, TCS, Wipro, British-Telecom, Mphassis, Intuit are just few names from the never-ending list.</p>
					<p>Our candidates are not only working in India but also in countries like USA, Canada, Europe, Qatar, Dubai, Abu Dhabi, Singapore, Australia and many more countries. Their salary packages vary from 10 to 50 Lacs INR per annum in India and 100,000 to 300,000 USD (60 Lacs to 2 cr. in INR) per annum in international countries.</p>
					</div>
			</section>
			<section id="about1" class="box-none">
				<div class="container">
					<div class="text-center"> <h1 class=" mr-t0 section_pd_heading">Job Guarantee Courses</h1> </div>
					<div class="row">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
							<div class="box">
								<div class="item img_cl">
									<div class="site-logo-inner padd_btm19"> <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/training-exam/ccie-enterprise-training-india/">
                        <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/exam/ccie-enterprise-training-india.png" alt="CCNA Certifications " class="item-logo-img"> 
                        <h4 class="gr_hed">CCIE Enterprise Zero to Hero</h4>
										</a> </div>
								</div>
							</div>
						</div>
						<!-- Modal for ccie routing & switching zero to hero program -->
						<!--------------------->
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
							<div class="box">
								<div class="item img_cl">
									<div class="site-logo-inner padd_btm19"> <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/training-exam/ccie-security-training-india/">
                        <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/exam/ccie-security-training-india.png" alt="MCSA" class="item-logo-img"> 
                        <h4 class="gr_hed">CCIE Security Zero to Hero</h4>
                      </a> </div>
								</div>
							</div>
						</div>
						<!--------------------->
						<!--<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
							<div class="box">
								<div class="item img_cl">
									<div class="site-logo-inner"> <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/training-exam/ccie-data-center-zero-to-hero-program/">
                        <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/exam/ccie-data-center-zero-to-hero-program.png" alt="CCIE Certifications" class="item-logo-img"> 
                        <h4 class="gr_hed">CCIE Data Center</br> Zero to Hero</h4>
												</a> </div>
								</div>
							</div>
						</div>-->
						<!--------------------->
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
							<div class="box">
								<div class="item img_cl">
									<div class="site-logo-inner padd_btm19"> <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/training-exam/ccie-collaboration-zero-to-hero">
                        <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/exam/ccie-collaboration-zero-to-hero.png" alt="CCIE Collaboration" class="item-logo-img"> 
                         <h4 class="gr_hed">CCIE Collaboration Zero to Hero</h4>
                      
												</a> </div>
								</div>
							</div>
						</div>
					    	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
							<div class="box">
								<div class="item img_cl">
									<div class="site-logo-inner padd_btm19"> <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/training-exam/mvip-data-center-cloud">
                        <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/exam/mvip-data-center-cloud.png" alt="MVIP – Data Centern" class="item-logo-img"> 
                         <h4 class="gr_hed">MVIP Data Center</h4>
                      
												</a> </div>
								</div>
							</div>
						</div>
						
						<!--	<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
							<div class="box">
								<div class="item img_cl">
									<div class="site-logo-inner"> <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/training-exam/mvip-program-security/">
                        <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/exam/mvip-program-security.png" alt="MVIP – Security" class="item-logo-img"> 
                         <h4 class="gr_hed">MVIP </br>Security</h4>
                      
												</a> </div>
								</div>
							</div>
						</div>-->
					
					</div>
				</div>
			</section>
			
			
			<!--<section id="why-us" class="section_pd">
				<div class="container">
					<header class="bg-sec-title">
						<h4 class="color-white section_pd_heading">Why Octa Networks</h4> </header>
					<div class="row row-eq-height justify-content-center">
						<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6 whyus_icn">
							<div class="card wow bounceInUp"> <i class="fa fa-graduation-cap" aria-hidden="true"></i>
								<div class="card-body">
									<h5 class="card-title">OCTA CCIE's</h5>
									<p class="card-text">as Mentors</p>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6 whyus_icn">
							<div class="card"> <i class="fa fa-calendar" aria-hidden="true"></i>
								<div class="card-body">
									<h5 class="card-title">8+ YEARS</h5>
									<p class="card-text">of Delivering Innovative Training</p>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6 whyus_icn">
							<div class="card wow bounceInUp"> <i class="fa fa-briefcase" aria-hidden="true"></i>
								<div class="card-body">
									<h5 class="card-title">85% Students</h5>
									<p class="card-text">Get Placed Without Appearing CCIE Lab</p>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6 whyus_icn">
							<div class="card wow bounceInUp"> <i class="fa fa-certificate" aria-hidden="true"></i>
								<div class="card-body">
									<h5 class="card-title">90% CCIE</h5>
									<p class="card-text">Students Passed in First Attempt</p>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6 whyus_icn">
							<div class="card wow bounceInUp"> <i class="fa fa-server" aria-hidden="true"></i>
								<div class="card-body">
									<h5 class="card-title">State Of Art</h5>
									<p class="card-text">Infrastructure</p>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6 whyus_icn">
							<div class="card wow bounceInUp"> <i class="fa fa-users" aria-hidden="true"></i>
								<div class="card-body">
									<h5 class="card-title">100K+</h5>
									<p class="card-text">Candidates Trained</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>-->
			
			
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

			<section id="product-info" class="job-guarantee-page  cont-sec section_pd placement_proces">
				<div class="container">
					<h4 class="section_pd_heading">Training and Placement Process</h4>
					<div class="col-md-12">
						<div style="margin: auto; text-align: center;"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/Job-ready-FULL.png" alt="Training and Placement Process" class="img-responsive"></div>
					</div>
				</div>
			</section>
			<section id="reason-join" class="factSectionNw job-guarantee-page section_pd">
				<h4 class="color-white"> Few reasons, Why Octa Networks is ideal for you</h4>
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
							<div class="factSectionContent">
								<div class="factSectionLeft"> <i class="fa fa-server" aria-hidden="true"></i></div>
								<div class="factSectionRight">
									<h4>Worlds Largest <br>Cisco Labs</h4></div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
							<div class="factSectionContent">
								<div class="factSectionLeft"> <i class="fa fa-clock-o" aria-hidden="true"></i></div>
								<div class="factSectionRight">
									<h4>24x7 <br>Lab Facility</h4></div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
							<div class="factSectionContent">
								<div class="factSectionLeft"> <i class="fa fa-users" aria-hidden="true"></i></div>
								<div class="factSectionRight">
									<h4>Biggest Team <br>of CCIE Certified Trainers</h4></div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
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
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
							<div class="factSectionContent">
								<div class="factSectionLeft"> <i class="fa fa-book" aria-hidden="true"></i></div>
								<div class="factSectionRight">
									<h4>Free Practical <br>Workbooks</h4></div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
							<div class="factSectionContent">
								<div class="factSectionLeft"> <i class="fa fa-question-circle" aria-hidden="true"></i></div>
								<div class="factSectionRight">
									<h4>Free Interview <br>Questions Workbook</h4></div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
							<div class="factSectionContent">
								<div class="factSectionLeft"> <i class="fa fa-search" aria-hidden="true"></i></div>
								<div class="factSectionRight">
									<h4>Dedicated <br>Placement Cell</h4></div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
							<div class="factSectionContent">
								<div class="factSectionLeft"> <i class="fa fa-server" aria-hidden="true"></i></div>
								<div class="factSectionRight">
									<h4>100% Practicals <br>on Real Devices</h4></div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="product-info" class="section_pd awdhd">
				<div class="container">
					<h3 class="mb_20 section_pd_heading">Awards & Recognitions</h3>
					<div class="awards_section">
					    
					    	<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="awards_bx">
								<a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/octa-networks-awards/"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/octa_awards_images2.jpg">
									<div class="award_title">
										<p>Awards for excellence in IT Training - 2020</p>
									</div>
								</a>
							</div>
						</div>
						
					
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="awards_bx">
								<a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/octa-networks-awards/"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/Pride-of-Indian-Education-Awards-2019-1.jpg">
									<div class="award_title">
										<p>Pride of Indian Education - 2019</p>
									</div>
								</a>
							</div>
						</div>
						
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="awards_bx">
								<a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/octa-networks-awards/"> <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/gallery_images/38/BL2B4315-final11.JPG">
									<div class="award_title">
										<p>Pratigya Social Impact Award - 2018</p>
									</div>
								</a>
							</div>
						</div>
						
					</div>
				</div>
			</section>
 