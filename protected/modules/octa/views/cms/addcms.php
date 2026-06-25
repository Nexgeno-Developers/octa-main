<div class="col-lg-12">
    <div id="success-alert" class="alert alert-success" style="display:none"></div>
    <div id="danger-alert" class="alert alert-danger" style="display:none"></div>
                    <section class="panel">
                        <header class="panel-heading">
                            Add New Vendor
                        </header>
                        <div class="panel-body">
                            <form method="POST" class="form-horizontal " id="add" action="<?php echo Yii::app()->createUrl("octa/vendor/addvendor");?>">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Vendor Name</label>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Vendor Name" name="vendor_name" id="vendor_name" class="form-control" required="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Content</label>
                                    <div class="col-lg-6">
                                        <textarea placeholder="Vendor Description" name="description" id="description" class="form-control ckeditor" ></textarea>
                                    </div>
                                </div>
                                
                                
                                
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">SEO Title</label>
                                    <div class="col-lg-6">
                                        <textarea placeholder="" name="page_title" id="page_title" class="form-control" ></textarea>
                                    </div>
									<label class="col-lg-3" id="title_count_message" style="color: #1fb5ad;"></label>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">SEO Description</label>
                                    <div class="col-lg-6">
                                        <textarea placeholder="" name="seo_desc" id="seo_desc" class="form-control" ></textarea>
                                    </div>
									<label class="col-lg-3" id="seo_desc_count_message" style="color: #1fb5ad;"></label>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">SEO Keywords</label>
                                    <div class="col-lg-6">
                                        <textarea placeholder="" name="keywords" id="keywords" class="form-control" ></textarea>
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
                                            <input  type="checkbox" style="width: 20px" class="checkbox form-control" id="is_active" name="status" />
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

