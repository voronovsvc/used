<?php
// здесь методы передают индивидуальные параметры страницы
class Controller_Users extends Controller
{
    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            /*
            если Post, значит заполнена форма
            1. проверить данные на наличие и допустимость
            2. залить в базу
            */



            $user = new User_Model();
            $user->save();


        } else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            /*
            если Get, значит показываем страницу с формой пользователю
            */
            $this->view->addJs(array('/js/script1.js', '/js/script2.js', '/js/script3.js', '/js/script4.js'));
            $this->view->addCss(array('/css/style1.css','/css/style2.css','/css/style3.css'));
            $this->view->setTitle ('Регистрация нового пользователя');
            $this->view->setLayout ('app/view/layout.tpl'); // проверить работоспособность. Результат?
            $this->view->render ('register/index.tpl');
        }
    }
}
