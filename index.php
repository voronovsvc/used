<?php
	
	require_once ('app/core/controller.php');
	require_once ('app/core/route.php'); // ����� ������������ �����������
	require_once ('app/core/view.php');
	
	$route = new Route;
	$route->start();