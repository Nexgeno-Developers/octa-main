			<div class="col-sm-3">
                    <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-pills nav-stacked well">
                      <li <?php if($usrpg == "member"){ echo 'class="active"'; } ?>><a href="<?php echo Yii::app()->createUrl("main/user/myaccount");?>">Order Summary</a></li>
                      <li <?php if($usrpg == "mypdfs"){ echo 'class="active"'; } ?>><a href="<?php echo Yii::app()->createUrl("main/user/mypdfs");?>">My PDF</a></li>
                      <li <?php if($usrpg == "mytestingengines"){ echo 'class="active"'; } ?>><a href="<?php echo Yii::app()->createUrl("main/user/mytestingengines");?>">My Testing Engine</a></li>
					  <li <?php if($usrpg == "myunlimited"){ echo 'class="active"'; } ?>><a href="<?php echo Yii::app()->createUrl("main/user/myunlimited");?>">Unlimited Access</a></li>
                      <li <?php if($usrpg == "myorders"){ echo 'class="active"'; } ?>><a href="<?php echo Yii::app()->createUrl("main/user/myorders");?>">Orders / Invoices</a></li>
                      <li <?php if($usrpg == "editprofile"){ echo 'class="active"'; } ?>><a href="<?php echo Yii::app()->createUrl("main/user/editprofile");?>">Account Settings</a></li>
					  <li <?php if($usrpg == "downloadhistory"){ echo 'class="active"'; } ?>><a href="<?php echo Yii::app()->createUrl("main/user/downloadhistory");?>">Download History</a></li>
					  <li <?php if($usrpg == "unsubscribe"){ echo 'class="active"'; } ?>><a href="<?php echo Yii::app()->createUrl("main/user/unsubscribe");?>">Unsubscribe</a></li>
                      <li <?php if($usrpg == "logout"){ echo 'class="active"'; } ?>><a href="<?php echo Yii::app()->createUrl("main/user/logout");?>">Logout</a></li>
                    </ul>
                </div>