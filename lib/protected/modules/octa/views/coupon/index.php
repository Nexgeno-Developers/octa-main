<div class="col-sm-12">
	<div id="success-alert" class="alert alert-success" style="display:none"></div>

	<section class="panel">
		<header class="panel-heading" style="text-align: center">Coupons Table</header>

		<div class="col-sm-12" style="text-align: center">
			<div style="padding:10px;">
				<h4>Search</h4>
				<form id="search-vendor" method="POST" action="<?php echo Yii::app()->createUrl('octa/coupon/search');?>">
					<div class="form-group">
						<label class="col-lg-2 control-label">Coupon Code</label>
						<div class="col-lg-3">
							<input type="text" class="form-control" name="query" required="required"/>
						</div>
						<div class="col-lg-3">
							<input type="submit" class="btn btn-primary"  value="Search"/>  
						</div>
					</div> 
				</form> 
			</div>
		</div>

		<div class="col-sm-12" style="text-align: center">

		</div>

		<div class="panel-body" id="vendor-row">
			<table class="table  table-hover general-table" >
				<thead>
					<tr>
						<th> Name</th>
						<th class="hidden-phone">Code</th>
						<th>Discount</th>
						<th>Start Date</th>
						<th> Expiry Date </th>
						<th>Prices</th>
						<th>Active</th>
						<th>Edit/Delete </th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($coupon as $coupons) { ?>
					<?php if($coupons->type == 1){$ctype = "$";}else{$ctype = "%";}; ?>
					<tr id="row-<?php echo $coupons->id;?>">
						<td><a href="#"><?php echo $coupons->title ?></a></td>
						<td><?php echo $coupons->code;?></td>
						<td><?php echo $coupons->value;?><?=$ctype?></td>
						<td><?php echo $coupons->start_date; ?></td>
						<td><?php echo $coupons->end_date; ?></td>
						<td>
							<?php if ($coupons->prices>0){ ?>
							<a  href="<?php echo Yii::app()->createUrl('octa/coupon/dprices',array("id"=>$coupons->id,"status"=>"0"))?>"><span class="label label-success label-mini">Yes</span></a>
							<?php } else { ?>
							<a  href="<?php echo Yii::app()->createUrl('octa/coupon/dprices',array("id"=>$coupons->id,"status"=>"1"))?>"><span class="label label-danger label-mini">No</span></a>
							<?php  }?>
						</td>
						<td id="enable-active-td-<?php echo $coupons->id; ?>">
							<?php if ($coupons->status>0){ ?>
							<a class="process-it"  data-url="<?php echo Yii::app()->createUrl('octa/coupon/processactive')?>" data-type="1" data-see="1"data-id="<?php echo $coupons->id;?>" href="javascript:void(0)"><span class="label label-success label-mini">Yes</span></a>
							<?php } else { ?>
							<a class="process-it" data-url="<?php echo Yii::app()->createUrl('octa/coupon/processactive')?>" data-type="2" data-see="2" data-id="<?php echo $coupons->id;?>" href="javascript:void(0)" ><span class="label label-danger label-mini">No</span></a>
							<?php  }?>
						</td>
						<td>
							<a href="<?php echo Yii::app()->createUrl("octa/coupon/editcoupon",array("id"=>$coupons->id));?>"><img src="<?php echo Yii::app()->baseUrl?>/images/write.png" alt=""/></a>
							<a href="<?php echo Yii::app()->createUrl("octa/coupon/delete",array("id"=>$coupons->id));?>"  ><img src="<?php echo Yii::app()->baseUrl?>/images/delete-icon.png" alt=""/></a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
		<div style="text-align: center"></div>
	</section>
</div>
