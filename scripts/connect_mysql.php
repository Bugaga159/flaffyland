<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 10.01.2017
 * Time: 21:58
 */
    require_once "app_config.php";
//Установка режима отладки
define("DEBUG_MODE", false);

//Костанты подключения к БД
/*define ("DATABASE_HOST", "127.0.0.1");
define ("DATABASE_USERNAME", "root");
define ("DATABASE_PASSWORD", "");
define ("DATABASE_NAME", "animal_db");*/

//$link = mysqli_connect(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD,DATABASE_NAME);
$link = mysqli_connect(DATABASE_HOST, DATABASE_USERNAME, "foo",DATABASE_NAME);

if (!$link) {
   $user_error_message = "возникла проблема, связанная с подключением " .
       "к базе данных, содержащей нужную информацию.";
   $system_error_message = mysqli_error();
   header("Location: /profile_error.php?" .
            "error_message={$user_error_message}&" .
            "system_error_message={$system_error_message}");

   // echo "Error: Unable to connect to MySQL." . PHP_EOL;
    /*echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
*/
    exit;
}
/*
echo "Вы подключились к MySQL " .  DATABASE_NAME;
echo '</br>';
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;*/
function debug_print($massage){
    if (DEBUG_MODE){
        echo $massage;
    }
}