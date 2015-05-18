<?php 
	
	class View {
		
		public function render($tpl_name) {
			
			if (file_exists($tpl_name)) {
				include_once ($tpl_name);
			}
			
			
		}// close render()
		
	}// close View
	
?>