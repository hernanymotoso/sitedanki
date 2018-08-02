<?php
require 'environment.php';
define("BASE_URL", "http://localhost/siteDanki");
global $config;
$config = array();
if(ENVIRONMENT == "development"){
	$config['dbname'] = 'sitedanki';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else{
    $config['dbname'] = 'sitedanki';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}

?>