<div class="col-lg-12">
      <?php if (isset($flag) && $flag==1) { ?>
    <div id="success-alert" class="alert alert-success">Event Details Edited Successfully</div>
    <?php } else if (isset($flag) && $flag ==-1) { ?>
    <div id="danger-alert" class="alert alert-danger"><?php  print_r($error) ?></div>
    <?php } ?>
    <div id="success-alert" class="alert alert-success" style="display:none"></div>
    <div id="danger-alert" class="alert alert-danger" style="display:none"></div>
            <section class="panel">
                        
                        <div class="panel-body">
                            <form method="POST" class="form-horizontal "  action="<?php Yii::app()->createUrl("admin/event/editeventpages");?>" enctype="multipart/form-data">
                                <h3 class="prf-border-head">ADD Events</h3>
	
								<div class="form-group">
                                    <label class="col-lg-3 control-label">Gallery Type</label>
                                    <div class="col-lg-6">
                                        <select type="text" class="form-control" required="required">
											<?php if($page->type == 1){ ?>
											<option value="1" selected="selected">Course</option>
											<option value="2">Gallery Page</option>
											<?php }else if($page->type == 2){ ?>
											<option value="1">Course</option>
											<option value="2" selected="selected">Gallery Page</option>
											<?php } ?>
										</select>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Event Title</label>
                                    <div class="col-lg-6">
                                        <input type="text" value="<?php echo $page->title; ?>" placeholder="Event Title" name="eventTitle" id="event"  class="form-control" required="required">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Event Content</label>
                                    <div class="col-lg-6">
                                        <textarea rows="10" class="form-control" name="eventContent" id="eventContent" placeholder="Enter Page Content" required="required"><?php echo $page->content; ?></textarea>

                                    </div>
                                </div>
                                <input type="hidden" name="prevId" value="<?php echo $page->id; ?>" />
                                
                                 <div class="form-group">
                                    <label class="col-lg-3 control-label">Is Active</label>
                                    <div class="col-lg-1">
                                        <?php if($page->status==1){ ?>
                                        <input type="checkbox" checked="checked"  name="is_active"  class="form-control" required="required">
                                        <?php }else{ ?>
                                        <input type="checkbox" checked="checked"  name="is_active"  class="form-control" required="required">                                        
                                        <?php } ?>
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

