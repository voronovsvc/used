<?php 
	
	class Controller_Main {
		
		public function index () {
			
			
			$view = new View;
			$view->render('view/main/index.tpl');
			
			/*
			print 'Привет, Вы попали на главную нашего крутого сайта!';
			print '<br /> и пусть кто то решит поспорить!!!';
			*/
			
		}// close fun... index ()
		
	}// close Controller_Main
