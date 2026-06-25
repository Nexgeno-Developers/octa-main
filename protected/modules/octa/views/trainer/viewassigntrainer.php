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

                        Trainer Table

                        

                        

                    </header>

                    <div class="col-sm-12">

                       

                    </div>

                    <div class="panel-body">

                        <table class="table  table-hover general-table" >
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Trainer</th>
                                <th>Updated Date </th>
                            </tr>

                            </thead>

                            <tbody>

                            <?php foreach ($exam as $testi) { ?>

                            <tr id="row-<?php echo $testi->id;?>">

                                <td><?php echo $testi->code;?></td>
                                



                                <td><?php foreach($testi->assigntrainer as $atrainer){ ?> 
								<div style="float:left">
                                <div class="name"><?=$atrainer->trainer->name ?? 'No Trainer Assigned' ?></div>
                                <div class="image"><img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/trainer/<?php echo $atrainer->trainer->image ?? '';?>" width="100" /></div>
                                <div class="options"><a href="<?php echo Yii::app()->createUrl("octa/trainer/deleteassign",array("id"=>$atrainer->id));?>" ><img src="<?php echo Yii::app()->baseUrl?>/images/delete-icon.png" alt=""/></a></div>
								
                                </div>
								  <?php } ?></td>

                                

                                <td> <?php echo date('d-M-Y', strtotime($testi->date_added)); ?></td>

                                

                               

                                

                                

                               

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







