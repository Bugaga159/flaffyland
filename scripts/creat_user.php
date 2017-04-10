<?php

//require_once "connect_mysql.php";


ini_set("display_errors",1);
error_reporting(E_ALL);

// Получение данных

$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

$insert_sql = "INSERT INTO `users` (`first_name`, `last_name`, `email`, `password`) VALUES ('{$first_name}', '{$last_name}', '{$email}','{$password}')";
$result = mysqli_query($link, $insert_sql) or die(mysql_error());

header("Location: /profile.php?user_id=" . mysqli_insert_id($link));
exit();

