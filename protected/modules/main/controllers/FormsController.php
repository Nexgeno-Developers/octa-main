<?php

require_once Yii::getPathOfAlias('webroot') . '/customfiles/mailfunctions.php';

class FormsController extends CController {
	public $pageDescription;
	public $pageKeywords;

    public function actionIndex() {
        
    }


    public function actionQuickContact() {
        $content = Cms::model()->findByPk(26);
        $this->pageTitle = $content->title;
        Yii::app()->clientScript->registerMetaTag('noindex', 'robots');
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
                    $spram[2] = Yii::app()->request->getPost("email");
                    $spram[3] = Yii::app()->request->getPost("message");

					$spram[4] = Yii::app()->request->getPost("subject");
					$spram[5] = Yii::app()->request->getPost("type");
					$spram[6] = Yii::app()->params['mydate'];


					$model = new Forms();
					$model->type = $spram[5];
                    $model->name = $spram[1];
                    $model->email = $spram[2];
                    $model->message = $spram[3];
                    $model->subject = $spram[4];
                    $model->date_added = Yii::app()->params['mydate'];
                    $model->save();



                    if ($spram[1] != "" AND $spram[2] != "" AND $spram[3] != "") {
                        quick_contact($spram);
												$this->redirect(Yii::app()->createUrl("main/default/thankyou"));
                        $msg = "Thank you for your message. It has been sent.";
                        Yii::app()->user->setState("fmessage", $msg);
						$this->redirect(Yii::app()->createUrl("main/default/message",array("type"=>"1")));
                    } else {
                        $msg = "One or more fields have an error. Please check and try again.";
                        Yii::app()->user->setState("fmessage", $msg);
						$this->redirect(Yii::app()->createUrl("main/default/message",array("type"=>"0")));
                    }
                } else {
                    $msg = "Invalid Captcha";
                    Yii::app()->user->setState("fmessage", $msg);
					$this->redirect(Yii::app()->createUrl("main/default/message",array("type"=>"0")));
                }
            } else {
                $msg = "Captcha required.";
                Yii::app()->user->setState("fmessage", $msg);
				$this->redirect(Yii::app()->createUrl("main/default/message",array("type"=>"0")));
            } 
        } else {
            $this->render("quickcontact", array("content" => $content));
        }
    }

	public function actionEnquireNow() {
        $content = Cms::model()->findByPk(28);
        $this->pageTitle = $content->title;
        Yii::app()->clientScript->registerMetaTag('noindex', 'robots');
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
                    $spram[2] = Yii::app()->request->getPost("emaill");
                    $spram[3] = Yii::app()->request->getPost("message");

					$spram[4] = Yii::app()->request->getPost("subject");
					$spram[5] = Yii::app()->request->getPost("type");
					$spram[6] = Yii::app()->request->getPost("phone");


					$model = new Forms();
					$model->type = $spram[5];
                    $model->name = $spram[1];
                    $model->email = $spram[2];
                    $model->message = $spram[3];
                    $model->subject = $spram[4];
                    $model->phone = $spram[6];
                    $model->date_added = Yii::app()->params['mydate'];
                    $model->save();



                    if ($spram[1] != "" AND $spram[2] != "" AND $spram[3] != "") {
                        enquire_now($spram);
                        $this->redirect(Yii::app()->createUrl("main/default/thankyou"));
						$msg = "Thank you for your message. It has been sent.";
						Yii::app()->user->setState("fmessage", $msg);
                        $this->redirect(Yii::app()->createUrl("main/default/jobguarantee",array("type"=>"1")));


                    } else {
                        $msg = "One or more fields have an error. Please check and try again.";
                        Yii::app()->user->setState("fmessage", $msg);
                        $this->redirect(Yii::app()->createUrl("main/default/jobguarantee",array("type"=>"0")));
                    }
                } else {
                    $msg = "Invalid Captcha";
                    Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/jobguarantee",array("type"=>"0")));
                }
            } else {
                $msg = "Captcha required.";
                Yii::app()->user->setState("fmessage", $msg);
                $this->redirect(Yii::app()->createUrl("main/default/jobguarantee",array("type"=>"0")));
            } 
        } else {
            $this->render("enquirenow", array("content" => $content));
        }
    }





    public function actionNewsLetter() {

		$content = Cms::model()->findByPk(29);

        if (!empty($_POST)) {
            $spram[0] = Yii::app()->params['from'];
            $spram[1] = Yii::app()->request->getPost("action");
            $spram[2] = Yii::app()->request->getPost("newsemail");
			$spram[6] = Yii::app()->params['mydate'];
            if ($spram[2] != "" AND $spram[1] == "newletter") {
                $cri = new CDbCriteria();
                $cri->condition = 'email=:email';
                $cri->params = array(":email" => $spram[2]);

                if (Subscribe::model()->exists($cri)) {
                    $response = array();
                    $response['status'] = "ok";
                    $msg = "<font color='red'>You're Already Subscribed!</font>";
					Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message",array("type"=>"0")));
                } else {
                    $model = new Subscribe();
                    $model->email = $spram[2];
                    $model->date_added = Yii::app()->params['mydate'];
                    $model->save();

                    email_newsletter($spram);
                    $response = array();
                    $response['status'] = "ok";
                    $msg = "<font color='green'>You have successfully subscribed!</font>";
					Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message",array("type"=>"1")));
                }
            } else {
                $response = array();
                $response['status'] = "ok";
                $msg = "<font color='red'>One or more fields have an error. Please check and try again.</font>";
				Yii::app()->user->setState("fmessage", $msg);
                $this->redirect(Yii::app()->createUrl("main/default/message",array("type"=>"0")));
                
            }
        }
        $content = Cms::model()->findByPk(8);
        $this->pageTitle = $content->title;
        // $this->render("default");
    }


	public function actionFeedback() {
        $content = Cms::model()->findByPk(28);
        $this->pageTitle = $content->title;
				$this->pageDescription = $content->meta_desc;
				$this->pageKeywords = $content->meta_keywords;
        Yii::app()->clientScript->registerMetaTag('noindex', 'robots');
        if (!empty($_POST)) {

          $captcha = Yii::app()->request->getPost("g-recaptcha-response");

            if (!empty($captcha)) {
                $secret = Yii::app()->params['secretKey'];
                $ip = Yii::app()->request->getUserHostAddress();
                $rsp = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");
                $arr = json_decode($rsp, TRUE);

                if ($arr["success"]) { 
					
                    $spram[0] = Yii::app()->params['from'];
                    $spram[1] = Yii::app()->request->getPost("fname");
                    $spram[2] = Yii::app()->request->getParam("femaill");
                    $spram[3] = Yii::app()->request->getPost("fmessage");
					$spram[5] = Yii::app()->request->getPost("type");


					$model = new Forms();
					$model->type = $spram[5];
                    $model->name = $spram[1];
                    $model->email = $spram[2];
                    $model->message = $spram[3];
                    $model->date_added = Yii::app()->params['mydate'];
                    $model->save();



                    if ($spram[1] != "" AND $spram[2] != "" AND $spram[3] != "") {
                        email_feedback($spram);
												$this->redirect(Yii::app()->createUrl("main/default/thankyou"));
                        $msg = "Thank you for your message. It has been sent.";
						Yii::app()->user->setState("fmessage", $msg);
                        $this->redirect(Yii::app()->createUrl("main/default/partnerwithus",array("type"=>"1")));

                        //$this->render("feedback", array("msg" => $msg, "content" => $content));
                    } else {
                        $msg = "One or more fields have an error. Please check and try again.";
                        Yii::app()->user->setState("fmessage", $msg);
                        $this->redirect(Yii::app()->createUrl("main/default/partnerwithus"));
                    }
                } else {
                    $msg = "Invalid Captcha";
                    Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/partnerwithus"));
                }
            } else {
                $msg = "Captcha required.";
                Yii::app()->user->setState("fmessage", $msg);
                $this->redirect(Yii::app()->createUrl("main/default/partnerwithus"));
            } 
        } else {
            $this->redirect(Yii::app()->createUrl("main/default/partnerwithus"));
        }
    }

	
	public function actionCallBack() {
        $content = Cms::model()->findByPk(28);
        $this->pageTitle = $content->title;
				$this->pageDescription = $content->meta_desc;
				$this->pageKeywords = $content->meta_keywords;
        Yii::app()->clientScript->registerMetaTag('noindex', 'robots');
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
                    $spram[2] = Yii::app()->request->getPost("phone");
					$spram[5] = Yii::app()->request->getPost("type");


					$model = new Forms();
					$model->type = $spram[5];
                    $model->name = $spram[1];
                    $model->phone = $spram[2];
                    $model->date_added = Yii::app()->params['mydate'];
                    $model->save();



                    if ($spram[1] != "" AND $spram[2] != "" AND $spram[5] != "") {
                        email_callback($spram);
												$this->redirect(Yii::app()->createUrl("main/default/thankyou"));
                        $msg = "Thank you for your message. It has been sent.";
						Yii::app()->user->setState("fmessage", $msg);
						$this->redirect(Yii::app()->createUrl("main/default/message",array("type"=>"1")));

                    } else {
                        $msg = "One or more fields have an error. Please check and try again.";
						Yii::app()->user->setState("fmessage", $msg);
                        $this->redirect(Yii::app()->createUrl("main/default/message",array("type"=>"0")));
                    }
                } else {
					$msg = "Invalid Captcha";
                    Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message",array("type"=>"0")));
                }
            } else {
				$msg = "Captcha required.";
                Yii::app()->user->setState("fmessage", $msg);
                $this->redirect(Yii::app()->createUrl("main/default/message",array("type"=>"0")));
            } 
        } else {
            $this->render("index", array("content" => $content));
        }
    }

	
	public function actionGetTouch() {
        $content = Cms::model()->findByPk(28);
        $this->pageTitle = $content->title;
				$this->pageDescription = $content->meta_desc;
				$this->pageKeywords = $content->meta_keywords;
        Yii::app()->clientScript->registerMetaTag('noindex', 'robots');
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
                    $spram[2] = Yii::app()->request->getPost("myemail");
                    $spram[3] = Yii::app()->request->getPost("phone");
                     $spram[4] = Yii::app()->request->getPost("course");
					$spram[6] = Yii::app()->request->getPost("whatsapp_no");
										$spram[5] = Yii::app()->request->getPost("type");


										$model = new Forms();
										$model->type = $spram[5];
                    $model->name = $spram[1];
                    $model->email = $spram[2];
                    $model->phone = $spram[3];
                    $model->course = $spram[4];
                    $model->whatsapp_no = $spram[6];
                    $model->date_added = Yii::app()->params['mydate'];
                    $model->save();

										if(!empty($_POST['subscribe_approval'])){
											$cri = new CDbCriteria();
											$cri->condition = 'email=:email';
											$cri->params = array(":email" => $spram[2]);

											if (Subscribe::model()->exists($cri)) {  
											} else {
													$model = new Subscribe();
													$model->email = $spram[2];
													$model->date_added = Yii::app()->params['mydate'];
													$model->save(); 
											} 
											
											$mc = addToMailchimp($spram[2], $spram[1], "", $spram[3]);
										}


                    if ($spram[1] != "" AND $spram[2] != "" AND $spram[3] != "") {
                        email_gettouch($spram);
						// $this->redirect(Yii::app()->createUrl("main/default/thankyou"));
						$this->redirect(Yii::app()->createUrl("main/default/thankyou", [
                            'name' => $spram[1],
                            // 'email' => $spram[2],
                            // 'phone' => $spram[3],
                            'course' => $spram[4],
                            // 'whatsapp_no' => $spram[6],
                            // 'type' => $spram[5],
                        ]));

                        $msg = "Thank you for your message. It has been sent.";
                        Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message",array("type"=>"1")));
                    } else {
                        $msg = "One or more fields have an error. Please check and try again.";
                        Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
                    }
                } else {
                    $msg = "Invalid Captcha";
                    Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
                }
            } else {
                $msg = "Captcha required.";
                Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
            } 
        } else {
            $this->render("feedback", array("content" => $content));
        }
    }
    
    
    public function actionChristmas() {
        $content = Cms::model()->findByPk(26);
        $this->pageTitle = $content->title;
				$this->pageDescription = $content->meta_desc;
				$this->pageKeywords = $content->meta_keywords;
        Yii::app()->clientScript->registerMetaTag('noindex', 'robots');
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
                    $spram[2] = Yii::app()->request->getPost("myemail");
                    $spram[3] = Yii::app()->request->getPost("phone");
                     $spram[4] = Yii::app()->request->getPost("course");
					$spram[6] = Yii::app()->request->getPost("whatsapp_no");
										$spram[5] = Yii::app()->request->getPost("type");


										$model = new Forms();
										$model->type = $spram[5];
                    $model->name = $spram[1];
                    $model->email = $spram[2];
                    $model->phone = $spram[3];
                    $model->course = $spram[4];
                    $model->whatsapp_no = $spram[6];
                    $model->date_added = Yii::app()->params['mydate'];
                    $model->save();

										if(!empty($_POST['subscribe_approval'])){
														$cri = new CDbCriteria();
														$cri->condition = 'email=:email';
														$cri->params = array(":email" => $spram[2]);

														if (Subscribe::model()->exists($cri)) {  
														} else {
																$model = new Subscribe();
																$model->email = $spram[2];
																$model->date_added = Yii::app()->params['mydate'];
																$model->save(); 
														} 

										}


                    if ($spram[1] != "" AND $spram[2] != "" AND $spram[3] != "") {
                        email_christmas($spram);
												$this->redirect(Yii::app()->createUrl("main/default/thankyou"));
                        $msg = "Thank you for your message. It has been sent.";
                        Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message",array("type"=>"1")));
                    } else {
                        $msg = "One or more fields have an error. Please check and try again.";
                        Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
                    }
                } else {
                    $msg = "Invalid Captcha";
                    Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
                }
            } else {
                $msg = "Captcha required.";
                Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
            } 
        } else {
            $this->render("feedback", array("content" => $content));
        }
    }
    
    
    public function actionccnatraining() {
        $content = Cms::model()->findByPk(26);
        $this->pageTitle = $content->title;
				$this->pageDescription = $content->meta_desc;
				$this->pageKeywords = $content->meta_keywords;
        Yii::app()->clientScript->registerMetaTag('noindex', 'robots');
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
                    $spram[2] = Yii::app()->request->getPost("myemail");
                    $spram[3] = Yii::app()->request->getPost("phone");
                     $spram[4] = Yii::app()->request->getPost("course");
					$spram[6] = Yii::app()->request->getPost("whatsapp_no");
										$spram[5] = Yii::app()->request->getPost("type");


										$model = new Forms();
										$model->type = $spram[5];
                    $model->name = $spram[1];
                    $model->email = $spram[2];
                    $model->phone = $spram[3];
                    $model->course = $spram[4];
                    $model->whatsapp_no = $spram[6];
                    $model->date_added = Yii::app()->params['mydate'];
                    $model->save();

										if(!empty($_POST['subscribe_approval'])){
														$cri = new CDbCriteria();
														$cri->condition = 'email=:email';
														$cri->params = array(":email" => $spram[2]);

														if (Subscribe::model()->exists($cri)) {  
														} else {
																$model = new Subscribe();
																$model->email = $spram[2];
																$model->date_added = Yii::app()->params['mydate'];
																$model->save(); 
														} 

										}


                    if ($spram[1] != "" AND $spram[2] != "" AND $spram[3] != "") {
                        email_ccnatraining($spram);
												$this->redirect(Yii::app()->createUrl("main/default/thankyou"));
                        $msg = "Thank you for your message. It has been sent.";
                        Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message",array("type"=>"1")));
                    } else {
                        $msg = "One or more fields have an error. Please check and try again.";
                        Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
                    }
                } else {
                    $msg = "Invalid Captcha";
                    Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
                }
            } else {
                $msg = "Captcha required.";
                Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
            } 
        } else {
            $this->render("feedback", array("content" => $content));
        }
    }
    
    public function actionccdatraining() {
        $content = Cms::model()->findByPk(26);
        $this->pageTitle = $content->title;
				$this->pageDescription = $content->meta_desc;
				$this->pageKeywords = $content->meta_keywords;
        Yii::app()->clientScript->registerMetaTag('noindex', 'robots');
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
                    $spram[2] = Yii::app()->request->getPost("myemail");
                    $spram[3] = Yii::app()->request->getPost("phone");
                     $spram[4] = Yii::app()->request->getPost("course");
					$spram[6] = Yii::app()->request->getPost("whatsapp_no");
										$spram[5] = Yii::app()->request->getPost("type");


										$model = new Forms();
										$model->type = $spram[5];
                    $model->name = $spram[1];
                    $model->email = $spram[2];
                    $model->phone = $spram[3];
                    $model->course = $spram[4];
                    $model->whatsapp_no = $spram[6];
                    $model->date_added = Yii::app()->params['mydate'];
                    $model->save();

										if(!empty($_POST['subscribe_approval'])){
														$cri = new CDbCriteria();
														$cri->condition = 'email=:email';
														$cri->params = array(":email" => $spram[2]);

														if (Subscribe::model()->exists($cri)) {  
														} else {
																$model = new Subscribe();
																$model->email = $spram[2];
																$model->date_added = Yii::app()->params['mydate'];
																$model->save(); 
														} 

										}


                    if ($spram[1] != "" AND $spram[2] != "" AND $spram[3] != "") {
                        email_ccdatraining($spram);
												$this->redirect(Yii::app()->createUrl("main/default/thankyou"));
                        $msg = "Thank you for your message. It has been sent.";
                        Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message",array("type"=>"1")));
                    } else {
                        $msg = "One or more fields have an error. Please check and try again.";
                        Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
                    }
                } else {
                    $msg = "Invalid Captcha";
                    Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
                }
            } else {
                $msg = "Captcha required.";
                Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
            } 
        } else {
            $this->render("feedback", array("content" => $content));
        }
    }
    
    
    public function actionsdwantraining() {
        $content = Cms::model()->findByPk(26);
        $this->pageTitle = $content->title;
				$this->pageDescription = $content->meta_desc;
				$this->pageKeywords = $content->meta_keywords;
        Yii::app()->clientScript->registerMetaTag('noindex', 'robots');
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
                    $spram[2] = Yii::app()->request->getPost("myemail");
                    $spram[3] = Yii::app()->request->getPost("phone");
                     $spram[4] = Yii::app()->request->getPost("course");
					$spram[6] = Yii::app()->request->getPost("whatsapp_no");
										$spram[5] = Yii::app()->request->getPost("type");


										$model = new Forms();
										$model->type = $spram[5];
                    $model->name = $spram[1];
                    $model->email = $spram[2];
                    $model->phone = $spram[3];
                    $model->course = $spram[4];
                    $model->whatsapp_no = $spram[6];
                    $model->date_added = Yii::app()->params['mydate'];
                    $model->save();

										if(!empty($_POST['subscribe_approval'])){
														$cri = new CDbCriteria();
														$cri->condition = 'email=:email';
														$cri->params = array(":email" => $spram[2]);

														if (Subscribe::model()->exists($cri)) {  
														} else {
																$model = new Subscribe();
																$model->email = $spram[2];
																$model->date_added = Yii::app()->params['mydate'];
																$model->save(); 
														} 

										}


                    if ($spram[1] != "" AND $spram[2] != "" AND $spram[3] != "") {
                        email_sdwantraining($spram);
												$this->redirect(Yii::app()->createUrl("main/default/thankyou"));
                        $msg = "Thank you for your message. It has been sent.";
                        Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message",array("type"=>"1")));
                    } else {
                        $msg = "One or more fields have an error. Please check and try again.";
                        Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
                    }
                } else {
                    $msg = "Invalid Captcha";
                    Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
                }
            } else {
                $msg = "Captcha required.";
                Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
            } 
        } else {
            $this->render("feedback", array("content" => $content));
        }
    }
    
        public function actionccnptraining() {
        $content = Cms::model()->findByPk(26);
        $this->pageTitle = $content->title;
				$this->pageDescription = $content->meta_desc;
				$this->pageKeywords = $content->meta_keywords;
        Yii::app()->clientScript->registerMetaTag('noindex', 'robots');
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
                    $spram[2] = Yii::app()->request->getPost("myemail");
                    $spram[3] = Yii::app()->request->getPost("phone");
                     $spram[4] = Yii::app()->request->getPost("course");
					$spram[6] = Yii::app()->request->getPost("whatsapp_no");
										$spram[5] = Yii::app()->request->getPost("type");


										$model = new Forms();
										$model->type = $spram[5];
                    $model->name = $spram[1];
                    $model->email = $spram[2];
                    $model->phone = $spram[3];
                    $model->course = $spram[4];
                    $model->whatsapp_no = $spram[6];
                    $model->date_added = Yii::app()->params['mydate'];
                    $model->save();

										if(!empty($_POST['subscribe_approval'])){
														$cri = new CDbCriteria();
														$cri->condition = 'email=:email';
														$cri->params = array(":email" => $spram[2]);

														if (Subscribe::model()->exists($cri)) {  
														} else {
																$model = new Subscribe();
																$model->email = $spram[2];
																$model->date_added = Yii::app()->params['mydate'];
																$model->save(); 
														} 

										}


                    if ($spram[1] != "" AND $spram[2] != "" AND $spram[3] != "") {
                        email_ccnptraining($spram);
												$this->redirect(Yii::app()->createUrl("main/default/thankyou"));
                        $msg = "Thank you for your message. It has been sent.";
                        Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message",array("type"=>"1")));
                    } else {
                        $msg = "One or more fields have an error. Please check and try again.";
                        Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
                    }
                } else {
                    $msg = "Invalid Captcha";
                    Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
                }
            } else {
                $msg = "Captcha required.";
                Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
            } 
        } else {
            $this->render("feedback", array("content" => $content));
        }
    }
       public function actionpaloaltotraining() {
        $content = Cms::model()->findByPk(26);
        $this->pageTitle = $content->title;
				$this->pageDescription = $content->meta_desc;
				$this->pageKeywords = $content->meta_keywords;
        Yii::app()->clientScript->registerMetaTag('noindex', 'robots');
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
                    $spram[2] = Yii::app()->request->getPost("myemail");
                    $spram[3] = Yii::app()->request->getPost("phone");
                     $spram[4] = Yii::app()->request->getPost("course");
					$spram[6] = Yii::app()->request->getPost("whatsapp_no");
										$spram[5] = Yii::app()->request->getPost("type");


										$model = new Forms();
										$model->type = $spram[5];
                    $model->name = $spram[1];
                    $model->email = $spram[2];
                    $model->phone = $spram[3];
                    $model->course = $spram[4];
                    $model->whatsapp_no = $spram[6];
                    $model->date_added = Yii::app()->params['mydate'];
                    $model->save();

										if(!empty($_POST['subscribe_approval'])){
														$cri = new CDbCriteria();
														$cri->condition = 'email=:email';
														$cri->params = array(":email" => $spram[2]);

														if (Subscribe::model()->exists($cri)) {  
														} else {
																$model = new Subscribe();
																$model->email = $spram[2];
																$model->date_added = Yii::app()->params['mydate'];
																$model->save(); 
														} 

										}


                    if ($spram[1] != "" AND $spram[2] != "" AND $spram[3] != "") {
                        email_paloaltotraining($spram);
												$this->redirect(Yii::app()->createUrl("main/default/thankyou"));
                        $msg = "Thank you for your message. It has been sent.";
                        Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message",array("type"=>"1")));
                    } else {
                        $msg = "One or more fields have an error. Please check and try again.";
                        Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
                    }
                } else {
                    $msg = "Invalid Captcha";
                    Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
                }
            } else {
                $msg = "Captcha required.";
                Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
            } 
        } else {
            $this->render("feedback", array("content" => $content));
        }
    }
    
     public function actioncehtraining() {
        $content = Cms::model()->findByPk(26);
        $this->pageTitle = $content->title;
				$this->pageDescription = $content->meta_desc;
				$this->pageKeywords = $content->meta_keywords;
        Yii::app()->clientScript->registerMetaTag('noindex', 'robots');
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
                    $spram[2] = Yii::app()->request->getPost("myemail");
                    $spram[3] = Yii::app()->request->getPost("phone");
                     $spram[4] = Yii::app()->request->getPost("course");
					$spram[6] = Yii::app()->request->getPost("whatsapp_no");
										$spram[5] = Yii::app()->request->getPost("type");


										$model = new Forms();
										$model->type = $spram[5];
                    $model->name = $spram[1];
                    $model->email = $spram[2];
                    $model->phone = $spram[3];
                    $model->course = $spram[4];
                    $model->whatsapp_no = $spram[6];
                    $model->date_added = Yii::app()->params['mydate'];
                    $model->save();

										if(!empty($_POST['subscribe_approval'])){
														$cri = new CDbCriteria();
														$cri->condition = 'email=:email';
														$cri->params = array(":email" => $spram[2]);

														if (Subscribe::model()->exists($cri)) {  
														} else {
																$model = new Subscribe();
																$model->email = $spram[2];
																$model->date_added = Yii::app()->params['mydate'];
																$model->save(); 
														} 

										}


                    if ($spram[1] != "" AND $spram[2] != "" AND $spram[3] != "") {
                        email_cehtraining($spram);
												$this->redirect(Yii::app()->createUrl("main/default/thankyou"));
                        $msg = "Thank you for your message. It has been sent.";
                        Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message",array("type"=>"1")));
                    } else {
                        $msg = "One or more fields have an error. Please check and try again.";
                        Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
                    }
                } else {
                    $msg = "Invalid Captcha";
                    Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
                }
            } else {
                $msg = "Captcha required.";
                Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
            } 
        } else {
            $this->render("feedback", array("content" => $content));
        }
    }
    
     public function actionawsfreetraining() {
        $content = Cms::model()->findByPk(26);
        $this->pageTitle = $content->title;
				$this->pageDescription = $content->meta_desc;
				$this->pageKeywords = $content->meta_keywords;
        Yii::app()->clientScript->registerMetaTag('noindex', 'robots');
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
                    $spram[2] = Yii::app()->request->getPost("myemail");
                    $spram[3] = Yii::app()->request->getPost("phone");
                     $spram[4] = Yii::app()->request->getPost("course");
					$spram[6] = Yii::app()->request->getPost("whatsapp_no");
										$spram[5] = Yii::app()->request->getPost("type");


										$model = new Forms();
										$model->type = $spram[5];
                    $model->name = $spram[1];
                    $model->email = $spram[2];
                    $model->phone = $spram[3];
                    $model->course = $spram[4];
                    $model->whatsapp_no = $spram[6];
                    $model->date_added = Yii::app()->params['mydate'];
                    $model->save();

										if(!empty($_POST['subscribe_approval'])){
														$cri = new CDbCriteria();
														$cri->condition = 'email=:email';
														$cri->params = array(":email" => $spram[2]);

														if (Subscribe::model()->exists($cri)) {  
														} else {
																$model = new Subscribe();
																$model->email = $spram[2];
																$model->date_added = Yii::app()->params['mydate'];
																$model->save(); 
														} 

										}


                    if ($spram[1] != "" AND $spram[2] != "" AND $spram[3] != "") {
                        email_awsfreetraining($spram);
												$this->redirect(Yii::app()->createUrl("main/default/thankyou"));
                        $msg = "Thank you for your message. It has been sent.";
                        Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message",array("type"=>"1")));
                    } else {
                        $msg = "One or more fields have an error. Please check and try again.";
                        Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
                    }
                } else {
                    $msg = "Invalid Captcha";
                    Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
                }
            } else {
                $msg = "Captcha required.";
                Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
            } 
        } else {
            $this->render("feedback", array("content" => $content));
        }
    }
    
     public function actioncciesecurityv61training() {
        $content = Cms::model()->findByPk(26);
        $this->pageTitle = $content->title;
				$this->pageDescription = $content->meta_desc;
				$this->pageKeywords = $content->meta_keywords;
        Yii::app()->clientScript->registerMetaTag('noindex', 'robots');
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
                    $spram[2] = Yii::app()->request->getPost("myemail");
                    $spram[3] = Yii::app()->request->getPost("phone");
                    $spram[4] = Yii::app()->request->getPost("course");
                    $spram[7] = Yii::app()->request->getPost("message");
					$spram[6] = Yii::app()->request->getPost("whatsapp_no");
										$spram[5] = Yii::app()->request->getPost("type");


										$model = new Forms();
										$model->type = $spram[5];
                    $model->name = $spram[1];
                    $model->email = $spram[2];
                    $model->phone = $spram[3];
                    $model->course = $spram[4];
                    $model->message = $spram[7];
                    $model->whatsapp_no = $spram[6];
                    $model->date_added = Yii::app()->params['mydate'];
                    $model->save();

										if(!empty($_POST['subscribe_approval'])){
														$cri = new CDbCriteria();
														$cri->condition = 'email=:email';
														$cri->params = array(":email" => $spram[2]);

														if (Subscribe::model()->exists($cri)) {  
														} else {
																$model = new Subscribe();
																$model->email = $spram[2];
																$model->date_added = Yii::app()->params['mydate'];
																$model->save(); 
														} 

										}


                    if ($spram[1] != "" AND $spram[2] != "" AND $spram[3] != "" AND $spram[7] != "") {
                        email_cciesecurityv61training($spram);
												$this->redirect(Yii::app()->createUrl("main/default/thankyou"));
                        $msg = "Thank you for your message. It has been sent.";
                        Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message",array("type"=>"1")));
                    } else {
                        $msg = "One or more fields have an error. Please check and try again.";
                        Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
                    }
                } else {
                    $msg = "Invalid Captcha";
                    Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
                }
            } else {
                $msg = "Captcha required.";
                Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
            } 
        } else {
            $this->render("feedback", array("content" => $content));
        }
    }
    
     public function actiondiwalisale2023() {
        $content = Cms::model()->findByPk(26);
        $this->pageTitle = $content->title;
				$this->pageDescription = $content->meta_desc;
				$this->pageKeywords = $content->meta_keywords;
        Yii::app()->clientScript->registerMetaTag('noindex', 'robots');
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
                    $spram[2] = Yii::app()->request->getPost("myemail");
                    $spram[3] = Yii::app()->request->getPost("phone");
                     $spram[4] = Yii::app()->request->getPost("course");
                     $spram[7] = Yii::app()->request->getPost("couponcode");
                     $spram[8] = Yii::app()->request->getPost("coupondescription");

					$spram[6] = Yii::app()->request->getPost("whatsapp_no");
										$spram[5] = Yii::app()->request->getPost("type");


										$model = new Forms();
										$model->type = $spram[5];
                    $model->name = $spram[1];
                    $model->email = $spram[2];
                    $model->phone = $spram[3];
                    $model->course = $spram[4];
                    $model->whatsapp_no = $spram[6];
                    $model->message = $spram[7];
                    $model->coupondescription = $spram[8];
                    $model->date_added = Yii::app()->params['mydate'];
                    $model->save();

										if(!empty($_POST['subscribe_approval'])){
														$cri = new CDbCriteria();
														$cri->condition = 'email=:email';
														$cri->params = array(":email" => $spram[2]);

														if (Subscribe::model()->exists($cri)) {  
														} else {
																$model = new Subscribe();
																$model->email = $spram[2];
																$model->date_added = Yii::app()->params['mydate'];
																$model->save(); 
														} 

										}


                    if ($spram[1] != "" AND $spram[2] != "" AND $spram[3] != "" AND $spram[7] != "" AND $spram[8] != "") {
                        email_diwalisale2023($spram);
												$this->redirect(Yii::app()->createUrl("main/default/thankyou"));
                        $msg = "Thank you for your message. It has been sent.";
                        Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message",array("type"=>"1")));
                    } else {
                        $msg = "One or more fields have an error. Please check and try again.";
                        Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
                    }
                } else {
                    $msg = "Invalid Captcha";
                    Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
                }
            } else {
                $msg = "Captcha required.";
                Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
            } 
        } else {
            $this->render("feedback", array("content" => $content));
        }
    }
    
     public function actionchristmaspage() {
        $content = Cms::model()->findByPk(26);
        $this->pageTitle = $content->title;
				$this->pageDescription = $content->meta_desc;
				$this->pageKeywords = $content->meta_keywords;
        Yii::app()->clientScript->registerMetaTag('noindex', 'robots');
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
                    $spram[2] = Yii::app()->request->getPost("myemail");
                    $spram[3] = Yii::app()->request->getPost("phone");
                     $spram[4] = Yii::app()->request->getPost("course");
                     $spram[7] = Yii::app()->request->getPost("couponcode");
                     $spram[8] = Yii::app()->request->getPost("coupondescription");

					$spram[6] = Yii::app()->request->getPost("whatsapp_no");
										$spram[5] = Yii::app()->request->getPost("type");


										$model = new Forms();
										$model->type = $spram[5];
                    $model->name = $spram[1];
                    $model->email = $spram[2];
                    $model->phone = $spram[3];
                    $model->course = $spram[4];
                    $model->whatsapp_no = $spram[6];
                    $model->message = $spram[7];
                    $model->coupondescription = $spram[8];
                    $model->date_added = Yii::app()->params['mydate'];
                    $model->save();

										if(!empty($_POST['subscribe_approval'])){
														$cri = new CDbCriteria();
														$cri->condition = 'email=:email';
														$cri->params = array(":email" => $spram[2]);

														if (Subscribe::model()->exists($cri)) {  
														} else {
																$model = new Subscribe();
																$model->email = $spram[2];
																$model->date_added = Yii::app()->params['mydate'];
																$model->save(); 
														} 

										}


                    if ($spram[1] != "" AND $spram[2] != "" AND $spram[3] != "" AND $spram[7] != "" AND $spram[8] != "") {
                        email_christmaspage($spram);
												$this->redirect(Yii::app()->createUrl("main/default/thankyou"));
                        $msg = "Thank you for your message. It has been sent.";
                        Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message",array("type"=>"1")));
                    } else {
                        $msg = "One or more fields have an error. Please check and try again.";
                        Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
                    }
                } else {
                    $msg = "Invalid Captcha";
                    Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
                }
            } else {
                $msg = "Captcha required.";
                Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
            } 
        } else {
            $this->render("feedback", array("content" => $content));
        }
    }
    
     public function actionfreecorporatetraining() {
        $content = Cms::model()->findByPk(26);
        $this->pageTitle = $content->title;
				$this->pageDescription = $content->meta_desc;
				$this->pageKeywords = $content->meta_keywords;
        Yii::app()->clientScript->registerMetaTag('noindex', 'robots');
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
                    $spram[2] = Yii::app()->request->getPost("email");
                    $spram[3] = Yii::app()->request->getPost("phone");
                     $spram[4] = Yii::app()->request->getPost("course");
					$spram[6] = Yii::app()->request->getPost("whatsapp_no");
					$spram[7] = Yii::app()->request->getPost("coursename");
					$spram[8] = Yii::app()->request->getPost("companyname");
										$spram[5] = Yii::app()->request->getPost("type");


										$model = new Forms();
										$model->type = $spram[5];
                    $model->name = $spram[1];
                    $model->email = $spram[2];
                    $model->phone = $spram[3];
                    $model->course = $spram[4];
                    $model->whatsapp_no = $spram[6];
                    $model->coursename = $spram[7];
                    $model->companyname = $spram[8];
                    $model->date_added = Yii::app()->params['mydate'];
                    $model->save();

										if(!empty($_POST['subscribe_approval'])){
														$cri = new CDbCriteria();
														$cri->condition = 'email=:email';
														$cri->params = array(":email" => $spram[2]);

														if (Subscribe::model()->exists($cri)) {  
														} else {
																$model = new Subscribe();
																$model->email = $spram[2];
																$model->date_added = Yii::app()->params['mydate'];
																$model->save(); 
														} 

										}


                    if ($spram[1] != "" AND $spram[2] != "" AND $spram[3] != "" AND $spram[7] != "" AND $spram[8] != "") {
                        email_freecorporatetraining($spram);
												$this->redirect(Yii::app()->createUrl("main/default/thankyou"));
                        $msg = "Thank you for your message. It has been sent.";
                        Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message",array("type"=>"1")));
                    } else {
                        $msg = "One or more fields have an error. Please check and try again.";
                        Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
                    }
                } else {
                    $msg = "Invalid Captcha";
                    Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
                }
            } else {
                $msg = "Captcha required.";
                Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
            } 
        } else {
            $this->render("feedback", array("content" => $content));
        }
    }
    
    public function actioncciecollaborationrefer() {
        $content = Cms::model()->findByPk(26);
        $this->pageTitle = $content->title;
				$this->pageDescription = $content->meta_desc;
				$this->pageKeywords = $content->meta_keywords;
        Yii::app()->clientScript->registerMetaTag('noindex', 'robots');
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
                    $spram[2] = Yii::app()->request->getPost("myemail");
                    $spram[3] = Yii::app()->request->getPost("phone");
                     $spram[4] = Yii::app()->request->getPost("course");
					$spram[6] = Yii::app()->request->getPost("whatsapp_no");
                    $spram[7] = Yii::app()->request->getPost("referee_name");
                    $spram[8] = Yii::app()->request->getPost("referee_email");
                    $spram[9] = Yii::app()->request->getPost("referee_phone");
										$spram[5] = Yii::app()->request->getPost("type");


										$model = new Forms();
										$model->type = $spram[5];
                    $model->name = $spram[1];
                    $model->email = $spram[2];
                    $model->phone = $spram[3];
                    $model->course = $spram[4];
                    $model->whatsapp_no = $spram[6];
                    $model->referee_name = $spram[7];
                    $model->referee_email = $spram[8];
                    $model->referee_phone = $spram[9];
                    $model->date_added = Yii::app()->params['mydate'];
                    $model->save();

										if(!empty($_POST['subscribe_approval'])){
														$cri = new CDbCriteria();
														$cri->condition = 'email=:email';
														$cri->params = array(":email" => $spram[2]);

														if (Subscribe::model()->exists($cri)) {  
														} else {
																$model = new Subscribe();
																$model->email = $spram[2];
																$model->date_added = Yii::app()->params['mydate'];
																$model->save(); 
														} 

										}


                    if ($spram[1] != "" AND $spram[2] != "" AND $spram[3] != "" AND $spram[7] != "" AND $spram[8] != "" AND $spram[9] != "") {
                        email_cciecollaborationrefer($spram);
												$this->redirect(Yii::app()->createUrl("main/default/thankyou"));
                        $msg = "Thank you for your message. It has been sent.";
                        Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message",array("type"=>"1")));
                    } else {
                        $msg = "One or more fields have an error. Please check and try again.";
                        Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
                    }
                } else {
                    $msg = "Invalid Captcha";
                    Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
                }
            } else {
                $msg = "Captcha required.";
                Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
            } 
        } else {
            $this->render("feedback", array("content" => $content));
        }
    }
    
    public function actionrepublicday() {
        $content = Cms::model()->findByPk(26);
        $this->pageTitle = $content->title;
				$this->pageDescription = $content->meta_desc;
				$this->pageKeywords = $content->meta_keywords;
        Yii::app()->clientScript->registerMetaTag('noindex', 'robots');
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
                    $spram[2] = Yii::app()->request->getPost("myemail");
                    $spram[3] = Yii::app()->request->getPost("phone");
                     $spram[4] = Yii::app()->request->getPost("course");
					$spram[6] = Yii::app()->request->getPost("whatsapp_no");
					$spram[5] = Yii::app()->request->getPost("type");


										$model = new Forms();
										$model->type = $spram[5];
                    $model->name = $spram[1];
                    $model->email = $spram[2];
                    $model->phone = $spram[3];
                    $model->course = $spram[4];
                    $model->whatsapp_no = $spram[6];
                    $model->date_added = Yii::app()->params['mydate'];
                    $model->save();

										if(!empty($_POST['subscribe_approval'])){
														$cri = new CDbCriteria();
														$cri->condition = 'email=:email';
														$cri->params = array(":email" => $spram[2]);

														if (Subscribe::model()->exists($cri)) {  
														} else {
																$model = new Subscribe();
																$model->email = $spram[2];
																$model->date_added = Yii::app()->params['mydate'];
																$model->save(); 
														} 

										}


                    if ($spram[1] != "" AND $spram[2] != "" AND $spram[3] != "") {
                        email_republicday($spram);
												$this->redirect(Yii::app()->createUrl("main/default/thankyou"));
                        $msg = "Thank you for your message. It has been sent.";
                        Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message",array("type"=>"1")));
                    } else {
                        $msg = "One or more fields have an error. Please check and try again.";
                        Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
                    }
                } else {
                    $msg = "Invalid Captcha";
                    Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
                }
            } else {
                $msg = "Captcha required.";
                Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
            } 
        } else {
            $this->render("feedback", array("content" => $content));
        }
    }
    
    
    
        public function actionfreejncietraining() {
        $content = Cms::model()->findByPk(26);
        $this->pageTitle = $content->title;
				$this->pageDescription = $content->meta_desc;
				$this->pageKeywords = $content->meta_keywords;
        Yii::app()->clientScript->registerMetaTag('noindex', 'robots');
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
                    $spram[2] = Yii::app()->request->getPost("myemail");
                    $spram[3] = Yii::app()->request->getPost("phone");
                     $spram[4] = Yii::app()->request->getPost("course");
					$spram[6] = Yii::app()->request->getPost("whatsapp_no");
					$spram[5] = Yii::app()->request->getPost("type");


										$model = new Forms();
										$model->type = $spram[5];
                    $model->name = $spram[1];
                    $model->email = $spram[2];
                    $model->phone = $spram[3];
                    $model->course = $spram[4];
                    $model->whatsapp_no = $spram[6];
                    $model->date_added = Yii::app()->params['mydate'];
                    $model->save();

										if(!empty($_POST['subscribe_approval'])){
														$cri = new CDbCriteria();
														$cri->condition = 'email=:email';
														$cri->params = array(":email" => $spram[2]);

														if (Subscribe::model()->exists($cri)) {  
														} else {
																$model = new Subscribe();
																$model->email = $spram[2];
																$model->date_added = Yii::app()->params['mydate'];
																$model->save(); 
														} 

										}


                    if ($spram[1] != "" AND $spram[2] != "" AND $spram[3] != "") {
                        email_freejncietraining($spram);
												$this->redirect(Yii::app()->createUrl("main/default/thankyou"));
                        $msg = "Thank you for your message. It has been sent.";
                        Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message",array("type"=>"1")));
                    } else {
                        $msg = "One or more fields have an error. Please check and try again.";
                        Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
                    }
                } else {
                    $msg = "Invalid Captcha";
                    Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
                }
            } else {
                $msg = "Captcha required.";
                Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
            } 
        } else {
            $this->render("feedback", array("content" => $content));
        }
    }
    
    
    
    
    public function actionFreeccieent() {
        $content = Cms::model()->findByPk(28);
        $this->pageTitle = $content->title;
				$this->pageDescription = $content->meta_desc;
				$this->pageKeywords = $content->meta_keywords;
        Yii::app()->clientScript->registerMetaTag('noindex', 'robots');
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
                    $spram[2] = Yii::app()->request->getPost("myemail");
                    $spram[3] = Yii::app()->request->getPost("phone");
										$spram[5] = Yii::app()->request->getPost("type");


										$model = new Forms();
										$model->type = $spram[5];
                    $model->name = $spram[1];
                    $model->email = $spram[2];
                    $model->phone = $spram[3];
                    $model->date_added = Yii::app()->params['mydate'];
                    $model->save();

										if(!empty($_POST['subscribe_approval'])){
														$cri = new CDbCriteria();
														$cri->condition = 'email=:email';
														$cri->params = array(":email" => $spram[2]);

														if (Subscribe::model()->exists($cri)) {  
														} else {
																$model = new Subscribe();
																$model->email = $spram[2];
																$model->date_added = Yii::app()->params['mydate'];
																$model->save(); 
														} 

										}


                    if ($spram[1] != "" AND $spram[2] != "" AND $spram[3] != "") {
                        email_gettouch1($spram);
												$this->redirect(Yii::app()->createUrl("main/default/thankyou"));
                        $msg = "Thank you for your message. It has been sent.";
                        Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message",array("type"=>"1")));
                    } else {
                        $msg = "One or more fields have an error. Please check and try again.";
                        Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
                    }
                } else {
                    $msg = "Invalid Captcha";
                    Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
                }
            } else {
                $msg = "Captcha required.";
                Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
            } 
        } else {
            $this->render("feedback", array("content" => $content));
        }
    }
    
		
		public function actionCourseInquiry() {
        $content = Cms::model()->findByPk(28);
        $this->pageTitle = $content->title;
				$this->pageDescription = $content->meta_desc;
				$this->pageKeywords = $content->meta_keywords;
        Yii::app()->clientScript->registerMetaTag('noindex', 'robots');
        if (!empty($_POST)) {

          $captcha = Yii::app()->request->getPost("g-recaptcha-response");

            if (!empty($captcha)) {
                $secret = Yii::app()->params['secretKey'];
                $ip = Yii::app()->request->getUserHostAddress();
                $rsp = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");
                $arr = json_decode($rsp, TRUE);

                if ($arr["success"]) { 
					 
                    $spram[0] = Yii::app()->request->getPost("name");
                    $spram[1] = Yii::app()->request->getPost("myemail");
                    $spram[2] = Yii::app()->request->getPost("phone");
                    $spram[3] = Yii::app()->request->getPost("batche");
                    $spram[4] = Yii::app()->request->getPost("course");
					$spram[5] = Yii::app()->request->getPost("type");
					$spram[6] = Yii::app()->request->getPost("whatsapp_no");


										$model = new Forms();
										$model->type = $spram[5];
                    $model->name = $spram[0];
                    $model->email = $spram[1];
                    $model->phone = $spram[2];
                    $model->batche = $spram[3];
                    $model->course = $spram[4];
                    $model->whatsapp_no = $spram[6];
                    $model->date_added = Yii::app()->params['mydate'];
                    $model->save();
										if(!empty($_POST['subscribe_approval'])){
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


                    if ($spram[0] != "" AND $spram[1] != "" AND $spram[2] != "") {
                        enquire_now_1($spram);
												$this->redirect(Yii::app()->createUrl("main/default/thankyou"));
                        $msg = "Thank you for your message. It has been sent.";
                        Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message",array("type"=>"1")));
                    } else {
                        $msg = "One or more fields have an error. Please check and try again.";
                        Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
                    }
                } else {
                    $msg = "Invalid Captcha";
                    Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
                }
            } else {
                $msg = "Captcha required.";
                Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
            } 
        } else {
            $this->render("feedback", array("content" => $content));
        }
    }
	
	public function actionWebinarsInquiry() {
        $content = Cms::model()->findByPk(28);
        $this->pageTitle = $content->title;
				$this->pageDescription = $content->meta_desc;
				$this->pageKeywords = $content->meta_keywords;
        Yii::app()->clientScript->registerMetaTag('noindex', 'robots');
        if (!empty($_POST)) {

          $captcha = Yii::app()->request->getPost("g-recaptcha-response");

            if (!empty($captcha)) {
                $secret = Yii::app()->params['secretKey'];
                $ip = Yii::app()->request->getUserHostAddress();
                $rsp = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");
                $arr = json_decode($rsp, TRUE);

                if ($arr["success"]) { 
					 
                    $spram[0] = Yii::app()->request->getPost("name");
                    $spram[1] = Yii::app()->request->getPost("myemail");
                    $spram[2] = Yii::app()->request->getPost("phone");
                    $spram[3] = Yii::app()->request->getPost("batche");
                    $spram[4] = Yii::app()->request->getPost("course");
										$spram[5] = Yii::app()->request->getPost("type");


										$model = new Forms();
										$model->type = $spram[5];
                    $model->name = $spram[0];
                    $model->email = $spram[1];
                    $model->phone = $spram[2];
                    $model->batche = $spram[3];
                    $model->course = $spram[4];
                    $model->date_added = Yii::app()->params['mydate'];
                    $model->save();
										if(!empty($_POST['subscribe_approval'])){
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


                    if ($spram[0] != "" AND $spram[1] != "" AND $spram[2] != "") {
						
						/*email of CCIE Webinars  to info@octanetworks.com*/ 
						$to_email = "info@octanetworks.com";
						$subject = "CCIE Webinars";						
						$message = '<p><b>Name:</b> '.$spram[0].'</p>
						<p><b>Email:</b> '.$spram[1].'</p>
						<p><b>Mobile:</b> '.$spram[2].'</p>
						<p><b>Courses:</b> '.$spram[4].'</p>';						
						$headers = "MIME-Version: 1.0" . "\r\n";
						$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
						$headers .='From:'.$spram[1].'';
						mail($to_email,$subject,$message,$headers);											
						$this->redirect(Yii::app()->createUrl("main/default/thankyouwebinars"));
                        $msg = "Thank you for your message. It has been sent.";
                        Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message",array("type"=>"1")));
                    } else {
                        $msg = "One or more fields have an error. Please check and try again.";
                        Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
                    }	
                } else {
                    $msg = "Invalid Captcha";
                    Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
                }
            } else {
                $msg = "Captcha required.";
                Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
            } 
        } else {
            $this->render("feedback", array("content" => $content));
        }
    }
		
		public function actionDownloadBrochure() {
        $content = Cms::model()->findByPk(28);
        $this->pageTitle = $content->title;
				$this->pageDescription = $content->meta_desc;
				$this->pageKeywords = $content->meta_keywords;
        Yii::app()->clientScript->registerMetaTag('noindex', 'robots');
        if (!empty($_POST)) {

          $captcha = Yii::app()->request->getPost("g-recaptcha-response");

            if (!empty($captcha)) {
                $secret = Yii::app()->params['secretKey'];
                $ip = Yii::app()->request->getUserHostAddress();
                $rsp = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");
                $arr = json_decode($rsp, TRUE);

                if ($arr["success"]) { 
					
                   // $spram[0] = Yii::app()->params['from'];
                    $spram[0] = Yii::app()->request->getPost("name");
                    $spram[1] = Yii::app()->request->getPost("myemail");
                    $spram[2] = Yii::app()->request->getPost("phone");
										$spram[3] = Yii::app()->request->getPost("type");
										$spram[4] = Yii::app()->request->getPost("brochure_link");
										$spram[6] = Yii::app()->request->getPost("whatsapp_no");


										$model = new Forms();
										$model->type = $spram[3];
                    $model->name = $spram[0];
                    $model->email = $spram[1];
                    $model->phone = $spram[2];
                     $model->whatsapp_no = $spram[6];
                    $model->date_added = Yii::app()->params['mydate'];
                    $model->save();
										
										if(!empty($_POST['subscribe_approval'])){
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


                    if ($spram[0] != "" AND $spram[1] != "" AND $spram[2] != "") {
                        download_brochure_form($spram);
												if(!empty($spram[4])){
													$this->redirect("https://octanetworks.com/upload_brochure/".$spram[4]."?".time() ); }else{
													$this->redirect(Yii::app()->createUrl("main/default/thankyou"));}
                    } else {
                        $msg = "One or more fields have an error. Please check and try again.";
                        Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
                    }
                } else {
                    $msg = "Invalid Captcha";
                    Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
                }
            } else {
                $msg = "Captcha required.";
                Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/message"));
            } 
        } else {
            $this->render("feedback", array("content" => $content));
        }
    }

	public function actionCareer() {
        $content = Cms::model()->findByPk(26);
        $this->pageTitle = $content->title;
				$this->pageDescription = $content->meta_desc;
				$this->pageKeywords = $content->meta_keywords;
        Yii::app()->clientScript->registerMetaTag('noindex', 'robots');
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
                    $spram[2] = Yii::app()->request->getPost("myemail");
                    $spram[3] = "Experience: ".Yii::app()->request->getPost("experience")."<br>".Yii::app()->request->getPost("message");
					$spram[7] = Yii::app()->request->getPost("myphone");
					$spram[4] = Yii::app()->request->getPost("qualification");
					$spram[5] = Yii::app()->request->getPost("type");
					$spram[6] = Yii::app()->params['mydate'];


					$model = new Forms();
					$model->type = $spram[5];
                    $model->name = $spram[1];
                    $model->email = $spram[2];
                    $model->phone = $spram[7];
                    $model->message = $spram[3];
                    $model->subject = $spram[4];
                    $model->date_added = Yii::app()->params['mydate'];
                    $model->save();

					$lastID = $model->id;
					$post_image = $_FILES["photo"]["name"];
					if(!empty($post_image)){
						$file_ext = substr($post_image, strripos($post_image, '.')); // get file name

					

						$extension = str_replace(".","",$file_ext);
						$extension = strtolower($extension);
						//exit();
						if ($extension == "doc" || $extension == "docx" || $extension == "pdf"){

							$fileSize = $_FILES["photo"]["size"];

							if($fileSize > 2000000){
								$msg = "The file is too big.";
								Yii::app()->user->setState("fmessage", $msg);
                    			$this->redirect(Yii::app()->createUrl("main/default/career",array("type"=>"0")));
							}else{
								$newname = $lastID."".$file_ext;
								//$model->image = $newname;
								$newpath = Yii::app()->basePath.'/../cvs/';
								move_uploaded_file($_FILES["photo"]["tmp_name"], $newpath.$newname);
							}

						}else{
							$msg = "You are not allowed to upload files of this type.";
							Yii::app()->user->setState("fmessage", $msg);
                    		$this->redirect(Yii::app()->createUrl("main/default/career",array("type"=>"0")));
						}

						
					}

					$mcvPath = Yii::app()->request->getBaseUrl(true)."/cvs/".$newname;

					$spram[3] = "CV: <a href='".$mcvPath."'>Download</a><br>".$spram[3];

					$formdb = Forms::model()->findByPk($lastID);
					$formdb->cvlink = $mcvPath;
					$formdb->message = $spram[3];
					$formdb->update();

                    if ($spram[1] != "" AND $spram[2] != "" AND $spram[3] != "") {
                        email_careers($spram);
												$this->redirect(Yii::app()->createUrl("main/default/thankyou"));
                        $msg = "Thank you for your message. It has been sent.";
						Yii::app()->user->setState("fmessage", $msg);
                    	$this->redirect(Yii::app()->createUrl("main/default/career",array("type"=>"1")));
                    } else {
                        $msg = "One or more fields have an error. Please check and try again.";
                        Yii::app()->user->setState("fmessage", $msg);
                    	$this->redirect(Yii::app()->createUrl("main/default/career"));
                    }
                } else {
                    $msg = "Invalid Captcha";
                    Yii::app()->user->setState("fmessage", $msg);
                    $this->redirect(Yii::app()->createUrl("main/default/career"));
                }
            } else {
                $msg = "Captcha required.";
                Yii::app()->user->setState("fmessage", $msg);
                $this->redirect(Yii::app()->createUrl("main/default/career"));
            } 
        } else {
            Yii::app()->user->setState("fmessage", $msg);
            $this->redirect(Yii::app()->createUrl("main/default/career"));
        }
    }

    public function actionEnquiry() {
        if(!empty($_POST)){
            $model              = new Enquiry();
            $model->name        = trim(Yii::app()->request->getPost('name'));
            $model->mobile      = trim(Yii::app()->request->getPost('mobile'));
            $model->email       = trim(Yii::app()->request->getPost('email'));
            $model->message     = trim(Yii::app()->request->getPost('message'));
            $model->url         = $_SERVER['HTTP_REFERER'];
            $model->created_at     = date('Y-m-d H:i:s');
            $insert = $model->save();
            if($insert){
                echo "success";
            }else{
                echo "failed";
            }
        }
        
    }

}
