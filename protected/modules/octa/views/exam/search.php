<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="col-sm-12">
    <div id="success-alert" class="alert alert-success" style="display:none"></div>
      <div id="danger-alert" class="alert alert-danger" style="display:none"></div>
                <section class="panel">
                    <header class="panel-heading" style="text-align: center">
                        Exams Table
                        
                        
                    </header>
                    <div class="col-sm-12" style="text-align:center" >
                        <div style="padding:10px;">
                            <h4>Search</h4>
                        <form id="search-vendor" method="POST" action="<?php echo Yii::app()->createUrl('octa/exam/search');?>">
                             <div class="form-group">
                            <label class="col-lg-2 control-label">Exam Code</label>
                            <div class="col-lg-3">
                                <input type="text" class="form-control" name="exam" required="required"/>
                            </div>
                            <div class="col-lg-3">
                              <input type="submit" class="btn btn-primary"  value="Search"/>  
                            </div>
                             </div> 
                             
                        </form> 
                          <div class="col-lg-2"><a  href="<?php echo Yii::app()->createUrl("octa/exam/addexam");?>"  class="btn btn-success" >Add New Exam</a></div>
                         <div class="col-lg-2"><a href="<?php echo Yii::app()->createUrl("octa/exam"); ?>" class="btn btn-primary">Back</a></div> 
                        </div>
                    </div>
                    <?php if (isset($exam)) { ?>
                    <div class="panel-body">
                        <table class="table  table-hover general-table" >
                            <thead>
                            <tr>
                                <th> Code</th>
                                <th> Url Slug</th>
                                <!-- <th class="hidden-phone">Name</th> -->
                                <th>Vendor</th>
                                <th>Certification</th>
                                <th>Hot</th>
                                <th>Active</th>
                                <th>Updated Date</th>
                                <th>Edit/Delete </th>
								<th>PDF</th>
								<th>Engine</th>
                            </tr>
                            </thead>
                            <tbody>
                            
                            <?php foreach ($exam as $exams) { ?>
                           
                            <tr id="row-<?php echo $exams->id;?>">
                                <td><a href="<?php echo Yii::app()->createUrl("octa/exam/edit",array("id"=>$exams->id));?>"><?php echo $exams->code ?></a></td>
                                <td><?php echo $exams->url; ?></a></td>
                                <? /* <td><a href="#"><?php echo $exams->name ?></a></td> */ ?>
                                
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
                                     
                               
                                
                                <td id="enable-td-<?php echo $exams->id ?>">
                                <?php if ($exams->is_hot>0) { ?>
                                
                                
                                    <a class="process-it"  data-url="<?php echo Yii::app()->createUrl('octa/exam/processhot')?>" data-type="1" data-see="" data-id="<?php echo $exams->id;?>" href="javascript:void(0)"><span class="label label-success label-mini">Yes</span></a>
                                <?php }
                                else { ?>
                                     <a class="process-it" data-url="<?php echo Yii::app()->createUrl('octa/exam/processhot')?>" data-type="2" data-see="" data-id="<?php echo $exams->id;?>" href="javascript:void(0)" ><span class="label label-danger label-mini">No</span></a><?php
                                }
                                ?>
                               </td>
                                <td id="enable-active-td-<?php echo $exams->id ?>">
                                   
                                    <?php if ($exams->status>0){ ?>
                                     <a class="process-it"  data-url="<?php echo Yii::app()->createUrl('octa/exam/processactive')?>" data-type="1" data-see="1"data-id="<?php echo $exams->id;?>" href="javascript:void(0)"><span class="label label-success label-mini">Yes</span></a>
                                    <?php }
                                    else { ?>
                                   <a class="process-it" data-url="<?php echo Yii::app()->createUrl('octa/exam/processactive')?>" data-type="2" data-see="2" data-id="<?php echo $exams->id;?>" href="javascript:void(0)" ><span class="label label-danger label-mini">No</span></a>
                                   <?php  }?>
                                    
                                </td>
                                <td id="date-td-<?=$exams->id;?>">
                                    <?php 
                                        if ($exams->date_updated == "" || $exams->date_updated == "0000-00-00 00:00:00") {
                                            $date = new DateTime($exams->date_added);
                                            echo $date->format('d-M-Y');
                                        } else {
                                            $date = new DateTime($exams->date_updated);
                                            echo $date->format('d-M-Y');
                                        }
                                    ?>
                                </td>
                                <td>
                                    <a href="<?php echo Yii::app()->createUrl("octa/exam/edit",array("id"=>$exams->id));?>"><img src="<?php echo Yii::app()->baseUrl?>/images/write.png" alt=""/></a>
                                    <a href="<?php echo Yii::app()->createUrl("octa/exam/delete",array("id"=>$exams->id));?>" onclick="return confirm('Are you sure you want to delete this exam?')"><img src="<?php echo Yii::app()->baseUrl?>/images/delete-icon.png" alt=""/></a>
                                </td>
<td>
<?php 
$name= $exams->code.".zip";
$dir_path = Yii::getPathOfAlias('webroot') . '/'.Yii::app()->params['folder'].'/full/'.$exams->vendor->name.'/'.$exams->code.'.zip';
if (file_exists($dir_path))
{ ?>
<a href="javascript:void(0)"><span class="label label-success label-mini">Yes</span></a>
<?php }else{ ?>
<a href="javascript:void(0)" ><span class="label label-danger label-mini">N/A</span></a>
<?php } ?>

		
								</td>
								<td>
<?php 
$name= $exams->code.".zip";
$dir_path = Yii::getPathOfAlias('webroot') . '/'.Yii::app()->params['folder'].'/full/'.$exams->vendor->name.'/'.$exams->code.'Sim.zip';
if (file_exists($dir_path))
{ ?>
<a href="javascript:void(0)"><span class="label label-success label-mini">Yes</span></a>
<?php }else{ ?>
<a href="javascript:void(0)"><span class="label label-danger label-mini">N/A</span></a>
<?php } ?>
</td>
                            </tr>
                            <?php } ?>
                            
                           
                            </tbody>
                        </table>
                        
                    </div>
                    <?php }  else 
                    {
                        ?>
                    <div class="panel-body">
                        <p><?php echo $sorry ?></p>
                        
                        
                    </div>
                    <?php
                    }
?>
                        
                </section>
            </div>



