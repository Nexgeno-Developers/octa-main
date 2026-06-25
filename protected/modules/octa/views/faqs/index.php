<div class="col-sm-12">
	<div id="success-alert" class="alert alert-success" style="display:none"></div>
		<section class="panel">

                    <header class="panel-heading" style="text-align: center">

                        Topic Table

                        

                        

                    </header>

                    <div class="col-sm-12">

                       

                    </div>

                    <div class="panel-body">

                        <table class="table  table-hover general-table" >

                            <thead>

                            <tr>

                                <th> Exam Code</th>
                                <th>Question</th>
                                <th>Added Date </th>
                                <th>Edit/Delete</th>

                                

                            </tr>

                            </thead>

                            <tbody>

                            <?php foreach ($faqs as $faq) { ?>

                            <tr id="row-<?php echo $faq->id;?>">
                                <td><?php echo $faq->exam->code;?></td>

                                <td><?php echo $faq->question;?></td>

                                <!--<td><?php //echo  Yii::app()->format->date(strtotime($faq->date_added)); ?></td>-->
                                <td><?php echo  $faq->date_added ?></td>

                                

                                <td>

                                    <a href="<?php echo Yii::app()->createUrl("octa/faqs/edit",array("id"=>$faq->id));?>"><img src="<?php echo Yii::app()->baseUrl?>/images/write.png" alt=""/></a>

                                    <a href="<?php echo Yii::app()->createUrl("octa/faqs/delete",array("id"=>$faq->id));?>" ><img src="<?php echo Yii::app()->baseUrl?>/images/delete-icon.png" alt=""/></a>

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







