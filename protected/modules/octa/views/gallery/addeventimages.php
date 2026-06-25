<div class="col-lg-12">
    <div id="success-alert" class="alert alert-success" style="display:none"></div>
    <?php if (!empty($error)) { ?>
    <div id="danger-alert" class="alert alert-danger" ><?php echo $error; ?></div>
    <?php } ?>
                    <section class="panel">
                        <header class="panel-heading">
                            Add Images in <strong> <?php echo $page_info->title ?></strong>
                        </header>
                          <div class="panel-body">
                              <h4 style="text-align: center; color: red;"><?php //echo $error; ?></h4>
                        <div class="position-center">
                            <form method="POST" enctype="multipart/form-data" class="form-horizontal"  action="<?php echo Yii::app()->createUrl('octa/gallery/addeventimages'); ?>">
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Images (Max 20 Files)</label>
                                    	<div class="col-lg-9">
                                           <input id="file-0" class="file"  type="file" name="photo[]" multiple data-min-file-count="1">
                                   	    </div>
                                </div>
                                
                                <input type="hidden" name="id" value="<?php echo $page_info->id; ?>" />
                                
                                <div class="form-group">
                                    <div class="col-lg-offset-3 col-lg-6">
                                        <input type='submit' class="btn btn-primary" onclick="return check()" value="Submit" />
                                        <button class="btn btn-primary" type="reset">Cancel</button>
                                    </div>
                                </div>
                             </form>
                        </div>
                        </div>
                    </section>
</div>






	


