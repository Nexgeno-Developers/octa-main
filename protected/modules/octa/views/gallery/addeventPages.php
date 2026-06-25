<div class="col-lg-12">
      <?php if (isset($flag) && $flag==1) { ?>
    <div id="success-alert" class="alert alert-success">Gallery Added Successfully</div>
    <?php } else if (isset($flag) && $flag ==-1) { ?>
    <div id="danger-alert" class="alert alert-danger"><?php  print_r($error) ?></div>
    <?php } ?>
    <div id="success-alert" class="alert alert-success" style="display:none"></div>
    <div id="danger-alert" class="alert alert-danger" style="display:none"></div>
            <section class="panel">
                        
                        <div class="panel-body">
                            <form method="POST" class="form-horizontal "  action="<?php Yii::app()->createUrl("admin/gallery/addeventPages");?>" enctype="multipart/form-data">
                                <h3 class="prf-border-head">ADD Gallery</h3>

								<div class="form-group">
                                    <label class="col-lg-3 control-label">Gallery Type</label>
                                    <div class="col-lg-6">
                                        <select type="text" class="form-control" required="required">
											<option value="1">Course</option>
											<option value="2">Gallery Page</option>
										</select>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Event Title</label>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Event Title" name="eventTitle" id="event"  class="form-control" required="required">
                                    </div>
                                </div>

								
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Event Content</label>
                                    <div class="col-lg-6">
                                        <textarea rows="10" class="form-control" name="eventContent" id="eventContent" placeholder="Enter Page Content" required="required"></textarea>

                                    </div>
                                </div>
                                
                                 <div class="form-group">
                                    <label class="col-lg-3 control-label">Is Active</label>
                                    <div class="col-lg-1">
                                        <input type="checkbox"  name="is_active"  class="form-control" required="required">
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

