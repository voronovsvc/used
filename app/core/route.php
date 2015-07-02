<?php

	class Route {

		public function start () {

			header ('Content-Type: text/html; charset=utf-8');

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

		}

	}// close Rout

?>
