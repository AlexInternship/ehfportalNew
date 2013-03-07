<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',

	// preloading components
	'preload'=>array('bootstrap','log', 'fancybox'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
                'application.extensions.*'
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'password',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
			'generatorPaths' => array(
          '		bootstrap.gii'
			),
                    ),
	),

	// application components
	'components'=>array(
		/*'bootstrap' => array(
	    'class' => 'ext.bootstrap.components.Bootstrap',
	    'responsiveCss' => true,
		),*/
            
                'fancybox' => array(
                    'class' => 'ext.fancybox.EFancyBox'
                ),
            /*
                'mailer' => array(
                    'class' => 'ext.swiftMailer.SwiftMailer',
                    // For SMTP
                    'mailer' => 'smtp',
                    'host'=>'smtp.gmail.com',
                    'From'=>'admin@localhost',
                    'username'=>'childofstars@gmail.com',
                    'password'=>'kode1269',
                     'port'=>'465',

                    // For sendmail:
                    'mailer'=>'sendmail',
                ),

                'yiiMail' => array(
                   'class' => 'ext.yii-mail.YiiMail',
                    'transportType'=>'smtp',
                    'transportOptions'=>array(
                      'host'=>'smtp.gmail.com',
                      'username'=>'nama_email',//contohna nama_email@yahoo.co.id
                      'password'=>'xxxx',
                      'port'=>'465',
                      'encryption'=>'ssl',
                     ),
                   'viewPath' => 'application.views.mail',
                   'logging' => true,
                   'dryRun' => false
                    ),*/
            
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		/*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		*/
		/*'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),*/
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=ehfportal',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
            
         	'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);