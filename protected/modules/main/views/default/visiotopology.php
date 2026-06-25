
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

<section id="product-info">
	<div class="text-center">
	<?php if(!empty($content->photo2)){ ?>
         <h1 class="inner_headings1" style="padding-bottom:0px !important"><?php echo $content->heading ?></h1>
         <?php } ?>
		</div>
	 
    <div class="container">
	        <div class="resume_main">
	            <div class="resume_boxex">
	                <div class="row">
	                    
    	                    <div class="col-md-6">
    	                         <div class="resume_section">
        	                         <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/visio_topology/ccnp_visio_topology.jpg">
        	                         <a class="resume_btn" href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/visio_topology/ccna_topology.vsdx" download> Download CCNP EI Visio Topology <i class="fa fa-download"></i></a>
    	                         </div>
    	                    </div>
    	                    
    	                    <div class="col-md-6">
    	                         <div class="resume_section">
        	                         <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/visio_topology/ccnp_collab_visio_topology.png">
        	                         <a class="resume_btn" href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/visio_topology/ccnp_collab.png.vsdx" download> Download CCNP Collab Visio Topology <i class="fa fa-download"></i></a>
    	                         </div>
    	                    </div>
    	                    
	                </div>
	            </div>	 
	        </div>           
	   </div>

		</div>
	</div>
	<div style="clear:both;"></div>
</section>