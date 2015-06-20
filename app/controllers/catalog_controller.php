<?php 
	// здесь методы передают индивидуальные параметры страницы
	class Controller_Catalog extends Controller {
		
		public function index () {
			
			$this->view->addJs(array('/js/script1.js', '/js/script2.js', '/js/script3.js', '/js/script4.js'));
			$this->view->addCss(array('/css/style1.css','/css/style2.css','/css/style3.css'));
			$this->view->setTitle ('Добро пожаловать в каталог подержанных вещей');
			$this->view->setLayout ('app/view/layout.tpl');  // проверить работоспособность. Результат?
			$this->view->render ('catalog/index.tpl');
			
		}// close fun... index ()
		
	}// close Controller_Main
