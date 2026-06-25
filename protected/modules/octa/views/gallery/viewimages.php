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
                      Gallery Images
                        
                        
                    </header>
                    <div class="col-sm-12">
                          <div style="padding:10px;">
                         <?php if (count($image)<1)
                               {
                                  ?> <div id="danger-alert" class="alert alert-danger" style="display:block; text-align: center;"> No Images Exists</div>
                                   <div class="col-md-12" style="text-align:center"><a class="btn btn-primary" href="<?php echo Yii::app()->createUrl("octa/gallery/addimages",array("id"=>$product_id));?>">Add more Images</a></div>
                                      <?php
                               }
                                else { ?>
                        
                       
                        </div>
                    </div>
                    <div style="clear:both"></div>
                    <div class="col-md-12" style="text-align:center"><a class="btn btn-primary" href="<?php echo Yii::app()->createUrl("octa/gallery/addimages",array("id"=>$product_id));?>">Add more Images</a></div>
                    <div class="panel-body">
                        
                        <table class="table  table-hover general-table" >
                            <thead>
                            <tr>
                                <th> Product Name </th>
                                <th> Image </th>
                                <th>Delete</th>
                                
                                
                            </tr>
                            </thead>
                            <tbody>
                                
                              <?php
                           foreach ($image as $images) { ?>
                            <tr id="row-<?php echo $images->id;?>">
                                <td><?php echo $images->product->gallery_name; ?></td>
                                
                                <td><img src="<?php echo Yii::app()->baseUrl?>/gallery_images/<?php echo $images->product->id;?>/<?php echo $images->image;?>" width="300" alt="<?php echo $images->image; ?>"/></td>
                               
                                
                                
                                 <td>
                                    <a href="<?php echo Yii::app()->createUrl("octa/gallery/deleteimage",array("id"=>$images->id));?>" onclick="return confirm ('Are you sure that you want to delete this image? ')"><img src="<?php echo Yii::app()->baseUrl?>/images/delete-icon.png" alt=""/></a>
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
    ?>
                    </div>
                </section>
            </div>


