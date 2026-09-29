<section class="inner-banner">
	<div class="container">
		<h1><?php echo $content->heading ?></h1>
	</div>
</section>

<section id="mytraining">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 mtrainingtext">
				<div class="col-sm-12">
        			<?php echo $content->content ?>
				</div>
			</div>
			<div class="col-sm-4 mtrainingright">
				<?php require_once Yii::getPathOfAlias('webroot').'/protected/modules/main/views/training/rightbar.php'; ?>
			</div>
		</div>
	</div>
</section>
