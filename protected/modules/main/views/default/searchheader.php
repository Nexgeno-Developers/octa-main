<style>
    .serc_ovrl
    {
        display:block; margin-top:0px !important; z-index:5 !important;
    }
    .hgt50
    {
        height:50px !important;
    }
    .serch_btn
    {
        padding:13px !important; height:44px !important; width:44px !important;
    }
     .serch_btn img
    {
        width:19px !important;
    }
</style>

<?php 
   if(!empty($content->photo2)){
    $imgPath = Yii::app()->request->getBaseUrl(true) . '/img/ebackground/'.$content->photo2;
   
?>
               <picture>
               <?php if(!empty($content->photo_mob)){   ?>
                 <source srcset="<?php echo Yii::app()->request->getBaseURL(true);?>/img/ebackground/<?=$content->photo_mob?>" media="(max-width: 468px)">
               <?php } ?>
                <?php if(!empty($content->photo_tab)){   ?>
                 <source srcset="<?php echo Yii::app()->request->getBaseURL(true);?>/img/ebackground/<?=$content->photo_tab?>" media="(max-width: 967px)">
               <?php } ?>
               <?php if(!empty($content->photo2)){  ?>
                 <source srcset="<?php echo Yii::app()->request->getBaseURL(true);?>/img/ebackground/<?=$content->photo2?>">
                 <img class="slide-image"  src="<?php echo Yii::app()->request->getBaseURL(true);?>/img/ebackground/<?=$content->photo2?>" alt="" >
                 <?php } ?>
               </picture>

   <?php }else{

    $imgPath = Yii::app()->request->getBaseUrl(true) . '/img/ebackground/default.jpg';?>
 <div id="myOverlay" class="overlay overlay-search serc_ovrl">
  <div class="overlay-content">
    <form action="/octa-search" method="get" class="hgt50">
      <input type="text" class="hgt50" placeholder="Search.." name="search" style="margin-left:0px;">
      <button type="submit" class="serch_btn"><img src="https://octanetworks.com/img/searchw.png"></button>
    </form>
  </div>
</div>
<?php    } ?>

<?php 
	// 	$query = $_GET['search'];
    $query = isset($_GET['search']) ? $_GET['search'] : '';
	$cri=new CDbCriteria();
	$cri->condition="code Like :query";
	$cri->condition="h1_title Like :query";
	$cri->condition="url Like :query";
	$cri->condition="meta_title Like :query";
	$cri->condition="meta_keywords Like :query";
	$cri->condition="meta_desc Like :query";
	$cri->params= array(":query"=> "%$query%");
	$Exams = Exam::model()->findAll($cri);
 ?>
<section id="search-holder">
	<div class="container">
			<?php $i = 1;
			if(isset($_GET['search'])){
			if(!empty($Exams)){	
			foreach ($Exams as $data) {
			?>		
				<div class="col-md-12">
				    <div class="searc_mn">
				<span><?php echo Yii::app()->request->getBaseURL(true);?>/training-exam/<?=$data->url?></span>
				<h3><a target="_blank" href="<?php echo Yii::app()->request->getBaseURL(true);?>/training-exam/<?=$data->url?>"><?php echo strip_tags($data->code);?></a></h3>
				<p><?php echo substr(strip_tags($data->description), 0, 200);?></p>
				
			
				</div>
				</div>
			<?php }}else{ echo "<h4>Not Found</h4>"; }}else{ echo "Not Found"; } ?>			
	</div>
</section>




<p></p>
<br>



			