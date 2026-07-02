<?php 
if(!empty($vendor->vbackground)){
	$imgPath = Yii::app()->request->getBaseUrl(true) . '/img/vbackground/'.$vendor->ebackground;
}else{
	$imgPath = Yii::app()->request->getBaseUrl(true) . '/img/vbackground/default-bg.jpg';
}

?>

<section class="inner-banner" style="background-image: url(<?=$imgPath?>);">
	<div class="container">
		<h1><?php echo $vendor->ctitle; ?></h1>
	</div>
</section>

<section class="breadcrumb">
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>">Home</a></li>
  			<li><?php echo $vendor->name; ?></li>
		</ol>
	</div>
</section>

<section id="about">
	<div class="container">
		<div class="row">
		<?php foreach($vendor->cert as $certs) {
		if($certs->status == 1){
		?> 
          <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="item">
                <div class="site-logo-inner">
                <a href="<?php echo Yii::app()->createUrl("main/cert",array("url"=>$certs->url));?>">
                	<img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/cert/<?=$certs->image?>" alt="<?=$certs->name?>" class="item-logo-img">
                </a>
                <h4><a href="<?php echo Yii::app()->createUrl("main/cert",array("url"=>$certs->url));?>"><?=$certs->name?></a></h4>
                <a href="<?php echo Yii::app()->createUrl("main/cert",array("url"=>$certs->url));?>" class="btn btn-sm btn-default btn-block btn-courses">Details</a>
                </div>
                </div>
            </div>
          </div>
        <?php }} ?>  
        </div>
      </div>
    </section>