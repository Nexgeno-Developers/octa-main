
    
<style type="text/css">
.flex {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
}

.content {
  display: none; 
}
.content_one {
  display: none; 
} 

.content_two
{
    display:none;
}
.content_three
{
    display:none;
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
.succes_section {
    padding-bottom: 50px !important;
}
.linked_bttn
{
   border: 2px solid #0077b5;
    color: #0077b5;
}
.linked_bttn:hover
{
     color: #fff;
    background: #0077b5 !important;
}

.google_bttn
{
    border: 2px solid #ea4335;
      color: #ea4335;
}
.google_bttn:hover
{
     color: #fff;
    background: #ea4335 !important;
}

.fbc_bttn
{
       border: 2px solid #4267B2;
    color: #4267B2;
}
.fbc_bttn:hover
{
     color: #fff;
    background: #4267B2 !important;
}
.loadmore_button:hover {
 color: #fff;
    background: #284c9a;
    text-decoration: none;
    border: 2px solid #fff;
    transform: scale(1);
    transition: 0.8s;
}
.noContent {
  color: #000 !important;
  background-color: transparent !important;
  pointer-events: none;
  background: none !important;
}


.noContent {
    display: none !important;
}

.suuces_imagess {
    margin-bottom: 50px;
    margin-top: 11px;
}



#loadMore {
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
    margin-top: 0px !important;
    margin-bottom: 0px !important;
}

.succes_section h2 {
    padding-bottom: 15px !important;
}
.linked_box {
    display: flex;
    border-radius: 5px;
    width: 100%;
    height:225px;
    padding: 15px 0px;
    
}

.linked_content {
    margin-left: 10px;
}
.linked_box img {
    border-radius: 10px;
    width:125px;
}

.linked_content p i {
    font-size: 22px;
    position: relative;
    top: -5px;
    left: -1px;
}

.linked_clr
{
    color:#0077b5;
}

.facebook_clr
{
    color:#4267B2;
}
.google_clr
{
    color:#ea4335;
}
.linked_inclr
{
     color: #0077b5;
    font-size: 40px;
    position: relative;
    top: 4px;
}

.facebook_inclr
{
     color: #4267B2;
    font-size: 40px;
    position: relative;
    top: 4px;
}

.google_inclr
{
     color: #ea4335;
    font-size: 40px;
    position: relative;
    top: 4px;
}

.linked_clr_border
{
    border:1px solid #0077b5;
}

.facebook_clr_border
{
    border:1px solid #4267B2;
}

.google_clr_border
{
    border:1px solid #ea4335;
}



.linked_content h4 {
    font-size: 18px;
    margin-top: 10px;
    margin-bottom: 0;
    font-weight: 600 !important;
    text-transform:capitalize;
}

.link_pdd10
{
    padding:10px;
}

.review_start {
    text-align: center;
    width: 100%;
    position: relative;
    left: 10px;
}
.review_start i {
    text-align: center;
    color: #ff9529;
    padding-top: 13px;
    font-size: 18px;
}


.linked_btnclr {
    border: 2px solid #0a66c2!important;
    color: #0a66c2 !important;
    position: relative;
    top: 12px;
}

.devider_liness {
    border-top: 1px dashed #3333332b;
}

.student_page {
    padding-top: 20px !important;
    padding-bottom: 50px !important;
}

.linked_content p {
    display: -webkit-box !important;
    overflow: hidden;
    -webkit-line-clamp: 6;
    -webkit-box-orient: vertical;
    padding-bottom: 0px;
}

.pd_b10 {
    padding-bottom: 15px !important;
}
</style>

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<script language="javascript">
$(document).ready(function(){
  $(".content").slice(0, 8).show();
  $("#loadMore").on("click", function(e){
    e.preventDefault();
    $(".content:hidden").slice(0, 4).slideDown();
    if($(".content:hidden").length == 0) {
      $("#loadMore").text("").addClass("noContent");
    }
  });
  
})
</script>



<script language="javascript">
$(document).ready(function(){
  $(".content_one").slice(0, 4).show();
  $("#loadMore_one").on("click", function(e){
    e.preventDefault();
    $(".content_one:hidden").slice(0, 4).slideDown();
    if($(".content_one:hidden").length == 0) {
      $("#loadMore_one").text("").addClass("noContent");
    }
  });
  
})
</script>

<script language="javascript">
$(document).ready(function(){
  $(".content_two").slice(0, 4).show();
  $("#loadMore_two").on("click", function(e){
    e.preventDefault();
    $(".content_two:hidden").slice(0, 4).slideDown();
    if($(".content_two:hidden").length == 0) {
      $("#loadMore_two").text("").addClass("noContent");
    }
  });
  
})
</script>

<script language="javascript">
$(document).ready(function(){
  $(".content_three").slice(0, 4).show();
  $("#loadMore_three").on("click", function(e){
    e.preventDefault();
    $(".content_three:hidden").slice(0, 4).slideDown();
    if($(".content_three:hidden").length == 0) {
      $("#loadMore_three").text("").addClass("noContent");
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
                 <source srcset="<?php echo Yii::app()->request->getBaseURL(true);?>/img/ebackground/<?=$content->photo2?>">
                 <img class="slide-image"  src="<?php echo Yii::app()->request->getBaseURL(true);?>/img/ebackground/<?=$content->photo2?>" alt="" >
                 <?php } ?>
               </picture>

   <?php }else{

    $imgPath = Yii::app()->request->getBaseUrl(true) . '/img/ebackground/default.jpg';?>
<section class="inner-banner" style="background-image: url(<?=$imgPath?>);">
   <div class="container">
   <!--<h1><?php //echo $content->heading ?></h1>-->
   </div>
</section>
<?php    } ?>
<section class="breadcrumb">
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>"><i class="fa fa-home"></i></a></li>
		  	<li><a href="<?php echo Yii::app()->createUrl("main/default/aboutus"); ?>">About us</a></li>
			<li class="active"><?php echo $content->heading ?></li>
		</ol>
	</div>
</section>

<section id="product-info" class="succes_section">
	<div class="container">
		<h4 class="p-0 section_pd_heading pd_b10"> What Students Speak About Us - Video Testimonials</h4>
		<div class="tab-content" id="">
			<div class="row">
                
                    
				<div class="flex">
                <?php foreach($review['youtube'] as $youtube){ ?>
					<div class="succes_main hvr-bounce-in content">
						<div class="succes_image">
							<a class="btn video-btn video-btn-custom" data-src="https://www.youtube.com/embed/<?php echo $youtube->vlink ?>"> 
							<img src="https://img.youtube.com/vi/<?php echo $youtube->vlink ?>/0.jpg"> 
							<img class="play_button" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/play-button1.png"> </a>
						</div>
						<div class="succes_content">
							<p><?php echo $youtube->name ?> </p> <span><?php echo $youtube->vdesc ?> </span> </div>
					</div>
				
                    <?php } ?>
                </div>
                
                <a href="#" class="loadmore_button" id="loadMore">Load More</a>
				<div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-body">
								<button type="button" class="close"> <span aria-hidden="true"><img src="<?php /*echo Yii::app()->request->getBaseUrl(true); */?>/img/lightbox-close.png"></span> </button>
								<div class="embed-responsive embed-responsive-16by9">
									<iframe class="embed-responsive-item video_succes" src="" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<!---- linked in open---->
<section class="student_page">
	<div class="container">
		<h1 class="p-0 section_pd_heading pd_b10 margin_btm"><i class="fa fa-linkedin-square linked_inclr" aria-hidden="true"></i> What Students Speak About Us On Linkedin</h1>
		<div class="row">
        <?php foreach($review['linkedin'] as $linkedin){ ?>
		    	<div class="col-md-6 link_pdd10 content_one">
				<div class="linked_box linked_clr_border">
					<div class="col-md-3"> <img src="<?php echo $linkedin->image ? Yii::app()->request->getBaseUrl(true).'/img/studentreview/'.$linkedin->image : Yii::app()->request->getBaseUrl(true).'/img/studentreview/defalt_images.jpg'; ?>" alt="">
						<div class="review_start"> 
 
                        <?php for ($x = 0; $x < 5; $x++) { ?>    
                            <?php if($x > $linkedin->rating){ ?>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            <?php }else{ ?>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            <?php } ?>
                        <?php } ?>                           
                    </div>
					</div>
					<div class="col-md-9">
						<div class="linked_content">
							<p><i class="fa fa-quote-left linked_clr" aria-hidden="true"></i> 
							<?php echo $linkedin->content; ?>
							
							</p>
							<div class="border_lines"></div>
							<h4 class="linked_clr"><?php echo $linkedin->name; ?></h4> </div>
					</div>
				</div>
			</div>
   <?php } ?>
			
			<div style="clear:both"></div> <a href="#" class="loadmore_button linked_bttn" id="loadMore_one">Load More</a> </div>
	</div>
</section>
<!---linked in close----->



<!---- facebook in open---->
<section class="student_page" style="background:#f2fbfd;">
	<div class="container">
		<h2 class="p-0 section_pd_heading pd_b10 margin_btm"><i class="fa fa-facebook-square facebook_inclr" aria-hidden="true"></i> What Students Talk About Us On Facebook</h2>
		<div class="row">
		    
		    
                <?php foreach($review['facebook'] as $facebook){ ?>
		    	<div class="col-md-6 link_pdd10 content_two">
				<div class="linked_box facebook_clr_border">
					<div class="col-md-3"> <img src="<?php echo $facebook->image ? Yii::app()->request->getBaseUrl(true).'/img/studentreview/'.$facebook->image : Yii::app()->request->getBaseUrl(true).'/img/studentreview/defalt_images.jpg'; ?>" alt="">
						<div class="review_start"> 
                            
                        <?php for ($x = 0; $x < 5; $x++) { ?>    
                            <?php if($x > $facebook->rating){ ?>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            <?php }else{ ?>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            <?php } ?>
                        <?php } ?>                    
                    </div>
					</div>
					<div class="col-md-9">
						<div class="linked_content">
							<p><i class="fa fa-quote-left facebook_clr" aria-hidden="true"></i> 
							<?php echo $facebook->content; ?>

							</p>
							<div class="border_lines"></div>
							<h4 class="facebook_clr"><?php echo $facebook->name; ?></h4> </div>
					</div>
				</div>
			</div>
            <?php } ?>
			
			
			<div style="clear:both"></div> <a href="#" class="loadmore_button fbc_bttn" id="loadMore_two">Load More</a> </div>
	</div>
</section>
<!---facebook in close----->



<!---- google in open---->
<div class="student_page">
	<div class="container">
		<h4 class="p-0 section_pd_heading pd_b10 margin_btm"><i class="fa fa-google-plus-square google_inclr" aria-hidden="true"></i> What Students Say About Us On Google</h4>
		<div class="row">
            
                <?php foreach($review['google'] as $google_r){ ?>
		    	<div class="col-md-6 link_pdd10 content_three">
				<div class="linked_box google_clr_border">
					<div class="col-md-3"> <img src="<?php echo $google_r->image ? Yii::app()->request->getBaseUrl(true).'/img/studentreview/'.$google_r->image : Yii::app()->request->getBaseUrl(true).'/img/studentreview/defalt_images.jpg'; ?>" alt="">
                        <div class="review_start"> 

                        <?php for ($x = 0; $x < 5; $x++) { ?>    
                            <?php if($x > $google_r->rating){ ?>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            <?php }else{ ?>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            <?php } ?>
                        <?php } ?>                         
                    </div>
					</div>
					<div class="col-md-9">
						<div class="linked_content">
							<p><i class="fa fa-quote-left google_clr" aria-hidden="true"></i> <?php echo $google_r->content; ?> </p>
							<div class="border_lines"></div>
							<h4 class="google_clr"><?php echo $google_r->name; ?> </h4> </div>
					</div>
				</div>
            </div>
            <?php } ?>
			

			<?php //var_dump($google_reviews); ?>
			
			
			
			
			
			
			
			
			<div style="clear:both"></div> <a href="#" class="loadmore_button google_bttn" id="loadMore_three">Load More</a> </div>
	</div>
</div>
<!---google in close----->


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

 