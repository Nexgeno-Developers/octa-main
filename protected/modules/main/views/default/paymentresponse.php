<style>
    .tab-content p {
        text-align: center !important;
    }

    section#product-info {
        padding: 35px 0px 45px 0px !important;
    }

    section#product-info h1 {
        font-weight: bold;
        color: #333 !important;
        text-align: center !important;
    }

    section.inner-banner {
        display: none;
    }

    @media(min-width:768px) and (max-width:991px) {
        .col-xs-offset-3 {
            margin-left: 32%;
        }
    }

    @media(min-width:1200px) {
        section#product-info {
            padding: 190px 0px 210px 0px !important;
        }
    }

    .thank_img img {
        width: 150px !important;
        margin-left: auto;
        margin-right: auto;
        display: block;

    }
</style>

<section id="product-info1" style="padding:45px;">
    <div class="container">
        <div class="text-center">
            <?php
            // Sample input: $response is assumed to be passed from controller
            $razorpayId = isset($response['razorpay_payment_id']) ? trim($response['razorpay_payment_id']) : '';
            $razorpayOrderId = isset($response['razorpay_order_id']) ? trim($response['razorpay_order_id']) : '';

            $payuStatus = isset($response['status']) ? trim($response['status']) : '';
            $payuSuccess = ($payuStatus === 'success');
            $isSuccess = !empty($razorpayId) || $payuSuccess;

            if ($isSuccess):
                $gatewayName = !empty($razorpayId) ? 'Razorpay' : 'PayU';
                $txnId = !empty($razorpayId) ? $razorpayId : (isset($response['txnid']) ? trim($response['txnid']) : '');
                $amount = isset($recordData->amount) ? '$' . $recordData->amount : '';

                ?>
                <div class="tab-content">
                    <div class="webinar-thankyou">
                        <div class="col-md-12 col-xs-12">
                            <h1>Thank You</h1>
                        </div>
                        <div class="thank_img">
                            <p><img alt="Success" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/check-mark.png"></p>
                        </div>
                        <div class="col-md-12 col-xs-12">
                            <p><strong>Payment successfully received via <?php echo $gatewayName; ?>.</strong></p>
                            <?php if (!empty($txnId)): ?>
                                <p><strong>Payment ID: </strong><?php echo $txnId; ?></p>
                            <?php endif; ?>
                            <?php if (!empty($amount)): ?>
                                <p><strong>Paid Amount: </strong><?php echo $amount; ?></p>
                            <?php endif; ?>
                            <p>
                                To return to the Home Page,
                                <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>">Click Here</a>
                            </p>
                        </div>
                    </div>
                </div>
            <?php else:
                $gateway = !empty($razorpayOrderId) ? 'Razorpay' : 'PayU';
            
                // Default placeholders
                $remarks = 'Unknown error';
                $failedTxnId = '';
            
                if ($gateway === 'Razorpay') {
                    // Razorpay-specific failure handling
                    $remarks = isset($response['error']['description']) ? $response['error']['description'] : 'Unknown Razorpay error';
                    $metadata = isset($response['error']['metadata']) ? json_decode($response['error']['metadata'], true) : [];
                    $failedTxnId = isset($metadata['order_id']) ? $metadata['order_id'] : '';
                } else {
                    // PayU-specific failure handling
                    $remarks = isset($response['error_Message']) ? $response['error_Message'] : 'Transaction was cancelled or failed';
                    $failedTxnId = isset($response['txnid']) ? $response['txnid'] : '';
                }
                ?>
                <div class="text-center">
                    <div class="row">
                        <div class="col-md-5"></div>
                        <div class="col-md-2 mb-2">
                            <img src="<?php echo Yii::app()->request->getBaseURL(true); ?>/images/Cross.png"
                                 alt="Payment Failed" class="img-fluid">
                        </div>
                        <div class="col-md-5"></div>
                    </div>
            
                    <h1>Payment Failed</h1>
                            
                    <?php if (!empty($failedTxnId)): ?>
                        <p style="margin:0;padding-bottom:10px;text-align:center;"><strong>Transaction ID: </strong><?php echo $failedTxnId; ?></p>
                    <?php endif; ?>
                    <?php if (!empty($remarks)): ?>
                        <p style="margin:0;padding-bottom:10px;text-align:center;"><strong>Reason: </strong><?php echo $remarks; ?></p>
                    <?php endif; ?>

                    <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/payment-modes/"
                       class="btn btn-danger">Go to Payment Page</a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php
/*
<section id="product-info1" style="padding:45px;">
    <div class="container">
        <div class="text-center">
            <?php
            $PaymentID = $response['razorpay_payment_id'];
            //var_dump($PaymentID);
            if (!empty($PaymentID)) {

                $order_id = $response['razorpay_order_id'];
                $amount = '$' . $recordData->amount;
                ?>
                <div class="tab-content">
                    <div class="webinar-thankyou">
                        <div class="col-md-12 col-xs-12">
                            <h1>Thank You</h1>
                        </div>
                        <div class="thank_img">
                            <p><img alt="" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/check-mark.png">
                            </p>
                        </div>
                        <div class="col-md-12 col-xs-12">
                            <p><big><strong><span style="color: rgb(38, 50, 56); font-family: Roboto, sans-serif;">Payment
                                            successfully received.</span></strong></big></p>
                            <?php if (!empty($PaymentID)) { ?>
                                <p style="margin:0;padding: 0;text-align:center;"><strong>Payment ID: </strong>
                                    <?php echo $PaymentID; ?></p>
                            <?php } ?>

                            <?php //if (!empty($order_id)) { ?>
                            <!--<p style="margin:0;padding: 0;text-align:center;"><strong>Order ID: </strong> <?php //echo $order_id; ?></p>-->
                            <?php //} ?>
                            <?php if (!empty($amount)) { ?>
                                <p style="margin:0;padding-bottom:10px;text-align:center;"><strong>Paid Amount: </strong>
                                    <?php echo $amount; ?></p>
                            <?php } ?>
                            <p><span style="color: rgb(38, 50, 56); font-family: Roboto, sans-serif;">To Get back to the
                                    Home Page <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>">Click
                                        Here</a></span></p>
                        </div>
                    </div>
                </div>

            <?php } else { ?>


                <?php
                $remarks = $response['error']['description'];
                $metadata = json_decode($response['error']['metadata'], true);
                $order_id = $metadata['order_id'];
                ?>



                <div class="text-center">
                    <div class="row">
                        <div class="col-md-5"></div>
                        <div class="col-md-2 mb-2">
                            <img src="<?php echo Yii::app()->request->getBaseURL(true); ?>/images/Cross.png"
                                alt="Octa Networks" class="img-fluid">
                        </div>
                        <div class="col-md-5"></div>
                    </div>

                    <h1>Payment Failed</h1>
                    <?php if (!empty($order_id)) { ?>
                        <p style="margin:0;padding: 0;text-align:center;"><strong>Payment ID: </strong> <?php echo $order_id; ?>
                        </p>
                    <?php } ?>
                    <?php if (!empty($remarks)) { ?>
                        <p style="margin:0;padding-bottom:10px;text-align:center;"><strong>Reason: </strong>
                            <?php echo $remarks; ?></p>
                    <?php } ?>

                    <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/payment-modes/" class="btn btn-danger">Go
                        to Payment Page</a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
*/
?>
