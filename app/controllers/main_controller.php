<?php 
	// здесь методы передают индивидуальные параметры страницы
	class Controller_Main extends Controller {
		
		public function index () {
			
			//$view = new View; - я так понимаю объект объявлен в контроллере 
			$this->view->addJs('/js/script1.js, /js/script2.js, /js/script3.js, /js/script4.js');
			$this->view->addCss('/css/style1.css, /css/style2.css, /css/style3.css');
			$this->view->setTitle ('Главная страница каталога подержанных вещей');
			$this->view->setLayout ('app/view/layout.tpl'); // проверить работоспособность. Результат?
			$this->view->render ('main/index.tpl');
			
		}// close fun... index ()
		
	}// close Controller_Main
