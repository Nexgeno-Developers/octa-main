<section class="inner-banner">
	<div class="container">
		<h1><?php echo $contenttitle?></h1>
	</div>
</section>



<section id="mytraining">
	<div class="container">
		<div class="row">
			<div class="col-sm-9 mtrainingtext">
				<div class="col-sm-12">
					<?php echo $content; ?>
				</div>
			</div>
        	<div class="col-sm-3 mtrainingright">
				<?php require_once Yii::getPathOfAlias('webroot').'/protected/modules/main/views/rightbar.php'; ?>
        	</div>
		</div>
	</div>
</section>

