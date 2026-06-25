<section class="inner-banner">
	<div class="container">
		<h1>Thank you for your interest</h1>
	</div>
</section>


<?php

$mType = Yii::app()->request->getParam("type");

if($mType == 1){ $alertClass = "alert-success";}else{$alertClass = "alert-danger";}

 ?>


<section id="product-info">
	<div class="container">
	<?php if(!empty($content->photo2)){ ?>
         <h1><?php echo $content->heading ?></h1>
         <?php } ?>
		<div class="tab-content" id="myTabContent">
			<div class="text-center alert <?=$alertClass?>"><span style="font-size: 22px;font-weight: 600;"><?php echo Yii::app()->user->getState("fmessage"); ?></span></div><br><br><br>

			<h4 class="text-center" ><a class="btn btn-info" href="<?php echo Yii::app()->request->getBaseURL(true);?>">Back to Home</a></h4>
			<?php Yii::app()->user->setState("fmessage", null); ?>
		</div>
	</div>
</section>