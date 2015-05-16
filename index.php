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
	
	
	
	
	if ($_SERVER['REQUEST_URI'] === '/')
	$controller_name = 'Main';
	else
	if ($_SERVER['REQUEST_URI'] == true) {
		/** зписываем в controller_name $_SERVER['REQUEST_URI']
			без слеша и с Заглавной буквы...
			получаем имя контоллера
		**/
		$str = substr($_SERVER['REQUEST_URI'],1);
		$controller_name = ucfirst($str);
	} 
	
	$dir_check = 'controllers/'.
	strtolower($controller_name).
	'_controller.php';
	
	if (file_exists($dir_check)) {
		include_once ($dir_check);
	
		/** Допустим файл подключился
			Мы знаем что все классы котроллеров имеют вид Controller_ИМЯ_КОНТРОЛЛЕРА
			Имя котроллера нам уже известно, оно записано в $controller_name
			Значит осталось добавить к этому имени 'Controller_' и получим название класса
		
		 **/
	    $class_name = 'Controller_' . $controller_name; // Получили название класса
	    $controller = new $class_name; // Создали объект этого класса
		$action = 'index';
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
