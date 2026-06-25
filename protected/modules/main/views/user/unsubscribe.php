










<div class="container">
    <ol class="breadcrumb">
  <li><a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>">Home</a></li>
  <li class="active"> Unsubscribe   </li>
</ol>
</div>

<!-- Page Content -->
    <section id="content">
    	<div class="container">
        
        
           <div class="row">
        
        <div class="col-sm-8 col-sm-offset-2">
            <div class="tab-content">
                <div role="tabpanel">
                    <div class="loginmodal-container" style="text-align: center;">
                                        <h1>You Will be Missed!</h1>

					
					<h4><?php if(isset($msg)){ echo $msg; }?></h4>



<br>
				  <form class="form-horizontal" method="POST" action="<?php echo Yii::app()->createUrl("main/user/unsubscribe"); ?>">
                   
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email" value="<?php if(!empty(Yii::app()->user->hasState('user'))){echo Yii::app()->user->getState('user');} ?>" required="required">
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
    </div>
       
            
        </div>
    </section>
    <!-- /. Page Content -->