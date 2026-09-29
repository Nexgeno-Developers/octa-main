<div class="col-lg-12">
    <div id="success-alert" class="alert alert-success" style="display:none"></div>
    <div id="danger-alert" class="alert alert-danger" style="display:none"></div>
                    <section class="panel">
                        <header class="panel-heading">
                            Edit Slider
                        </header>
                        <div class="panel-body">
                            <form method="POST" class="form-horizontal " enctype="multipart/form-data" action="<?php Yii::app()->createUrl("octa/default/editslider");?>">
                                
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Slider</label>
                                    <div class="col-lg-6">
                                        <input type="file" class="form-control" name="photo" />
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