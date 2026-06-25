<section id="content">
	<div class="container">
        <div class="row">
            <h1>Search Results for "<font color="#0075BD"><?php echo $query; ?></font>"</h1>
            <?php if (!empty($exam)) { ?>
            <ul class="list-inline cert_m group" style="border:none;">
                <div class="col-md-12" style="background:#4f4e4e; padding: 40px 20px 10px 20px;">
                    
                    <div class="col-md-12" style="margin-bottom:10px;">
                    		<div style="width:25px; height:25px; background-color:#2196F3; float:left"></div> 
                    		<div style="width:100px; height:25px; float:left; padding: 1px 0px 0px 5px; font-weight: bold; color:white; "> Exam Code</div>
                    		
                    		<div style="width:25px; height:25px; background-color:#85B034; float:left"></div> 
                    		<div style="width:100px; height:25px; float:left; padding: 1px 0px 0px 5px; font-weight: bold; color:white; "> Certification</div>
                    
                    		<div style="width:25px; height:25px; background-color:#A52A2A; float:left"></div> 
                    		<div style="width:100px; height:25px; float:left; padding: 1px 0px 0px 5px; font-weight: bold; color:white; "> Vendor</div>
                    	
                    </div>
                
                <?php foreach ($exam as $exams) {   ?>
                	<div class="col-md-3 col-sm-6 col-xs-12 text-center">
                		<div class="each_exam" style="min-height: 70px;">
                			<h5><?php echo $exams->code; ?></h5>
                			<div class="inner-each"><a href="<?php echo Yii::app()->createUrl("main/cert/exam",array("url"=>$exams->url)) ?>">view detail</a> </div>
                		</div>
                	</div>
                <?php } ?>	
                
                <?php 
                if(!empty($cert)){
                foreach ($cert as $certs) {   ?>
                	<div class="col-md-3 col-sm-6 col-xs-12 text-center">
                		<div class="each_exam" style="min-height: 70px;">
                			<h5><?php echo $certs->name; ?></h5>
                			<div class="inner-each" style="background-color: #85B034;"><a href="<?php echo Yii::app()->createUrl("main/cert",array("url"=>$certs->url)) ?>">view detail</a> </div>
                		</div>
                	</div>
                <?php
                    }
                        }
                ?>	
                
                <?php 
                if(!empty($vendor)){
                foreach ($vendor as $vendors) {   ?>
                	<div class="col-md-3 col-sm-6 col-xs-12 text-center">
                		<div class="each_exam" style="min-height: 70px;">
                			<h5><?php echo $vendors->name; ?></h5>
                			<div class="inner-each" style="background-color: brown;"><a href="<?php echo Yii::app()->createUrl("main/vendor",array("url"=>$vendors->url)) ?>">view detail</a> </div>
                		</div>
                	</div>
                <?php }
                }
                ?>
                </div>
            </ul>         
            <?php } else {?>
            <ul class="tab_list cert_m group" style="border:none; text-align: center;">
                <h3 style="color:red;">Your requested exam is not listed currently with us. Please submit your email address with us so we can notify you once it is available.</br> Thank You </h3>
                <form name="exam_request" id="exam_request" action="<?php echo Yii::app()->createUrl("main/default/exam_request"); ?>" method="post">
                        <div align="center">
                            <table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td height="20" align="left">Exam Code: </td>
                                </tr>
                                <tr>
                                    <td width="210" height="60" align="left">
                                        <input type="text" name="code1" class="form-control" disabled="disabled"  value="<?php echo $query; ?>" required />
                                        <input type="hidden" name="code" class="form-control"  value="<?php echo $query; ?>" required />
                                        
                                    </td>
                                </tr>
                                <tr>
                                  <td height="20" align="left">Email Address: </td>
                                </tr>
                                <tr>
                                  <td height="60" align="left"><input type="email" class="form-control" name="email" required ></td>
                                </tr>
                                <tr>
                                    <td height="30" align="center"><input name="exam_request" class="btn btn-primary" type="submit" value="Send Request" ></td>
                                </tr>
                            </table>
                        </div>
                    </form>
            </ul>
            <?php } ?>
            </div>
        </div>
</section>