<div class="col-lg-12">
    <?php if ($success==1) { ?>
    <div id="success-alert" class="alert alert-success" ><?php echo $message; ?></div>
    <script>
        setTimeout(function(){
                
                window.location.href = "https://www.octanetworks.com/octa/login/logout.html";
                }, 3000);
    </script>
    <?php } else if ($success==-1) { ?>
    <div id="danger-alert" class="alert alert-danger" ><?php echo $message; ?></div>
    
    <?php } ?>
    
                    <section class="panel">
                        <header class="panel-heading">
                            Change Password
                        </header>
                        <div class="panel-body">
                            <form method="POST" class="form-horizontal " enctype="multipart/form-data"  action="<?php echo Yii::app()->createUrl("octa/default/changepassword");?>">
                                <div class="form-group">
                                    
                                
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Current Password</label>
                                    <div class="col-lg-6">
                                        <input type="password" placeholder="2.75"  name="current" id="vendor_name" class="form-control" >
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">New Password</label>
                                    <div class="col-lg-6">
                                        <input type="password"  name="new" id="vendor_name" class="form-control" >
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Confirm Password</label>
                                    <div class="col-lg-6">
                                        <input type="password" placeholder="2.75"  name="confirmnew" id="vendor_name" class="form-control" >
                                    </div>
                                </div>
                                
                                
                                
                                
                                <div class="form-group">
                                    <div class="col-lg-offset-3 col-lg-6">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                                </div>
                                
                                
                                
                            </form>
                        </div>
                    </section>
</div>

<script>
    
    
    </script>