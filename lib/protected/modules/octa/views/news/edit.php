<div class="col-lg-12">



	<?php 

		$msg = Yii::app()->request->getParam('msg');

		if(!empty($msg)){

 ?>

    <div id="success-alert" class="alert alert-success"><?=$msg?></div>

<?php } ?>

                    <section class="panel">



                        <header class="panel-heading">



                            Edit News



                        </header>



                        <div class="panel-body">



                            <form method="POST" class="form-horizontal"  enctype="multipart/form-data" action="<?php echo Yii::app()->createUrl("octa/news/edit");?>">



                                <div class="form-group">



                                    <label class="col-lg-3 control-label">Content Heading</label>



                                    <div class="col-lg-6">



                                        <input type="text" placeholder="Heading" name="content_title" id="vendor_name" class="form-control" value="<?php echo $cms->heading; ?>">



                                    </div>



                                </div>



                                <div class="form-group">

                                    <label class="col-lg-3 control-label">Content</label>

                                    <div class="col-lg-6">

                                        <textarea placeholder="Vendor Description" name="description" id="description" class="form-control ckeditor" required="required"><?php echo $cms->content;?></textarea>

                                    </div>

                                </div>



								<div class="form-group">

                                    <label class="col-lg-3 control-label">Image:</label>

                                    <div class="col-lg-6">

                                        <?php 

											$postimage = $cms->image;

											if(!empty($postimage)){



												$dir_path = Yii::app()->basePath.'/../img/photos/'.$postimage;

												if(file_exists($dir_path)){

													echo "<img src='".Yii::app()->request->getBaseUrl(true)."/img/photos/".$postimage."' width='400' />";

												}else{

													echo "Image Not Exist";

												}



											}else{

												echo "Image Not Exist";

											}

										?>

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



                                        <textarea placeholder="" name="page_title" id="page_title" class="form-control"  required="required"><?php echo $cms->title;?></textarea>



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







