<style>
    .paymnt .paytm_main ul li {
        list-style: none;
        text-align: left;
        line-height: 28px;
        color: #333 !important;
        font-size: 16px;
        font-weight: 300;
        word-spacing: 0.2px;
    }

    .paymnt .paytm_main p {
        color: #333 !important;
        text-align: left;
    }

    .methods label {
        margin-left: 0;
        font-weight: 500;
        font-size: 14px;
        cursor: pointer;
        margin-right: 20px;
    }

    .methods input[type=checkbox],
    input[type=radio] {
        cursor: pointer;
    }

    .padding_tp {
        padding: 0px !important;
    }

    .g-recaptcha {
        margin-bottom: 10px;
    }

    .ptm_bg {
        background: #fff !important;
    }
    
    
    /* new css*/
    
     .payment-options {
        display: flex;
        gap: 15px;
        /*margin: 20px 0;*/
    }

    .payment-option {
        position: relative;
        width: 150px;
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 15px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .payment-option:hover {
        border-color: #aaa;
    }

    .payment-option.selected {
        border-color: #056eff;
        box-shadow: none;
    }

    .payment-option input[type="radio"] {
        position: absolute;
        opacity: 0;
        width: 0;
        height: 0;
    }
label.payment-option img {
    width: 114px !important;
    padding-bottom: 12px;
    padding-top: 6px;
    border-radius: 0 !important;
    margin-top: 0 !important;
    margin-left: 0 !important;
}
    .payment-option img {
        width: 100%;
        height: auto;
        display: block;
        margin: 0 auto;
    }

    .checkmark {
        position: absolute;
        top: -10px;
        right: -10px;
        width: 25px;
        height: 25px;
        background-color: #056eff;
        border-radius: 50%;
        display: none;
    }

    .checkmark:after {
        content: "✓";
        position: absolute;
        color: white;
        font-size: 14px;
        top: 2px;
        left: 8px;
    }

    .payment-option.selected .checkmark {
        display: block;
    }
    .display_none
    {
        display:none;
    }
</style>


<?php
if (!empty($content->photo2)) {
    $imgPath = Yii::app()->request->getBaseUrl(true) . '/img/ebackground/' . $content->photo2;

    ?>
    <picture>
        <?php if (!empty($content->photo_mob)) { ?>
            <source srcset="<?php echo Yii::app()->request->getBaseURL(true); ?>/img/ebackground/<?= $content->photo_mob ?>"
                media="(max-width: 468px)">
        <?php } ?>
        <?php if (!empty($content->photo_tab)) { ?>
            <source srcset="<?php echo Yii::app()->request->getBaseURL(true); ?>/img/ebackground/<?= $content->photo_tab ?>"
                media="(max-width: 967px)">
        <?php } ?>
        <?php if (!empty($content->photo2)) { ?>
            <source srcset="<?php echo Yii::app()->request->getBaseURL(true); ?>/img/ebackground/<?= $content->photo2 ?>">
            <img class="slide-image"
                src="<?php echo Yii::app()->request->getBaseURL(true); ?>/img/ebackground/<?= $content->photo2 ?>" alt="">
        <?php } ?>
    </picture>

<?php } else {

    $imgPath = Yii::app()->request->getBaseUrl(true) . '/img/ebackground/default.jpg'; ?>
    <section class="inner-banner" style="background-image: url(<?= $imgPath ?>);">
        <div class="container">
            <h1><?php echo $content->heading ?></h1>
        </div>
    </section>
<?php } ?>
<section class="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>"><i class="fa fa-home"></i></a></li>
            <li class="active"><?php echo $content->heading ?></li>
        </ol>
    </div>
</section>
<section id="product-info">
    <div class="ptm_bg">
        <div class="container">
            <?php if (!empty($content->photo2)) { ?>
                <div class="text-center">
                    <h1 class="inner_headings1"><?php echo $content->heading ?></h1>
                </div>
            <?php } ?>

            <div class="">
                <div class="paymnt">
                    <div class="container">
                        <div class="row">
                            <div class="paytm_main">
                                <div class="col-md-12 col-sm-12">
                                    <div class="serviceBox mtt0">

                                        <div class="rozar_form payment_modes_pg">


                                            <h3 class="title">Netbanking, Credit/Debit Card & UPI</h3>



                                            <form action="" method="post" id="PayOcta">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-4 col-sm-4">
                                                            <div class="form-group ">
                                                                <label>Method <span>*</span></label>

                                                                <div class="methods">
                                                                    <?/*<label>	<input class="pay_by" type="radio" name="method" value="netbanking"/> Netbanking</label>*/ ?>
                                                                    <label class="d_flexs"><input class="pay_by"
                                                                            type="radio" name="method" value="card"
                                                                            checked required /> <span>Credit/Debit
                                                                            Card</span></label>
                                                                    <?/*<label><input class="pay_by" type="radio" name="method" value="upi"/> UPI</label>*/ ?>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="col-md-4 col-sm-4">
                                                            <div class="form-group">
                                                                <label>Amount <span>*</span></label>
                                                                <select class="form-control " name="currency"
                                                                    id="currency" required>
                                                                    <option value="USD" selected> $ - Dollar (US)
                                                                    </option>
                                                                    <!--<option value="INR"> ₹ - Indian Rupee (INR)</option>-->
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4 col-sm-4">
                                                            <div class="form-group mrgtop41">
                                                                <input type="number" class="form-control" name="amount"
                                                                    id="amount" placeholder="0.00" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label class="text-right">Payment For <span>*</span></label>
                                                        <textarea class="form-control" id="description"
                                                            name="description" maxlength="500"
                                                            placeholder=" Description"></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label class="text-right">Customer Name <span>*</span></label>
                                                        <input type="text" class="form-control" name="name" id="name"
                                                            maxlength="50" placeholder="Name" required>
                                                    </div>
                                                </div>


                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label class="text-right">Customer Mobile No.
                                                            <span>*</span></label>
                                                        <input type="tel" class="form-control" name="mobile" id="mobile"
                                                            maxlength="16" placeholder="+91" required>
                                                    </div>
                                                </div>


                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label class="text-right">Customer Email ID
                                                            <span>*</span></label>
                                                        <input type="email" class="form-control" name="email" id="email"
                                                            placeholder="Email" required>
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label class="text-right">Select Payment Mode<span>*</span></label>
                                                        <select class="form-control" id="gateway" name="gateway" required>
                                                            <option value="payu" selected>PayU Money</option>
                                                            <option value="razorpay">Razorpay</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                <!--
                                                <div class="col-md-6 col-sm-6">
                                                    <label class="text-right">Select Payment Mode<span>*</span></label>
                                                    <div class="payment-options">
                                                        <label class="payment-option selected">
                                                            <input type="radio" name="gateway" value="payu" checked>
                                                            <img src="https://ccierack.rentals/wp-content/uploads/2025/01/images-2.png" alt="PayU Money">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        
                                                        <label class="payment-option">
                                                            <input type="radio" name="gateway" value="razorpay">
                                                            <img src="https://ccierack.rentals/wp-content/uploads/2025/01/razorpaygf.png" alt="Razorpay">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                 -->
                                                <div
                                                    class="col-md-12 col-md-offset-8 col-sm-12 col-sm-offset-8 google_chapcha_form">
                                                    <div class="g-recaptcha"
                                                        data-sitekey="<?= Yii::app()->params['siteKey'] ?>"></div>
                                                    <input type="hidden" name="type" value="Request your Trial class"
                                                        required />

                                                </div>

                                                <div class="col-md-12">
                                                    <div class="checkbox_area checked_flex">
                                                        <input type="checkbox" id="1" class="vh" required>
                                                        <label for="1">I Agree to Octa Networks<a
                                                                href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/terms-of-services/"
                                                                target="_blank"
                                                                style="color: #337ab7 !important; text-decoration: underline !important;">Terms
                                                                & Conditions</a> </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-success"
                                                            value="submit">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <div id="append-payu-form"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <?php echo $content->content ?>
            </div>
        </div>
    </div>
</section>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    
    $('#currency').change(function () {
        var currency = this.value;
        if (currency == 'INR') {
            $('.methods').html('<label><input class="pay_by" type="radio" name="method" value="netbanking"> Netbanking</label><label><input class="pay_by" type="radio" name="method" value="card" checked required> Credit/Debit Card</label><label><input class="pay_by" type="radio" name="method" value="upi"> UPI</label>');
        } else if (currency == 'USD') {
            $('.methods').html('<label><input class="pay_by" type="radio" name="method" value="card" checked required /> Credit/Debit Card');
        }
    });
      
    //payment gateway
    function DoPayment(OrderID, InsertID, UserData) {
        if (UserData.currency == 'INR') {
            if (UserData.method == 'netbanking') {
                var name = "Pay via netbanking";
                var method = "netbanking";
            } else if (UserData.method == 'upi') {
                var name = "Pay via UPI";
                var method = "upi";
            } else if (UserData.method == 'card') {
                var name = "Pay via card";
                var method = "card";
            } else if (UserData.method == 'wallet') {
                var name = "Pay via wallet";
                var method = "wallet";
            } else {
                var name = "Pay via card";
                var method = "card";
            }
        } else {
            var name = "Pay via card";
            var method = "card";
        }
        var options = {
            "key": "<?php echo Yii::app()->params['razorpayKeyId']; ?>",
            "amount": UserData.amount,
            "currency": UserData.currency,
            "name": UserData.name,
            "description": UserData.decription,
            "image": "<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/logo.png",
            "modal": {
                "ondismiss": function (response) {
                    alert('Oops! Payment process failed. Please try again.');
                    location.reload();
                }
            },
            "order_id": OrderID,
            "callback_url": "<?php echo Yii::app()->request->getBaseUrl(true); ?>/payment-response?id=" + InsertID,
            "redirect": "true",
            "prefill": {
                "name": UserData.name,
                "email": UserData.email,
                "contact": UserData.mobile
            },
            "notes": {
                "address": UserData.mobile
            },
            config: {
                display: {
                    blocks: {
                        banks: {
                            name: name,
                            instruments: [
                                {
                                    method: method
                                }
                            ],
                        },
                    },
                    sequence: ['block.banks'],
                    preferences: {
                        show_default_blocks: false,
                    },
                },
            },
            "theme": {
                "color": "#3399cc"
            }
        };
        console.log(options);
        var rzp1 = new Razorpay(options);
    
        rzp1.on('payment.failed', function (response) {
            alert('Oops! Payment process failed. Please try again.');
            location.reload();
        });
    
        rzp1.open();
        e.preventDefault();
    }

        
    $('#PayOcta').submit(function(e) {
        e.preventDefault();
        $('#PayOcta button').html('processing <i class="fa fa-spinner" aria-hidden="true"></i>');
        $('#PayOcta button').prop('disabled', true);			
        let gateway = $('#gateway').val(); // Get selected gateway
        
        if (gateway === 'razorpay') {
            processRazorpay(this); // Razorpay payment flow
        } else if (gateway === 'payu') {
            processPayU(this); // PayU Money payment flow
        }
    });
    
       	
    function processPayU(formEl) {
        $.ajax({
            url: "<?php echo Yii::app()->request->getBaseUrl(true); ?>/payment-modes",
            type: "post",
            data: new FormData(formEl),
            processData: false,
            contentType: false,
            success: function(response) {
                // console.log(response); // Debug: Log response to check its structure
                if (response.status && response.html) {
                    $('#append-payu-form').html(response.html);
                } else {
                    alert('Unexpected response from server');
                    resetSubmitButton();
                }
            },
            error: function(xhr, status, error) {
               console.log("XHR Status: ", status); // Log the status
               console.log("XHR Response Text: ", xhr.responseText); // Log the response text from the server
               console.log("Error: ", error); // Log the error message
            
               // Display a more informative alert
               alert('An error occurred: ' + (xhr.responseText || error || "Unknown error"));
               resetSubmitButton(); // Reset the button text and enable it
            }
        });
    } 
    
    function processRazorpay(formEl) {
    	$.ajax({
    		url:"<?php echo Yii::app()->request->getBaseUrl(true); ?>/payment-modes",
    		type:"post",
    		data:new FormData(formEl),
    		processData:false,
    		contentType:false,
    		cache:false,
    		success: function(response){
    			var response = $.parseJSON(response);
    			if(response.status == false){
    				$('#PayOcta button').html('Submit');
    				$('#PayOcta button').prop('disabled', false);				      
    			}else{
    				$('#PayOcta button').html('Submit');
    				$('#PayOcta button').prop('disabled', false);	
                    DoPayment(response.OrderID, response.InsertID, response.UserData);							
    			}
    		 },
    		error: function() {
    			$('#PayOcta button').html('Submit');
    			$('#PayOcta button').prop('disabled', false);
    			alert("Error posting feed.");
    		}
    	 });
    }
    
        
    function resetSubmitButton() {
        $('#PayOcta button').html('Submit').prop('disabled', false);
    }
      
    function handlePaymentError(message = "Error initiating payment.") {
        alert(message);
        resetSubmitButton();
    } 
      
    /*setTimeout(function () {
        $('#currency').change(function () {
            var currency = this.value;
            if (currency == 'INR') {
                $('.methods').html('<label><input class="pay_by" type="radio" name="method" value="netbanking"> Netbanking</label><label><input class="pay_by" type="radio" name="method" value="card" checked required> Credit/Debit Card</label><label><input class="pay_by" type="radio" name="method" value="upi"> UPI</label>');
            } else if (currency == 'USD') {
                $('.methods').html('<label><input class="pay_by" type="radio" name="method" value="card" checked required /> Credit/Debit Card');
            }
        });
        $('#PayOcta').submit(function (e) {
            $('#PayOcta button').html('processing <i class="fa fa-spinner fa-spin"></i>');
            $('#PayOcta button').prop('disabled', true);
            e.preventDefault();
            $.ajax({
                url: "<?php echo Yii::app()->request->getBaseUrl(true); ?>/payment-modes",
                type: "post",
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                success: function (response) {
                    var response = $.parseJSON(response);
                    if (response.status == false) {
                        $('#PayOcta button').html('Submit');
                        $('#PayOcta button').prop('disabled', false);
                    } else {
                        $('#PayOcta button').html('Submit');
                        $('#PayOcta button').prop('disabled', false);
                        DoPayment(response.OrderID, response.InsertID, response.UserData);
                    }
                },
                error: function () {
                    $('#PayOcta button').html('Submit');
                    $('#PayOcta button').prop('disabled', false);
                    alert("Error posting feed.");
                }
            });
        });

        //payment gateway
        function DoPayment(OrderID, InsertID, UserData) {
            if (UserData.currency == 'INR') {
                if (UserData.method == 'netbanking') {
                    var name = "Pay via netbanking";
                    var method = "netbanking";
                } else if (UserData.method == 'upi') {
                    var name = "Pay via UPI";
                    var method = "upi";
                } else if (UserData.method == 'card') {
                    var name = "Pay via card";
                    var method = "card";
                } else if (UserData.method == 'wallet') {
                    var name = "Pay via wallet";
                    var method = "wallet";
                } else {
                    var name = "Pay via card";
                    var method = "card";
                }
            } else {
                var name = "Pay via card";
                var method = "card";
            }
            var options = {
                "key": "<?php echo Yii::app()->params['razorpayKeyId']; ?>",
                "amount": UserData.amount,
                "currency": UserData.currency,
                "name": UserData.name,
                "description": UserData.decription,
                "image": "<?php echo Yii::app()->request->getBaseUrl(true); ?>/img/logo.png",
                "modal": {
                    "ondismiss": function (response) {
                        alert('Oops! Payment process failed. Please try again.');
                        location.reload();
                    }
                },
                "order_id": OrderID,
                "callback_url": "<?php echo Yii::app()->request->getBaseUrl(true); ?>/payment-response?id=" + InsertID,
                "redirect": "true",
                "prefill": {
                    "name": UserData.name,
                    "email": UserData.email,
                    "contact": UserData.mobile
                },
                "notes": {
                    "address": UserData.mobile
                },
                config: {
                    display: {
                        blocks: {
                            banks: {
                                name: name,
                                instruments: [
                                    {
                                        method: method
                                    }
                                ],
                            },
                        },
                        sequence: ['block.banks'],
                        preferences: {
                            show_default_blocks: false,
                        },
                    },
                },
                "theme": {
                    "color": "#3399cc"
                }
            };
            console.log(options);
            var rzp1 = new Razorpay(options);

            rzp1.on('payment.failed', function (response) {
                alert('Oops! Payment process failed. Please try again.');
                location.reload();
            });

            rzp1.open();
            e.preventDefault();
        }
    }, 1500);*/
</script>


<script>
    document.querySelectorAll('.payment-option').forEach(option => {
        option.addEventListener('click', function() {
            // Remove selected class from all options
            document.querySelectorAll('.payment-option').forEach(opt => {
                opt.classList.remove('selected');
            });
            
            // Add selected class to clicked option
            this.classList.add('selected');
            
            // Check the radio input
            const radio = this.querySelector('input[type="radio"]');
            radio.checked = true;
        });
    });
</script>