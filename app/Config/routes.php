<?php

	Router::parseExtensions('html','rss');
	
	Router::connect('/', array('controller' => 'pages', 'action' => 'home'));
	
	Router::connect('/article/bhagat-singh-final-hours', array('controller' => 'article', 'action' => 'finalHour'));
	Router::connect('/gallery/bhagat-singh-images-all', array('controller' => 'images', 'action' => 'all'));
	Router::connect('/quotes/add-bhagat-singh-quote', array('controller' => 'quotes', 'action' => 'add'));
	Router::connect('/quotes/quotes-on-bhagat-singh', array('controller' => 'quotes', 'action' => 'index'));
	Router::connect('/image/*', array('controller' => 'images', 'action' => 'index'));
	Router::connect('/quote/*', array('controller' => 'quotes', 'action' => 'view'));
	
	//Router::connect('/jobs/:keyword',array('controller' => 'searchs', 'action' => 'jobdescription'), array('pass' => array('keyword') ) ); 
	//Router::connect('/home',array('controller' => 'pages', 'action' => 'home') ); 
	
	
	
	CakePlugin::routes();

	require CAKE . 'Config' . DS . 'routes.php';
