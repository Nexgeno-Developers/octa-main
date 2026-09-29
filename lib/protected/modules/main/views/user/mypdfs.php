<?php $usrpg = "mypdfs"; ?>

    <section id="content">
    	<div class="container">
           <div class="row">
         <?php include 'accountmenu.php'; ?>

<!-- Content -->
<div class="col-sm-9">
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="vtab1">
            <div class = "panel panel-default">
                
                
<?php if(!empty(Yii::app()->session['msg'])){ ?>
<div class="col-md-12 alert alert-danger" role="alert" style="text-align: center; font-size: 22px; font-weight: bold; margin: 5px 0px;"><?=Yii::app()->session['msg']?></div>
<?php 
Yii::app()->session['msg'] = "";
} ?>

<table class="table table-bordered table-hover">
	<thead>
		<tr class=" alert-info">
    		<th style="text-align:center;background-color: #337AB7;color: white;">My Account - My PDFs</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<?php if(count($user->order) == 0){  ?>
    		<td>No Order</td>
            <?php }else{ ?>
            <td><table class="table table-bordered table-hover" style="margin-bottom: 0px;">
                
                <thead>
                  <tr class=" alert-info">
    <th>Sr: #</th>
     <th>Exam Code</th>
    <th>Exam Name</th>
    <th>Download</th>
     
  </tr>
                </thead>
                
                <tbody>
                    
                    
               
                    
 <?php $counter=0; foreach($user->order as $orders) {
       
            foreach ($orders->cart as $carts){ $counter++; 
                $postcolour = $counter % 2 ? 'white' : '#e7e7e7';
                
                if($orders->expiry_date > date('Y-m-d H:i:s')){
                    ///////////////////String Generate////////////////
                    $length = 10;
                    $chars = array_merge(range(0,9), range('a','z'), range('A','Z'));
                    shuffle($chars);
                    $string1 = implode(array_slice($chars, 0, $length));
                    $string2 = implode(array_slice($chars, 0, $length));
                    ///////////////////String Generate////////////////
                    
                    $user_id = Yii::app()->user->getState('id');
                    
                    if(!empty($carts->exam->id)){$pexam_code = $carts->exam->id;}
                    $xy = $string1."-".$pexam_code."-".$orders->id."-".$carts->id."-".$user_id."-".$string2;
                    $xy = base64_encode($xy);
                    
                    $newStatus =  "<font color='green'>Active</font>";
                    $download='<a href="'.Yii::app()->createUrl("main/user/downloadpdf",array("id"=>$xy)).'" class="pull-right"><img src="'.Yii::app()->request->getBaseUrl(true).'/img/download-exam.png" alt=""></a>';
                    
                }else{
					$eurlll = Yii::app()->createUrl("main/cert/exam",array("url"=>$carts->exam->url));
                    $newStatus =  "<font color='red'>Expire</font>";
                    $download='<div style="font-size:20px;"><a href="'.$eurlll.'" class="button2" style="margin: 5px 0px; float: none;     padding: 15px 33px 15px 65px;">Reorder</a></div>';
                }
                
                
                
                
                if(($carts->product_type == 1 || $carts->product_type == 3) and $orders->status == 1){  ?>                   
                    
                    
   <tr>
    <td><?=$counter?></td>
    <td><?=$carts->exam->code?></td>
    <td><?=$carts->exam->name?></td>
    <td><?=$download?></td>
  </tr>
                    
                    
               <?php }
                
                
           }
    }
    ?>
                    
                    
                    
                    
                    
                    
                      </tbody>
</table></td>
            <?php } ?>
		</tr>
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





