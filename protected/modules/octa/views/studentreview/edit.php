<div class="col-lg-12">
	<div id="success-alert" class="alert alert-success" style="display:none"></div>

	<section class="panel">
		<header class="panel-heading">Edit Studebt Review</header>
		<div class="panel-body">
			<form method="POST" class="form-horizontal " id="" action="<?php Yii::app()->createUrl("octa/studentreview/edit");?>" enctype="multipart/form-data">

			    <div class="form-group">
					<label class="col-lg-3 control-label">Type</label>
					<div class="col-lg-7">
						<div class="">
                            <input class="form-control" type="text" name="platform" value="<?php echo $testi->platform; ?>" readonly>
						</div>
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

				<div class="form-group field3">
					<label class="col-lg-3 control-label">Testimonial</label>
					<div class="col-lg-7">
						<div class="compose-editor">
							<textarea class="form-control" name="description" id="description" rows="9"><?php echo $testi->content; ?></textarea>
						</div>
					</div>
				</div>

				<div class="form-group field4">
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

				<div class="form-group field5">
					<label class="col-lg-3 control-label">Image</label>
					<div class="col-lg-7">
						<div class="compose-editor">
							<input type="file" class="form-control" name="photo" id="photo">
						</div>
					</div>
				</div>				

				<div class="form-group field6">
					<label class="col-lg-3 control-label">Link</label>
					<div class="col-lg-7">
						<div class="">
							<input type="text" class="form-control" name="vlink" id="vlink" value="<?php echo $testi->vlink; ?>">
						</div>
					</div>
				</div>

				<div class="form-group field7">
					<label class="col-lg-3 control-label">Cert Name</label>
					<div class="col-lg-7">
						<div class="">
							<input type="text" class="form-control" name="vdesc" id="vdesc" value="<?php echo $testi->vdesc; ?>">
						</div>
					</div>
				</div>				

				<div class="form-group">
					<label class="col-lg-3 control-label">Date</label>
					<div class="col-lg-7">
						<div class="compose-editor">
							<input type="text" name="date" class="datepicker form-control" value="<?php echo date('d-M-Y', strtotime($testi->updated_date)); ?>" />
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

}

form_mode('<?php echo $testi->platform; ?>');

</script>
