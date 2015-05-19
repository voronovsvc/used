<?php 
	
	class Controller_Main {
		
		public function index () {
			
			$view = new View;
			$view->render('index.tpl');
			
		}// close fun... index ()
		
	}// close Controller_Main
