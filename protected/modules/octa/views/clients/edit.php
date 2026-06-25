<div class="col-lg-12">

<?php 

		$msg = Yii::app()->request->getParam('msg');

		if(!empty($msg) and $msg == 1){  ?>

    <div id="success-alert" class="alert alert-success">Record has been added successfully.</div>

	<?php } ?>

	<?php if(!empty($msg) and $msg == 0){?> 

    	<div id="danger-alert" class="alert alert-danger">Error</div>

	<?php } ?>

    <section class="panel">

                        <header class="panel-heading">

                            Edit Alt Text

                        </header>

                        <div class="panel-body">

                            <form method="POST" class="form-horizontal " enctype="multipart/form-data" action="<?php Yii::app()->createUrl("octa/clients/edit");?>">

                                

                                <div class="form-group">

                                    <label class="col-lg-3 control-label">Alt Text</label>

                                    <div class="col-lg-6">

                                        <input type="text" name="alt" id="alt" class="form-control" value="<?=$gallery->alt?>" />

                                    </div>

                                </div>



								<div class="form-group">

                                    <label class="col-lg-3 control-label">Image Preview:</label>

                                    <div class="col-lg-6">

                                        <?php 

											$postimage = $gallery->image;

											if(!empty($postimage)){



												$dir_path = Yii::app()->basePath.'/../img/clients/'.$postimage;

												if(file_exists($dir_path)){

													echo "<img src='".Yii::app()->request->getBaseUrl(true)."/img/clients/".$postimage."' width='400' />";

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

                                    <label class="col-lg-3 control-label">Image:</label>

                                    <div class="col-lg-6">

                                        <input type="file" class="form-control" name="photo" />

                                    </div>

                                </div>

                                

                                <div class="form-group" style="display:none">

                                    <label class="col-lg-3 control-label">Testimonial</label>

                                    <div class="col-lg-7">

                                        <div class="compose-editor">

                                            <textarea class="form-control ckeditor" name="description" id="description" rows="9"><?php echo $gallery->content; ?></textarea>

                                            <!--<input type="file" class="default">-->

                                      </div>

                                    </div>

                                </div>







								<div class="form-group">

                                    <label class="col-lg-3 control-label">Date</label>

                                    <div class="col-lg-7">

                                        <div class="compose-editor">



<input type="text" name="date" class="datepicker form-control" value="<?php echo Yii::app()->dateFormatter->format('MM/dd/y',$gallery->updated_date); ?>" />

                                      </div>

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



