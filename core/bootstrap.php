<?php 

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
	Connection::make(App::get('config')['database'])
));


// $app = [];
// $app['config'] = require 'config.php';

// // require 'Router.php';
// // require 'Request.php';
// // require 'database/Connection.php';
// // require 'database/QueryBuilder.php';

// $app['database'] = new QueryBuilder(
// 	Connection::make($app['config']['database'])
// 	);