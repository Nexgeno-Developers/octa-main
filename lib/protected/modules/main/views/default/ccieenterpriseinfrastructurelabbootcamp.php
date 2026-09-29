
<script language="javascript">
   $(function () {	
       $("#jcountry").on("change",function(){
          $id=$("#jcountry").val();
          $url=$("#jcountry").data("url");
          $.ajax({
               type: "POST",
               url: $url,
               data: {id:$id},
               dataType: "json",
               traditional: true,
               
               success: function (response) {
                   if (response.status==="ok"){
                       if (!$.isEmptyObject(response.cert)){
                            $html = response.cert;
                           $("#jphone").val($html);
                       }
                   }
               },
                error: function (response) {
                   debugger;
                   alert(response.d);
               }
          }) ;
       });
   });
 
                 
									
						 
</script>
<style>
#contact_frm2 {
       padding: 20px;
    overflow: hidden;
    padding-top: 20px;
    margin-top: 20px;
    border-radius: 0;
    background-image: linear-gradient(135deg,#19519e,#1dd5e6) !important;
    margin-bottom: 20px;
}
#contact_frm2 label {
    float: left !important;
    color: #fff !important;
}
div#contact_frm2 button.enquire-now-jobg {
    background: #0b304d;
    border-radius: 0;
    padding: 4px 16px !important;
    border-radius: 2px;
}
.main_ldpg {
    background: #fff !important;
}
.main_ldpg h1 {
    font-size: 24px;
    line-height: 28px;
    text-transform: capitalize !important;
    font-weight: 300 !important;
    padding-bottom: 17px;
}
.main_ldpg img {
    margin-top: 20px;
}
.mn_banner img {
    width: 100%;
}
.navbar-fixed-bottom, .navbar-fixed-top {
    position: relative;
    right: 0;
    left: 0;
    z-index: 1030;
}
a.callback-form-landing.cboxElement {
    display: none;
}
header#header {
    display: none;
}

.back-to-top {
    display: none !important;
}
.icon-bar {
    display: none;
}
#footer .copyright {
    padding-top: 0px;
    width: 100%;
    text-align: left;
    font-family: open sans,sans-serif;
    font-size: 12px;
    line-height: 16px;
    color: #fff;
    padding: 10px 0px;
}
.top_hed img {
    width: 110px;
    margin-left: auto;
    margin-right: auto;
    display: block;
}
.top_hed {
    padding: 13px 0px;
}
.main_ldpg #contact_frm2 { 
    overflow: hidden;
    /* padding-top: 20px; */
    margin-top: 20px;
    border-radius: 0;
    background: #fff !important;
    margin-bottom: 20px;
    box-shadow: 0px 0px 3px 1px #3487cc inset;
    /* background: #003368 !important; */
    background-image: linear-gradient(to right,#45a5f2 0,#002b58 100%) !important;
    border-radius: 3px;
}

.main_ldpg input.form-control {
    border-radius: 2px !important;
    border: 0;
   padding: 18px 7px 14px 7px !important;
}
.main_ldpg .enquiry_now_btn {
    color: #fff !important;
    text-align: center;
    padding: 0;
    margin: 0;
    margin-top: 15px;
    margin-bottom:20px;
}
.main_ldpg #contact_frm2 label {
    float: left !important;
    color: #fff !important;
}
.g-recaptcha {
    transform: scale(0.77);
    -webkit-transform: scale(1.01);
    transform-origin: 0 0;
    -webkit-transform-origin: 0 0;
}

.main_ldpg div#contact_frm2 button.enquire-now-jobg {
  background: transparent;
    border-radius: 0;
    padding: 4px 16px !important;
    border-radius: 2px;
    color: #fff;
    border: 2px solid #fff;
    text-align: center;
    width: 25%;
    margin-left: auto;
    margin-right: auto;
    display: block;
    float: none;
}
.rs_banner
{
    display:none;
}
.mn_banner
{
    display:block;
}

.main_ldpg .mn_form12 {
    width: 345px;
    margin-left: auto;
    margin-right: auto;
    display: block;
}


@media(max-width:767px)
{
    .main_ldpg #contact_frm2 {
   
    width: 100%;
    margin-top:0px;
    margin-bottom:0px;
  
}
.col-md-5.col-md-offset-4.col-xs-12.col-sm-12 {
    padding: 0;
}
.main_ldpg div#contact_frm2 button.enquire-now-jobg {
   
    width: 33%;
   
}
.g-recaptcha {
    transform: scale(0.77);
    -webkit-transform: scale(0.93);
    transform-origin: 0 0;
    -webkit-transform-origin: 0 0;
}
.rs_banner
{
    display:block;
}
.rs_banner img
{
    width:100%;
}
.mn_banner
{
    display:none;
}
.main_ldpg .container {
    width: 100%;
    padding-right: 0px;
    padding-left: 0px;
    margin-right: auto;
    margin-left: auto;
}
.main_ldpg .mn_form12 {
    width: 100%;
    margin-left: auto;
    margin-right: auto;
    display: block;
    margin: 0;
    padding: 0;
}
.main_ldpg #contact_frm2 {
    
    border-radius: 0px;
        box-shadow: 0px 0px 0px 0px #3487cc inset;
}

}

.intl-tel-input .flag-dropdown .country-list .country { 
    display: flex !important;
}
.form-row .intl-tel-input input { 
    padding-left: 25% !important; 
}
</style>
<style type="text/css">
         #g-recaptcha-response {
         display: block !important;
         position: absolute;
         margin: -78px 0 0 0 !important;
         width: 302px !important;
         height: 76px !important;
         z-index: -999999;
         opacity: 0;
         background-color:red;
         color:white;
         }
         p{
         margin: 0;
         font-size: 16px;
         font-weight: 300;
         line-height: 24px; 
         padding: 10px 0px; 
         word-spacing: 0.2px;
         }
         footer#footer ul li i {
         font-size: 16px;
         padding-right: 8px;
         color: #3e9ff6;
         }
         #footer .footer-contact li {
         padding-bottom: 7px;
         line-height: 25px;
         }
         .footer-links ul li{
         padding-left: 6px;
         }
         .footer-links ul li a {
         color: #fff !important;
         }
         .back-to-top {
         margin-bottom: 60px;
         }
         #footer .footer-top .footer-newsletter input[type="submit"] {
         border-radius: 3px;
         margin-left: -4px;
         }
         #popup_sub h5 {
         font-size: 22px;
         text-align: center;
         border-top: 3px double #439223;
         border-bottom: 3px double #439223;
         padding: 8px 0px;
         font-family: roboto;
         margin-bottom: 30px;
         width: 270px;
         margin-left: auto;
         margin-right: auto;
         display: block;
         font-weight: 500;
         }
         #popup_sub input[type="email"] {
         border: 1px solid #439223 !important;
         margin-bottom: 30px;
         background: #fafafa;
         }
         #popup_sub input.btn.btn-success {
         text-align: center;
         margin-left: auto;
         margin-right: auto;
         display: block;
         background: #439223 !important;
         border: 1px solid #439223;
         }
         #popup_sub button.close {
         background: #439223;
         color: #fff !important;
         padding: 0px 6px 6px 6px;
         position: absolute;
         border-radius: 50px;
         }
         .icon-bar a {
         padding: 5px 10px !important;
         font-size: 22px !important;
         }
         ul.footer_nav {
    padding: 30px 0;
    float: right;
}
ul.footer_nav li {
    list-style: none;
    float: left;
    padding: 0 10px;
    font-size: 12px;
    color: #fff !important;
}
ul.footer_nav li a { 
    color: #fff !important;
}
.contactForm button {
    background: #56bf79;
    border: 0;
    color: #fff;
    padding: 9px 0px;
    width: 100%;
    margin: 0px 0px;
    border-radius: 3px;
    font-size: 16px;
}
input#mobile-number {
    padding-left: 15%;
    margin-bottom: 0;
}

.group_std.ccie {
    background: url(../images/ccieoverlay.png);
    background-size: contain;
    margin-top: 30px;
    margin-bottom: 10px;
    height: 225px;
    box-shadow: 0px 0px 1px 1px;
    padding: 1px 20px;
    padding-bottom: 0px;
    background-position: center;
    background-repeat: no-repeat;
}
.group_std h3 {
    text-align: center;
    font-size: 18px;
    line-height: 27px;
    margin-bottom: 20px;
}
.group_std a {
       background: #56bf79;
    color: #fff !important;
    padding: 10px 16px;
    border-radius: 3px;
    text-decoration: none !important;
    margin-top: 10px;
}
.main_grp h4 {
    margin: 0;
    padding: 0;
    text-align: center;
    padding-left: 13px;
    font-size: 24px;
    margin-bottom: -6px;
    padding-top: 40px;
    color: #03a9f4;
    text-transform: uppercase;
    float: left;
    width: 100%;
}
.main_grp {
    padding-bottom: 30px;
    float: left;
}



@media(max-width: 767px)
{
    .group_std.ccie {
    background-size: contain;
    margin-top: 10px;
    margin-bottom: -1px;
    height: auto;
    box-shadow: 0px 0px 1px 1px;
    padding: 1px 3px 20px 0px;
    padding-bottom: 13px;
    background-position: center;
    background-repeat: no-repeat;
}
.group_std h3 {
    text-align: center;
    font-size: 14px;
    line-height: 18px;
    margin-bottom: 20px;
}
.group_std a {
    background: #56bf79;
    color: #fff !important;
    padding: 6px 5px;
    border-radius: 3px;
    text-decoration: none !important;
    margin-top: 10px;
    font-size: 12px;
}
.main_grp h4 {
   
    padding-left: 0px;
    padding-bottom:10px;
    
}
.main_grp .col-md-3.col-xs-6.col-sm-6 {
    padding: 0px 0px 0px 9px;
}

}

@media (max-width: 359px)
{
.group_std a {
    background: #56bf79;
    color: #fff !important;
    padding: 6px 5px;
    border-radius: 3px;
    text-decoration: none !important;
    margin-top: 10px;
    font-size: 10px;
}
    
}
      </style>
<div class="top_hed">
    <a href="https://octanetworks.com/">
           <img src="https://octanetworks.com/img/logo.png">
    </div>
    </a>
    
<div class="mn_banner">
           <img src="https://octanetworks.com/img/octa_lanimg.jpg">
    </div>
    
    <div class="rs_banner">
           <img src="https://octanetworks.com/img/octa_lanimg-res.jpg">
    </div>
<div class="wrapper text-center main_ldpg clearfix">
   <div class="container">
      
       <div class="mn_form12">
	  <div id="contact_frm2">
            <h3 class="enquiry_now_btn">Enquire Now</h3>
            <?php
               $mType = Yii::app()->request->getParam("type");
               if($mType == 1){ $alertClass = "alert-success";}else{$alertClass = "alert-danger";}
                ?>
            <?php if(Yii::app()->user->hasState('fmessage')){ ?>
            <div class="text-center alert <?=$alertClass?>"><span style=""><?php echo Yii::app()->user->getState("fmessage"); ?></span></div>
            <?php } ?>
            <?php Yii::app()->user->setState("fmessage", null); ?> 
             <!--  <h4>Request Your Trial</h4> -->
               <div class=" ">
                  <div class=" ">
                     <form action="<?php echo Yii::app()->createUrl("main/forms/gettouch"); ?>" method="post" role="form" class="contactForm">
					    <div class="form-group ">
                           <input type="name" name="name" class="form-control" placeholder="Name" required="required">
                        </div>
                        <div class="form-group ">
                           <input type="email" name="myemail" class="form-control" placeholder="Email" required="required" >
                        </div>

                        <div class="form-group ">
                            <input type="tel" id="mobile-number" name="phone" placeholder="+91">
                        </div>
                       
                        
                        <div class=" ">
                           <div class="g-recaptcha" data-sitekey="<?=Yii::app()->params['siteKey']?>"></div>
                           <input type="hidden" name="type" value="CCIE Enterprise Infrastructure Lab Free Bootcamp" />
													  
                        </div>
						 <div class=" " style="    color: #fff;
    margin-top: 10px;">
												<input type="checkbox" class="subscribe_approval" name="subscribe_approval" value="1" checked="checked">&nbsp;&nbsp;Subscribe to our Newsletter. <br>  <br> 
                        </div>
                        <div class="form-group "> 
                           <button type="submit" title="Submit">Submit</button>
                        </div>
                     </form>
                  </div>
               </div> 
         </div>
      </div>
      
      
      <div class="main_grp">
							    <h4>CCIE Enterprise Group</h4>
							    <div class="col-md-12">
							<div class="col-md-3 col-xs-6 col-sm-6">
								<div class="group_std ccie">
								    <img src="https://www.makent.in/wp-content/uploads/2019/03/whatsapp-icon-png-17.png">
										<h3>CCIE Enterprise <br>Group 1</h3>
										<a target="_blank" href="https://chat.whatsapp.com/IHwI0oME8ILCgQBHEKoc0O">Click to Join This Group <i class="fa fa-angle-double-right faa-horizontal animated"></i></a>
								</div>
							</div>
							
								<div class="col-md-3 col-xs-6 col-sm-6">
								<div class="group_std ccie">
								     <img src="https://www.makent.in/wp-content/uploads/2019/03/whatsapp-icon-png-17.png">
											<h3>CCIE Enterprise <br>Group 2</h3>
										<a target="_blank" href="https://chat.whatsapp.com/IYIgda1087OIxQDbtwLGxu">Click to Join This Group <i class="fa fa-angle-double-right faa-horizontal animated"></i> </a>
								</div>
							</div>
							
								<div class="col-md-3 col-xs-6 col-sm-6">
								<div class="group_std ccie">
								     <img src="https://www.makent.in/wp-content/uploads/2019/03/whatsapp-icon-png-17.png">
											<h3>CCIE Enterprise <br>Group 3</h3>
										<a target="_blank" href="https://chat.whatsapp.com/HYwCdYwWGuK8bUzmqbYaNJ">Click to Join This Group <i class="fa fa-angle-double-right faa-horizontal animated"></i> </a>
								</div>
							</div>
							
								<div class="col-md-3 col-xs-6 col-sm-6">
								<div class="group_std ccie">
								     <img src="https://www.makent.in/wp-content/uploads/2019/03/whatsapp-icon-png-17.png">
										<h3>CCIE Enterprise <br>Group 4</h3>
										<a target="_blank" href="https://chat.whatsapp.com/DDDMfJkmQEJE5vc6pWktGv">Click to Join This Group <i class="fa fa-angle-double-right faa-horizontal animated"></i> </a>
								</div>
								</div>
							</div>
							<div class="col-md-12"> 
								<div class="col-md-3 col-xs-6 col-sm-6">
								<div class="group_std ccie">
								     <img src="https://www.makent.in/wp-content/uploads/2019/03/whatsapp-icon-png-17.png">
										<h3>CCIE Enterprise <br>Group 5</h3>
										<a target="_blank" href="https://chat.whatsapp.com/FJgw4fA7RKR7S80H44onSo">Click to Join This Group <i class="fa fa-angle-double-right faa-horizontal animated"></i> </a>
								</div>
							</div>
							
								<div class="col-md-3 col-xs-6 col-sm-6">
								<div class="group_std ccie">
								     <img src="https://www.makent.in/wp-content/uploads/2019/03/whatsapp-icon-png-17.png">
										<h3>CCIE Enterprise <br>Group 6</h3>
										<a target="_blank" href="https://chat.whatsapp.com/FRexpZ0RnFx7V2tA09Cuq5">Click to Join This Group <i class="fa fa-angle-double-right faa-horizontal animated"></i> </a>
								</div>
							</div>
							
								<div class="col-md-3 col-xs-6 col-sm-6">
								<div class="group_std ccie">
								     <img src="https://www.makent.in/wp-content/uploads/2019/03/whatsapp-icon-png-17.png">
										<h3>CCIE Enterprise <br>Group 7</h3>
										<a target="_blank" href="https://chat.whatsapp.com/BsyFk7fmvnA626eNOWFjSS">Click to Join This Group <i class="fa fa-angle-double-right faa-horizontal animated"></i> </a>
								</div>
							</div>
							
								<div class="col-md-3 col-xs-6 col-sm-6">
								<div class="group_std ccie">
								     <img src="https://www.makent.in/wp-content/uploads/2019/03/whatsapp-icon-png-17.png">
										<h3>CCIE Enterprise <br>Group 8</h3>
										<a target="_blank" href="https://chat.whatsapp.com/ExgBeykFp1bJwXlxENlBjc">Click to Join This Group <i class="fa fa-angle-double-right faa-horizontal animated"></i> </a>
								</div>
							</div>
							
								</div>
								
								<div class="col-md-12"> 
								<div class="col-md-3 col-xs-6 col-sm-6">
								<div class="group_std ccie">
								     <img src="https://www.makent.in/wp-content/uploads/2019/03/whatsapp-icon-png-17.png">
										<h3>CCIE Enterprise <br>Group 9</h3>
										<a target="_blank" href="https://chat.whatsapp.com/F2ZDB4iVPFe4XvGujU7FWt">Click to Join This Group <i class="fa fa-angle-double-right faa-horizontal animated"></i> </a>
								</div>
							</div>
							
								<div class="col-md-3 col-xs-6 col-sm-6">
								<div class="group_std ccie">
								     <img src="https://www.makent.in/wp-content/uploads/2019/03/whatsapp-icon-png-17.png">
										<h3>CCIE Enterprise <br>Group 10</h3>
										<a target="_blank" href="https://chat.whatsapp.com/BJQ5s0r2XzY60KRLvnCh5T">Click to Join This Group <i class="fa fa-angle-double-right faa-horizontal animated"></i> </a>
								</div>
							</div>
							
							
							
								</div>
							</div>
    
   </div>
</div> 




