<?php
	/*

		принимаем от контроллеров страниц параметры в
		сеттеры обрабатываем геттерами, если необходимо, записываем
		результат в свойства и выводим в render


	*/

	class View {

		// задача: подтянуть шаблон и воткнуть в него контент

		private $template_path = 'app/view/';
		private $layout;
		private $title;
		private $js = array();
		private $css = array();


		public function render($tpl_content) { // метод render - конструирует страницу

			$js = $this->getJs();
			$css = $this->getCss();
			$title = $this->title;
			ob_start ();
			include_once ($this->template_path . $tpl_content);
			$content = ob_get_contents();
			ob_end_clean();
			include_once ($this->layout); // в него надо добавить index.tpl в него я  уже впихнул $content

		}// close func... render()


		public function setTitle ($title) { //публичный метод-сеттер для титла

			$this->title = $title;

		}// close func... setTitle


		public function setLayout ($layout) { //публичный метод-сеттер для доп лайаутов

			$this->layout = $layout;

		}// close func... setLayout


		public function addJs ($scripts) { //сеттер addJs принимает параметр пути к скриптам
			//подключаем скрипты
			foreach ($scripts as $val) {
				$this->js[] = "<script src=\"" . $val . "\"></script>\n";
			}

		}// close func... addJs


		public function getJs () { // getter

			$js = implode('', $this->js);
			return $js;

		}// close func... getJs


		public function addCss ($styles) { //сеттер addcss принимает параметр пути к стилям
			//подключаем стили
			foreach ($styles as $val) {
				$this->css[] = "<link rel=\"stylesheet\" type=\"text/css\" src=\"" . $val . "\">\n";
			}

		}// close func... addCss


		public function getCss () { // getter выводит

			$css = implode('', $this->css);
			return $css;

		}// close func... getCss

	}// close View
