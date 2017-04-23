<?php
session_start();
unset($_SESSION['Name']); // разрегистрировали переменную
session_destroy(); 
header("Location: login.php");
?>