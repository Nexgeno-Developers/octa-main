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
<style>
.tab-content p{
	text-align:center !important;
}
section#product-info {
    padding: 35px 0px 45px 0px !important;
}
section#product-info h1 {
    font-weight: bold;
    color: #333 !important;
	text-align:center !important;
}
section.inner-banner {
    display: none;
}

@media(min-width:768px) and (max-width:991px){
.col-xs-offset-3 {
    margin-left: 32%;
}
}
@media(min-width:1200px){
section#product-info {
    padding: 90px 0px 90px 0px !important;
}
}
</style>
<section id="product-info">
	<div class="container">
	<div class="text-center">
	
	<?php 
	if(!empty($content->photo2)){ ?>
         <h1><?php echo $content->heading ?></h1>
         <?php } ?>
		<div class="tab-content">
			<?php //echo $content->content ?>  
			<?php
                // Get query parameters from URL
                $name = Yii::app()->request->getQuery('name') ?? 'User';
                $course = Yii::app()->request->getQuery('course') ?? '';
                // $whatsapp_no = Yii::app()->request->getQuery('whatsapp_no');
                // $phone = Yii::app()->request->getQuery('phone');
                
                // Define placeholder replacements
                $replacements = [
                    '[ClientName]' => $name,
                    '[CourseName]' => $course,
                    // '[Insert WhatsApp Number]' => $whatsapp_no,
                    '[InsertWhatsAppNumber]' => "+918976676689",
                    // '[Insert Phone Number]' => $phone
                    '[InsertPhoneNumber]' => "+918976676689"
                ];
                
                // Replace placeholders in content
                $finalContent = str_replace(array_keys($replacements), array_values($replacements), $content->content);
                
                // Output the final content
                echo $finalContent;
            ?>

		</div>
	</div>
	</div>
</section>