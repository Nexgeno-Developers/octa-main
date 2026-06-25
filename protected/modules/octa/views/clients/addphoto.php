<div class="col-lg-12">
<?php 
$msg = Yii::app()->request->getParam('msg');
if(!empty($msg) and $msg == 1){  ?>
	<div id="success-alert" class="alert alert-success">Record has been added successfully.</div>
<?php } ?>
<?php if(!empty($msg) and $msg == 0){?> 
	<div id="danger-alert" class="alert alert-danger">Error</div>
<?php } ?>

<section class="panel">
	<header class="panel-heading">Add Photo</header>
	<div class="panel-body">
	
    <form method="POST" class="form-horizontal " enctype="multipart/form-data" action="<?php echo Yii::app()->createUrl("octa/clients/addphoto");?>">
		<div class="form-group">
			<label class="col-lg-3 control-label">Alt Text</label>
			<div class="col-lg-6">
				<input class="form-control" type="text" id="alt"  name="alt" required="required">
			</div>
		</div>

		<div class="form-group">
			<label class="col-lg-3 control-label">Image:</label>
				<div class="col-lg-6">
					<input type="file" class="form-control" name="photo" />
				</div>
		</div>

		<div class="form-group">
			<div class="col-lg-offset-3 col-lg-6">
				<button class="btn btn-primary" type="submit">Submit</button>
			</div>
		</div>
	</form>
	</div>
</section>
</div>

