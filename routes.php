<?php 


$router->define([
	'php_practitioner' => 'controllers/index.php',
	'php_practitioner/about' => 'controllers/about.php',
	'php_practitioner/contact' => 'controllers/contact.php',			
	'php_practitioner/names' => 'controllers/add-name.php'
]);

$router->get('php_practitioner', 'controllers/index.php');

$router->get('php_practitioner/about', 'controllers/about.php');
$router->get('php_practitioner/names', 'controllers/add-name.php');

$router->post('php_practitioner/names', 'controllers/add-name.php');
