<?php 

$task = $app['database']->selectAll('users');

require 'views/index.view.php';