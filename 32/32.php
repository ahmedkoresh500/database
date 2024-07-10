<?php

/*
    * [Date + Time] functions: [part 1]:
        [1] CURTIME() = CURRENT_TIME() = CURRENT_TIME           =>> HH:MM:SS
        [2] CURDATE() = CURRENT_DATE() = CURRENT_DATE           =>> YYY-MM-DD
        [3] NOW() = CURRENT_TIMESTAMP() = CURRENT_TIMESTAMP     =>> YYY-MM-DD HH:MM:SS

    * [phpmyadmin]:
        =>> CREATE TABLE try2 (
            id INT (11) NOT NULL,
            date VARCHAR (255) NOT NULL,
            PRIMARY KEY (id)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

        =>> SELECT CURTIME();
        =>> SELECT CURRENT_TIME();
        =>> SELECT CURRENT_TIME;

*/


$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",       // [utf8] uppercase or lowercase
);                                                          // [UTF8] support Arabic in database

try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};

?>
