<div class="col-lg-12">
	<div id="success-alert" class="alert alert-success" style="display:none"></div>
	<div id="danger-alert" class="alert alert-danger" style="display:none"></div>

	<section class="panel">
		<header class="panel-heading">Add New Stories</header>
		<div class="panel-body">
			<form method="POST" class="form-horizontal " id="" action="<?php echo Yii::app()->createUrl("octa/stories/add");?>" enctype="multipart/form-data">
				

				<div class="form-group">
					<label class="col-lg-3 control-label">Name</label>
					<div class="col-lg-7">
						<div class="compose-editor">
							<input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
						</div>
					</div>
				</div>
                
                <div class="form-group">
					<label class="col-lg-3 control-label">Expert</label>
					<div class="col-lg-7">
						<div class="compose-editor">
							<input type="text" class="form-control" name="expert" id="expert" placeholder="CCIE Security #61744" required>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-3 control-label">Content</label>
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
					<div class="col-lg-offset-3 col-lg-6">
						<button class="btn btn-primary" type="submit">Submit</button>
					</div>
				</div>
			</form>
		</div>
	</section>
</div>
