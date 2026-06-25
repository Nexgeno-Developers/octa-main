<div class="col-lg-8">
	<div id="success-alert" class="alert alert-success" style="display:none"></div>
	<div id="danger-alert" class="alert alert-danger" style="display:none"></div>

	<section class="panel">
		<header class="panel-heading">Edit Discount Coupon</header>

		<div class="panel-body">
			<form method="POST" class="form-horizontal" id="edit" action="<?php echo Yii::app()->createUrl("octa/coupon/editcoupon");?>">
				<div class="form-group">
					<label class="col-lg-3 control-label">Coupon title</label>
					<div class="col-lg-6">
						<input type="text" placeholder="Coupone Title" value="<?php echo $coupon->title; ?>" name="title" id="title" class="form-control" required="required">
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-3 control-label">Coupon Code </label>
					<div class="col-lg-6">
						<input type="text" placeholder="" name="code" value="<?php echo $coupon->code; ?>"  id="code" class="form-control" required="required">
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-3 control-label">Discount Type</label>
					<div class="col-lg-6">
						<select name="dtype"  class="form-control"  required="required">
							<option value="">Select Discount Type</option>
							<?php if($coupon->type == 1){ ?>
							<option value="1" selected>Amount</option>
							<?php }elseif($coupon->type == 2){ ?>
							<option value="2" selected>Percentage</option>
							<?php } ?>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-3 control-label">Discount Value</label>
					<div class="col-lg-6">
						<input type="number" placeholder="Discount Value" name="discount" value="<?php echo $coupon->value; ?>"  id="discount" required="required" class="form-control">
					</div>
				</div>

				<input type="hidden" name="uses" value="<?php echo $coupon->number_of_uses;?>" id="discount"  class="form-control">

				<div class="form-group">
					<label class="col-lg-3 control-label">Start Date</label>
					<div class="col-lg-6">
						<input type="text" placeholder="" value="<?=Yii::app()->dateFormatter->format('MM/d/y',strtotime($coupon->start_date)); ?>" name="start_date" required="required" class="datepicker form-control">
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-3 control-label">End Date</label>
					<div class="col-lg-6">
						<input type="text" placeholder="" value="<?=Yii::app()->dateFormatter->format('MM/d/y',strtotime($coupon->end_date)); ?>" name="end_date" required="required" class="datepicker form-control">
					</div>
				</div>

				<div class="form-group"  style="display:none">
					<label for="agree" class="control-label col-lg-3 col-sm-3">Remarks</label>
					<div class="col-lg-6 col-sm-9">
						<textarea placeholder="Remarks" name="description" id="description" class="ckeditor form-control" ></textarea>
					</div>
				</div>

				<?php if($coupon->prices>0) { ?>
				<div class="form-group ">
					<label for="agree" class="control-label col-lg-3 col-sm-3">Is Prices</label>
					<div class="col-lg-6 col-sm-9">
						<input  type="checkbox" checked="checked" style="width: 20px" class="checkbox form-control" id="is_prices" name="is_prices" />
					</div>
				</div>
				<?php } else { ?>
				<div class="form-group ">
					<label for="agree" class="control-label col-lg-3 col-sm-3">Is Prices</label>
					<div class="col-lg-6 col-sm-9">
						<input  type="checkbox"  style="width: 20px" class="checkbox form-control" id="is_prices" name="is_prices" />
					</div>
				</div>
				<?php } ?>

				<?php if($coupon->status>0) { ?>
				<div class="form-group ">
					<label for="agree" class="control-label col-lg-3 col-sm-3">Is active</label>
					<div class="col-lg-6 col-sm-9">
						<input  type="checkbox" checked="checked" style="width: 20px" class="checkbox form-control" id="is_active" name="is_active" />
					</div>
				</div>
				<?php } else { ?>
				<div class="form-group ">
					<label for="agree" class="control-label col-lg-3 col-sm-3">Is active</label>
					<div class="col-lg-6 col-sm-9">
						<input  type="checkbox"  style="width: 20px" class="checkbox form-control" id="is_active" name="is_active" />
					</div>
				</div>
				<?php } ?>
				<div class="form-group">
					<div class="col-lg-offset-3 col-lg-6">
						<input type="hidden" name="editId" value="<?=Yii::app()->request->getParam("id");?>" />
						<button class="btn btn-primary" type="submit">Submit</button>
					</div>
				</div>
			</form>
		</div>
	</section>
</div>
