<?php 
$cadmin = Yii::app()->user->admin;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content=""/>
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <link rel="icon" href="<?php echo Yii::app()->request->getBaseUrl(true)?>/img/favicon.ico" type="image/x-icon">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <!--Core CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/admincss/bs3/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/adminjs/js/jquery-ui/jquery-ui-1.10.1.custom.min.css" rel="stylesheet"/>
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/admincss/css/bootstrap-reset.css" rel="stylesheet"/>
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/admincss/font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/admincss/css/clndr.css" rel="stylesheet"/>
    
    <!-- Custom styles for this template -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/admincss/css/style.css" rel="stylesheet"/>
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/admincss/css/style-responsive.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/adminjs/js/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />



	<link href="<?php echo Yii::app()->request->baseUrl; ?>/admincss/css/bootstrap-select.css" rel="stylesheet"/>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/adminjs/js/jquery.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/admincss/bs3/js/bootstrap.min.js"></script>
	
	    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    </head>
    
    <body>
        
        <section id="container">
<!--header start-->
                <header class="header fixed-top clearfix">
                <!--logo start-->
                <div class="brand">

                    <a href="<?php echo Yii::app()->baseUrl?>/octa/default" class="logo">
                        <img src="<?php echo Yii::app()->request->getBaseUrl(true)?>/img/logo.png" width="100" alt=""/>
                    </a>
                    <div class="sidebar-toggle-box">
                        <div class="fa fa-bars"></div>
                    </div>
                </div>
                <div class="col-sm-8"><h2 style="text-align: center;"><?=$cadmin?> <?php echo CHtml::encode($this->heading); ?></h2> </div>
                
                <div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">
        <!-- settings start -->
    </ul>
    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                
                <span class="username"><?php echo Yii::app()->user->admin; ?></span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
				<?php if($cadmin == "admin"){ ?>
				<li><a href="<?php echo Yii::app()->createUrl("octa/default/changepassword");?>"><i class="fa fa-key"></i> Change Password</a></li>
				<?php } ?>
				<li><a href="<?php echo Yii::app()->createUrl("octa/login/logout");?>"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
        <!--<li>
            <div class="toggle-right-box">
                <div class="fa fa-bars"></div>
            </div>
        </li>-->
    </ul>
    <!--search & user info end-->
</div>
</header>
   

<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a href="<?php echo Yii::app()->createUrl("octa/default");?>">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>


				<?php if($cadmin == "admin"){ ?>
				<li class="sub-menu" >
                    <a href="javascript:;" >
                        <i class="fa fa-laptop"></i>
                        <span>Global Management</span>
                    </a>
                    <ul class="sub" id="global-menu">
						<li><a href="<?php echo Yii::app()->createUrl("octa/default/addslider");?>">Add Banner</a></li>
						<li><a href="<?php echo Yii::app()->createUrl("octa/default/home_sliders");?>">Banner Management</a></li>
						<li><a href="<?php echo Yii::app()->createUrl("octa/default/viewforms");?>">View Forms</a></li>
                        <!--<li><a href="language_switch.html">Language Switch Bar</a></li>-->
                    </ul>
                </li>
                
                <li class="sub-menu" >
                    <a href="javascript:;">
                        <i class="fa fa-laptop"></i>
                        <span>Vendor Management</span>
                    </a>
                    <ul class="sub" id="vendor-menu">
                        <li><a href="<?php echo Yii::app()->createUrl("octa/vendor/index");?>">Listing</a></li>
                        <li><a href="<?php echo Yii::app()->createUrl("octa/vendor/addvendor");?>">Add new Vendor</a></li>
                    </ul>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-trophy"></i>
                        <span>Cert Management</span>
                    </a>
                    <ul class="sub" id="cert-menu">
                        <li><a href="<?php echo Yii::app()->createUrl("octa/cert/index");?>">Listing</a></li>
                        <li><a href="<?php echo Yii::app()->createUrl("octa/cert/addcert");?>">Add new Certification</a></li>
                    </ul>
                </li>
                <?php } ?>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-star"></i>
                        <span>Exam Management</span>
                    </a>
                    <ul class="sub" id="exam-menu">
                        <li><a href="<?php echo Yii::app()->createUrl("octa/exam/index");?>">Listing</a></li>
                        <li><a href="<?php echo Yii::app()->createUrl("octa/exam/addexam");?>">Add new exam</a></li>
                        <li><a href="<?php echo Yii::app()->createUrl("octa/demos/add");?>">Add Demo</a></li>
                        <li><a href="<?php echo Yii::app()->createUrl("octa/demos/index");?>">Demo Listing</a></li>
                        <li><a href="<?php echo Yii::app()->createUrl("octa/topics/add");?>">Add Topic</a></li>
                        <li><a href="<?php echo Yii::app()->createUrl("octa/faqs/add");?>">Add Faqs</a></li>
                        <li><a href="<?php echo Yii::app()->createUrl("octa/exam/offer_banner");?>">Offer Banner</a></li>
                        
                    </ul>
                </li>
                
                

				<li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-file"></i>
                        <span>Content Pages Management</span>
                    </a>
                    <ul class="sub" id="cms-menu">
						
						<li><a href="<?php echo Yii::app()->createUrl("octa/cms/index");?>">Content Management</a></li>

                        
                    </ul>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-laptop"></i>
                        <span>News Management</span>
                    </a>
                    <ul class="sub" id="cms-menu">
						<li><a href="<?php echo Yii::app()->createUrl("octa/news/index");?>">News Management</a></li>
                        <li><a href="<?php echo Yii::app()->createUrl("octa/news/add");?>">Add News</a></li>
                    </ul>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-laptop"></i>
                        <span>Enquiry</span>
                    </a>
                    <ul class="sub" id="cms-menu">
						<li><a href="<?php echo Yii::app()->createUrl("octa/enquiry/index");?>">Listing</a></li>
                    </ul>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                            <i class="fa fa-comments"></i>
                            <span>Reviews Management</span>
                    </a>
                    <ul class="sub" id="testi-menu">
                        <li><a href="<?php echo Yii::app()->createUrl("octa/testimonials/index");?>">Listing</a></li>
                        <li><a href="<?php echo Yii::app()->createUrl("octa/testimonials/addtestimonial");?>">Add Review</a></li>
                        <li><a href="<?php echo Yii::app()->createUrl("octa/demos/add");?>">Add Video Speaks</a></li>
                        <li><a href="<?php echo Yii::app()->createUrl("octa/testimonials/videospeaks");?>">Video Speaks</a></li>
                    </ul>
                </li>
                
                <li class="sub-menu">
	<a href="javascript:;">
		<i class="fa fa-comments"></i>
		<span>Student Reviews</span>
	</a>
	<ul class="sub" id="testi-menu">
		<li><a href="<?php echo Yii::app()->createUrl("octa/Studentreview/index");?>">Listing</a></li>
		<li><a href="<?php echo Yii::app()->createUrl("octa/Studentreview/Addstudentreview");?>">Add Student Reviews</a></li>
	</ul>
</li>

                <li class="sub-menu">
									<a href="javascript:;">
											<i class="fa fa-comments"></i>
											<span>Course Comment Management</span>
									</a>
									<ul class="sub" id="testi-menu">
										<li><a href="<?php echo Yii::app()->createUrl("octa/comments/index");?>">Listing</a></li>
									</ul>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-comments"></i>
                        <span>Stories Management</span>
                    </a>
                    <ul class="sub" id="testi-menu">
                        <li><a href="<?php echo Yii::app()->createUrl("octa/stories/index");?>">Listing</a></li>
                        <li><a href="<?php echo Yii::app()->createUrl("octa/stories/add");?>">Add Stories</a></li>
                        <li><a href="<?php echo Yii::app()->createUrl("octa/scrollstories/index");?>">Listing</a></li>
						<li><a href="<?php echo Yii::app()->createUrl("octa/scrollstories/add");?>">Add Scroll Stories</a></li>
						<li><a href="<?php echo Yii::app()->createUrl("octa/Storiesrecent/add");?>">Recent Stories Add</a></li>
						<li><a href="<?php echo Yii::app()->createUrl("octa/Storiesrecent");?>">Recent Stories Listing</a></li>
						
                    </ul>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-comments"></i>
                        <span>Photo Gallery</span>
                    </a>
                    <ul class="sub" id="testi-menu">
                        <li><a href="<?php echo Yii::app()->createUrl("octa/gallery/index");?>">Listing</a></li>
                        <li><a href="<?php echo Yii::app()->createUrl("octa/gallery/addeventPages");?>">Add </a></li>
                        
                    </ul>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-comments"></i>
                        <span>Clients</span>
                    </a>
                    <ul class="sub" id="testi-menu">
                        <li><a href="<?php echo Yii::app()->createUrl("octa/clients/index");?>">Listing</a></li>
                        <li><a href="<?php echo Yii::app()->createUrl("octa/clients/addphoto");?>">Add Client</a></li>
                        
                    </ul>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-comments"></i>
                        <span>Trainer Management</span>
                    </a>
                    <ul class="sub" id="testi-menu">
                        <li><a href="<?php echo Yii::app()->createUrl("octa/trainer/index");?>">Listing</a></li>
                        <li><a href="<?php echo Yii::app()->createUrl("octa/trainer/add");?>">Add Trainer</a></li>
                        <li><a href="<?php echo Yii::app()->createUrl("octa/trainer/assigntrainer");?>">Assign Trainer</a></li>
                        <li><a href="<?php echo Yii::app()->createUrl("octa/trainer/viewassigntrainer");?>">View Assign Trainer</a></li>
                        
                    </ul>
                </li>
                
            </ul>
        </div>
    </div>
</aside>


<section id="main-content">
<section class="wrapper">

<!--mini statistics start-->
<div class="row">
    <?php echo $content ?>
</div>
</section>
</section>
                
</section>
        
        


<script src="<?php echo Yii::app()->request->baseUrl; ?>/adminjs/js/jquery-ui/jquery-ui-1.10.1.custom.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/adminjs/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/adminjs/js/jquery.scrollTo.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/adminjs/js/jquery.nicescroll.js"></script>

<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/adminjs/js/jquery.scrollTo/jquery.scrollTo.js"></script>
<!--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>-->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/adminjs/js/calendar/clndr.js"></script>
<!--<script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>-->



<script src="<?php echo Yii::app()->request->baseUrl; ?>/adminjs/js/dashboard.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/adminjs/js/jquery.customSelect.min.js" ></script>
<!--common script init for all pages-->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/adminjs/js/scripts.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/adminjs/js/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/adminjs/js/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>    
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/adminjs/js/data-tables/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/adminjs/js/data-tables/DT_bootstrap.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/adminjs/js/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/adminjs/js/manage.js"></script>        
 <script type="text/javascript">
    //wysihtml5 start

    $('.wysihtml5').wysihtml5();

    //wysihtml5 end
    
$(function () {
  $('.select2').each(function () {
    $(this).select2({
      placeholder: $(this).attr('placeholder'),
      allowClear: Boolean($(this).data('allow-clear')),
    });
  });
});

</script>       


<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/adminjs/js/bootstrap-select.js"></script> 
 <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/dropimage/dropimage.js"></script>
</body>
    
    
</html>