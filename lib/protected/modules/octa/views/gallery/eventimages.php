<div class="col-sm-12">
    <div id="success-alert" class="alert alert-success" style="display:none"></div>
                <section class="panel">
                    <header class="panel-heading" style="text-align: center">
                       Images Table
                    </header>
                    <div class="col-sm-12">
                          <div style="padding:10px;">
                         <?php if (count($image)<1)
                               { ?> <div id="danger-alert" class="alert alert-danger" style="display:block; text-align: center;"> No Images Exists</div>
                                   <div class="col-md-12" style="text-align:center"><a class="btn btn-primary" href="<?php echo Yii::app()->createUrl("octa/gallery/addeventimages",array("id"=>$Page_id));?>">Add more Images</a></div>
                                      <?php
                               }
                                else { ?>
                        </div>
                    </div>
                    <div style="clear:both"></div>
                    <div class="col-md-12" style="text-align:center"><a class="btn btn-primary" href="<?php echo Yii::app()->createUrl("octa/gallery/addeventimages",array("id"=>$Page_id));?>">Add more Images</a></div>
                    <div class="panel-body">
                        
                        <table class="table  table-hover general-table" >
                            <thead>
                                <tr>
                                    <th> Page Name </th>
                                    <th> Image </th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                              <?php
                           foreach ($image as $images) { ?>
                            <tr id="row-<?php echo $images->id;?>">
                                <td><?php echo $images->eventImagesRel_eventPages->title; ?></td>
                                <td><img src="<?php echo Yii::app()->baseUrl?>/gallery_images/<?php echo $images->ev_pg_id; ?>/<?php echo $images->image;?>" width="200" alt="<?php echo $images->image; ?>"/></td>
                                 <td>
                                    <a href="<?php echo Yii::app()->createUrl("octa/gallery/deleteeventimage",array("id"=>$images->id,"page"=>$Page_id));?>" onclick="return confirm ('Are you sure you want to delete this Image?')"><img src="<?php echo Yii::app()->baseUrl?>/images/delete-icon.png" alt=""/></a>
                                </td>
                            </tr>
                            <?php }//foreach
                                //else ?>
                            </tbody>
                        </table>
                    </div>
                    
                                <?php } ?>
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



