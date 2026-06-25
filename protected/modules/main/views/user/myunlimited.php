<?php $usrpg = "myunlimited"; ?>




    <section id="content">
    	<div class="container">
           <div class="row">
         <?php include 'accountmenu.php'; ?>

<!-- Content -->
<div class="col-sm-9">
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="vtab1">
            <div class = "panel panel-default" style="padding-top: 15px;">
                
                
<?php if(!empty(Yii::app()->session['msg'])){ ?>
<div class="col-md-12 alert alert-danger" role="alert" style="text-align: center; font-size: 22px; font-weight: bold; margin: 5px 0px;"><?=Yii::app()->session['msg']?></div>
<?php 
Yii::app()->session['msg'] = "";
} ?>



 <table class="table table-bordered table-hover">
                
                <thead>
                  <tr class=" alert-info">
    <th>Sr: #</th>
     <th>Exam Code</th>
    <th>Exam Name</th>
    <th colspan="2" class="text-center">PDF/Engine</th>
    </tr>
                </thead>
                
                <tbody>

  
                                        
 <?php 

$user_id = Yii::app()->user->getState('id');
$counter=0; foreach($user->order as $orders) {


$vid = Yii::app()->request->getParam("id");


if(!empty($vid)){

$myvid = $vid;

}else{

$myvid = 3;

}


       
            foreach ($orders->cart as $carts){ $counter++; 
                $postcolour = $counter % 2 ? 'white' : '#e7e7e7';
                
                if($orders->expiry_date > Yii::app()->params['mydate']){
                
                if($carts->product_id == 0 and $orders->status == 1){ 

$cri1=new CDbCriteria();
$cri1->condition="vendor_id=$myvid AND questions != 0";
$cri1->order="code";
$exam = Exam::model()->findAll($cri1);



$cri=new CDbCriteria();
$cri->order="name";
$vendor = Vendor::model()->findAll($cri);

foreach($vendor as $vendors){ ?>

 <div class="col-md-3 col-sm-6 col-xs-12 text-center">
     <div class="each_exam" style="min-height: 30px; margin-bottom: 5px;">
     	<div class="inner-each"><a href="<?php echo Yii::app()->createUrl("main/user/myunlimited",array("id"=>$vendors->id)); ?>"><?=$vendors->name?></a> </div>
     </div>
</div>             

<?php } 
$ecount = 0;
foreach($exam as $exams){

	$examReleaseDate = $exams->newrelease;
	$fifteenDays = date('Y-m-d',strtotime($examReleaseDate. ' + 15 days'));
	$currentDate = date('Y-m-d');

	if(!empty($examReleaseDate) and $currentDate < $fifteenDays){  // New Release



	}else{
		$ecount++;

///////////////////String Generate////////////////
                    $length = 10;
                    $chars = array_merge(range(0,9), range('a','z'), range('A','Z'));
                    shuffle($chars);
                    $string1 = implode(array_slice($chars, 0, $length));
                    $string2 = implode(array_slice($chars, 0, $length));
					$string3 = implode(array_slice($chars, 0, $length));
                    $string4 = implode(array_slice($chars, 0, $length));
                    ///////////////////String Generate////////////////


$xy = $string1."-".$exams->id."-".$orders->id."-".$carts->id."-".$user_id."-".$string2;
$xy = base64_encode($xy);

$yz = $string3."-".$exams->id."-".$orders->id."-".$carts->id."-".$user_id."-".$string4;
$yz = base64_encode($yz);

$pdfdownload = '<a href="'.Yii::app()->createUrl("main/user/downloadpdf",array("id"=>$xy)).'"><img src="'.Yii::app()->request->getBaseUrl(true).'/img/pdf.png" alt=""></a>';
$enginedownload = '<a href="'.Yii::app()->createUrl("main/user/enginegen",array("id"=>$yz)).'"><img src="'.Yii::app()->request->getBaseUrl(true).'/img/engine.png" alt=""></a>';

 ?>                   

                    
    <tr>
    <td><?=$ecount?></td>
    <td><?=$exams->code?></td>
    <td><?=$exams->name?></td>
    
<?php if($carts->product_type == "4" || $carts->product_type == "5" || $carts->product_type == "6" || $carts->product_type == "7"){ ?>
	<td class="text-center"><?=$pdfdownload?></td>
<?php }elseif($carts->product_type == "28" || $carts->product_type == "29" || $carts->product_type == "30" || $carts->product_type == "31"){ 

	$pdfdownload = '<a href="'.Yii::app()->createUrl("main/user/downloadfile",array("id"=>$xy,"vid"=>$myvid)).'"><img src="'.Yii::app()->request->getBaseUrl(true).'/img/pdf.png" alt=""></a>';

 ?>
	<td class="text-center"><?=$pdfdownload?></td>
<?php }elseif($carts->product_type == "8" || $carts->product_type == "9" || $carts->product_type == "10" || $carts->product_type == "11"){  ?>
	<td class="text-center"><?=$enginedownload?></td>
<?php }elseif($carts->product_type == "12" || $carts->product_type == "13" || $carts->product_type == "14" || $carts->product_type == "15"){  ?>
	<td class="text-center"><?=$pdfdownload?></td>
	<td class="text-center"><?=$enginedownload?></td>
<?php } ?>
    
    
  </tr> 
                    
                    
               <?php 

	} //New Release

}//

		}
		
				 }else{ // Expire
                    
                }
                
                
                
           }
    }
    ?>
                    
                    
                    
                    
                    
                    
                      </tbody>
</table>





            </div>	
        </div><!--vtab1-->
    </div>
</div>
<!-- Content -->            
            </div>            
        </div>
    </section>





