<?php
require_once Yii::app()->basePath . '/../custom/functions.php';

class GalleryController extends CController {
    
    public $heading = "DashBoard";
    public $userType = '';
public function actionIndex()
{
    if (Yii::app()->user->hasState("admin"))
    {
        $cri= new CDbCriteria();
        $cri->condition="status=:status";
        $cri->params=array(":status"=>1);
        
        $events = Gallery::model()->findAll($cri);
       // $this->render("eventPages",array("Pages"=>$events));
        
       
         $this->render("index",array("Pages"=>$events));
     }
     else
     {
         $this->redirect(Yii::app()->createUrl("octa/login"));
     }
  }    
   //****
   public function actionAddeventPages()
 {
     
       if(empty($_POST))
       {
           $this->render("addeventPages");
       }
       else
       {
          // $image= CUploadedFile::getInstanceByName('image');
           $title=Yii::app()->request->getPost("eventTitle");
           $content=Yii::app()->request->getPost("eventContent");
           $is_active=Yii::app()->request->getPost("is_active");
        
           $model = new Gallery();
            
           if(!empty($is_active))
           {
               $model->status=1;
           }
           else
           {
               $model->status=0;
           }
           
           $model->content =$content;
           $model->title   = $title;    
           $model->dataadded = date("Y-m-d");
           
           //$images = CUploadedFile::getInstancesByName('image');
           //$result= CheckImages($images);
          // if ($result) 
           //{
                    if($model->save())
                    {
                        $flag=1;
                        $error="";
                        $this->render("addeventPages",array("flag"=>$flag,"error"=>$error));
                    }
                    else
                    { 
                        $flag=-1;
                        $error=$model->getErrors();
                        $this->render("addeventPages",array("flag"=>$flag,"error"=>$error));
                    }
           //  }
           
        }    
 }

 
  public function actionEventimages()// showing images 
 {
     if (Yii::app()->user->hasState("admin"))
     {
         $id= Yii::app()->request->getParam("id");
         
         $cri= new CDbCriteria();
         $cri->condition="ev_pg_id=:ev_pg_id";
         $cri->params=array(":ev_pg_id"=>$id);
         
         $image= GalleryImages::model()->findAll($cri);
         $this->render("eventimages",array("image"=>$image,"Page_id"=>$id));
     }
     else
     {
         $this->redirect(Yii::app()->createUrl("octa/login"));
     }
 }
 
 public function actionDeleteeventimage()
{
    if (Yii::app()->user->hasState("admin"))
    {
        $id = Yii::app()->request->getParam("id");
        $pageId = Yii::app()->request->getParam("page");
        
        GalleryImages::model()->deleteByPk($id);
        
        $this->redirect(Yii::app()->createUrl("octa/gallery/eventimages", array("id"=>$pageId)));
    }
    else
    {
        $this->redirect(Yii::app()->createUrl("octa/login"));
    }
}  

 public function actionAddeventimages()
 {
     if (Yii::app()->user->hasState("admin"))
     {
         $page_id= Yii::app()->request->getParam("id");
         
         $cri = new CDbCriteria();
         $cri->condition="id=:id ";
         $cri->params=array(":id"=>$page_id);
         
         $page_info = Gallery::model()->find($cri);
         
         if (empty($_POST))
         {
             $error="";
             $this->render("addeventimages",array("page_info"=>$page_info,"error"=>$error));
         }
         else
         {
            
             
             
             $id= Yii::app()->request->getPost("id");
             
             $flag=true;
             $images = CUploadedFile::getInstancesByName('photo');
             $result=  CheckImages($images);
             
             if($result) 
             {
                 $path="gallery_images";
                 $class=2;
                 UploadEventImages($images,$id,$path,$class);
                 $this->redirect(Yii::app()->createUrl("octa/gallery/eventimages",array("id"=>$id)));
             }
             else
             {
                 $error="Image is invalid";
                 $this->render("addeventimages",array("page_info"=>$page_info,"error"=>$error));
             }
        }
     }
     else
     {
         $this->redirect(Yii::app()->createUrl("octa/login"));
     }
 }
 
 
 public function actionDeleteeventpages()
{
    if (Yii::app()->user->hasState("admin"))
    {
        $id = Yii::app()->request->getParam("id");
        Gallery::model()->deleteByPk($id);
        
        $this->redirect(Yii::app()->createUrl("octa/gallery/index"));
    }
    else
    {
        $this->redirect(Yii::app()->createUrl("octa/login"));
    }
}  


 public function actionEditeventpages()
 {
  

       if(empty($_POST))
       {
           $id = Yii::app()->request->getParam('id');
           
           $cri = new CDbCriteria();
           $cri->condition="id=:id ";
           $cri->params=array(":id"=>$id);
           
           $page = Gallery::model()->find($cri);
           
           
           $this->render("editeventpages", array("page"=>$page));
       }
       else
       {
          
           
           $prevId=Yii::app()->request->getPost("prevId");
           
           $cri = new CDbCriteria();
           $cri->condition="id=:id ";
           $cri->params=array(":id"=>$prevId);
           
           $events = Gallery::model()->find($cri);
           
           if(!empty($events))
           {
               $title=Yii::app()->request->getPost("eventTitle");
               $content=Yii::app()->request->getPost("eventContent");
               $is_active=Yii::app()->request->getPost("is_active");
               
                if(!empty($is_active))
                {
                    $events->status=1;
                }
                else
                {
                    $events->status=0;
                }
                 $events->content =$content;
                 $events->title   = $title;  
                 
                 if($events->save())
                 {
                     $flag=1;
                     $error="";
                     $this->render("editeventpages",array("flag"=>$flag,"error"=>$error,"page"=>$events));
                 }
                 else
                 { 
                     $flag=-1;
                     $error=$model->getErrors();
                     $this->render("editeventpages",array("flag"=>$flag,"error"=>$error,"page"=>$events));
                  }
               }
               
        }    
 }
/*    public $heading = "DashBoard";
    public $userType = '';

    public function actionIndex() {

        if (Yii::app()->user->hasState("admin")) {

            $cri = new CDbCriteria();
            $cri->order = "id DESC";
            $count = Gallery::model()->count($cri);
            $pages = new CPagination($count);
            $pages->pageSize = 20;
            $pages->applyLimit($cri);
            $userlists = Gallery::model()->findAll($cri);



            $this->render("index", array("users" => $userlists, "pages" => $pages));
        } else {
            $this->redirect(Yii::app()->createUrl("octa/login"));
        }
    }

    //******************************************
    public function actionViewImages() {

        if (Yii::app()->user->hasState("admin")) {

            $this->layout = 'admin';
            $id = Yii::app()->request->getParam("id");
            $cri = new CDbCriteria();
            $cri->condition = "gallery_id=:id";
            $cri->params = array(":id" => $id);

            if (GalleryImages::model()->exists($cri)) {
                $image = GalleryImages::model()->findAll($cri);

                $this->render("viewimages", array("image" => $image, "product_id" => $id));
            } else {
                $image = GalleryImages::model()->findAll($cri);
                $this->render("viewimages", array("image" => $image, "product_id" => $id));
            }
        } else {
            $this->redirect(Yii::app()->createUrl("octa/login"));
        }
    }

    //******************************************
    public function actionAdd() {
      

        if (Yii::app()->user->hasState("admin")) {


       
       



           

              $this->layout = 'admin';


                $this->render("add");
           
        } else {
            $this->redirect(Yii::app()->createUrl("octa/login"));
        }
    }

    //****************************************
    public function actionDelete() {
        if (!Yii::app()->user->hasState("admin")) {
            $this->redirect(Yii::app()->createUrl("octa/login"));
            Yii::app()->end();
        }

        $id = Yii::app()->request->getParam("id");
        Gallery::model()->deleteByPk($id);

        $url = Yii::app()->createUrl("octa/gallery");
        ?>
        <script>   			window.location.href = '<?= $url ?>';</script>
        <?php
        // $this->redirect(Yii::app()->createUrl("octa/gallery"));
    }

    //****************************************  
    //*******************************************
    public function actionProcessactive() {
        if (!Yii::app()->user->hasState("admin")) {
            $this->redirect(Yii::app()->createUrl("octa/login"));
            Yii::app()->end();
        }

        $id = Yii::app()->request->getParam('id'); // $_POST['id'];
        $stat = Yii::app()->request->getParam('stat'); // $_POST['id'];

        $userInfo = Gallery::model()->findByPk($id);
        if ($stat == 'mb') {
            if ($userInfo->gallery_main_box == 1) {
                $userInfo->gallery_main_box = 0;
            } else {
                $userInfo->gallery_main_box = 1;
            }
        }
        if ($stat == 'mgi') {
            if ($userInfo->gallery_main_image == 1) {
                $userInfo->gallery_main_image = 0;
            } else {
                $userInfo->gallery_main_image = 1;
            }
        }
        //

        if ($stat == 'lu') {
            if ($userInfo->gallery_latest_updates == 1) {
                $userInfo->gallery_latest_updates = 0;
            } else {
                $userInfo->gallery_latest_updates = 1;
            }
        }


        if ($stat == 'st') {
            if ($userInfo->status == 1) {

                if ($userInfo->gallery_latest_updates == 1 || $userInfo->gallery_main_box == 1 || $userInfo->gallery_main_image == 1) {

                    $response = array();
                    $response['status'] = 'inuse';
                    $response['html'] = 'Gallery is showing on the Homepage. You can deactivate it';
                    echo CJSON::encode($response);
                    Yii::app()->end();
                } else {

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
    public function actionAddgallery() {


        $uploaddir = Yii::app()->basePath . '/gallery_images/';
        $data = Yii::app()->request->getParam('data');
        $formdata = Yii::app()->request->getParam('formdata');


        //**********************************************

        $gallery_title = '';
        $gallery_date = '';
        $gallery_venue = '';
        $gallery_author = '';

        $mainGalleryImage = '';
        $mainbox = '';
        $latestupdates = '';
        $status = '';

        foreach ($formdata as $formda) {

            if ($formda['name'] == 'gallery_title') {
                $gallery_title = $formda['value'];
            }
            if ($formda['name'] == 'gallery_date') {
                $gallery_date = $formda['value'];
            }
            if ($formda['name'] == 'gallery_venue') {
                $gallery_venue = $formda['value'];
            }

            if ($formda['name'] == 'gallery_author') {
                $gallery_author = $formda['value'];
            }

            if ($formda['name'] == 'mainGalleryImage') {
                $mainGalleryImage = $formda['value'];
            }

            if ($formda['name'] == 'mainbox') {
                $mainbox = $formda['value'];
            }

            if ($formda['name'] == 'latestupdates') {
                $latestupdates = $formda['value'];
            }
            if ($formda['name'] == 'status') {
                $status = $formda['value'];
            }
        }
        //$gallery_title

        if ($gallery_title == '') {
            echo 'nonevalue';
            Yii::app()->end();
        }

        //-----------------------

        $model = new Gallery();
        $model->userType = 1;
     //   $model->user_id = Yii::app()->user->userId;

        $model->gallery_name = $this->DBIN($gallery_title);

        //   $model->gallery_date = $this->DBIN(date("Y-m-d", strtotime($gallery_date)));
        if (!empty($gallery_date) || $gallery_date != '') {
            $model->gallery_date = $this->DBIN(date("Y-m-d H:i:s", strtotime($gallery_date)));
        } else {
            $model->gallery_date = date("Y-m-d H:i:s");
        }



        $model->gallery_venue = $this->DBIN($gallery_venue);
        $model->gallery_author = $this->DBIN($gallery_author);
        $model->date_added = date("Y-m-d H:i:s");


        if (!empty($mainGalleryImage)) {
            $this->updateupdates('gallery_main_image', 'Gallery');



            $model->gallery_main_image = 1;
        } else {
            $model->gallery_main_image = 0;
        }

        if (!empty($mainbox)) {
            //   $this->updateupdates('gallery_main_box');
            $this->updateupdates('event_mainBoxArtilce', 'Event');
            $this->updateupdates('mainBoxArtilce', 'Artilce');
            $this->updateupdates('news_mainbox', 'News');
            $this->updateupdates('video_mainBox', 'Video');
            $this->updateupdates('gallery_main_box', 'Gallery');

            $model->gallery_main_box = 1;
        } else {
            $model->gallery_main_box = 0;
        }

        if (!empty($latestupdates)) {
            $this->updateupdates('gallery_latest_updates', 'Gallery');
            $model->gallery_latest_updates = 1;
        } else {
            $model->gallery_latest_updates = 0;
        }

        if (!empty($status)) {
            $model->status = 1;
        } else {
            $model->status = 0;
        }
        if ($model->save()) {
            //************************************************************
            $fileName = '';
            $value = '';
            $articleId = $model->id;
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

                       // $uploaddir2 = $uploaddir . '/' . $articleId;
                        
                        $uploaddir2 = $uploaddir ;
                     //   $uploaddir2 =  '/' . $articleId;
                        

                        if (!file_exists($uploaddir2)) {
                            mkdir($uploaddir2, 0777, true);
                        }

//                        if (!file_exists($uploaddir2 . '/sm_img')) {
//                            mkdir($uploaddir2 . '/sm_img', 0777, true);
//                        }
//
//                        if (!file_exists($uploaddir2 . '/lg_img')) {
//                            mkdir($uploaddir2 . '/lg_img', 0777, true);
//                        }
//
//                        if (!file_exists($uploaddir2 . '/bg_img')) {
//                            mkdir($uploaddir2 . '/bg_img', 0777, true);
//                        }

                        if (file_put_contents($uploaddir2 . '/' . $randomName, $decodedData)) {
                            //---------------------------

                            $file = $uploaddir2 . '/' . $randomName;
                            $imageSize = getimagesize($file);
                            // $image_resource_id = imagecreatefromjpeg($file);
                            $image_type = $imageSize[2];
                            $desti = $uploaddir2 .  $randomName;

                            generateThumbnails($file, $image_type, $imageSize, $uploaddir2 . '/sm_img', $randomName, 200, 180);
                            generateThumbnails($file, $image_type, $imageSize, $uploaddir2 . '/lg_img', $randomName, 300, 225);
                            generateThumbnails($file, $image_type, $imageSize, $uploaddir2 . '/bg_img', $randomName, 800, 600);

                            resize_image($file, 210, 210, $desti);
                            //----------------------------

                            $artilceImages = new GalleryImages();
                            $artilceImages->gallery_id = $articleId;
                            $artilceImages->image = $this->DBIN($randomName);
                            $artilceImages->save();
                        }
                    }
                }
            }
            //************************************************************
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
    public function actionAddImages() {
        if (Yii::app()->user->hasState("userType")) {
            $this->layout = 'admin';

            $userLogin = Yii::app()->user->userType;
            $otherAccounts = '';

            if ($userLogin == 'sub_editor' || $userLogin == 'co_editor' || $userLogin == 'photographer') {

                $cri = new CDbCriteria();
                $cri->condition = "user_id=:user_id";
                $cri->params = array(":user_id" => $userId);
                $userPrev = UserRights::model()->find($cri);

                if ($userPrev->gallery == 1) {
                    $otherAccounts = 'yes';
                }
            }



            if ($userLogin == 'admin' || $userLogin == 'chief_editor' || $otherAccounts == 'yes') {



                if (empty($_POST)) {
                    $product_id = Yii::app()->request->getParam("id");
                    $product = Gallery::model()->findByPk($product_id);

                    $error = "";
                    $this->render("addimages", array("product" => $product, "error" => $error));
                }
            } else {
                $this->redirect(Yii::app()->createUrl("octa/default"));
                Yii::app()->end();
            }
        }
    }

    //***********************************************
    public function actionAddgalleryimages() {


        $uploaddir = Yii::app()->basePath . '/gallery_images/';
        $data = Yii::app()->request->getParam('data');
        $formdata = Yii::app()->request->getParam('formdata');


        //**********************************************
        $id = '';
        $gallery_date = '';
        $gallery_venue = '';
        $gallery_author = '';
        $mainGalleryImage = '';
        $mainbox = '';
        $latestupdates = '';
        $status = '';
        foreach ($formdata as $formda) {

            if ($formda['name'] == 'id') {
                $id = $formda['value'];
            }
        }
        //-----------------------
        $fileName = '';
        $value = '';
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

                $uploaddir2 = $uploaddir . '/' . $id;

                if (!file_exists($uploaddir2)) {
                    mkdir($uploaddir2, 0777, true);
                }

                if (!file_exists($uploaddir2 . '/sm_img')) {
                    mkdir($uploaddir2 . '/sm_img', 0777, true);
                }

                if (!file_exists($uploaddir2 . '/lg_img')) {
                    mkdir($uploaddir2 . '/lg_img', 0777, true);
                }

                if (!file_exists($uploaddir2 . '/bg_img')) {
                    mkdir($uploaddir2 . '/bg_img', 0777, true);
                }


                if (!file_exists($uploaddir2 . '/thumb_img')) {
                    mkdir($uploaddir2 . '/thumb_img', 0777, true);
                }


                if (file_put_contents($uploaddir2 . '/' . $randomName, $decodedData)) {
                    //---------------------------
                    

                    $desti = $uploaddir2 . '/' . $randomName;
                    $file = $uploaddir2 . '/' . $randomName;
                    $imageSize = getimagesize($file);
                    // $image_resource_id = imagecreatefromjpeg($file);
                    $image_type = $imageSize[2];

//                    generateThumbnails($file, $image_type, $imageSize, $uploaddir2 . '/sm_img', $randomName, 200, 180);
//                    generateThumbnails($file, $image_type, $imageSize, $uploaddir2 . '/lg_img', $randomName, 300, 225);
                    generateThumbnails($file, $image_type, $imageSize, $uploaddir2 . '/', $randomName, 800, 600);

                    resize_image($file, 210, 210, $desti);
                    //----------------------------

                    $artilceImages = new GalleryImages();
                    $artilceImages->gallery_id = $id;
                    $artilceImages->image = $this->DBIN($randomName);
                    $artilceImages->save();
                }
            }
        }
        //************************************************************
        echo 'okay';
        Yii::app()->end();
        //-------------------------
        //**********************************************mainBoxArtilce   	latestupdates  	artilcebox  AR_reviewBox  status
    }

    //****************************************************** 
    //*******************************************************
    public function actionDeleteImage() {
        if (Yii::app()->user->hasState("userType")) {

            $id = Yii::app()->request->getParam("id");
            $image_id = GalleryImages::model()->findByPk($id);
            $pic = $image_id->image;
            $product_id = $image_id->gallery_id;

            unlink(Yii::app()->basePath . '/../gallery_images/' . $product_id . '/' . $pic);
            GalleryImages::model()->deleteByPk($id);

            $url = Yii::app()->createUrl("octa/gallery/viewimages", array("id" => $product_id))
            ?>
            <script>   			/*window.location.href = '<?= $url ?>';</script>
            <?php
            //   $this->redirect(Yii::app()->createUrl("octa/gallery/viewimages", array("id" => $product_id)));
            /*
        } else {
            $this->redirect(Yii::app()->createUrl("octa/login"));
        }
    }

    //*****************************************************
    public function actionEdit() {

        $this->layout = 'admin';

        if (empty($_POST)) {

            $id = Yii::app()->request->getParam('id');

            $cri = new CDbCriteria();
            $cri->condition = "id=:id";
            $cri->params = array(":id" => $id);
            $userAccounts = Gallery::model()->find($cri);

            $flag = '';
            $this->render("edit", array("users" => $userAccounts, 'flag' => $flag));
        } else {
            //***************
            $prevId = Yii::app()->request->getParam('prevId');

            $cri = new CDbCriteria();
            $cri->condition = "id=:id";
            $cri->params = array(":id" => $prevId);
            $model = Gallery::model()->find($cri);


            $gallery_title = Yii::app()->request->getParam('gallery_title');
            $gallery_date = Yii::app()->request->getParam('gallery_date');
            $gallery_venue = Yii::app()->request->getParam('gallery_venue');
            $gallery_author = Yii::app()->request->getParam('gallery_author');

            $mainGalleryImage = Yii::app()->request->getParam('mainGalleryImage');
            $mainbox = Yii::app()->request->getParam('mainbox');
            $latestupdates = Yii::app()->request->getParam('latestupdates');
            $status = Yii::app()->request->getParam('status');

            $model->gallery_name = $this->DBIN($gallery_title);


            // $model->gallery_date = $this->DBIN(date("Y-m-d", strtotime($gallery_date)));
            if (!empty($gallery_date) || $gallery_date != '') {
                $model->gallery_date = $this->DBIN(date("Y-m-d H:i:s", strtotime($gallery_date)));
            } else {
                $model->gallery_date = date("Y-m-d H:i:s");
            }



            $model->gallery_venue = $this->DBIN($gallery_venue);
            $model->gallery_author = $this->DBIN($gallery_author);
            $model->date_added = date("Y-m-d H:i:s");


            if (!empty($mainGalleryImage)) {
                $this->updateupdates('gallery_main_image', 'Gallery');


                $model->gallery_main_image = 1;
            } else {
                $model->gallery_main_image = 0;
            }

            if (!empty($mainbox)) {

                $this->updateupdates('event_mainBoxArtilce', 'Event');
                $this->updateupdates('mainBoxArtilce', 'Artilce');
                $this->updateupdates('news_mainbox', 'News');
                $this->updateupdates('video_mainBox', 'Video');
                $this->updateupdates('gallery_main_box', 'Gallery');





                $model->gallery_main_box = 1;
            } else {
                $model->gallery_main_box = 0;
            }

            if (!empty($latestupdates)) {
                $this->updateupdates('gallery_latest_updates', 'Gallery');


                $model->gallery_latest_updates = 1;
            } else {
                $model->gallery_latest_updates = 0;
            }

            if (!empty($status)) {
                $model->status = 1;
            } else {
                $model->status = 0;
            }
            //*****************

            if ($model->update()) {

                $flag = 1;
                //$msg = 'Gallery Updated Successfully';
                //  $this->render("edit", array("users" => $model, 'success' => $flag, 'msg' => $msg, "id" => $prevId));
                $url = Yii::app()->createUrl("octa/gallery");

                //   $this->redirect(Yii::app()->createUrl("octa/gallery"));
                ?>

                <script>
                    window.location = "<?= $url ?>";
                </script>

                <?php
            } else {
                $flag = -1;
                $msg = 'Gallery is not Updated Successfully';
                $this->render("edit", array("users" => $model, 'success' => $flag, 'msg' => $msg, "id" => $prevId));
            }
        }
    }

    //************************************** 
    //*****************************************************
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


    public function chkexten($mime) {
        $allow_exten = array("jpeg", "jpg", "png", "gif");
        if (in_array($mime, $allow_exten) === false) {
            return false;
        } else {
            return true;
        }
    }
*/
    //*********************************************
    //*******************************************************
}
