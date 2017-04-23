<?php
//Запуск сессий;
session_start();
//если пользователь не авторизован
if (!(isset($_SESSION['Name'])))
{
//идем на страницу авторизации
header("Location: login.php");
exit;
};
//Выводим саму страницу для авторизованных пользователей
$nm =$_SESSION['Name'] ;
echo "Пользователь системы $nm <br> ";
echo "Вы на секретной странице $nm <br> ";
echo '<a href="logout.php">Выйти</a>';
?>