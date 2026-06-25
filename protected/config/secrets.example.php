<?php

/**
 * Copy this file to secrets.local.php and fill in real values.
 * secrets.local.php is gitignored and must never be committed.
 */
return array(
	'db' => array(
		'connectionString' => 'mysql:host=localhost;dbname=octanetw_yee',
		'emulatePrepare' => true,
		'username' => 'root',
		'password' => '',
		'charset' => 'utf8',
	),
	'db_blog' => array(
		'connectionString' => 'mysql:host=localhost;dbname=octanetw_blog',
		'emulatePrepare' => true,
		'username' => 'root',
		'password' => '',
		'charset' => 'utf8',
		'class' => 'CDbConnection',
	),
	'giiEnabled' => false,
	'giiPassword' => 'change-me',
	'enableClientTracking' => true,
	'recaptchaSiteKey' => 'your-recaptcha-site-key',
	'recaptchaSecretKey' => 'your-recaptcha-secret-key',
	'razorpayKeyId' => 'rzp_test_xxxxxxxx',
	'razorpayKeySecret' => 'your-razorpay-secret',
	'payuMerchantKey' => 'your-payu-merchant-key',
	'payuSalt' => 'your-payu-salt',
	'payuBaseUrl' => 'https://test.payu.in',
	'mailHost' => 'smtp.gmail.com',
	'mailPort' => 587,
	'mailUsername' => 'info@example.com',
	'mailUsernameAlt' => 'sales@example.com',
	'mailPassword' => 'your-smtp-app-password',
	'brevoApiKey' => 'xkeysib-your-brevo-api-key',
	'brevoClientKey' => 'your-brevo-client-key',
	'facebookPixelId' => 'your-facebook-pixel-id',
	'mailchimpApiKey' => 'your-mailchimp-api-key-us10',
	'mailchimpListId' => 'your-mailchimp-list-id',
);
