<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */
//added by Poulami
return array(
    'db' => array(
     'driver' => 'pdo',
     'dsn' => 'mysql:dbname=sfp_staging;host=localhost',
     'username'       =>'phpmyadmin',
     'password'      =>'Testing1@',
     'driver_options' => array(
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
     ),
 ),
		'pathName' => array(
				'path' => array('var','www','staging','public'),
		), //added by dibyendu
		'payment' => array(
				'merchantId' => "2537894220",
				'merchantKey' => "00db268e1251e1f8150d9c6d79a90a17629b947d",
				'shopId' => "0",
				'apiKey' => 'SFP_Encryption_Key_Is_Here'
		),
 'service_manager' => array(
     'factories' => array(
         'Zend\Db\Adapter\Adapter'
         => 'Zend\Db\Adapter\AdapterServiceFactory',
     ),
  ),
);
