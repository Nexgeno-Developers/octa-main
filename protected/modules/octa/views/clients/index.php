<?php



/* 

 * To change this license header, choose License Headers in Project Properties.

 * To change this template file, choose Tools | Templates

 * and open the template in the editor.

 */

?>

<style type="text/css">
.delete{padding: 9px;background-color: #F8D7DA; text-align:center;}

.edit{padding: 4px 0px;background-color:#D1ECF1;text-align: center;}
.edit img{width: 22px; height: 25px;}

.alt{background: #ffdfb3;padding: 7px;}

.col-lg-3.col-md-6.portfolio-item.filter-app {
    min-height: 250px;
}
</style>

<div class="col-sm-12">

    <div id="success-alert" class="alert alert-success" style="display:none"></div>

                <section class="panel">

                    <header class="panel-heading" style="text-align: center">

                        Clients

                        

                        

                    </header>

                    <div class="col-sm-12">

                       

                    </div>

                    <div class="panel-body">
                    	<?php foreach ($photogallery as $gallery) { ?>
                    	<div class="col-lg-3 col-md-6 portfolio-item filter-app" style="margin-bottom:10px;">
                        	<div class="col-sm-12" style="border: 1px solid #e7e7e7;"><img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/clients/<?=$gallery->image?>" class="img-responsive" alt="<?=$gallery->alt?>"></div>
                            <div class="col-sm-8 alt"><?=$gallery->alt?></div>
                            <div class="col-sm-2 edit"><a href="<?php echo Yii::app()->createUrl("octa/clients/edit",array("id"=>$gallery->id));?>"><img src="<?php echo Yii::app()->baseUrl?>/images/write.png" alt=""/></a></div>
                            <div class="col-sm-2 delete"><a href="<?php echo Yii::app()->createUrl("octa/clients/delete",array("id"=>$gallery->id));?>" ><img src="<?php echo Yii::app()->baseUrl?>/images/delete-icon.png" alt=""/></a></div>
                        </div>
                        
                        <?php } ?>
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







