<?php

$mType = Yii::app()->request->getParam("type");
if($mType == 1){ $alertClass = "alert-success";}else{$alertClass = "alert-danger";}

$msg = "<font color='green'>You have successfully subscribed!</font>";
Yii::app()->user->setState("fmessage", $msg);

 ?>

<section class="inner-banner">
<div class="container">
<h1><?php echo $content->heading ?></h1>
</div>
</section>

<section id="product-info">
	<div class="container">
		<div class="tab-content" id="myTabContent">
			<div class="text-center alert <?=$alertClass?>"><span style="font-size: 22px;font-weight: 600;"><?php echo Yii::app()->user->getState("fmessage"); ?></span></div><br><br><br>

			<h4 class="text-center" ><a class="btn btn-info" href="<?php echo Yii::app()->request->getBaseURL(true);?>">Back to Home</a></h4>
			<?php Yii::app()->user->setState("fmessage", null); ?>

			<p class="text-align:center"><?php echo $content->content ?></p>
		</div>
	</div>
</section>