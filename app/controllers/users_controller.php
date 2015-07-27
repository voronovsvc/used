<?php
// здесь методы передают индивидуальные параметры страницы
class Controller_Users extends Controller
{
    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $user = new User_Model;
          $user->username = $_POST['username'];
          $user->password = $_POST['password'];
          $user->mail     = $_POST['mail'];
          $user->save();
        } else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
          //$this->view->addJs(array('/js/script1.js', '/js/script2.js', '/js/script3.js', '/js/script4.js'));
          //$this->view->addCss(array('/css/style1.css','/css/style2.css','/css/style3.css'));
          $this->view->setTitle ('Регистрация нового пользователя');
          $this->view->setLayout ('app/view/layout.tpl');
          $this->view->render ('register/index.tpl');
        }
    }
}
