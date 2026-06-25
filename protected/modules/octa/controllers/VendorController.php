<?php 

require '/home2/octanetw/public_html/protected/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xls;

class VendorController extends CController
{
	public $heading="Vendor Management";
            
	public function actionIndex()
	{
		if (!Yii::app()->user->hasState("admin")){
			$this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
            else
            {
           
                $cri=new CDbCriteria();
                $cri->limit="20";
           
           
                $count=  Vendor::model()->count();
           

					$records = Yii::app()->request->getParam("records");
		
					if(isset($records)){
						$rpage = $records;
					}else{
						$rpage = 25;
					}

                $pages=new CPagination($count);
                $pages->pageSize=$rpage;
           
           
                $pages->applyLimit($cri);
                $vendors=  Vendor::model()->findAll($cri);
            
                $this->render("index",array("vendor"=>$vendors,"pages"=>$pages));
            }
	}
        
        public function actionSearch()
        {
             if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
            if (!empty($_POST))
            {
                $query=trim(Yii::app()->request->getPost('vendor'));
                //$vendor_name=  strtolower($vendor_name);
                $cri=new CDbCriteria();
                $cri->condition="name Like :query";
                $cri->params=array(":query"=>"%$query%");
                
                if (Vendor::model()->exists($cri))
                {
                    $vendors=  Vendor::model()->findAll($cri);
                    $this->render("search",array("vendor"=>$vendors));
                }
                else
                {
                    $sorry="Your search did not return any result. Please check your query";
                    $this->render("search",array("sorry"=>$sorry));
                }
            }
            else 
            {
                $this->redirect("index");
            }
        }
        
        
        public function actionGetData()
        {
             if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
             if (!empty($_POST))
             {
                 
                
                 
                 $page=$_POST['page'];
                 $offset=($page-1)*20;
                 $cri=new CDbCriteria();
                 $cri->limit="20";
                 $cri->offset=$offset;
           
                $vendors=  Vendor::model()->findAll($cri);
                
                
                $response=array();
                $response['status']='ok';
                $response['vendor']=$vendors;
                $cert_count=array();
                $exam_count=array();
                foreach ($vendors as $vendor)
                {
                    $cri2= new CDbCriteria();
                    $cri2->condition="vendor_id=$vendor->id";
                    $cert= Certification::model()->findAll($cri2); 
                    $cert_count[]=count($cert);
                    $exam= Exam::model()->findAll($cri2);
                    $exam_count[]=count($exam);
                }
                $response['cert_count']=$cert_count;
                $response['exam_count']=$exam_count;
                
                
                
                echo CJSON::encode($response);
                Yii::app()->end();
                 
             }
        }
        
        public function actionAddvendor()
        {
             if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
            if (!empty($_POST))
            {
                // check for duplicate
                $name=Yii::app()->request->getPost('vendor_name');

				$url_name=str_replace(" ", "-", trim($name));
               $url_name=str_replace(":", "", $url_name);
               $url_name=str_replace("+", "", $url_name);
			   $url_name = strtolower($url_name);

                $cri= new CDbCriteria();
                $cri->condition="url=:url";
                $cri->params=array(":url"=>$url_name);
                $check=Vendor::model()->exists($cri);
                if ($check)
                {
                $response=array();
                $response['status']='already';
                echo CJSON::encode($response);
                Yii::app()->end();
                }
                
                $model= new Vendor;
                 $name=trim($name);
                
               $model->name=$name;
               

               $model->url=trim($url_name);
               $model->ctitle=trim(Yii::app()->request->getPost('ctitle'));
               $model->description=trim(Yii::app()->request->getPost('description'));
                
                
                if(!empty($_POST['page_title']))
                {
                    $model->meta_title=trim(Yii::app()->request->getPost('page_title'));
                }
                if(!empty($_POST['keywords']))
                {
                    $model->meta_keywords=trim(Yii::app()->request->getPost('keywords'));
                }
                if(!empty($_POST['seo_desc']))
                {
                    $model->meta_desc=trim(Yii::app()->request->getPost('seo_desc'));
                }
               
                if(!empty($_POST['is_hot']))
                {
                    $model->is_hot=1;
                }
                if(!empty($_POST['status']))
                {
                    $model->status=1;
                }
                
                $model->date_added=date('Y-m-d H:i:s');
                
                $post_image = $_FILES["photo"]["name"];
				if(!empty($post_image)){
					$file_ext = substr($post_image, strripos($post_image, '.')); // get file name
					$newname = $url_name."".$file_ext;
					
					$newpath = Yii::app()->basePath.'/../img/vendor/';
					move_uploaded_file($_FILES["photo"]["tmp_name"], $newpath.$newname);
					$model->image = $newname;
				}
                
                if($model->save())
                {
                	$this->redirect(Yii::app()->createUrl("octa/vendor/addvendor",array("msg"=>"1")));
                	Yii::app()->end();
                }else{
                    $this->redirect(Yii::app()->createUrl("octa/vendor/addvendor",array("msg"=>"0")));
                	Yii::app()->end();
                }
            }
            else
            {
                $this->render("addvendor");
            }
        }
        
        
        public function actionEdit()
        {
             if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
            if (!empty($_POST))
            {
                $id=Yii::app()->request->getPost('id');
                $model=  Vendor::model()->findByPk($id);
                
                
                $name = Yii::app()->request->getPost('vendor_name');
                $name=trim($name);
                $model->name=$name;
                $url_slug = Yii::app()->request->getPost('url_slug');
                $url_name=str_replace(" ", "-", trim($url_slug));
                $url_name=str_replace(":", "", $url_name);
                $url_name=str_replace("+", "", $url_name);
				$url_name = strtolower($url_name);
                $model->url=trim($url_name);
                $model->ctitle=trim(Yii::app()->request->getPost('ctitle'));
                $model->description=trim(Yii::app()->request->getPost('description'));
                
                if(!empty($_POST['page_title']))
                {
                    $model->meta_title=trim(Yii::app()->request->getPost('page_title'));
                }
                if(!empty($_POST['keywords']))
                {
                    $model->meta_keywords=trim(Yii::app()->request->getPost('keywords'));
                }
                if(!empty($_POST['seo_desc']))
                {
                    $model->meta_desc=trim(Yii::app()->request->getPost('seo_desc'));
                }
                if(!empty($_POST['is_hot']))
                {
                    $model->is_hot=1;
                }
                else{
                    $model->is_hot=0;
                }
                if(!empty($_POST['status']))
                {
                    $model->status=1;
                }
                else{
                    $model->status=0;
                }
                
                $model->date_updated=date("Y-m-d H:i:s");

				$post_image = $_FILES["photo"]["name"];
				if(!empty($post_image)){
					$file_ext = substr($post_image, strripos($post_image, '.')); // get file name
					$newname = $url_name."".$file_ext;
					$model->image = $newname;
					
					$newpath = Yii::app()->basePath.'/../img/vendor/';
					move_uploaded_file($_FILES["photo"]["tmp_name"], $newpath.$newname);
				}

				$post_image2 = $_FILES["photo2"]["name"];
				if(!empty($post_image2)){
					$file_ext2 = substr($post_image2, strripos($post_image2, '.')); // get file name
					$newname2 = "bg-".$eurl."".$file_ext2;
					$model->vbackground = $newname2;
						
					$newpath2 = Yii::app()->basePath.'/../img/vbackground/';
					move_uploaded_file($_FILES["photo2"]["tmp_name"], $newpath2.$newname2);
				}

                
                if ($model->update())
                {
                    $this->redirect(Yii::app()->createUrl("octa/vendor/edit",array("id"=>$id,"msg"=>"1")));
                    Yii::app()->end();
                }
                else
                {
                    $this->redirect(Yii::app()->createUrl("octa/vendor/edit",array("id"=>$id,"msg"=>"0")));
                    Yii::app()->end();
                }
            }
            if (isset($_GET['id']))
            {
                $id= $_GET['id'];
                $model=Vendor::model()->findByPk($id);
                $this->render("edit",array("vendor"=>$model));
            }
            
            
            //Ajax call for editing
            
            
        }
        
        public function actionDelete()
        {
             if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
            
            $id=Yii::app()->request->getParam('id');
            
            //Delete All Certs
            $cri= new CDbCriteria();
            $cri->condition="vendor_id=:id";
            $cri->params=array(":id"=>$id);
            Cert::model()->deleteAll($cri);
            Exam::model()->deleteAll($cri);
            
            //Delete All Exams
            
            Vendor::model()->deleteByPk($id);
            
            $this->redirect(Yii::app()->createUrl("octa/vendor"));
            
           
            
            
        }
        
        public function actionProcessHot()
        {
            if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
            
            $id= Yii::app()->request->getPost('id');
            $vendor= Vendor::model()->findByPk($id);
            if($vendor->is_hot==1)
            {
                $vendor->is_hot=0;
            }
            else
            {
                $vendor->is_hot=1;
            }
            
            $vendor->date_updated=date('Y-m-d H:i:s');
             if ($vendor->update())
                {
                    $response=array();
                    $response['status']='ok';
                    $response['url']=Yii::app()->createUrl("octa/vendor/processhot");
                    $response['date']=date("Y-m-d");
                    echo CJSON::encode($response);
                    Yii::app()->end();
                }
                else
                {
                    $response=array();
                    $response['status']=$vendor->getErrors();
                    echo CJSON::encode($response);
                    Yii::app()->end();
                }
            
                
            
            
            
        }
        
        public function actionProcessActive()
        {
             if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
            
            $id= Yii::app()->request->getPost('id');
            $vendor= Vendor::model()->findByPk($id);
            if($vendor->status==1)
            {
                $vendor->status=0;
                
                Cert::model()->updateAll(array( 'status' => 0 ), 'vendor_id='.$id );
                Exam::model()->updateAll(array( 'status' => 0 ), 'vendor_id='.$id );
                
            }
            else
            {
                $vendor->status=1;
                Cert::model()->updateAll(array( 'status' => 1 ), 'vendor_id='.$id );
                Exam::model()->updateAll(array( 'status' => 1 ), 'vendor_id='.$id );
            }
            $vendor->date_updated=date('Y-m-d H:i:s');
             if ($vendor->update())
                {
                    $response=array();
                    $response['status']='ok';
                    $response['url']=Yii::app()->createUrl("octa/vendor/processactive");
                    $response['date']=date("Y-m-d");
                    echo CJSON::encode($response);
                    Yii::app()->end();
                }
                else
                {
                    $response=array();
                    $response['status']=$vendor->getErrors();
                    echo CJSON::encode($response);
                    Yii::app()->end();
                }
        }
        
        public function actionDisableAll()
        {
              if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
                
            Exam::model()->updateAll(array( 'status' => 0 ));
            Cert::model()->updateAll(array( 'status' => 0 ));
            
            Vendor::model()->updateAll(array( 'status' => 0 ));
            
            $this->redirect(Yii::app()->createUrl("octa/vendor"));
            
        }
        
        
        public function actionEnableAll()
        {
             if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
            
            Exam::model()->updateAll(array( 'status' => 1 ));
            Cert::model()->updateAll(array( 'status' => 1 ));
            
            Vendor::model()->updateAll(array( 'status' => 1 ));
            
            $this->redirect(Yii::app()->createUrl("octa/vendor"));
        }
        
        public function actionConfigureUrl()
        {
            $vendor= Vendor::model()->findAll();
            foreach ($vendor as $vendors)
            {
                $url_name=str_replace(" ", "-", trim($vendors->name));
                $url_name=str_replace(":", "", $url_name);
                $url_name=str_replace("+", "", $url_name);
				$url_name = strtolower($url_name);
                $vendors->url=trim($url_name);
                $vendors->update();
            }
            $this->redirect(Yii::app()->createUrl("octa/vendor"));
        }
        
        public function actionExport()
        {
            // Create a new Spreadsheet instance
            $spreadsheet = new Spreadsheet();
        
            // Set document properties
            $spreadsheet->getProperties()
                ->setCreator("OctaNetworks")
                ->setLastModifiedBy("OctaNetworks")
                ->setTitle("OctaNetworks Vendors")
                ->setSubject("OctaNetworks Vendors")
                ->setDescription("OctaNetworks Vendor")
                ->setKeywords("OctaNetworks")
                ->setCategory("OctaNetworks Vendors");
        
            // Set active sheet and add header
            $sheet = $spreadsheet->setActiveSheetIndex(0);
            $sheet->setCellValue('A1', "Vendor");
        
            // Add data to the sheet
            $i = 2;
            $vendors = Vendor::model()->findAll();
        
            foreach ($vendors as $vendor) {
                $sheet->setCellValue('A' . $i, $vendor->name);
                $i++;
            }
        
            // Rename the worksheet
            $sheet->setTitle('OctaNetworks Vendors');
        
            // Prepare the file for download
            $filename = 'OctaNetworks Vendors ' . date('Y-m-d') . '.xls';
        
            // Set headers for download
            header('Content-Type: application/vnd.ms-excel');
            header('Content-Disposition: attachment;filename="' . $filename . '"');
            header('Cache-Control: max-age=0');
        
            // Write the file to output
            $writer = new Xls($spreadsheet);
            $writer->save('php://output');
        
            // Clear memory
            unset($spreadsheet, $writer);
            exit();
        }
        /*
        public function actionExport()
        {
             $objPHPExcel = new PHPExcel();

            // Set document properties
            $objPHPExcel->getProperties()->setCreator("OctaNetworks")
                 ->setLastModifiedBy("OctaNetworks")
                 ->setTitle("OctaNetworks Vendors")
                 ->setSubject("OctaNetworks Vendors")
                 ->setDescription("OctaNetworks Vendor")
                 ->setKeywords("OctaNetworks")
                 ->setCategory("OctaNetworks Vendors");        
             $objPHPExcel->setActiveSheetIndex(0)
                     ->setCellValue('A1', "Vendor");
                     
            // Add some data
            $i=2;
            $vendor= Vendor::model()->findAll();
    
            foreach ($vendor as $vendors)
            {
                $objPHPExcel->setActiveSheetIndex(0)
                            ->setCellValue('A'.$i, $vendors->name);
                $i++;
            }
            
            // Rename worksheet
            $objPHPExcel->getActiveSheet()->setTitle('OctaNetworks Vendors');
            
            // Set active sheet index to the first sheet, so Excel opens this as the first sheet
            $objPHPExcel->setActiveSheetIndex(0);
            
            // Save a xls file
            $filename = 'OctaNetworks Vendors '.date('Y-m-d');
            
            header('Content-Type: application/vnd.ms-excel');
            header('Content-Disposition: attachment;filename="'.$filename.'.xls"');
            header('Cache-Control: max-age=0');
            
            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
    
            $objWriter->save('php://output');
            unset($this->objWriter);
            unset($this->objWorksheet);
            unset($this->objReader);
            unset($this->objPHPExcel);
            exit();
        }
        */

       
        
}
?>