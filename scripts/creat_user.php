<?php
/*
require_once "connect_mysql.php";


ini_set("display_errors",1);
error_reporting(E_ALL);

// Получение данных
	$login = $data['login'];
	$first_name = $data['first_name'];
	$last_name = $data['last_name'];
	$email = $data['email'];
	$password = password_hash($data['password'],PASSWORD_DEFAULT);

			$insert_sql = "INSERT INTO `users` (`login`,`first_name`, `last_name`, `email`, `password`) VALUES ('{$login}','{$first_name}', '{$last_name}', '{$email}','{$password}')";
$result = mysqli_query($link, $insert_sql) or die(mysqli_error());

header("Location: /profile.php?user_id=" . mysqli_insert_id($link));
exit();
*/
