<div class="col-lg-12">
<div id="success-alert" class="alert alert-success" style="display:none"></div>
    <section class="panel">
                        <header class="panel-heading">
                            Edit Mail
                        </header>
                        <div class="panel-body">
                            <form method="POST" class="form-horizontal " id="edit" action="<?php Yii::app()->createUrl("octa/mails/edit");?>">
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Mail Title</label>
                                    <div class="col-lg-6">
                                        <input type="text" name="title" class="form-control" value="<?php echo $mails->mailtitle; ?>" required />
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Testimonial</label>
                                    <div class="col-lg-7">
                                        <div class="compose-editor">
                                            <textarea class="form-control ckeditor" name="description" id="description" rows="9"><?php echo $mails->mailcontent; ?></textarea>
                                            <!--<input type="file" class="default">-->
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

