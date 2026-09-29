<div class="col-sm-12">
    <div id="success-alert" class="alert alert-success" style="display:none"></div>
                <section class="panel">
                    <header class="panel-heading" style="text-align: center">
                        Enquiry Table
                    </header>
                    <div class="col-sm-12">

                    </div>
                    <div class="panel-body">
                        <table class="table  table-hover general-table" >
                            <thead>
                            <tr>
                                
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
                            <?php foreach ($enquiries as $enquiry) {
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
                                
                                <td><?php echo $enquiry->name;?></td>
                                <td><?php echo $enquiry->mobile; ?></td>
                                <td><?php echo $enquiry->email;?></td>
                                <td><?php echo $enquiry->message;?></td>
                                <td><?php echo  Yii::app()->format->date(strtotime($enquiry->created_at)); ?></td>
                                <td><label class="label label-<?= $class; ?>"><?= $info;?></label></td>
                                <td>

                                    <a href="<?php echo Yii::app()->createUrl("octa/default/enquiry_view",array("id"=>$enquiry->id));?>" class="view" title="<?= $view; ?>"><i class="fa fa-eye"></i></a>

                                    <a href="<?php echo Yii::app()->createUrl("octa/default/enquiry_delete",array("id"=>$enquiry->id));?>" ><img src="<?php echo Yii::app()->baseUrl?>/images/delete-icon.png" alt=""/></a>

                                </td>

                            </tr>

                            <?php } ?>

                            

                            </tbody>

                        </table>
                            <?php $this->widget('CLinkPager', array(
                                'pages' => $pagination,
                            )); ?>
                    </div>


                </section>

            </div>







