<?php

	require_once ('config.php');
	require_once ('app/core/controller.php');
	require_once ('app/core/route.php'); // здесь подключаются контроллеры
	require_once ('app/core/view.php');

	//$db = DB::getIntance();

	$route = new Route;
	$route->start();
