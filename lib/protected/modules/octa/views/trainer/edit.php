<div class="col-lg-12">
	<div id="success-alert" class="alert alert-success" style="display:none"></div>

	<section class="panel">
		<header class="panel-heading">Edit Trainer</header>
		<div class="panel-body">
			<form method="POST" class="form-horizontal " id="" action="<?php Yii::app()->createUrl("octa/trainer/edit");?>" enctype="multipart/form-data">
				<div class="form-group">
					<label class="col-lg-3 control-label">Trainer Name</label>
					<div class="col-lg-6">
						<input class="form-control" name="name" id="name" value="<?php echo $testi->name; ?>">
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-3 control-label">Lab</label>
					<div class="col-lg-7">
						<div class="compose-editor">
							<input class="form-control" name="lab" id="lab" value="<?php echo $testi->lab; ?>">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label">Type</label>
					<div class="col-lg-7">
						<div class="compose-editor">
							<input class="form-control" name="type" id="type" value="<?php echo $testi->type; ?>">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label">Image Preview</label>
					<div class="col-lg-7">
						<div class="compose-editor">
							<img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/trainer/<?php echo $testi->image;?>" />
						</div>
					</div>
				</div>
                
                <div class="form-group">
					<label class="col-lg-3 control-label">Image</label>
					<div class="col-lg-7">
						<div class="compose-editor">
							<input type="file" class="form-control" name="photo" id="photo">
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-3 control-label">Detail</label>
					<div class="col-lg-7">
						<div class="compose-editor">
							<textarea class="form-control ckeditor" name="description" id="description" rows="9"><?php echo $testi->detail; ?></textarea>
						</div>
					</div>
				</div>
                
                <div class="form-group">
					<label class="col-lg-3 control-label">Facebook</label>
					<div class="col-lg-7">
						<div class="compose-editor">
							<input type="text" class="form-control" name="facebook" id="facebook" value="<?php echo $testi->facebook; ?>">
						</div>
					</div>
				</div>
                
                <div class="form-group">
					<label class="col-lg-3 control-label">Linkedin</label>
					<div class="col-lg-7">
						<div class="compose-editor">
							<input type="text" class="form-control" name="linkedin" id="linkedin" value="<?php echo $testi->linkedin; ?>">
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-3 control-label">Is Home</label>
					<div class="col-lg-7">
						<div class="compose-editor">
							<select class="form-control" name="is_home">
								<?php if($testi->is_home == 0){ ?>
								<option value="0" selected>No</option>
								<option value="1">Yes</option>
								<?php }else{ ?>
								<option value="0">No</option>
								<option value="1" selected>Yes</option>
								<?php } ?>
							</select>
						</div>
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
