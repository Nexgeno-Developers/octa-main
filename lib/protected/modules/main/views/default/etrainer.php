<style>
    h2.sub-head {
    font-family: OctaSans,Arial,sans-serif !important;
    font-size: 20px;
    line-height: 44px;
    color: #303030;
    margin: 0;
    position: relative;
    padding: 10px 0px 0px;
    display: inline-block;
    margin-bottom: 2%;
}
</style>



<main class="octanetwork-experts">
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
      <h4 class="inner_banner_headings"><?php echo $content->heading ?></h4>
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
<!--
   <section id="exp-octa">
         <div class="container">
           <div class="row">
           
           <ul id="amoteam-sc-member-1357850759" class="amoteam-sc-team amoteam-tiles expert-octa-list">
   <?php $tcounter = 0; foreach($trainers as $ccies){ $tcounter++; ?>
   	<li class="amoteam-tiles__item">
        <div class="amoteam-member">
        <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModaltrainer<?=$tcounter?>"><div class="amoteam-member-hover-icon "><i class="fa fa-info"></i></div></a>
                   <div class="amoteam-member-info amoteam-member-info--al-right ">
                       <div class="amoteam-member-name amoteam-member-info__item "><?=$ccies->name?></div>
                       <div class="amoteam-member-subtitle amoteam-member-info__item"><?=$ccies->lab?></div>
                   </div>
                   <div class="amoteam-member-img-wrap">
                       <img class="amoteam-member-img" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/trainer/<?=$ccies->image?>" alt="<?=$ccies->name?>"></div>
               </div>
           
       </li>
   <?php } ?>
   </ul>
   
   
   <?php $tcounter = 0; foreach($trainers as $ccies){ $tcounter++; ?>
   <div class="modal fade" id="myModaltrainer<?=$tcounter?>">
       <div class="modal-dialog modal-lg modal-lg">
           <div class="modal-content">
   
            
               <div class="modal-body trainer-model-box">
   
                   <div class="modalContent">
                       <div class="modalContent__content" data-dojo-attach-point="formContentContainer">
   
                           <div class="modal-header">
                               <a href="#" data-dismiss="modal" class="trainer-close pull-right close"><span aria-hidden="true">x</span></a>
   
                           </div>
   
   						<div class="block-content">
   							<h3 class="amoteam-panel__title amoteam-panel__heading-item"><?=$ccies->name?></h3>
                           	<div class="amoteam-panel__subtitle amoteam-panel__heading-item"><?=$ccies->lab?></div>
   						</div>
   						<div class="content__titleDescription" data-dojo-attach-point="descriptionContainer">
   							<div class="trainer-img-popup"><img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/trainer/<?php echo $ccies->image; ?>" class="popimg">
   								<p><?php echo $ccies->detail; ?></p>
   							</div>
                           </div>
   
                           <div class="content__footer" data-dojo-attach-point="footerContainer"></div>
                       </div>
                   </div>
               </div>
   
           </div>
       </div>
   </div>
   <?php } ?>
   
   
   		
           
             
           </div>
   
   
         </div>
       </section>-->
<section class="about_4 common network_experts" style="background: #fff;">
   <!--<div class="text-center"> <h2 class="about-head">Technical Team</h2></div>-->
   <div class="container">
      <?php if(!empty($content->photo2)){ ?>
      <h1 class="head-11"><?php echo $content->heading ?></h1>
      <?php } ?>
 
      <h1 class="subb-head-1 sub-head1">CCNA & CCNP & CCIE Certified Trainers</h1>
      <ul id="amoteam-sc-member-1357850759" class="amoteam-sc-team amoteam-tiles amoteam-tile-style-1_1 amoteam-tile-style-1 amoteam-visible wookmark-initialised">
         <?php $tcounter = 100; foreach($ccietrainers as $trainer){ $tcounter++; ?>
         <li class="amoteam-tiles__item text-center">
            <div class="octa-member">
               <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModaltrainerRIGHT<?=$tcounter?>">
               <img class="amoteam-member-img" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/trainer/<?=$trainer->image?>" alt="<?=$trainer->name?>"></a>
               <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModaltrainerRIGHT<?=$tcounter?>">
                  <h4 class="experts-name"><?=$trainer->name?></h4>
                  <span class="designation"><?=$trainer->lab?></span>	
               </a>
            </div>
         </li>
         <?php } ?>
      </ul>
      <?php $tcounter = 100; foreach($ccietrainers as $ccies){ $tcounter++; ?>
      <div class="modal fade responsive-model" id="myModaltrainerRIGHT<?=$tcounter?>" tabindex="-1" role="dialog" aria-labelledby="myModaltrainerRIGHT<?=$tcounter?>">
         <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content res-content">
               <div class="modal-header">
                  <div class="col-md-12">
                     <h4 class="trainer-h">CCIE Certified Trainers</h4>
                  </div>
                  <a href="#" data-dismiss="modal" class="trainer-close pull-right close"><span aria-hidden="true">x</span></a>
               </div>
               <div class="modal-body">
                  <div class="col-lg-5 col-md-12 img-block">
                     <div class="amoteam-panel__img-wrap">
                        <img class="amoteam-panel__img" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/trainer/<?=$ccies->image?>" data-src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/trainer/<?=$ccies->image?>" alt="<?=$ccies->name?>">
                        <h3><b><?=$ccies->name?></b></h3>
                        <div><?=$ccies->lab?></div>
                     </div>
                  </div>
                  <div class="col-lg-7 col-md-12 content-block">
                     <p><?=$ccies->detail?></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php } ?>
      
       <ul id="amoteam-sc-member-1357850759" class="amoteam-sc-team amoteam-tiles amoteam-tile-style-1_1 amoteam-tile-style-1 amoteam-visible wookmark-initialised">
         <?php $tcounter = 200; foreach($ccnaccnptrainers as $trainer){ $tcounter++; ?>
         <li class="amoteam-tiles__item text-center">
            <div class="octa-member">
               <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModaltrainerRIGHT<?=$tcounter?>">
               <img class="amoteam-member-img" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/trainer/<?=$trainer->image?>" alt="<?=$trainer->name?>"></a>
               <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModaltrainerRIGHT<?=$tcounter?>">
                  <h4 class="experts-name"><?=$trainer->name?></h4>
                  <span class="designation"><?=$trainer->lab?></span>	
               </a>
            </div>
         </li>
         <?php } ?>
      </ul>
      <?php $tcounter = 200; foreach($ccnaccnptrainers as $ccies){ $tcounter++; ?>
      <div class="modal fade responsive-model" id="myModaltrainerRIGHT<?=$tcounter?>" tabindex="-1" role="dialog" aria-labelledby="myModaltrainerRIGHT<?=$tcounter?>">
         <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content res-content">
               <div class="modal-header">
                  <div class="col-md-12">
                     <h4 class="trainer-h">CCIE Certified Trainers</h4>
                  </div>
                  <a href="#" data-dismiss="modal" class="trainer-close pull-right close"><span aria-hidden="true">x</span></a>
               </div>
               <div class="modal-body">
                  <div class="col-lg-5 col-md-12 img-block">
                     <div class="amoteam-panel__img-wrap">
                        <img class="amoteam-panel__img" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/trainer/<?=$ccies->image?>" data-src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/trainer/<?=$ccies->image?>" alt="<?=$ccies->name?>">
                        <h3><b><?=$ccies->name?></b></h3>
                        <div><?=$ccies->lab?></div>
                     </div>
                  </div>
                  <div class="col-lg-7 col-md-12 content-block">
                     <p><?=$ccies->detail?></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php } ?>
      
      <ul id="amoteam-sc-member-1357850759" class="amoteam-sc-team amoteam-tiles amoteam-tile-style-1_1 amoteam-tile-style-1 amoteam-visible wookmark-initialised">
         <?php $tcounter = 300; foreach($othertrainers as $trainer){ $tcounter++; ?>
         <li class="amoteam-tiles__item text-center">
            <div class="octa-member">
               <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModaltrainerRIGHT<?=$tcounter?>">
               <img class="amoteam-member-img" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/trainer/<?=$trainer->image?>" alt="<?=$trainer->name?>"></a>
               <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModaltrainerRIGHT<?=$tcounter?>">
                  <h4 class="experts-name"><?=$trainer->name?></h4>
                  <span class="designation"><?=$trainer->lab?></span>	
               </a>
            </div>
         </li>
         <?php } ?>
      </ul>
      <?php $tcounter = 300; foreach($othertrainers as $ccies){ $tcounter++; ?>
      <div class="modal fade" id="myModaltrainerRIGHT<?=$tcounter?>" tabindex="-1" role="dialog" aria-labelledby="myModaltrainerRIGHT<?=$tcounter?>">
         <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content res-content">
               <div class="modal-header">
                  <div class="col-md-12">
                     <h4 class="trainer-h">CCIE Certified Trainers</h4>
                  </div>
                  <a href="#" data-dismiss="modal" class="trainer-close pull-right close"><span aria-hidden="true">x</span></a>
               </div>
               <div class="modal-body">
                  <div class="col-lg-5 col-md-12 img-block">
                     <div class="amoteam-panel__img-wrap">
                        <img class="amoteam-panel__img" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/trainer/<?=$ccies->image?>" data-src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/trainer/<?=$ccies->image?>" alt="<?=$ccies->name?>">
                        <h3><b><?=$ccies->name?></b></h3>
                        <div><?=$ccies->lab?></div>
                     </div>
                  </div>
                  <div class="col-lg-7 col-md-12 content-block">
                     <p><?=$ccies->detail?></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php } ?>
   </div>
</section>
</main>