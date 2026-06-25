
<div class="col-lg-12">
				<?php if(!empty($msg)){ ?>
                <?php 
					if($msg == 1){
						$aclass = "alert-danger";
						$dmsg = "Domain/Ip Already Exist";
					}elseif($msg == 2){
						$aclass = "alert-success";
						$dmsg = "Users from the IP address(es) <strong>".$dip."</strong> will not be able to access your site. ";
					}elseif($msg == 3){
						$aclass = "alert-success";
						$dmsg = "The following IP address is now able to access your site: ".$dip;
					}elseif($msg == 4){
						$aclass = "alert-danger";
						$dmsg = "The following IP address <strong>".$dip."</strong> Not Found.";
					}
						
				?>
					
    			<div id="success-alert" class="alert <?=$aclass?>"><?=$dmsg?></div>
                <?php } ?>
                    <section class="panel">
                        <header class="panel-heading">
                            Block IP
                            <a href="<?php echo Yii::app()->createUrl("octa/default/removeip");?>" class="btn btn-danger pull-right">Remove IP</a>
                        </header>
                        <div class="panel-body">
                           <form method="POST" class="form-horizontal" id="" action="<?php echo Yii::app()->createUrl("octa/default/blockip");?>">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">IP Address or Domain</label>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="IP Address or Domain" name="dip" id="dip" class="form-control" required="required" >
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-lg-offset-3 col-lg-6">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                            
                            <textarea type="text"  readonly="readonly" rows="60" class="form-control" ><?=$cms?></textarea>
                            
                        </div>
                    </section>
</div>


