<?php
	
	// Header
	include('assets/partials/header.html');

	// In case one is using PHP 5.4's built-in server
   $filename = __DIR__ . preg_replace('#(\?.*)$#', '', $_SERVER['REQUEST_URI']);
	if (php_sapi_name() === 'cli-server' && is_file($filename)) {
	   return false;
	}

	// Include the Router class
	require_once __DIR__ . '/assets/includes/Router.php';

	// Create a Router
	$router = new \Bramus\Router\Router();

	// Custom 404 Handler
	$router->set404(function () {
		include ('404.php');
	});

   // Static route: / (homepage)
   $router->get('/', function () {
   	include ('home.php');		    
   });
   
   // Static route: / (about)
   $router->get('/about', function () {
	   require('assets/includes/config.php');
	   
   	include ('about.php');		    
   });
   
   // Static route: / (contact)
   $router->get('/contact', function () {
	   require('assets/includes/config.php');
	   
   	include ('contact.php');		    
   });
   
   // Static route: / (thank you)
   $router->get('/thank-you', function () {
   	include ('thank-you.php');		    
   });

   // Static route: /projects
   $router->get('/projects', function () {
	   require('assets/includes/config.php');
	   
      include('list.php');    
   });

   // Dynamic route: /projects/project-name
   $router->get('/projects/([a-z0-9_-]+)', function ($name) {
	   require('assets/includes/config.php');
	   
   	include ('detail.php');
   });

   // Run Router
   $router->run();
   
   // Footer
	include('assets/partials/footer.html');

?>