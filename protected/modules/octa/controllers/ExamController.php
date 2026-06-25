<?php
require_once Yii::getPathOfAlias('webroot').'/customfiles/mailfunctions.php';

require_once Yii::getPathOfAlias('application') . '/vendor/autoload.php';


class ExamController extends CController
{
	public $heading="Exam Management";
	public function actionIndex()
	{
		if (!Yii::app()->user->hasState("admin")){          
			$this->redirect(Yii::app()->createUrl("octa/login"));
			Yii::app()->end();
		}
           $cri=new CDbCriteria();
           //$cri->limit="20";
           $cri->order=" id DESC";
           
           $count=  Exam::model()->count();
           //Pagination

			$records = Yii::app()->request->getParam("records");

			if(isset($records)){
				$rpage = $records;
			}else{
				$rpage = 50;
			}

           $pages=new CPagination($count);
           $pages->pageSize=$rpage;
           $pages->applyLimit($cri);
           
           $exam= Exam::model()->findAll($cri);
           $this->render("index",array("exam"=>$exam,"pages"=>$pages));
	}

	public function actionTopExams()
	{
            if (!Yii::app()->user->hasState("admin"))
            {          
                $this->redirect(Yii::app()->createUrl("octa/login"));
                Yii::app()->end();
            }
           $cri=new CDbCriteria();
           //$cri->limit="20";
			$cri->condition=" is_top = 1";
           $cri->order=" id DESC";
			
           
           $count=  Exam::model()->count();
           //Pagination

           $exam= Exam::model()->findAll($cri);
           $this->render("topexams",array("exam"=>$exam));
	}

	public function actionHotExams()
	{
            if (!Yii::app()->user->hasState("admin"))
            {          
                $this->redirect(Yii::app()->createUrl("octa/login"));
                Yii::app()->end();
            }
           $cri=new CDbCriteria();
           //$cri->limit="20";
			$cri->condition=" is_hot = 1";
           $cri->order=" id DESC";
			
           
           $count=  Exam::model()->count();
           //Pagination

			
           
           $exam= Exam::model()->findAll($cri);
           $this->render("hotexams",array("exam"=>$exam));
	}

    public function actionExportExams()
    {
        if (!Yii::app()->user->hasState("admin")) {
            $this->redirect(Yii::app()->createUrl("octa/login"));
            Yii::app()->end();
        }
    
        $type = Yii::app()->request->getParam("type");
        $check = Yii::app()->request->getParam("check");
    
        // Create a new Spreadsheet object using PhpSpreadsheet
        $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
    
        // Set document properties
        $spreadsheet->getProperties()
            ->setCreator("OctaNetworks")
            ->setLastModifiedBy("OctaNetworks")
            ->setTitle("Exams to Vendor")
            ->setSubject("Exams to Vendor")
            ->setDescription("Database of vendors certs and exams")
            ->setKeywords("OctaNetworks")
            ->setCategory("OctaNetworks Exam and Vendors");
    
        // Set active sheet and column headers
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle('info')
              ->setCellValue('A1', "Vendor")
              ->setCellValue('B1', "Exam Code")
              ->setCellValue('C1', "Cert Name"); // Add header for Cert Name
    
        $i = 2; // Start at the second row for data
    
        // Define criteria to include vendor relation and cert relation
        $criteria = new CDbCriteria();
        $criteria->with = ['vendor', 'cert']; // Include both vendor and cert relations
        $criteria->order = "vendor.name"; // Order by vendor name
        $criteria->together = true; // Ensure SQL join
    
        // Fetch exams with vendor and cert data
        $exams = Exam::model()->findAll($criteria);
    
        foreach ($exams as $exam) {
            // Get cert name. If cert is not set, show 'No Cert'
            $certName = isset($exam->cert->name) ? $exam->cert->name : 'No Cert';
    
            // Populate spreadsheet rows with vendor, exam code, and cert name
            $sheet->setCellValue('A' . $i, isset($exam->vendor->name) ? $exam->vendor->name : 'No Vendor') // Vendor name
                  ->setCellValue('B' . $i, $exam->code) // Exam code
                  ->setCellValue('C' . $i, $certName); // Cert name
            $i++;
        }
    
        // Generate a filename
        $filename = "Octanetworks_AllExamsExport_" . Yii::app()->params['mydate'];
    
        // Set headers for file download
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'); // For .xlsx format
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');
    
        // Save the spreadsheet directly to output
        $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
        $writer->save('php://output');  // This will send the file to the browser
    
        // Clear memory
        unset($spreadsheet);
        exit();
    }


    
/*
    public function actionExport()
	{
        if (!Yii::app()->user->hasState("admin"))
            {          
                $this->redirect(Yii::app()->createUrl("octa/login"));
                Yii::app()->end();
            }
			$type = Yii::app()->request->getParam("type");
			$check = Yii::app()->request->getParam("check");
            $objPHPExcel = new PHPExcel();
            // Set document properties
            $objPHPExcel->getProperties()->setCreator("OctaNetworks")
                 ->setLastModifiedBy("OctaNetworks")
                 ->setTitle("Exams to Vendor")
                 ->setSubject("Exams to Vendor")
                 ->setDescription("Database of vendors certs and exams")
                 ->setKeywords("OctaNetworks")
                 ->setCategory("OctaNetworks Exam and Vendors");        
            $objPHPExcel->setActiveSheetIndex(0)
                     ->setCellValue('A1', "Vendor")
                     ->setCellValue('B1', "Exam Code");
            // Add some data
            $i=2;
    		$cri= new CDbCriteria();
            $cri->order="name";
            $exam= Exam::model()->findAll($cri);
                foreach ($exam as $exams)
                {
					if($type == "pdf"){
						$dir_path = Yii::getPathOfAlias('webroot') . '/'.Yii::app()->params['folder'].'/full/'.$exams->vendor->name.'/'.$exams->code.'.zip';
					}else if($type == "engine"){
						$dir_path = Yii::getPathOfAlias('webroot') . '/'.Yii::app()->params['folder'].'/full/'.$exams->vendor->name.'/'.$exams->code.'Sim.zip';
					}else if($type == "demo"){
						$dir_path = Yii::getPathOfAlias('webroot') . '/'.Yii::app()->params['folder'].'/demo/'.$exams->vendor->name.'/'.$exams->code.'.zip';
					}
					if($exams->questions != 0){
    					if($check == "available"){
    						if(file_exists($dir_path))
    							{ 
    								$objPHPExcel->setActiveSheetIndex(0)
                                	->setCellValue('A'.$i, $exams->vendor->name)
                                	->setCellValue('B'.$i, $exams->code);
    				            	$i++;
    							}
    					}else if($check == "navailable"){
    						if(!file_exists($dir_path))
    							{ 
    								$objPHPExcel->setActiveSheetIndex(0)
                                	->setCellValue('A'.$i, $exams->vendor->name)
                                	->setCellValue('B'.$i, $exams->code);
    				            	$i++;
    							}
    					}
					}
                }
    		$exclname = $check."_".$type."_".Yii::app()->params['mydate'];
            // Rename worksheet
            $objPHPExcel->getActiveSheet()->setTitle('info');
            // Set active sheet index to the first sheet, so Excel opens this as the first sheet
            $objPHPExcel->setActiveSheetIndex(0);
            // Save a xls file
            $filename = $exclname;
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
         public function actionSearch()
        {
             if (!Yii::app()->user->hasState("admin"))
            {          
                $this->redirect(Yii::app()->createUrl("octa/login"));
                Yii::app()->end();
            }
            if (!empty($_POST))
            {
                $query=trim(Yii::app()->request->getPost('exam'));
                $cri=new CDbCriteria();
                $cri->condition="code Like :query";
                $cri->params= array(":query"=> "%$query%");
                $exam= Exam::model()->findAll($cri);
                /* var_dump($exam);exit; */
                if ($exam)
                {
                    $this->render("search",array("exam"=>$exam));
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
        
        
	public function actionAddexam()
	{
		if (!Yii::app()->user->hasState("admin")){          
			$this->redirect(Yii::app()->createUrl("octa/login"));
			Yii::app()->end();
		}
		
		if (!empty($_POST)){
			$code=trim(Yii::app()->request->getPost('exam_code'));
				$url_name=str_replace(" ", "-", trim($code));
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
				$eurl = strtolower($url_name);
			

			$cri= new CDbCriteria();
			$cri->condition="url='$eurl'";
			$check=Exam::model()->exists($cri);
			
			if ($check){
				$this->redirect(Yii::app()->createUrl("octa/exam/addexam",array("msg"=>"2")));
				Yii::app()->end(); 

                //$response=array();
                //$response['status']='already';
                //echo CJSON::encode($response);
                //Yii::app()->end();
			}

			$cert = Yii::app()->request->getPost('cert');
            $model= new Exam;
			$code=trim(Yii::app()->request->getPost('exam_code'));
			
			$model->code=$code;
			$model->url = $eurl;
			$vendor_id = Yii::app()->request->getPost('vendor');
			$model->vendor_id=$vendor_id;
			$model->cert_id=$cert;
			
			$post_image = $_FILES["photo"]["name"];
			if(!empty($post_image)){
				$file_ext = substr($post_image, strripos($post_image, '.')); // get file name
				$newname = $eurl."".$file_ext;
				$model->image = $newname;
					
				$newpath = Yii::app()->basePath.'/../img/exam/';
				move_uploaded_file($_FILES["photo"]["tmp_name"], $newpath.$newname);
			}
			
			$tagIds = Yii::app()->request->getPost('tag_ids');
            $model->tag_ids = json_encode($tagIds);
			$model->short_description=trim(Yii::app()->request->getPost('short_description'));
			$model->duration=trim(Yii::app()->request->getPost('duration'));
				
			$model->description=trim(Yii::app()->request->getPost('description'));
			$model->decription_2=trim(Yii::app()->request->getPost('decription_2'));
			$model->cdetail=trim(Yii::app()->request->getPost('cdetail'));
			$model->exams=trim(Yii::app()->request->getPost('exams'));
			$model->benefits=trim(Yii::app()->request->getPost('benefits'));
			if(!empty($_POST['page_title'])){
				$model->meta_title=trim(Yii::app()->request->getPost('page_title'));
			}
			if(!empty($_POST['keywords'])){
				$model->meta_keywords=trim(Yii::app()->request->getPost('keywords'));
			}
			if(!empty($_POST['seo_desc'])){
				$model->meta_desc=trim(Yii::app()->request->getPost('seo_desc'));
			}
			if(!empty($_POST['is_hot'])){
				$model->is_hot=1;
			}
			if(!empty($_POST['status'])){
				$model->status=1;
			}
			$model->date_added=date('Y-m-d H:i:s');
			if($model->save()){
				$this->redirect(Yii::app()->createUrl("octa/exam/addexam",array("msg"=>"1")));
				Yii::app()->end();      
			}else{
				$this->redirect(Yii::app()->createUrl("octa/exam/addexam",array("msg"=>"0")));
				Yii::app()->end();
			}
		}else{
			$cri = new CDbCriteria();
			$cri->order = "name";
			$vendor= Vendor::model()->findAll($cri);
			$tags= Tags::model()->findAll();

			$galleries = Gallery::model()->findAll();
			$this->render("addexam",array("vendor"=>$vendor,"tags"=>$tags,"galleries"=>$galleries));
		}
	}
        
        
	public function actionEdit()
	{
		if(!Yii::app()->user->hasState("admin")){          
			$this->redirect(Yii::app()->createUrl("octa/login"));
			Yii::app()->end();
		}
		if (!empty($_POST)){
			$cert = Yii::app()->request->getPost('cert');
			$code = trim(Yii::app()->request->getPost('exam_code'));
			$cri= new CDbCriteria();
			///////////////////////////Global Post Data Start/////////////////////////////////
			$id=Yii::app()->request->getPost('id');

			$urlslug = trim(Yii::app()->request->getPost('url_slug'));
				$url_name=str_replace(" ", "-", trim($urlslug));
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
				$eurl = strtolower($url_name);
				
			$vendor_id = Yii::app()->request->getPost('vendor');
			$cert_id = $cert;
			
			
			
			if(!empty($_POST['page_title'])){
				$meta_title = trim(Yii::app()->request->getPost('page_title'));
			}
			if(!empty($_POST['h1_title'])){
				$meta_h1_title = trim(Yii::app()->request->getPost('h1_title'));
			}
					
			if(!empty($_POST['keywords'])){
				$meta_keywords = trim(Yii::app()->request->getPost('keywords'));
			}
					
			if(!empty($_POST['seo_desc'])){
				$meta_desc = trim(Yii::app()->request->getPost('seo_desc'));
			}
			if(!empty($_POST['is_hot'])){$is_hot=1;}else{$is_hot=0;}
			if(!empty($_POST['status'])){$status=1;}else{$status=0;}
			///////////////////////////Global Post Data End/////////////////////////////////
			$mycert = $cert_id;
			
			
			
					
				$model= Exam::model()->findByPk($id);
				$model->code=$code;
				$model->url=$eurl;
				$model->vendor_id=$vendor_id;
				$model->cert_id = $cert_id;
				
				$post_image = $_FILES["photo"]["name"];
				if(!empty($post_image)){
					$file_ext = substr($post_image, strripos($post_image, '.')); // get file name
					$newname = $eurl."".$file_ext;
					$model->image = $newname;
						
					$newpath = Yii::app()->basePath.'/../img/exam/';
					move_uploaded_file($_FILES["photo"]["tmp_name"], $newpath.$newname);
				}
				
				$post_offer_banner = $_FILES["offer_banner"]["name"];
				if(!empty($post_offer_banner)){
					$file_ext1 = substr($post_offer_banner, strripos($post_offer_banner, '.')); // get file name
					$newname1 = "offer-".$eurl."".$file_ext1;
					$model->offer_banner = $newname1;
						
					$newpath1 = Yii::app()->basePath.'/../img/exam/';
					move_uploaded_file($_FILES["offer_banner"]["tmp_name"], $newpath1.$newname1);
				}

				$post_image2 = $_FILES["photo2"]["name"];
				if(!empty($post_image2)){
					$file_ext2 = substr($post_image2, strripos($post_image2, '.')); // get file name
					$newname2 = "bg-".$eurl."".$file_ext2;
					$model->ebackground = $newname2;
						
					$newpath2 = Yii::app()->basePath.'/../img/ebackground/';
					move_uploaded_file($_FILES["photo2"]["tmp_name"], $newpath2.$newname2);
				}

				$post_image3 = $_FILES["photo_tab"]["name"];
				if(!empty($post_image3)){
					$file_ext3 = substr($post_image3, strripos($post_image3, '.')); // get file name
					$newname3 = "photo_tab-".$eurl."".$file_ext3;
					$model->photo_tab = $newname3;
						
					$newpath3 = Yii::app()->basePath.'/../img/ebackground/';
					move_uploaded_file($_FILES["photo_tab"]["tmp_name"], $newpath3.$newname3);
				}

				$post_image4 = $_FILES["photo_mob"]["name"];
				if(!empty($post_image4)){
					$file_ext4 = substr($post_image4, strripos($post_image4, '.')); // get file name
					$newname4 = "photo_mob-".$eurl."".$file_ext4;
					$model->photo_mob = $newname4;
						
					$newpath4 = Yii::app()->basePath.'/../img/ebackground/';
					move_uploaded_file($_FILES["photo_mob"]["tmp_name"], $newpath4.$newname4);
				}
				
				$model->description=trim(Yii::app()->request->getPost('description'));
				$model->decription_2=trim(Yii::app()->request->getPost('decription_2'));
				$model->free_resources=trim(Yii::app()->request->getPost('free_resources'));
				$model->course_highlights=trim(Yii::app()->request->getPost('course_highlights'));
				$model->cdetail=trim(Yii::app()->request->getPost('cdetail'));
				$model->exams=trim(Yii::app()->request->getPost('exams'));
				$model->benefits=trim(Yii::app()->request->getPost('benefits'));
				$model->plan=trim(Yii::app()->request->getPost('plan'));
				
				$tagIds = Yii::app()->request->getPost('tag_ids');
                $model->tag_ids = json_encode($tagIds);
				$model->short_description=trim(Yii::app()->request->getPost('short_description'));
				$model->duration=trim(Yii::app()->request->getPost('duration'));
				
				$model->efaqs = NULL;
				$model->lab=trim(Yii::app()->request->getPost('lab'));
				$model->meta_title=$meta_title;
				$model->h1_title=$meta_h1_title;
				$model->h1_description=trim(Yii::app()->request->getPost('h1_description'));
				$model->meta_keywords=$meta_keywords;
				$model->meta_desc=$meta_desc;
				$model->is_hot=$is_hot;
				$model->status=$status;
				$model->date_updated=date('Y-m-d H:i:s');
				
				if($model->update()){
					
					$this->redirect(Yii::app()->createUrl("octa/exam/edit",array("id"=>$id,"msg"=>"1")));
					Yii::app()->end();
				}else{
					$this->redirect(Yii::app()->createUrl("octa/exam/edit",array("id"=>$id,"msg"=>"0")));
					Yii::app()->end();
				}
			
		}
		
		if (isset($_GET['id'])){
			$id = Yii::app()->request->getParam('id');
			$model=Exam::model()->findByPk($id);
			$vendors=Vendor::model()->findAll();
			$galleries = Gallery::model()->findAll();

			if(!empty($model->vendor_id)){
				$cri=new CDbCriteria();
				$cri->condition="vendor_id=$model->vendor_id";
				$certs= Cert::model()->findAll($cri);
				$tags= Tags::model()->findAll();
				
			
			}else{
				$certs = "";
			}
			$this->render("edit",array("exam"=>$model,"vendor"=>$vendors, "cert"=>$certs,"tags"=>$tags, "galleries"=>$galleries));
		}
	}
        
        public function actionDelete()
        {
            if (!Yii::app()->user->hasState("admin"))
            {          
                $this->redirect(Yii::app()->createUrl("octa/login"));
                Yii::app()->end();
            }
            
            if(!empty($_GET))
                {
                    $id=Yii::app()->request->getParam('id');
                    Exam::model()->deleteByPk($id);
                    
                    $this->redirect(Yii::app()->createUrl("octa/exam"));
                 }
        }

		public function actionHotDelete()
        {
            if (!Yii::app()->user->hasState("admin"))
            {          
                $this->redirect(Yii::app()->createUrl("octa/login"));
                Yii::app()->end();
            }
            
            if(!empty($_GET))
                {
                    $id=Yii::app()->request->getParam('id');

                    $model= Exam::model()->findByPk($id);
					$model->is_hot = 0;
					$model->date_updated = date('Y-m-d H:i:s');
					$model->update();
                    
                    $this->redirect(Yii::app()->createUrl("octa/exam/hotexams"));
                 }
        }

		public function actionTopDelete()
        {
            if (!Yii::app()->user->hasState("admin"))
            {          
                $this->redirect(Yii::app()->createUrl("octa/login"));
                Yii::app()->end();
            }
            
            if(!empty($_GET))
                {
                    $id=Yii::app()->request->getParam('id');

                    $model= Exam::model()->findByPk($id);
					$model->is_top = 0;
					$model->date_updated = date('Y-m-d H:i:s');
					$model->update();
                    
                    $this->redirect(Yii::app()->createUrl("octa/exam/topexams"));
                 }
        }

		public function actionAddHot()
		        {
		            if (!Yii::app()->user->hasState("admin"))
		            {          
		                $this->redirect(Yii::app()->createUrl("octa/login"));
		                Yii::app()->end();
		            }
		            
		                    $hotcode = Yii::app()->request->getPost('hotcode');
		
		                    $model= Exam::model()->findByPk($hotcode);
							$model->is_hot = 1;
							$model->date_updated = date('Y-m-d H:i:s');
							$model->update();
		                    
		                    $this->redirect(Yii::app()->createUrl("octa/exam/hotexams"));
		            
		        }


		public function actionAddTop()
		        {
		            if (!Yii::app()->user->hasState("admin"))
		            {          
		                $this->redirect(Yii::app()->createUrl("octa/login"));
		                Yii::app()->end();
		            }
		            
		                    $topcode = Yii::app()->request->getPost('topcode');
		
		                    $model= Exam::model()->findByPk($topcode);
							$model->is_top = 1;
							$model->date_updated = date('Y-m-d H:i:s');
							$model->update();
		                    
		                    $this->redirect(Yii::app()->createUrl("octa/exam/topexams"));
		            
		        }

        
        public function actionGetExams()
        {
            if (!Yii::app()->user->hasState("admin"))
            {          
                $this->redirect(Yii::app()->createUrl("octa/login"));
                Yii::app()->end();
            }
            if(!empty($_POST))
            {
                $id=$_POST['id'];
                $cri =new CDbCriteria();
                $cri->condition="cert_id=$id";
                $Exams= Exam::model()->findAll($cri);
                if ($Exams)
                {
                    $response=array();
                    $response['status']="ok";
                    $response['exam']=$Exams;
                    echo CJSON::encode($response);
                    Yii::app()->end();
                    
                }
            }
        }
        
        public function actionGetCerts()
        {
            if (!Yii::app()->user->hasState("admin"))
            {          
                $this->redirect(Yii::app()->createUrl("octa/login"));
                Yii::app()->end();
            }
            if(!empty($_POST))
            {
                $id=$_POST['id'];
                $cri =new CDbCriteria();
                $cri->condition="vendor_id=$id";
                $Certs=  Cert::model()->findAll($cri);
                if ($Certs)
                {
                    $response = [
                        'status' => 'ok',
                        'cert' => []
                    ];
        
                    foreach ($Certs as $cert) {
                        $response['cert'][] = [
                            'id' => $cert->id,
                            'name' => $cert->name,
                        ];
                    }
                    
                    header('Content-Type: application/json');
                    echo json_encode($response);
                    Yii::app()->end();

                    // $response=array();
                    // $response['status']="ok";
                    // $response['cert']=$Certs;
                    // echo CJSON::encode($response);
                    // Yii::app()->end();
                    
                }
            }
        }


		public function actionGetECerts()
        {
            if (!Yii::app()->user->hasState("admin"))
            {          
                $this->redirect(Yii::app()->createUrl("octa/login"));
                Yii::app()->end();
            }
            if(!empty($_POST))
            {
                $id=$_POST['id'];

                $eexam=Exam::model()->findByPk($id);

				$e_vendor_id = $eexam->vendor_id;
				$e_cert_id = $eexam->cert_id;

                $cri =new CDbCriteria();
                $cri->condition="vendor_id=$e_vendor_id AND id != $e_cert_id";
                $Certs = Cert::model()->findAll($cri);
                if ($Certs)
                {
                    $response=array();
                    $response['status']="ok";
                    $response['cert']=$Certs;
                    echo CJSON::encode($response);
                    Yii::app()->end();
                    
                }
            }
        }
      
        
        
        public function actionProcessHot()
        {
            if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
            
            $id= Yii::app()->request->getPost('id');
            $exam = Exam::model()->findByPk($id);
            if($exam->is_hot==1)
            {
                $exam->is_hot=0;
            }
            else
            {
                $exam->is_hot=1;
            }
            $exam->date_updated=date('Y-m-d H:i:s');
            if ($exam->update())
            {
                    $response=array();
                    $response['status']='ok';
                    $response['url']=Yii::app()->createUrl("octa/exam/processhot");
                    $response['date']=date("Y-m-d");
                    echo CJSON::encode($response);
                    Yii::app()->end();
            }
            else
            {
                    $response=array();
                    $response['status']=$exam->getErrors();
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
            $exam= Exam::model()->findByPk($id);
            
            
            if ($exam->vendor->status==0)
            {
                    $response=array();
                    $response['status']='sorry';
                    echo CJSON::encode($response);
                    Yii::app()->end();
                
            }
            
            
            if ($exam->cert->status==0)
            {
                    $response=array();
                    $response['status']='csorry';
                    echo CJSON::encode($response);
                    Yii::app()->end();
                
            }
            
            
            if($exam->status==1)
            {
                $exam->status=0;
            }
            else
            {
                $exam->status=1;
            }
            $exam->date_updated=date('Y-m-d H:i:s');
             if ($exam->update())
                {
                    $response=array();
                    $response['status']='ok';
                    $response['url']=Yii::app()->createUrl("octa/exam/processactive");
                    $response['date']=date("Y-m-d");
                    echo CJSON::encode($response);
                    Yii::app()->end();
                }
                else
                {
                    $response=array();
                    $response['status']=$exam->getErrors();
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
            
           
            $this->redirect(Yii::app()->createUrl("octa/exam"));
            
        }
        
        
        public function actionEnableAll()
        {
             if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
            
            Exam::model()->updateAll(array( 'status' => 1 ));
            
            
            
            //Disabling Exams n Cert whose vendor is disabled//
            
            
            
            $cert= Cert::model()->findAll("status=0");
            
            foreach ($cert as $certs)
            {
                
                Exam::model()->updateAll(array('status'=>0),'cert_id='.$certs->id);
            }
            
            $this->redirect(Yii::app()->createUrl("octa/exam"));
        }
        
        public function actionConfigureUrl()
        {
            $exam= Exam::model()->findAll();
            foreach ($exam as $exams)
            {
                $code = $exams->code;
			   	$url_name=str_replace(" ", "-", trim($code));
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
				$url_name = strtolower($url_name);
				$exams->url = $url_name;
                $exams->update();
            }
            $this->redirect(Yii::app()->createUrl("octa/exam"));
        }
        
        public function actionoffer_banner()
	    {
	        if (!Yii::app()->user->hasState("admin")){          
			    $this->redirect(Yii::app()->createUrl("octa/login"));
			    Yii::app()->end();
		    }
		    
		    if (!empty($_POST)){
    			/*if($model->save()){
    				$this->redirect(Yii::app()->createUrl("octa/exam/addexam",array("msg"=>"1")));
    				Yii::app()->end();      
    			}else{
    				$this->redirect(Yii::app()->createUrl("octa/exam/addexam",array("msg"=>"0")));
    				Yii::app()->end();
    			}*/
    		}else{
    			$cri = new CDbCriteria();
    			$cri->order = "name";
    			$vendor= Vendor::model()->findAll($cri);
    
    			$galleries = Gallery::model()->findAll();
    			$this->render("offer_banner",array("vendor"=>$vendor,"galleries"=>$galleries));
    		}
            
	    }
	    
	    public function actionupload_banner()
	    {
            if (!empty($_FILES["photo"])) {
                try {
                    $post_image = $_FILES["photo"]["name"];
                    if (!empty($post_image)) {
                        $file_ext = substr($post_image, strripos($post_image, '.')); // get file extension
                        $random_number = mt_rand(1000, 9999); // Generate a random 4-digit number
                        $newname = 'banner_' . $random_number . $file_ext;
                        
                        $newpath = Yii::app()->basePath . '/../img/exam/';
                        
                        move_uploaded_file($_FILES["photo"]["tmp_name"], $newpath . $newname);
                        
                        // Update the database with the new file name in a single line
                        Yii::app()->db->createCommand()->update('offer_banner', array('banner' => $newname), 'id=:id', array(':id' => 1));
                        
                        // File move successful, show success message
                        $this->redirect(Yii::app()->createUrl("octa/exam/offer_banner",array("msg"=>"1")));
                        Yii::app()->end();   
                    }
                } catch (Exception $e) {
                    // Handle exceptions here (e.g., log the error or display an error message)
                    $this->redirect(Yii::app()->createUrl("octa/exam/offer_banner",array("msg"=>"0")));
                    Yii::app()->end();  
                }
            }
    		
	    }
        
}
?>