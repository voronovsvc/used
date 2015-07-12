<?php
// здесь методы передают индивидуальные параметры страницы
class Controller_Users extends Controller
{
    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // заливаем в базу
            // как мне обратиться к методу save()?
            $this->save();
        }

        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            // показываем страницу
            $this->view->addJs(array('/js/script1.js', '/js/script2.js', '/js/script3.js', '/js/script4.js'));
            $this->view->addCss(array('/css/style1.css','/css/style2.css','/css/style3.css'));
            $this->view->setTitle ('Регистрация нового пользователя');
            $this->view->setLayout ('app/view/layout.tpl'); // проверить работоспособность. Результат?
            $this->view->render ('register/index.tpl');
        }
    }
}
