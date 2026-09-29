<?php $usrpg = "myorders"; ?>

    <section id="content">
    	<div class="container">
            <div class="row">
                <?php include 'accountmenu.php'; ?>
            <!-- Content --> 
             <div class="col-sm-9">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="vtab1">
                        
                
                
            <table class="table table-bordered table-hover">
	<thead>
		<tr class=" alert-primary">
    		<th style="text-align:center;background-color: #337AB7;color: white;">My Account - Order/Invoice</th>
		</tr>
	</thead>

	<tbody>
		<tr>
        	<?php if(count($user->order) == 0){  ?>
    		<td>No Order</td>
            <?php }else{ ?>
             <?php $counter=0; foreach($user->order as $orders) {
				 if($orders->status == 1){
				 
       
             $counter++; 
                $postcolour = $counter % 2 ? 'white' : '#e7e7e7';
                
                if($orders->expiry_date > date('Y-m-d H:i:s')){
                    $newStatus =  "<font color='green'>Active</font>";
                }else{
                    $newStatus =  "<font color='red'>Expire</font>";
                }
                
                
                
                
                ?>
                   <div class = "panel panel-default">            
                <table class="table table-bordered">
    
                <tbody>
  <tr>
    <td bgcolor="#F7F7F7">Sr. #:</td>
    <td><?=$counter?></td>
    <td bgcolor="#F7F7F7">Net Amount</td>
    <td>$<?=$orders->net_price?></td>
  </tr>
  <tr>
    <td bgcolor="#F7F7F7">Order Date</td>
    <td><?=$orders->date_added?></td>
    <td bgcolor="#F7F7F7">Expiry Date</td>
    <td><?=$orders->expiry_date?></td>
  </tr>
  <tr>
    <td bgcolor="#F7F7F7">Order ID</td>
    <td><?=$orders->id?></td>
    <td bgcolor="#F7F7F7">Status</td>
    <td><?=$newStatus?></td>
  </tr>
  <tr>
    <td bgcolor="#F7F7F7">Transaction ID</td>
    <td><?=$orders->transaction_id?></td>
    <td bgcolor="#F7F7F7">Description</td>
    <td><?php foreach ($orders->cart as $carts){


           
            if(!empty($carts->exam->code)){echo $carts->exam->code;}

            
        }
        ?></td>

  </tr>
  </tbody>
</table>
             </div>
               <?php 
				 }
			   }   ?>
               
               </td>
            <?php } ?>
		</tr>
	</tbody>
</table>
                
                
                       	
                    </div><!--vtab1-->
                </div>
            </div>
            <!-- Content -->            
            </div>            
        </div>
    </section>  




