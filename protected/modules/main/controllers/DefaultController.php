<?php 

require_once Yii::getPathOfAlias('webroot') . '/customfiles/mailfunctions.php';
$path =  pathinfo(Yii::app()->request->scriptFile);
require $path['dirname'] . '/protected/vendor/razorpay-php/Razorpay.php';
use Razorpay\Api\Api;
class DefaultController extends CController {
	 public $pageDescription;
	 public $pageKeywords;

    public function actionIndex() {
        $cri = new CDbCriteria();
        $dynamicValue = 1;
        $cri->condition = "status=1 AND is_hot=1 AND JSON_CONTAINS(tag_ids, '\"$dynamicValue\"')";
        $cri->limit = "8";
				$cri->order='exam_order DESC';
        $exampopular = Exam::model()->findAll($cri);
        
        
        $cri = new CDbCriteria();
        $dynamicValue = 2;
        $cri->condition = "status=1 AND is_hot=1 AND JSON_CONTAINS(tag_ids, '\"$dynamicValue\"')";
        $cri->limit = "8";
				$cri->order='exam_order DESC';
        $examnew = Exam::model()->findAll($cri);
        
        $cri = new CDbCriteria();
        $dynamicValue = 3;
        $cri->condition = "status=1 AND is_hot=1 AND JSON_CONTAINS(tag_ids, '\"$dynamicValue\"')";
        $cri->limit = "8";
				$cri->order='exam_order DESC';
        $examccie = Exam::model()->findAll($cri);

// Assuming $dynamicValue is the dynamic variable you want to use
// $dynamicValue = 1;
// $cri = new CDbCriteria();
// $cri->condition = "status = 1 AND is_hot = 1";//  AND JSON_CONTAINS(tag_ids, '\"$dynamicValue\"')
// $cri->limit = 4;
// $cri->order = 'exam_order DESC';

// $exams = Exam::model()->findAll($cri);
// echo'<pre>';
// var_dump($exam);
// echo'</pre>';
// exit();
        $content = Cms::model()->findByPk(1);
        $this->pageTitle = $content->title;

        $cri1 = new CDbCriteria();
				$cri1->condition = "is_home=1";
        $cri1->limit = "12";
        $cri1->order = "id desc";
        $testimonials = Testimonials::model()->findAll($cri1);

				$id = 26;
				$cri = new CDbCriteria();
        $cri->condition = "ev_pg_id=:ev_pg_id";
        $cri->params = array(":ev_pg_id" => $id);
				$cri->limit = "8";
        $gallery = GalleryImages::model()->findAll($cri);

				$cri2 = new CDbCriteria();
        $cri2->condition="type = 2";
				$cri2->order="date_added desc";
				$cri2->limit = "4";
				$demos = Demos::model()->findAll($cri2);

				$cri3 = new CDbCriteria();
				$cri3->order="created_date desc";
				$cri3->limit = "8";
				$stories = Stories::model()->findAll($cri3);

				$cri4 = new CDbCriteria();
				$cri4->condition = "is_home = 1";
        $cri4->limit = "4";
        $cri4->order = "date_added";
        $trainers = Trainer::model()->findAll($cri4);

				$smarquee = Scrollstories::model()->findByPk(6);

				$cri5 = new CDbCriteria();
        $cri5->condition="status=1 AND type=1";
        $cri5->order="orders asc";
				$slider = SliderPost::model()->findAll($cri5);  
				
				$blogs = array();
				try {
					$blogs = Yii::app()->db_blog->createCommand()->select('p.*')->from('wp_posts p')->where('p.post_status = "publish" AND p.post_type = "post" ')->order('p.post_date DESC')->limit(3)->queryAll();
				} catch (Exception $e) {
					Yii::log('Blog DB unavailable: '.$e->getMessage(), CLogger::LEVEL_WARNING, 'application.blog');
				}
				
				
		//var_dump($blogs);
				$this->pageDescription = $content->meta_desc;
				$this->pageKeywords = $content->meta_keywords;
        /* Yii::app()->clientScript->registerMetaTag($content->meta_keywords, 'keywords');
        Yii::app()->clientScript->registerMetaTag($content->meta_desc, 'description'); */
 
        $this->render('index', array("gallery" => $gallery, "examnew" => $examnew, "examccie" => $examccie, "exampopular" => $exampopular, "testimonials" => $testimonials, "content" => $content, "trainers" => $trainers, "demos" => $demos, "stories" => $stories, "smarquee" => $smarquee, "slider" => $slider, "blogs" => $blogs));
    }

    public function actionCourseLibrary() {
        $cri = new CDbCriteria();
        $cri->condition = "status=1";
        $vendors = Vendor::model()->findAll($cri);

        $content = Cms::model()->findByPk(17);
        $this->pageTitle = $content->title;
				$this->pageDescription = $content->meta_desc;
				$this->pageKeywords = $content->meta_keywords;
				
        /* Yii::app()->clientScript->registerMetaTag($content->meta_keywords, 'keywords');
        Yii::app()->clientScript->registerMetaTag($content->meta_desc, 'description'); */

        $this->render('courselibrary', array("vendors" => $vendors, "content" => $content));
    }

    ////////////////////////////End///////////////////////////////////

    public function actionAboutUs() {
		$content = Cms::model()->findByPk(2);
		$this->pageTitle = $content->title;
		$this->pageDescription = $content->meta_desc;
		$this->pageKeywords = $content->meta_keywords;
		Yii::app()->clientScript->registerMetaTag('index', 'robots');

		$ourJourney = Cms::model()->findByPk(23);
		$infrastructure = Cms::model()->findByPk(24);
		$aboutp = Cms::model()->findByPk(25);

		$cri1 = new CDbCriteria();
		$cri1->order="date_added desc";
		$trainers = Trainer::model()->findAll($cri1);

		$cri1 = new CDbCriteria();
		$cri1->condition = "type=:type";
        $cri1->params = array(":type" => "Octa CCIE");
		$cri1->order="date_added desc";
		$octatrainers = Trainer::model()->findAll($cri1);

		$cri1 = new CDbCriteria();
		$cri1->condition = "type=:type";
        $cri1->params = array(":type" => "Master Trainer");
		$cri1->order="date_added desc";
		$ccietrainers = Trainer::model()->findAll($cri1);

		$cri1 = new CDbCriteria();
		$cri1->condition = "type=:type";
        $cri1->params = array(":type" => "CCNA/CCNP Trainers");
		$cri1->order="date_added desc";
		$ccnaccnptrainers = Trainer::model()->findAll($cri1);

		
		$cri1 = new CDbCriteria();
		$cri1->condition = "type!=:type AND type!=:type2 AND type!=:type3 AND type!=:type4";
        $cri1->params = array(":type" => "CCNA/CCNP Trainers",":type2" => "CCIE Trainers",":type3" => "Master Trainer",":type4" => "Octa CCIE");
		$cri1->order="date_added desc";
		$othertrainers = Trainer::model()->findAll($cri1);


		$cri2 = new CDbCriteria();
		$cri2->order="created_date desc";
		$clients = Clients::model()->findAll($cri2);

 

		$id = 10;
		$cri = new CDbCriteria();
        $cri->condition = "ev_pg_id=:ev_pg_id";
        $cri->params = array(":ev_pg_id" => $id);
        $productPages = GalleryImages::model()->findAll($cri);


        $this->render("aboutus", array("content" => $content,"ourJourney" => $ourJourney,"infrastructure" => $infrastructure,"trainers" => $trainers,"aboutp" => $aboutp,"clients" => $clients, "productPages" => $productPages, "octatrainers" => $octatrainers, "ccietrainers" => $ccietrainers, "ccnaccnptrainers" => $ccnaccnptrainers, "othertrainers" => $othertrainers));
    }

    public function actionOurJourney() {
        $content = Cms::model()->findByPk(3);
        $this->pageTitle = $content->title;
				$this->pageDescription = $content->meta_desc;
				$this->pageKeywords = $content->meta_keywords;
        $this->render("ourjourney", array("content" => $content));
    }

	public function actionMessage() {
        $content = Cms::model()->findByPk(30);
        $this->pageTitle = $content->title;
				$this->pageDescription = $content->meta_desc;
				$this->pageKeywords = $content->meta_keywords;

		
        $this->render("message", array("content" => $content));
    }

    public function actionAwards() {
        $content = Cms::model()->findByPk(4);
        $this->pageTitle = $content->title;
				$this->pageDescription = $content->meta_desc;
				$this->pageKeywords = $content->meta_keywords;
        $this->render("awards", array("content" => $content));
    }

    public function actionSuccessStories() {
			$content = Cms::model()->findByPk(5);
			$this->pageTitle = $content->title;
			$this->pageDescription = $content->meta_desc;
			$this->pageKeywords = $content->meta_keywords;
			
			$cri = new CDbCriteria();
			$cri->condition = "status=1 AND is_hot=1";
			$cri->limit = "4";
		    //$cri->order = "series  desc";

			$exam = Exam::model()->findAll($cri);

			$cri1 = new CDbCriteria();
			//$cri1->limit = "30";
			//$cri1->order = "name";
			//$cri1->order = "series desc";

			$stories = Stories::model()->findAll($cri1);

            $cri2 = new CDbCriteria();
            $cri2->order = "series ASC";
			$scrollstories = Scrollstories::model()->findAll($cri2);

			$this->render("successstories", array("content" => $content, "exam" =>$exam, "stories" => $stories, "scrollstories" => $scrollstories));
    }
    
        public function actionStudentReviews() {
			$content = Cms::model()->findByPk(45);
			$this->pageTitle = $content->title;
			$this->pageDescription = $content->meta_desc;
			$this->pageKeywords = $content->meta_keywords;
			
			$cri = new CDbCriteria();
			$cri->condition = "status=1 AND is_hot=1";
			$cri->limit = "4";
			$exam = Exam::model()->findAll($cri);

			$cri1 = new CDbCriteria();
			//$cri1->limit = "30";
			$cri1->order = "name";
			$stories = Stories::model()->findAll($cri1);

            $scrollstories = Scrollstories::model()->findAll();
            
			$google_reviews = new CDbCriteria();
			$google_reviews->condition = "platform='google'";
			$google_reviews->order="id desc";
			$google_reviews->limit = "150";
            $review['google'] = Studentreview::model()->findAll($google_reviews);

			$linkedin_reviews = new CDbCriteria();
			$linkedin_reviews->condition = "platform='linkedin'";
			$linkedin_reviews->order="id desc";
			$linkedin_reviews->limit = "150";
            $review['linkedin'] = Studentreview::model()->findAll($linkedin_reviews);   
            
			$facebook_reviews = new CDbCriteria();
			$facebook_reviews->condition = "platform='facebook'";
			$facebook_reviews->order="id desc";
			$facebook_reviews->limit = "150";
            $review['facebook'] = Studentreview::model()->findAll($facebook_reviews); 
            
			$youtube_reviews = new CDbCriteria();
			$youtube_reviews->condition = "platform='youtube'";
			$youtube_reviews->order="id desc";
			$youtube_reviews->limit = "150";
            $review['youtube'] = Studentreview::model()->findAll($youtube_reviews);   
            
            //var_dump($review);

			$this->render("studentreviews", array("content" => $content, "exam" =>$exam, "stories" => $stories, "scrollstories" => $scrollstories, 'review' => $review));
    }
    
    
    public function actionEnterpriseLading() {
			$content = Cms::model()->findByPk(46);
			$this->pageTitle = $content->title;
			$this->pageDescription = $content->meta_desc;
			$this->pageKeywords = $content->meta_keywords;
			
			$cri = new CDbCriteria();
			$cri->condition = "status=1 AND is_hot=1";
			$cri->limit = "4";
			$exam = Exam::model()->findAll($cri);

			$cri1 = new CDbCriteria();
			//$cri1->limit = "30";
			$cri1->order = "name";
			$stories = Stories::model()->findAll($cri1);

			$scrollstories = Scrollstories::model()->findAll();

			$this->render("enterpriselading", array("content" => $content, "exam" =>$exam, "stories" => $stories, "scrollstories" => $scrollstories));
    }
    
    
    public function actionOnlineTraining() {
      $content = Cms::model()->findByPk(47);
      $this->pageTitle = $content->title;
      $this->pageDescription = $content->meta_desc;
      $this->pageKeywords = $content->meta_keywords;
      $this->render("onlinetraining", array("content" => $content));
    }
    
    
     public function actionIndustrialVisit() {
      $content = Cms::model()->findByPk(48);
      $this->pageTitle = $content->title;
      $this->pageDescription = $content->meta_desc;
      $this->pageKeywords = $content->meta_keywords;
      $this->render("industrialvisit", array("content" => $content));
    }
    
    
    
     public function actionInterviewQuestions() {
      $content = Cms::model()->findByPk(49);
      $this->pageTitle = $content->title;
      $this->pageDescription = $content->meta_desc;
      $this->pageKeywords = $content->meta_keywords;
      $this->render("interviewquestions", array("content" => $content));
    }
    
    public function actionSdwantraining() {
      $content = Cms::model()->findByPk(57);
      $this->pageTitle = $content->title;
      $this->pageDescription = $content->meta_desc;
      $this->pageKeywords = $content->meta_keywords;
      $this->render("sdwantraining", array("content" => $content));
    }
    
    
    public function actionpaloaltotraining() {
      $content = Cms::model()->findByPk(60);
      $this->pageTitle = $content->title;
      $this->pageDescription = $content->meta_desc;
      $this->pageKeywords = $content->meta_keywords;
      $this->render("paloaltotraining", array("content" => $content));
    }
    
    
    public function actionccnpenterprise() {
      $content = Cms::model()->findByPk(59);
      $this->pageTitle = $content->title;
      $this->pageDescription = $content->meta_desc;
      $this->pageKeywords = $content->meta_keywords;
      $this->render("ccnpenterprise", array("content" => $content));
    }
    
    
    public function actionCristmasOffer() {
      $content = Cms::model()->findByPk(53);
      $this->pageTitle = $content->title;
      $this->pageDescription = $content->meta_desc;
      $this->pageKeywords = $content->meta_keywords;
      
      $youtube_reviews = new CDbCriteria();
	  $youtube_reviews->condition = "platform='youtube'";
      $youtube_reviews->order="id desc";
	  $youtube_reviews->limit = "4";
      $review['youtube'] = Studentreview::model()->findAll($youtube_reviews);   
            
            
      $this->render("cristmasoffer", array("content" => $content,"review" => $review));
    }
    
    
    public function actionccnatraining() {
      $content = Cms::model()->findByPk(54);
      $this->pageTitle = $content->title;
      $this->pageDescription = $content->meta_desc;
      $this->pageKeywords = $content->meta_keywords;
      
      $youtube_reviews = new CDbCriteria();
	  $youtube_reviews->condition = "platform='youtube'";
      $youtube_reviews->order="id desc";
	  $youtube_reviews->limit = "4";
      $review['youtube'] = Studentreview::model()->findAll($youtube_reviews);   
            
            
      $this->render("ccnatraining", array("content" => $content,"review" => $review));
    }
    
    
    
     public function actionccdatraining() {
      $content = Cms::model()->findByPk(55);
      $this->pageTitle = $content->title;
      $this->pageDescription = $content->meta_desc;
      $this->pageKeywords = $content->meta_keywords;
      
      $youtube_reviews = new CDbCriteria();
	  $youtube_reviews->condition = "platform='youtube'";
      $youtube_reviews->order="id desc";
	  $youtube_reviews->limit = "4";
      $review['youtube'] = Studentreview::model()->findAll($youtube_reviews);   
            
            
      $this->render("ccdatraining", array("content" => $content,"review" => $review));
    }
    
    
     public function actionrepublicday2023() {
      $content = Cms::model()->findByPk(56);
      $this->pageTitle = $content->title;
      $this->pageDescription = $content->meta_desc;
      $this->pageKeywords = $content->meta_keywords;
      
      $youtube_reviews = new CDbCriteria();
	  $youtube_reviews->condition = "platform='youtube'";
      $youtube_reviews->order="id desc";
	  $youtube_reviews->limit = "4";
      $review['youtube'] = Studentreview::model()->findAll($youtube_reviews);   
            
            
      $this->render("republicday2023", array("content" => $content,"review" => $review));
    }
    
    
     public function actioncehtraining() {
      $content = Cms::model()->findByPk(61);
      $this->pageTitle = $content->title;
      $this->pageDescription = $content->meta_desc;
      $this->pageKeywords = $content->meta_keywords;
      
      $youtube_reviews = new CDbCriteria();
	  $youtube_reviews->condition = "platform='youtube'";
      $youtube_reviews->order="id desc";
	  $youtube_reviews->limit = "4";
      $review['youtube'] = Studentreview::model()->findAll($youtube_reviews);   
            
            
      $this->render("cehtraining", array("content" => $content,"review" => $review));
    }
    
    public function actioncciecollaboration() {
      $content = Cms::model()->findByPk(62);
      $this->pageTitle = $content->title;
      $this->pageDescription = $content->meta_desc;
      $this->pageKeywords = $content->meta_keywords;
      
      $youtube_reviews = new CDbCriteria();
	  $youtube_reviews->condition = "platform='youtube'";
      $youtube_reviews->order="id desc";
	  $youtube_reviews->limit = "4";
      $review['youtube'] = Studentreview::model()->findAll($youtube_reviews);   
            
            
      $this->render("cciecollaboration", array("content" => $content,"review" => $review));
    }
    public function actionawsfreetraining() {
        
      $content = Cms::model()->findByPk(63);
      $this->pageTitle = $content->title;
      $this->pageDescription = $content->meta_desc;
      $this->pageKeywords = $content->meta_keywords;
      
      $youtube_reviews = new CDbCriteria();
	  $youtube_reviews->condition = "platform='youtube'";
      $youtube_reviews->order="id desc";
	  $youtube_reviews->limit = "4";
      $review['youtube'] = Studentreview::model()->findAll($youtube_reviews);   
            
      $this->render("awsfreetraining", array("content" => $content,"review" => $review));
    }
  
  public function actionccnpquiz() {
      $content = Cms::model()->findByPk(64);
      $this->pageTitle = $content->title;
      $this->pageDescription = $content->meta_desc;
      $this->pageKeywords = $content->meta_keywords;
      
      $youtube_reviews = new CDbCriteria();
	  $youtube_reviews->condition = "platform='youtube'";
      $youtube_reviews->order="id desc";
	  $youtube_reviews->limit = "4";
      $review['youtube'] = Studentreview::model()->findAll($youtube_reviews);   
            
            
      $this->render("ccnpquiz", array("content" => $content,"review" => $review));
    }
    
      public function actioncciesecurityv61training() {
      $content = Cms::model()->findByPk(65);
      $this->pageTitle = $content->title;
      $this->pageDescription = $content->meta_desc;
      $this->pageKeywords = $content->meta_keywords;
      
      $youtube_reviews = new CDbCriteria();
	  $youtube_reviews->condition = "platform='youtube'";
      $youtube_reviews->order="id desc";
	  $youtube_reviews->limit = "4";
      $review['youtube'] = Studentreview::model()->findAll($youtube_reviews);   
            
            
      $this->render("cciesecurityv61training", array("content" => $content,"review" => $review));
    }
        
      public function actiondiwalisale2023() {
      $content = Cms::model()->findByPk(66);
      $this->pageTitle = $content->title;
      $this->pageDescription = $content->meta_desc;
      $this->pageKeywords = $content->meta_keywords;
      
      $youtube_reviews = new CDbCriteria();
	  $youtube_reviews->condition = "platform='youtube'";
      $youtube_reviews->order="id desc";
	  $youtube_reviews->limit = "4";
      $review['youtube'] = Studentreview::model()->findAll($youtube_reviews);   
            
            
      $this->render("diwalisale2023", array("content" => $content,"review" => $review));
    }
      public function actionannualdaypage() {
      $content = Cms::model()->findByPk(68);
      $this->pageTitle = $content->title;
      $this->pageDescription = $content->meta_desc;
      $this->pageKeywords = $content->meta_keywords;
      
      $youtube_reviews = new CDbCriteria();
	  $youtube_reviews->condition = "platform='youtube'";
      $youtube_reviews->order="id desc";
	  $youtube_reviews->limit = "4";
      $review['youtube'] = Studentreview::model()->findAll($youtube_reviews);   
            
            
      $this->render("annualdaypage", array("content" => $content,"review" => $review));
    }
          public function actionfreejnciedatacenter() {
      $content = Cms::model()->findByPk(69);
      $this->pageTitle = $content->title;
      $this->pageDescription = $content->meta_desc;
      $this->pageKeywords = $content->meta_keywords;
      
      $youtube_reviews = new CDbCriteria();
	  $youtube_reviews->condition = "platform='youtube'";
      $youtube_reviews->order="id desc";
	  $youtube_reviews->limit = "4";
      $review['youtube'] = Studentreview::model()->findAll($youtube_reviews);   
            
            
      $this->render("freejnciesecurity", array("content" => $content,"review" => $review));
    }
              public function actionfreejnciesecurity() {
      $content = Cms::model()->findByPk(70);
      $this->pageTitle = $content->title;
      $this->pageDescription = $content->meta_desc;
      $this->pageKeywords = $content->meta_keywords;
      
      $youtube_reviews = new CDbCriteria();
	  $youtube_reviews->condition = "platform='youtube'";
      $youtube_reviews->order="id desc";
	  $youtube_reviews->limit = "4";
      $review['youtube'] = Studentreview::model()->findAll($youtube_reviews);   
            
            
      $this->render("freejnciesecurity", array("content" => $content,"review" => $review));
    }
      public function actionfreejncieenterpriseinfrastructure() {
      $content = Cms::model()->findByPk(71);
      $this->pageTitle = $content->title;
      $this->pageDescription = $content->meta_desc;
      $this->pageKeywords = $content->meta_keywords;
      
      $youtube_reviews = new CDbCriteria();
	  $youtube_reviews->condition = "platform='youtube'";
      $youtube_reviews->order="id desc";
	  $youtube_reviews->limit = "4";
      $review['youtube'] = Studentreview::model()->findAll($youtube_reviews);   
            
            
      $this->render("freejncieenterpriseinfrastructure", array("content" => $content,"review" => $review));
    }
      public function actionfreejncietraining() {
      $content = Cms::model()->findByPk(72);
      $this->pageTitle = $content->title;
      $this->pageDescription = $content->meta_desc;
      $this->pageKeywords = $content->meta_keywords;
      
      $youtube_reviews = new CDbCriteria();
	  $youtube_reviews->condition = "platform='youtube'";
      $youtube_reviews->order="id desc";
	  $youtube_reviews->limit = "4";
      $review['youtube'] = Studentreview::model()->findAll($youtube_reviews);   
            
            
      $this->render("freejncietraining", array("content" => $content,"review" => $review));
    }
      public function actionchristmaspage() {
      $content = Cms::model()->findByPk(67);
      $this->pageTitle = $content->title;
      $this->pageDescription = $content->meta_desc;
      $this->pageKeywords = $content->meta_keywords;
      
      $youtube_reviews = new CDbCriteria();
	  $youtube_reviews->condition = "platform='youtube'";
      $youtube_reviews->order="id desc";
	  $youtube_reviews->limit = "4";
      $review['youtube'] = Studentreview::model()->findAll($youtube_reviews);   
            
            
      $this->render("christmaspage", array("content" => $content,"review" => $review));
    }
  
    public function actionResume() {
      $content = Cms::model()->findByPk(50);
      $this->pageTitle = $content->title;
      $this->pageDescription = $content->meta_desc;
      $this->pageKeywords = $content->meta_keywords;
      $this->render("resume", array("content" => $content));
    }
    
    public function actionVisioTopology() {
      $content = Cms::model()->findByPk(51);
      $this->pageTitle = $content->title;
      $this->pageDescription = $content->meta_desc;
      $this->pageKeywords = $content->meta_keywords;
      $this->render("visiotopology", array("content" => $content));
    }
    
    
    public function actionStudyGroups() {
      $content = Cms::model()->findByPk(52);
      $this->pageTitle = $content->title;
      $this->pageDescription = $content->meta_desc;
      $this->pageKeywords = $content->meta_keywords;
      $this->render("studygroups", array("content" => $content));
    }
    
    
     

    public function actionPartnerWithus() {
        $content = Cms::model()->findByPk(6);
        $this->pageTitle = $content->title;
				$this->pageDescription = $content->meta_desc;
				$this->pageKeywords = $content->meta_keywords;
        $this->render("partnerwithus", array("content" => $content));
    }

    public function actionPhotoGallery() {



        if (!empty($_GET['id'])) {
            
            $content = Cms::model()->findByPk(7);
            $this->pageTitle = $content->title;
						$this->pageDescription = $content->meta_desc;
						$this->pageKeywords = $content->meta_keywords;
            $id = Yii::app()->request->getParam('id');

            $cri = new CDbCriteria();
            $cri->condition = "id=:id";
            $cri->params = array(":id" => $id);
            $cri->order="id desc";           
            $productPages = Gallery::model()->find($cri);
            //$productPage = Gallery::model()->findAll();
            
            $cri6 = new CDbCriteria();
			$cri6->order="series asc";            
            $productPage = Gallery::model()->findAll($cri6);
            
            $btn_class = $id;

            $this->render("photogallery", array("content" => $content, "productPages" => $productPages, "productPage" => $productPage, 'active_id' => $btn_class));
        } else {

            $content = Cms::model()->findByPk(7);
            $this->pageTitle = $content->title;
            //$productPage = Gallery::model()->findAll();
            
            $cri6 = new CDbCriteria();
			$cri6->order="series asc";            
            $productPage = Gallery::model()->findAll($cri6);            

			//$productPages = Gallery::model()->findByPk(1);
			
            $cri = new CDbCriteria();
            $cri->condition = "id=:id";
            $cri->params = array(":id" => 1);
            $cri->order="id desc";           
            $productPages = Gallery::model()->find($cri);
            
            $btn_class = 1;

            $this->render("photogallery", array("content" => $content, "productPages" => $productPages, "productPage" => $productPage, 'active_id' => $btn_class));
        }
    }

    public function actionContactUs() {
        $content = Cms::model()->findByPk(8);
        $this->pageTitle = $content->title;
				$this->pageDescription = $content->meta_desc;
				$this->pageKeywords = $content->meta_keywords;
        Yii::app()->clientScript->registerMetaTag('index', 'robots');

		


        if (!empty($_POST)) {

            $captcha = Yii::app()->request->getPost("g-recaptcha-response");

            if (!empty($captcha)) {
                $secret = Yii::app()->params['secretKey'];
                $ip = Yii::app()->request->getUserHostAddress();
                $rsp = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");
                $arr = json_decode($rsp, TRUE);

                if ($arr["success"]) {
                    $spram[0] = Yii::app()->params['from'];
                    $spram[1] = Yii::app()->request->getPost("name");
                    $spram[2] = Yii::app()->request->getPost("cemail");
                    $spram[3] = Yii::app()->request->getPost("message");
					$spram[4] = Yii::app()->request->getPost("course");
					$spram[7] = Yii::app()->request->getPost("phone");

					$model = new Forms();
					$model->type = "Contact us";
                    $model->name = $spram[1];
                    $model->email = $spram[2];
                    $model->message = $spram[3];
                    $model->subject = $spram[4];
                    $model->phone = $spram[7];
                    $model->date_added = Yii::app()->params['mydate'];
                    $model->save();



                    if ($spram[1] != "" AND $spram[2] != "" AND $spram[3] != "") {
                        email_contactus($spram);
												$this->redirect(Yii::app()->createUrl("main/default/thankyou"));
                        $msg = "Thank you for your message. It has been sent.";
												Yii::app()->user->setState("fmessage", $msg);
               			$this->redirect(Yii::app()->createUrl("main/default/contactus",array("type"=>"1")));
                    } else {
                        $msg = "One or more fields have an error. Please check and try again.";
                        Yii::app()->user->setState("fmessage", $msg);
               			$this->redirect(Yii::app()->createUrl("main/default/contactus",array("type"=>"0")));
                    }
                } else {
                    $msg = "Invalid Captcha";
                    Yii::app()->user->setState("fmessage", $msg);
               		$this->redirect(Yii::app()->createUrl("main/default/contactus",array("type"=>"0")));
                }
            } else {
                $msg = "Captcha required.";
                Yii::app()->user->setState("fmessage", $msg);
               	$this->redirect(Yii::app()->createUrl("main/default/contactus",array("type"=>"0")));
            }
        } else {
			$msg = "There was an error trying to send your message. Please try again later.";
            $this->render("contactus", array("content" => $content));
        }
    }

    public function actionETrainer() { 
        $cri1 = new CDbCriteria();
        //$cri1->limit = "9";
        $cri1->order = "date_added desc";
        $trainers = Trainer::model()->findAll($cri1);

		$cri1 = new CDbCriteria();
		$cri1->condition = "type=:type";
        $cri1->params = array(":type" => "Octa CCIE");
		$cri1->order="date_added desc";
		$octatrainers = Trainer::model()->findAll($cri1);

		$cri1 = new CDbCriteria();
		$cri1->condition = "type=:type";
        $cri1->params = array(":type" => "Master Trainer");
		$cri1->order="date_added desc";
		$ccietrainers = Trainer::model()->findAll($cri1);

		$cri1 = new CDbCriteria();
		$cri1->condition = "type=:type";
        $cri1->params = array(":type" => "CCNA/CCNP Trainers");
		$cri1->order="date_added desc";
		$ccnaccnptrainers = Trainer::model()->findAll($cri1);

		
		$cri1 = new CDbCriteria();
		$cri1->condition = "type!=:type AND type!=:type2 AND type!=:type3 AND type!=:type4";
        $cri1->params = array(":type" => "CCNA/CCNP Trainers",":type2" => "CCIE Trainers",":type3" => "Master Trainer",":type4" => "Octa CCIE");
		$cri1->order="date_added desc";
		$othertrainers = Trainer::model()->findAll($cri1);


		
        $content = Cms::model()->findByPk(9);
        $this->pageTitle = $content->title;
				$this->pageDescription = $content->meta_desc;
				$this->pageKeywords = $content->meta_keywords;
        $this->render("etrainer", array("content" => $content, "trainers" => $trainers, "octatrainers" => $octatrainers, "ccietrainers" => $ccietrainers, "ccnaccnptrainers" => $ccnaccnptrainers, "othertrainers" => $othertrainers));
    }

    public function actionPrivacyPolicy() {
        $cri1 = new CDbCriteria();
        $cri1->order = "created_date desc";
        $clients = Clients::model()->findAll($cri1);

        $content = Cms::model()->findByPk(15);
        $this->pageTitle = $content->title;
				$this->pageDescription = $content->meta_desc;
				$this->pageKeywords = $content->meta_keywords;
        $this->render("privacypolicy", array("content" => $content));
    }

    public function actionRefundPolicy() {
        $content = Cms::model()->findByPk(16);
        $this->pageTitle = $content->title;
				$this->pageDescription = $content->meta_desc;
				$this->pageKeywords = $content->meta_keywords;
        $this->render("refundpolicy", array("content" => $content));
    }
    public function actionTermsofServices() {
      $content = Cms::model()->findByPk(33);
      $this->pageTitle = $content->title;
      $this->pageDescription = $content->meta_desc;
      $this->pageKeywords = $content->meta_keywords;
      $this->render("termsofservices", array("content" => $content));
    }
    public function actionCancellationPolicy() {
      $content = Cms::model()->findByPk(34);
      $this->pageTitle = $content->title;
      $this->pageDescription = $content->meta_desc;
      $this->pageKeywords = $content->meta_keywords;
      $this->render("cancellationpolicy", array("content" => $content));
    }
		
		public function actionWhatisnewinnewccna() {
      $content = Cms::model()->findByPk(40);
      $this->pageTitle = $content->title;
      $this->pageDescription = $content->meta_desc;
      $this->pageKeywords = $content->meta_keywords;
      $this->render("whatisnewinnewccna", array("content" => $content));
    }

    public function actionNews() {

		$cri = new CDbCriteria();
        $cri->condition = "status=1";
        $news = News::model()->findAll($cri);


        $content = Cms::model()->findByPk(31);
        $this->pageTitle = $content->title;
				$this->pageDescription = $content->meta_desc;
				$this->pageKeywords = $content->meta_keywords;
        $this->render("news", array("content" => $content, "news" => $news));
    }

    public function actionJobGuarantee() {

        $cri = new CDbCriteria();
        $cri->condition = "status=1 AND is_hot=1";
        $cri->limit = "4";
        $exam = Exam::model()->findAll($cri);

        $cri2 = new CDbCriteria();
        $cri2->limit = "8";
        $stories = Stories::model()->findAll($cri2);

		$cri3 = new CDbCriteria();
        $cri3->condition="type = 2";
		$cri3->order="date_added desc";
		$cri3->limit = "4";
		$demos = Demos::model()->findAll($cri3);

        $content = Cms::model()->findByPk(18);
        $this->pageTitle = $content->title;
				$this->pageDescription = $content->meta_desc;
				$this->pageKeywords = $content->meta_keywords;
        $this->render("jobguarantee", array("content" => $content, "exam" => $exam, "stories" => $stories, "demos" => $demos));
    }
	
	    public function actionCcieTrainingInstitute() {

        $cri = new CDbCriteria();
        $cri->condition = "status=1 AND is_hot=1";
        $cri->limit = "4";
        $exam = Exam::model()->findAll($cri); 
		
		$cri2 = new CDbCriteria();
        $cri2->limit = "6";
        $stories = Stories::model()->findAll($cri2);

		$cri3 = new CDbCriteria();
        $cri3->condition="type = 2";
		$cri3->order="date_added desc";
		$cri3->limit = "4";
		$demos = Demos::model()->findAll($cri3);

        $content = Cms::model()->findByPk(18);
        $this->pageTitle = $content->title;
				$this->pageDescription = $content->meta_desc;
				$this->pageKeywords = $content->meta_keywords;
        $this->render("ccietraininginstitute", array("content" => $content, "exam" => $exam, "stories" => $stories, "demos" => $demos));
    } 
	
	public function actionCcnaLandingPage() {
		$this->layout = 'landing_main';
		$cri = new CDbCriteria();
		$cri->condition = "status=1 AND is_hot=1";
		$cri->limit = "4";
		$exam = Exam::model()->findAll($cri); 

		$cri2 = new CDbCriteria();
		$cri2->limit = "6";
		$stories = Stories::model()->findAll($cri2);

		$cri3 = new CDbCriteria();
		$cri3->condition="type = 2";
		$cri3->order="date_added desc";
		$cri3->limit = "4";
		$demos = Demos::model()->findAll($cri3);

		$content = Cms::model()->findByPk(18);
		$this->pageTitle = $content->title;
		$this->pageDescription = $content->meta_desc;
		$this->pageKeywords = $content->meta_keywords;
		$this->render("ccnalandingpage", array("content" => $content, "exam" => $exam, "stories" => $stories, "demos" => $demos));
	} 
  
  	
	public function actionCcieenterpriseinfrastructurelabbootcamp() {
		$this->layout = 'landing_main';
		$cri = new CDbCriteria();
		$cri->condition = "status=1 AND is_hot=1";
		$cri->limit = "4";
		$exam = Exam::model()->findAll($cri); 

		$cri2 = new CDbCriteria();
		$cri2->limit = "6";
		$stories = Stories::model()->findAll($cri2);

		$cri3 = new CDbCriteria();
		$cri3->condition="type = 2";
		$cri3->order="date_added desc";
		$cri3->limit = "4";
		$demos = Demos::model()->findAll($cri3);

		$content = Cms::model()->findByPk(43);
		$this->pageTitle = $content->title;
		$this->pageDescription = $content->meta_desc;
		$this->pageKeywords = $content->meta_keywords;
		$this->render("ccieenterpriseinfrastructurelabbootcamp", array("content" => $content, "exam" => $exam, "stories" => $stories, "demos" => $demos));
	} 

	public function actionCciewebinarslandingpage() {
		$this->layout = 'main';
		$cri = new CDbCriteria();
		$cri->condition = "status=1 AND is_hot=1";
		$cri->limit = "4";
		$exam = Exam::model()->findAll($cri); 

		$cri2 = new CDbCriteria();
		$cri2->limit = "6";
		$stories = Stories::model()->findAll($cri2);

		$cri3 = new CDbCriteria();
		$cri3->condition="type = 2";
		$cri3->order="date_added desc";
		$cri3->limit = "4";
		$demos = Demos::model()->findAll($cri3);

		$content = Cms::model()->findByPk(41);
		$this->pageTitle = $content->title;
		$this->pageDescription = $content->meta_desc;
		$this->pageKeywords = $content->meta_keywords;
		$this->render("cciewebinarslandingpage", array("content" => $content, "exam" => $exam, "stories" => $stories, "demos" => $demos));
	}

    public function actionPlacements() {
        $cri = new CDbCriteria();
        $cri->condition = "status=1 AND is_hot=1";
        $cri->limit = "4";
        $exam = Exam::model()->findAll($cri);

        $cri2 = new CDbCriteria();
		//$cri2->condition = "content = ''";
       // $cri2->limit = "6";
        $cri2->order = "id ASC";
        $stories = Stories1::model()->findAll($cri2);

       $cri1 = new CDbCriteria();
		$cri1->condition = "content != ''";
        $cri1->limit = "4";
        $cri1->order = "id ASC";
        $storiesb = Stories1::model()->findAll($cri1);

		$cri4 = new CDbCriteria();
		$cri4->condition = "type = 2 AND status = 1";
        $cri4->limit = "12";
        $cri4->order = "date_added";
        $videossp = Demos::model()->findAll($cri4);

        $content = Cms::model()->findByPk(19);
        $this->pageTitle = $content->title;
				$this->pageDescription = $content->meta_desc;
				$this->pageKeywords = $content->meta_keywords;
        $this->render("placements", array("content" => $content, "stories" => $stories, "storiesb" => $storiesb, "exam" => $exam, "videossp" => $videossp));
    }

    public function actionCareer() {
        $content = Cms::model()->findByPk(20);
        $this->pageTitle = $content->title;
				$this->pageDescription = $content->meta_desc;
				$this->pageKeywords = $content->meta_keywords;
        $this->render("career", array("content" => $content));
    }

    public function actionNewsAnnouncement() {
        $content = Cms::model()->findByPk(21);
        $this->pageTitle = $content->title;
				$this->pageDescription = $content->meta_desc;
				$this->pageKeywords = $content->meta_keywords;

        $cri1 = new CDbCriteria();
        $cri1->condition = "status = 1";
        $allNews = News::model()->findAll($cri1);

        $this->render("newsannouncement", array("allNews" => $allNews, "content" => $content));
    }

    public function actionGuarantee() {
        $content = Cms::model()->findByPk(2);
        $this->pageTitle = $content->title;
				$this->pageDescription = $content->meta_desc;
				$this->pageKeywords = $content->meta_keywords;
				
        Yii::app()->clientScript->registerMetaTag('index', 'robots');
        $this->render("guarantee", array("content" => $content));
    } 


    public function actionCampuscollegetraining() {
        $content = Cms::model()->findByPk(36);
        $this->pageTitle = $content->title;
        $this->pageDescription = $content->meta_desc;
        $this->pageKeywords = $content->meta_keywords;
        
          $cri1 = new CDbCriteria();
				$cri1->condition = "is_home=1";
        $cri1->limit = "12";
        $cri1->order = "id desc";
        $testimonials = Testimonials::model()->findAll($cri1); 


				$cri2 = new CDbCriteria();
        $cri2->condition="type = 2";
				$cri2->order="date_added desc";
				$cri2->limit = "4";
				$demos = Demos::model()->findAll($cri2);


        
        Yii::app()->clientScript->registerMetaTag('index', 'robots');
        $this->render('campuscollegetraining', array("content" => $content, "testimonials" => $testimonials, "demos" => $demos));
    } 
    
    public function actionFacultydevelopmentprogram() {
        $content = Cms::model()->findByPk(37);
        $this->pageTitle = $content->title;
        $this->pageDescription = $content->meta_desc;
        $this->pageKeywords = $content->meta_keywords;
        
        Yii::app()->clientScript->registerMetaTag('index', 'robots');
        $this->render("facultydevelopmentprogram", array("content" => $content));
    } 
    public function actionPaymentmodes() {
			if(!empty($_POST)){
				
				//getting form data
				$save['currency'] = Yii::app()->request->getPost("currency");
				$save['amount'] = Yii::app()->request->getPost("amount");
				$save['description'] = Yii::app()->request->getPost("description");
				$save['mobile'] = Yii::app()->request->getPost("mobile");
				$save['email'] = Yii::app()->request->getPost("email");
				$save['name'] = Yii::app()->request->getPost("name");
				$save['method'] = Yii::app()->request->getPost("method");
                $save['gateway'] = Yii::app()->request->getPost("gateway");
                
				$model = new Octapayments();
				$model->name = $save['name'];
				$model->email = $save['email'];				
				$model->mobile = $save['mobile'];
				$model->currency = $save['currency'];
				$model->amount = $save['amount'];
				$model->payment_status = 'unpaid';
				$model->description = $save['description'];
				//$model->timestamp = date('Y-m-d H:i:s');
				$model->timestamp = Yii::app()->params['mydate'];
				
		        // The new columns (order_id, txn_id) will be filled below
                $model->order_id        = null;
                $model->txn_id          = null;
            
				$model->save();
				$insert_id = Yii::app()->db->getLastInsertID();
				
				if ($save['gateway'] == 'razorpay') {
                    
                    //create order id
    				$api = new Api(Yii::app()->params['razorpayKeyId'], Yii::app()->params['razorpayKeySecret']);
    				$pay = $save['amount'] * 100;
    				$orderData = [
    						'receipt'         => time().rand(000,999),
    						'amount'          => $pay,
    						'currency'        => $save['currency'],
    				];
    				$razorpayOrder = $api->order->create($orderData);
    				$OrderId = $razorpayOrder['id'];
            		
                    // 3a) Save this Razorpay order_id into our DB:
                    $model->order_id = $OrderId;
                    $model->save(); // update only order_id
                    
    				$response = array('status'=>true, 'OrderID'=> $OrderId, 'InsertID'=> $insert_id, 'UserData'=> $save);
    				echo json_encode($response);exit; 
    				
				}elseif ($save['gateway'] == 'payu') {
                    // PayU logic (as shown before)
                    $MERCHANT_KEY = Yii::app()->params['payuMerchantKey'];
                    $SALT = Yii::app()->params['payuSalt'];
                    $PAYU_BASE_URL = Yii::app()->params['payuBaseUrl'];
            
                    $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
                    $amount = $save['amount'];
                    $firstname = $save['name'];
                    $email = $save['email'];
                    $phone = $save['mobile'];
                    $productinfo = $save['description'];
                    $hashSequence = "$MERCHANT_KEY|$txnid|$amount|$productinfo|$firstname|$email|||||||||||$SALT";
                    $hash = strtolower(hash('sha512', $hashSequence));
                    
                    $currency    = 'USD'; // ← set to USD (only works if your PayU MID supports USD)
                    
                    // 3a) Save this txnid into our DB
                    $model->txn_id = $txnid;
                    $model->save();
                    
                    $action = "$PAYU_BASE_URL/_payment";
                    
                    $payuForm = '
                        <form id="payuForm" method="post" action="' . $action . '">
                            <input type="hidden" name="key" value="' . $MERCHANT_KEY . '">
                            <input type="hidden" name="txnid" value="' . $txnid . '">
                            <input type="hidden" name="amount" value="' . $amount . '">
                            <input type="hidden" name="productinfo" value="' . $productinfo . '">
                            <input type="hidden" name="firstname" value="' . $firstname . '">
                            <input type="hidden" name="email" value="' . $email . '">
                            <input type="hidden" name="phone" value="' . $phone . '">
                            <input type="hidden" name="currency" value="' . $currency . '">
                            <input type="hidden" name="surl" value="' . Yii::app()->createAbsoluteUrl("main/default/paymentresponse", array("id" => $insert_id)) . '">
                            <input type="hidden" name="furl" value="' . Yii::app()->createAbsoluteUrl("main/default/paymentresponse", array("id" => $insert_id)) . '">
                            <input type="hidden" name="hash" value="' . $hash . '">
                        </form>
                        <script>document.getElementById("payuForm").submit();</script>';
                    
                    header('Content-Type: application/json');
                    echo json_encode(['status' => true, 'html' => $payuForm]);
                    Yii::app()->end();
                }

			}
      $content = Cms::model()->findByPk(38);
      $this->pageTitle = $content->title;
      $this->pageDescription = $content->meta_desc;
      $this->pageKeywords = $content->meta_keywords;
      
      Yii::app()->clientScript->registerMetaTag('index', 'robots');
      $this->render("paymentmodes", array("content" => $content));

    }	

    public function actionPaymentresponse() {
        if (empty($_POST)) {
            throw new CHttpException(400, 'Invalid access.');
        }
    
        // ─── 1) Load the payment record immediately ─────────────────────────
        $paymentId = Yii::app()->request->getQuery('id');
        $model = Octapayments::model()->findByPk($paymentId);
        if (!$model) {
            throw new CHttpException(404, 'Payment record not found.');
        }
    
        // ─── 2) Prepare timestamp for “updated_at” ──────────────────────────
        $now = Yii::app()->params['mydate'];
    
        $PaymentResponse = $_POST;
        $PaymentID       = isset($PaymentResponse['razorpay_payment_id'])
                           ? $PaymentResponse['razorpay_payment_id']
                           : '';
    
        $isPayU = isset($_POST['key'])
               && isset($_POST['txnid'])
               && isset($_POST['hash'])
               && isset($_POST['status']);
    
        if ($isPayU) {
            // ─── PAYU FLOW ───────────────────────────────────────────────────
            $posted = $PaymentResponse;
    
            // 2.1) PayU credentials
            $MERCHANT_KEY = Yii::app()->params['payuMerchantKey'];
            $SALT         = Yii::app()->params['payuSalt'];
    
            // 2.2) Extract and trim all relevant fields
            $statusFromPayU = trim($posted['status']   ?? '');
            $udf1  = trim($posted['udf1']  ?? '');
            $udf2  = trim($posted['udf2']  ?? '');
            $udf3  = trim($posted['udf3']  ?? '');
            $udf4  = trim($posted['udf4']  ?? '');
            $udf5  = trim($posted['udf5']  ?? '');
            $udf6  = trim($posted['udf6']  ?? '');
            $udf7  = trim($posted['udf7']  ?? '');
            $udf8  = trim($posted['udf8']  ?? '');
            $udf9  = trim($posted['udf9']  ?? '');
            $udf10 = trim($posted['udf10'] ?? '');
    
            $email       = trim($posted['email']       ?? '');
            $firstname   = trim($posted['firstname']   ?? '');
            $productinfo = trim($posted['productinfo'] ?? '');
            $amount      = trim($posted['amount']      ?? '');
            $txnid       = trim($posted['txnid']       ?? '');
            $key         = trim($posted['key']         ?? '');
            $posted_hash = strtolower(trim($posted['hash'] ?? ''));
    
            // 2.3) Build the “reverse” hash string exactly as PayU expects
            $hashSequence = [
                $SALT,
                $statusFromPayU,
                $udf10,
                $udf9,
                $udf8,
                $udf7,
                $udf6,
                $udf5,
                $udf4,
                $udf3,
                $udf2,
                $udf1,
                $email,
                $firstname,
                $productinfo,
                $amount,
                $txnid,
                $key,
            ];
            $hashString     = implode('|', $hashSequence);
            $calculatedHash = strtolower(hash('sha512', $hashString));
    
            // 2.4) Compare the hashes
            if ($calculatedHash === $posted_hash) {
                // 2.5) Hash is valid → check PayU’s status
                if ($statusFromPayU === 'success') {
                    $dbStatus = 'paid';
                } else {
                    $dbStatus = 'unpaid';
                }
                
                // 3d) Save both txn_id (already present) and mihpayid
                $orderID = trim(isset($posted['mihpayid']) ? $posted['mihpayid'] : '');
                $model->order_id   = $orderID;
                $model->txn_id   = $txnid;
                $model->update();
            }
        }
        elseif (isset($PaymentResponse['razorpay_payment_id']) && $PaymentResponse['razorpay_payment_id'] !== '') {
            
            // ─── RAZORPAY FLOW ─────────────────────────────────────────────────
            $razorpayOrderId       = isset($PaymentResponse['razorpay_order_id'])
                           ? $PaymentResponse['razorpay_order_id']
                           : '';
            $razorpayPaymentId       = isset($PaymentResponse['razorpay_payment_id'])
                           ? $PaymentResponse['razorpay_payment_id']
                           : '';
            $model->order_id         = $razorpayOrderId;
            $model->txn_id           = $razorpayPaymentId;
            $model->update();  
            $dbStatus = 'paid';
        }
        else {
            // Neither PayU nor Razorpay → treat as unpaid
            $dbStatus = 'unpaid';
            $PaymentResponse = '';
        }
    
        // ─── 3) Final database update (for Razorpay‐only or fallback) ───────
        $model->payment_response = json_encode($PaymentResponse);
        $model->payment_status   = $dbStatus;
        $model->updated_at       = $now;
        $model->update();
			
        $recordData = Octapayments::model()->findByPk($paymentId);
        $content = Cms::model()->findByPk(42);
        $this->pageTitle = $content->title;
        $this->pageDescription = $content->meta_desc;
        $this->pageKeywords = $content->meta_keywords;    
        Yii::app()->clientScript->registerMetaTag('index', 'robots');
        $this->render("paymentresponse", array('response'=> $PaymentResponse, 'recordData' => $recordData));

    }		
		
    /*public function actionPaymentmodes() {
			if(!empty($_POST)){
				
				//getting form data
				$save['currency'] = Yii::app()->request->getPost("currency");
				$save['amount'] = Yii::app()->request->getPost("amount");
				$save['description'] = Yii::app()->request->getPost("description");
				$save['mobile'] = Yii::app()->request->getPost("mobile");
				$save['email'] = Yii::app()->request->getPost("email");
				$save['name'] = Yii::app()->request->getPost("name");
				$save['method'] = Yii::app()->request->getPost("method");

				$model = new Octapayments();
				$model->name = $save['name'];
				$model->email = $save['email'];				
				$model->mobile = $save['mobile'];
				$model->currency = $save['currency'];
				$model->amount = $save['amount'];
				$model->payment_status = 'unpaid';
				$model->description = $save['description'];
				//$model->timestamp = date('Y-m-d H:i:s');
				$model->timestamp = Yii::app()->params['mydate'];
				$model->save();
				$insert_id = Yii::app()->db->getLastInsertID();
        //create order id
				$api = new Api(Yii::app()->params['razorpayKeyId'], Yii::app()->params['razorpayKeySecret']);
				$pay = $save['amount'] * 100;
				$orderData = [
						'receipt'         => time().rand(000,999),
						'amount'          => $pay,
						'currency'        => $save['currency'],
				];
				$razorpayOrder = $api->order->create($orderData);
				$OrderId = $razorpayOrder['id'];

				$response = array('status'=>true, 'OrderID'=> $OrderId, 'InsertID'=> $insert_id, 'UserData'=> $save);
				echo json_encode($response);exit;   
				
			}
      $content = Cms::model()->findByPk(38);
      $this->pageTitle = $content->title;
      $this->pageDescription = $content->meta_desc;
      $this->pageKeywords = $content->meta_keywords;
      
      Yii::app()->clientScript->registerMetaTag('index', 'robots');
      $this->render("paymentmodes", array("content" => $content));

    }	

    public function actionPaymentresponse() {
			if(!empty($_POST)){
				$PaymentResponse = $_POST;
				$PaymentID = $PaymentResponse['razorpay_payment_id']; 
				if(!empty($PaymentID)){
					$status = 'paid';
				}else{
					$status = 'unpaid';
				}
				$model= Octapayments::model()->findByPk($_GET['id']);
				$model->payment_response = json_encode($PaymentResponse);
				$model->payment_status = $status;
				$model->update();
			}else{
				$PaymentResponse = '';
			}
			
	  $recordData = Octapayments::model()->findByPk($_GET['id']);
      $content = Cms::model()->findByPk(42);
      $this->pageTitle = $content->title;
      $this->pageDescription = $content->meta_desc;
      $this->pageKeywords = $content->meta_keywords;    
      Yii::app()->clientScript->registerMetaTag('index', 'robots');
      $this->render("paymentresponse", array('response'=> $PaymentResponse, 'recordData' => $recordData));

    }	*/	
		
    public function actionVisaguidance() {
      $content = Cms::model()->findByPk(39);
      $this->pageTitle = $content->title;
      $this->pageDescription = $content->meta_desc;
      $this->pageKeywords = $content->meta_keywords;
      
      Yii::app()->clientScript->registerMetaTag('index', 'robots');
      $this->render("visaguidance", array("content" => $content));
    }  




    public function actionFaq() {
        $content = Cms::model()->findByPk(35);
        $this->pageTitle = $content->title;
				$this->pageDescription = $content->meta_desc;
				$this->pageKeywords = $content->meta_keywords;
				
        Yii::app()->clientScript->registerMetaTag('index', 'robots');
        $this->render("faq", array("content" => $content));
    }

    public function actionNewsLetter() {
        if (!empty($_POST)) {
            $spram[0] = Yii::app()->params['from'];
            $spram[1] = Yii::app()->request->getPost("action");
            $spram[2] = Yii::app()->request->getPost("email");

            if ($spram[1] != "" AND $spram[2] != "" AND $spram[1] == "newletter") {
                $cri = new CDbCriteria();
                $cri->condition = 'email=:email';
                $cri->params = array(":email" => $spram[2]);

                if (Subscribe::model()->exists($cri)) {
                    $response = array();
                    $response['status'] = "ok";
                    $response['msg'] = "<font color='red'>You're Already Subscribed!</font>";
                    echo CJSON::encode($response);
                    Yii::app()->end();
                    //$this->redirect(Yii::app()->createUrl("main/default"));
                } else {
                    $model = new Subscribe();
                    $model->email = $spram[2];
                    $model->date_added = Yii::app()->params['mydate'];
                    $model->save();

                    email_newsletter($spram);
                    $response = array();
                    $response['status'] = "ok";
                    $response['msg'] = "<font color='green'>You have successfully subscribed!</font>";
                    echo CJSON::encode($response);
                    Yii::app()->end();
                    //$this->redirect(Yii::app()->createUrl("main/default"));
                }
            } else {
                $response = array();
                $response['status'] = "ok";
                $response['msg'] = "<font color='red'>All Information is required.</font>";
                echo CJSON::encode($response);
                Yii::app()->end();
                //$this->redirect(Yii::app()->createUrl("main/default"));
            }
        }
        $content = Cms::model()->findByPk(8);
        $this->pageTitle = $content->title;
				$this->pageDescription = $content->meta_desc;
				$this->pageKeywords = $content->meta_keywords;
        // $this->render("default");
    }

    public function actionAll_Exams() {
        $cri = new CDbCriteria();
        $cri->condition = "status>0";
        $pages = new CPagination(Exam::model()->count($cri));
        $pages->pageSize = 56;
        $pages->applyLimit($cri);
        $current_Page = $pages->getCurrentPage() + 1;

        $content = Cms::model()->findByPk(5);
        $this->pageTitle = $content->title;
				$this->pageDescription = $content->meta_desc;
				$this->pageKeywords = $content->meta_keywords;
        $exam = Exam::model()->findAll($cri);
        $this->render("allexams", array("exam" => $exam, "pages" => $pages, "content" => $content));
    }

    public function actionVendors() {
        $cri = new CDbCriteria();
        $cri->condition = "status=1";
        $cri->order = "name";

        $pages = new CPagination(Vendor::model()->count($cri));
        $pages->pageSize = 69;
        $pages->applyLimit($cri);
        $current_Page = $pages->getCurrentPage() + 1;

        $vendor = Vendor::model()->findAll($cri);
        $content = Cms::model()->findByPk(4);
        $this->pageTitle = $content->title;
				$this->pageDescription = $content->meta_desc;
				$this->pageKeywords = $content->meta_keywords;
        Yii::app()->clientScript->registerMetaTag($content->meta_keywords, 'keywords');
        Yii::app()->clientScript->registerMetaTag($content->meta_desc, 'description');
        $this->render("allvendors", array("vendor" => $vendor, "content" => $content, "pages" => $pages));
    }

    public function actionTestimonials() {
        $content = Cms::model()->findByPk(3);
        $this->pageTitle = $content->title;
				$this->pageDescription = $content->meta_desc;
				$this->pageKeywords = $content->meta_keywords;
        $testimonial = Testimonials::model()->findAll();
        $this->render("testimonials", array("content" => $content, "testimonial" => $testimonial));
    }
		
    public function actionThankyou() {
        $content = Cms::model()->findByPk(32);
        $this->pageTitle = $content->title;
				$this->pageDescription = $content->meta_desc;
				$this->pageKeywords = $content->meta_keywords;
        $this->render("thankyou", array("content" => $content));
    }
	public function actionThankyouwebinars() {
        $content = Cms::model()->findByPk(42);
        $this->pageTitle = $content->title;
				$this->pageDescription = $content->meta_desc;
				$this->pageKeywords = $content->meta_keywords;
        $this->render("thankyouwebinar", array("content" => $content));
    }
	
	public function actionSearchheader() {
        $content = Cms::model()->findByPk(44);
        $this->pageTitle = $content->title;
				$this->pageDescription = $content->meta_desc;
				$this->pageKeywords = $content->meta_keywords;
        $this->render("searchheader", array("content" => $content));
    }	


    public function actionError() {
        $this->render("error");
    }

}
