<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


require_once Yii::getPathOfAlias('webroot').'/customfiles/mailfunctions.php';

require '/home2/octanetw/public_html/protected/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xls;

class OrderController extends CController
{
        public $heading="Cart Management";
        
        public function actionIndex()
        {
              if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }


			$dcounter = Yii::app()->request->getPost("dcounter");
			if(isset($dcounter)){
				for($i=1; $i<=$dcounter; $i++)
				{ 
					$nm = "chkbox".$i;
					
					$cartI =  Yii::app()->request->getPost($nm);

					if(isset($cartI)){
						Cart::model()->deleteByPk($cartI);
					}
				}
			}



            $cri=new CDbCriteria();
            $cri->condition="status=0 || status = -1";
			$cri->order="id desc";


            //Pagination
          
           $count=  Cart::model()->count($cri);

			$records = Yii::app()->request->getParam("records");

			if(isset($records)){
				$rpage = $records;
			}else{
				$rpage = 25;
			}

           $pages=new CPagination($count);
           $pages->pageSize=$rpage;
           $pages->applyLimit($cri);
            
            $carts=  Cart::model()->findAll($cri);
            $this->render("index",array("cart"=>$carts,"pages"=>$pages));
        }

		public function actionSendPEmail(){

            if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }

			$id= Yii::app()->request->getParam("id");
			$cid= Yii::app()->request->getParam("cid");

			$cart_D = Cart::model()->findByPk($cid);

			$spram[1] = $cart_D->user->first_name;
			$spram[2] =  $cart_D->user->email;
			$spram[3] = $cart_D->exam->code;

			email_sendpdfpromotion($spram);

			$msg = "Success";


			$this->redirect(Yii::app()->createUrl("octa/order/orderdetail",array("id"=>$id,"msg"=>$msg)));

					


		}

		public function actionNewOrder(){
			$this->heading = "New Order";
            if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }

			$msg = "";

			 if (!empty($_POST)){


				$email = $id= Yii::app()->request->getPost("email");
				$pid = $id= Yii::app()->request->getPost("p_id");
				$ptype = $id= Yii::app()->request->getPost("p_type");
				$pmethod = $id= Yii::app()->request->getPost("pmethod");
				$tid = $id= Yii::app()->request->getPost("tid");
				$netamount = $id= Yii::app()->request->getPost("netamount");

				$cri= new CDbCriteria();
             	$cri->condition="pri_type = $ptype";
				$productDetail = ProductPrices::model()->find($cri);

				$discount = $productDetail->pri_value - $netamount;
				$duration = $productDetail->pri_duration;

				$neworder = new Order();
				$neworder->transaction_id = $tid;
				$neworder->pmethod = $pmethod;
				$neworder->net_price = $netamount;
				$neworder->coupon_id = 0;
				$neworder->discount = $discount;
				$neworder->user_id = $email;
				$neworder->ip = Yii::app()->request->getUserHostAddress();
				$neworder->date_added = Yii::app()->params['mydate'];
				
				$expiry = date('Y-m-d H:i:s', strtotime( '+'.$duration.' months' ) );

				$neworder->expiry_date = $expiry;
				$neworder->status = 1;
				$neworder->save();
	
				$order_id = $neworder->id;

				//New Cart 
				
				$newcart = new Cart();
				$newcart->user_id = $email;
				$newcart->order_id = $order_id;
				$newcart->session_id = "manual_assign";
			
				if($pid == 'u'){
					$mpid = 0;
				}else{
					$mpid = $pid;
				}

				$newcart->product_id = $mpid;
				$newcart->product_type = $ptype;

				$newcart->duration = $duration;
				$newcart->price = $productDetail->pri_value;
				$newcart->quantity = 1;
				$newcart->status = 1;
				$newcart->ip = Yii::app()->request->getUserHostAddress();
				$newcart->date_added = Yii::app()->params['mydate'];

				$newcart->save();

				$cartid = $newcart->id;


				$msg = "Order Successfully Assign";

			}

			


			
			$this->render("neworder",array("msg"=>$msg));

		}
        
        public function actionFinalOrders()
        {
            $this->heading = "Final Order Management";
            if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }

            $cri=new CDbCriteria();
            $cri->order=" id DESC";
            
            //Pagination
           $count=  Order::model()->count();

			$records = Yii::app()->request->getParam("records");

			if(isset($records)){
				$rpage = $records;
			}else{
				$rpage = 25;
			}

           $pages=new CPagination($count);
           $pages->pageSize=$rpage;
           $pages->applyLimit($cri);
            
            $carts= Order::model()->findAll($cri);
            $this->render("finalorders",array("order"=>$carts,"pages"=>$pages));
        }
		
		
        
        public function actionUnlimitedOrders()
        {
            $this->heading = "Final Order Management";
            if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }

            $cri=new CDbCriteria();
            $cri->order=" id DESC";

            
            $carts = Order::model()->findAll($cri);
            $this->render("unlimitedorders",array("order"=>$carts));
        }

		public function actionEditOrder()
        {
            $this->heading = "Edit Order";
            if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
           
            $this->render("editorder");
        }

		public function actionUpdateExpiry()
        {
            $this->heading = "Update Expiry";
            if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
           

			$id = Yii::app()->request->getPost("id");
			$expiry_date = Yii::app()->request->getPost("expiry_date");

			$model =  Order::model()->findByPk($id);

			$model->expiry_date = $expiry_date;
			$model->pmethod = Yii::app()->request->getPost("pmethod");
			$model->transaction_id = Yii::app()->request->getPost("tid");
			$model->net_price = Yii::app()->request->getPost("netamount");

			if($model->update())
            {

				$msg = "Update Successfully";
				$this->render("editorder",array("msg"=>$msg));
			}

        }


        public function actionOrderDetail()
        {
            $id = Yii::app()->request->getParam("id");
            $this->heading = "Order Detail for ".$id;
            if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
            
            
            
            if(!empty($id)){
                
              $cri= new CDbCriteria();
              $cri->condition="order_id=:order_id";
              $cri->params=array(":order_id"=>$id);
              
              $carts=  Cart::model()->findAll($cri);
              
              $this->render("orderdetail",array("cart"=>$carts));
            }
        }


        public function actionProcessFinalOrder()
        {
              if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
            $id= Yii::app()->request->getPost("id");
            $cri=new CDbCriteria();
            $cri->condition="id=$id";
            $final= Order::model()->find($cri);
            
            if($final->status>0)
            {
                $final->status=0;
            }
            else
            {
                $final->status=1;
            }
            if ($final->update())
                {
                    $response=array();
                    $response['status']='ok';
                    echo CJSON::encode($response);
                    Yii::app()->end();
                }
                else
                {
                    $response=array();
                    $response['status']=$final->getErrors();
                    echo CJSON::encode($response);
                    Yii::app()->end();
                }
            
            
        }
        
        public function actionSearchCart()
        {
            if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
			
			/////////////////////////////////
			$dcounter = Yii::app()->request->getPost("dcounter");
			if(isset($dcounter)){
				for($i=1; $i<=$dcounter; $i++)
				{ 
					$nm = "chkbox".$i;
					
					$cartI =  Yii::app()->request->getPost($nm);

					if(isset($cartI)){
						Cart::model()->deleteByPk($cartI);
					}
				}
				$this->redirect(Yii::app()->createUrl("octa/order"));
			}
			/////////////////////////////////
			
            if (!empty($_POST))
            {
                $query = Yii::app()->request->getPost("query");
                $type = Yii::app()->request->getPost("type");
                   
				$cri=new CDbCriteria();
                $cri->condition="email='$query'";
                $user = User::model()->find($cri);
                if ($user)
                {
					$cri->condition="user_id=$user->id AND (status=0 || status = -1)";
					if(Cart::model()->exists($cri)){
						$cart = Cart::model()->findAll($cri);
						$no="";
						$this->render("searchcart",array("cart"=>$cart,"noresult"=>$no));
					}else{
						$no="No Result Found";
						$this->render("searchcart",array("noresult"=>$no));
					}
				}else{
					$no="Your Search does not result any result";
					$this->render("searchcart",  array("noresult"=>$no));
				}
            }else{
            	$this->redirect(Yii::app()->createUrl("octa/order"));
            }
        }
        
        
        public function actionMAssign()
        {
            if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
            
            if(!empty($_POST)){
                
                $cart = Cart::model()->findByPk(Yii::app()->request->getPost("id"));
                
                $transaction_id = Yii::app()->request->getPost("tid");
                $pmethod = Yii::app()->request->getPost("pmethod");
				$net_price = str_replace("$","",Yii::app()->request->getPost("netamount"));
                $totalAmount = $cart->price;

				$discountr = $totalAmount - $net_price;

                $user_id = $cart->user_id;
                $ip = $cart->ip;
                $date_added = Yii::app()->params['mydate'];
                $duration = $cart->duration;
                $expiry_date = date('Y-m-d H:i:s', strtotime( '+'.$duration.' months' ) );
                
                $order = new Order();
                
                $order->transaction_id = $transaction_id;
                $order->pmethod = $pmethod;
                $order->net_price = $net_price;
                $order->discount = $discountr;
                $order->user_id = $user_id;
                $order->ip = $ip;
                $order->date_added = $date_added;
                $order->expiry_date = $expiry_date;
                $order->status=1;
                
                    if ($order->save())
                    {
                        $order_id = $order->id;
                        
                       

							$cri1 = new CDbCriteria();
                            $cri1->condition="id=$cart->id AND (status=0 || status = -1)";
                            Cart::model()->updateAll(array("order_id"=>$order_id,"status"=>1),$cri1);

                            
                            $this->redirect(Yii::app()->createUrl("octa/order/finalorders"));
                        
                        
                    }
                
            }
            

			$id = Yii::app()->request->getParam("id");
            if (!empty($id))
            {
                $cartid = Yii::app()->request->getParam("id");
                $cri=new CDbCriteria();
                $cart = Cart::model()->findByPk($cartid);
                
                $this->render("massign",array("cart"=>$cart));
            }
            
            
            
        }
        
        
        public function actionSearchFinal()
        {
              if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
            if (!empty($_POST))
            {
				
	
                $query = Yii::app()->request->getParam("query");
                $type = Yii::app()->request->getParam("type");
                if (strpos($type,"id")!==false)
                {

					

                    $cri=new CDbCriteria();
                    $cri->condition="id='$query'";
            
                    //Pagination
                   
            
                    $carts= Order::model()->findAll($cri);
                    if ($carts)
                    {
                        $no="";
                    $this->render("searchfinal",array("cart"=>$carts,"noresult"=>$no));
                    }
                   else
                    {
                        $no="Your Search does not result any result";
                        $this->render("searchfinal",  array("noresult"=>$no));
                    }
                }
                else
                {
					
                    $cri=new CDbCriteria();
                    $cri->condition="email='$query'";
                    $user=  User::model()->find($cri);
                    if ($user)
                    {
                        $cri->condition="user_id=$user->id";
                        $orders= Order::model()->findAll($cri);
                        $no="";
                        $this->render("searchfinal",array("order"=>$orders,"noresult"=>$no));
                    }
                    else
                    {
						
						
                        $no="Your Search does not result any result";
                        $this->render("searchfinal",  array("noresult"=>$no));
                    }
                    
                }
                  
            }
            else
            {
            $cri=new CDbCriteria();
            $cri->order=" id DESC";
            
            //Pagination
           $count=  FinalOrder::model()->count();
           $pages=new CPagination($count);
           $pages->pageSize=20;
           $pages->applyLimit($cri);
            
            $carts= FinalOrder::model()->findAll($cri);
            $this->render("finalorders",array("cart"=>$carts,"pages"=>$pages));
            }
        }

        public function actionExport()
        {
            $spreadsheet = new Spreadsheet();
        
            // Set document properties
            $spreadsheet->getProperties()->setCreator("OctaNetworks")
                ->setLastModifiedBy("OctaNetworks")
                ->setTitle("OctaNetworks Sales Record")
                ->setSubject("OctaNetworks Sales Record")
                ->setDescription("OctaNetworks Sales Record")
                ->setKeywords("OctaNetworks")
                ->setCategory("OctaNetworks Sales Record");
        
            $sheet = $spreadsheet->getActiveSheet();
            $sheet->setCellValue('A1', "User Email")
                  ->setCellValue('B1', "Product Detail")
                  ->setCellValue('C1', "Vendor")
                  ->setCellValue('D1', "Transaction ID")
                  ->setCellValue('E1', "Net Amount")
                  ->setCellValue('F1', "Order Date")
                  ->setCellValue('G1', "Status");
        
            // Add data
            $i = 2;
            $cri = new CDbCriteria();
            $cri->condition = "status=1";
            $order = Order::model()->findAll($cri);
            foreach ($order as $orders) {
                $cri1 = new CDbCriteria();
                $cri1->condition = "order_id = $orders->id AND user_id = $orders->user_id AND status=1";
                $cartd = Cart::model()->findAll($cri1);
        
                $productDetail = '';
                $vendorDetail = '';
                foreach ($cartd as $cartss) {
                    $myptype = $cartss->product_type;
                    $detail = ProductPrices::model()->findByPk($myptype);
        
                    if ($myptype == 1 || $myptype == 2 || $myptype == 3) {
                        if (isset($cartss->exam->code)) {
                            $vendorDetail .= $cartss->exam->vendor->name;
                            $productDetail .= $cartss->exam->code . " (" . $detail->detail . ")<br>";
                        } else {
                            $vendorDetail .= "Exam Deleted";
                            $productDetail .= "(" . $cartss->product_id . ") " . $detail->detail . " ";
                        }
                    } else {
                        $vendorDetail .= "Unlimited";
                        $productDetail .= $detail->detail . "<br>";
                    }
                }
        
                $ostatus = ($orders->status == 0) ? "Disable" : ($orders->expiry_date >= Yii::app()->params['mydate'] ? "Active" : "Expire");
        
                $sheet->setCellValue('A' . $i, $orders->user->email)
                      ->setCellValue('B' . $i, $productDetail)
                      ->setCellValue('C' . $i, $vendorDetail)
                      ->setCellValue('D' . $i, $orders->transaction_id)
                      ->setCellValue('E' . $i, $orders->net_price)
                      ->setCellValue('F' . $i, Yii::app()->dateFormatter->format('dd-MMM-y', $orders->date_added))
                      ->setCellValue('G' . $i, $ostatus);
        
                $i++;
            }
        
            // Rename worksheet
            $spreadsheet->getActiveSheet()->setTitle('OctaNetworks Sales Record');
            $spreadsheet->setActiveSheetIndex(0);
        
            // Save as xls file
            $filename = 'OctaNetworks Sales Record ' . date('Y-m-d');
            header('Content-Type: application/vnd.ms-excel');
            header('Content-Disposition: attachment;filename="' . $filename . '.xls"');
            header('Cache-Control: max-age=0');
        
            $writer = new Xls($spreadsheet);
            $writer->save('php://output');
            exit();
        }
        
        public function actionExportCart()
        {
            if (!Yii::app()->user->hasState("admin")) {
                $this->redirect(Yii::app()->createUrl("octa/login"));
                Yii::app()->end();
            }
        
            $spreadsheet = new Spreadsheet();
        
            // Set document properties
            $spreadsheet->getProperties()->setCreator("OctaNetworks")
                ->setLastModifiedBy("OctaNetworks")
                ->setTitle("OctaNetworks Cart Listing")
                ->setSubject("OctaNetworks Cart Listing")
                ->setDescription("OctaNetworks Cart Listing")
                ->setKeywords("OctaNetworks")
                ->setCategory("OctaNetworks Cart Listing");
        
            $sheet = $spreadsheet->getActiveSheet();
            $sheet->setCellValue('A1', "User Email")
                  ->setCellValue('B1', "Product Code")
                  ->setCellValue('C1', "Product Type")
                  ->setCellValue('D1', "Duration")
                  ->setCellValue('E1', "Price")
                  ->setCellValue('F1', "Date")
                  ->setCellValue('G1', "IP");
        
            // Add data
            $i = 2;
            $cri = new CDbCriteria();
            $cri->condition = "status=0 || status = -1";
            $cri->order = "id desc";
            $cart = Cart::model()->findAll($cri);
        
            foreach ($cart as $carts) {
                if (!empty($carts->user->email)) {
                    $ptype = $carts->product_type;
                    $dur = $carts->duration;
        
                    if (!empty($carts->exam->code)) {
                        $cartcode = $carts->exam->code;
                        $cartdetl = $carts->productprice->detail;
                    } else {
                        $cartcode = "Unlimited";
                        $cartdetl = $carts->productprice->detail;
                        $cartdetl = str_replace("Unlimited ", "", $cartdetl);
                        $cartprt = explode(" for ", $cartdetl);
                        $cartdetl = $cartprt[0];
                    }
        
                    $duration = $carts->duration . " Months";
        
                    $sheet->setCellValue('A' . $i, $carts->user->email)
                          ->setCellValue('B' . $i, $cartcode)
                          ->setCellValue('C' . $i, $cartdetl)
                          ->setCellValue('D' . $i, $duration)
                          ->setCellValue('E' . $i, $carts->price)
                          ->setCellValue('F' . $i, Yii::app()->dateFormatter->format('dd-MMM-y', $carts->date_added))
                          ->setCellValue('G' . $i, $carts->ip);
                    $i++;
                }
            }
        
            // Rename worksheet
            $spreadsheet->getActiveSheet()->setTitle('info');
            $spreadsheet->setActiveSheetIndex(0);
        
            // Save as xls file
            $exclname = "Cart-Listing_" . Yii::app()->params['mydate'];
            $filename = $exclname;
            header('Content-Type: application/vnd.ms-excel');
            header('Content-Disposition: attachment;filename="' . $filename . '.xls"');
            header('Cache-Control: max-age=0');
        
            $writer = new Xls($spreadsheet);
            $writer->save('php://output');
            exit();
        }

/*
	public function actionExport()
	{
		
             $objPHPExcel = new PHPExcel();

        // Set document properties
        $objPHPExcel->getProperties()->setCreator("OctaNetworks")
             ->setLastModifiedBy("OctaNetworks")
             ->setTitle("OctaNetworks Sales Record")
             ->setSubject("OctaNetworks Sales Record")
             ->setDescription("OctaNetworks Sales Record")
             ->setKeywords("OctaNetworks")
             ->setCategory("OctaNetworks Sales Record");        
         $objPHPExcel->setActiveSheetIndex(0)
                 ->setCellValue('A1', "User Email")
				 ->setCellValue('B1', "Product Detail")
				 ->setCellValue('C1', "Vendor")
				 ->setCellValue('D1', "Transaction ID")
				 ->setCellValue('E1', "Net Amount")
				 ->setCellValue('F1', "Order Date")
				 ->setCellValue('G1', "Status");
                 
                 
        // Add some data
        $i=2;
		$cri=new CDbCriteria();
        $cri->condition="status=1";
        $order = Order::model()->findAll($cri);
        foreach ($order as $orders)
        {
			
			$cri1 = new CDbCriteria();
            $cri1->condition="order_id = $orders->id AND user_id = $orders->user_id AND status=1";
            $cartd = Cart::model()->findAll($cri1);
			
			$productDetail = '';
			$vendorDetail = '';
			foreach ($cartd as $cartss){ 
	
				$myptype = $cartss->product_type;

				$detail = ProductPrices::model()->findByPk($myptype);

				if($myptype == 1 || $myptype == 2 || $myptype == 3){

					if(isset($cartss->exam->code)){
						$vendorDetail .= $cartss->exam->vendor->name;
						$productDetail .= $cartss->exam->code." (".$detail->detail.")<br>";
					}else{
						$vendorDetail .= "Exam Deleted";
						$productDetail .= "(".$cartss->product_id.") ".$detail->detail." ";
					}


				}else{
					$vendorDetail .= "Unlimited";
					$productDetail .= $detail->detail."<br>";
		
				}

			}


			if($orders->status == 0){

				$ostatus = "Disable";

			}else{

				if($orders->expiry_date >= Yii::app()->params['mydate']){
					$ostatus = "Active";
				}else{
					$ostatus = "Expire";
				}

			}
		
          
            $objPHPExcel->setActiveSheetIndex(0)
                            ->setCellValue('A'.$i, $orders->user->email)
							->setCellValue('B'.$i, $productDetail)
							->setCellValue('C'.$i, $vendorDetail)
							->setCellValue('D'.$i, $orders->transaction_id)
							->setCellValue('E'.$i, $orders->net_price)
							->setCellValue('F'.$i, Yii::app()->dateFormatter->format('dd-MMM-y',$orders->date_added))
							->setCellValue('G'.$i, $ostatus);
                            
                            
            $i++;
          
            
           
        }
        
        
       
       
        
        // Rename worksheet
        $objPHPExcel->getActiveSheet()->setTitle('OctaNetworks Sales Record');
        
        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $objPHPExcel->setActiveSheetIndex(0);
        
        // Save a xls file
        $filename = 'OctaNetworks Sales Record '.date('Y-m-d');
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

	public function actionExportCart()
		{
            if (!Yii::app()->user->hasState("admin"))
            {          
                $this->redirect(Yii::app()->createUrl("octa/login"));
                Yii::app()->end();
            }

          $objPHPExcel = new PHPExcel();

        // Set document properties
        $objPHPExcel->getProperties()->setCreator("OctaNetworks")
             ->setLastModifiedBy("OctaNetworks")
             ->setTitle("OctaNetworks Cart Listing")
             ->setSubject("OctaNetworks Cart Listing")
             ->setDescription("OctaNetworks Cart Listing")
             ->setKeywords("OctaNetworks")
             ->setCategory("OctaNetworks Cart Listing");        
         $objPHPExcel->setActiveSheetIndex(0)
                 ->setCellValue('A1', "User Email")
                 ->setCellValue('B1', "Product Code")
                 ->setCellValue('C1', "Product Type")
                 ->setCellValue('D1', "Duration")
                 ->setCellValue('E1', "Price")
                 ->setCellValue('F1', "Date")
                 ->setCellValue('G1', "IP");
                 
        // Add some data
        $i=2;
		$cri=new CDbCriteria();
        $cri->condition="status=0 || status = -1";
		$cri->order="id desc";
		
        $cart= Cart::model()->findAll($cri);
        
            foreach ($cart as $carts)
            {
            	if(!empty($carts->user->email)){
					
					
						$ptype = $carts->product_type;
						$dur = $carts->duration;

						if(!empty($carts->exam->code)){
							$cartcode = $carts->exam->code;
							$cartdetl = $carts->productprice->detail;
						}else{
							$cartcode = "Unlimited";
							$cartdetl = $carts->productprice->detail;
							$cartdetl = str_replace("Unlimited ","",$cartdetl);
							$cartprt = explode(" for ",$cartdetl);
							$cartdetl = $cartprt[0];
						}
						
						$duration = $carts->duration." Months";
					
					$objPHPExcel->setActiveSheetIndex(0)
					->setCellValue('A'.$i, $carts->user->email)
					->setCellValue('B'.$i, $cartcode)
					->setCellValue('C'.$i, $cartdetl)
					->setCellValue('D'.$i, $duration)
					->setCellValue('E'.$i, $carts->price)
					->setCellValue('F'.$i, Yii::app()->dateFormatter->format('dd-MMM-y',$carts->date_added))
					->setCellValue('G'.$i, $carts->ip);
					$i++;
				}
            }
            
            
            
           
        
        
        
		
		$exclname = "Cart-Listing_".Yii::app()->params['mydate'];
     
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

}