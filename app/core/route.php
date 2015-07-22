<?php
/*
Что делает класс Route?
1. Берет параметры из адресной строки $uri = explode('/', $_SERVER['REQUEST_URI'])...
Условились что в адресной строке:
$uri[0] - домен (не нужен)
$uri[1] - имя контроллера
$uri[2] - имя метода

2. В методе start() формирует экземпляр класса

*/
class Route
{
    public function start()
    {
        $controller_name = 'Main';
        $action = 'index';

        $uri = explode('/', $_SERVER['REQUEST_URI']);

        if (!empty($uri[1])) {
            $controller_name = $uri[1];
        }

        if (!empty($uri[2])) {
            $action = $uri[2];
        }

        $dir_check = 'app/controllers/'.
        strtolower($controller_name).
        '_controller.php';

        if (file_exists($dir_check)) {
            /*
            В теле этого условия:
            1. Записали объект с именем класса
            2. Подтянули файл с контроллером!!!!!!!!!!!!!!!!!!!!
            */
            include_once ($dir_check);
            // подтянули фаил с имя_контроллером

            $class_name = 'Controller_' . $controller_name;
            $controller = new $class_name;
            //

            // на всякий случай проверили, что у этого класса есть нужный нам метод
            if(method_exists($controller, $action)) {
                // вызываем нужный метод
                $controller->$action();
            }
        } else {
            header('HTTP/1.1 404 Not Found');
            header("Status: 404 Not Found");
            print 'Page Not Found!';
            exit();
        }
    }
}
