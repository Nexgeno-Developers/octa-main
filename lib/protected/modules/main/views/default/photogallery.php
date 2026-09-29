


<style type="text/css">
.flex {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  width:100%;
}
.portfolio-item {
  display: none; 
}
#loadMore {
  width: 200px;
  color: #fff;
  display: block;
  text-align: center;
  margin: 20px auto;
  padding: 10px;
  border-radius: 8px;
  background: linear-gradient(135deg,#19519e,#1dd5e6);
  transition: .3s;
  font-weight: 700;
}
#loadMore:hover {
  color: #fff;
  background: linear-gradient(135deg,#1dd5e6,#19519e);
  text-decoration: none;
}
.noContent {
  color: #000 !important;
  background-color: transparent !important;
  pointer-events: none;
  background: none !important;
}
.photo_lst li.boxgall.active-gallery {
    background: #284c9a !important;
}
@media(max-width:1024px) and (min-width:768px)
{
    .portfolio-item.port_pd {
    padding: 3px;
    width: 33%;
}
}
</style>

<script language="javascript">
$(document).ready(function(){
  $(".portfolio-item").slice(0, 8).show();
  $("#loadMore").on("click", function(e){
    e.preventDefault();
    $(".portfolio-item:hidden").slice(0, 8).slideDown();
    if($(".portfolio-item:hidden").length == 0) {
      $("#loadMore").text("").addClass("noContent");
    }
  });
  
})
</script>

<style>
    .boxgall{ 
        width: 15%;
    padding: 15px;
    text-align: center;
    background: #22589e;
    color: white;
    margin-left: 13px;
    height: 37px;
    }
    
    li.imggall.item-thumbs.col-lg-3.design.wow.fadeInUp {
    list-style: none;
    padding: 5px;
    margin-right: 58px;
}

.list-inline > li {
    display: inline-block;
    padding: 10px;
	margin-bottom: 15px;
}

.photo_lst li {
    display: block;
    text-decoration: none;
    float: left;
    width: auto;
    background: transparent;
    font-size: 16px;
    font-weight: 500;
    text-transform: capitalize;
    animation: none;
    padding: 5px 22px 4px 20px;
    margin: 0 5px 0 0px;
    border-radius: 3px;
    border: 2px solid #284c9a;
    color: #284c9a !important;
    box-shadow: 0px 0px 2px 1px;
}
.photo_lst .boxgall li {
  color: #284c9a !important;
}

.photo_lst .boxgall li:hover {
    background: #284c9a !important;
    color: #fff !important;
}

.photo_lst li.boxgall.active-gallery a {
    color: #fff !important;
}
li.boxgall.active-gallery:before {
      content: "";
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 16px 19px 0 19px;
    border-color: #284c9a transparent transparent transparent;
    position: absolute;
    margin-top: 29px;
}
#portfolio
{
    padding-top:0px !important;
}
.photo_lst .list-inline > li {
        display: inline-block;
    padding: 7px 15px 5px 15px !important;
    margin-bottom: 0px;
    border-radius: 5px;
    font-size: 18px;
    background: transparent !important;
    box-shadow: none;
    margin-left: auto;
    margin-right: 10px;
}

li.boxgall:nth-child(1).active-gallery:before {
    content: "";
    margin-left: 15px !important;
}

li.boxgall:nth-child(2).active-gallery:before {
    content: "";
    margin-left: 0px !important;
}

li.boxgall:nth-child(3).active-gallery:before {
    content: "";
    margin-left: -2px !important;
}

li.boxgall:nth-child(4).active-gallery:before {
    content: "";
    margin-left: 75px !important;
}

li.boxgall:nth-child(5).active-gallery:before {
    content: "";
    margin-left: 60px !important;
}

li.boxgall:nth-child(6).active-gallery:before {
    content: "";
    margin-left: 50px !important;
}

li.boxgall:nth-child(7).active-gallery:before {
    content: "";
    margin-left: 29px !important;
}

li.boxgall:nth-child(8).active-gallery:before {
    content: "";
    margin-left: 27px !important;
}

li.boxgall:hover {
    background: #284c9a !important;
}

li.boxgall:hover a {
    color: #fff;
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
<section class="inner-banner" style="background-image: url(<?=$imgPath?>);">
   <div class="container">
   <h1><?php echo $content->heading ?></h1>
   </div>
</section>
<?php    } ?>
<section class="breadcrumb">
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>"><i class="fa fa-home"></i></a></li>
		  	<li><a href="<?php echo Yii::app()->createUrl("main/default/aboutus"); ?>">About us</a></li>
			<li class="active"><?php echo $content->heading ?></li>
		</ol>
	</div>
</section>
<section id="product-info" style="padding-bottom: 0px !important;
    padding-top: 8px !important;">
<div class="container photo_lst">
<?php if(!empty($content->photo2)){ ?>
<div class="text-center">
         <h1 class="inner_headings1"><?php echo $content->heading ?></h1>
         </div>
         <?php } ?>
	<?php if(!empty($productPage)){ ?>
		<ul class="list-inline">
			<?php foreach($productPage as $productP){ 
			if($productP['type']==2){
			?>
			<li class="boxgall <?php echo ($active_id == $productP->id) ? 'active-gallery' : ''; ?>"><a href="<?php echo Yii::app()->createUrl("main/default/photogallery", array("id"=>$productP->id)); ?>"><?=$productP->title?></a></li>
			<?php  }} ?>
		</ul>
	<?php  } ?>
	<br>

	<div class="col-lg-12 text-center">
		<h3><?php echo $productPages->content ?></h3>
	</div>
</div>
</section>


<section id="portfolio" class="clearfix" style="background: unset; box-shadow: none;">
<div class="container">
	<div class="col-lg-12">
		<!-- <div class="row portfolio-container ">-->
		<div class="row">
			<div class="flex">
			<?php if(!empty($productPages->eventPagesReal_eventPgaesImages)){ ?>
			<?php foreach(array_reverse($productPages->eventPagesReal_eventPgaesImages) as $images) {?>
			<div class="col-lg-3 col-md-3 portfolio-item port_pd filter-app">
				<div class="portfolio-wrap port_main">
					<img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/gallery_images/<?php echo $productPages->id; ?>/<?php echo $images->image; ?>" class="img-fluid" alt="">
					<div class="portfolio-info">
					<h4></h4>
					<p></p>
					<div><a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/gallery_images/<?php echo $productPages->id; ?>/<?php echo $images->image; ?>" data-lightbox="portfolio" data-title="Image " class="link-preview" title="Preview"><i class="fa fa-plus"></i></a></div>
					</div>
				</div>
			</div>
			<?php  } } ?>
		</div>
		</div>

		<a href="#" id="loadMore">Load More</a>
		
		
	</div>
	</div>
</section>