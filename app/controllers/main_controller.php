<?php 
	
	class Controller_Main extends Controller {
		
		public function index () {
			
			//$view = new View;
			$this->view->setTitle ('Главная страница каталога подержанных вещей');
			$this->view->render ('main/index.tpl');
			
		}// close fun... index ()
		
	}// close Controller_Main
