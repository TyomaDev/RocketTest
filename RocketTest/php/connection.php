<?php

    define('DB_HOST', 'localhost');
    define('DB_USER','root');
    define('DB_PASSWORD','');
    define('DB_NAME','RocketDB');

    $mysql = @new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    if ( $mysql->connect_errno){
        exit('Ошибка подключения к базе данных!');
    }
    $mysql->set_charset('utf8');
?>