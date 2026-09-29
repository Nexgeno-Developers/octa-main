<div class="col-lg-12">
	<div id="success-alert" class="alert alert-success" style="display:none"></div>

	<section class="panel">
		<header class="panel-heading">Edit Stories</header>
		<div class="panel-body">
			<form method="POST" class="form-horizontal " id="" action="<?php Yii::app()->createUrl("octa/scrollstories/edit");?>">
				<div class="form-group">
					<label class="col-lg-3 control-label">Product</label>
					<div class="col-lg-6">
						<select class="form-control selectpicker" id="exam"  name="exam" data-live-search="true" required="required">
							<option value="null">Please Select Product</option>
							<?php foreach($exam as $exams){if($testi->cert_id==$exams->id){ ?>
							<option value="<?php echo $exams->id; ?>" selected="selected"><?php echo $exams->code ?></option>
							<?php } else {  ?>
							<option value="<?php echo $exams->id; ?>"><?php echo $exams->code ?></option>
							<?php }} ?>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-3 control-label">Content</label>
					<div class="col-lg-7">
						<div class="compose-editor">
							<textarea class="form-control ckeditor" name="description" id="description" rows="9"><?php echo $testi->stories; ?></textarea>
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
					<div class="col-lg-offset-3 col-lg-6">
						<button class="btn btn-primary" type="submit">Submit</button>
					</div>
				</div>
			</form>
		</div>
	</section>
</div>
