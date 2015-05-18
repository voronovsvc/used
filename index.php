<?php
	
	require_once ('core/route.php');
	require_once ('core/view.php');
	
	$route = new Route;
	$route->start();
	
	$view = new View;
	$view->render();