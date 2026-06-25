<div class="col-lg-12">
    <div id="success-alert" class="alert alert-success" style="display:none"></div>
    <div id="danger-alert" class="alert alert-danger" style="display:none"></div>
                    <section class="panel">
                        <header class="panel-heading">
                            Add New Certification
                        </header>
                        <div class="panel-body">
                            <form method="POST" class="form-horizontal " id="" action="<?php echo Yii::app()->createUrl("octa/cert/addcert");?>" enctype="multipart/form-data">
                                
                                 <div class="form-group">
                                    <label class="col-lg-3 control-label">Vendor Name</label>
                                    <div class="col-lg-6">
                                        <select class="dropdown form-control" id="vendor" name="vendor" required="required">
                                            <option>Please Select Vendor</option>
                                            <?php foreach($vendor as $vendors) { 
                                                ?>
                                            <option value="<?php echo $vendors->id; ?>"><?php echo $vendors->name ?></option>
                                            <?php }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Cert Name</label>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Certification Name" name="cert_name" id="cert_name" class="form-control" required="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Menu Name</label>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Menu Name" name="menu_name" id="menu_name" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Cert Image</label>
                                    <div class="col-lg-6">
                                        <input type="file" name="photo" id="photo" class="form-control" required="required">
                                    </div>
                                </div>
                                
                               
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Content</label>
                                    <div class="col-lg-6">
                                        <textarea placeholder="Certification Description" name="description" id="description" class="form-control ckeditor" ></textarea>
                                    </div>
                                </div>
                                
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Seo Title</label>
                                    <div class="col-lg-6">
                                        <textarea placeholder="" name="page_title" id="page_title" class="form-control"></textarea>
                                    </div>
									<label class="col-lg-3" id="title_count_message" style="color: #1fb5ad;"></label>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Seo Description</label>
                                    <div class="col-lg-6">
                                        <textarea placeholder="" name="seo_desc" id="seo_desc" class="form-control" ></textarea>
                                    </div>
									<label class="col-lg-3" id="seo_desc_count_message" style="color: #1fb5ad;"></label>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Seo Keywords</label>
                                    <div class="col-lg-6">
                                        <textarea placeholder="" Seo="keywords" id="keywords" class="form-control" ></textarea>
                                    </div>
                                </div>
                                
                               
                                
                                <div class="form-group ">
                                        <label for="agree" class="control-label col-lg-3 col-sm-3">Is Hot</label>
                                        <div class="col-lg-6 col-sm-9">
                                            <input  type="checkbox" style="width: 20px" class="checkbox form-control" id="is_hot" name="is_hot" />
                                        </div>
                                </div>
                                
                                <div class="form-group ">
                                        <label for="agree" class="control-label col-lg-3 col-sm-3">Status</label>
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
