<?php

require_once Yii::app()->basePath . '/../php_files/functions.php';

class EventController extends CController {

    public $heading = "DashBoard";
    public $userType = '';

    public function actionIndex() {
        $this->layout = 'admin';

        if (Yii::app()->user->hasState("userType")) {

            $userLogin = Yii::app()->user->userType;

            $cri = new CDbCriteria();
            $cri->order = "id DESC";


            $count = Event::model()->count($cri);

            $pages = new CPagination($count);
            $pages->pageSize = 20;
            $pages->applyLimit($cri);
            $userlists = Event::model()->findAll($cri);

            if ($userLogin == 'admin' || $userLogin == 'chief_editor') {

                $this->render("index", array("users" => $userlists, "pages" => $pages));
            } else if ($userLogin == 'sub_editor' || $userLogin == 'co_editor' || $userLogin == 'photographer') {

                $userId = Yii::app()->user->userId;
                $cri = new CDbCriteria();
                $cri->condition = "user_id=:user_id";
                $cri->params = array(":user_id" => $userId);
                $userPrev = UserRights::model()->find($cri);

                if ($userPrev->event == 1) {
                    $this->render("index", array("users" => $userlists, "pages" => $pages));
                }
            } else {
                $this->redirect(Yii::app()->createUrl("octa/default"));
                Yii::app()->end();
            }
        } else {
            $this->redirect(Yii::app()->createUrl("octa/login"));
        }
    }

    //******************************************
    public function actionadd() {
        if (Yii::app()->user->hasState("userType")) {

            $this->layout = 'admin';

            $userLogin = Yii::app()->user->userType;

            if ($userLogin == 'admin' || $userLogin == 'chief_editor') {
                $this->render("add");
            } else if ($userLogin == 'sub_editor' || $userLogin == 'co_editor' || $userLogin == 'photographer') {
                $userId = Yii::app()->user->userId;

                $cri = new CDbCriteria();
                $cri->condition = "user_id=:user_id";
                $cri->params = array(":user_id" => $userId);
                $userPrev = UserRights::model()->find($cri);

                if ($userPrev->event == 1) {
                    $this->render("add");
                }
            } else {
                $this->redirect(Yii::app()->createUrl("octa/default"));
                Yii::app()->end();
            }
        } else {
            $this->redirect(Yii::app()->createUrl("octa/login"));
        }
    }

    //******************************************  
    public function CheckImages($images) {
        $flag = true;
        foreach ($images as $image => $pic) {
            $extension = $pic->extensionName;
            if ($extension == "jpg" || $extension == "png" || $extension == "jpe" || $extension == "jpeg" || $extension == "gif" || $extension == "JPG" || $extension == "JPEG" || $extension == "PNG" || $extension == "GIF" || $extension == "JPE") {
                
            } else {
                $flag = false;
                break;
            }
        }
        return $flag;
    }

    //******************************************
    public function pic_status($ab) {
        $img = explode(".", $ab);
        $p_ext = $img[0] . rand(0, 50) . "." . $img[1];
        return $p_ext;
    }

    //******************************************
    //****************************************
    public function actionDelete() {

        if (!Yii::app()->user->hasState("userType")) {
            $this->redirect(Yii::app()->createUrl("octa/login"));
            Yii::app()->end();
        }

        $id = Yii::app()->request->getParam("id");
        Event::model()->deleteByPk($id);
		$url=Yii::app()->createUrl("octa/event");
	?>
	<script>
			window.location.href = '<?=$url?>'; 
</script>

<?php
       // $this->redirect(Yii::app()->createUrl("octa/event"));
    }

    //****************************************  
    //*******************************************
    public function actionProcessactive() {
        if (!Yii::app()->user->hasState("userType")) {
            $this->redirect(Yii::app()->createUrl("octa/login"));
            Yii::app()->end();
        }

        $id = Yii::app()->request->getParam('id'); // $_POST['id'];
        $stat = Yii::app()->request->getParam('stat'); // $_POST['id'];

        $userInfo = Event::model()->findByPk($id);
        if ($stat == 'mb') {
            if ($userInfo->event_mainBoxArtilce == 1) {
                $userInfo->event_mainBoxArtilce = 0;
            } else {
                $userInfo->event_mainBoxArtilce = 1;
            }
        }
        if ($stat == 'eb') {
            if ($userInfo->event_eventbar == 1) {
                $userInfo->event_eventbar = 0;
            } else {
                $userInfo->event_eventbar = 1;
            }
        }
        if ($stat == 'st') {
            if ($userInfo->status == 1) {

			if ($userInfo->event_eventbar == 1 || $userInfo->event_mainBoxArtilce == 1)
				{
				$response = array();
				  $response['status'] = 'inuse';
               $response['html'] = 'Event is showing on the Homepage. You can not deactivate it';
				echo CJSON::encode($response);
				Yii::app()->end();
					
				}
			else{
					$userInfo->status = 0;
				}



            } else {
                $userInfo->status = 1;
            }
        }



        if ($userInfo->update()) {
            $response = array();
            $response['status'] = 'ok';
            echo CJSON::encode($response);
            Yii::app()->end();
        } else {
            $response = array();
            // $response['status'] = $vendor->getErrors();
            echo CJSON::encode($response);
            Yii::app()->end();
        }
    }

    //*******************************************
    //*******************************************
    //****************************************  
    public function actionAddevent() {


        $uploaddir = Yii::app()->basePath . '/../event_images/';
        $data = Yii::app()->request->getParam('data');
        $formdata = Yii::app()->request->getParam('formdata');


        //**********************************************

        $event_date = '';
        $event_time = '';
        $venue = '';
        $title = '';
        $imagealttxt = '';
        $video_link = '';
        $mainBoxArtilce = '';
        $eventbar = '';
        $status = '';

        foreach ($formdata as $formda) {

            if ($formda['name'] == 'event_date') {
                $event_date = $formda['value'];
            }
            if ($formda['name'] == 'event_time') {
                $event_time = $formda['value'];
            }
            if ($formda['name'] == 'venue') {
                $venue = $formda['value'];
            }

            if ($formda['name'] == 'title') {
                $title = $formda['value'];
            }
            if ($formda['name'] == 'imagealttxt') {
                $imagealttxt = $formda['value'];
            }
            if ($formda['name'] == 'video_link') {
                $video_link = $formda['value'];
            }
            if ($formda['name'] == 'artilceText') {
                $artilceText = $formda['value'];
            }
            if ($formda['name'] == 'mainBoxArtilce') {
                $mainBoxArtilce = $formda['value'];
            }
            if ($formda['name'] == 'eventbar') {
                $eventbar = $formda['value'];
            }
            if ($formda['name'] == 'status') {
                $status = $formda['value'];
            }
        }
        if ($title == '') {
            echo 'nonevalue';
            Yii::app()->end();
        }

        //-----------------------

        $model = new Event();
        $model->userType = 1;
        $model->user_id = Yii::app()->user->userId;
        if($event_date!=''){
        $model->event_date = date("Y-m-d   H:i:s", strtotime($event_date));
			}
else{
                                            $model->event_date = date("Y-m-d H:i:s");
                        }
        $model->event_time = $this->DBIN($event_time);
        $model->event_venue = $this->DBIN($venue);
        $model->event_title = $this->DBIN($title);
        $model->event_imagealttxt = $this->DBIN($imagealttxt);
        $model->event_video_link = $this->DBIN($video_link);
        $model->event_artilceText =addslashes($artilceText);
        $model->date_added = date("Y-m-d H:i:s");


        if (!empty($mainBoxArtilce)) {
                $this->updateupdates('event_mainBoxArtilce','Event');
                $this->updateupdates('mainBoxArtilce','Artilce');
                $this->updateupdates('news_mainbox','News');
                $this->updateupdates('video_mainBox','Video');
                $this->updateupdates('gallery_main_box','Gallery');

            $model->event_mainBoxArtilce = 1;
        } else {
            $model->event_mainBoxArtilce = 0;
        }

        if (!empty($eventbar)) {
          //  $this->updateupdates('event_eventbar','Event');
            $model->event_eventbar = 1;
        } else {
            $model->event_eventbar = 0;
        }

        if (!empty($status)) {
            $model->status = 1;
        } else {
            $model->status = 0;
        }

        //************************************************************
        $fileName = '';
        $value = '';
        if (!empty($data)) {
            foreach ($data as $dat) {
                $fileName = $dat['name'];
                $value = $dat['value'];

                $getMime = explode('.', $fileName);
                $mime = end($getMime);
                $da = explode(',', $value);
                if ($this->chkexten($mime)) {
                    $encodedData = str_replace(' ', '+', $da[1]);

                    $decodedData = base64_decode($encodedData);
                    $randomName = substr_replace(sha1(microtime(true)), '', 12) . '.' . $mime;


                    if (!file_exists($uploaddir . '/sm_img')) {
                        mkdir($uploaddir . '/sm_img', 0777, true);
                    }

                    if (!file_exists($uploaddir . '/lg_img')) {
                        mkdir($uploaddir . '/lg_img', 0777, true);
                    }

                    if (!file_exists($uploaddir . '/bg_img')) {
                        mkdir($uploaddir . '/bg_img', 0777, true);
                    }



                    if (file_put_contents($uploaddir . $randomName, $decodedData)) {
						//*************************************************     
                        $file = $uploaddir . '/' . $randomName;
                        $imageSize = getimagesize($file);
                        // $image_resource_id = imagecreatefromjpeg($file);
                        $image_type = $imageSize[2];
                        generateThumbnails($file, $image_type, $imageSize, $uploaddir . '/sm_img', $randomName, 200, 180);
                        generateThumbnails($file, $image_type, $imageSize, $uploaddir . '/lg_img', $randomName, 300, 225);
                        generateThumbnails($file, $image_type, $imageSize, $uploaddir . '/bg_img', $randomName, 800, 600);
                        //*************************************************   

                        $model->image = $randomName;
                    }
                }
            }
        }
        //************************************************************

        if ($model->save()) {
            //-------------------------
            echo 'okay';
            Yii::app()->end();
            //-------------------------
        } else {
            echo 'notokay';
            Yii::app()->end();
        }
        //**********************************************mainBoxArtilce   	latestupdates  	artilcebox  AR_reviewBox  status
    }

    //*******************************************
    public function DBIN($txt) {
    //    return mysql_escape_string(trim(addslashes(htmlspecialchars($txt))));
return mysql_escape_string(trim($txt));
    }

    //************************************************
    //************************************************
    //********************************************* 
    public function actionEdit() {

        $this->layout = 'admin';
        $id = Yii::app()->request->getParam('id');

        $cri = new CDbCriteria();
        $cri->condition = "id=:id";
        $cri->params = array(":id" => $id);
        $userAccounts = Event::model()->find($cri);

        $flag = '';
        $this->render("edit", array("users" => $userAccounts, 'flag' => $flag));
    }

    //*******************************************
    //****************************************  
    public function actionEditevent() {


        $uploaddir = Yii::app()->basePath . '/../event_images/';
        $data = Yii::app()->request->getParam('data');
        $formdata = Yii::app()->request->getParam('formdata');
        //**********************************************
        $event_date = '';
        $event_time = '';
        $venue = '';
        $title = '';
        $imagealttxt = '';
        $video_link = '';
        $mainBoxArtilce = '';
        $eventbar = '';
        $status = '';
        $prevId = '';

        foreach ($formdata as $formda) {

            if ($formda['name'] == 'prevId') {
                $prevId = $formda['value'];
            }
            if ($formda['name'] == 'event_date') {
                $event_date = $formda['value'];
            }
            if ($formda['name'] == 'event_time') {
                $event_time = $formda['value'];
            }
            if ($formda['name'] == 'venue') {
                $venue = $formda['value'];
            }

            if ($formda['name'] == 'title') {
                $title = $formda['value'];
            }
            if ($formda['name'] == 'imagealttxt') {
                $imagealttxt = $formda['value'];
            }
            if ($formda['name'] == 'video_link') {
                $video_link = $formda['value'];
            }
            if ($formda['name'] == 'artilceText') {
                $artilceText = $formda['value'];
            }
            if ($formda['name'] == 'mainBoxArtilce') {
                $mainBoxArtilce = $formda['value'];
            }
            if ($formda['name'] == 'eventbar') {
                $eventbar = $formda['value'];
            }
            if ($formda['name'] == 'status') {
                $status = $formda['value'];
            }
        }


        if ($title == '') {
            echo 'nonevalue';
            Yii::app()->end();
        }


        //-----------------------

        $cri = New CDbCriteria();
        $cri->condition = "id=:id";
        $cri->params = array(":id" => $prevId);

        if (Event::model()->exists($cri)) {

            $model = Event::model()->find($cri);
        //    $model->event_date = date("Y-m-d", strtotime($event_date));


 if (!empty($event_date) || $event_date != '') {
              //  $model->event_date = $this->DBIN(date("Y-m-d H:i:s", strtotime($event_date)));

							$model->event_date = $this->DBIN( $event_date);




            } else {
                $model->event_date = date("Y-m-d H:i:s");
            }


            $model->event_time = $this->DBIN($event_time);
            $model->event_venue = $this->DBIN($venue);
            $model->event_title = $this->DBIN($title);
            $model->event_imagealttxt = $this->DBIN($imagealttxt);
            $model->event_video_link = $this->DBIN($video_link);
            $model->event_artilceText = addslashes($artilceText);
            $model->date_added = date("Y-m-d");


            if (!empty($mainBoxArtilce)) {
              //  $this->updateupdates('event_mainBoxArtilce');
                $this->updateupdates('event_mainBoxArtilce','Event');
                $this->updateupdates('mainBoxArtilce','Artilce');
                $this->updateupdates('news_mainbox','News');
                $this->updateupdates('video_mainBox','Video');
                $this->updateupdates('gallery_main_box','Gallery');




                $model->event_mainBoxArtilce = 1;
            } else {
                $model->event_mainBoxArtilce = 0;
            }

            if (!empty($eventbar)) {
                //$this->updateupdates('event_eventbar','Event');
                $model->event_eventbar = 1;
            } else {
                $model->event_eventbar = 0;
            }

            if (!empty($status)) {
                $model->status = 1;
            } else {
                $model->status = 0;
            }

            //************************************************************
            $fileName = '';
            $value = '';
            if (!empty($data)) {
                foreach ($data as $dat) {
                    $fileName = $dat['name'];
                    $value = $dat['value'];

                    $getMime = explode('.', $fileName);
                    $mime = end($getMime);
                    $da = explode(',', $value);
                    if ($this->chkexten($mime)) {
                        $encodedData = str_replace(' ', '+', $da[1]);

                        $decodedData = base64_decode($encodedData);
                        $randomName = substr_replace(sha1(microtime(true)), '', 12) . '.' . $mime;



                    if (!file_exists($uploaddir . '/sm_img')) {
                        mkdir($uploaddir . '/sm_img', 0777, true);
                    }

                    if (!file_exists($uploaddir . '/lg_img')) {
                        mkdir($uploaddir . '/lg_img', 0777, true);
                    }

                    if (!file_exists($uploaddir . '/bg_img')) {
                        mkdir($uploaddir . '/bg_img', 0777, true);
                    }


                        if (file_put_contents($uploaddir . '/'.$randomName, $decodedData)) {
                        //*************************************************     
                        $file = $uploaddir . '/' . $randomName;
                        $imageSize = getimagesize($file);
                        // $image_resource_id = imagecreatefromjpeg($file);
                        $image_type = $imageSize[2];
                        generateThumbnails($file, $image_type, $imageSize, $uploaddir . '/sm_img', $randomName, 200, 180);
                        generateThumbnails($file, $image_type, $imageSize, $uploaddir . '/lg_img', $randomName, 300, 225);
                        generateThumbnails($file, $image_type, $imageSize, $uploaddir . '/bg_img', $randomName, 800, 600);
                        //*************************************************     

                            $model->image = $randomName;
                        }
                    }
                }
            }
            //************************************************************

            if ($model->update()) {
                //-------------------------
               echo 'editokay';
                Yii::app()->end();
                //-------------------------
            } else {
                echo 'notokay';
                Yii::app()->end();
            }
        } else {
            echo 'notokay2';
            Yii::app()->end();
        }
        //**********************************************mainBoxArtilce   	latestupdates  	artilcebox  AR_reviewBox  status
    }

    //*******************************************
   public function updateupdates($ab, $tabName) {

        $allrecords = $tabName::model()->findAll();
        
        foreach ($allrecords as $allrecord) {
            $cri = new CDbCriteria();
            $cri->condition = "id=:id";
            $cri->params = array(":id" => $allrecord->id);
            $recordFind = $tabName::model()->find($cri);
            if (!empty($recordFind)) {
                $recordFind->$ab = 0;
                $recordFind->update();
            }
        }
    }

//*************************************
    public function chkexten($mime) {
        $allow_exten = array("jpeg", "jpg", "png", "gif");
        if (in_array($mime, $allow_exten) === false) {
            return false;
        } else {
            return true;
        }
    }

//*******************************************    
}