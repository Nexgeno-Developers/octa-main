<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



$vendor = new CDbCriteria();
$vendor->addCondition('status =:status AND (price != :price1 OR price != :price2)');
$vendor->params = array("status"=>1,"price1"=>"","price2"=>0);
$vDetail = Vendor::model()->findAll($vendor);

$examm = new CDbCriteria();
$examm->addCondition('status =:status AND (price != :price1 OR price != :price2)');
$examm->params = array("status"=>1,"price1"=>"","price2"=>0);
$eDetail = Exam::model()->findAll($examm);



?>

<div class="col-sm-12">
    <div id="success-alert" class="alert alert-success" style="display:none"></div>
                <section class="panel">
                    <header class="panel-heading" style="text-align: center">
                        Global Prices Table
                        
                        
                    </header>
                    <div class="col-sm-12" style="text-align: center">
                        
                       
                    </div>
                    <div class="panel-body" id="vendor-row">
                        <table class="table  table-hover general-table" >
                            <thead>
                            <tr>
                                <th> Name</th>
                                <th> Price </th>
                                <th class="hidden-phone">Swreg</th>
                                <th>Edit </th>
                            </tr>
                            </thead>
                            <tbody>
							<tr>
                              <td colspan="4" class="alert alert-danger">Default Prices</td>
							</tr>
                            <?php foreach ($price as $prices) { ?>
                            
                            <tr id="row-<?php echo $prices->pri_id;?>">
                                <td><a href="<?php echo Yii::app()->createUrl("octa/default/editprice",array("id"=>$prices->pri_id));?>"><?php echo $prices->detail ?></a></td>
                                
                                <td>$<?=$prices->pri_value?></td>
								<td><?=$prices->pri_swreg?></td>
                                <td>
                                    <a href="<?php echo Yii::app()->createUrl("octa/default/editprice",array("id"=>$prices->pri_id));?>"><img src="<?php echo Yii::app()->baseUrl?>/images/write.png" alt=""/></a>
                                </td>
                            </tr>
                            <?php } ?>
		
							<tr>
                              <td colspan="4" class="alert alert-danger">Microsoft/Cisco Default Prices</td>
							</tr>
							<?php foreach($vDetail as $vDetails){  ?>
								<tr id="row-<?php echo $vDetails->id;?>">
                                <td><a href="<?php echo Yii::app()->createUrl("octa/vendor/edit",array("id"=>$vDetails->id));?>"><?=$vDetails->name?> All PDF Exams</a></td>
                                
                                <td>$<?=$vDetails->price?></td>
								<td><?=$vDetails->swreg?></td>
                                <td>
                                    <a href="<?php echo Yii::app()->createUrl("octa/vendor/edit",array("id"=>$vDetails->id));?>"><img src="<?php echo Yii::app()->baseUrl?>/images/write.png" alt=""/></a>
                                </td>
                            </tr>
								<tr id="row-<?php echo $vDetails->id;?>">
                                <td><a href="<?php echo Yii::app()->createUrl("octa/vendor/edit",array("id"=>$vDetails->id));?>"><?=$vDetails->name?> All Engine Exams</a></td>
                                
                                <td>$<?=$vDetails->engine_price?></td>
								<td><?=$vDetails->engine_swreg?></td>
                                <td>
                                    <a href="<?php echo Yii::app()->createUrl("octa/vendor/edit",array("id"=>$vDetails->id));?>"><img src="<?php echo Yii::app()->baseUrl?>/images/write.png" alt=""/></a>
                                </td>
                            </tr>

							<tr id="row-<?php echo $vDetails->id;?>">
                                <td><a href="<?php echo Yii::app()->createUrl("octa/vendor/edit",array("id"=>$vDetails->id));?>"><?=$vDetails->name?> All PDF + Engine Exams</a></td>
                                
                                <td>$<?=$vDetails->both_price?></td>
								<td><?=$vDetails->both_swreg?></td>
                                <td>
                                    <a href="<?php echo Yii::app()->createUrl("octa/vendor/edit",array("id"=>$vDetails->id));?>"><img src="<?php echo Yii::app()->baseUrl?>/images/write.png" alt=""/></a>
                                </td>
                            </tr>

							<?php } ?>
							<tr>
                              <td colspan="4" class="alert alert-danger">Special Codes</td>
							</tr>
							<?php foreach($eDetail as $eDetails){  ?>
							<?php if($eDetails->questions != 0){ ?>
								<tr id="row-<?php echo $eDetails->id;?>">
                                <td><a href="<?php echo Yii::app()->createUrl("octa/exam/edit",array("id"=>$eDetails->id));?>"><?=$eDetails->code?> PDF</a></td>
                                
                                <td>$<?=$eDetails->price?></td>
								<td><?=$eDetails->swreg?></td>
                                <td>
                                    <a href="<?php echo Yii::app()->createUrl("octa/exam/edit",array("id"=>$eDetails->id));?>"><img src="<?php echo Yii::app()->baseUrl?>/images/write.png" alt=""/></a>
                                </td>
                            </tr>

							<tr id="row-<?php echo $eDetails->id;?>">
                                <td><a href="<?php echo Yii::app()->createUrl("octa/exam/edit",array("id"=>$eDetails->id));?>"><?=$eDetails->code?> Engine</a></td>
                                
                                <td>$<?=$eDetails->engine_price?></td>
								<td><?=$eDetails->engine_swreg?></td>
                                <td>
                                    <a href="<?php echo Yii::app()->createUrl("octa/exam/edit",array("id"=>$eDetails->id));?>"><img src="<?php echo Yii::app()->baseUrl?>/images/write.png" alt=""/></a>
                                </td>
                            </tr>

							<tr id="row-<?php echo $eDetails->id;?>">
                                <td><a href="<?php echo Yii::app()->createUrl("octa/exam/edit",array("id"=>$eDetails->id));?>"><?=$eDetails->code?> PDF + Testing Engine</a></td>
                                
                                <td>$<?=$eDetails->both_price?></td>
								<td><?=$eDetails->both_swreg?></td>
                                <td>
                                    <a href="<?php echo Yii::app()->createUrl("octa/exam/edit",array("id"=>$eDetails->id));?>"><img src="<?php echo Yii::app()->baseUrl?>/images/write.png" alt=""/></a>
                                </td>
                            </tr>
							<?php } ?>
							<?php } ?>
                           
                            </tbody>
                        </table>
                    </div>
                    
                        <div style="text-align: center">
                     
                    </div>
                    
                </section>
            </div>



