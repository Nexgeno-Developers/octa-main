<div class="col-lg-12">
    <div id="success-alert" class="alert alert-success" style="display:none"></div>
    <div id="danger-alert" class="alert alert-danger" style="display:none"></div>
                    <section class="panel">
                        <header class="panel-heading">
                            Add Multi Exams
                        </header>
                        <div class="panel-body">


<?php if(!empty($msg)){ ?>
<div id="success-alert" class="alert alert-success"><?=$msg?></div>
<?php } ?>

                            <form method="POST" class="form-horizontal " enctype="multipart/form-data" action="<?php Yii::app()->createUrl("octa/default/bulkexams");?>">
                                
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">File</label>
                                    <div class="col-lg-6">
                                        <input type="file" class="form-control" name="photo" />
                                    </div>
                                </div>
                               
                                
                                <div class="form-group">
                                    <div class="col-lg-offset-3 col-lg-6">
										<input type="hidden" name="import" value="exams" />
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                                </div>
                                
                                
                                
                            </form>

							<a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/samplefile.csv">Download Sample File</a>

                        </div>
                    </section>
</div>