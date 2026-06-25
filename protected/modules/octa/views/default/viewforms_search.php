<?php $searched_data = $_POST['search']; ?>

<div class="col-sm-12">
<div id="success-alert" class="alert alert-success" style="display:none"></div>
<section class="panel">
	<header class="panel-heading" style="text-align: center">Submitted Forms</header>
	<div class="col-sm-6">
						<h4>Search</h4>
						<form id="search-vendor" method="POST" action="<?php echo Yii::app()->createUrl('octa/default/viewforms_search');?>">
							<div class="form-group">
								<div class="col-lg-8">
									<select class="dropdown form-control" id="search" name="search" required="required">
										<option>Please Select Type</option>
										<option value="CCIE Webinars" <?php if($searched_data == 'CCIE Webinars'){echo 'selected';} ?>>CCIE Webinars</option>
										<option value="Quick Contact" <?php if($searched_data == 'Quick Contact'){echo 'selected';} ?>>Quick Contact</option>
										<option value="Get Touch" <?php if($searched_data == 'Get Touch'){echo 'selected';} ?>>Get In Touch</option>
										<option value="Contact us" <?php if($searched_data == 'Contact us'){echo 'selected';} ?>>Contact Us</option>
										<option value="Enquire Now" <?php if($searched_data == 'Enquire Now'){echo 'selected';} ?>>Enquire Now</option>
										<option value="Request your Trial class" <?php if($searched_data == 'Request your Trial class'){echo 'selected';} ?>>Request your Trial class</option>
										<option value="Download Brochure" <?php if($searched_data == 'Download Brochure'){echo 'selected';} ?>>Download Brochure</option>
										<option value="Inquire for" <?php if($searched_data == 'Inquire for'){echo 'selected';} ?>>Inquiry For Programs</option>
									</select>
								</div>
								<div class="col-lg-2">
									<input type="submit" class="btn btn-primary btn-block"  value="Search"/>  
								</div>
								<div class="col-lg-2"><a href="<?php echo Yii::app()->createUrl("octa/default/viewforms"); ?>" class="btn btn-primary btn-block">Back</a></div> 
							</div> 
								 
						</form> 
                    </div>
	<div class="col-sm-2" style="margin-top:43px;margin-left:-10px;">
	    <form id="search-vendor" method="POST" action="<?=Yii::app()->createUrl("octa/export/formexport_bytype")?>">
		<input type="hidden" value="<?php echo $searched_data; ?>" name="enquiry_type">
		<input type="submit" class="btn btn-success" value="Export">
		</form>
	</div>
	
                    <div style="clear:both"></div>
                    <div class="panel-body">
                       
                        <table class="table  table-hover general-table" >
                            <thead>
                            <tr>
                                <th>Type</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Subject</th>
								<th>Message</th>
                                <th>Date</th>
                                <th>Delete</th>
                                
                                
                                
                            </tr>
                            </thead>
                            <tbody>
                                
                              <?php
							  if(!empty($forms)){
                           foreach ($forms as $form) { ?>
                            <tr >
                                <td><?php echo $form->type; ?></td>
								<td><?php echo $form->name; ?></td>
								<td><?php echo $form->email; ?></td>
								<td><?php echo $form->phone; ?></td>
								<td><?php echo $form->subject; ?></td>
								<td><?php echo $form->message; ?></td>
								<td><?php echo $form->date_added; ?></td>
                                 <td><a href="<?php  echo Yii::app()->createUrl("octa/default/deleteform",array("id"=>$form->id));?>"><img src="<?php echo Yii::app()->baseUrl?>/images/delete-icon.png" alt=""/></a></td>
                               
                                
                                
                               
                            </tr>
                            
                            <?php } ?>
                           
                            </tbody>
                        </table>
<?php }else{ ?>
						<div class="panel-body">
                        <p><?php echo $sorry ; ?></p>                                               
                    </div>
                            <?php } ?>
                    </div>
                    
                    
                    <div style="text-align: center">
                     <?php                        
//    $this->widget('CLinkPager', array(
//        'pages' => $pages,
//        'header' =>  "<nav>",
//        'nextPageLabel' => 'Next',
//        'prevPageLabel' => 'Prev',
//        'selectedPageCssClass' => 'active',
//        'hiddenPageCssClass' => 'disabled',
//        'htmlOptions' => array(
//            'class' => 'pagination',
//        )
//    ))
//    ?>
                    </div>
                </section>
            </div>



