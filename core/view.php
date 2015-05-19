<?php 
	
	class View {
		
		// ������: ��������� ������ � �������� � ���� �������
		
		private $template_path = 'view/main/';
		private $layout = 'view/layout.php'; // 
		
		public function render($tpl_content) {
			
			ob_start ();
			
			include_once ($this->template_path . $tpl_content);
			
			$content = ob_get_contents();
			
			ob_end_clean();
			
			include_once ($this->layout); // � ���� ���� �������� index.tpl � ���� �  ��� ������� $content
			
		}// close render()
		
	}// close View
	
?>