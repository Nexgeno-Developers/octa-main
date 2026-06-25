<?php
$venId = $cert->vendor->id;
$venName = $cert->vendor->name;
$certName = $cert->name;
		//var_dump($cert->exam);		 
?>

<style>
    .item .site-logo-inner {
    border-radius: 8px;
    padding: 10px 10px 10px 10px;
    text-align: center;
    margin-bottom: 20px;
    min-height: 350px;
    width: 70%;
    margin-left: auto;
    margin-right: auto;
    display: block;
}
</style>

<?php 
if(!empty($cert->cbackground)){
	$imgPath = Yii::app()->request->getBaseUrl(true) . '/img/cbackground/'.$cert->cbackground;
	$imgPath_re = Yii::app()->request->getBaseUrl(true) . '/img/cbackground/'.$cert->cbackground_re; 
	?>
	<picture>
   <?php if(!empty($imgPath_re)){   ?>
   <source srcset="<?=$imgPath_re?>" media="(max-width: 468px)">
   <?php } ?>
   <?php if(!empty($imgPath_re)){   ?>
   <source srcset="<?=$imgPath_re?>" media="(max-width: 967px)">
   <?php } ?>
   <?php if(!empty($imgPath)){  ?>
   <source srcset="<?=$imgPath?>">
   <img class="slide-image"  src="<?=$imgPath?>" alt="<?=$certName?>" >
   <?php } ?>
</picture>
	<?php
}else{
	$imgPath = Yii::app()->request->getBaseUrl(true) . '/img/vbackground/default-bg.jpg';
	?>
<section class="inner-banner" style="background-image: url(<?=$imgPath?>);">
	<div class="container">
		<h1><?=$certName?></h1>
	</div>
</section>
<?php }

?>

<section class="breadcrumb">
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>"><i class="fa fa-home"></i></a></li>
		  <li><a href="<?php echo Yii::app()->createUrl("main/vendor",array("url"=>$cert->vendor->url)); ?>"><?php echo $cert->vendor->name; ?></a></li>
		  <li class="active"><?php echo $cert->name; ?></li>
		</ol>
	</div>
</section>

<section id="Inner-Body-pg">
      <div class="container all-users-listing">
        
        <div class="row">
		<?php 
		
		foreach ($cert->exam as $exams) {                     
		if($exams->status == 1){
		?> 
          <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 chatpopup wid_div" data-order="<?php echo $exams->exam_order;?>">
            <div class="box">
              <div class="item">
                <div class="site-logo-inner">
                <a href="<?php echo Yii::app()->createUrl("main/exam",array("url"=>$exams->url));?>"><img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/exam/<?=$exams->image?>" alt="<?=$exams->code?>" class="item-logo-img"></a>
                <h4><a href="<?php echo Yii::app()->createUrl("main/exam",array("url"=>$exams->url));?>"><?=$exams->code?></a></h4>
                <a href="<?php echo Yii::app()->createUrl("main/exam",array("url"=>$exams->url));?>" class="btn btn-sm btn-default btn-block btn-courses">Details</a>
                </div>
                </div>
            </div>
          </div>
        <?php }} ?>  
        </div>
      </div>
    </section>
		<script>
/*chat user list sort by sort-id*/
var $user_wrapper = $('.all-users-listing');
$user_wrapper.find('.chatpopup').sort(function(a, b) {
    return +a.getAttribute('data-order') - +b.getAttribute('data-order');
})
.appendTo($user_wrapper);
</script>
