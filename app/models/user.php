<?php

  class  User_Model extends Models {
    private $table_name = "users";
    public $id;
    public $username;
    public $password;
    public $mail;
    public $created = date("Y-m-d H:i:s");
    public $modified;

    public function save() {
      // доработать инсерт через bind
      $sql = "INSERT INTO users (
        username,
        password,
        mail,
        created,
        modified
      ) VALUES (
        ':username',
        ':password',
        ':mail',
        ':created',
        ':modified'
      )";
      // все существующие переменные надо пропкскать через плейсхолдеры
      $this->db->query(
      $sql,
      array(
        ':username' => $this->username,
        ':password' => $this->password,
        ':mail'     => $this->mail,
        ':created'  => $this->created,
        ':modified' => $this->modified
        )
      );
      $this->db->execute();

    }


    public function delete ($id) {

      $sql = "DELETE FROM users WHERE id=:id"; // :id надо в ковычки брать?
      $this->db->query($sql, array(':id' => $id));
      $this->db->execute();
    }


    public function find ($id) {

      $sql = "SELECT * FROM users WHERE id=:id";
      $this->db->query($sql, array(':id' => $id));
      $this->db->execute();

      $this->username = ;
      $this->password = ;
      $this->mail = ;
      $this->created = ;
      $this->modified = ;
    }

  }
