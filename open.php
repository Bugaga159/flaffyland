<?php 

define ("DATABASE_HOST", "127.0.0.1");
define ("DATABASE_USERNAME", "root");
define ("DATABASE_PASSWORD", "");
define ("DATABASE_NAME", "animal_db");


$link = mysqli_connect(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD, DATABASE_NAME);

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Вы подключились к MySQL" . PHP_EOL ;
echo '</br>';
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

echo "</br>";

if ($result = mysqli_query($link, "SELECT * FROM users", MYSQLI_USE_RESULT)) {

    /* Важно заметить, что мы не можем вызывать функции, которые взаимодействуют
       с сервером, пока не закроем результирующий набор. Все подобные вызовы
       будут вызывать ошибку 'out of sync' */
    if (!mysqli_query($link, "SET @a:='this will not work'")) {
        printf("Ошибка: %s\n", mysqli_error($link));
    }
    mysqli_free_result($result);
}

mysqli_close($link);
