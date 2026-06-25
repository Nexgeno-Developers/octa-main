<style>
    .inner_headings1 {
    padding: 20px 0px 0px 0px !important;
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
		  	<li><a target="_blank" href="<?php echo Yii::app()->createUrl("main/default/aboutus"); ?>">About us</a></li>
			<li class="active"><?php echo $content->heading ?></li>
		</ol>
	</div>
</section>

.
<section id="product-info" class="awrds_one">
	<div class="container">
		<div class="text-center">
			<h1 class="inner_headings1 pd_btm0">Awards & Recognitions </h1> </div>
		<div class="awards_main">
			<div class="tab-content" id="">
				<div class="awars_box">
					<div class="row">
						<div class="col-md-12">
							<h3 class="awars_hed">2021</h3> <span>ASIA TODAY - Best IT Networking Training Institute of the Year</span></div>
				
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><img alt="" class="img-responsive" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/awards_2021.jpg"></div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 padtop_140">
					    
					    <!--<div class="succes_main">
								<div class="succes_image">
									<a class="btn video-btn video-btn-custom" data-src="https://www.youtube.com/embed/quYHNhdruUY"> 
									<img src="<?php //echo Yii::app()->request->getBaseUrl(true); ?>/img/2021_awards_images_right.jpg"> 
									<img class="play_button" src="<?php //echo Yii::app()->request->getBaseUrl(true); ?>/images/play-button1.png"> </a>
								</div>
							</div>-->
							
						<p>ASIA TODAY - Best IT Networking Training Institute of the Year Later in the same year on 25th November, 2021 we were awarded the “Best IT Networking Training Institute of the Year” by Asia Today (Research &amp; Media). The award was presented by Mrs. Jaya Prada, she is an Indian actress and politician. Along with that we also received the Pandemic Bravery Award. This award is a big picture of what we do, who we are and where we are going and let it remain a constant reminder that good work comes with unbelievable achievements!</p>
					</div>
						</div>
				</div>
			</div>
		</div>
		<div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-body">
						<button type="button" class="close"> <span aria-hidden="true"><img src="/img/lightbox-close.png"></span> </button>
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item video_succes" src="" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="product-info" class="gray_clrs awrds_two">
	<div class="container">
		<div class="awards_main">
			<div class="tab-content" id="">
				<div class="awars_box">
					<div class="row">
						<div class="col-md-12">
							<h3 class="awars_hed">2020</h3> <span>Recognition is the greatest motivator</span></div>
				
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 padtop_140">
						    <!--<img alt="" class="img-responsive" src="<?php //echo Yii::app()->request->getBaseUrl(true); ?>/img/octa_awards_images2.jpg">-->
						
							<p style="display: none;">Recognition is the greatest motivator. It gives us immense pride announcing that Octa networks have been recognized by Indian Achievers forum <a href="https://www.iafindia.com/octa-networks/">iafindia.com/octa-networks</a> with the Indian Achievers Award 2020 for Excellence in IT training – Cisco. The award adds up to the remarkable performance in empowering students from all around the world.</p>
							<p style="display: none;">A beautiful award is displayed with pride, to be viewed and admired for years to come. We would like to thank our employees, support staff and students for their constant dedication and support.</p>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						    <!--<img alt="" class="img-responsive" src="<?php //echo Yii::app()->request->getBaseUrl(true); ?>/img/octa_awards_images1.jpg">-->
						    <img alt="" class="img-responsive" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/indian_achive_awards_img.jpg">
						    
						    </div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-body">
						<button type="button" class="close"> <span aria-hidden="true"><img src="/img/lightbox-close.png"></span> </button>
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item video_succes" src="" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="product-info" class="awrds_three">
	<div class="container">
		<div class="awards_main">
			<div class="tab-content" id="">
				<div class="awars_box">
					<div class="row">
						<div class="col-md-12">
							<h3 class="awars_hed">2019</h3> <span>Pride of Indian Education Awards 2019</span></div>
					
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="wonderplugin-gridgallery-list">
							<!--<div class="succes_main">
								<div class="succes_image">
									<a class="btn video-btn video-btn-custom" data-src="https://www.youtube.com/embed/1U3sib-Qaj4"> 
									<img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/Pride-of-Indian-Education-Awards-2019-1.jpg"> 
									<img class="play_button" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/play-button1.png"> </a>
								</div>
							</div>-->
							<img alt="" class="img-responsive" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/pride_of_indian_awards_img.jpg">
						</div>
					</div>
					
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 padtop_60">
						<p>Octa Networks has added another feather to its cap &amp; being awarded at the prestigious – Pride of Indian Education Awards 2019 as the “Best Emerging Cisco Training Institute Empowering Youth with IT Skills” in India. The award signifies &amp; highlights the contribution of Octa Networks making a substantial impact on Student Lives &amp; Education sector at large.</p>
						<p>We were graced by the presence of many eminent personalities &amp; the award was presented by the acclaimed UN Environment’s Goodwill Ambassador for India, Miss Asia Pacific 2000 &amp; Bollywood Diva – Dia Mirza.</p>
						<p>On company’s behalf, <!--Co-Owners – Mr. Arshad Dhunna &amp; Mr. Joaquim Fernandes-->Directors had accepted the honor &amp; were facilitated with the award.</p>
						<p>On this proud moment, we thank all of our employees, support staff and students for their support and blessing.</p>
					</div>
					
					</div>
						
					
					
				</div>
			</div>
		</div>
		<div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-body">
						<button type="button" class="close"> <span aria-hidden="true"><img src="/img/lightbox-close.png"></span> </button>
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item video_succes" src="" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="product-info" class="blue_clrs awrds_four">
	<div class="container">
		<div class="awards_main">
			<div class="tab-content" id="">
				<div class="awars_box">
					<div class="row">
						<div class="col-md-12">
							<h3 class="awars_hed">2018</h3> <span>Pratigya Social Impact Award for Outstanding Contribution to Strengthening the Economy in IT Sector</span></div>
					
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 padtop_100">
						<p>Its an honor for us when our hard work is recognized and appreciated by reputed institutions.</p>
						<p>Octa Networks was presented with “Social Impact Award” in PRATIGYA 2018 event organized by Brands Impact in association with Zee Business.</p>
						<p>The award was presented by Chief Guest Laxmi Agarwal and was gladly accepted by <!--Mr. Joaquim Fernandes and Mr. Arshad Dhunna (Co-founders, Octa Networks).--> directors of the company.</p>
						<p>On this ecstatic moment, we thank all of our employees, support staff and students for their support and blessing.</p>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="wonderplugin-gridgallery-list">
							<!--<div class="succes_main">
								<div class="succes_image">
									<a class="btn video-btn video-btn-custom" data-src="https://www.youtube.com/embed/f5XAUX6Ur1U"> 
									<img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/gallery_images/38/BL2B4315-final11.JPG"> 
									<img class="play_button" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/play-button1.png"> </a>
								</div>
							</div>-->
							
							<img alt="" class="img-responsive" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/pratigya_awards_img.jpg">
							
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
		<div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-body">
						<button type="button" class="close"> <span aria-hidden="true"><img src="/img/lightbox-close.png"></span> </button>
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item video_succes" src="" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<style>
    @media(max-width:1024px) and (min-width:767px){
    .wonderplugin-gridgallery-list {
    margin-bottom: 100px;
}
        
    }
    
    .awars_box:nth-child(1) {
    padding-bottom: 15px !important;
}

</style>


<script>
$('.close').click(function(){
   $('#myModal').modal('hide');
  //alert(1);
  $('.video_succes').attr('src', '');   
});

$('.video-btn-custom').click(function(){
    var src = $(this).attr('data-src');
   $('#myModal').modal('show');
  //alert(1);
  $('.video_succes').attr('src', src);   
});


</script>

