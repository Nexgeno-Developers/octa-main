<?php 
$cadmin = Yii::app()->user->admin;



$siteName = Yii::app()->request->getParam('site');

if($siteName == "m4sco"){
	$webSiteA = "octanetworks.co";
}elseif($siteName == "m4sinfo"){
	$webSiteA = "octanetworks.info";
}elseif($siteName == "m4snet"){
	$webSiteA = "octanetworks.net";
}elseif($siteName == "m4sorg"){
	$webSiteA = "octanetworks.org";
}

?>

<style class="text/css">
.btn{
width: 100%;text-align: left;
}

</style>



<?php if($cadmin == "admin"){ ?>

<div class="col-md-3">
        <section class="panel">
            <div class="panel-body">
                <div class="top-stats-panel">
                    <div  align="left">
                        <h4 class="widget-h">Orders Management</h4>
                       	<a href="<?php echo Yii::app()->createUrl("main/sync/M4sCoSync");?>" class="btn btn-primary"><span class="glyphicon glyphicon-new-window"></span> &nbsp;Sync M4S.co</a></br></br>
						<a href="<?php echo Yii::app()->createUrl("main/sync/M4sInfoSync");?>" class="btn btn-primary"><span class="glyphicon glyphicon-shopping-cart"></span> &nbsp;Sync M4S.Info</a></br></br>
						<a href="<?php echo Yii::app()->createUrl("main/sync/M4sNetSync");?>" class="btn btn-primary"><span class="glyphicon glyphicon-saved"></span> &nbsp;Sync M4S.Net</a></br></br>
						<a href="<?php echo Yii::app()->createUrl("main/sync/M4sOrgSync");?>" class="btn btn-primary"><span class="glyphicon glyphicon-user"></span> &nbsp;Sync M4S.Org</a>
                    </div>
                </div>
            </div>
        </section>
    </div>


	<div class="col-md-9">
        <section class="panel">
            <div class="panel-body">
                <div class="top-stats-panel">
                    <div  align="left">
                        <h4 class="widget-h">Sync</h4>
						<?php if(isset($siteName)){ ?>
						<div class="alert alert-success"><h1><?=$webSiteA?> Data Sync Successfully</h1></div>
						<?php } ?>
                    </div>
                </div>
            </div>
        </section>
    </div>


	




<?php } ?>