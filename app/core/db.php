<?php
	
/*/

	Одиночка (англ. Singleton) — порождающий шаблон проектирования,
	гарантирующий, что в однопоточном приложении будет единственный
	экземпляр класса с глобальной точкой доступа.
	
	как я понял задача класса исключить дублирование
	подключений к базе данных
	
	материал с сайта
	http://dron.by/post/pattern-proektirovaniya-singleton-odinochka-na-php.html
/*/ 
	 
	
	
	class DB { // класс Singleton
		
		private static
			$instance = null; //экземпляр объекта со значением null
			
		public static function getInstance ($user, $pass, $dbname, $server){ // это геттер? по функциям похож на сеттер!
			
			if (null === self::$instance) {
				// создали экземпляр класса если $instance тождественен null
				self::$instance = new self; // self - это ссылка на сам класс, тоесть на DB в нашем случаи
			}
			// вернули результат в функцию
			return self::$instance;
		}
		
	} // close DB
	
	
	
	
	
	
?>