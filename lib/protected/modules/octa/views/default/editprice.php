<div class="col-lg-12">
    <div id="success-alert" class="alert alert-success" style="display:none"></div>
                    <section class="panel">
                        <header class="panel-heading">
                            Edit Price
                        </header>
                        <div class="panel-body">
                            <form method="POST" class="form-horizontal " id="editform" action="<?php echo Yii::app()->createUrl("octa/default/editprice");?>">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Detail</label>
                                    <div class="col-lg-6">
                                        <?php echo $cms->detail;?>
                                    </div>
                                </div>
                                
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Price Value</label>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="" name="price" value="<?php echo $cms->pri_value;?>" id="price" class="form-control" required >
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Swreg Code</label>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="" name="description" value="<?php echo $cms->pri_swreg;?>" id="description" class="form-control ckeditor" required >
                                    </div>
                                </div>
                                
                                 <input type="hidden" name="id" value="<?php echo $cms->pri_id; ?>" />
                                
                                <div class="form-group">
                                    <div class="col-lg-offset-3 col-lg-6">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                                </div>
                                
                                
                                
                            </form>
                        </div>
                    </section>
</div>

