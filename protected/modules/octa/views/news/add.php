<div class="col-lg-12">



	<?php 

		$msg = Yii::app()->request->getParam('msg');

		if(!empty($msg) and $msg == 1){  ?>

    <div id="success-alert" class="alert alert-success">Record has been added successfully.</div>

	<?php } ?>

                    <section class="panel">



                        <header class="panel-heading">



                            Add News



                        </header>



                        <div class="panel-body">



                            <form method="POST" class="form-horizontal " enctype="multipart/form-data" action="<?php echo Yii::app()->createUrl("octa/news/add");?>">

                                <div class="form-group">

                                    <label class="col-lg-3 control-label">Content Heading</label>

                                    <div class="col-lg-6">

                                        <input type="text" placeholder="Content Heading" name="content_title" id="content_title" class="form-control" required="required" >

                                    </div>

                                </div>



                                <div class="form-group">

                                    <label class="col-lg-3 control-label">Content</label>

                                    <div class="col-lg-6">

                                        <textarea placeholder="Vendor Description" name="description" id="description" class="form-control ckeditor"></textarea>

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label class="col-lg-3 control-label">Featured Image:</label>

                                    <div class="col-lg-6">

                                        <input type="file" class="form-control" name="photo" />

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

                                        <textarea placeholder="" name="seo_desc" id="seo_desc"  class="form-control"  ></textarea>

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







