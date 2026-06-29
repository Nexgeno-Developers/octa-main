<?php

require_once dirname(__FILE__).'/load-secrets.php';
$secrets = octa_load_secrets();

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'OctaNetworks',
        'defaultController'=>'main',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array_merge(
		array('main', 'octa'),
		!empty($secrets['giiEnabled']) ? array(
			'gii' => array(
				'class' => 'system.gii.GiiModule',
				'password' => $secrets['giiPassword'],
				'ipFilters' => array('127.0.0.1', '::1'),
			),
		) : array()
	),

	// application components
	'components'=>array(

		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),

		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
                        'showScriptName'=>false,
                        'urlSuffix'=>'/',
			'rules'=>array(
					'index'=>'main/default',
					'about-octa-network'=>'main/default/aboutus',
					'our-journey'=>'main/default/ourjourney',
					'octa-networks-awards'=>'main/default/awards',
					'success-stories'=>'main/default/successstories',
					'online-training'=>'main/default/onlinetraining',
					'industrial-visit'=>'main/default/industrialvisit',
					'interview-questions'=>'main/default/interviewquestions',
					'resume'=>'main/default/resume',
					'christmas-offer'=>'main/default/cristmasoffer',
					'ccna-training'=>'main/default/ccnatraining',
					'ccda-training'=>'main/default/ccdatraining',
					'republicday-2023'=>'main/default/republicday2023',
					'ceh-training'=>'main/default/cehtraining',
					'ccie-collaboration-refer'=>'main/default/cciecollaboration',
					'aws-free-training'=>'main/default/awsfreetraining',
					'ccie-security_v6.1_training'=>'main/default/cciesecurityv61training',
					'quiz-1'=>'main/default/ccnpquiz',
					'diwali-sale-2023'=>'main/default/diwalisale2023',
					'annual-offer-2024'=>'main/default/annualdaypage',
					'free-jncie-datacenter-training'=>'main/default/freejnciedatacenter',
                    'free-jncie-security-training'=>'main/default/freejnciesecurity',
                    'free-jncie-enterprise-infrastructure-training'=>'main/default/freejncieenterpriseinfrastructure',
                    'free-jncie-training'=>'main/default/freejncietraining',
					'christmas-page'=>'main/default/christmaspage',
					'visio-topology'=>'main/default/visiotopology',
					'study-groups'=>'main/default/studygroups',
					'student-reviews'=>'main/default/studentreviews',
					'free-ccie-enterprise-infrastructure-course-training'=>'main/default/enterpriselading',
					'partner-with-us'=>'main/default/partnerwithus',
					'photo-gallery'=>'main/default/photogallery',
					'contact-us'=>'main/default/contactus',
					'octa-networks-experts'=>'main/default/etrainer',
					'news'=>'main/default/news',
					'thankyou'=>'main/default/thankyou',
					'thank-you'=>'main/default/thankyouwebinars',
					'octa-search'=>'main/default/searchheader',
					
					'classrom-training'=>'main/training/ctraning',
					'fly-me-a-trainer'=>'main/training/flytrainer',
					'1-on-1-training'=>'main/training/onetraining',
					'instructor-led-online'=>'main/training/instructorled',
					'corporate-training'=>'main/training/corporatetraining',
					'training'=>'main/training/index',
					
					'terms-of-services'=>'main/default/termsofservices',
					'cancellation-policy'=>'main/default/cancellationpolicy',
					'privacy-policy'=>'main/default/privacypolicy',
					'refund-policy'=>'main/default/refundpolicy',
					'course-library'=>'main/default/courselibrary',
					
					'campus-college-training'=>'main/default/campuscollegetraining',
					'faculty-development-program'=>'main/default/facultydevelopmentprogram',
					'what-is-new-in-new-ccna'=>'main/default/whatisnewinnewccna',
					'payment-modes'=>'main/default/paymentmodes',
					'payment-response'=>'main/default/paymentresponse',
					'visa-guidance'=>'main/default/visaguidance',
                    'sdwan-traininig'=>'main/default/sdwantraining',
                    'paloalto-traininig'=>'main/default/paloaltotraining',
                    'ccnp-enterprise'=>'main/default/ccnpenterprise',
					'job-guarantee-courses'=>'main/default/jobguarantee',
					'ccie-training-institute'=>'main/default/ccietraininginstitute',
					'ccie-enterprise-infrastructure-lab-bootcamp'=>'main/default/ccieenterpriseinfrastructurelabbootcamp',
					'ccna-landing-page'=>'main/default/ccnalandingpage',
					'cciewebinars'=>'main/default/cciewebinarslandingpage',
					'placement-success-stories'=>'main/default/placements',
					'careers'=>'main/default/career',
					'news-announcement'=>'main/default/newsannouncement',
                                
                                							
								'testimonials'=>'main/default/testimonials',							
								'faq'=>'main/default/faq',					
                                'octa'=>'octa/default',
								'error'=>'main/default/error',

								'register'=>'main/user/register',
								'paynow'=>'main/cart/pay_now',
								'myaccount'=>'main/user/myaccount',
								'mypdfs'=>'main/user/mypdfs',
								'mytestingengines'=>'main/user/mytestingengines',
								'myorders'=>'main/user/myorders',
								'editprofile'=>'main/user/editprofile',
								'logout'=>'main/user/logout',
								'forgotpass'=>'main/user/forgotpass',
								'unsubscribe'=>'main/user/unsubscribe',
								'package'=>'main/user/downloadfile',
								'downloadpdf'=>'main/user/downloadpdf',
								'generate-engine'=>'main/user/enginegen',
								'downloadengine'=>'main/user/downloadengine',
								'downloadhistory'=>'main/user/downloadhistory',
								
								'allexams-<page:\d+>' => 'main/default/all_exams',
								'allexams'=>'main/default/all_exams',

								'vendors-<page:\d+>' => 'main/default/vendors',
								'vendors'=>'main/default/vendors',

								'gii'=>'gii',
						
								'search'=>'main/cert/search',

								'cart'=>'main/cart',
                                'certification-course/<url:[\w\.-]+>'=>'main/cert',
                                'news/<url:[\w\.-]+>'=>'main/news',
								'training-exam/<url:[\w\.-]+>'=>'main/exam',
                                'courses/<url:([\w-]+)>'=>'main/vendor',
                            
                                '<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
                                
			),
		),
		

		// database settings are configured in database.php
		'db'=>require(dirname(__FILE__).'/database.php'),
		'db_blog' => require(dirname(__FILE__).'/database_blog.php'),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction' => 'main/default/error',
		),

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				
				/* array(
					'class'=>'CWebLogRoute',
				), */
				
			),
		),

	), 

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
				'adminEmail'=>'support@octanetworks.com',
                'mydate'=>date('Y-m-d H:i:s', strtotime( '+10 hours' )),
				'from'=>'alert@octanetworks.com',
				'siteKey'=>$secrets['recaptchaSiteKey'],
				'secretKey'=>$secrets['recaptchaSecretKey'],
				'razorpayKeyId'=>$secrets['razorpayKeyId'],
				'razorpayKeySecret'=>$secrets['razorpayKeySecret'],
				'payuMerchantKey'=>$secrets['payuMerchantKey'],
				'payuSalt'=>$secrets['payuSalt'],
				'payuBaseUrl'=>$secrets['payuBaseUrl'],
				'brevoClientKey'=>$secrets['brevoClientKey'],
				'facebookPixelId'=>$secrets['facebookPixelId'],
				'enableClientTracking'=>!empty($secrets['enableClientTracking']),
	),
);