<?php

/**
 * Copy this file to secrets.local.php and fill in real values.
 * secrets.local.php is gitignored. Set environment to "local" on XAMPP
 * and "live" on the server. Both base URLs and both database profiles
 * live in that one local file.
 */
return array(
	'environment' => 'local',
	'baseUrl' => array(
		'local' => 'http://localhost/octanetwork',
		'live' => 'https://octanetworks.com',
	),
	'db' => array(
		'local' => array(
			'connectionString' => 'mysql:host=localhost;dbname=octanetw_yee',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		'live' => array(
			'connectionString' => 'mysql:host=localhost;dbname=octanetw_yee',
			'emulatePrepare' => true,
			'username' => 'your-live-db-user',
			'password' => 'your-live-db-password',
			'charset' => 'utf8',
		),
	),
	'db_blog' => array(
		'local' => array(
			'connectionString' => 'mysql:host=localhost;dbname=octanetw_blog',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
			'class' => 'CDbConnection',
		),
		'live' => array(
			'connectionString' => 'mysql:host=localhost;dbname=octanetw_blog',
			'emulatePrepare' => true,
			'username' => 'your-live-blog-db-user',
			'password' => 'your-live-blog-db-password',
			'charset' => 'utf8',
			'class' => 'CDbConnection',
		),
	),
	'giiEnabled' => true,
	'giiPassword' => 'change-me',
	'enableClientTracking' => false,
	'recaptchaSiteKey' => 'your-recaptcha-site-key',
	'recaptchaSecretKey' => 'your-recaptcha-secret-key',
	'razorpayKeyId' => 'your-razorpay-key-id',
	'razorpayKeySecret' => 'your-razorpay-key-secret',
	'payuMerchantKey' => 'your-payu-merchant-key',
	'payuSalt' => 'your-payu-salt',
	'payuBaseUrl' => 'https://secure.payu.in',
	'mailHost' => 'smtp.gmail.com',
	'mailPort' => 587,
	'mailUsername' => 'info@octanetworks.com',
	'mailUsernameAlt' => 'sales@octanetworks.com',
	'mailPassword' => 'your-smtp-password',
	'brevoApiKey' => 'your-brevo-api-key',
	'brevoClientKey' => 'your-brevo-client-key',
	'facebookPixelId' => 'your-facebook-pixel-id',
	'mailchimpApiKey' => 'your-mailchimp-api-key',
	'mailchimpListId' => 'your-mailchimp-list-id',
	'zohoClientId' => 'your-zoho-client-id',
	'zohoClientSecret' => 'your-zoho-client-secret',
	'zohoRefreshToken' => 'your-zoho-refresh-token',
	'zohoListKey' => 'your-zoho-list-key',
	'zohoAccountsBase' => 'https://accounts.zoho.in',
	'zohoCampaignsBase' => 'https://campaigns.zoho.in',
	'zohoSource' => 'Octa Website',
);
