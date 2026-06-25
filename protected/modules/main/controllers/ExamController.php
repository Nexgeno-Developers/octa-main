<?php
require_once Yii::getPathOfAlias('webroot').'/customfiles/myfunctions.php';
require_once Yii::getPathOfAlias('webroot').'/customfiles/mailfunctions.php';
use yii\widgets\Breadcrumbs;
class ExamController extends CController
{
	public $pageDescription;
	public $pageKeywords;
	
	public function actionIndex()
	{
		$url = Yii::app()->request->getParam("url");

		$cri= new CDbCriteria();
		$cri->condition="url=:url";
		$cri->params=array(":url"=>$url);

		if(Exam::model()->exists($cri)){
			$exam= Exam::model()->find($cri);

			if($exam->vendor->status != 0){
				if($exam->status != 0){
					$exam= Exam::model()->find($cri);
					if(empty($exam->vendor->id)){$this->redirect(Yii::app()->homeUrl);}
					if(empty($exam->cert->id)){$this->redirect(Yii::app()->homeUrl);}
					////////////////Engine Entry////////////////////
					$examid = $exam->id;
					$examcode = $exam->code;
					//////////////////////////////////////////////////
					
					$comm_save = 'no';
					if(!empty($_POST['comment'])){
					    
					    //var_dump(Yii::app()->request->getPost('email'));exit;
						
						$model = new Comments();

						$model->course_slug = $url;
			
						$model->name = trim(Yii::app()->request->getPost('name'));
						
						$model->email = (Yii::app()->request->getPost('email') == 'undefined') ? null : trim(Yii::app()->request->getPost('email'));
						
						$model->fb_profile_image = trim(Yii::app()->request->getPost('user_profile_image'));
						
						$model->comment = strip_tags(trim(Yii::app()->request->getPost('comment')));
						
						$model->created_at = date('Y-m-d H:i:s');
						
                        $url_fb_image = $model->fb_profile_image;
                        $save_image = 'img/facebook-profile-image/fb_profile_'.time().'.jpg';
                        file_put_contents($save_image, file_get_contents($url_fb_image));
                        
                        //var_dump($model->email);exit;
						
						$model->image = $save_image;
						
						$comm_save = 'yes';
						
						if($model->save() && $model->email){
			              $comm_save = 'yes';
			              $spram[0] = $model->name;
			              $spram[1] = $model->email;
			              $spram[2] = $model->comment;
			              $spram[3] = $model->course_slug;
			              email_comment($spram);
						}

						if(!empty($_POST['subscribe_approval']) && $model->email){
			                    $cri = new CDbCriteria();
				                $cri->condition = 'email=:email';
				                $cri->params = array(":email" => $spram[1]);

				                if (Subscribe::model()->exists($cri)) {  
				                } else {
				                    $model = new Subscribe();
				                    $model->email = $spram[1];
				                    $model->date_added = Yii::app()->params['mydate'];
				                    $model->save(); 
				                } 

			            }
 
						}
						
					$title= $exam->meta_title;
					
					$title= str_replace("[VENDOR]", $exam->vendor->name,$title);
					$title= str_replace("[CERT]", $exam->cert->name,$title);
					$title= str_replace("[EXAMCODE]", $exam->code,$title);
					$this->pageTitle=$title;

					//Seo description
					
					$descx= $exam->meta_desc;
					$descx = str_replace("[VENDOR]", $exam->vendor->name,$descx);
					$descx = str_replace("[CERT]", $exam->cert->name,$descx);
					$descx = str_replace("[EXAMCODE]", $exam->code,$descx);
					$this->pageDescription = $descx;
						
					//Seo Keywords
					
					$keywords = $exam->meta_keywords;
					
					$keywords = str_replace("[VENDOR]", $exam->vendor->name,$keywords);
					$keywords = str_replace("[CERT]", $exam->cert->name,$keywords);
					$keywords = str_replace("[EXAMCODE]", $exam->code,$keywords);
					$this->pageKeywords = $keywords;							
					//Page Title
					
					$contenttitle = $exam->ctitle;
					
					$contenttitle = str_replace("[VENDOR]", $exam->vendor->name,$contenttitle);
					$contenttitle = str_replace("[CERT]", $exam->cert->name,$contenttitle);
					$contenttitle = str_replace("[EXAMCODE]", $exam->code,$contenttitle);
						
					//Page Content
					
					$content = $exam->description;
					
	                $content= str_replace("[VENDOR]", $exam->vendor->name,$content);
	                $content= str_replace("[CERT]", $exam->cert->name,$content);
	                $content= str_replace("[EXAMCODE]", $exam->code, $content);

					$cri1 = new CDbCriteria();
               		$cri1->condition="is_home=0";
               		//$cri1->limit="10"; //commented by mak
					$cri1->order="id desc"; 
					$cri1->condition="exam_id=$exam->id"; //added by mak
					$testimonials = Testimonials::model()->findAll($cri1);
					
					$cri2 = new CDbCriteria();
               		$cri2->condition="cert_id=$exam->id and type = 1";
					$cri2->order="date_added desc";
					$demos = Demos::model()->findAll($cri2);
					
					$cri3 = new CDbCriteria();
               		$cri3->condition="examId=$exam->id";
					$cri3->order="created_date desc";
					$atrainer = Assigntrainer::model()->findAll($cri3);

					$date=date("Y-m-d");

					$id = $exam->lab;
					$cri4 = new CDbCriteria();
					$cri4->condition = "ev_pg_id=:ev_pg_id";
					$cri4->params = array(":ev_pg_id" => $id);
					$gallery = GalleryImages::model()->findAll($cri4);
					
					$cri5 = new CDbCriteria();
					$cri5->condition="course_slug = '$url' AND status=1 ";
					$cri5->order="id desc";
					$comments = Comments::model()->findAll($cri5);
					$countries = Countries::model()->findAll();

					$cri6 = new CDbCriteria();
					$cri6->condition="exam_id=$exam->id";
					$cri6->order="id desc";
					$cri1->limit="6";
					$recentstories = StoriesRecent::model()->findAll($cri6);                  

					$this->render("index",array("recent_stories" => $recentstories,"exam"=>$exam,"content"=>$content,"contenttitle"=>$contenttitle, "atrainer"=>$atrainer, "testimonials"=>$testimonials, "demos"=>$demos, "gallery"=>$gallery, "countries"=>$countries, "comm_status"=>$comm_save, "comments"=>$comments));
				}else{
					$this->redirect(Yii::app()->createUrl("main/default/error"));
				}
			}else{
				header("HTTP/1.1 301 Moved Permanently"); 
				header("Location: ".Yii::app()->request->getBaseUrl(true).""); 
				exit();
			}
		}else{
			$this->redirect(Yii::app()->createUrl("main/default/error"));
		}
	}


	public function actionSearch()
	{
		$query= Yii::app()->request->getPost("query");

		$query = trim($query);
		$sData = date("Y-m-d H:i:s");
		$sIp = Yii::app()->request->getUserHostAddress();

		if(!empty(Yii::app()->user->getState('user'))){
			$srcUsr = Yii::app()->user->getState('user');
		}else{
			$srcUsr = "Not Registered";
		}

		$myyquery = strtolower($query);

		
		//////////////////////Exam Search////////////////////////
		$ecri= new CDbCriteria();
        $ecri->condition="status=1 AND (code = :query OR name = :query)";
        $ecri->params=array(":query"=>$query); 
        $exam = Exam::model()->findAll($ecri);
		if(count($exam) == 1){
			foreach($exam as $examurl){
				$this->redirect(Yii::app()->createUrl("main/cert/exam", array("url"=>$examurl->url))); 
			}
		}else{
			$ecri= new CDbCriteria();
           	$ecri->condition="status=1 AND (code LIKE :query OR name LIKE :query)";
           	$ecri->params=array(":query"=>"%$query%"); 
           	$exam = Exam::model()->findAll($ecri);
		}

		//////////////////////Vendor Search////////////////////////
		$vcri = new CDbCriteria();
		$vcri->condition="status = 1 AND name = :query";
		$vcri->params=array(":query"=>$query); 
		$vendor = Vendor::model()->findAll($vcri);
		if(count($vendor) == 1){
			foreach($vendor as $vendorurl){
				$this->redirect(Yii::app()->createUrl("main/vendor", array("url"=>$vendorurl->url))); 
			}
		}else{
			$vcri= new CDbCriteria();
            $vcri->condition="status=1 AND name LIKE :query";
            $vcri->params=array(":query"=>"%$query%"); 
            $vendor = Vendor::model()->findAll($vcri);
		}

		//////////////////////Certification Search////////////////////////
		$ccri = new CDbCriteria();
        $ccri->condition="status = 1 AND name = :query";
		$ccri->params=array(":query"=>$query); 
		$cert = Cert::model()->findAll($ccri);
		if(count($cert) == 1){
			foreach($cert as $certurl){
				$this->redirect(Yii::app()->createUrl("main/cert", array("url"=>$certurl->url))); 
			}
		}else{
			$ccri= new CDbCriteria();
            $ccri->condition="status=1 AND name LIKE :query";
            $ccri->params=array(":query"=>"%$query%"); 
			$cert = Cert::model()->findAll($ccri);
		}
		$this->render("search",array("exam"=>$exam,"vendor"=>$vendor,"cert"=>$cert,"query"=>$query));
	}

	public function actionGetPhone()
	{
		if(!empty($_POST)){
			$id=$_POST['id'];
			$cri = new CDbCriteria();
			$cri->condition="sortname = :sortname";
			$cri->params=array(":sortname"=>$id); 
			$Countri =  Countries::model()->find($cri);
			$codecode = $Countri->phonecode;
                
			if ($Countri){
				$response=array();
				$response['status']="ok";
				$response['cert']=$codecode;
				echo CJSON::encode($response);
				Yii::app()->end();
			}
		}
	}


}
