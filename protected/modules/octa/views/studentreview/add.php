<div class="col-lg-12">
	<div id="success-alert" class="alert alert-success" style="display:none"></div>
	<div id="danger-alert" class="alert alert-danger" style="display:none"></div>

	<section class="panel">
		<header class="panel-heading">Add Student Reviews</header>
		<div class="panel-body">
			<form method="POST" class="form-horizontal " id="" action="<?php echo Yii::app()->createUrl("octa/Studentreview/Addstudentreview");?>" enctype="multipart/form-data">

			<div class="form-group">
					<label class="col-lg-3 control-label">Type</label>
					<div class="col-lg-7">
						<div class="">
							<select class="control-label selectpicker" data-live-search="true" name="platform" onchange="form_mode(this.value);" required>
                                <option value="linkedin">LinkedIn</option>
								<option value="facebook">Facebook</option>
								<option value="google">Google</option>
								<option value="youtube">Youtube</option>
							</select>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-3 control-label">Student Name</label>
					<div class="col-lg-7">
						<div class="compose-editor">
							<input type="text" class="form-control" name="name" id="name" placeholder="Student Name" required>
						</div>
					</div>
				</div>				

				<div class="form-group field3">
					<label class="col-lg-3 control-label">Testimonial</label>
					<div class="col-lg-7">
						<div class="compose-editor">
						<!--ckeditor class-->
							<textarea class="form-control" name="description" id="description" rows="9"></textarea>
						</div>
					</div>
				</div>

				<div class="form-group field4">
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

				<div class="form-group field5">
					<label class="col-lg-3 control-label">Image</label>
					<div class="col-lg-7">
						<div class="compose-editor">
							<input type="file" class="form-control" name="photo" id="photo">
						</div>
					</div>
				</div>

				<div class="form-group field6">
					<label class="col-lg-3 control-label">Video ID</label>
					<div class="col-lg-7">
						<div class="">
							<input type="text" class="form-control" name="vlink" id="vlink">
						</div>
					</div>
				</div>

				<div class="form-group field7">
					<label class="col-lg-3 control-label">Cert Name</label>
					<div class="col-lg-7">
						<div class="">
							<input type="text" class="form-control" name="vdesc" id="vdesc">
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

<script>
function form_mode(platform)
{
	if(platform == 'youtube')
	{
		$('.field3').hide();
		$('.field4').hide();
		$('.field5').hide();
		$('.field6').show();
		$('.field7').show();
	}
	else
	{
		$('.field3').show();
		$('.field4').show();
		$('.field5').show();
		$('.field6').hide();
		$('.field7').hide();					
	}

	$('input').val('');
	$('textarea').val('');
	//$('select').prop('selectedIndex',0);

}

$('.field6').hide();
$('.field7').hide();

</script>