<?php
    require_once dirname(__DIR__) . '/protected/config/load-secrets.php';
    $octaSecrets = octa_load_secrets();
    $GLOBALS['brevoApiKey'] = $octaSecrets['brevoApiKey'];

    function create_contact_sendblue($emailid)
    {
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
            'api-key: ' . $GLOBALS['brevoApiKey']
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        echo $response;     
    }
    
    function get_touch1(){
        create_contact_sendblue('tamir.makent@gmail.com');
    }
    
    get_touch1();
    
    
?>