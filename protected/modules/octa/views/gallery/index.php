<div class="col-sm-12">
    <div id="success-alert" class="alert alert-success" style="display:none"></div>
    <section class="panel">
        <header class="panel-heading" style="text-align: center">
          Events Pages Information     
        </header>
        <div class="col-sm-12">
            <div style="padding:10px;">
                <?php if (count($Pages)<1) { ?> 
                <div id="danger-alert" class="alert alert-danger" style="display:block; text-align: center;"> No Content Exists</div>
                <?php } else { ?>
            </div>
        </div>
        <div style="clear:both"></div>
            <div class="panel-body">
                <div class="clear"></div>
                    <div id="candidate_details" style="display:none">
                        <div class="wrapper">
                            <div id="content" style="background: White"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                <table class="table  table-hover general-table" >
                  <thead>
                    <tr>
                        <th>Page Title</th>
                        <th>Content</th>
                        <th>Date</th>
                        <th>Delete</th>
                    </tr>
                  </thead>
                    <tbody>
                      <?php
                      foreach($Pages as $Page)
                      { ?>
                        <tr id="row-<?php echo $Page->id;?>">
                            <td><?php echo $Page->title; ?> </td>
                            <td width="60%"><?php echo $Page->content; ?> </td>
                            <td><?php echo date('d-M-Y', strtotime($Page->dataadded)); ?></td>
                            <td><a href="<?php echo Yii::app()->createUrl("octa/gallery/eventimages",array("id"=>$Page->id));?>" target="_blank"  class="btn btn-primary">View all Images</a></td>
                            <td>
                            <a href="<?php echo Yii::app()->createUrl("octa/gallery/editeventpages",array("id"=>$Page->id));?>"><img src="<?php echo Yii::app()->baseUrl?>/images/write.png" alt=""/></a>
                            <a href="<?php echo Yii::app()->createUrl("octa/gallery/deleteeventpages",array("id"=>$Page->id));?>"><img src="<?php echo Yii::app()->baseUrl?>/images/delete-icon.png" alt=""/></a>
                            </td>
                        </tr>
                    <?php 
                      } } ?>
                    </tbody>
                </table>
            </div>
    </section>
</div>