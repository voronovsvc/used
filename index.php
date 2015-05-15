<?php
	
	/*
	Нам необходимо по адресу определить имя класса контроллера, который мы хотим запустить
	Мы уже знаем что если пользователь заходит на главную, то класс должен называться Controller_Main
	Все классы контроллеров будут иметь вид - Controller_ИМЯ_КОНТРОЛЛЕРА (Например Controller_User)

	тебе надо действовать так:
	1. получили $_SERVER['REQUEST_URI']
	2. Если он равен '/', значит имя контроллера (создай для этого переменную $controller_name) == 'Main'
	3. Проверяем есть ли в папке с контроллерами файл strtolower($controller_name) . '_controller.php'
	4. Если такой файл есть, то подключаем его через include
	5. Создаем новый объект типа Controller_ИМЯ_КОНТРОЛЛЕРА
	5.1. Проверяем что существует метод index().
	6. Вызываем в этом объекте метод index().
	
	*/
	header ('Content-Type: text/html; charset=utf-8');
	
	// Пусть пока у нас будет только одна страница - Главная
	// При переходе на любой другой адрес будет показывать 404
	if ($_SERVER['REQUEST_URI'] === '/') {
		$controller_name = 'Main'; // Слеш в начале не нужен и переменная должна 
		// равняться 'Main', потому что наш класс называется с большой буквы - Controller_Main
	}
	else {
		header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        print 'Page Not Found!';	
        exit();
	}
	
	
	// Имя контроллера у нас всегда с большой буквы, а файлы, 
	// в которых хранится контроллер называются с маленькой (main_controller.php) 
	// в остальном названия одинаковые.
    // Поэтому с помощью функции strtolower() мы переводим все большие 
	// быквы в маленькие и $controller_name станет просто 'main' добавляем
	// '_controller.php' и получаем имя нашего файла
    // Мы должны получить путь 'controllers/main_controller.php'
	$dir_check = 'controllers/'. strtolower($controller_name). '_controller.php'; // Ты забыл '/' после controllers, поэтому сейчас он не будет находить этот файл
	
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
	}
