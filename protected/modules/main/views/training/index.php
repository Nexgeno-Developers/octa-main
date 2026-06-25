<section class="breadcrumb">
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>"><i class="fa fa-home"></i></a></li>
		  	<li class="active"><?php echo $content->heading ?></li>
		</ol>
	</div>
</section>


<section class="inner-banner">
    <div class="container">
        <h1><?php echo $content->heading ?></h1>
        <p><?php echo $content->content ?> </p>
    </div>
</section>



<section id="traning-listing-page">
	<div class="container">
		<div class="row">
			<div id="" class=" owl-theme">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<div class="tBox">
						<div class="topTBox text-center" align="center">
                        
                        <p class="icon-traning"></p>
                        
							<h4><a href="<?php echo Yii::app()->createUrl("main/training/onetraining"); ?>">1 ON 1 TRAINING</a></h4>
						</div>
						<div class="topTBoxText">
							<p>1-on-1 Training methodology is optimal for participants looking for full customization of courses and schedule, efficient training and 1-on-1...</p>
						</div>
						<div class="topTBoxMore">
                        	<a href="<?php echo Yii::app()->createUrl("main/training/onetraining"); ?>">
								<img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/next-arrow.png" class="img-fluid" alt="1 ON 1 TRAINING">
                            </a>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<div class="tBox">
						<div class="topTBox text-center" align="center">
                        <p class="icon-traning"></p>
                        
							<h4><a href="<?php echo Yii::app()->createUrl("main/training/flytrainer"); ?>">FLY ME A TRAINER</a></h4>
             </div>
             <div class="topTBoxText">
             	<p>Fly me a Trainer is no different from classroom training since it consists of the same setup. The only...</p>
             </div>
             <div class="topTBoxMore">
             	<a href="<?php echo Yii::app()->createUrl("main/training/flytrainer"); ?>">
             	<img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/next-arrow.png" class="img-fluid" alt="fly me a trainer">
                </a>
             </div>
              
            </div>
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
             <div class="tBox">
             <div class="topTBox text-center" align="center">
             <p class="icon-traning">
<img width="44" height="34" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/instructor-Led-Online.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""></p>
                <h4><a href="<?php echo Yii::app()->createUrl("main/training/instructorled"); ?>">INSTRUCTOR LED ONLINE</a></h4>
             </div>
             <div class="topTBoxText">
             	<p>Online training is a cost-effective and flexible learning method where we create an extensive learning experience for the participants...</p>
             </div>
             <div class="topTBoxMore">
             	<a href="<?php echo Yii::app()->createUrl("main/training/instructorled"); ?>">
             	<img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/next-arrow.png" class="img-fluid" alt="instructor led online">
                </a>
             </div>
              
            </div>
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
             <div class="tBox">
             <div class="topTBox text-center" align="center">
             
             <p class="icon-traning">
            <img width="44" height="34" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/Classrom-training.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="">
            </p>

                <h4><a href="<?php echo Yii::app()->createUrl("main/training/ctraning"); ?>">CLASSROOM TRAINING</a></h4>
             </div>
             <div class="topTBoxText">
             	<p>Classroom training is one of the most effective forms of learning. Attending a class requires an investment of time...</p>
             </div>
             <div class="topTBoxMore">
             	<a href="<?php echo Yii::app()->createUrl("main/training/ctraning"); ?>">
             	<img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/next-arrow.png" class="img-fluid" alt="classroom training">
                </a>
             </div>
              
            </div>
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
             <div class="tBox">
             <div class="topTBox text-center" align="center">
             <p class="icon-traning">
<img width="44" height="34" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/corporate-traning.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""></p>

                <h4><a href="<?php echo Yii::app()->createUrl("main/training/corporatetraining"); ?>">CORPORATE TRAINING</a></h4>
             </div>
             <div class="topTBoxText">
             	<p>Many companies all across the globe often feel it’s a challenging exercise to fill the gap created by a...</p>
             </div>
             <div class="topTBoxMore">
             	<a href="<?php echo Yii::app()->createUrl("main/training/corporatetraining"); ?>">
             	<img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/next-arrow.png" class="img-fluid" alt="corporate training">
                </a>
             </div>
              
            </div>
            </div>
          </div>
          
        </div>


      </div>
    </section>

