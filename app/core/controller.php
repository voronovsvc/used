<?php

	// создаем объект View в свойстве view

	class Controller {

		public $view;

		function __construct () {

			$this->view = new View();

		}

	}
