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


<section id="team">
      <div class="container">
        <div class="row">
        <div id="" class=" owl-theme">
        <?php if(!empty($content->photo2)){ ?>
         <h1><?php echo $content->heading ?></h1>
         <?php } ?>
        	<?php foreach($trainers as $trainer){ ?>
            <div class="col-lg-3">
             <div class="">
              <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/trainer/<?=$trainer->image?>" class="img-fluid" alt="<?=$trainer->name?>">
              <div class="member-info">
                <div class="member-info-content">
                  <h4><?=$trainer->name?></h4>
                  <span><?=$trainer->lab?></span>
                  <div class="social">
                    <a href="<?=$trainer->facebook?>"><i class="fa fa-facebook"></i></a>
                    <a href="<?=$trainer->linkedin?>"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
            </div>
            <?php } ?>
          </div>
          
        </div>


      </div>
    </section>

