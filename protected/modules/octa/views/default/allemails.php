<div class="col-lg-12">
    <?php if(isset($msg)){ ?> <div id="success-alert" class="alert alert-success"><?=$msg?></div> <?php } ?>
    <div id="danger-alert" class="alert alert-danger" style="display:none"></div>
                    <section class="panel">
                        <header class="panel-heading">
                            Update Date
                        </header>
                        <div class="panel-body">
                            <form method="POST" class="form-horizontal " action="<?php Yii::app()->createUrl("octa/default/updatedate");?>">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Vendor</label>
									<?php 
									$cri = new CDbCriteria();
									$cri->order = "name";
									$vendors = Vendor::model()->findAll($cri); 
									?>

                                    <div class="col-lg-4">
                                        <select name="vendor" class="form-control" required>
											<option value="all">All Vendors</option>
											<?php foreach($vendors as $vendor){
												
												echo '<option value="'.$vendor->id.'">'.$vendor->name.'</option>';

											} ?>
										</select>
                                    </div>
                                </div>

								<div class="form-group">
                                    <label class="col-lg-3 control-label">Date</label>
                                    <div class="col-lg-4">
                                        <input type="date" name="date" class="datepicker form-control" required="required" />
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