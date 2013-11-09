<?php

	Router::parseExtensions('html','rss');
	
	Router::connect('/', array('controller' => 'pages', 'action' => 'home'));
	
	Router::connect('/gallery/bhagat-singh-images-all', array('controller' => 'images', 'action' => 'all'));
	Router::connect('/image/*', array('controller' => 'images', 'action' => 'index'));
	
	//Router::connect('/jobs/:keyword',array('controller' => 'searchs', 'action' => 'jobdescription'), array('pass' => array('keyword') ) ); 
	//Router::connect('/home',array('controller' => 'pages', 'action' => 'home') ); 
	
	
	
	CakePlugin::routes();

	require CAKE . 'Config' . DS . 'routes.php';
