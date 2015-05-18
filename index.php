<?php
	
	require_once ('route.php');
	
	$rout = new Route;
	$rout->start();
	
	if (file_exists('view.php')) {
		include_once ('view.php');
	}