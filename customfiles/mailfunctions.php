<?php
// Use Composer-installed PHPMailer
require_once __DIR__ . '/vendor/autoload.php';
require_once dirname(__DIR__) . '/protected/config/load-secrets.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$octaSecrets = octa_load_secrets();
$myToday = date("Y-m-d");

$GLOBALS["host"] = $octaSecrets['mailHost'];
$GLOBALS["port"] = $octaSecrets['mailPort'];
$GLOBALS["username"] = $octaSecrets['mailUsername'];
$GLOBALS["username1"] = $octaSecrets['mailUsernameAlt'];
$GLOBALS["password"] = $octaSecrets['mailPassword'];
$GLOBALS["mydate"] = date("Y-m-d");

    function create_contact_sendblue($emailid)
    {
        $octaSecrets = octa_load_secrets();
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api.sendinblue.com/v3/contacts',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS =>'
        {
             "email": "'.$emailid.'",
             "emailBlacklisted": false,
             "smsBlacklisted": false,
             "listIds": [
                  9
             ],
             "updateEnabled": false,
             "smtpBlacklistSender": [
                  "user@example.com"
             ]
        }
        ',
          CURLOPT_HTTPHEADER => array(
            'Accept: application/json',
            'Content-Type: application/json',
            'api-key: ' . $octaSecrets['brevoApiKey']
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        //echo $response;     
    }

	function quick_contact($spram){ //Done
		$farr	=	array("[DATE]","[NAME]","[EMAIL]","[SUBJECT]","[MESSAGE]");
		$aarr	=	array($GLOBALS["mydate"],$spram[1],$spram[2],$spram[4],$spram[3]);
		$mailt = Mailstable::model()->findByPk(1);  

		$to = $GLOBALS["username"];
		$from = $GLOBALS["username"];
		$Subject=$mailt->mailtitle;  
		$MailContent = str_replace($farr, $aarr,$mailt->mailcontent);

		/*New SMTP - START*/
        $mail = new PHPMailer(true);
        
        $mail->isSMTP();
        $mail->Host       = $GLOBALS["host"];
        $mail->SMTPAuth   = true;
        $mail->Username   = $GLOBALS["username"];
        $mail->Password   = $GLOBALS["password"];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        
        $mail->setFrom($from, 'OctaNetworks');
        $mail->addAddress($to);
        //$mail->addCC($GLOBALS["username1"]);
        
        $mail->isHTML(true);
        $mail->Subject = $Subject;
        $mail->Body    = $MailContent;
        
        $mail->send();
        /*New SMTP - END*/
	}//Quick Contact

	function enquire_now($spram){ //Done
		$farr	=	array("[DATE]","[NAME]","[EMAIL]","[SUBJECT]","[MESSAGE]","[PHONE]");
		$aarr	=	array($GLOBALS["mydate"],$spram[1],$spram[2],$spram[4],$spram[3],$spram[6]);
		$mailt = Mailstable::model()->findByPk(2);  

		$to = $GLOBALS["username"];
		$from = $GLOBALS["username"];
		$Subject=$mailt->mailtitle;  
		$MailContent = str_replace($farr, $aarr,$mailt->mailcontent);

		/*New SMTP - START*/
        $mail = new PHPMailer(true);
        
        $mail->isSMTP();
        $mail->Host       = $GLOBALS["host"];
        $mail->SMTPAuth   = true;
        $mail->Username   = $GLOBALS["username"];
        $mail->Password   = $GLOBALS["password"];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        
        $mail->setFrom($from, 'OctaNetworks');
        $mail->addAddress($to);
        //$mail->addCC($GLOBALS["username1"]);
        
        $mail->isHTML(true);
        $mail->Subject = $Subject;
        $mail->Body    = $MailContent;
        
        $mail->send();
        /*New SMTP - END*/
	}//Quick Contact
	
	function email_contactus($spram){
		$farr	=	array("[DATE]","[NAME]","[EMAIL]","[PHONENO]","[SUBJECT]","[MESSAGE]");
		$aarr	=	array($GLOBALS["mydate"],$spram[1],$spram[2],$spram[7],$spram[4],$spram[3]);
		$mailt = Mailstable::model()->findByPk(2);  

		$to = $GLOBALS["username"];
		$from = $GLOBALS["username"];
		$Subject=$mailt->mailtitle;  
		$MailContent = str_replace($farr, $aarr,$mailt->mailcontent);

		/*New SMTP - START*/
        $mail = new PHPMailer(true);
        
        $mail->isSMTP();
        $mail->Host       = $GLOBALS["host"];
        $mail->SMTPAuth   = true;
        $mail->Username   = $GLOBALS["username"];
        $mail->Password   = $GLOBALS["password"];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        
        $mail->setFrom($from, 'OctaNetworks');
        $mail->addAddress($to);
        //$mail->addCC($GLOBALS["username1"]);
        
        $mail->isHTML(true);
        $mail->Subject = $Subject;
        $mail->Body    = $MailContent;
        
        $mail->send();
        /*New SMTP - END*/
	}//Contact us
	
	function email_feedback($spram){
		$farr	=	array("[DATE]","[NAME]","[EMAIL]","[MESSAGE]");
		$aarr	=	array($GLOBALS["mydate"],$spram[1],$spram[2],$spram[3]);
		$mailt = Mailstable::model()->findByPk(3);  

		$to = $GLOBALS["username"];
		$from = $GLOBALS["username"];
		$Subject=$mailt->mailtitle;  
		$MailContent = str_replace($farr, $aarr,$mailt->mailcontent);

		/*New SMTP - START*/
        $mail = new PHPMailer(true);
        
        $mail->isSMTP();
        $mail->Host       = $GLOBALS["host"];
        $mail->SMTPAuth   = true;
        $mail->Username   = $GLOBALS["username"];
        $mail->Password   = $GLOBALS["password"];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        
        $mail->setFrom($from, 'OctaNetworks');
        $mail->addAddress($to);
        //$mail->addCC($GLOBALS["username1"]);
        
        $mail->isHTML(true);
        $mail->Subject = $Subject;
        $mail->Body    = $MailContent;
        
        $mail->send();
        /*New SMTP - END*/
	}//FeedBack
	
	function email_callback($spram){
		$farr	=	array("[DATE]","[NAME]","[PHONE]");
		$aarr	=	array($GLOBALS["mydate"],$spram[1],$spram[2]);
		$mailt = Mailstable::model()->findByPk(4);  

		$to = $GLOBALS["username"];
		$from = $GLOBALS["username"];
		$Subject=$mailt->mailtitle;  
		$MailContent = str_replace($farr, $aarr,$mailt->mailcontent);

		/*New SMTP - START*/
        $mail = new PHPMailer(true);
        
        $mail->isSMTP();
        $mail->Host       = $GLOBALS["host"];
        $mail->SMTPAuth   = true;
        $mail->Username   = $GLOBALS["username"];
        $mail->Password   = $GLOBALS["password"];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        
        $mail->setFrom($from, 'OctaNetworks');
        $mail->addAddress($to);
        //$mail->addCC($GLOBALS["username1"]);
        
        $mail->isHTML(true);
        $mail->Subject = $Subject;
        $mail->Body    = $MailContent;
        
        $mail->send();
        /*New SMTP - END*/
	}//FeedBack
	
	function email_gettouch($spram){
		$farr	=	array("[DATE]","[NAME]","[EMAIL]","[PHONE]","[COURSE]","[WHATSAPP]");
		$aarr	=	array($GLOBALS["mydate"],$spram[1],$spram[2],$spram[3],$spram[4],$spram[6]);
		$mailt = Mailstable::model()->findByPk(5);  

		$to = $GLOBALS["username"];
		$from = $GLOBALS["username"];
		$Subject=$mailt->mailtitle;  
		$MailContent = str_replace($farr, $aarr,$mailt->mailcontent);

		$mail = new PHPMailer(true); // exceptions enabled
		try {
			$mail->isSMTP();
			$mail->Host       = $GLOBALS["host"];
			$mail->SMTPAuth   = true;
			$mail->Username   = $GLOBALS["username"];
			$mail->Password   = $GLOBALS["password"];

			// Gmail: port 587 with TLS (PHPMailer v7)
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
			$mail->Port       = $GLOBALS["port"];

			$mail->setFrom($from, 'OctaNetworks');
			$mail->addAddress($to);
			if (!empty($GLOBALS["username1"])) {
				//$mail->addCC($GLOBALS["username1"]);
			}

			$mail->isHTML(true);
			$mail->Subject = $Subject;
			$mail->Body    = $MailContent;

			$mail->send();
			return true;
		} catch (Exception $e) {
			error_log('email_gettouch error: ' . $mail->ErrorInfo);
			return false;
		}
	}//FeedBack

	function email_gettouch_old($spram){
		$farr	=	array("[DATE]","[NAME]","[EMAIL]","[PHONE]","[COURSE]","[WHATSAPP]");
		$aarr	=	array($GLOBALS["mydate"],$spram[1],$spram[2],$spram[3],$spram[4],$spram[6]);
		$mailt = Mailstable::model()->findByPk(5);  

		$to = $GLOBALS["username"];
		$from = $GLOBALS["username"];
		$Subject=$mailt->mailtitle;  
		$MailContent = str_replace($farr, $aarr,$mailt->mailcontent);

		/*New SMTP - START*/
        $mail = new PHPMailer(true);
        
        $mail->isSMTP();
        $mail->Host       = $GLOBALS["host"];
        $mail->SMTPAuth   = true;
        $mail->Username   = $GLOBALS["username"];
        $mail->Password   = $GLOBALS["password"];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        
        $mail->setFrom($from, 'OctaNetworks');
        $mail->addAddress($to);
        //$mail->addCC($GLOBALS["username1"]);
        
        $mail->isHTML(true);
        $mail->Subject = $Subject;
        $mail->Body    = $MailContent;
        
        $mail->send();
        /*New SMTP - END*/
	}//FeedBack	
	
	
	function email_christmas($spram){
		$farr	=	array("[DATE]","[NAME]","[EMAIL]","[PHONE]","[COURSE]","[WHATSAPP]");
		$aarr	=	array($GLOBALS["mydate"],$spram[1],$spram[2],$spram[3],$spram[4],$spram[6]);
		$mailt = Mailstable::model()->findByPk(22);  

		$to = $GLOBALS["username"];
		$from = $GLOBALS["username"];
		$Subject=$mailt->mailtitle;  
		$MailContent = str_replace($farr, $aarr,$mailt->mailcontent);

		/*New SMTP - START*/
        $mail = new PHPMailer(true);
        
        $mail->isSMTP();
        $mail->Host       = $GLOBALS["host"];
        $mail->SMTPAuth   = true;
        $mail->Username   = $GLOBALS["username"];
        $mail->Password   = $GLOBALS["password"];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        
        $mail->setFrom($from, 'OctaNetworks');
        $mail->addAddress($to);
        //$mail->addCC($GLOBALS["username1"]);
        
        $mail->isHTML(true);
        $mail->Subject = $Subject;
        $mail->Body    = $MailContent;
        
        $mail->send();
        /*New SMTP - END*/
	}//FeedBack
	
	
	function email_ccnatraining($spram){
		$farr	=	array("[DATE]","[NAME]","[EMAIL]","[PHONE]","[COURSE]","[WHATSAPP]");
		$aarr	=	array($GLOBALS["mydate"],$spram[1],$spram[2],$spram[3],$spram[4],$spram[6]);
		$mailt = Mailstable::model()->findByPk(23);  

		$to = $GLOBALS["username"];
		$from = $GLOBALS["username"];
		$Subject=$mailt->mailtitle;  
		$MailContent = str_replace($farr, $aarr,$mailt->mailcontent);

		/*New SMTP - START*/
        $mail = new PHPMailer(true);
        
        $mail->isSMTP();
        $mail->Host       = $GLOBALS["host"];
        $mail->SMTPAuth   = true;
        $mail->Username   = $GLOBALS["username"];
        $mail->Password   = $GLOBALS["password"];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        
        $mail->setFrom($from, 'OctaNetworks');
        $mail->addAddress($to);
        //$mail->addCC($GLOBALS["username1"]);
        
        $mail->isHTML(true);
        $mail->Subject = $Subject;
        $mail->Body    = $MailContent;
        
        $mail->send();
        /*New SMTP - END*/
	}//FeedBack
	
	function email_ccdatraining($spram){
		$farr	=	array("[DATE]","[NAME]","[EMAIL]","[PHONE]","[COURSE]","[WHATSAPP]");
		$aarr	=	array($GLOBALS["mydate"],$spram[1],$spram[2],$spram[3],$spram[4],$spram[6]);
		$mailt = Mailstable::model()->findByPk(24);  

		$to = $GLOBALS["username"];
		$from = $GLOBALS["username"];
		$Subject=$mailt->mailtitle;  
		$MailContent = str_replace($farr, $aarr,$mailt->mailcontent);

		/*New SMTP - START*/
        $mail = new PHPMailer(true);
        
        $mail->isSMTP();
        $mail->Host       = $GLOBALS["host"];
        $mail->SMTPAuth   = true;
        $mail->Username   = $GLOBALS["username"];
        $mail->Password   = $GLOBALS["password"];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        
        $mail->setFrom($from, 'OctaNetworks');
        $mail->addAddress($to);
        //$mail->addCC($GLOBALS["username1"]);
        
        $mail->isHTML(true);
        $mail->Subject = $Subject;
        $mail->Body    = $MailContent;
        
        $mail->send();
        /*New SMTP - END*/
	}//FeedBack
	
	
	function email_sdwantraining($spram){
		$farr	=	array("[DATE]","[NAME]","[EMAIL]","[PHONE]","[COURSE]","[WHATSAPP]");
		$aarr	=	array($GLOBALS["mydate"],$spram[1],$spram[2],$spram[3],$spram[4],$spram[6]);
		$mailt = Mailstable::model()->findByPk(26);  

		$to = $GLOBALS["username"];
		$from = $GLOBALS["username"];
		$Subject=$mailt->mailtitle;  
		$MailContent = str_replace($farr, $aarr,$mailt->mailcontent);

		/*New SMTP - START*/
        $mail = new PHPMailer(true);
        
        $mail->isSMTP();
        $mail->Host       = $GLOBALS["host"];
        $mail->SMTPAuth   = true;
        $mail->Username   = $GLOBALS["username"];
        $mail->Password   = $GLOBALS["password"];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        
        $mail->setFrom($from, 'OctaNetworks');
        $mail->addAddress($to);
        //$mail->addCC($GLOBALS["username1"]);
        
        $mail->isHTML(true);
        $mail->Subject = $Subject;
        $mail->Body    = $MailContent;
        
        $mail->send();
        /*New SMTP - END*/
	}//FeedBack
	
		function email_ccnptraining($spram){
		$farr	=	array("[DATE]","[NAME]","[EMAIL]","[PHONE]","[COURSE]","[WHATSAPP]");
		$aarr	=	array($GLOBALS["mydate"],$spram[1],$spram[2],$spram[3],$spram[4],$spram[6]);
		$mailt = Mailstable::model()->findByPk(27);  

		$to = $GLOBALS["username"];
		$from = $GLOBALS["username"];
		$Subject=$mailt->mailtitle;  
		$MailContent = str_replace($farr, $aarr,$mailt->mailcontent);

		/*New SMTP - START*/
        $mail = new PHPMailer(true);
        
        $mail->isSMTP();
        $mail->Host       = $GLOBALS["host"];
        $mail->SMTPAuth   = true;
        $mail->Username   = $GLOBALS["username"];
        $mail->Password   = $GLOBALS["password"];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        
        $mail->setFrom($from, 'OctaNetworks');
        $mail->addAddress($to);
        //$mail->addCC($GLOBALS["username1"]);
        
        $mail->isHTML(true);
        $mail->Subject = $Subject;
        $mail->Body    = $MailContent;
        
        $mail->send();
        /*New SMTP - END*/
	}//FeedBack
	
	
		function email_paloaltotraining($spram){
		$farr	=	array("[DATE]","[NAME]","[EMAIL]","[PHONE]","[COURSE]","[WHATSAPP]");
		$aarr	=	array($GLOBALS["mydate"],$spram[1],$spram[2],$spram[3],$spram[4],$spram[6]);
		$mailt = Mailstable::model()->findByPk(28);  

		$to = $GLOBALS["username"];
		$from = $GLOBALS["username"];
		$Subject=$mailt->mailtitle;  
		$MailContent = str_replace($farr, $aarr,$mailt->mailcontent);

		/*New SMTP - START*/
        $mail = new PHPMailer(true);
        
        $mail->isSMTP();
        $mail->Host       = $GLOBALS["host"];
        $mail->SMTPAuth   = true;
        $mail->Username   = $GLOBALS["username"];
        $mail->Password   = $GLOBALS["password"];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        
        $mail->setFrom($from, 'OctaNetworks');
        $mail->addAddress($to);
        //$mail->addCC($GLOBALS["username1"]);
        
        $mail->isHTML(true);
        $mail->Subject = $Subject;
        $mail->Body    = $MailContent;
        
        $mail->send();
        /*New SMTP - END*/
	}//FeedBack
	
	
		function email_cehtraining($spram){
		$farr	=	array("[DATE]","[NAME]","[EMAIL]","[PHONE]","[COURSE]","[WHATSAPP]");
		$aarr	=	array($GLOBALS["mydate"],$spram[1],$spram[2],$spram[3],$spram[4],$spram[6]);
		$mailt = Mailstable::model()->findByPk(29);  

		$to = $GLOBALS["username"];
		$from = $GLOBALS["username"];
		$Subject=$mailt->mailtitle;  
		$MailContent = str_replace($farr, $aarr,$mailt->mailcontent);

		/*New SMTP - START*/
        $mail = new PHPMailer(true);
        
        $mail->isSMTP();
        $mail->Host       = $GLOBALS["host"];
        $mail->SMTPAuth   = true;
        $mail->Username   = $GLOBALS["username"];
        $mail->Password   = $GLOBALS["password"];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        
        $mail->setFrom($from, 'OctaNetworks');
        $mail->addAddress($to);
        //$mail->addCC($GLOBALS["username1"]);
        
        $mail->isHTML(true);
        $mail->Subject = $Subject;
        $mail->Body    = $MailContent;
        
        $mail->send();
        /*New SMTP - END*/
	}//FeedBack
	
		function email_freecorporatetraining($spram){
		$farr	=	array("[DATE]","[NAME]","[EMAIL]","[PHONE]","[WHATSAPP]","[COURSE]","[COURSENAME]","[COMPANYNAME]");
		$aarr	=	array($GLOBALS["mydate"],$spram[1],$spram[2],$spram[3],$spram[4],$spram[6],$spram[7],$spram[8]);
		$mailt = Mailstable::model()->findByPk(33);  

		$to = $GLOBALS["username"];
		$from = $GLOBALS["username"];
		$Subject=$mailt->mailtitle;  
		$MailContent = str_replace($farr, $aarr,$mailt->mailcontent);

		/*New SMTP - START*/
        $mail = new PHPMailer(true);
        
        $mail->isSMTP();
        $mail->Host       = $GLOBALS["host"];
        $mail->SMTPAuth   = true;
        $mail->Username   = $GLOBALS["username"];
        $mail->Password   = $GLOBALS["password"];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        
        $mail->setFrom($from, 'OctaNetworks');
        $mail->addAddress($to);
        //$mail->addCC($GLOBALS["username1"]);
        
        $mail->isHTML(true);
        $mail->Subject = $Subject;
        $mail->Body    = $MailContent;
        
        $mail->send();
        /*New SMTP - END*/
	}//FeedBack
	
		function email_awsfreetraining($spram){
		$farr	=	array("[DATE]","[NAME]","[EMAIL]","[PHONE]","[COURSE]","[WHATSAPP]");
		$aarr	=	array($GLOBALS["mydate"],$spram[1],$spram[2],$spram[3],$spram[4],$spram[6]);
		$mailt = Mailstable::model()->findByPk(34);  

		$to = $GLOBALS["username"];
		$from = $GLOBALS["username"];
		$Subject=$mailt->mailtitle;  
		$MailContent = str_replace($farr, $aarr,$mailt->mailcontent);

		/*New SMTP - START*/
        $mail = new PHPMailer(true);
        
        $mail->isSMTP();
        $mail->Host       = $GLOBALS["host"];
        $mail->SMTPAuth   = true;
        $mail->Username   = $GLOBALS["username"];
        $mail->Password   = $GLOBALS["password"];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        
        $mail->setFrom($from, 'OctaNetworks');
        $mail->addAddress($to);
        //$mail->addCC($GLOBALS["username1"]);
        
        $mail->isHTML(true);
        $mail->Subject = $Subject;
        $mail->Body    = $MailContent;
        
        $mail->send();
        /*New SMTP - END*/
	}//FeedBack
	
		function email_cciesecurityv61training($spram){
		$farr	=	array("[DATE]","[NAME]","[EMAIL]","[PHONE]","[COURSE]","[WHATSAPP]","[message]");
		$aarr	=	array($GLOBALS["mydate"],$spram[1],$spram[2],$spram[3],$spram[4],$spram[6],$spram[7]);
		$mailt = Mailstable::model()->findByPk(35);  

		$to = $GLOBALS["username"];
		$from = $GLOBALS["username"];
		$Subject=$mailt->mailtitle;  
		$MailContent = str_replace($farr, $aarr,$mailt->mailcontent);

		/*New SMTP - START*/
        $mail = new PHPMailer(true);
        
        $mail->isSMTP();
        $mail->Host       = $GLOBALS["host"];
        $mail->SMTPAuth   = true;
        $mail->Username   = $GLOBALS["username"];
        $mail->Password   = $GLOBALS["password"];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        
        $mail->setFrom($from, 'OctaNetworks');
        $mail->addAddress($to);
        //$mail->addCC($GLOBALS["username1"]);
        
        $mail->isHTML(true);
        $mail->Subject = $Subject;
        $mail->Body    = $MailContent;
        
        $mail->send();
        /*New SMTP - END*/
	}//FeedBack
	
		function email_diwalisale2023($spram){
		$farr	=	array("[DATE]","[NAME]","[EMAIL]","[PHONE]","[COURSE]","[WHATSAPP]","[couponcode]","[coupondescription]");
		$aarr	=	array($GLOBALS["mydate"],$spram[1],$spram[2],$spram[3],$spram[4],$spram[6],$spram[7],$spram[8]);
		$mailt = Mailstable::model()->findByPk(36);  

		$to = $GLOBALS["username"];
		$from = $GLOBALS["username"];
		$Subject=$mailt->mailtitle;  
		$MailContent = str_replace($farr, $aarr,$mailt->mailcontent);

		/*New SMTP - START*/
        $mail = new PHPMailer(true);
        
        $mail->isSMTP();
        $mail->Host       = $GLOBALS["host"];
        $mail->SMTPAuth   = true;
        $mail->Username   = $GLOBALS["username"];
        $mail->Password   = $GLOBALS["password"];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        
        $mail->setFrom($from, 'OctaNetworks');
        $mail->addAddress($to);
        //$mail->addCC($GLOBALS["username1"]);
        
        $mail->isHTML(true);
        $mail->Subject = $Subject;
        $mail->Body    = $MailContent;
        
        $mail->send();
        /*New SMTP - END*/
	}//FeedBack
	
		function email_christmaspage($spram){
		$farr	=	array("[DATE]","[NAME]","[EMAIL]","[PHONE]","[COURSE]","[WHATSAPP]","[couponcode]","[coupondescription]");
		$aarr	=	array($GLOBALS["mydate"],$spram[1],$spram[2],$spram[3],$spram[4],$spram[6],$spram[7],$spram[8]);
		$mailt = Mailstable::model()->findByPk(37);  

		$to = $GLOBALS["username"];
		$from = $GLOBALS["username"];
		$Subject=$mailt->mailtitle;  
		$MailContent = str_replace($farr, $aarr,$mailt->mailcontent);

		/*New SMTP - START*/
        $mail = new PHPMailer(true);
        
        $mail->isSMTP();
        $mail->Host       = $GLOBALS["host"];
        $mail->SMTPAuth   = true;
        $mail->Username   = $GLOBALS["username"];
        $mail->Password   = $GLOBALS["password"];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        
        $mail->setFrom($from, 'OctaNetworks');
        $mail->addAddress($to);
        //$mail->addCC($GLOBALS["username1"]);
        
        $mail->isHTML(true);
        $mail->Subject = $Subject;
        $mail->Body    = $MailContent;
        
        $mail->send();
        /*New SMTP - END*/
	}//FeedBack
	
		function email_cciecollaborationrefer($spram){
		$farr	=	array("[DATE]","[NAME]","[EMAIL]","[PHONE]","[COURSE]","[WHATSAPP]","[REFEREE_NAME]","[REFEREE_EMAIL]","[REFEREE_PHONE]");
		$aarr	=	array($GLOBALS["mydate"],$spram[1],$spram[2],$spram[3],$spram[4],$spram[6],$spram[7],$spram[8],$spram[9]);
		$mailt = Mailstable::model()->findByPk(30);  

		$to = $GLOBALS["username"];
		$from = $GLOBALS["username"];
		$Subject=$mailt->mailtitle;  
		$MailContent = str_replace($farr, $aarr,$mailt->mailcontent);

		/*New SMTP - START*/
        $mail = new PHPMailer(true);
        
        $mail->isSMTP();
        $mail->Host       = $GLOBALS["host"];
        $mail->SMTPAuth   = true;
        $mail->Username   = $GLOBALS["username"];
        $mail->Password   = $GLOBALS["password"];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        
        $mail->setFrom($from, 'OctaNetworks');
        $mail->addAddress($to);
        //$mail->addCC($GLOBALS["username1"]);
        
        $mail->isHTML(true);
        $mail->Subject = $Subject;
        $mail->Body    = $MailContent;
        
        $mail->send();
        /*New SMTP - END*/
	}//FeedBack
	
	
	function email_republicday($spram){
		$farr	=	array("[DATE]","[NAME]","[EMAIL]","[PHONE]","[COURSE]");
		$aarr	=	array($GLOBALS["mydate"],$spram[1],$spram[2],$spram[3],$spram[4]);
		$mailt = Mailstable::model()->findByPk(25);  

		$to = $GLOBALS["username"];
		$from = $GLOBALS["username"];
		$Subject=$mailt->mailtitle;  
		$MailContent = str_replace($farr, $aarr,$mailt->mailcontent);

		/*New SMTP - START*/
        $mail = new PHPMailer(true);
        
        $mail->isSMTP();
        $mail->Host       = $GLOBALS["host"];
        $mail->SMTPAuth   = true;
        $mail->Username   = $GLOBALS["username"];
        $mail->Password   = $GLOBALS["password"];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        
        $mail->setFrom($from, 'OctaNetworks');
        $mail->addAddress($to);
        //$mail->addCC($GLOBALS["username1"]);
        
        $mail->isHTML(true);
        $mail->Subject = $Subject;
        $mail->Body    = $MailContent;
        
        $mail->send();
        /*New SMTP - END*/
	}//FeedBack
	
	
		function email_freejncietraining($spram){
		$farr	=	array("[DATE]","[NAME]","[EMAIL]","[PHONE]","[COURSE]");
		$aarr	=	array($GLOBALS["mydate"],$spram[1],$spram[2],$spram[3],$spram[4]);
		$mailt = Mailstable::model()->findByPk(38);  

		$to = $GLOBALS["username"];
		$from = $GLOBALS["username"];
		$Subject=$mailt->mailtitle;  
		$MailContent = str_replace($farr, $aarr,$mailt->mailcontent);

		/*New SMTP - START*/
        $mail = new PHPMailer(true);
        
        $mail->isSMTP();
        $mail->Host       = $GLOBALS["host"];
        $mail->SMTPAuth   = true;
        $mail->Username   = $GLOBALS["username"];
        $mail->Password   = $GLOBALS["password"];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        
        $mail->setFrom($from, 'OctaNetworks');
        $mail->addAddress($to);
        //$mail->addCC($GLOBALS["username1"]);
        
        $mail->isHTML(true);
        $mail->Subject = $Subject;
        $mail->Body    = $MailContent;
        
        $mail->send();
        /*New SMTP - END*/
	}//FeedBack
	
	
	
	function enquire_now_1($spram){ //Done
		$farr	=	array("[DATE]","[NAME]","[EMAIL]","[SUBJECT]","[MESSAGE]","[PHONE]","[WHATSAPP]");
		$aarr	=	array($GLOBALS["mydate"],$spram[0],$spram[1],$spram[4],$spram[3],$spram[2],$spram[6]);
		$mailt = Mailstable::model()->findByPk(20);  

		$to = $GLOBALS["username"];
		$from = $GLOBALS["username"];
		$Subject=$mailt->mailtitle;  
		$MailContent = str_replace($farr, $aarr,$mailt->mailcontent);

// 		$mail= new PHPMailer();
//   		$mail->IsSMTP();  
// 		$mail->Host=$GLOBALS["host"];
// 		$mail->SMTPAuth = true; 
// 		$mail->SMTPSecure="ssl";   
// 		$mail->Username=$GLOBALS["username"];
// 		$mail->Password=$GLOBALS["password"];
// 		$mail->From=$from;
// 		$mail->FromName="OctaNetworks";
// 		$mail->AddAddress($to);
// 		$mail->AddCC($GLOBALS["username1"]);
// 		$mail->WordWrap=1000;
// 		$mail->IsHTML(true); 
// 		$mail->Subject=$Subject;
// 		$mail->Body=$MailContent;   
// 		$mail->Port=$GLOBALS["port"];
// 		$mail->Send();
		
		/*New SMTP - START*/
        $mail = new PHPMailer(true);
        
        $mail->isSMTP();
        $mail->Host       = $GLOBALS["host"];
        $mail->SMTPAuth   = true;
        $mail->Username   = $GLOBALS["username"];
        $mail->Password   = $GLOBALS["password"];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        
        $mail->setFrom($from, 'OctaNetworks');
        $mail->addAddress($to);
        // $mail->addCC($GLOBALS["username1"]);
        
        $mail->isHTML(true);
        $mail->Subject = $Subject;
        $mail->Body    = $MailContent;
        
        $mail->send();
        /*New SMTP - END*/
	}//Quick Contact
	
	
	function download_brochure_form($spram){ //Done
	    $time = time();
	    $pdf = $spram[3];
	    $pdf .= '<br>';
	    $pdf .= "<a href='https://octanetworks.com/upload_brochure/$spram[4]?$time'>https://octanetworks.com/upload_brochure/$spram[4]</a>";
		
		$farr	=	array("[DATE]","[NAME]","[EMAIL]","[MESSAGE]","[PHONE]","[WHATSAPP]");
		$aarr	=	array($GLOBALS["mydate"],$spram[0],$spram[1],$pdf,$spram[2],$spram[6]);
		$mailt = Mailstable::model()->findByPk(21);  

		$to = $GLOBALS["username"];
		$from = $GLOBALS["username"];
		$Subject=$mailt->mailtitle;  
		$MailContent = str_replace($farr, $aarr,$mailt->mailcontent);

		/*New SMTP - START*/
        $mail = new PHPMailer(true);
        
        $mail->isSMTP();
        $mail->Host       = $GLOBALS["host"];
        $mail->SMTPAuth   = true;
        $mail->Username   = $GLOBALS["username"];
        $mail->Password   = $GLOBALS["password"];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        
        $mail->setFrom($from, 'OctaNetworks');
        $mail->addAddress($to);
        //$mail->addCC($GLOBALS["username1"]);
        
        $mail->isHTML(true);
        $mail->Subject = $Subject;
        $mail->Body    = $MailContent;
        
        $mail->send();
        /*New SMTP - END*/
	}//Quick Contact
	
	function email_gettouch1($spram){
		$farr	=	array("[DATE]","[NAME]","[EMAIL]","[PHONE]");
		$aarr	=	array($GLOBALS["mydate"],$spram[1],$spram[2],$spram[3]);
		$mailt = Mailstable::model()->findByPk(5);  

		$to = $GLOBALS["username"];
		$from = $GLOBALS["username"];
		$Subject='FREE CCIE Enterprise Infrastructure v1.0 Course Training';  
		$MailContent = str_replace($farr, $aarr,$mailt->mailcontent);

		/*New SMTP - START*/
        $mail = new PHPMailer(true);
        
        $mail->isSMTP();
        $mail->Host       = $GLOBALS["host"];
        $mail->SMTPAuth   = true;
        $mail->Username   = $GLOBALS["username"];
        $mail->Password   = $GLOBALS["password"];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        
        $mail->setFrom($from, 'OctaNetworks');
        $mail->addAddress($to);
        //$mail->addCC($GLOBALS["username1"]);
        
        $mail->isHTML(true);
        $mail->Subject = $Subject;
        $mail->Body    = $MailContent;
        
        $mail->send();
        /*New SMTP - END*/
		
        create_contact_sendblue($spram[2]); //sendblue subscription	
	}//FeedBack
	
	function email_careers($spram){
		$farr	=	array("[DATE]","[NAME]","[EMAIL]","[MYPHONE]","[QUALIFICATION]","[MESSAGE]");
		$aarr	=	array($GLOBALS["mydate"],$spram[1],$spram[2],$spram[7],$spram[4],$spram[3]);
		$mailt = Mailstable::model()->findByPk(6);  

		$to = $GLOBALS["username"];
		$from = $GLOBALS["username"];
		$Subject=$mailt->mailtitle;  
		$MailContent = str_replace($farr, $aarr,$mailt->mailcontent);

		/*New SMTP - START*/
        $mail = new PHPMailer(true);
        
        $mail->isSMTP();
        $mail->Host       = $GLOBALS["host"];
        $mail->SMTPAuth   = true;
        $mail->Username   = $GLOBALS["username"];
        $mail->Password   = $GLOBALS["password"];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        
        $mail->setFrom($from, 'OctaNetworks');
        $mail->addAddress($to);
        //$mail->addCC($GLOBALS["username1"]);
        
        $mail->isHTML(true);
        $mail->Subject = $Subject;
        $mail->Body    = $MailContent;
        
        $mail->send();
        /*New SMTP - END*/
	}//Career
	
	function email_newsletter($spram){
		$farr	=	array("[DATE]","[EMAIL]");
		$aarr	=	array($GLOBALS["mydate"],$spram[2]);
		$mailt = Mailstable::model()->findByPk(7);  

		//$to = $GLOBALS["username"];
		$to = 'tamir@nexgeno.in';
		$from = $GLOBALS["username"];
		$Subject=$mailt->mailtitle;  
		$MailContent = str_replace($farr, $aarr,$mailt->mailcontent);

		/*New SMTP - START*/
        $mail = new PHPMailer(true);
        
        $mail->isSMTP();
        $mail->Host       = $GLOBALS["host"];
        $mail->SMTPAuth   = true;
        $mail->Username   = $GLOBALS["username"];
        $mail->Password   = $GLOBALS["password"];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        
        $mail->setFrom($from, 'OctaNetworks');
        $mail->addAddress($to);
        //$mail->addCC($GLOBALS["username1"]);
        
        $mail->isHTML(true);
        $mail->Subject = $Subject;
        $mail->Body    = $MailContent;
        
        $mail->send();
        /*New SMTP - END*/
  }//Newsletter
  
  function email_comment($spram){
		$farr	=	array("[DATE]","[NAME]","[EMAIL]","[COMMENT]","[SLUG]");
		$aarr	=	array($GLOBALS["mydate"],$spram[0],$spram[1],$spram[2],$spram[3]);
		$mailt = Mailstable::model()->findByPk(19);  

		$to = 'hemal.shah@octanetworks.com';
		$from = $GLOBALS["username"];
		$Subject=$mailt->mailtitle;  
		$MailContent = str_replace($farr, $aarr,$mailt->mailcontent);

		/*New SMTP - START*/
        $mail = new PHPMailer(true);
        
        $mail->isSMTP();
        $mail->Host       = $GLOBALS["host"];
        $mail->SMTPAuth   = true;
        $mail->Username   = $GLOBALS["username"];
        $mail->Password   = $GLOBALS["password"];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        
        $mail->setFrom($from, 'OctaNetworks');
        $mail->addAddress($to);
        //$mail->addCC($GLOBALS["username1"]);
        
        $mail->isHTML(true);
        $mail->Subject = $Subject;
        $mail->Body    = $MailContent;
        
        $mail->send();
        /*New SMTP - END*/
	}
	
    function addToMailchimp($email = "", $firstName = "", $lastName = "", $phone = "") {
        
        try {
            $octaSecrets = octa_load_secrets();
            $apiKey = $octaSecrets['mailchimpApiKey'];
            $listId = $octaSecrets['mailchimpListId'];
            $dc     = substr($apiKey, strpos($apiKey, '-') + 1);
        
            // Prepare URL
            $emailHash = md5(strtolower($email));
            $url = "https://$dc.api.mailchimp.com/3.0/lists/$listId/members/$emailHash";
        
            // Prepare payload
            $data = [
                "email_address" => $email,
                "status"        => "subscribed",   // or "pending" for double opt-in
                "merge_fields"  => [
                    "FNAME" => $firstName,
                    "LNAME" => $lastName,
                    "PHONE" => $phone
                ]
            ];
        
            // cURL request
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_USERPWD, 'anystring:' . $apiKey);
            curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 10);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        
            $response = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);
        
            //Yii::log("Mailchimp response ($httpCode): " . $response, 'info');
        
            return [
                'status'   => $httpCode,
                'response' => json_decode($response, true)
            ];
            
        } catch (Exception $e) {
            //none
        }    
    }
	

?>