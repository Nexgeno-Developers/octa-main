<?php

$cri=new CDbCriteria();
$cri->condition=" is_hot = 1";
$cri->order=" id DESC";
$totalLimit = 20;
$examcount = Exam::model()->count($cri);



if(Yii::app()->request->getParam("delete") != null && Yii::app()->request->getParam("delete") == "allhot"){

$cri = new CDbCriteria();
Exam::model()->updateAll(array("is_hot"=>0),$cri);	
$msg = "Remove All Hot Exams Successfully";

}




?>
<div class="col-sm-12">
    <div id="success-alert" class="alert alert-success" style="display:none"></div>
    <div id="danger-alert" class="alert alert-danger" style="display:none"></div>
                <section class="panel">
                    <header class="panel-heading" style="text-align: center">
                    </header>
                    <div class="col-sm-12" style="text-align:center" >
                        <div style="padding:10px;">
                            <h3 class="text-success">Hot Exams Maximum Limit <?=$totalLimit?></h3>

<?php if($examcount >= $totalLimit){ ?>

	<h4 class="text-danger">Please Remove a top exam to add a new one at it place</h4>

<?php }else{ ?>

                        <form id="search-vendor" method="POST" action="<?php echo Yii::app()->createUrl('octa/exam/addhot');?>">
                             <div class="form-group">
                            <label class="col-lg-2 control-label">Exam Code</label>
                            <div class="col-lg-3">
                                <select class="selectpicker" data-live-search="true" name="hotcode">
<option>Select Exam Code</option>

<?php 

$cri = new CDbCriteria();
$cri->condition = "status=1 AND is_hot=0 AND is_top=0";
$lexam = Exam::model()->findAll($cri);

foreach($lexam as $lexams){

?>

  <option value="<?php echo $lexams->id; ?>"><?php echo $lexams->code; ?></option>

<?php } ?>

</select>

                            </div>
                            <div class="col-lg-2">
                              <input type="submit" class="btn btn-primary"  value="Add Hot Exam"/>  
                            </div>
                             </div> 
                             
                        </form> 
                            
<?php } ?>                        
                        </div>
<div class="col-lg-2">
                              
                            </div>

							<div class="col-lg-2">
								
									
                              		<a href="<?php echo Yii::app()->createUrl("octa/exam/hotexams",array("delete"=>"allhot"));?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete all hot exams?')">Delete All Hot Exams</a>
								
                            </div>
                    </div>
                    <div class="panel-body">
                        <table class="table  table-hover general-table" >
                            <thead>
                            <tr><th> Sr. #</th>
                                <th> Code</th>
                                <th> Url Slug </th>
                                <th class="hidden-phone">Name</th>
                                <th>Vendor</th>
                                <th>Certification</th>
                                <th>Updated Date</th>
                                <th>Delete </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php 
							$counter = 0;
							foreach ($exam as $exams) { $counter++; ?>
                            <tr id="row-<?php echo $exams->id;?>">
								<td><?=$counter?></td>
                                <td><?php echo $exams->code ?></td>
                                <td><?php echo $exams->url; ?></td>
                                <td><a href="#"><?php echo $exams->name ?></a></td>
                                
                                <?php if (!empty($exams->vendor)) { ?>
                                <td class="hidden-phone"><?php echo $exams->vendor->name; ?></td>
                                <?php } else { ?>
                                     <td class="hidden-phone">No Vendor Assigned</td>
                                <?php } ?>
                                
                                 <?php if (!empty($exams->cert)) { ?>
                                        <td><?php echo $exams->cert->name;?></td>
                                <?php } else { ?>
                                     <td class="hidden-phone">No Certification Assigned</td>
                                <?php } ?>

                                <td id="date-td-<?=$exams->id;?>">
                                    <?php 
if($exams->date_updated == "" || $exams->date_updated == "0000-00-00 00:00:00"){

echo  Yii::app()->dateFormatter->format('dd-MMM-y',$exams->date_added);

}else{

echo  Yii::app()->dateFormatter->format('dd-MMM-y',$exams->date_updated);

}


 ?>
                                </td>
                                <td>
                                    <a href="<?php echo Yii::app()->createUrl("octa/exam/hotdelete",array("id"=>$exams->id));?>" onclick="return confirm('Are you sure you want to delete this exam?')"><img src="<?php echo Yii::app()->baseUrl?>/images/delete-icon.png" alt=""/></a>
                                </td>
							
                            </tr>
                            <?php } ?>
                           
                            </tbody>
                        </table>
                    </div>
                    <div style="text-align: center">
                     
                    </div>
                        
                </section>
            </div>


