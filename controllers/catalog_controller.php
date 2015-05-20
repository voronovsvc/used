<?php 
	
	class Controller_Catalog {
		
		//priv
		
		public function index () {
			
			$view = new View;
			$view->render('catalog/index.tpl');
			
		}// close fun... index ()
		
	}// close Controller_Main
