<?php
/* Ввод данных */
$fname = htmlspecialchars($_POST["fname"]);
$lname = htmlspecialchars($_POST["lname"]);
$gender = htmlspecialchars($_POST["gender"]);
$dateBirth = htmlspecialchars($_POST["date-birth"]);
$status = htmlspecialchars($_POST["status"]);
$socialStatus = htmlspecialchars($_POST["social-status"]);
$place = htmlspecialchars($_POST["place"]);
$sleeping = htmlspecialchars($_POST["sleeping"]);
$wolking = htmlspecialchars($_POST["wolking"]);
$fishing = htmlspecialchars($_POST["fishing"]);
$playing = htmlspecialchars($_POST["playing"]);
$count = htmlspecialchars($_POST["count"]);
$count2 = htmlspecialchars($_POST["count2"]);
$count3 = htmlspecialchars($_POST["count3"]);
$count4 = htmlspecialchars($_POST["count4"]);
$message = htmlspecialchars($_POST["messages"]);
$firstPosition = htmlspecialchars($_POST["first-position"]);
$secondPosition = htmlspecialchars($_POST["second-position"]);
$thirdPosition = htmlspecialchars($_POST["third-position"]);
$equipment = htmlspecialchars($_POST["equipment"]);
$mail = htmlspecialchars($_POST["mail"]);
$cook = htmlspecialchars($_POST["cook"]);
$millioner = htmlspecialchars($_POST["millioner"]);
$hellNo = htmlspecialchars($_POST["hell-no"]);
$soSo = htmlspecialchars($_POST["so-so"]);
$barely = htmlspecialchars($_POST["barely"]);


/* Устанавливаем e-mail адресата */
$myemail = "rada.zayats@i.ua";
/* Проверяем заполнены ли обязательные поля ввода, используя check_input
функцию */
$fname = check_input($_POST["fname"], "Введите ваше имя!");
$dateBirth = check_input($_POST["dateBirth"], "Введите дату рождения!");
$mail = check_input($_POST["mail"], "Введите ваш e-mail!");
$message = check_input($_POST["message"], "Вы забыли написать сообщение!");
/* Проверяем правильно ли записан e-mail */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $mail))
{
    show_error("<br /> Е-mail адрес не существует");
}

// Указываем кодировку
header('Content-Type: text/html; charset=utf-8');

$server = "localhost"; /* имя хоста (уточняется у провайдера), если работаем на локальном сервере, то указываем localhost */
$username = "root"; /* Имя пользователя БД */
$password = ""; /* Пароль пользователя, если у пользователя нет пароля то, оставляем пустым */
$database = "my"; /* Имя базы данных, которую создали */
$datatable = "form"; /* Имя базы данных, которую создали */

// Подключение к базе данный через MySQLi
$mysqli = new mysqli($server, $username, $password, $database);

// Проверяем, успешность соединения.
if (mysqli_connect_errno()) {
    echo "<p><strong>Ошибка подключения к БД</strong>. Описание ошибки: ".mysqli_connect_error()."</p>";
    exit();
}

// Устанавливаем кодировку подключения
$mysqli->set_charset('utf8');

//Для удобства, добавим здесь переменную, которая будет содержать название нашего сайта
$address_site = "http://rada.site";
?>

// Подключение к базе данных
$mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);
?>