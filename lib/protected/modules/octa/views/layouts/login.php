<?php

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
    <meta charset="utf-8"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content=""/>
   <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<link rel="icon" href="<?php echo Yii::app()->request->getBaseUrl(true)?>/img/favicon.ico" type="image/x-icon">
    <!--Core CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/admincss/bs3/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/admincss/css/bootstrap-reset.css" rel="stylesheet"/>
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/admincss/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/admincss/css/style.css" rel="stylesheet"/>
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/admincss/css/style-responsive.css" rel="stylesheet" />
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/adminjs/js/jquery.js"></script>
 <script src="<?php echo Yii::app()->request->baseUrl; ?>/admincss/bs3/js/bootstrap.min.js"></script>
    
</head>



 <body class="login-body">

    <div class="container">
            <?php echo $content; ?>
    </div>
     
 </body>
    
 </html>


 