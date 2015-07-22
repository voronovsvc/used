<?php
require_once ('config.php');
require_once ('app/core/db.php');
require_once ('app/core/model.php');
require_once ('app/core/controller.php');
require_once ('app/core/route.php'); // здесь подключаются контроллеры
require_once ('app/core/view.php');
require_once ('app/models/user.php');

$route = new Route;
$route->start();



/*
перебрать весь код осознать его работу
выяснить почему не работает сохранение юзера в базу?
- на странице в браузере показанно, что метод не виден...

вопрос:
1. для чего выведены на индексную страницу файлы из app/core/
2. значение route? для чего выведен метод start

задачи:
1. Сдеклать описание index.php с пояснениями ко всем подключенным файлам и
выведенному методу.

app/core/model.php - подключение класса Model. Кронструктор класса передает
потомкам подключение к базе данных

app/core/controller.php - подключенире класса Controller. Конструктор класса
передает потомкам свойство $view с экземпляром класса new View()

app/core/route.php - подключение класса Route. Выводит в index.php метод start().
Описанире метода
Метод работает с адресной строкой и разбивает запрос на условные части функцией
explode(): $uri[1] - имя контроллера, $uri[2] - имя метода.
*/
