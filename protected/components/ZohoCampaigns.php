<?php

class ZohoCampaigns
{
    private $config;

    public function __construct()
    {
        require_once dirname(__FILE__) . '/../config/load-secrets.php';
        $this->config = octa_load_secrets();
    }

    public function subscribe($lead)
    {
        if (empty($lead['email'])) {
            return false;
        }

        $accessToken = $this->getAccessToken();

        $contact = array();

        foreach (array(
            'First Name'    => isset($lead['name']) ? $lead['name'] : '',
            'Contact Email' => $lead['email'],
            'Phone'         => isset($lead['phone']) ? $lead['phone'] : '',
            'Course'        => isset($lead['course']) ? $lead['course'] : '',
            'Message'       => isset($lead['message']) ? $lead['message'] : ''
        ) as $key => $value) {
            if ($value !== '') {
                $contact[$key] = $value;
            }
        }

        $url = rtrim($this->config['zohoCampaignsBase'], '/') .
            '/api/v1.1/json/listsubscribe';

        $fields = array(
            'resfmt'      => 'JSON',
            'listkey'     => $this->config['zohoListKey'],
            'contactinfo' => json_encode($contact),
            'source'      => isset($this->config['zohoSource'])
                ? $this->config['zohoSource']
                : 'Octa Website'
        );

        list($code, $body) = $this->post(
            $url,
            $fields,
            array(
                'Authorization: Zoho-oauthtoken ' . $accessToken,
                'Content-Type: application/x-www-form-urlencoded'
            )
        );

        $response = json_decode($body, true);

        if ($code < 200 || $code >= 300) {
            throw new Exception('Zoho subscription failed. HTTP ' . $code);
        }

        if (is_array($response) &&
            isset($response['status']) &&
            strtolower($response['status']) === 'error') {
            throw new Exception(
                isset($response['message'])
                    ? $response['message']
                    : 'Zoho API error'
            );
        }

        return true;
    }

    private function getAccessToken()
    {
        $url = rtrim($this->config['zohoAccountsBase'], '/') .
            '/oauth/v2/token';

        list($code, $body) = $this->post(
            $url,
            array(
                'grant_type'    => 'refresh_token',
                'client_id'     => $this->config['zohoClientId'],
                'client_secret' => $this->config['zohoClientSecret'],
                'refresh_token' => $this->config['zohoRefreshToken']
            ),
            array('Content-Type: application/x-www-form-urlencoded')
        );

        $response = json_decode($body, true);

        if ($code !== 200 || empty($response['access_token'])) {
            throw new Exception('Unable to refresh Zoho access token');
        }

        return $response['access_token'];
    }

    private function post($url, $fields, $headers)
    {
        $ch = curl_init($url);

        curl_setopt_array($ch, array(
            CURLOPT_POST           => true,
            CURLOPT_POSTFIELDS     => http_build_query($fields),
            CURLOPT_HTTPHEADER     => $headers,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT        => 20
        ));

        $body = curl_exec($ch);
        $error = curl_error($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);

        if ($body === false || $error) {
            throw new Exception('Zoho cURL error');
        }

        return array($code, $body);
    }
}