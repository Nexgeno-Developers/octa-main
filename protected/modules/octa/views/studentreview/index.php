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

	Student Reviews Table





		</header>

		<div class="col-sm-12">



		</div>

		<div class="panel-body">

			<table class="table  table-hover general-table">

				<thead>

					<tr>

						<th>Platform</th>

						<th>Name</th>
						<th>Testimonial</th>

						<th>Updated Date </th>

						<th>Edit/Delete</th>



					</tr>

				</thead>

				<tbody>

					<?php foreach ($testis as $testi) { ?>

					<tr id="row-<?php echo $testi->id;?>">

						<td>
							<?php echo $testi->platform;?>
						</td>

						<td>
							<?php echo $testi->name;?>
						</td>

						<td>
							<?php 
							if($testi->platform == 'youtube')
							{
								$info = $testi->vlink.'<br>'.$testi->vdesc;
							}
							else
							{
								$info = $testi->content;  
							}
						    	
							?>
							<?php echo $info;//$testi->content;?>
						</td>

						<td>
							<?php echo date('m/d/Y', strtotime($testi->updated_date)); ?>
						</td>



						<td>

							<a href="<?php echo Yii::app()->createUrl("octa/studentreview/edit",array("id"=>$testi->id));?>">
								<img src="<?php echo Yii::app()->baseUrl?>/images/write.png" alt="" />
							</a>

			        		<a href="<?php echo Yii::app()->createUrl("octa/studentreview/delete",array("id"=>$testi->id));?>">
								<img src="<?php echo Yii::app()->baseUrl?>/images/delete-icon.png" alt=""
								/>
							</a>

						</td>







					</tr>



					<?php }//foreach ?>



				</tbody>

			</table>

		</div>





		<div style="text-align: center">

			<?php                        

    $this->widget('CLinkPager', array(

        'pages' => isset($pages) ? $pages : null,

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