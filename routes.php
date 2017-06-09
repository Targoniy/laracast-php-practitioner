<?php 

$router->get('php_practitioner', 'controllers/index.php');
$router->get('php_practitioner/about', 'controllers/about.php');
$router->get('php_practitioner/contact', 'controllers/contact.php');


$router->post('php_practitioner/names', 'controllers/add-name.php');

 