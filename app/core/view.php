<?php 
	
	class View {
		
		// задача: подтянуть шаблон и воткнуть в него контент
		
		private $template_path = 'app/view/';
		private $layout = 'app/view/layout.tpl';
		private $title; 
		
		public function render($tpl_content) {
			
			ob_start ();
			
			print $this->title;
			
			$title = ob_get_contents();
			
			ob_end_clean();
			
			
			ob_start ();
			
			include_once ($this->template_path . $tpl_content);
			
			$content = ob_get_contents();
			
			ob_end_clean();
			
			include_once ($this->layout); // в него надо добавить index.tpl в него я  уже впихнул $content
			
		}// close func... render()
		
		
		public function setTitle ($title) { //публичный метод-сеттер
			
			$this->title = $title;
			
		}// close func... setTitle
		
	}// close View
	
?>