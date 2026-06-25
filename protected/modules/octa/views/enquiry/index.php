<div class="col-sm-12">
	<div id="success-alert" class="alert alert-success" style="display:none"></div>
		<section class="panel">
				<header class="panel-heading" style="text-align: center">
						Enquiry Table
				</header>
				<div class="col-sm-12">
					<div style="padding:10px;">
						<h4>Search</h4>
						<form id="search-vendor" method="POST" action="<?php echo Yii::app()->createUrl('octa/enquiry/search');?>">
							<div class="form-group">
								<div class="col-lg-2">
									<input type="text" class="form-control" name="search" required="required"/>
								</div>
								<div class="col-lg-2">
									<input type="submit" class="btn btn-primary"  value="Search"/>  
								</div>
							</div> 
								 
						</form> 
					</div>
					<div class="panel-body">
							<table class="table  table-hover general-table" >
									<thead>
									<tr>
											
											<th>Sr No</th>
											<th>Name</th>
											<th>Mobile</th>
											<th>Email</th>
											<th>Message</th>
											<th>Date </th>
											<th>Status </th>
											<th>Website</th>
											<th>Action</th>
									</tr>
									</thead>
									<tbody>
									<?php $i = 1;
										foreach ($enquiries as $enquiry) {
											$status = $enquiry->is_read;
											if($status == 1){
													$info = 'Seen';
													$class = 'success';
													$view = 'Mark as Unseen';
													$unread_ui = '';
											}else{
													$info = 'Unseen';
													$class = 'danger';
													$view = 'Mark as Seen';
													$unread_ui = 'unread-style';
											}
									?>
									<tr id="row-<?php echo $enquiry->id;?>" class="<?php echo $unread_ui; ?>">
											
											<td><?php echo $i++;?></td>
											<td><?php echo $enquiry->name;?></td>
											<td><?php echo $enquiry->mobile; ?></td>
											<td><?php echo $enquiry->email;?></td>
											<td><?php echo $enquiry->message;?></td>
											<td><?php echo date('d-M-Y', strtotime($enquiry->created_at)); ?></td>
											<td><label class="label label-<?= $class; ?>"><?= $info;?></label></td>
											<td><?php $website = explode("/",$enquiry->url); echo $website[2];?> </td>
											<td>

													<a href="<?php echo Yii::app()->createUrl("octa/enquiry/enquiry_view",array("id"=>$enquiry->id));?>" class="view" title="<?= $view; ?>"><i class="fa fa-eye"></i></a>

													<a class="reply" onclick="reply_enquiry(<?php echo $enquiry->id; ?>)" ><i class="fa fa-reply"></i></a>

													<a href="<?php echo Yii::app()->createUrl("octa/enquiry/enquiry_delete",array("id"=>$enquiry->id));?>" ><img src="<?php echo Yii::app()->baseUrl?>/images/delete-icon.png" alt=""/></a>

											</td>

									</tr>

									<?php } ?>

									

									</tbody>

							</table>
									<?php $this->widget('CLinkPager', array(
											'pages' => $pagination,
									)); ?>
					</div>
				</div>

		</section>

</div>


<a href="" class="callback-form-show cboxElement" data-toggle="modal" data-target="#reply_modal">Request a call back</a></div>

<div class="modal fade" id="reply_modal" tabindex="-1" role="dialog" aria-labelledby="replyModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content req_responsive">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>

      <div class="modal-body">
				<div class="callback-form ">
					<h5>Reply</h5>
					
					<form class="clearfix callback-form-container" action="<?php echo Yii::app()->createUrl("octa/enquiry/reply"); ?>" method="post" id="request_callback">
						<input type="hidden" id="enq_id" name="enq_id" value="" />
						<input type="hidden" name="type" value="enq_reply" />
						<div class="form-group">
							<label>Reply Message<span class="required-syb">*</span></label>
							<input type="text" name="reply_message" class="form-control" placeholder="Your name" required>
						</div>
						<button type="submit" class="callback-btn">Submit</button>
					</form>
				</div>
			</div>
      
    </div>
  </div>
</div>

<script>
	function reply_enquiry(id){
		$('#enq_id').val(id);
		console.log(id);
		$('#reply_modal').modal('show');
	}
</script>


