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
                        Mails Table
                        
                        
                    </header>
                    <div class="col-sm-12">
                       
                    </div>
                    <div class="panel-body">
                        <table class="table  table-hover general-table" >
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Edit</th>
                                
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($mails as $mailt) { ?>
                            <tr id="row-<?php echo $mailt->mailid;?>">
                                
                                <td><?php echo $mailt->mailtitle;?></td>
                                <td>
                                    <a href="<?php echo Yii::app()->createUrl("octa/mails/edit",array("id"=>$mailt->mailid));?>"><img src="<?php echo Yii::app()->baseUrl?>/images/write.png" alt=""/></a>
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



