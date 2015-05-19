<?php 
	
	class View {
		
		private $template_path = 'view/';
		//private $layout = 'index.tpl';
		
		public function render($tpl_name) {
			
			$tpl_uri = $this->template_path . $tpl_name;
			
			if (file_exists($tpl_uri)) {
				include_once ($tpl_uri);
			}
			
			
		}// close render()
		
	}// close View
	
?>