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
<div class="main_nec">
<section id="mytraining">
	<div class="container">
		<div class="row">
			<div class="col-sm-9 mtrainingtext">
			<?php if(!empty($content->photo2)){ ?>
         <h1><?php echo $content->heading ?></h1>
         <?php } ?>
				<div class="col-sm-12">
					<?php echo $content->content; ?>
                    
                    <?php foreach($allNews as $news){
						$newsfdate = $news->date_added;
						$odate = date("d", strtotime($newsfdate))."\n"; 
						$omonth = date("M y", strtotime($newsfdate))."\n"; 
						
						 ?>
                	<div class="col-lg-12 newsone">
                    	<div class="col-lg-2 fdatebox">
                        	<div class="ndate"><?=$odate?></div>
                            <div class="nmonth"><?=$omonth?></div>
                        </div>
                        <div class="col-lg-10">
                        	<p><a href="<?php echo Yii::app()->createUrl("main/news",array("url"=>$news->url)); ?>"><?=$news->heading?></a></p>
							<p><a href="<?php echo Yii::app()->createUrl("main/news",array("url"=>$news->url)); ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/next-arrow.png" alt="<?=$news->heading?>" /></a></p>
                        </div>
                    </div>
                	<?php } ?>
				</div>
				<div id="" class=" owl-theme">
        	
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-12 mtrainingright">
							<?php require_once Yii::getPathOfAlias('webroot').'/protected/modules/main/views/rightbar.php'; ?>
        </div>

        </div>
		</div>
	</div>
</section>

