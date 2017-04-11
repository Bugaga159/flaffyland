<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 10.01.2017
 * Time: 21:58
 */
   // require_once "app_config.php";
function debug_print($massage)
{
    if (DEBUG_MODE) {
        echo $massage;
    }
}
define("DEBUG_MODE", true);
//Костанты подключения к БД
define ("DATABASE_HOST", "127.0.0.1");
define ("DATABASE_USERNAME", "root");
define ("DATABASE_PASSWORD", "455");
define ("DATABASE_NAME", "animal_db");

mysqli_connect(DATABASE_HOST, DATABASE_USERNAME, "foo")
or handle_error("there was a problem connecting to the database that holds the information we need to get you connected.",
    mysqli_error());


echo "<p>Connected to MySQL!</p>";

mysqli_select_db(DATABASE_NAME)
or die("<p>Error selecting the database " . DATABASE_NAME . mysqli_error() . "</p>");

echo "<p>Connected to MySQL, using database " . DATABASE_NAME . ".</p>";

$result = mysqli_query("SHOW TABLES;");

if (!$result) {
    die("<p>Error in listing tables: " . mysqli_error() . "</p>");
}

echo "<p>Tables in database:</p>";
echo "<ul>";
while ($row = mysqli_fetch_row($result)) {
    echo "<li>Table: {$row[0]}</li>";
}
echo "</ul>";




/*$link = mysqli_connect(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD,DATABASE_NAME);



if (!$link) {
    $user_error_message = "возникла проблема, связанная с подключением " .
        "к базе данных, содержащей нужную информацию.";
    $system_error_message = mysqli_error($link);
    header("Location: profile_error.php?error_message={$user_error_message}&system_error_message={$system_error_message}");

    // echo "Error: Unable to connect to MySQL." . PHP_EOL;
    /*echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
*/

    /*
    echo "Вы подключились к MySQL " .  DATABASE_NAME;
    echo '</br>';
    echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;*/
 /*   function handle_error($user_error_message, $system_error_message)
    {
        header("Location: profile_error.php?error_message={$user_error_message}&system_error_message={$system_error_message}");
        exit();}


}*/