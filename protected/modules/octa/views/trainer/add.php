<div class="col-lg-12">
	<div id="success-alert" class="alert alert-success" style="display:none"></div>
	<div id="danger-alert" class="alert alert-danger" style="display:none"></div>

	<section class="panel">
		<header class="panel-heading">Add New Trainer</header>
		<div class="panel-body">
			<form method="POST" class="form-horizontal " id="" action="<?php echo Yii::app()->createUrl("octa/trainer/add");?>" enctype="multipart/form-data">
				<div class="form-group">
					<label class="col-lg-3 control-label">Trainer Name</label>
					<div class="col-lg-6">
						<input type="text" class="form-control" name="name" id="name" placeholder="Trainer Name" required>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-3 control-label">Lab</label>
					<div class="col-lg-7">
						<div class="compose-editor">
							<input type="text" class="form-control" name="lab" id="lab" placeholder="CCIE SECURITY #54008" required>
						</div>
					</div>
				</div>
                
                <div class="form-group">
					<label class="col-lg-3 control-label">Type</label>
					<div class="col-lg-7">
						<div class="compose-editor">
							<input type="text" class="form-control" name="type" id="type" placeholder="Master Trainer" required>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-3 control-label">Detail</label>
					<div class="col-lg-7">
						<div class="compose-editor">
							<textarea class="form-control ckeditor" name="description" id="description" rows="9"></textarea>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-3 control-label">Image</label>
					<div class="col-lg-7">
						<div class="compose-editor">
							<input type="file" class="form-control" name="photo" id="photo" required>
						</div>
					</div>
				</div>
                
                <div class="form-group">
					<label class="col-lg-3 control-label">Facebook</label>
					<div class="col-lg-7">
						<div class="compose-editor">
							<input type="text" class="form-control" name="facebook" id="facebook" placeholder="facebook link" required>
						</div>
					</div>
				</div>
                
                <div class="form-group">
					<label class="col-lg-3 control-label">Linkedin</label>
					<div class="col-lg-7">
						<div class="compose-editor">
							<input type="text" class="form-control" name="linkedin" id="linkedin" placeholder="Linkedin link" required>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-3 control-label">Is Home</label>
					<div class="col-lg-7">
						<div class="compose-editor">
							<select class="form-control" name="is_home">
								<option value="0">No</option>
								<option value="1">Yes</option>
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
