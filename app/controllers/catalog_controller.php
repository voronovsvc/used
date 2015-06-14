<?php 
	// здесь методы передают индивидуальные параметры страницы
	class Controller_Catalog extends Controller {
		
		public function index () {
			
			$this->view->setTitle ('Добро пожаловать в каталог подержанных вещей');
			$this->view->setLayout ('app/view/layout.tpl');  // проверить работоспособность. Результат?
			$this->view->render ('catalog/index.tpl');
			
		}// close fun... index ()
		
	}// close Controller_Main
