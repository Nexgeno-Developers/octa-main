<?php 

$startDate = date('Y-m-d');
$startDate_time = strtotime($startDate . ' -2 day');
$startDate = date("Y-m-d",$startDate_time);

$endDate = date('Y-m-d');
$endDate_time = strtotime($endDate . ' 10 years');
$endDate = date("Y-m-d",$endDate_time);;
 ?>

<div class="col-lg-8">
    <div id="success-alert" class="alert alert-success" style="display:none"></div>
    <div id="danger-alert" class="alert alert-danger" style="display:none"></div>
	
    <section class="panel">
		<header class="panel-heading">Add New Discount Coupon</header>
			<div class="panel-body">
				<form method="POST" class="form-horizontal " id="add" action="<?php echo Yii::app()->createUrl("octa/coupon/addcoupon");?>">
					<div class="form-group">
						<label class="col-lg-3 control-label">Coupon title</label>
						<div class="col-lg-6">
							<input type="text" placeholder="Coupone Title" name="title" id="title" class="form-control" required="required">
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-3 control-label">Coupon Code </label>
						<div class="col-lg-6">
							<input type="text" placeholder="" name="code" id="code" class="form-control" required="required">
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-3 control-label">Discount Type</label>
						<div class="col-lg-6">
							<select name="dtype"  class="form-control"  required="required">
								<option value="">Select Discount Type</option>
								<option value="1">Amount</option>
								<option value="2" selected>Percentage</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-3 control-label">Discount Value</label>
						<div class="col-lg-6">
							<input type="number" name="discount" id="discount" required="required" class="form-control">
						</div>
					</div>
                                
					<input type="hidden" name="uses" id="discount" value="10000"  class="form-control">
					<div class="form-group">
						<label class="col-lg-3 control-label">Start Date</label>
						<div class="col-lg-6">
							<input type="text" placeholder="" value="<?=Yii::app()->dateFormatter->format('MM/d/y',strtotime($startDate)); ?>"name="start_date" required="required" class="datepicker form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label">End Date</label>
						<div class="col-lg-6">
							<input type="text" placeholder="" value="<?=Yii::app()->dateFormatter->format('MM/d/y',strtotime($endDate)); ?>" name="end_date" required="required" class="datepicker form-control">
						</div>
					</div>
					<div class="form-group" style="display:none">
						<label for="agree" class="control-label col-lg-3 col-sm-3">Remarks</label>
						<div class="col-lg-6 col-sm-9">
							<textarea placeholder="Remarks" name="description" id="description" class="ckeditor form-control" ></textarea>
						</div>
					</div>
					<div class="form-group ">
						<label for="agree" class="control-label col-lg-3 col-sm-3">Is Prices</label>
						<div class="col-lg-6 col-sm-9">
							<input  type="checkbox" style="width: 20px" class="checkbox form-control"  id="is_prices" name="is_prices" />
						</div>
					</div>
					<div class="form-group ">
						<label for="agree" class="control-label col-lg-3 col-sm-3">Is active</label>
						<div class="col-lg-6 col-sm-9">
							<input  type="checkbox" style="width: 20px" class="checkbox form-control" checked  id="is_active" name="is_active" />
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

