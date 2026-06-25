<div class="col-lg-12">
	<div id="success-alert" class="alert alert-success" style="display:none"></div>
	<div id="danger-alert" class="alert alert-danger" style="display:none"></div>

	<section class="panel">
		<header class="panel-heading">Add New Demo</header>
		<div class="panel-body">
			<form method="POST" class="form-horizontal " id="" action="<?php echo Yii::app()->createUrl("octa/demos/add");?>" enctype="multipart/form-data">
				<div class="form-group">
					<label class="col-lg-3 control-label">Certificatione</label>
					<div class="col-lg-6">
						<select class="form-control selectpicker" id="cert"  name="cert" data-live-search="true" required="required">
							<option value="null">Please Select Cert</option>
							<?php foreach($exam as $exams) {  ?>
							<option value="<?php echo $exams->id; ?>"><?php echo $exams->code ?></option>
							<?php } ?>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-3 control-label">Name</label>
					<div class="col-lg-7">
						<div class="compose-editor">
							<input type="text" class="form-control" name="name" id="name" placeholder="Name">
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-3 control-label">Demo Link</label>
					<div class="col-lg-7">
						<div class="compose-editor">
							<input type="text" class="form-control" name="demolink" id="demolink1" placeholder="Demo Link 1" required>
						</div>
					</div>
				</div>

				

				<div class="form-group">
					<label class="col-lg-3 control-label">Yout Tube ID</label>
					<div class="col-lg-7">
						<div class="compose-editor">
							<input type="text" class="form-control" name="youtubeid" id="youtubeid" placeholder="Youtube ID" required>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-3 control-label">Type</label>
					<div class="col-lg-7">
						<div class="compose-editor">
							<select class="form-control" name="type" required>
								<option value="1">Demo</option>
								<option value="2">Review</option>
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
