<div class="col-lg-12">
	<div id="success-alert" class="alert alert-success" style="display:none"></div>
	<div id="danger-alert" class="alert alert-danger" style="display:none"></div>

	<section class="panel">
		<header class="panel-heading">Assign Trainer</header>
		<div class="panel-body">
			<form method="POST" class="form-horizontal " id="" action="<?php echo Yii::app()->createUrl("octa/trainer/assigntrainer");?>" enctype="multipart/form-data">
            	<div class="form-group">
					<label class="col-lg-3 control-label">Select Trainer</label>
					<div class="col-lg-6">
						<select class="form-control selectpicker" id="trainerId"  name="trainerId" data-live-search="true" required="required">
							<option value="null">Please Select Trainer</option>
							<?php foreach($trainers as $trainer) {  ?>
							<option value="<?php echo $trainer->id; ?>"><?php echo $trainer->name ?></option>
							<?php } ?>
						</select>
					</div>
				</div>
                
                <div class="form-group">
					<label class="col-lg-3 control-label">Select Exam</label>
					<div class="col-lg-6">
						<select class="form-control selectpicker" id="examId"  name="examId" data-live-search="true" required="required">
							<option value="null">Please Select Exam</option>
							<?php foreach($exam as $exams) {  ?>
							<option value="<?php echo $exams->id; ?>"><?php echo $exams->code ?></option>
							<?php } ?>
						</select>
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
