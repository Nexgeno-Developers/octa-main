<div class="col-lg-12">
    <div id="success-alert" class="alert alert-success" style="display:none"></div>
                    <section class="panel">
                        <header class="panel-heading">
                            Edit CMS
                        </header>
                        <div class="panel-body">
                            <form method="POST" class="form-horizontal " id="" action="<?php echo Yii::app()->createUrl("octa/cms/edit");?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Content Heading</label>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Vendor Name" name="vendor_name" id="vendor_name" class="form-control" value="<?php echo $cms->heading; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Content</label>
                                    <div class="col-lg-6">
                                        <textarea placeholder="Vendor Description" name="description" id="description" class="form-control ckeditor"><?php echo $cms->content;?></textarea>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Title Background Desktop</label>
                                    <div class="col-lg-6">
                                        <input type="file"  name="photo2" id="photo2" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Title Background Tab</label>
                                    <div class="col-lg-6">
                                        <input type="file"  name="photo_tab" id="photo_tab" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Title Background Mobile</label>
                                    <div class="col-lg-6">
                                        <input type="file"  name="photo_mob" id="photo_mob" class="form-control">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">SEO Title</label>
                                    <div class="col-lg-6">
                                        <textarea placeholder="" name="page_title" id="page_title" class="form-control" ><?php echo $cms->title;?></textarea>
                                    </div>
									<label class="col-lg-3" id="title_count_message" style="color: #1fb5ad;"></label>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">SEO Description</label>
                                    <div class="col-lg-6">
                                        <textarea placeholder="" name="seo_desc" id="seo_desc"  class="form-control" ><?php echo $cms->meta_desc;?></textarea>
                                    </div>
									<label class="col-lg-3" id="seo_desc_count_message" style="color: #1fb5ad;"></label>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">SEO Keywords</label>
                                    <div class="col-lg-6">
                                        <textarea placeholder="" name="keywords" id="keywords" class="form-control" ><?php echo $cms->meta_keywords;?></textarea>
                                    </div>
                                </div>
                                
                                
                                
                                
                                
                                
                                
                                 <input type="hidden" name="id" value="<?php echo $cms->id; ?>" />
                                
                                <div class="form-group">
                                    <div class="col-lg-offset-3 col-lg-6">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                                </div>
                                
                                
                                
                            </form>
                        </div>
                    </section>
</div>

