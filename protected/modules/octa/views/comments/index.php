<div class="col-sm-12">
    <div id="success-alert" class="alert alert-success" style="display:none"></div>
                <section class="panel">
                    <header class="panel-heading" style="text-align: center">
                        Comments Table
                    </header>
                    <div class="col-sm-12">

                    </div>
                    <div class="panel-body">
                        <table class="table  table-hover general-table" >
                            <thead>
                            <tr>
                                
                                <th>Course</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Comment</th>
                                <th>Status </th>
                                <th>Date </th>
                                <th>Edit/Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($commts as $commt) {
															$status = $commt->status;
															if($status == 1){
																$info = 'Active';
																$class = 'success';
															}else{
																$info = 'Inctive';
																$class = 'danger';
															}
														?>
                            <tr id="row-<?php echo $commt->id;?>">
                                
                                <td><?php echo $commt->course_slug; ?></td>
                                <td><?php echo $commt->name;?></td>
                                <td><?php echo $commt->email;?></td>
                                <td><?php echo $commt->comment;?></td>
                                <td><label class="label label-<?= $class; ?>"><?= $info;?></label></td>
                                <td><?php echo date('d-M-Y', strtotime($commt->created_at)); ?></td>
                                <td>

                                    <a href="<?php echo Yii::app()->createUrl("octa/comments/changestatus",array("id"=>$commt->id));?>"><img src="<?php echo Yii::app()->baseUrl?>/images/write.png" alt=""/></a>

                                    <a href="<?php echo Yii::app()->createUrl("octa/comments/delete",array("id"=>$commt->id));?>" ><img src="<?php echo Yii::app()->baseUrl?>/images/delete-icon.png" alt=""/></a>

                                </td>

                            </tr>

                            <?php } ?>

                           

                            </tbody>

                        </table>

                    </div>


                </section>

            </div>







