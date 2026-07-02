<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="col-sm-12">
    <div id="success-alert" class="alert alert-success" style="display:none"></div>
                <section class="panel">
                    <header class="panel-heading" style="text-align: center">
                        <a href="<?php echo Yii::app()->createUrl('octa/vendor/export');?>" class="btn btn-primary">Export all Vendors</a>
                        
                        
                    </header>
                    <div class="col-sm-12" style="text-align: center">
                        <div style="padding:10px;">
                            <h4>Search</h4>
                        <form id="search-vendor" method="POST" action="<?php echo Yii::app()->createUrl('octa/vendor/search');?>">
                             <div class="form-group">
                            <label class="col-lg-2 control-label">Vendor Name</label>
                            <div class="col-lg-2">
                                <input type="text" class="form-control" name="vendor" required="required"/>
                            </div>
                            <div class="col-lg-2">
                              <input type="submit" class="btn btn-primary"  value="Search"/>  
                            </div>
                             </div> 
                             
                        </form> 
                            <div class="col-lg-2"><a  href="<?php echo Yii::app()->createUrl("octa/vendor/addvendor");?>"  class="btn btn-success" >Add new Vendor</a></div>
                            <div class="col-lg-2"><a  href="<?php echo Yii::app()->createUrl("octa/vendor/enableall");?>"  class="btn btn-primary" >Enable All</a></div>
                            <div class="col-lg-2"><a  href="<?php echo Yii::app()->createUrl("octa/vendor/disableall");?>"  class="btn btn-danger" >Disable All</a></div>
                            
                            
                        </div>
                        
                        
                       
                    </div>
                    <div class="panel-body" id="vendor-row">
                        <table class="table  table-hover general-table" >
                            <thead>
                            <tr>
                                <th> Name</th>
                                <th> Url </th>
                                <th class="hidden-phone">Certs</th>
                                <th>Exams</th>
                                <th>Hot</th>
                                <th>Active</th>
                                <th>Updated Date</th>
                                <th>Edit/Delete </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($vendor as $vendors) { ?>
                            <tr id="row-<?php echo $vendors->id;?>">
                                <td><a href="<?php echo Yii::app()->createUrl("octa/vendor/edit",array("id"=>$vendors->id));?>"><?php echo $vendors->name ?></a></td>
                                <td><?php echo $vendors->url; ?></td>
                                <td class="hidden-phone"><?php echo count($vendors->cert); ?></td>
                                
                                <td><?php echo count($vendors->exam);?></td>
                                <td id="enable-td-<?php echo $vendors->id ?>">
                                <?php if ($vendors->is_hot>0) { ?>
                                
                                
                                    <a class="process-it"  data-url="<?php echo Yii::app()->createUrl('octa/vendor/processhot')?>" data-type="1" data-see=""  data-id="<?php echo $vendors->id;?>" href="javascript:void(0)"><span class="label label-success label-mini">Yes</span></a>
                                <?php }
                                else { ?>
                                     <a class="process-it" data-url="<?php echo Yii::app()->createUrl('octa/vendor/processhot')?>" data-type="2" data-see=""   data-id="<?php echo $vendors->id;?>" href="javascript:void(0)" ><span class="label label-danger label-mini">No</span></a><?php
                                }
                                ?>
                               </td>
                                <td id="enable-active-td-<?php echo $vendors->id ?>">
                                    <?php if ($vendors->status>0){ ?>
                                     <a class="process-it"  data-url="<?php echo Yii::app()->createUrl('octa/vendor/processactive')?>" data-type="1" data-see="1" data-id="<?php echo $vendors->id;?>" href="javascript:void(0)"><span class="label label-success label-mini">Yes</span></a>
                                    <?php }
                                    else { ?>
                                   <a class="process-it" data-url="<?php echo Yii::app()->createUrl('octa/vendor/processactive')?>" data-type="2" data-see="2" data-id="<?php echo $vendors->id;?>" href="javascript:void(0)" ><span class="label label-danger label-mini">No</span></a>
                                   <?php  }?>
                                    
                                </td>
                                <td id="date-td-<?=$vendors->id;?>">
                                    <?php 
                                        if ($vendors->date_updated == "" || $vendors->date_updated == "0000-00-00 00:00:00") {
                                            echo date('d-M-Y', strtotime($vendors->date_added));
                                        } else {
                                            echo date('d-M-Y', strtotime($vendors->date_updated));
                                        }
                                    ?>
                                </td>
                                <td>
                                    <a href="<?php echo Yii::app()->createUrl("octa/vendor/edit",array("id"=>$vendors->id));?>"><img src="<?php echo Yii::app()->baseUrl?>/images/write.png" alt=""/></a>
                                    <a  href="<?php echo Yii::app()->createUrl("octa/vendor/delete",array("id"=>$vendors->id));?>" onclick="return confirm('Are you sure you want to Delete Vendor? It will also Delete Certs and Exams under it?');"  ><img src="<?php echo Yii::app()->baseUrl?>/images/delete-icon.png" alt=""/></a>
                                </td>
                            </tr>
                            <?php } ?>
                           
                            </tbody>
                        </table>
                    </div>
                    
                        <div style="text-align: center">
                     <?php                        
    $this->widget('CLinkPager', array(
        'pages' => $pages,
        'header' =>  "<nav>",
        'nextPageLabel' => 'Next',
        'prevPageLabel' => 'Prev',
        'selectedPageCssClass' => 'active',
        'hiddenPageCssClass' => 'disabled',
        'htmlOptions' => array(
            'class' => 'pagination',
        )
    ))
    ?>
                    </div>
                    
                </section>
            </div>


