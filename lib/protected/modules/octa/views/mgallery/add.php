<link href="<?php echo Yii::app()->request->baseUrl; ?>/dropimage/style.css" rel="stylesheet"/>
<link href="<?php echo Yii::app()->request->baseUrl; ?>/dropimage/pacifico.css" rel="stylesheet"/>


<style>
    .loading-bar {
        border: 16px solid #f3f3f3;
        border-radius: 50%;
        border-top: 16px solid #3498db;
        width: 120px;
        height: 120px;
        -webkit-animation: spin 2s linear infinite;
        animation: spin 2s linear infinite;
        position: absolute;
        top: 25%;
        left: 36%;
        display: none;
        z-index: 3;
    }

    @-webkit-keyframes spin {
        0% { -webkit-transform: rotate(0deg); }
        100% { -webkit-transform: rotate(360deg); }
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>



<div class="col-lg-12">
    <?php if (isset($success) && $success == 1) { ?>
        <div id="success-alert" class="alert alert-success" style="display:block"><?php echo $msg; ?></div>
    <?php } else if (isset($success) && $success == -1) { ?>
        <div id="danger-alert" class="alert alert-danger" style="display:block"><?php echo $msg; ?></div>
    <?php } ?>
    <section class="panel">
        <header class="panel-heading">
            Add Gallery
        </header>
        <div class="loading-bar"></div>
        
        <div class="panel-body">
            <form method="POST" id="newgallery" class="form-horizontal" enctype="multipart/form-data"  action="<?php echo Yii::app()->createUrl("admin/event/add"); ?>">

                <div class="alert alert-success col-md-8 col-md-offset-2 successdiv" style="display:none">
                    <strong>Success!</strong> Successfully Submitted Gallery.
                </div>

                <div class="alert alert-danger col-md-offset-2 failurediv"   style="display:none">
                    <strong>Failure!</strong> Gallery is not Submitted. Plz Try Again.
                </div>
                
                  <div class="alert alert-danger col-md-offset-2 emptydiv"   style="display:none">
                    <strong>Failure!</strong> Plz enter the Title First.
                </div>

                
                
                
                <div class="form-group">
                    <label class="col-lg-3 control-label">Gallery Title</label>
                    <div class="col-lg-6">
                        <input type="text" name="gallery_title" class="form-control field1" required="required">
                    </div>
                </div>
                
                
                
                
                
                
                
                <div class="form-group">
                    <label class="control-label col-md-3">Gallery Date</label>
                    <div class="col-md-4 col-xs-11">
                        <input class="form-control form-control-inline input-medium default-date-picker" name="gallery_date"  size="16" type="text" value="" />
                        <span class="help-block" style="font-size: 12px !important">Select date</span>

                    </div>
                </div>


                 
                <!--*************************************-->
                <!--*************************************-->
                <div class="form-group">
                    <label class="col-lg-3 control-label">Venue</label>
                    <div class="col-lg-6">
                        <input type="text" name="gallery_venue" class="form-control" required="required">
                    </div>
                </div>
                
                
                
                <div class="form-group">
                    <label class="col-lg-3 control-label">Photographer</label>
                    <div class="col-lg-6">
                        <select class="form-control" id="gallery_author" name='gallery_author'>
                            <option value="">Select Photographer </option>

                         
  <?php
                                $cri = new CDbCriteria();
                                $cri->condition = "account_type=:account_type";
                                $cri->params = array(":account_type" => 6);

                                $writers = UsersAccounts::model()->findAll($cri);
                                if (!empty($writers)) {
                                    foreach ($writers as $writer) {
                         
                                        echo ' <option  value=' . $writer->id . '  >' . $writer->name . '</option>';
                                    }
                                }
                                ?>


                        </select>
                    </div>
                </div>
                
                
                
                
                
                
                
                
                
                
                
                
                 <div class="form-group" >
                    <label class="col-lg-3 control-label">Images Upload</label>
                    <div class="col-lg-6 ">
                        <div id="drop-files" ondragover="return false">
                            Drop Images Here
                        </div>
                        <div id="uploaded-holder">
                            <div id="dropped-files">
                                <div id="upload-button">
                                    <a href="#" class="delete">delete</a>
                                    <span>0 Files</span>
                                </div>
                            </div>
                            <div id="extra-files">
                                <div class="number">
                                    0
                                </div>
                                <div id="file-list">
                                    <ul></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
             

              


                <div class="form-group">
                    <label class="col-lg-3 control-label"></label>
                    <div class="col-lg-6">
                        <div class="checkbox">
                            <label><input type="checkbox" name="mainGalleryImage" >Main Gallery Image</label>
                        </div>
                    </div>
                </div>

              

                <div class="form-group">
                    <label class="col-lg-3 control-label"></label>
                    <div class="col-lg-6">
                        <div class="checkbox">
                            <label><input type="checkbox" name="mainbox" >Gallery Image as Main Box</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-3 control-label"></label>
                    <div class="col-lg-6">
                        <div class="checkbox">
                            <label><input type="checkbox" name="latestupdates" >Gallery Image as latest Updates</label>
                        </div>
                    </div>
                </div>
            

                <div class="form-group">
                    <label class="col-lg-3 control-label">Publish Gallery</label>
                    <div class="col-lg-6">
                        <input type="checkbox" name="status" class="checkbox"  >
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-lg-offset-3 col-lg-6">
                        <!--<button class="btn btn-primary" type="submit">Submit</button>-->
<!--                        <button id="upload-button12" class="btn btn-primary upload" type="submit">Submit</button>-->


  <button id="upload-button12" data-form="newgallery" data-url="<?= Yii::app()->baseUrl ?>/admin/gallery/addgallery"    data-url2="<?= Yii::app()->baseUrl ?>/admin/gallery"  class="btn btn-primary upload" type="button">Submit</button>
                    </div>
                </div>
                
            </form>
        </div>
    </section>
</div>