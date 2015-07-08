<?php

  class Model {
    private $tablename = '';
    public $db;

    public function __construct () {
      $this->db = DB::getIntance();
    }

  }
