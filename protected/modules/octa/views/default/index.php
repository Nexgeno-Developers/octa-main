<?php 
$cadmin = Yii::app()->user->admin;
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
					<h4 class="widget-h">Global Management</h4>
					<a href="<?php echo Yii::app()->createUrl("octa/cms/index");?>" class="btn btn-primary"><span class="glyphicon glyphicon-cloud-upload"></span> &nbsp;Content Management</a></br></br>
					<a href="<?php echo Yii::app()->createUrl("octa/default/addslider");?>" class="btn btn-primary"><span class="glyphicon glyphicon glyphicon-picture"></span> &nbsp;Add Slider</a></br></br>
					<a href="<?php echo Yii::app()->createUrl("octa/default/home_sliders");?>" class="btn btn-primary"><span class="glyphicon glyphicon glyphicon-picture"></span> &nbsp;Banner Management</a></br></br>
					<a href="<?php echo Yii::app()->createUrl("octa/default/viewforms");?>" class="btn btn-primary"><span class="glyphicon glyphicon glyphicon-picture"></span> &nbsp;View Forms</a></br></br>
				</div>
			</div>
		</div>
	</section>
</div>
    
<div class="col-md-3">
	<section class="panel">
		<div class="panel-body">
			<div class="top-stats-panel">
				<div  align="left">
					<h4 class="widget-h">Product Listing</h4>
					<a href="<?php echo Yii::app()->createUrl("octa/vendor/index");?>" class="btn btn-primary"><span class="glyphicon glyphicon-list-alt"></span> &nbsp;Vendors Management</a></br></br>
					<a href="<?php echo Yii::app()->createUrl("octa/cert/index");?>" class="btn btn-primary"><span class="glyphicon glyphicon-list-alt"></span> &nbsp;Certifications Management</a></br></br>
					<a href="<?php echo Yii::app()->createUrl("octa/exam/index");?>" class="btn btn-primary"><span class="glyphicon glyphicon-list-alt"></span> &nbsp;Exams Management</a></br></br>
				</div>
			</div>
		</div>
	</section>
</div>

<div class="col-md-3">
	<section class="panel">
		<div class="panel-body">
			<div class="top-stats-panel">
				<div  align="left">
					<h4 class="widget-h">Other</h4>
					<a href="<?php echo Yii::app()->createUrl("octa/gallery/index");?>" class="btn btn-primary"><span class="glyphicon glyphicon-new-window"></span> &nbsp;Photo Gallery</a></br></br>
					<a href="<?php echo Yii::app()->createUrl("octa/clients/index");?>" class="btn btn-primary"><span class="glyphicon glyphicon-shopping-cart"></span> &nbsp;Our Clients</a></br></br>
					<a href="<?php echo Yii::app()->createUrl("octa/trainer/index");?>" class="btn btn-primary"><span class="glyphicon glyphicon-saved"></span> &nbsp;Our Trainers</a>
				</div>
			</div>
		</div>
	</section>
</div>

<div class="col-md-3">
	<section class="panel">
		<div class="panel-body">
			<div class="top-stats-panel">
				<div  align="left">
					<h4 class="widget-h">Exams Management</h4>
					<a href="<?php echo Yii::app()->createUrl("octa/exam/addexam");?>" class="btn btn-primary"><span class="glyphicon glyphicon-thumbs-down"></span> &nbsp;Add New Exam</a></br></br>
					<a href="<?php echo Yii::app()->createUrl("octa/demos/add");?>" class="btn btn-primary"><span class="glyphicon glyphicon-thumbs-down"></span> &nbsp;Add Demo</a></br></br>
					<a href="<?php echo Yii::app()->createUrl("octa/topics/add");?>" class="btn btn-primary"><span class="glyphicon glyphicon-thumbs-down"></span> &nbsp;Add Topic</a></br></br>
					<a href="<?php echo Yii::app()->createUrl("octa/faqs/add");?>" class="btn btn-primary"><span class="glyphicon glyphicon-thumbs-down"></span> &nbsp;Add FAQ</a>
				</div>
			</div>
		</div>
	</section>
</div>
<?php } ?>