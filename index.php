<?php
	
	header ('Content-Type: text/html; charset=utf-8');
	
	/*
	@todo
	Давай создадим класс Route в файле route.php
	Класс пока будет содержать единственный метод start()
	В этот метод перенеси весь на роутинг, то есть весь код что ниже
	В index.php будем подключать этот файл через require
	Создавать новый экземпляр класса Route()
	И вызывать метод start()
	*/
	
	$controller_name = 'Main';
	$action = 'index';
	
	// сколько элементов в массиве должно быть? в будушем адресная строка не увеличится?
	// Не устанавливай limit, потому что строка может быть сколь угодно длинной в будущем.
	$uri = explode('/', $_SERVER['REQUEST_URI'], 3/*?*/); 
	/*
	Давай договоримся что при написании условий ты будешь использовать следующий вид:
	if ($a != 2) {
    	$a = 2;
	}

	И рекомендую проверять по условию !empty($uri[1]) и !empty($uri[2])
	*/
	if ($uri[1])
	$controller_name = $uri[1];
	
	if ($uri[2])
	$action = $uri[2]; // я так пониьаю сюда будет записываться метод,
	// которым будет обработана страница?
	// Да
	
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
