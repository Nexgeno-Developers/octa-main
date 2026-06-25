<div class="col-lg-12">
	<div id="success-alert" class="alert alert-success" style="display:none"></div>

	<section class="panel">
		<header class="panel-heading">Edit Testimonials</header>
		<div class="panel-body">
			<form method="POST" class="form-horizontal " id="" action="<?php Yii::app()->createUrl("octa/testimonials/edit");?>">
				<div class="form-group">
					<label class="col-lg-3 control-label">Exam Code</label>
					<div class="col-lg-6">
						<select class="form-control selectpicker" id="exam"  name="exam" data-live-search="true" required="required">
							<option value="null">Please Select Exam</option>
							<?php foreach($exam as $exams){if($testi->exam_id==$exams->id){ ?>
							<option value="<?php echo $exams->id; ?>" selected="selected"><?php echo $exams->code ?></option>
							<?php } else {  ?>
							<option value="<?php echo $exams->id; ?>"><?php echo $exams->code ?></option>
							<?php }} ?>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-3 control-label">Customer Name</label>
					<div class="col-lg-7">
						<div class="compose-editor">
							<input class="form-control" name="name" id="name" value="<?php echo $testi->name; ?>">
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-3 control-label">Testimonial</label>
					<div class="col-lg-7">
						<div class="compose-editor">
							<textarea class="form-control ckeditor" name="description" id="description" rows="9"><?php echo $testi->content; ?></textarea>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-3 control-label">Rating</label>
					<div class="col-lg-7">
						<div class="compose-editor">
							<select name="rating" class="form-control">
								<?php for($i=5; $i>0; $i--){ ?>
								<?php if($i == $testi->rating){ ?>
								<option value="<?=$i?>" selected="selected"><?=$i?></option>
								<?php }else{ ?>
								<option value="<?=$i?>"><?=$i?></option>
								<?php } ?>
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
								<?php if($testi->is_home == 1){ ?>
								<option value="1" selected="selected">Yes</option>
								<option value="0">No</option>
								<?php }else{ ?>
								<option value="1">Yes</option>
								<option value="0" selected="selected">No</option>
								<?php } ?>
							</select>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-3 control-label">Date</label>
					<div class="col-lg-7">
						<div class="compose-editor">
							<input type="text" name="date" class="datepicker form-control" value="<?php echo date('m/d/Y', strtotime($testi->updated_date)); ?>" />
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
