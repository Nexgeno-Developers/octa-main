<div class="col-sm-12">
<div id="success-alert" class="alert alert-success" style="display:none"></div>
	<section class="panel">
		<header class="panel-heading" style="text-align: center">
			Demo Table
		</header>
		<div class="col-sm-12"></div>
		<div class="panel-body">
			<table class="table  table-hover general-table" >
				<thead>
					<tr>
						<th> Exam Code</th>
						<th>Video</th>
						<th>ID</th>
						<th>Added Date </th>
						<th>Edit/Delete</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($testis as $testi) { ?>
						<tr id="row-<?php echo $testi->id;?>">
						    <td><?php echo isset($testi->exam) ? $testi->exam->code : 'N/A';  //echo $testi->exam->code; ?></td>
                            <td><a href="<?php echo $testi->demolink;?>" target="_blank" class="btn btn-success">View</a></td>
                            <td><?php echo $testi->youtubeid;?></td>
                            <td><?php echo date('d-M-Y', strtotime($testi->date_added)); ?></td>
                            <td>
                                <a href="<?php echo Yii::app()->createUrl("octa/demos/edit",array("id"=>$testi->id));?>"><img src="<?php echo Yii::app()->baseUrl?>/images/write.png" alt=""/></a>
                                <a href="<?php echo Yii::app()->createUrl("octa/demos/delete",array("id"=>$testi->id));?>" ><img src="<?php echo Yii::app()->baseUrl?>/images/delete-icon.png" alt=""/></a>
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