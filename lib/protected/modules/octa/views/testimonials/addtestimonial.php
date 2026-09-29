<div class="col-lg-12">
	<div id="success-alert" class="alert alert-success" style="display:none"></div>
	<div id="danger-alert" class="alert alert-danger" style="display:none"></div>

	<section class="panel">
		<header class="panel-heading">Add New Testimonial</header>
		<div class="panel-body">
			<form method="POST" class="form-horizontal " id="" action="<?php echo Yii::app()->createUrl("octa/testimonials/addtestimonial");?>" enctype="multipart/form-data">
				<div class="form-group">
					<label class="col-lg-3 control-label">Exam Code</label>
					<div class="col-lg-6">
						<select class="form-control selectpicker" id="exam"  name="exam" data-live-search="true" required="required">
							<option value="null">Please Select Exam</option>
							<?php foreach($exam as $exams) {  ?>
							<option value="<?php echo $exams->id; ?>"><?php echo $exams->code ?></option>
							<?php } ?>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-3 control-label">Customer Name</label>
					<div class="col-lg-7">
						<div class="compose-editor">
							<input type="text" class="form-control" name="name" id="name" placeholder="Customer Name" required>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-3 control-label">Testimonial</label>
					<div class="col-lg-7">
						<div class="compose-editor">
							<textarea class="form-control ckeditor" name="description" id="description" rows="9"></textarea>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-3 control-label">Rating</label>
					<div class="col-lg-7">
						<div class="compose-editor">
							<select name="rating" class="form-control">
								<?php for($i=5; $i>0; $i--){ ?>
								<option value="<?=$i?>"><?=$i?></option>
								<?php } ?>
							</select>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-3 control-label">Is Home?</label>
					<div class="col-lg-7">
						<div class="compose-editor">
							<select name="is_home" class="form-control">
								<option value="0">No</option>
								<option value="1">Yes</option>
							</select>
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
					<label class="col-lg-3 control-label">Date</label>
					<div class="col-lg-7">
						<div class="compose-editor">
							<input type="text" name="date" class="datepicker form-control" />
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
