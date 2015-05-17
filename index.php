<?php
	
	/*
		Пояснение к коду: 
			
			
			
		
		Вопросы по коду:
			Зачем передавать эти заголовки, что это дает?
			header('HTTP/1.1 404 Not Found');
			header("Status: 404 Not Found");
			
			
	
	*/
	
	header ('Content-Type: text/html; charset=utf-8');
	
	// Пусть пока у нас будет только одна страница - Главная
	// При переходе на любой другой адрес будет показывать 404
	
	
	
	
	//if ($_SERVER['REQUEST_URI'] === '/') // зачем на мздесь проверка?
	// все равно переменные перезаписываются!  ниже по условию
	$controller_name = 'Main';
	$action = 'index';
	
	// сколько элементов в массиве должно быть? в будушем адресная строка не увеличится?
	$uri = explode('/', $_SERVER['REQUEST_URI'], 3/*?*/); 
	
	if ($uri[1])
	$controller_name = $uri[1];
	
	if ($uri[2])
	$acnion = $uri[2]; // я так пониьаю сюда будет записываться метод,
	// которым будет обработана страница?
	
	echo "<pre>";
	print_r ($uri);
	echo "</pre>";
	
	$dir_check = 'controllers/'.
	strtolower($controller_name).
	'_controller.php';
	
	if (file_exists($dir_check)) {
		include_once ($dir_check);
		
	    $class_name = 'Controller_' . $controller_name;
	    $controller = new $class_name;
		// $action = 'index';
	    // на всякий случай проверили, что у этого класса есть нужный нам метод
	    if(method_exists($controller, $action)) {
			// вызываем нужный метод, в нашем случае это index()
	         $controller->index();
	    }
	} else {
		
		header('HTTP/1.1 404 Not Found');
		header("Status: 404 Not Found");
		print 'Page Not Found!';	
		exit();
	}
