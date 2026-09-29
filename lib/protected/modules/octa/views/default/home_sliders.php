<div class="col-sm-12">
<div id="success-alert" class="alert alert-success" style="display:none"></div>
<section class="panel">
	<header class="panel-heading" style="text-align: center">Home Sliders</header>

	<div class="col-sm-12 text-center" style="margin-top: 12px;">
		<a href="<?php echo Yii::app()->createUrl("octa/default/addslider");?>" class="btn btn-success">Add Slider</a>
	</div>

	<div class="col-sm-12">
		<div style="padding:10px;">
			<?php if (count($slider)<1){ ?>
			<div id="danger-alert" class="alert alert-danger" style="display:block; text-align: center;"> No slider Exists</div>
			<?php } else { ?>
		</div>
                    </div>
                    <div style="clear:both"></div>
                    <div class="panel-body">
                       
                        <table class="table  table-hover general-table" >
                            <thead>
                            <tr>
                                <th> Id</th>
                                <th> Image </th>
								<th> Slider Order </th>
								<th> Type </th>
								<th> Status </th>
                                <th>Edit/Delete</th>
                                
                                
                                
                            </tr>
                            </thead>
                            <tbody>
                                
                              <?php
                           foreach ($slider as $sliders) { ?>
                            <tr >
                                <td><?php echo $sliders->id; ?></td>
                                 
                                <td> <img src="<?php echo Yii::app()->baseUrl."/img/slider_images/".$sliders->image; ?>" height='100'></td>
                                <td> <?= $sliders->orders; ?></td>
                                <td><?php if($sliders->type == 2){echo "Inner Banner";}else{echo "Main Banner";} ?></td>
								<td id="enable-active-td-<?php echo $sliders->id ?>">
                                   
                                    <?php if ($sliders->status>0){ ?>
                                     <a  href="<?php echo Yii::app()->createUrl('octa/default/bannerprocess',array("id"=>$sliders->id))?>"><span class="label label-success label-mini">Yes</span></a>
                                    <?php }
                                    else { ?>
                                   <a  href="<?php echo Yii::app()->createUrl('octa/default/bannerprocess',array("id"=>$sliders->id))?>" ><span class="label label-danger label-mini">No</span></a>
                                   <?php  }?>
                                    
                                </td>

                                 <td>
                                    <a href="<?php  echo Yii::app()->createUrl("octa/default/editslider",array("id"=>$sliders->id));?>"><img src="<?php echo Yii::app()->baseUrl?>/images/write.png" alt=""/></a>
                                       <a href="<?php  echo Yii::app()->createUrl("octa/default/deleteslider",array("id"=>$sliders->id));?>"><img src="<?php echo Yii::app()->baseUrl?>/images/delete-icon.png" alt=""/></a>
                                    
                                </td>
                               
                                
                                
                               
                            </tr>
                            
                            <?php }//foreach
                                    
                                }//else ?>
                           
                            </tbody>
                        </table>
                    </div>
                    
                    
                    <div style="text-align: center">
                     <?php                        
//    $this->widget('CLinkPager', array(
//        'pages' => $pages,
//        'header' =>  "<nav>",
//        'nextPageLabel' => 'Next',
//        'prevPageLabel' => 'Prev',
//        'selectedPageCssClass' => 'active',
//        'hiddenPageCssClass' => 'disabled',
//        'htmlOptions' => array(
//            'class' => 'pagination',
//        )
//    ))
//    ?>
                    </div>
                </section>
            </div>



