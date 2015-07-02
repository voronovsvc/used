<?php

  class  User_Model extends Models {
    private $table_name = "users";
    public $id; // id у нас автоматом вбивается, зачем она здесь?
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

      $connect = DB::getInstance (); // создали Объект

      if ($connect->query($sql) === TRUE) { // проверили как отработал метод
        echo "Запись успешная";
      } else {
        echo "Ошибка в запросе или его обработке";
      }

    }


    public function delete ($id) {

      $sql = "DELETE FROM users WHERE id=$id";

      $connect = DB::getInstance (); // создали Объект

      if ($connect->query($sql) === TRUE) { // проверили как отработал метод
        echo "Пользватель удален";
      } else {
        echo "Ошибка в запросе или его обработке";
      }
    }

    public function find ($id) {

      $sql = "SELECT * FROM users WHERE id=$id";

      $connect = DB::getInstance (); // создали Объект

      if ($result = $connect->query($sql) === TRUE) {
        // вытягиваем данные пользователя
        // записываем в одноименные свойства
        $row = $connect->query($sql);


      } else {
        echo "Ошибка в запросе или его обработке";
      }
    }

  }

 ?>
