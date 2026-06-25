<?php 

require '/home2/octanetw/public_html/protected/vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class CertController extends CController
{
	public $heading="Certification Management";
        
	public function actionIndex()
	{
		if (!Yii::app()->user->hasState("admin")){
			$this->redirect(Yii::app()->createUrl("octa/login"));
			Yii::app()->end();
		}
		$cri=new CDbCriteria();
		$count= Cert::model()->count();
		$pages=new CPagination($count);
		$pages->pageSize=20;
		$pages->applyLimit($cri);
		$certs= Cert::model()->findAll($cri);
		$this->render("index",array("cert"=>$certs,"pages"=>$pages));
	}

	public function actionSearch()
	{
		if(!Yii::app()->user->hasState("admin")){
			$this->redirect(Yii::app()->createUrl("octa/login"));
			Yii::app()->end();
		}
		
		if (!empty($_POST)){
			$query=trim(Yii::app()->request->getPost('cert'));
			$cri=new CDbCriteria();
                $cri->condition="name Like :query";
                $cri->params=array(":query"=>"%$query%");
                if (Cert::model()->exists($cri))
                {
                    $cert= Cert::model()->findAll($cri);
                    $this->render("search",array("cert"=>$cert));
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
        
	public function actionAddcert()
	{
		if (!Yii::app()->user->hasState("admin")){
			$this->redirect(Yii::app()->createUrl("octa/login"));
			Yii::app()->end();
		}

		if (!empty($_POST)){
                
                // check for duplicate
                $name=trim(Yii::app()->request->getPost('cert_name'));

				$url_name=str_replace(" ", "-", trim($name));
                $url_name=str_replace("+", "p", $url_name);
		        $url_name=str_replace(":", "", $url_name);
		        $url_name=str_replace(".", "-", $url_name);
		        $url_name=str_replace(",", "-", $url_name);
		        $url_name=str_replace("/", "-", $url_name);
				$url_name=str_replace("&", "and", $url_name);
				$url_name=str_replace("(", "", $url_name);
				$url_name=str_replace(")", "", $url_name);
				$url_name=str_replace("[", "", $url_name);
				$url_name=str_replace("]", "", $url_name);
				$url_name=str_replace("---", "-", $url_name);
				$url_name=str_replace("--", "-", $url_name);
				$url_name=strtolower($url_name);
				

                $cri= new CDbCriteria();
                $cri->condition="url='$url_name'";
                $check=  Cert::model()->exists($cri);
                if ($check)
                {
                $response=array();
                $response['status']='already';
                echo CJSON::encode($response);
                Yii::app()->end();
                }
                
                
                $model= new Cert();
                
                $model->name=$name;
                
                
                $model->url=trim($url_name);
					$cVendorID = Yii::app()->request->getPost('vendor');
                $model->vendor_id = $cVendorID;
				
				$post_image = $_FILES["photo"]["name"];
				
				if(!empty($post_image)){
					$file_ext = substr($post_image, strripos($post_image, '.')); // get file name
					$newname = $url_name."".$file_ext;
					
					$newpath = Yii::app()->basePath.'/../img/cert/';
					move_uploaded_file($_FILES["photo"]["tmp_name"], $newpath.$newname);
				}
				$model->image = $newname;
                $model->description=trim(Yii::app()->request->getPost('description'));
				$model->menu_name=trim(Yii::app()->request->getPost('menu_name'));
                
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
                
                
                
                if($model->save())
                {

                	$this->redirect(Yii::app()->createUrl("octa/cert/addcert",array("msg"=>"1")));
                	Yii::app()->end();
                }else{
                    $this->redirect(Yii::app()->createUrl("octa/cert/addcert",array("msg"=>"0")));
                	Yii::app()->end();
                }
            }
            else
            {
			$cri = new CDbCriteria();
			$cri->order = "name";
            $vendor= Vendor::model()->findAll($cri);
            $this->render("addcert",array("vendor"=>$vendor));
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
                $model= Cert::model()->findByPk($id);
                
                $name=trim(Yii::app()->request->getPost('cert_name'));
                $model->name=$name;
                
				$url_slug = Yii::app()->request->getPost('url_slug');
                $url_name=str_replace(" ", "-", trim($url_slug));
                $url_name=str_replace("+", "p", $url_name);
		        $url_name=str_replace(":", "", $url_name);
		        $url_name=str_replace(".", "-", $url_name);
		        $url_name=str_replace(",", "-", $url_name);
		        $url_name=str_replace("/", "-", $url_name);
				$url_name=str_replace("&", "and", $url_name);
				$url_name=str_replace("(", "", $url_name);
				$url_name=str_replace(")", "", $url_name);
				$url_name=str_replace("[", "", $url_name);
				$url_name=str_replace("]", "", $url_name);
				$url_name=str_replace("---", "-", $url_name);
				$url_name=str_replace("--", "-", $url_name);
				$url_name=strtolower($url_name);
                 
                $model->url=$url_name;
                $model->vendor_id=Yii::app()->request->getPost('vendor');
				
				$post_image = $_FILES["photo"]["name"];
				if(!empty($post_image)){
					$file_ext = substr($post_image, strripos($post_image, '.')); // get file name
					$newname = $url_name."".$file_ext;
					$model->image = $newname;
					
					$newpath = Yii::app()->basePath.'/../img/cert/';
					move_uploaded_file($_FILES["photo"]["tmp_name"], $newpath.$newname);
				}

				$post_image2 = $_FILES["photo2"]["name"];
				if(!empty($post_image2)){
					$file_ext2 = substr($post_image2, strripos($post_image2, '.')); // get file name
					$newname2 = "bg-".$url_name."".$file_ext2;
					$model->cbackground = $newname2;
						
					$newpath2 = Yii::app()->basePath.'/../img/cbackground/';
					move_uploaded_file($_FILES["photo2"]["tmp_name"], $newpath2.$newname2);
				}
				$post_image2_re = $_FILES["photo2_re"]["name"];
				if(!empty($post_image2_re)){
					$file_ext2_re = substr($post_image2_re, strripos($post_image2_re, '.')); // get file name
					$newname2_re = "bg-".$url_name."".$file_ext2_re;
					$model->cbackground_re = $newname2_re;
						
					$newpath2_re = Yii::app()->basePath.'/../img/cbackground/';
					move_uploaded_file($_FILES["photo2_re"]["tmp_name"], $newpath2_re.$newname2_re);
				}
				
				
               $model->menu_name=trim(Yii::app()->request->getPost('menu_name'));
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
                else
                {
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
                
                if ($model->update())
                {
                    $this->redirect(Yii::app()->createUrl("octa/cert/edit",array("id"=>$id,"msg"=>"1")));
                    Yii::app()->end();
                }
                else
                {
                   $this->redirect(Yii::app()->createUrl("octa/cert/edit",array("id"=>$id,"msg"=>"0")));
                    Yii::app()->end();
                }
            }
            else
            {
                $id= Yii::app()->request->getParam('id');
                $model=Cert::model()->findByPk($id);
                $vendors=Vendor::model()->findAll();
                $this->render("edit",array("cert"=>$model,"vendor"=>$vendors));
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
            
            $cri=new CDbCriteria();
            $cri->condition="cert_id=$id";
            
            Exam::model()->deleteAll($cri);
                    
            
            Cert::model()->deleteByPk($id);
            
            
            $this->redirect(Yii::app()->createUrl("octa/cert"));
                
            
            
        }
        
         public function actionProcessHot()
        {
            if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
            
            $id= Yii::app()->request->getPost('id');
            $cert= Cert::model()->findByPk($id);
            if($cert->is_hot==1)
            {
                $cert->is_hot=0;
            }
            else
            {
                $cert->is_hot=1;
            }
            
                $cert->date_updated=date('Y-m-d H:i:s');
             if ($cert->update())
                {
                    $response=array();
                    $response['status']='ok';
                    $response['date']=date("Y-m-d");
                    $response['url']=Yii::app()->createUrl("octa/cert/processhot");
                    echo CJSON::encode($response);
                    Yii::app()->end();
                }
                else
                {
                    $response=array();
                    $response['status']=$cert->getErrors();
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
            if (Cert::model()->exists()) {
                    $cert= Cert::model()->findByPk($id);

                    $vendor= Vendor::model()->findByPk($cert->vendor_id);
                    if ($vendor->status==0)
                    {
                            $response=array();
                            $response['status']='sorry';
                            echo CJSON::encode($response);
                            Yii::app()->end();

                    }


                    if($cert->status==1)
                    {
                        $cert->status=0;
                        Exam::model()->updateAll(array( 'status' => 0 ), 'cert_id='.$id );
                    }
                    else
                    {
                        $cert->status=1;
                        
                        Exam::model()->updateAll(array( 'status' => 1 ), 'cert_id='.$id );
                    }
                    $cert->date_updated=date('Y-m-d H:i:s');
                     if ($cert->update())
                        {
                            $response=array();
                            $response['status']='ok';
                            $response['date']=date("Y-m-d");
                            $response['url']=Yii::app()->createUrl("octa/cert/processactive");
                            echo CJSON::encode($response);
                            Yii::app()->end();
                        }
                        else
                        {
                            $response=array();
                            $response['status']=$cert->getErrors();
                            echo CJSON::encode($response);
                            Yii::app()->end();
                        }
                    }else
                    {
                            $response=array();
                            $response['status']='sorry';
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
            
           
            
            
           
            $this->redirect(Yii::app()->createUrl("octa/cert"));
            
        }
        
        
        public function actionEnableAll()
        {
             if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
            
            Cert::model()->updateAll(array( 'status' => 1 ));
            
            
            Exam::model()->updateAll(array( 'status' => 1 ));
            
            
            
            //Disabling Exams n Cert whose vendor is disabled//
            
            $vendor= Vendor::model()->findAll("status=0");
            foreach ($vendor as $vendors)
            {
                Cert::model()->updateAll(array('status'=>0),'vendor_id='.$vendors->id);
                Exam::model()->updateAll(array('status'=>0),'vendor_id='.$vendors->id);
            }
            
            $this->redirect(Yii::app()->createUrl("octa/cert"));
        }
        
           public function actionConfigureUrl()
        {
            $cert= Cert::model()->findAll();
            foreach ($cert as $certs)
            {
                $url_name=str_replace(" ", "-", trim($certs->name));
                $url_name=str_replace("+", "p", $url_name);
		        $url_name=str_replace(":", "", $url_name);
		        $url_name=str_replace(".", "-", $url_name);
		        $url_name=str_replace(",", "-", $url_name);
		        $url_name=str_replace("/", "-", $url_name);
				$url_name=str_replace("&", "and", $url_name);
				$url_name=str_replace("(", "", $url_name);
				$url_name=str_replace(")", "", $url_name);
				$url_name=str_replace("[", "", $url_name);
				$url_name=str_replace("]", "", $url_name);
				$url_name=str_replace("---", "-", $url_name);
				$url_name=str_replace("--", "-", $url_name);
                $url_name=trim($url_name); 
				$url_name=strtolower($url_name); 
                $certs->url=$url_name;
                $certs->update();
            }
            $this->redirect(Yii::app()->createUrl("octa/cert"));
        }
        
        
        public function actionExport()
        {
            
            // Create a new Spreadsheet object using PhpSpreadsheet
            $spreadsheet = new Spreadsheet();
        
            // Set document properties
            $spreadsheet->getProperties()->setCreator("OctaNetworks")
                     ->setLastModifiedBy("OctaNetworks")
                     ->setTitle("OctaNetworks Certs")
                     ->setSubject("OctaNetworks Certs")
                     ->setDescription("OctaNetworks Certs")
                     ->setKeywords("OctaNetworks")
                     ->setCategory("OctaNetworks Certs");
        
            // Set active sheet and column headers
            $sheet = $spreadsheet->getActiveSheet();
            $sheet->setTitle('OctaNetworks Certs')
                  ->setCellValue('A1', "Vendor")
                  ->setCellValue('B1', "Cert")
                  ->setCellValue('C1', "Exams");
        
            // Add data for certs and exams
            $i = 2; // Start at row 2 for data
            $certs = Cert::model()->findAll(); // Get all certificates
        
            foreach ($certs as $cert) {
                $certId = $cert->id;
        
                // Get exams associated with the cert
                $criteria = new CDbCriteria();
                $criteria->condition = "cert_id = :certId";
                $criteria->params = [':certId' => $certId];
                $texams = Exam::model()->findAll($criteria);
                $totalExams = count($texams);
        
                // If no exams exist for this cert, delete the cert
                if ($totalExams == 0) {
                    Cert::model()->deleteByPk($certId);
                } else {
                    // Add row data to the spreadsheet
                    if (!empty($cert->vendor)) {
                        $sheet->setCellValue('A' . $i, $cert->vendor->name) // Vendor name
                              ->setCellValue('B' . $i, $cert->name) // Cert name
                              ->setCellValue('C' . $i, $totalExams); // Total exams
                    } else {
                        $sheet->setCellValue('A' . $i, "No Vendor Assigned") // No vendor assigned
                              ->setCellValue('B' . $i, $cert->name) // Cert name
                              ->setCellValue('C' . $i, $totalExams); // Total exams
                    }
                    $i++;
                }
            }
        
            // Generate filename
            $filename = 'OctaNetworks_Certs_' . date('Y-m-d');
        
            // Set headers for file download
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'); // For .xlsx format
            header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
            header('Cache-Control: max-age=0');
        
            // Write and save the file to output as .xlsx
            $writer = new Xlsx($spreadsheet);
            $writer->save('php://output');  // This will send the file to the browser
        
            // Clear memory
            unset($spreadsheet);
            exit();
        }

/*
		public function actionExport()
        {
             $objPHPExcel = new PHPExcel();

        // Set document properties
        $objPHPExcel->getProperties()->setCreator("OctaNetworks")
             ->setLastModifiedBy("OctaNetworks")
             ->setTitle("OctaNetworks Certs")
             ->setSubject("OctaNetworks Certs")
             ->setDescription("OctaNetworks Certs")
             ->setKeywords("OctaNetworks")
             ->setCategory("OctaNetworks Certs");        
         $objPHPExcel->setActiveSheetIndex(0)
                 ->setCellValue('A1', "Vendor")
				 ->setCellValue('B1', "Cert")
				 ->setCellValue('C1', "Exams");
                 
        // Add some data
        $i=2;
        $cert= Cert::model()->findAll();
        foreach ($cert as $certs)
        {

		$cidd = $certs->id;
		$cri1 = new CDbCriteria();
        $cri1->condition="cert_id = $cidd";
        $texam = Exam::model()->findAll($cri1);
		$default_exams = count($texam);

		

		$total_exams = $default_exams;

		if($total_exams == 0){
			Cert::model()->deleteByPk($cidd);
		}else{
		

          if (!empty($certs->vendor))
		{
            $objPHPExcel->setActiveSheetIndex(0)
                            ->setCellValue('A'.$i, $certs->vendor->name)
                            ->setCellValue('B'.$i, $certs->name)
							->setCellValue('C'.$i, $total_exams);
        }else 
				{
				$objPHPExcel->setActiveSheetIndex(0)
                            ->setCellValue('A'.$i, "No Vendor Assigned")
                            ->setCellValue('B'.$i, $certs->name)
							->setCellValue('C'.$i, $total_exams);
				}
            $i++;
          
            
           
        }
        
        }
       
       
        
        // Rename worksheet
        $objPHPExcel->getActiveSheet()->setTitle('OctaNetworks certs');
        
        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $objPHPExcel->setActiveSheetIndex(0);
        
        // Save a xls file
        $filename = 'OctaNetworks Certs '.date('Y-m-d');
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