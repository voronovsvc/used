<?php 
	
	class View {
		
		// задача: подтянуть шаблон и воткнуть в него контент
		
		private $template_path = 'view/main/';
		private $layout = 'view/layout.php'; // 
		
		public function render($tpl_content) {
			
			ob_start ();
			
			include_once ($this->template_path . $tpl_content);
			
			$content = ob_get_contents();
			
			ob_end_clean();
			
			include_once ($this->layout); // в него надо добавить index.tpl в него я  уже впихнул $content
			
		}// close render()
		
	}// close View
	
?>