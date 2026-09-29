<?php   require_once Yii::app()->basePath . '/../php_files/functions.php';  ?>


<div class="col-lg-12">

    <?php if (isset($success) && $success == 1) { ?>
        <div id="success-alert" class="alert alert-success" style="display:block"><?php echo $msg; ?></div>
    <?php } else if (isset($success) && $success == -1) { ?>
        <div id="danger-alert" class="alert alert-danger" style="display:block"><?php echo $msg; ?></div>
    <?php } ?>

    <section class="panel">
        <header class="panel-heading">
            Edit Gallery 
        </header>
        <div class="panel-body">
            <form method="POST" id="newarticle" class="form-horizontal" enctype="multipart/form-data"  action="<?php echo Yii::app()->createUrl("octa/gallery/edit"); ?>">

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
                        <input type="text" name="gallery_title" class="form-control field1" value="<?=$users->gallery_name?>"  required="required">
                    </div>
                </div>


<?php


$unixtime = strtotime($users->gallery_date);

$oldDate=date('d', $unixtime).'  ' .date('M', $unixtime) .'  '.date('Y', $unixtime);
?>




                <div class="form-group">
                    <label class="control-label col-md-3">Gallery Date</label>
                    <div class="col-md-4 col-xs-11">

					<span class="help-block" style="font-size: 12px !important">Old Date : <b><?=$oldDate?></b></span>
                        <input class="form-control form-control-inline input-medium default-date-picker" name="gallery_date"  size="16" type="text" value="" />
                        <span class="help-block" style="font-size: 12px !important">Select date</span>

                    </div>
                </div>



                <!--*************************************-->
                <!--*************************************-->
                <div class="form-group">
                    <label class="col-lg-3 control-label">Venue</label>
                    <div class="col-lg-6">
                        <input type="text" name="gallery_venue" value="<?=$users->gallery_venue?>" class="form-control" required="required">
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
                                        $cl = '';

                                        if ($users->gallery_author == $writer->id) {
                                            $cl = 'selected="selected"';
                                        }

                                        echo ' <option ' . $cl . '  value=' . $writer->id . '  >' . $writer->name . '</option>';
                                    }
                                }
                                ?>


                          

                        </select>
                    </div>
                </div>












                <div class="form-group">
                    <label class="col-lg-3 control-label"></label>
                    <div class="col-lg-6">
                        <div class="checkbox">
                            <?php $mG=''; if($users->gallery_main_image==1){$mG='checked="checked"';} ?>
                            <label><input <?=$mG?> type="checkbox" name="mainGalleryImage" >Main Gallery Image</label>
                        </div>
                    </div>
                </div>



                <div class="form-group">
                    <label class="col-lg-3 control-label"></label>
                    <div class="col-lg-6">
                        <div class="checkbox">
                            <?php $mB=''; if($users->gallery_main_box==1){$mB='checked="checked"';} ?>
                            <label><input <?=$mB?> type="checkbox" name="mainbox" >Gallery Image as Main Box</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-3 control-label"></label>
                    <div class="col-lg-6">
                        <div class="checkbox">
                            <?php $lU=''; if($users->gallery_latest_updates==1){$lU='checked="checked"';} ?>
                            <label><input <?=$lU?>  type="checkbox" name="latestupdates" >Gallery Image as latest Updates</label>
                        </div>
                    </div>
                </div>
 <input type="hidden" name='prevId' value="<?=$users->id?>" >

                <div class="form-group">
                    <label class="col-lg-3 control-label">Publish Gallery</label>
                    <div class="col-lg-6">
                        
                        <?php $sT=''; if($users->status==1){$sT='checked="checked"';} ?>
                        <input <?=$sT?> type="checkbox" name="status" class="checkbox"  >
                    </div>
                </div>       

                <div class="form-group">
                    <div class="col-lg-offset-3 col-lg-6">
                        <!--<button class="btn btn-primary" type="submit">Submit</button>-->
                        <button id="upload-button12" class="btn btn-primary " type="submit">Submit</button>

                    </div>
                </div>

            </form>
        </div>
    </section>
</div>