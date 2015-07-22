<?php
/*

*/
class  User_Model extends Model
{
    private $table_name = "users";
    public $id;
    public $username;
    public $password;
    public $mail;
    public $created;
    public $modified;

    public function save()
    {
        $this->created = date("Y-m-d H:i:s");
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

    public function delete($id)
    {
        $sql = "DELETE FROM users WHERE id=:id"; // :id надо в ковычки брать?
        $this->db->query($sql, array(':id' => $id));
        $this->db->execute();
    }

    public function find($id)
    {
        $sql = "SELECT * FROM users WHERE id=:id";
        $this->db->query($sql, array(':id' => $id));
        $this->db->execute();

        $stdClass = $this->fetchAll();
        $this->username  = $stdClass->username;
        $this->password  = $stdClass->password;
        $this->mail      = $stdClass->mail;
        $this->created   = $stdClass->created;
        $this->modified  = $stdClass->modified;
    }
}
