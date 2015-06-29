﻿<?php

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
		private $pdo;
		private $statement;


		private function __construct() {	// *

			$mysql = 'mysql:host='.DB_SERV.';dbname='.DB_NAME;

			try {
			$this->pdo = new PDO($mysql, DB_USER, DB_PASS);
			}
			catch (PDOException $e) { // почитать про исключения!

				echo "Нет подключения к базе данных";
				exit;
			}

		} // close func.. __construct


		public static function getInstance (){ // метод, дающий уникальость классу

			if (null === self::$instance) {
				// создали экземпляр класса если $instance тождественен null
				// памятка: self - это ссылка на сам класс
				// $this - ссылка на текущий объект в классе
				self::$instance = new self ();
			}
			// вернули результат в функцию
			return self::$instance;
		} // close func.. getInstance


		public function query ($sql, $param = array()) {

			// к экзкмпляру класса PDO, применили метод prepare (),
			// записали в переменную
			$this->statement = $this->pdo->prepare ($sql);

			if (!empty ($param)) {
				foreach ($param as $key => $val) {
					$this->bind ($key, $val); //по умолчанию $type = null
				}
			}

		}// close func.. query


		public function bind ($placeholder, $value, $type = null) {

			// проверка переменной на ее тип если по-умолчанию null
			if (is_null ($value)) {
				switch (true) {
					case is_int ($value):
					$type = PDO::PARAM_INT;
					break;
					case is_bool ($value):
					$type = PDO::PARAM_BOOL;
					break;
					case is_null ($value):
					$type = PDO::PARAM_NULL;
					break;
					default:
					$type = PDO::PARAM_STR;
				}

			}

			$this->statement->bindValue($placeholder, $value, $type);

		} // close func .. bind


		public function execute () {

			return $this->statement->execute();

		} // close func.. execute


		private function __wakeup () {}		// **
		private function __clone () {}		// ***

	} // close DB




/*
	Задачи приватных методов в Singleton

	*	__construct - как нам известно, при создании экземпляра класса из вне,
	вызывается 	конструктор этого класса, если он есть в классе, и он в публичном
	доступе.
	Что касается Singleton, конструктор имеет приватную область видимости, и при
	вызове из вне произойдет ошибка, так как класс обявленный из вне будет вызывать
	приватный конструктор, который будет вызываться только внутри нашего класса.
	Например:
	class view {

		private function __construct () {}
	}

	$obj = new View; выдаст ошибку, так как будет вызываться приватный конструктор


	**	__wakeup - (коммент Сансея) -

	***	__clone - создание копии экземпляра объекта обсолютно идентичного оригиналу
	Вот пример: цитата от Сансея
	$class = new CLass();
	$class1 = clone $class;
	$class1 - это новый экземпляр класса Class() с точно такими же значениями
	параметров, как у $class. То есть это новый объект, но точно с такими же
	значениями.
	Объявив в классе приватный метод __clone, мы так же, как и с конструктором,
	вызовим ошибку, при клонировании объекта из вне, так как клон может быть вызван
	только внутри класса, согласно указанной, приватной, облости видимости.

*/






?>