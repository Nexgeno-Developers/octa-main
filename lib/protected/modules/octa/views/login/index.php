<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<form class="form-signin" action="<?php echo Yii::app()->createUrl("octa/login/login");?>" method="POST">
        <h2 class="form-signin-heading">Sign in now</h2>
        <div class="login-wrap">
            <div class="user-login-info">
                <input type="text" class="form-control" name="username" placeholder="User ID" autofocus required="required" />
                <input type="password" class="form-control" name="password" placeholder="Password" required="required">
            </div>
            <label class="checkbox">
                <!--<input type="checkbox" value="remember-me"> Remember me-->
<!--                <span class="pull-right">
                    <a data-toggle="modal" href="#myModal"> Forgot Password?</a>

                </span>-->
            </label>
            <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>
            
        </div>
</form>