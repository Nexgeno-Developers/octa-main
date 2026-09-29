<?php $usrpg = "member"; ?>

    <section id="content">
    	<div class="container">
           <div class="row">
         <?php include 'accountmenu.php'; ?>

<!-- Content -->
<div class="col-sm-9">
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="vtab1">
            <div class = "panel panel-default">
                        



<table class="table table-bordered table-hover">
	<thead>
		<tr class=" alert-primary">
    		<th style="text-align:center;background-color: #337AB7;color: white;">My Account - Order Summary</th>
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
     <th>Product Detail</th>
    <th>Downloads</th>
    <th>Status</th>
     <th>Purchase Date</th>
    <th>Expiry Date</th>
  </tr>
                </thead>
                
                <tbody>

      
      <?php $counter=0; foreach($user->order as $orders) {
       
	   	if($orders->status == 1){
            foreach ($orders->cart as $carts){
				 


			$counter++; 
                $postcolour = $counter % 2 ? 'white' : '#e7e7e7';


				
                
               
                   
                    $download = "<a href=".Yii::app()->createUrl("main/user/mypdfs").">PDF</a> | Testing Engine";
                
                
               
				
				



                
                if($orders->expiry_date > date('Y-m-d H:i:s')){
                    
                    $newStatus =  "Active";
                }else{
                    
                    $newStatus =  "Expire";
                }


				if(!empty($carts->exam->code)){
					$prodDetail1 = 	$carts->exam->code;
				}
                
                
                
       echo  '<tr style="background-color:'.$postcolour.'">
  <td>'.$counter.'</td>
  <td>'.$prodDetail1.'</td>
  <td>'.$download.'</td>
  <td>'.$newStatus.'</td>
  <td>'.Yii::app()->dateFormatter->format("y-MM-dd",$orders->date_added).'</td>
  <td>'.Yii::app()->dateFormatter->format("y-MM-dd",$orders->expiry_date).'</td>
</tr>';      
                
                
           
		   }
		}
    }
    ?>
      
    </tr>
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