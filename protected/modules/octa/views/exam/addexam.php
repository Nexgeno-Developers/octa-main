<div class="col-lg-12">
    <div id="success-alert" class="alert alert-success" style="display:none"></div>

	<?php 
	$msg = Yii::app()->request->getParam('msg'); ?>
<?php if($msg == 2){ ?>
    <div id="danger-alert" class="alert alert-danger">Already</div>
<?php } ?>
                    <section class="panel">
                        <header class="panel-heading">
                            Add New Exam
                        </header>
                        <div class="panel-body">
                            <form method="POST" class="form-horizontal " id="" action="<?php echo Yii::app()->createUrl("octa/exam/addexam");?>" enctype="multipart/form-data">
                                
                                 <div class="form-group">
                                    <label class="col-lg-3 control-label">Vendor Name</label>
                                    <div class="col-lg-6">
                                        <select class="dropdown form-control" id="vendor_exam" data-url="<?php echo Yii::app()->createUrl("octa/exam/getcerts");?>" name="vendor" required="required">
                                            <option value="null">Please Select Vendor</option>
                                            <?php foreach($vendor as $vendors) { 
                                                ?>
                                            <option value="<?php echo $vendors->id; ?>"><?php echo $vendors->name ?></option>
                                            <?php }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                
                                 <div class="form-group" id="cert_dropdown" >
                                    <label class="col-lg-3 control-label">Cert Name</label>
                                    <div class="col-lg-6" id="cert"></div>
                                </div>
                                
                                <div class="form-group" id="cert_dropdown" >
                                    <label class="col-lg-3 control-label">Tag Name</label>
                                    <div class="col-lg-6" id="cert">
										<select name='tag_ids[]' class='dropdown form-control select2' multiple >
										    <?php if (!empty($tags)) {  
                                                foreach ($tags as $tag) { 
                                                    if (isset($exam) && isset($exam->cert_id)) { // Check if $exam is set and $exam->cert_id exists
                                                        foreach ($certs as $cert) { // Assuming $certs is an array of certification objects
                                                            if ($exam->cert_id == $cert->id) { ?>
                                                                <option value="<?php echo $tag->id; ?>"><?php echo $tag->name; ?></option>
                                                            <?php }
                                                        }
                                                    }
                                                }
                                            } ?>
                                        </select>
                                    </div>
                                </div>
                                
                                 <div class="form-group">
                                    <label class="col-lg-3 control-label">Exam Code</label>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Exam Code" name="exam_code" id="exam_code" class="form-control" required="required">
                                    </div>
                                </div>
                                
                               <div class="form-group">
                                    <label class="col-lg-3 control-label">Image</label>
                                    <div class="col-lg-6">
                                        <input type="file"  name="photo" id="photo" class="form-control" required="required">
                                    </div>
                                </div>
                                
                               
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Overview</label>
                                    <div class="col-lg-6">
                                        <textarea placeholder="Exam Description" name="description" id="description" class="ckeditor form-control" ></textarea>
                                    </div>
                                </div>

								<div class="form-group">
                                    <label class="col-lg-3 control-label">Course Detail</label>
                                    <div class="col-lg-6">
                                        <textarea placeholder="Course Detail" name="cdetail" id="cdetail" class="form-control ckeditor"></textarea>
                                    </div>
                                </div>

								<div class="form-group">
                                    <label class="col-lg-3 control-label">Exams</label>
                                    <div class="col-lg-6">
                                        <textarea placeholder="Exams" name="exams" id="exams" class="form-control ckeditor"></textarea>
                                    </div>
                                </div>

								<div class="form-group">
                                    <label class="col-lg-3 control-label">Benefits</label>
                                    <div class="col-lg-6">
                                        <textarea placeholder="Benefits" name="benefits" id="benefits" class="form-control ckeditor"></textarea>
                                    </div>
                                </div>

								<div class="form-group">
                                    <label class="col-lg-3 control-label">Plan</label>
                                    <div class="col-lg-6">
                                        <textarea placeholder="Plan" name="plan" id="plan" class="form-control ckeditor"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Description 2</label>
                                    <div class="col-lg-6">
                                        <textarea placeholder="Seo Description second" name="decription_2" id="decription_2" class="ckeditor form-control" ></textarea>
                                    </div>
                                </div>

								<div class="form-group">
                                    <label class="col-lg-3 control-label">Lab Facilities</label>
                                    <div class="col-lg-6">
                                        <select name="lab" id="lab" class="form-control">
										<option value="0">Select Gallery</option>
										<?php foreach($galleries as $gallery){ ?>
											<option value="<?=$gallery->id?>"><?=$gallery->title?></option>
										<?php } ?>
										</select>
                                    </div>
                                </div>

								<div class="form-group">
                                    <label class="col-lg-3 control-label">Short Description</label>
                                    <div class="col-lg-6">
                                        <textarea placeholder="Short Description" name="short_description" rows="5" id="short_description" class="form-control"></textarea>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Duration</label>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Duration (example : 2 Months)" name="duration" id="Duration" class="form-control" >
                                    </div>
                                </div>
                                
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">SEO Title</label>
                                    <div class="col-lg-6">
                                        <textarea  placeholder="" name="page_title" id="page_title" class="form-control" required="required"></textarea>
                                    </div>
									<label class="col-lg-3" id="title_count_message" style="color: #1fb5ad;"></label>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">SEO Description</label>
                                    <div class="col-lg-6">
                                        <textarea placeholder="" name="seo_desc" id="seo_desc" class="form-control" required="required"></textarea>
                                    </div>
									<label class="col-lg-3" id="seo_desc_count_message" style="color: #1fb5ad;"></label>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">SEO Keywords</label>
                                    <div class="col-lg-6">
                                        <textarea placeholder="" name="keywords" id="keywords" class="form-control" required="required"></textarea>
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