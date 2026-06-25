<?php
require '/home2/octanetw/public_html/protected/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xls;

class UsersController extends CController
{
        public $heading="Users Management";
	public function actionIndex()
	{
              if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
             $cri=new CDbCriteria();
			$cri->order = "id desc";
           //Pagination

			$records = Yii::app()->request->getParam("records");

			if(isset($records)){
				$rpage = $records;
			}else{
				$rpage = 25;
			}

           $count= User::model()->count();
           $pages=new CPagination($count);
           $pages->pageSize=$rpage;
           $pages->applyLimit($cri);
           
           
           $users=  User::model()->findAll($cri);
           $this->render("index",array("user"=>$users,"pages"=>$pages));
	}
        
        public function actionSearchUser()
        {
            //$this->$heading = "User With Purchases";
            
            if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
             $email=$_POST['query'];


			$cri = new CDbCriteria();
			$cri->condition = "email like :email";
			$cri->params = array(":email"=>"%$email%");

             $users =  User::model()->findAll($cri);

             $this->render("searchuser",array("user"=>$users));
        }

		public function actionSubscribe()
        {
            //$this->$heading = "Subscriber";
            
            if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }

			$cri = new CDbCriteria();
            $cri->condition = 'status=1';
			$cri->order ='id desc';
             
             $subscribe =  Subscribe::model()->findAll($cri);
             $this->render("subscribe",array("subscribe"=>$subscribe));
        }

		public function actionDeleteSubscribe()
        {
            
            if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
             
			 $pk = Yii::app()->request->getParam("id");
             $subscribe =  Subscribe::model()->deleteByPk($pk);

             $this->redirect(Yii::app()->createUrl("octa/users/subscribe"));
        }

		public function actionSearchSubscribe()
        {
            
            
            if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
             $email=$_POST['query'];
             $subscribe=  Subscribe::model()->findAll("email='$email'");
             $this->render("subscribe",array("subscribe"=>$subscribe));
        }


        public function actionExamPurchases()
        {
            $this->heading="Users with Exam Purchases Only";
            if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
            $cri=new CDbCriteria();
            $cri->condition="user_id>0 AND status=1 AND (product_type=1 || product_type=2 || product_type=3)";
            
            if(Yii::app()->request->getParam("by") != ""){
                $sort = Yii::app()->request->getParam("sort");
                $by = Yii::app()->request->getParam("by");
                $cri->order=$sort." ".$by;
                
            }else{
                $cri->order="date_added desc";
            }
            
            $cart = Cart::model()->findAll($cri);
            
           $count= Cart::model()->count();

			$records = Yii::app()->request->getParam("records");

			if(isset($records)){
				$rpage = $records;
			}else{
				$rpage = 25;
			}

           $pages=new CPagination($count);
           $pages->pageSize=$rpage;
           $pages->applyLimit($cri);
            
            $this->render("exampurchases",array("cart"=>$cart,"pages"=>$pages));
        } // Exam Purchases
        
        public function actionCartOnly()
        {
            $this->heading="Users with Cart Only";
            if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
            $cri=new CDbCriteria();
            $cri->condition="user_id>0 AND status=0";
            
            if(Yii::app()->request->getParam("by") != ""){
                $sort = Yii::app()->request->getParam("sort");
                $by = Yii::app()->request->getParam("by");
                $cri->order=$sort." ".$by;
                
            }else{
                $cri->order="date_added desc";
            }
            
            $cart = Cart::model()->findAll($cri);
            
           $count= Cart::model()->count();
			

			$records = Yii::app()->request->getParam("records");

			if(isset($records)){
				$rpage = $records;
			}else{
				$rpage = 25;
			}

           $pages=new CPagination($count);
           $pages->pageSize=$rpage;
           $pages->applyLimit($cri);
            
            $this->render("cartonly",array("cart"=>$cart,"pages"=>$pages));
        } // Cart Only
        
        public function actionSearchExamPurchases()
        {
              if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
            
                $query=$_POST['query'];
                $type=$_POST['type'];
                if (strpos($type,"code")!==false)
                {
                     $user = Yii::app()->db->createCommand()
                    ->select('f.*, u.email,u.first_name, u.last_name, e.code, e.name, ct.duration')
                    ->from('final_order f, users u, cart_items ct, exam e')
                    ->where('f.cart_items_id=ct.id AND ct.exam_id=e.id AND e.code=:type AND f.user_id=u.id',array(":type"=>$query))
                    ->queryAll();
            
            $count= Yii::app()->db->createCommand()
                    ->select('Count(*)')
                    ->from('final_order f, users u, cart_items ct, exam e')
                    ->where('f.cart_items_id=ct.id AND ct.exam_id=e.id AND e.code=:type AND f.user_id=u.id',array(":type"=>$query))
                    ->queryScalar();
            $cri = new CDbCriteria();
            $pages=new CPagination($count);
           $pages->pageSize=20;
           $pages->applyLimit($cri);
            
            $this->render("searchexampurchases",array("user"=>$user,"pages"=>$pages));
                }
            
          if (strpos($type,"email")!==false)
                {
                     $user = Yii::app()->db->createCommand()
                    ->select('f.*, u.email,u.first_name, u.last_name, e.code, e.name, ct.duration')
                    ->from('final_order f, users u, cart_items ct, exam e')
                    ->where('f.cart_items_id=ct.id AND ct.exam_id=e.id AND u.email=:type AND f.user_id=u.id',array(":type"=>$query))
                    ->queryAll();
            
            $count= Yii::app()->db->createCommand()
                    ->select('Count(*)')
                    ->from('final_order f, users u, cart_items ct, exam e')
                    ->where('f.cart_items_id=ct.id AND ct.exam_id=e.id AND u.email=:type AND f.user_id=u.id',array(":type"=>$query))
                    ->queryScalar();
            $cri = new CDbCriteria();
            $pages=new CPagination($count);
           $pages->pageSize=20;
           $pages->applyLimit($cri);
            
            $this->render("searchexampurchases",array("user"=>$user,"pages"=>$pages));
                }
           
        }
        
	public function actionProcessActive()
	{
		if (!Yii::app()->user->hasState("admin")){
			$this->redirect(Yii::app()->createUrl("octa/login"));
			Yii::app()->end();
		}

		$id = Yii::app()->request->getPost('id');
		$user = User::model()->findByPk($id);

        if($user->status==1){
			$user->status=0;
			Cart::model()->updateAll(array( 'status' => 0 ), 'user_id='.$id );
			Order::model()->updateAll(array( 'status' => 0 ), 'user_id='.$id );
		}else{
			$user->status=1;
			Cart::model()->updateAll(array( 'status' => 1 ), 'user_id='.$id );
			Order::model()->updateAll(array( 'status' => 1 ), 'user_id='.$id );
		}
		
		$user->date_updated=date('Y-m-d H:i:s');
		
		if($user->update()){
			$response=array();
			$response['status']='ok';
			$response['url']=Yii::app()->createUrl("octa/users/processactive");
			$response['date']=date("Y-m-d");
			echo CJSON::encode($response);
			Yii::app()->end();
		}else{
			$response=array();
			$response['status']=$vendor->getErrors();
			echo CJSON::encode($response);
			Yii::app()->end();
		}
	}
        
        public function actionVendorPurchases()
        {
              if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
            $cri=new CDbCriteria();
            //Query for users with Active exams only
            //select f.id, f.payment_type, u.email, ct.exam_id, e.code from final_order f, users u, cart_items ct, exam e where f.cart_items_id=ct.id AND ct.exam_id=e.id AND f.processed=1 AND f.user_id=u.id
            $user = Yii::app()->db->createCommand()
                    ->select('f.*, u.email,u.first_name, u.last_name, v.name, ct.duration')
                    ->from('final_order f, users u, cart_items ct, vendor v')
                    ->where('f.cart_items_id=ct.id AND ct.vendor_id=v.id AND f.user_id=u.id')
                    ->queryAll();
            
            $count= Yii::app()->db->createCommand()
                    ->select('f.*, u.email,u.first_name, u.last_name, v.name, ct.duration')
                    ->from('final_order f, users u, cart_items ct, vendor v')
                    ->where('f.cart_items_id=ct.id AND ct.vendor_id=v.id AND f.user_id=u.id')
                    ->queryScalar();
            
            $pages=new CPagination($count);
           $pages->pageSize=20;
           $pages->applyLimit($cri);
            
            $this->render("vendorpurchases",array("user"=>$user,"pages"=>$pages));
        }
        
        
         public function actionSearchVendorPurchases()
        {
              if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
                $query=$_POST['query'];
                $type=$_POST['type'];
                if (strpos($type,"name")!==false)
                {
                     $user = Yii::app()->db->createCommand()
                     ->select('f.*, u.email,u.first_name, u.last_name, v.name, ct.duration')
                    ->from('final_order f, users u, cart_items ct, vendor v')
                    ->where('f.cart_items_id=ct.id AND ct.vendor_id=v.id AND v.name=:type AND f.user_id=u.id',array(":type"=>$query))
                    ->queryAll();
            
                    $count= Yii::app()->db->createCommand()
                            ->select('Count(*)')
                            ->from('final_order f, users u, cart_items ct, vendor v')
                            ->where('f.cart_items_id=ct.id AND ct.vendor_id=v.id AND v.name=:type AND f.user_id=u.id',array(":type"=>$query))
                            ->queryScalar();
                    $cri = new CDbCriteria();
                    $pages=new CPagination($count);
                   $pages->pageSize=20;
                   $pages->applyLimit($cri);

                    $this->render("searchvendorpurchases",array("user"=>$user,"pages"=>$pages));
                }
                  if (strpos($type,"email")!==false)
                {
                     $user = Yii::app()->db->createCommand()
                    ->select('f.*, u.email,u.first_name, u.last_name, v.name, ct.duration')
                    ->from('final_order f, users u, cart_items ct, vendor v')
                    ->where('f.cart_items_id=ct.id AND ct.vendor_id=v.id AND u.email=:type AND f.user_id=u.id',array(":type"=>$query))
                    ->queryAll();
            
            $count= Yii::app()->db->createCommand()
                    ->select('Count(*)')
                    ->from('final_order f, users u, cart_items ct, vendor v')
                    ->where('f.cart_items_id=ct.id AND ct.vendor_id=v.id AND u.email=:type AND f.user_id=u.id',array(":type"=>$query))
                    ->queryScalar();
            $cri = new CDbCriteria();
            $pages=new CPagination($count);
           $pages->pageSize=20;
           $pages->applyLimit($cri);
            
            $this->render("searchvendorpurchases",array("user"=>$user,"pages"=>$pages));
                }
                
                
        }
        
         public function actionCertPurchases()
        {
               if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
            $cri=new CDbCriteria();
            //Query for users with Active exams only
            //select f.id, f.payment_type, u.email, ct.exam_id, e.code from final_order f, users u, cart_items ct, exam e where f.cart_items_id=ct.id AND ct.exam_id=e.id AND f.processed=1 AND f.user_id=u.id
            $user = Yii::app()->db->createCommand()
                    ->select('f.*, u.email,u.first_name, u.last_name, ce.name, ct.duration')
                    ->from('final_order f, users u, cart_items ct, certification ce')
                    ->where('f.cart_items_id=ct.id AND ct.cert_id=ce.id AND f.user_id=u.id')
                    ->queryAll();
            
            $count= Yii::app()->db->createCommand()
                    ->select('f.*, u.email,u.first_name, u.last_name, ce.name, ct.duration')
                    ->from('final_order f, users u, cart_items ct, certification ce')
                    ->where('f.cart_items_id=ct.id AND ct.cert_id=ce.id AND f.user_id=u.id')
                    ->queryScalar();
            
            $pages=new CPagination($count);
           $pages->pageSize=20;
           $pages->applyLimit($cri);
            
            $this->render("certpurchases",array("user"=>$user,"pages"=>$pages));
        }
        
        
         public function actionSearchCertPurchases()
        {
               if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
            
                $query=$_POST['query'];
                $type=$_POST['type'];
                if (strpos($type,"name")!==false)
                {
                     $user = Yii::app()->db->createCommand()
                     ->select('f.*, u.email,u.first_name, u.last_name, c.name, ct.duration')
                    ->from('final_order f, users u, cart_items ct, certification c')
                    ->where('f.cart_items_id=ct.id AND ct.cert_id=c.id AND c.name=:type AND f.user_id=u.id',array(":type"=>$query))
                    ->queryAll();
            
                    $count= Yii::app()->db->createCommand()
                            ->select('Count(*)')
                            ->from('final_order f, users u, cart_items ct, certification c')
                            ->where('f.cart_items_id=ct.id AND ct.cert_id=c.id AND c.name=:type AND f.user_id=u.id',array(":type"=>$query))
                            ->queryScalar();
                    $cri = new CDbCriteria();
                    $pages=new CPagination($count);
                   $pages->pageSize=20;
                   $pages->applyLimit($cri);

                    $this->render("searchcertpurchases",array("user"=>$user,"pages"=>$pages));
                }
                  if (strpos($type,"email")!==false)
                {
                     $user = Yii::app()->db->createCommand()
                    ->select('f.*, u.email,u.first_name, u.last_name, c.name, ct.duration')
                    ->from('final_order f, users u, cart_items ct, certification c')
                    ->where('f.cart_items_id=ct.id AND ct.cert_id=c.id AND u.email=:type AND f.user_id=u.id',array(":type"=>$query))
                    ->queryAll();
            
            $count= Yii::app()->db->createCommand()
                    ->select('Count(*)')
                    ->from('final_order f, users u, cart_items ct, certification c')
                    ->where('f.cart_items_id=ct.id AND ct.cert_id=c.id AND u.email=:type AND f.user_id=u.id',array(":type"=>$query))
                    ->queryScalar();
            $cri = new CDbCriteria();
            $pages=new CPagination($count);
           $pages->pageSize=20;
           $pages->applyLimit($cri);
            
            $this->render("searchcertpurchases",array("user"=>$user,"pages"=>$pages));
                }
                
                
        }
        
        
        public function actionAddUser()
        {
              if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
             if (!empty($_POST))
            {
                // check for duplicate
                $email=$_POST['email'];
                $cri= new CDbCriteria();
                $cri->condition="email='$email'";
                $check=  User::model()->findAll($cri);
                if ($check)
                {
                $this->redirect(Yii::app()->createUrl("octa/users/adduser",array("user"=>"already")));
                Yii::app()->end();
                }
                else
                {
                    $model=  new User;
                    $model->first_name=$_POST['first_name'];
                    $model->last_name=$_POST['last_name'];
                    $model->email=$_POST['email'];
                    $model->password=$_POST['password'];
                    $model->status=1;
                    $model->date_added= date('Y-m-d');

                    if ($model->save())
                    {
                        $this->redirect(Yii::app()->createUrl("octa/users"));
                		Yii::app()->end();
                    }
                }
                    
            }
            else
            {
                $this->render("adduser");
            }
        }
        
        public function actionEditUser()
        {
              if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
             if (!empty($_POST))
            {
                $id=$_GET['id'];
                $model=  User::model()->findByPk($id);
                
                
                 $model->first_name=$_POST['first_name'];
                    $model->last_name=$_POST['last_name'];
                   // $model->email=$_POST['email'];
                    $model->password=$_POST['password'];
                    $model->status=1;
                    $model->date_updated= date('Y-m-d');
                    
                     if ($model->update())
                {
                    $response=array();
                    $response['status']='ok';
                    echo CJSON::encode($response);
                    Yii::app()->end();
                }
                else
                {
                    $response=array();
                    $response['status']=$model->getErrors();
                    echo CJSON::encode($response);
                    Yii::app()->end();
                }
            }
            if (isset($_GET['id']))
            {
                $id= $_GET['id'];
                $model=User::model()->findByPk($id);
                $this->render("edituser",array("user"=>$model));
            }
        }
        
        public function actionDeleteUser()
        {
              if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
             if(!empty($_GET)){
            $id=$_GET['id'];
            
            $del=User::model()->deleteByPk($id);
            
            
            if($del>0)
            {
	            $this->redirect(Yii::app()->createUrl("octa/users",array("delete"=>"success")));
	            Yii::app()->end();
            }
            else
            {
            	$this->redirect(Yii::app()->createUrl("octa/users",array("delete"=>"fail")));
            Yii::app()->end();
            }
                
            }
        }

        public function actionExportUsers()
        {
            $user = User::model()->findAll();
        
            // Create new Spreadsheet object
            $spreadsheet = new Spreadsheet();
            
            // Set document properties
            $spreadsheet->getProperties()
                ->setCreator("OctaNetworks")
                ->setLastModifiedBy("OctaNetworks")
                ->setTitle("OctaNetworks Users")
                ->setSubject("OctaNetworks Users")
                ->setDescription("OctaNetworks Users")
                ->setKeywords("OctaNetworks")
                ->setCategory("OctaNetworks Users");
        
            // Set active sheet and column titles
            $sheet = $spreadsheet->getActiveSheet();
            $sheet->setCellValue('A1', "User Name")
                ->setCellValue('B1', "Email")
                ->setCellValue('C1', "Password")
                ->setCellValue('D1', "Date");
        
            // Add user data
            $i = 2;
            foreach ($user as $users) {
                $sheet->setCellValue('A' . $i, $users->first_name . " " . $users->last_name)
                    ->setCellValue('B' . $i, $users->email)
                    ->setCellValue('C' . $i, $users->password)
                    ->setCellValue('D' . $i, Yii::app()->dateFormatter->format('dd-MMM-y', $users->date_added));
                $i++;
            }
        
            // Rename worksheet
            $sheet->setTitle('OctaNetworks users');
        
            // Set active sheet index to the first sheet, so Excel opens this as the first sheet
            $spreadsheet->setActiveSheetIndex(0);
        
            // Save the file
            $filename = 'OctaNetworks Users ' . date('Y-m-d');
            header('Content-Type: application/vnd.ms-excel');
            header('Content-Disposition: attachment;filename="' . $filename . '.xls"');
            header('Cache-Control: max-age=0');
        
            $writer = new Xls($spreadsheet);
            $writer->save('php://output');
        
            exit();
        }

/*
		public function actionExportUsers()
		{
				$user=User::model()->findAll();
				$objPHPExcel = new PHPExcel();
				
				 // Set document properties
        $objPHPExcel->getProperties()->setCreator("OctaNetworks")
             ->setLastModifiedBy("OctaNetworks")
             ->setTitle("OctaNetworks Users")
             ->setSubject("OctaNetworks Users")
             ->setDescription("OctaNetworks Users")
             ->setKeywords("OctaNetworks")
             ->setCategory("OctaNetworks Users");        
         $objPHPExcel->setActiveSheetIndex(0)
                 ->setCellValue('A1', "User Name")
				->setCellValue('B1', "Email")
				->setCellValue('C1', "Password")
				->setCellValue('D1', "Date");
                 
                 
        // Add some data
        $i=2;
       
        foreach ($user as $users)
        {
         
            $objPHPExcel->setActiveSheetIndex(0)
                            ->setCellValue('A'.$i, $users->first_name." ".$users->last_name)
                            ->setCellValue('B'.$i, $users->email)
							->setCellValue('C'.$i, $users->password)
							->setCellValue('D'.$i, Yii::app()->dateFormatter->format('dd-MMM-y',$users->date_added));
        
            $i++;
          
            
           
        }
        
        
       
       
        
        // Rename worksheet
        $objPHPExcel->getActiveSheet()->setTitle('OctaNetworks users');
        
        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $objPHPExcel->setActiveSheetIndex(0);
        
        // Save a xls file
        $filename = 'OctaNetworks Users '.date('Y-m-d');
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