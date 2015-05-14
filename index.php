<?php
	
	switch ($_SERVER['REQUEST_URI']) {
	  case '/':
		print 'Homepage!';
		break;
	
	  case '/catalog':
		print 'Catalog page!';
		break;
	  case '/auth':
		print 'Страница автризации!';
		break;
	}
	
//	или
	
	echo "<br />";
	echo "<br />";
	
	$page = 'auth';
	
	if ($_SERVER['REQUEST_URI'] === "/".$page)
	echo 'Страница: '.$page;
	
	
	
	
//	echo $_SERVER['REQUEST_URI'];
	print_r ("<pre>");
	echo $_SERVER['SERVER_NAME'];
	print_r ("</pre>");