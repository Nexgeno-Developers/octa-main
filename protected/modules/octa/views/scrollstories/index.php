<div class="col-sm-12">
  <div id="success-alert" class="alert alert-success" style="display:none"></div>
  <section class="panel">
    <header class="panel-heading" style="text-align: center">
      Stories Table
    </header>
    <div class="col-sm-12">
    </div>
    <div class="panel-body">
      <table class="table  table-hover general-table" >
        <thead>
          <tr>
            <th>Exam</th>
            <th>Content</th>
            <th>Date </th>
            <th>Edit/Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($testis as $testi) { ?>
          <tr id="row-<?php echo $testi->id;?>">
            <?php 
              $cri= new CDbCriteria();
              $cri->condition="id=$testi->cert_id";
              $exam=Exam::model()->find($cri);
              ?>
            <td><?php echo $exam->code;?></td>
            <td><?php echo $testi->stories;?></td>
            <td><?php echo date('d-M-Y', strtotime($testi->date_added)); ?></td>
            <td>
              <a href="<?php echo Yii::app()->createUrl("octa/scrollstories/edit",array("id"=>$testi->id));?>"><img src="<?php echo Yii::app()->baseUrl?>/images/write.png" alt=""/></a>
              <a href="<?php echo Yii::app()->createUrl("octa/scrollstories/delete",array("id"=>$testi->id));?>" ><img src="<?php echo Yii::app()->baseUrl?>/images/delete-icon.png" alt=""/></a>
            </td>
          </tr>
          <?php }//foreach ?>
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