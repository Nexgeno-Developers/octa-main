<div class="col-sm-12">
<div id="success-alert" class="alert alert-success" style="display:none"></div>
<section class="panel">
	<header class="panel-heading" style="text-align: center">Submitted Forms</header>
	<div class="col-sm-4">
						<h4>Search</h4>
						<form id="search-vendor" method="POST" action="<?php echo Yii::app()->createUrl('octa/default/viewforms_search');?>">
							<div class="form-group">
								<div class="col-lg-9">
									<select class="dropdown form-control" id="search" name="search" required="required">
										<option>Please Select Type</option>
										<option value="CCIE Webinars">CCIE Webinars</option>
										<option value="Quick Contact">Quick Contact</option>
										<option value="Get Touch">Get In Touch</option>
										<option value="Contact us">Contact Us</option>
										<option value="Enquire Now">Enquire Now</option>
										<option value="Request your Trial class">Request your Trial class</option>
										<option value="Download Brochure">Download Brochure</option>
										<option value="Inquire for">Inquiry For Programs</option>
									</select>
								</div>
								<div class="col-lg-3">
									<input type="submit" class="btn btn-primary"  value="Search"/>  
								</div>
							</div> 
								 
						</form> 
                    </div>
	<div class="col-sm-2" style="    margin-top: 43px;     margin-left: -10px;">
		<a href="<?=Yii::app()->createUrl("octa/export/formexport")?>" class="btn btn-success">Export All</a>
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
                            
                            <?php }//foreach
                                    
                                 ?>
                           
                            </tbody>
                        </table>
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



