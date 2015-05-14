<?php
	
	switch ($_SERVER['REQUEST_URI']) {
	  case '/':
		print 'Homepage!';
		break;
	
	  case '/catalog':
		print 'Catalog page!';
		break;
	  case '/auth':
		print 'Авторизация!';
		break;
	}
	
	 // Кодировка