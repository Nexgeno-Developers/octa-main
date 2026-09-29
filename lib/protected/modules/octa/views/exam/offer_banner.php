<div class="col-lg-12">
    <div id="success-alert" class="alert alert-success" style="display:none"></div>

<?php 
$msg = Yii::app()->request->getParam('msg');
if(isset($msg)){
if ($msg == 1) {
    echo '<div class="alert alert-success">Update successful!</div>';
} elseif ($msg == 2) {
    echo '<div id="danger-alert" class="alert alert-danger">Already</div>';
} else {
    echo '<div id="danger-alert" class="alert alert-danger">Something went wrong</div>';
}
}
?>
                    <section class="panel">
                        <header class="panel-heading">
                            Offer Banner Add
                        </header>
                        <div class="panel-body">
                            <form method="POST" class="form-horizontal " id="" action="<?php echo Yii::app()->createUrl("octa/exam/upload_banner");?>" enctype="multipart/form-data">
                                
                               <div class="form-group">
                                    <label class="col-lg-3 control-label">Image</label>
                                    <div class="col-lg-6">
                                        <input type="file"  name="photo" id="photo" class="form-control" required="required">
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