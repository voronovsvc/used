<?php
	
	require_once ('route.php');
	
	$rout = new Route;
	$rout->start();
	
	if (file_exists('tpl_manager.php')) {
		include_once ('tpl_manager.php');
	}