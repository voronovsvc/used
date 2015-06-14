<?php
	/**
		
		принимаем от контроллеров страниц параметры в
		сеттеры обрабатываем геттерами, если необходимо, записываем
		результат в свойства и выводим в render
		
	
	**/ 
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
	
		
		// подключаю скрипты 
		
		public function addJs ($ways) { //сеттер addJs принимает параметр $ways (рус. Пути)
			
			// этот массив выводит один пустой элемент, тоесть if условие в лайауте не будет работать
			$links = explode(', ', $ways); //вот от куда здесь взялся пустой элемент??? столько времени потратил!!!
			$links = array_filter ($links); // удалил пустой элемент
			
			foreach ($links as $value ) {
				
				$this->js[] = "<script type=\"text/javascript\" src=\"" . $value . "\"></script>\r";
			}
			
			$js = implode('', $this->js);
			return $js;

		}// close func... addJs
		
		
		public function getJs () { // getter
			
			return $this->addJs ($ways);  // вопрос! почему я не мог вывести сеттер addJs?
			
		}// close func... getJs
		
		
		public function addCss ($ways) { //сеттер addCss принимает параметр $ways (рус. Пути)
			
			$links = explode(', ', $ways); 
			$links = array_filter ($links); // удалил пустой элемент, ХЗ от куда взявшийся
			
			foreach ($links as $value ) {
				
				$this->css[] = "<link rel=\"stylesheet\" type=\"text/css\" src=\"" . $value . "\">\r";
			}
			
			$css = implode('', $this->css);
			return $css;

		}// close func... addCss
		
		
		
		public function getCss () { // getter
			
			return $this->addCss ($ways); // вопрос! почему я не мог вывести сеттер addCss?
			
		}// close func... getCss
		
		
	}// close View

?>
