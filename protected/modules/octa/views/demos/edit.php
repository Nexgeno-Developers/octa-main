<div class="col-lg-12">
	<div id="success-alert" class="alert alert-success" style="display:none"></div>

	<section class="panel">
		<header class="panel-heading">Edit Demo</header>
		<div class="panel-body">
			<form method="POST" class="form-horizontal " id="" action="<?php Yii::app()->createUrl("octa/demnos/edit");?>">
				<div class="form-group">
					<label class="col-lg-3 control-label">Exam Code</label>
					<div class="col-lg-6">
						<select class="form-control selectpicker" id="exam"  name="exam" data-live-search="true" required="required">
							<option value="null">Please Select Exam</option>
							<?php foreach($exam as $exams){if($testi->cert_id==$exams->id){ ?>
							<option value="<?php echo $exams->id; ?>" selected="selected"><?php echo $exams->code ?></option>
							<?php } else {  ?>
							<option value="<?php echo $exams->id; ?>"><?php echo $exams->code ?></option>
							<?php }} ?>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-3 control-label">Demo Link</label>
					<div class="col-lg-7">
						<div class="compose-editor">
							<input class="form-control" name="demolink" id="demolink" value="<?php echo $testi->demolink; ?>">
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-3 control-label">Name</label>
					<div class="col-lg-7">
						<div class="compose-editor">
							<input class="form-control" name="name" id="name" value="<?php echo $testi->name; ?>">
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-3 control-label">Yout Tube ID</label>
					<div class="col-lg-7">
						<div class="compose-editor">
							<input class="form-control" name="youtubeid" id="youtubeid" value="<?php echo $testi->youtubeid; ?>">
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-3 control-label">Type</label>
					<div class="col-lg-7">
						<div class="compose-editor">
							<select class="form-control" name="type" required>
								
								<option value="1" <?php if($testi->type == 1){ ?> selected="selected" <?php } ?>>Demo</option>
								<option value="2" <?php if($testi->type == 2){ ?> selected="selected" <?php } ?>>Review</option>
								
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
