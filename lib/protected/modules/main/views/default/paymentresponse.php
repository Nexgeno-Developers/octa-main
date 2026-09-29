<style>
.tab-content p{
	text-align:center !important;
}
section#product-info {
    padding: 35px 0px 45px 0px !important;
}
section#product-info h1 {
    font-weight: bold;
    color: #333 !important;
	text-align:center !important;
}
section.inner-banner {
    display: none;
}

@media(min-width:768px) and (max-width:991px){
.col-xs-offset-3 {
    margin-left: 32%;
}
}
@media(min-width:1200px){
section#product-info {
    padding: 190px 0px 210px 0px !important;
}
}

.thank_img img
{
    width:150px !important;
    margin-left:auto;
    margin-right:auto;
    display:block;
    
}
</style>
<section id="product-info">
	<div class="container">
	<div class="text-center">
       <?php $PaymentID = $response['razorpay_payment_id']; 
			    //var_dump($PaymentID);
  			 if(!empty($PaymentID)){
       ?>	
         <div class="tab-content">
<div class="webinar-thankyou">
<div class="col-md-12 col-xs-12">
<h1>Thank You</h1>
</div>
<div class="thank_img">
<p><img alt="" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/check-mark.png"></p>
</div>
<div class="col-md-12 col-xs-12">
<p><big><strong><span style="color: rgb(38, 50, 56); font-family: Roboto, sans-serif;">Payment Successfully</span></strong></big></p>
<p><span style="color: rgb(38, 50, 56); font-family: Roboto, sans-serif;">To Get back to the Home Page <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>">Click Here</a></span></p>
</div>
</div>
</div>

        <?php	}else{ ?>
        
          <div class="text-center">
				<h1>Payment Failed</h1>	
				<a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/payment-modes/" class="btn btn-danger">Please Try Again</a>
				</div>
				<?php } ?>
	</div>
	</div>
</section>