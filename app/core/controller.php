<?php

	// создаем объект View в свойстве view

	class Controller {

		public $view;

		public function __construct () {

			$this->view = new View();

		}

	}
