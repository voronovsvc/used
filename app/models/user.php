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

      $sql = "INSERT INTO users (
        username,
        password,
        mail,
        created,
        modified
      ) VALUES (
        '$this->username',
        '$this->password',
        '$this->mail',
        '$this->created',
        '$this->modified'
      )";
      // здесь один параметр, так как условие не нужно, а в таблице сработает
      // первичный ключ длянового пользователя
      // $placeholder (второй параметр)- отработает по-умолчанию
      // и именно в этом запросе не нужен
      $this->db->query($sql);
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

 ?>
