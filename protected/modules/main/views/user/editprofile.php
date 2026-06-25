<?php $usrpg = "editprofile"; ?>

    <section id="content">
    	<div class="container">
            <div class="row">
                <?php include 'accountmenu.php'; ?>
            <!-- Content --> 
             <div class="col-sm-9">
            <div class="tab-content">
                <div role="tabpanel">
                    <?php if(!empty(Yii::app()->session['msg'])){ ?>
                            <div class="col-md-12 success alert-success" role="alert" style="text-align: center; font-size: 22px; font-weight: bold; margin: 5px 0px;"><?=Yii::app()->session['msg']?></div>
                            <?php 
                            Yii::app()->session['msg'] = "";
                            } ?>
                    <div class="loginmodal-container">
					<h4>Edit Profile!</h4><br>
				  <form class="form-horizontal" method="post" action="<?php echo Yii::app()->createUrl("main/user/updateprofile"); ?>">
                   
                  <div class=" form-group">
    <label class="control-label col-sm-2">First Name*:</label>
    <div class="col-sm-10">
        <input type="text" name="fName" class="form-control" id="text" placeholder="John" value="<?php  if(isset($user->first_name)){ echo $user->first_name; } ?>"  required="required">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">Last Name*:</label>
    <div class="col-sm-10">
      <input type="text" name="lastname" class="form-control" id="text" placeholder="Carter" value="<?php  if(isset($user->last_name)){ echo $user->last_name; } ?>" required="required">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
        <input type="hidden" class="form-control" id="emails"  name="emails" placeholder="email@sample.com"  value="<?php  if(isset($user->email)){ echo $user->email; } ?>">
        <input type="email" class="form-control" id="email" placeholder="email@sample.com"  value="<?php  if(isset($user->email)){ echo $user->email; } ?>" disabled>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Old Password*:</label>
    <div class="col-sm-10"> 
      <input type="password" name="oldpassword" class="form-control" id="pwd" placeholder="******" required="required">
    </div>
  </div>


  <div class="form-group">

    <label class="control-label col-sm-2" for="pwd">New Password:</label>
    <div class="col-sm-10"> 	
      <input type="password" name="passwords" class="form-control" pattern=".{6,}" id="pwd" placeholder="minimum 6 characters required">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Retype Password:</label>
    <div class="col-sm-10"> 
      <input type="password" name="repassword" class="form-control" pattern=".{6,}" id="pwd" placeholder="minimum 6 characters required">
    </div>
  </div>
  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
     <button type="submit" class="exam-re-field submit-btn btn-theme-color login loginmodal-submit">Submit</button>
    </div>
  </div>
</form>
					
				  <div class="login-help">
					&nbsp;
				  </div>
				</div>
                </div>
            </div>
        </div>
            <!-- Content -->            
            </div>            
        </div>
    </section>  







  
    
    


