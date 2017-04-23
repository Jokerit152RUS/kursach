<?php
// Подключаемся к БД
$mysqli = new mysqli('localhost', 'kostruykov', '0000', 'kp_kostruykov');
$query = "set names utf8";
$mysqli->query($query);

// Считываем данные из JS
$login = $_POST["login"];
$password = $_POST["password"];
$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];



// Выполняем запись в БД
$query = "insert into polzovateli (login, password, name, phone, email) values ('".$login."', '".$password."', '".$name."', '".$phone."', '".$email."')";
$results = $mysqli->query($query);
?>