<div class="col-lg-12">
	<div id="success-alert" class="alert alert-success" style="display:none"></div>

	<section class="panel">
		<header class="panel-heading">Edit Topic</header>
		<div class="panel-body">
			<form method="POST" class="form-horizontal " id="" action="<?php Yii::app()->createUrl("octa/topics/edit");?>">
				<div class="form-group">
					<label class="col-lg-3 control-label">Exam Code</label>
					<div class="col-lg-6">
						<select class="form-control selectpicker" id="exam"  name="exam" data-live-search="true" required="required">
							<option value="null">Please Select Exam</option>
							<?php foreach($exam as $exams){if($topics->exam_id==$exams->id){ ?>
							<option value="<?php echo $exams->id; ?>" selected="selected"><?php echo $exams->code ?></option>
							<?php } else {  ?>
							<option value="<?php echo $exams->id; ?>"><?php echo $exams->code ?></option>
							<?php }} ?>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-3 control-label">Question</label>
					<div class="col-lg-7">
						<div class="compose-editor">
							<input class="form-control" name="question" id="question" value="<?php echo $topics->question; ?>">
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-3 control-label">Answer</label>
					<div class="col-lg-7">
						<div class="compose-editor">
							<textarea class="form-control ckeditor" name="answer" id="answer" rows="9"><?php echo $topics->answer; ?></textarea>
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
