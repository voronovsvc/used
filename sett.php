<?php
	
	// сеттеры и геттеры 
	
	class Foo {
		
		private $Bar; // приватное свойство с приватным доступом, только внутри данного класса
		
		
		public function getBar () { // что делает геттер?
			
			return $this->bar; // обратились к риватному свойству...
			
		}
		
		
		public function setBar () { // что делает сеттер?
			
			
			
		}
		
	}
	
	
	
	
?>