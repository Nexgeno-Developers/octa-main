<?php

if(!empty(Yii::app()->session['carturl']) and Yii::app()->session['carturl'] == 1){
	unset(Yii::app()->session['carturl']);
	$rurl = Yii::app()->request->getBaseUrl(true)."".Yii::app()->createUrl("main/cart");
}else{
	$rurl = Yii::app()->request->urlReferrer;
}


if(Yii::app()->user->getstate("id") != ""){
    $this->redirect(Yii::app()->createUrl("main/user/myaccount"));
}
?>
 <!-- Page Content -->
    <section id="content">
    	<div class="container">
        	<div class="col-md-8 col-md-offset-2">
        	<div class="col-md-6">
            <div class="loginmodal-container">
					<h4><?=$logincontent->heading?></h4>
                    <?php if(isset($_GET["msg2"])){ ?> <h5 style="color:red"> <?=$_GET["msg2"]?> </h5><?php } ?>
					<p><?=$logincontent->content?></p>


				  <form name="form2" id="form2" method="post" action="<?php echo Yii::app()->createUrl("main/user/login"); ?>" />
                                  <input type="email" class="user-form" name="email" placeholder="Email" required="required" />
					<input type="password" class="user-form" name="password" placeholder="Password" required="required" />
										<input type="hidden" name="rurl" value="<?=$rurl?>" />
                                        <input type="hidden" name="Signin"  id="Signin" value="Sign In" />
					<input type="submit" name="login" class="login loginmodal-submit" value="Login">
				  </form>
					
				  <div class="login-help">
					<a href="<?php echo Yii::app()->createUrl("main/user/forgotpass"); ?>">Forgot Password</a>
				  </div>
				</div>
            </div>
            
            <div class="col-md-6">
            <div class="loginmodal-container">
					<h4><?=$registercontent->heading?></h4>
                    <?php if(isset($msg)){ ?> <h5 style="color:red"> <?=$msg?> </h5><?php } ?>
					<p><?=$registercontent->content?></p>
				  <form  method="POST" action="<?php echo Yii::app()->createUrl("main/user/register"); ?>">
                                      <input type="text" name="name" class="user-form" placeholder="Full Name" required="required" />
                    <input type="email" name="email" class="user-form" placeholder="Email"  required="required" />
					<input type="password" class="user-form" name="password" placeholder="Password" pattern=".{6,}"  required="required" />
					<font color="red">minimum 6 characters required</font>
					<input type="hidden" name="rurl" value="<?=$rurl?>" />
                    <input type="password" name="cpassword" class="user-form" placeholder="Confirm Password" pattern=".{6,}"  required="required" />
                    <div class="g-recaptcha" data-sitekey="<?= Yii::app()->params['siteKey'] ?>"></div>
                    <div style="padding: 10px 0px; color:#85B034;"><input type="checkbox" name="subscribe"> &nbsp; <strong>Subscribe Newsletter</strong></div>
					<input type="submit" name="Login2" value="Register" class="login loginmodal-submit" value="Register">
                                        
				  </form>
					
				  <div class="login-help">
					&nbsp;
				  </div>
				</div>
            </div>
            
            </div>
        </div>
    </section>
    <!-- /. Page Content -->