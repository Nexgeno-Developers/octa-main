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
                        ENquiry Table
                        
                        
                    </header>
                    <div class="col-sm-12" style="text-align:center" >
                        <div style="padding:10px;">
                            <h4>Search</h4>
                        <form id="search-vendor" method="POST" action="<?php echo Yii::app()->createUrl('octa/enquiry/search');?>">
                             <div class="form-group">
                            <div class="col-lg-3">
                                <input type="text" class="form-control" name="search" required="required"/>
                            </div>
                            <div class="col-lg-3">
                              <input type="submit" class="btn btn-primary"  value="Search"/>  
                            </div>
                             </div> 
                             
                        </form> 
                         <div class="col-lg-2"><a href="<?php echo Yii::app()->createUrl("octa/enquiry"); ?>" class="btn btn-primary">Back</a></div> 
                        </div>
                    </div>
                    <?php if (isset($enquiries)) { ?>
                    <div class="panel-body">
                        <table class="table  table-hover general-table" >
                            <thead>
                            <tr>
															<th>Sr No</th>
															<th>Name</th>
															<th>Mobile</th>
															<th>Email</th>
															<th>Message</th>
															<th>Date </th>
															<th>Status </th>
															<th>Action</th>
														</tr>
                            </thead>
                            <tbody>
                            
                            <?php $i = 1;
															foreach ($enquiries as $enquiry) {
																$status = $enquiry->is_read;
																if($status == 1){
																		$info = 'Seen';
																		$class = 'success';
																		$view = 'Mark as Unseen';
																		$unread_ui = '';
																}else{
																		$info = 'Unseen';
																		$class = 'danger';
																		$view = 'Mark as Seen';
																		$unread_ui = 'unread-style';
																}
														?>
														<tr id="row-<?php echo $enquiry->id;?>" class="<?php echo $unread_ui; ?>">
																
																<td><?php echo $i++;?></td>
																<td><?php echo $enquiry->name;?></td>
																<td><?php echo $enquiry->mobile; ?></td>
																<td><?php echo $enquiry->email;?></td>
																<td><?php echo $enquiry->message;?></td>
																<td><?php echo  Yii::app()->format->date(strtotime($enquiry->created_at)); ?></td>
																<td><label class="label label-<?= $class; ?>"><?= $info;?></label></td>
																<td>

																		<a href="<?php echo Yii::app()->createUrl("octa/enquiry/enquiry_view",array("id"=>$enquiry->id));?>" class="view" title="<?= $view; ?>"><i class="fa fa-eye"></i></a>

																		<a href="<?php echo Yii::app()->createUrl("octa/enquiry/enquiry_delete",array("id"=>$enquiry->id));?>" ><img src="<?php echo Yii::app()->baseUrl?>/images/delete-icon.png" alt=""/></a>

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



