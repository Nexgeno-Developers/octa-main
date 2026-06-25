<div class="col-lg-12">
<div id="success-alert" class="alert alert-success" style="display:none"></div>
	<?php 
	$msg = Yii::app()->request->getParam('msg'); ?>
<?php if($msg == 2){ ?>
    <div id="danger-alert" class="alert alert-danger">Already</div>
<?php } ?>
    <section class="panel">
                        <header class="panel-heading">
                            Edit Exam
                        </header>
                        <div class="panel-body">
                            <form method="POST" class="form-horizontal " id="" action="<?php echo Yii::app()->createUrl("octa/exam/edit");?>" enctype="multipart/form-data">
                                
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Exam Code</label>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Exam Code" name="exam_code" id="exam_code" class="form-control" value="<?php echo $exam->code; ?>" required="required">
                                    </div>
                                </div>
																 <div class="form-group">
                                    <label class="col-lg-3 control-label">Image Course Icon</label>
                                    <div class="col-lg-6">
                                        <input type="file"  name="photo" id="photo" class="form-control">
                                    </div>
                                </div>
																<div class="form-group">
                                    <label class="col-lg-3 control-label">H1 title</label>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="H1 title" name="h1_title" id="h1_title" class="form-control" value="<?php echo $exam->h1_title; ?>" required="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">H1 Description</label>
                                    <div class="col-lg-6">
                                        <textarea placeholder="Seo Description second" name="h1_description" id="h1_description" class="form-control ckeditor"><?php echo $exam->h1_description;?></textarea>
                                    </div>
                                </div>
								<div class="form-group">
                                    <label class="col-lg-3 control-label">Slug</label>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="URL Slug" name="url_slug" id="url_slug" class="form-control" value="<?php echo $exam->url; ?>" required="required">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Vendor Name</label>
                                    <div class="col-lg-6">
                                        <select class="dropdown form-control" id="vendor_exam" data-url="<?php echo Yii::app()->createUrl("octa/exam/getcerts");?>" name="vendor" required="required">
                                            <option>Please Select Vendor</option>
                                            <?php foreach($vendor as $vendors) { 
                                               if ($exam->vendor_id==$vendors->id)
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
                                
                                <div class="form-group" id="cert_dropdown" >
                                    <label class="col-lg-3 control-label">Cert Name</label>
                                    <div class="col-lg-6" id="cert">
										<select name='cert' class='dropdown form-control' required='required'>
										<?php if (!empty($cert)) {  

											foreach($cert as $certs) { 
                                               if ($exam->cert_id==$certs->id)
                                               { ?>
                                            <option selected value="<?php echo $certs->id; ?>"><?php echo $certs->name; ?></option>
                                              <?php } else {  ?>
                                            <option value="<?php echo $certs->id; ?>"><?php echo $certs->name; ?></option>
                                              <?php }
                                              
                                              }
											}
                                            ?>
                                            
                                            
                                        </select>
                                        
                                    </div>
                                </div>
                                <div class="form-group" id="cert_dropdown">
    <label class="col-lg-3 control-label">Tag Name</label>
    <div class="col-lg-6" id="cert">
        <select name='tag_ids[]' class='dropdown form-control select2' multiple>
            <?php 
            $tag_ids = json_decode($exam->tag_ids);
            if (!is_array($tag_ids)) {
                $tag_ids = []; // Default to an empty array if decoding fails or returns null
            }
            foreach($tags as $tag): ?>
                <option <?php if (in_array($tag->id, $tag_ids)){ echo 'selected'; } ?> value="<?php echo $tag->id; ?>">
                    <?php echo $tag->name; ?>
                </option>
            <?php endforeach; ?>
        </select>
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
                                    <label class="col-lg-3 control-label">Course Highlights</label>
                                    <div class="col-lg-6">
                                        <textarea placeholder="Course Highlights" name="course_highlights" id="course_highlights" class="form-control ckeditor"><?php echo $exam->course_highlights;?></textarea>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Overview</label>
                                    <div class="col-lg-6">
                                        <textarea placeholder="Overview" name="description" id="description" class="form-control ckeditor"><?php echo $exam->description;?></textarea>
                                    </div>
                                </div>

								<div class="form-group">
                                    <label class="col-lg-3 control-label">Course Detail (<a href="<?php echo Yii::app()->createUrl("octa/topics/add");?>" target="_blank">Add Topics</a>)</label>
                                    <div class="col-lg-6">
                                        <textarea placeholder="Course Detail" name="cdetail" id="cdetail" class="form-control ckeditor"><?php echo $exam->cdetail;?></textarea>
                                    </div>
                                </div>

								<div class="form-group">
                                    <label class="col-lg-3 control-label">Exams</label>
                                    <div class="col-lg-6">
                                        <textarea placeholder="Exams" name="exams" id="exams" class="form-control ckeditor"><?php echo $exam->exams;?></textarea>
                                    </div>
                                </div>

								<div class="form-group">
                                    <label class="col-lg-3 control-label">Benefits</label>
                                    <div class="col-lg-6">
                                        <textarea placeholder="Benefits" name="benefits" id="benefits" class="form-control ckeditor"><?php echo $exam->benefits;?></textarea>
                                    </div>
                                </div>

								<div class="form-group">
                                    <label class="col-lg-3 control-label">Plan</label>
                                    <div class="col-lg-6">
                                        <textarea placeholder="Plan" name="plan" id="plan" class="form-control ckeditor"><?php echo $exam->plan;?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Description 2</label>
                                    <div class="col-lg-6">
                                        <textarea placeholder="Seo Description second" name="decription_2" id="decription_2" class="form-control ckeditor"><?php echo $exam->decription_2;?></textarea>
                                    </div>
                                </div>
																<div class="form-group">
                                    <label class="col-lg-3 control-label">Offer Banner</label>
                                    <div class="col-lg-6">
                                        <input type="file"  name="offer_banner" id="offer_banner" class="form-control">
                                    </div>
                                </div>

								<div class="form-group">
                                    <label class="col-lg-3 control-label">FAQs</label>
                                    <div class="col-lg-6">
                                        <a href="<?php echo Yii::app()->createUrl("octa/faqs/add");?>" class="btn btn-warning" target="_blank">Add FAQs</a>
                                    </div>
                                </div>
																
																
																<div class="form-group">
                                    <label class="col-lg-3 control-label">Free Resources</label>
                                    <div class="col-lg-6">
                                        <textarea placeholder="Free Resources" name="free_resources" id="free_resources" class="form-control ckeditor"><?php echo $exam->free_resources;?></textarea>
                                    </div>
                                </div>

								<div class="form-group">
                                    <label class="col-lg-3 control-label">Demo</label>
                                    <div class="col-lg-6">
                                        <a href="<?php echo Yii::app()->createUrl("octa/demos/add");?>" class="btn btn-warning" target="_blank">Add Demo</a>
                                    </div>
                                </div>

								<div class="form-group">
                                    <label class="col-lg-3 control-label">Lab Facilities</label>
                                    <div class="col-lg-6">
                                        <select name="lab" id="lab" class="form-control">
										<option value="">Select Gallery</option>
										<?php foreach($galleries as $gallery){ ?>
											<?php if($exam->lab == $gallery->id){ ?>
											<option value="<?=$gallery->id?>" selected="selected"><?=$gallery->title?></option>
											<?php }else{ ?>
											
											<option value="<?=$gallery->id?>"><?=$gallery->title?></option>
											<?php } ?>
										<?php } ?>
										</select>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Short Description</label>
                                    <div class="col-lg-6">
                                        <textarea placeholder="Short Description" name="short_description" rows="5" id="short_description" class="form-control"><?php echo $exam->short_description;?></textarea>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Duration</label>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Duration (example : 2 Months)" name="duration" id="Duration" class="form-control" value="<?php echo $exam->duration; ?>" >
                                    </div>
                                </div>
                                
                                
                                
                                
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">SEO Title</label>
                                    <div class="col-lg-6">
                                        <textarea  placeholder="" name="page_title" id="page_title" class="form-control" required="required"><?php echo $exam->meta_title;?></textarea>
                                    </div>
									<label class="col-lg-3" id="title_count_message" style="color: #1fb5ad;"></label>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">SEO Description</label>
                                    <div class="col-lg-6">
                                        <textarea placeholder="" name="seo_desc" id="seo_desc"  class="form-control" required="required"><?php echo $exam->meta_desc;?></textarea>
                                    </div>
									<label class="col-lg-3" id="seo_desc_count_message" style="color: #1fb5ad;"></label>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">SEO Keywords</label>
                                    <div class="col-lg-6">
                                        <textarea  placeholder="" name="keywords" id="keywords" class="form-control" required="required"><?php echo $exam->meta_keywords;?></textarea>
                                    </div>
                                </div>
                                
                                
                                
                                <div class="form-group ">
                                        <label for="agree" class="control-label col-lg-3 col-sm-3">Is Hot</label>
                                        <div class="col-lg-6 col-sm-9">
                                            <?php if ($exam->is_hot>0) { ?>
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
                                            <?php if ($exam->status>0) { ?>
                                            <input  type="checkbox" checked="checked" style="width: 20px" class="checkbox form-control"  id="is_active" name="status" />
                                            <?php }
                                            else { ?> 
                                            <input  type="checkbox"  style="width: 20px" class="checkbox form-control"  id="is_active" name="status" />
                                            <?php } ?>
                                            

                                            
                                        </div>
                                </div>
                                
                                <input type="hidden" name="id" value="<?php echo $exam->id;?>"/>
                                
                                <div class="form-group">
                                    <div class="col-lg-offset-3 col-lg-6">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                                </div>
                                
                                
                                
                            </form>
                        </div>
                    </section>
</div>