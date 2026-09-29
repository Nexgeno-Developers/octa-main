<style type="text/css">
.flex {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
}

.flex {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
}
.content {
  /* height: 100px;
  width: 45%;
  color: #fff;
  font-size: 24px;
  line-height: 100px;
  text-align: center;
  background-color: grey;
  margin: 5px;
  border: 1px solid lightgrey;*/
  display: none; 
}
#loadMore {
  width: 200px;
  color: #fff;
  display: block;
  text-align: center;
  margin: 20px auto;
  padding: 10px;
  border-radius: 8px;
  background: linear-gradient(135deg,#19519e,#1dd5e6);
  transition: .3s;
  font-weight: 700;
}
#loadMore:hover {
  color: #fff;
  background: linear-gradient(135deg,#1dd5e6,#19519e);
  text-decoration: none;
}
.noContent {
  color: #000 !important;
  background-color: transparent !important;
  pointer-events: none;
  background: none !important;
}
</style>

<script language="javascript">
$(document).ready(function(){
  $(".content").slice(0, 6).show();
  $("#loadMore").on("click", function(e){
    e.preventDefault();
    $(".content:hidden").slice(0, 6).slideDown();
    if($(".content:hidden").length == 0) {
      $("#loadMore").text("").addClass("noContent");
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
<section id="mytraining">
	<div class="container">
		<div class="row">
    <?php if(!empty($content->photo2)){ ?>
         <h1><?php echo $content->heading ?></h1>
         <?php } ?>
			<div class="col-sm-9 mtrainingtext">
            	<!-- <div class="col-md-12"><?=$content->content?></div> -->
                <div class="flex">
                <?php foreach($news as $news){ ?>
                <div class="col-md-4 text-center content" style="height:180px;">
                	<a href="<?php echo Yii::app()->createUrl("main/news",array("url"=>$news->url)); ?>" style="color:#333;"><?=$news->heading?></a><br>
					<a href="<?php echo Yii::app()->createUrl("main/news",array("url"=>$news->url)); ?>" style="color:#333;"><b>Detail</b></a>
                </div>
                <?php } ?>	
				</div>	
				<a href="#" id="loadMore">Load More</a>		
			</div>
			<div class="col-sm-3 mtrainingright">
				<?php require_once Yii::getPathOfAlias('webroot').'/protected/modules/main/views/rightbar.php'; ?>
        	</div>
		</div>
	</div>
</section>

