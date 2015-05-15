<?php
	
	/*
	тебе надо действовать так:
	1. получили $_SERVER['REQUEST_URI']
	2. Если он равен '/', значит имя контроллера (создай для этого переменную $controller_name) == 'Main'
	3. Проверяем есть ли в папке с контроллерами файл strtolower($controller_name) . ''_controller.php
	4. Если такой файл есть, то подключаем его через include
	5. Создаем новый объект типа $controller_name
	6. Вызывfем в этом объекте метод index().
	
	А ты делаешь редирект на файл классом, никаких редиректов
	не должно быть, ты только подключаешь нужные файлы и
	выполняешь нужные методы
	*/
	header ('Content-Type: text/html; charset=utf-8');
	
	if ($_SERVER['REQUEST_URI'] === '/')
	$controller_name = '/main';
	else
	$controller_name = $_SERVER['REQUEST_URI'];
	
	
	$dir_check = 'controllers' .
	strtolower($controller_name) .
	'_controller.php';
	
	if (file_exists($dir_check))
	include_once ($dir_check);
	
//	$controller_name = new Controller_Main;
//	$controller_name->index();
	
	
	echo $controller_name;
	echo "<br />";
	echo $dir_check;
	
?>
