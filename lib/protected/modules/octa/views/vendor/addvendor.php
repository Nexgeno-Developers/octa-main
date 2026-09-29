<div class="col-lg-12">
    <div id="success-alert" class="alert alert-success" style="display:none"></div>
    <div id="danger-alert" class="alert alert-danger" style="display:none"></div>
                    <section class="panel">
                        <header class="panel-heading">
                            Add New Vendor
                        </header>
                        <div class="panel-body">
                            <form method="POST" class="form-horizontal " id="" action="<?php echo Yii::app()->createUrl("octa/vendor/addvendor");?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Vendor Name</label>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Vendor Name" name="vendor_name" id="vendor_name" class="form-control" required="required">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Vendor Image</label>
                                    <div class="col-lg-6">
                                        <input type="file" name="photo" id="photo" class="form-control" required="required">
                                    </div>
                                </div>

								<div class="form-group">
                                    <label class="col-lg-3 control-label">Heading</label>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Heading" name="ctitle" id="ctitle" class="form-control" required="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Content</label>
                                    <div class="col-lg-6">
                                        <textarea placeholder="Vendor Description" name="description" id="description" class="form-control ckeditor" ></textarea>
                                    </div>
                                </div>
                                
                                
                                
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Meta Title</label>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="" name="page_title" id="page_title" class="form-control" >
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Meta Keywords</label>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="" name="keywords" id="keywords" class="form-control" >
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Meta Description</label>
                                    <div class="col-lg-6">
                                        <textarea placeholder="" name="seo_desc" id="seo_desc" class="form-control" ></textarea>
                                    </div>
                                </div>
                                
                               
                                
                                <div class="form-group ">
                                        <label for="agree" class="control-label col-lg-3 col-sm-3">Is Hot</label>
                                        <div class="col-lg-6 col-sm-9">
                                            <input  type="checkbox" style="width: 20px" class="checkbox form-control" id="is_hot" name="is_hot" />
                                        </div>
                                </div>
                                
                                <div class="form-group ">
                                        <label for="agree" class="control-label col-lg-3 col-sm-3">Is active</label>
                                        <div class="col-lg-6 col-sm-9">
                                            <input  type="checkbox" style="width: 20px" class="checkbox form-control" id="is_active" checked="checked" name="status" />
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
