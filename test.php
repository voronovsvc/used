<?php
	
	class Singleton
	{
		private static
			$instance = null;
		/**
		 * @return Singleton
		 */
		public static function getInstance()
		{
			if (null === self::$instance)
			{
				self::$instance = new self();
			}
			return self::$instance;
		}
		
		/*
			
			
			
		*/
		
		private function __clone() {}
		
		/*
		
			PHP 5 позволяет объявлять методы-конструкторы.
			Классы, в которых объявлен метод-конструктор,
			будут вызывать этот метод при каждом создании
			нового объекта, так что это может оказаться полезным,
			например, для инициализации какого-либо состояния
			объекта перед его использованием. 
			
			вывод: задача нонструктора ...
		
		*/
		private function __construct() {}	
		
		public function test()
		{
			var_dump($this);
		}
		
	} // close class Singleton
	
	
	$Object = Singleton::getInstance();  // Получение объекта
	//Вывод будет одинаковым, так как существует только один экземпляр
	$Object -> test();
	Singleton::getInstance() -> test();
	
?> 