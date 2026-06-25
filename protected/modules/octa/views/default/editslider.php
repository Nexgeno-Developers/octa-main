<div class="col-lg-12">
    <div id="success-alert" class="alert alert-success" style="display:none"></div>
			<div id="danger-alert" class="alert alert-danger" style="display:none"></div>
				<section class="panel">
					<header class="panel-heading">
						Edit Slider
					</header>
		<div class="panel-body">
				<form method="POST" class="form-horizontal " enctype="multipart/form-data" action="<?php echo Yii::app()->createUrl("octa/default/editslider");?>">
						<div class="form-group">
								<label class="col-lg-3 control-label">Current Slider</label>
								<div class="col-lg-6">
										<img src="<?php echo Yii::app()->baseUrl."/img/slider_images/".$slider->image?>" height="200" />
								</div>
						</div>
						
						<div class="form-group">
								<label class="col-lg-3 control-label">New Slider</label>
								<div class="col-lg-6">
										<input type="file" class="form-control" name="photo" />
								</div>
						</div>
								
								
								
				<div class="form-group">
						<label class="col-lg-3 control-label">Current Mobile Slider</label>
						<div class="col-lg-6">
								<img src="<?php echo Yii::app()->baseUrl."/img/slider_images/".$slider->image_mobile?>" height="200" />
						</div>
				</div>
					
				<div class="form-group">
						<label class="col-lg-3 control-label">New Mobile Slider</label>
						<div class="col-lg-6">
								<input type="file" class="form-control" name="photoMobile" />
						</div>
				</div>


			<div class="form-group">
				<label class="col-lg-3 control-label">Slider Order</label>
				<div class="col-lg-6">
					<input type="number" class="form-control" name="orders" value="<?php echo $slider->orders?>" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Alt Text</label>
				<div class="col-lg-6">
					<input type="text" class="form-control" name="alt" value="<?php echo $slider->alt?>" />
				</div>
			</div>

			<div class="form-group">
				<label class="col-lg-3 control-label">Link</label>
				<div class="col-lg-6">
					<input type="text" class="form-control" name="link" value="<?php echo $slider->link?>" />
				</div>
			</div>

			<div class="form-group">
				<label class="col-lg-3 control-label">Type</label>
				<div class="col-lg-6">
					<select class="form-control" name="type">
						<option value="1" selected="selected">Main Slider</option>
					</select>
				</div>
			</div>
                                <input type="hidden" name="id" value="<?php echo $slider->id?>"/>
                                
                                <div class="form-group">
                                    <div class="col-lg-offset-3 col-lg-6">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                                </div>
                                
                                
                                
                            </form>
                        </div>
                    </section>
</div>