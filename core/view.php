<?php 
	
	class View {
		
		// задача: подтянуть шаблон и воткнуть в него контент
		
		private $template_path = 'view/main/';
		private $layout = 'index.tpl'; // 
		
		public function render() {
			
			ob_start ();
			
			include_once ($this->template_path . $this->layout);
			
			$content = ob_get_contents();
			
			ob_end_clean();
			
			include_once ('view/layout.php'); // в него надо добавить index.tpl в него я  уже впихнул $content
			
		}// close render()
		
	}// close View
	
?>