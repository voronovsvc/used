<?
class  User_Model extends Model
{
    private $table_name = "users";
    public $id;
    public $username;
    public $password;
    public $mail;
    public $created;  // созданный
    public $modified; // модифицированный

    public function save()
    {
        if (empty($htis->id)) {
          $sql = "SELECT mail FROM users WHERE mail=:mail";
          $this->db->query($sql, array(':mail' => $this->mail));
          $this->db->execute();
          $stdClass = $this->db->fetchAll();
          if (!empty($stdClass)) {
            exit (header( 'Location: /')); // говорит что заголовки присланы???
          }

          $this->created  = date("Y-m-d H:i:s");
          $sql = "INSERT INTO users (
              username,
              password,
              mail,
              created
          ) VALUES (
              :username,
              :password,
              :mail,
              :created
          )";
          // все существующие переменные надо пропускать через плейсхолдеры
          $this->db->query(
              $sql,
              array(
              ':username' => $this->username,
              ':password' => $this->password,
              ':mail'     => $this->mail,
              ':created'  => $this->created
              )
          );
          $this->db->execute();
        } else {
          $this->modified = date("Y-m-d H:i:s");
          $sql = "UPDATE users SET
              username = :username,
              password = :password,
              mail = :mail,
              modified = :modified
              WHERE id=$this->id";

          $this->db->query(
              $sql,
              array(
              ':username' => $this->username,
              ':password' => $this->password,
              ':mail'     => $this->mail,
              ':modified'  => $this->modified
              )
          );
          $this->db->execute();
        }

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
