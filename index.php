<?php
	
	require_once ('config.php');
	require_once ('app/core/controller.php');
	require_once ('app/core/route.php'); // çäåñü ïîäêëþ÷àþòñÿ êîíòðîëëåðû
	require_once ('app/core/view.php');
	
	$route = new Route;
	$route->start();