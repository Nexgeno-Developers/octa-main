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
                       <a href="<?php echo Yii::app()->createUrl('octa/cert/export');?>" class='btn btn-primary'> Export All Certifications </a>
                        
                        
                    </header>
                   <div class="col-sm-12" style="text-align:center" >
                     <div style="padding:10px;">
                            <h4>Search</h4>
                        <form id="search-vendor" method="POST" action="<?php echo Yii::app()->createUrl('octa/cert/search');?>">
                             <div class="form-group">
                            <label class="col-lg-2 control-label">Certification Name</label>
                            <div class="col-lg-2">
                            <input type="text" class="form-control" name="cert" required="required"/>
                            </div>
                            <div class="col-lg-2">
                              <input type="submit" class="btn btn-primary"  value="Search"/>  
                            </div>
                             </div> 
                             
                        </form> 
                            <div class="col-lg-2"><a href="<?php echo Yii::app()->createUrl("octa/cert/addcert");?>" class="btn btn-success" >Add New Cert</a></div>
                            <div class="col-lg-2"><a href="<?php echo Yii::app()->createUrl("octa/cert/enableall");?>" class="btn btn-primary" >Enable All</a></div>
                            <div class="col-lg-2"><a  href="<?php echo Yii::app()->createUrl("octa/cert/disableall");?>"  class="btn btn-danger" >Disable All</a></div>
                            
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table  table-hover general-table" >
                            <thead>
                            <tr>
                                <th> Name</th>
                                <th> Url </th>
                                <th class="hidden-phone">Vendor</th>
                                <th>Exams</th>
                                <th>Hot</th>
                                <th>Active</th>
                                <th>Updated Date</th>
                                <th>Edit </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($cert as $certs) { ?>
                            <tr id="row-<?php echo $certs->id;?>">
                                <td><a href="<?php echo Yii::app()->createUrl("octa/cert/edit",array("id"=>$certs->id));?>"><?php echo $certs->name ?></a></td>
                                <td><?php echo $certs->url; ?></td>
                                <td class="hidden-phone"><?php echo $certs->vendor->name; ?></td>
                                
                                <td><?php echo count($certs->exam);?></td>
                                
                                <td id="enable-td-<?php echo $certs->id ?>">
                                <?php if ($certs->is_hot>0) { ?>
                                
                                
                                    <a class="process-it"  data-url="<?php echo Yii::app()->createUrl('octa/cert/processhot')?>" data-type="1" data-see=""  data-id="<?php echo $certs->id;?>" href="javascript:void(0)"><span class="label label-success label-mini">Yes</span></a>
                                <?php }
                                else { ?>
                                     <a class="process-it" data-url="<?php echo Yii::app()->createUrl('octa/cert/processhot')?>" data-type="2" data-see=""   data-id="<?php echo $certs->id;?>" href="javascript:void(0)" ><span class="label label-danger label-mini">No</span></a><?php
                                }
                                ?>
                               </td>
                                <td id="enable-active-td-<?php echo $certs->id ?>">
                                    <?php if ($certs->status>0){ ?>
                                     <a class="process-it"  data-url="<?php echo Yii::app()->createUrl('octa/cert/processactive')?>" data-type="1" data-see="1" data-id="<?php echo $certs->id;?>" href="javascript:void(0)"><span class="label label-success label-mini">Yes</span></a>
                                    <?php }
                                    else { ?>
                                   <a class="process-it" data-url="<?php echo Yii::app()->createUrl('octa/cert/processactive')?>" data-type="2" data-see="2" data-id="<?php echo $certs->id;?>" href="javascript:void(0)" ><span class="label label-danger label-mini">No</span></a>
                                   <?php  }?>
                                    
                                </td>
                                <td id="date-td-<?=$certs->id;?>">

                                    <?php 
                                        if ($certs->date_updated == "" || $certs->date_updated == "0000-00-00 00:00:00") {
                                             echo date('d-M-Y', strtotime($certs->date_added));
                                        } else {
                                             echo date('d-M-Y', strtotime($certs->date_updated));
                                        }
                                     ?>
                                   
                                </td>
                                <td>
                                    <a href="<?php echo Yii::app()->createUrl("octa/cert/edit",array("id"=>$certs->id));?>"><img src="<?php echo Yii::app()->baseUrl?>/images/write.png" alt=""/></a>
                                    <a href="<?php echo Yii::app()->createUrl("octa/cert/delete",array("id"=>$certs->id));?>" onclick="return confirm('Are you sure you want to Delete Cert? It will also Delete All Exams under it?');" ><img src="<?php echo Yii::app()->baseUrl?>/images/delete-icon.png" alt=""/></a>
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


