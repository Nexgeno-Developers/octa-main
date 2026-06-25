$home="";
$suffic=".html";

$(function () {
    
    var url = window.location.pathname.split("/");
	var questions = url[2];
	var topics = url[3];
	console.log(topics);


	if (questions==='default' || questions==='content')
{
	$("#global-menu").css('display','block');
}

	if (topics === 'topics')
{
	console.log('Test');
	
}

	if (questions==='vendor')
{
	$("#vendor-menu").css('display','block');
}

	if (questions==='cert')
{
	$("#cert-menu").css('display','block');
}
		if (questions==='exam')
{
	$("#exam-menu").css('display','block');
}

	if (questions==='availability')
{
	$("#availability-menu").css('display','block');
}

	if (questions==='topics')
{
	/* $("#availability-menu").css('display','block'); */
}

	if (questions==='coupon')
{
	$("#coupon-menu").css('display','block');
}

	if (questions==='order')
{
	$("#order-menu").css('display','block');
}

	if (questions==='cms')
{
	$("#cms-menu").css('display','block');
}	

	if (questions==='users')
{
	$("#users-menu").css('display','block');
}	

	if (questions==='testimonials')
{
	$("#testi-menu").css('display','block');
}

	var _questions = url[3];
	
	if (_questions==='requests.html' || _questions==='download_listing.html' || _questions==='notifyme.html')
	{
		$("#request-menu").css('display','block');
		$("#exam-menu").css('display','none')
	}

	if (_questions==='availability')
	{
		$("#availability-menu").css('display','block');
		$("#exam-menu").css('display','none')
	}




    $('.datepicker').datepicker({
        format: 'yyyy/mm/dd',
    });
    
    
    $('#add').submit(function(evt){
       evt.preventDefault();
       CKEDITOR.instances.description.updateElement();
       var $form = $(this);
           $.ajax({
            type: $form.prop('method'),
            url: $form.prop('action'),
            data: $form.serialize(),
            dataType: "json",
            traditional: true,
            
            success: function (response) {
                if (response.status==="ok")
                {
                document.getElementById("add").reset();
				CKEDITOR.instances.description.setData('');
                $("html, body").animate({ scrollTop: 0 }, "slow");
                $("#success-alert").html("Added Successfully");
                 $("#success-alert").slideDown('slow');
                setTimeout(function(){
                $("#success-alert").slideUp('slow');        
                }, 5000);
               }
               else if (response.status==="already")
                 {
                $("html, body").animate({ scrollTop: 0 }, "slow");
                //$("#success-alert").slideDown('slow');
                $("#danger-alert").html("Already exists");
                $("#danger-alert").slideDown('slow');
                setTimeout(function(){
                $("#success-alert").slideUp('slow');        
                }, 5000);
                
                }
                
            },
             error: function (response) {
                debugger;
                alert(response.d);
            }
        })
       
   })//vendor form
   
   $('#edit').submit(function(evt){
       evt.preventDefault();
       CKEDITOR.instances.description.updateElement();
       var $form = $(this);
           $.ajax({
            type: $form.prop('method'),
            url: $form.prop('action'),
            data: $form.serialize(),
            dataType: "json",
            traditional: true,
            
            success: function (response) {
                //alert(response.status);
                if (response.status==="ok"){
                
                //document.getElementById("addvendor").reset();
                $("html, body").animate({ scrollTop: 0 }, "slow");
                $("#success-alert").html("Edited Successfully");
                $("#success-alert").slideDown('slow');
                setTimeout(function(){
                $("#success-alert").slideUp('slow');        
                }, 5000);
            }
            else 
            {
                
            }
            },
             error: function (response) {
                debugger;
                alert(response.d);
            }
        });
       
   })//Edit vendor form
   // delete vendor, cert, exam
   
   $('#editform').submit(function(evt){
       evt.preventDefault();
       var $form = $(this);
           $.ajax({
            type: $form.prop('method'),
            url: $form.prop('action'),
            data: $form.serialize(),
            dataType: "json",
            traditional: true,
            
            success: function (response) {
                //alert(response.status);
                if (response.status==="ok"){
                
                //document.getElementById("addvendor").reset();
                $("html, body").animate({ scrollTop: 0 }, "slow");
                $("#success-alert").html("Edited Successfully");
                $("#success-alert").slideDown('slow');
                setTimeout(function(){
                $("#success-alert").slideUp('slow');        
                }, 5000);
            }
            else 
            {
                
            }
            },
             error: function (response) {
                debugger;
                alert(response.d);
            }
        });
       
   })//Edit
    
    //Vendor Drop Down Change
    $("#vendor_exam").on("change",function(){
        $id=$("#vendor_exam").val();
        if ($id==="null")
        {
            $("#cert_dropdown").slideUp("slow");
            return;
        }
        $url=$("#vendor_exam").data("url");
//        alert($url);
       $.ajax({
            type: "POST",
            url: $url,
            data: {id:$id},
            dataType: "json",
            traditional: true,
            
            success: function (response) {
                if (response.status==="ok"){
                    if (!$.isEmptyObject(response.cert))
                    {
                         $html="<select name='cert' class='dropdown form-control' required='required'>";
						 $html+="<option value='NULL'>Select Certification</option>";
                        $.each( response.cert, function( key, value ) {
                            $html+="<option value="+value.id+">"+value.name+"</option>";
                        });
						$html+="</select>";
                        $("#cert").html($html);
                        //$("#cert_dropdown").slideDown("slow");
                    }
                    
                
                }
            },
             error: function (response) {
                debugger;
                alert(response.d);
            }
           
       }) ;
    });
	//Exam from vendorcert
	$("#cexam_code").on("change",function(){
        $id=$("#cexam_code").val();
        if ($id==="null")
        {
            $("#cte_dropdown").slideUp("slow");
            return;
        }
        $url=$("#cexam_code").data("url");
//        alert($url);
       $.ajax({
            type: "POST",
            url: $url,
            data: {id:$id},
            dataType: "json",
            traditional: true,
            
            success: function (response) {
                if (response.status==="ok"){
                    if (!$.isEmptyObject(response.cert))
                    {
                         $html="";
						
                        $.each( response.cert, function( key, value ) {

                            $html+="<option value="+value.id+">"+value.name+"</option>";
                        });
						 
                        $("#cte_certe").html($html);
                        //$("#cert_dropdown").slideDown("slow");
                    }
                    
                
                }
            },
             error: function (response) {
                debugger;
                alert(response.d);
            }
           
       }) ;
    });
    
    
    
       
    
    
    
    
    
    
    
   
   

    
  
  ////////////************************************Replace And Retired Exam **********************************//////////////////////////  
    

        $('#retireexam').submit(function(evt){
       evt.preventDefault();
       var $form = $(this);
           $.ajax({
            type: $form.prop('method'),
            url: $form.prop('action'),
            data: $form.serialize(),
            dataType: "json",
            traditional: true,
            
            success: function (response) {
                if (response.status==="ok")
                {
                $("html, body").animate({ scrollTop: 0 }, "slow");
                $("#success-alert").html("Exam Retired Successfully");
                 $("#success-alert").slideDown('slow');
                setTimeout(function(){
                $("#success-alert").slideUp('slow');        
                }, 5000);
               }
               else if (response.status==="already")
                 {
                $("html, body").animate({ scrollTop: 0 }, "slow");
                //$("#success-alert").slideDown('slow');
                $("#danger-alert").html("Error Ocurs");
                $("#danger-alert").slideDown('slow');
                setTimeout(function(){
                $("#success-alert").slideUp('slow');        
                }, 5000);
                
                }
                
            },
             error: function (response) {
                debugger;
                alert(response.d);
            }
        })
       
   })//Replace Exam form

    
    
    
//   
   
 ////////////************************************Replace And Retired Exam **********************************//////////////////////////
 
 
 
 
 
 
 
 
 
 
 
 
 $('#update_price').submit(function(evt){
       evt.preventDefault();
       var $form = $(this);
           $.ajax({
            type: $form.prop('method'),
            url: $form.prop('action'),
            data: $form.serialize(),
            dataType: "json",
            traditional: true,
            
            success: function (response) {
                if (response.status==="ok")
                {
//                document.getElementById("edit_content").reset();
                $("html, body").animate({ scrollTop: 0 }, "slow");
                $("#success-alert").html("Updated Price Successfully");
                 $("#success-alert").slideDown('slow');
                setTimeout(function(){
                $("#success-alert").slideUp('slow');        
                }, 5000);
               }
               else
               {
                $("html, body").animate({ scrollTop: 0 }, "slow");
                $("#danger-alert").html("Update Price Failed");
                 $("#danger-alert").slideDown('slow');
                setTimeout(function(){
                $("#danger-alert").slideUp('slow');        
                }, 5000);
               }   
               },
             error: function (response) {
                debugger;
                alert(response.d);
            }
        })
    })//Update Price Exam
    
    
   //Process Hot & Active
   
   $(document).delegate(".process-it","click",function(){
       
       $id=$(this).data("id");
       $type= $(this).data("type");
       $see= $(this).data("see");
       
       $url=$(this).data("url");
       
       
       
     
           $.ajax({
            type: "POST",
            url: $url,
            data: {id:$id},
            dataType: "json",
            traditional: true,
            
            success: function (response) {
                  
                if (response.status === "ok") {
                 
                 $_url= response.url;
                 $_date=response.date;
                 if (!$see) {
                    // is empty or whitespace
                    if ($type==1)
                    {
                     $html="<a class='process-it' data-url="+$_url+" data-id="+$id+" data-type='2' data-see='' href='javascript:void(0)'><span class='label label-danger label-mini'>No</span></a>"
                        $("#enable-td-"+$id).html($html); 
                        $("#date-td-"+$id).html($_date);
                        
                    }
                    else
                    {
                        $html="<a class='process-it' data-url="+$_url+" data-id="+$id+" data-type='1' data-see='' href='javascript:void(0)'><span class='label label-success label-mini'>Yes</span></a>"
                        $("#enable-td-"+$id).html($html); 
                        $("#date-td-"+$id).html($_date);
                    }
                }
                
                else
                {
                    if ($type==1)
                    {
                     $html="<a class='process-it' data-url="+$_url+" data-id="+$id+" data-type='2' data-see='2' href='javascript:void(0)'><span class='label label-danger label-mini'>No</span></a>"
                        $("#enable-active-td-"+$id).html($html); 
                        $("#date-td-"+$id).html($_date);
                    }
                    else
                    {
                        $html="<a class='process-it' data-url="+$_url+" data-id="+$id+" data-type='1' data-see='1' href='javascript:void(0)'><span class='label label-success label-mini'>Yes</span></a>"
                        $("#enable-active-td-"+$id).html($html);
                        $("#date-td-"+$id).html($_date);
                    }
                }
                 
                 
                
                    
                }
                 else if(response.status=== "sorry")
                {
                    $("html, body").animate({ scrollTop: 0 }, "slow");
                    $("#danger-alert").html("Cant Active it Because it's Vendor is disabled");
                    $("#danger-alert").slideDown('slow');
                     setTimeout(function(){
                    $("#danger-alert").slideUp('slow');        
                    }, 3000);
                    
                }
                else if(response.status=== "csorry")
                {
                    $("html, body").animate({ scrollTop: 0 }, "slow");
                    $("#danger-alert").html("Cant Active it Because it's Cert is disabled");
                    $("#danger-alert").slideDown('slow');
                     setTimeout(function(){
                    $("#danger-alert").slideUp('slow');        
                    }, 3000);
                    
                }
                if(response.status === "error") {
                   //debugger;
                    //alert;
                
                   
                    //window.location=response.url;
                    
                }
                
               
            },
            error: function (response) {
                //debugger;
                alert(response);
            }
        });
       
       
       
       
   });// Process Hot



 $(document).delegate(".enable-it","click",function(){
       
       $id=$(this).data("id");
       $url=$(this).data("url");
		$type=$(this).data("type");
     
           $.ajax({
            type: "POST",
            url: $url,
            data: {id:$id},
            dataType: "json",
            traditional: true,
            
            success: function (response) {
                  
                if (response.status === "ok") {
                 
                 $_url= response.url;

                    if ($type==1)
                    {
                     $html="<a class='enable-it' data-url="+$url+" data-id="+$id+" data-type='2' data-see='2' href='javascript:void(0)'><span class='label label-success label-mini'>Enable</span></a>"
                        $("#enable-td-"+$id).html($html); 
                    }
                    else
                    {
                        $html="<a class='enable-it' data-url="+$url+" data-id="+$id+" data-type='1' data-see='1' href='javascript:void(0)'><span class='label label-danger label-mini'>Disable</span></a>"
                        $("#enable-td-"+$id).html($html);
                    }
               
                 
                 
                
                    
                }
                if(response.status === "error") {
                   //debugger;
                    //alert;
                
                   
                    //window.location=response.url;
                    
                }
                
               
            },
            error: function (response) {
                //debugger;
                alert(response);
            }
        });
       
       
       
       
   });// Enable/Disable
	
 
 
 
});//main function


var title_text_max = 60;
$('#title_count_message').html(title_text_max + ' Character Limit');

$('#page_title').keyup(function() {
  var title_text_length = $('#page_title').val().length;
  var title_text_remaining = title_text_max - title_text_length;
  
	if(title_text_remaining >= 0){
		$('#title_count_message').html(title_text_remaining + ' Character Remaining');
	}else{
		$('#title_count_message').html('<span style="color:red">' + title_text_remaining + ' Character</span>');
	}
});


var seo_desc_text_max = 170;
$('#seo_desc_count_message').html(seo_desc_text_max + ' Character Limit');

$('#seo_desc').keyup(function() {
  var seo_desc_text_length = $('#seo_desc').val().length;
  var seo_desc_text_remaining = seo_desc_text_max - seo_desc_text_length;
  
	if(seo_desc_text_remaining >= 0){
  		$('#seo_desc_count_message').html(seo_desc_text_remaining + ' Character Remaining');
	}else{
		$('#seo_desc_count_message').html('<span style="color:red">' + seo_desc_text_remaining + ' Character</span>');
	}
});

 $("#checkAll").click(function () {
     $('input:checkbox').not(this).prop('checked', this.checked);
 });

