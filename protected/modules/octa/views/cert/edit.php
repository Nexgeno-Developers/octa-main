<div class="col-lg-12">
<div id="success-alert" class="alert alert-success" style="display:none"></div>
    <section class="panel">
                        <header class="panel-heading">
                            Edit Certification
                        </header>
                        <div class="panel-body">
                            <form method="POST" class="form-horizontal " id="" action="<?php echo Yii::app()->createUrl("octa/cert/edit");?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Certification Name</label>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Cert Name" name="cert_name" id="vendor_name" class="form-control" value="<?php echo $cert->name; ?>" required="required">
                                    </div>
                                </div>
								<div class="form-group">
                                    <label class="col-lg-3 control-label">Menu Name</label>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Menu Name" name="menu_name" id="menu_name" class="form-control" value="<?php echo $cert->menu_name; ?>">
                                    </div>
                                </div>

																<div class="form-group">
                                    <label class="col-lg-3 control-label">Slug</label>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Slug" name="url_slug" id="url_slug" class="form-control" value="<?php echo $cert->url; ?>" required="required">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Vendor Name</label>
                                    <div class="col-lg-6">
                                        <select class="dropdown form-control" id="vendor" name="vendor" required="required">
                                            <option>Please Select Vendor</option>
                                            <?php foreach($vendor as $vendors) { 
                                               if ($cert->vendor_id==$vendors->id)
                                               { ?>
                                            <option value="<?php echo $vendors->id; ?>" selected="selected"><?php echo $vendors->name ?></option>
                                              <?php } else {  ?>
                                            <option value="<?php echo $vendors->id; ?>"><?php echo $vendors->name ?></option>
                                              <?php }
                                              
                                              }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                
                               <div class="form-group">
                                    <label class="col-lg-3 control-label">Image</label>
                                    <div class="col-lg-6">
                                        <input type="file"  name="photo" id="photo" class="form-control">
                                    </div>
                                </div>
                                
                               <div class="form-group">
                                    <label class="col-lg-3 control-label">Title Background</label>
                                    <div class="col-lg-6">
                                        <input type="file"  name="photo2" id="photo2" class="form-control">
                                    </div>
                                </div>
																<div class="form-group">
                                    <label class="col-lg-3 control-label">Title Background Responsive</label>
                                    <div class="col-lg-6">
                                        <input type="file"  name="photo2_re" id="photo2_re" class="form-control">
                                    </div>
                                </div>
                                
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Content</label>
                                    <div class="col-lg-6">
                                        <textarea placeholder="Cert Description" name="description" id="description" class="form-control ckeditor"  ><?php echo $cert->description;?></textarea>
                                    </div>
                                </div>
                                
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">SEO Title</label>
                                    <div class="col-lg-6">
                                        <textarea  placeholder="" name="page_title" id="page_title" class="form-control" ><?php echo $cert->meta_title;?></textarea>
                                    </div>
									<label class="col-lg-3" id="title_count_message" style="color: #1fb5ad;"></label>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">SEO Description</label>
                                    <div class="col-lg-6">
                                        <textarea placeholder="" name="seo_desc" id="seo_desc"  class="form-control" ><?php echo $cert->meta_desc;?></textarea>
                                    </div>
									<label class="col-lg-3" id="seo_desc_count_message" style="color: #1fb5ad;"></label>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">SEO Keywords</label>
                                    <div class="col-lg-6">
                                        <textarea  placeholder="" name="keywords" id="keywords" class="form-control" ><?php echo $cert->meta_keywords;?></textarea>
                                    </div>
                                </div>
                                
                               
                                
                                <div class="form-group ">
                                        <label for="agree" class="control-label col-lg-3 col-sm-3">Is Hot</label>
                                        <div class="col-lg-6 col-sm-9">
                                            <?php if ($cert->is_hot>0) { ?>
                                            <input  type="checkbox" checked="checked" style="width: 20px" class="checkbox form-control" id="is_hot" name="is_hot" />
                                            <?php }
                                            else { ?> 
                                            <input  type="checkbox" style="width: 20px" class="checkbox form-control" id="is_hot" name="is_hot" />   
                                            <?php }
                                            ?>

                                            
                                        </div>
                                </div>
                                
                                <div class="form-group ">
                                        <label for="agree" class="control-label col-lg-3 col-sm-3">Is active</label>
                                        <div class="col-lg-6 col-sm-9">
                                            <?php if ($cert->status>0) { ?>
                                            <input  type="checkbox" checked="checked" style="width: 20px" class="checkbox form-control"  id="is_active" name="status" />
                                            <?php }
                                            else { ?> 
                                            <input  type="checkbox"  style="width: 20px" class="checkbox form-control"  id="is_active" name="status" />
                                            <?php } ?>
                                            

                                            
                                        </div>
                                </div>
                                
                                <input type="hidden" name="id" value="<?php echo $cert->id; ?>" />
                                
                                <div class="form-group">
                                    <div class="col-lg-offset-3 col-lg-6">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                                </div>
                                
                                
                                
                            </form>
                        </div>
                    </section>
</div>
