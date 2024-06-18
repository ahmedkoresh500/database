<?php

/*
    * Numeric functions: [part 1]:
        [1] CEIL(column name)
        [2] FLOOR(column name)
        [3] ROUND(column name, decimal)     =>> decimal optional  =>> to correct number by default

    * [phpmyadmin]:
        =>> CREATE TABLE try1 (
            id INT (11) NOT NULL,
            number DOUBLE,              =>> important note
            PRIMARY KEY (id)
        ) ENGINE = InnoDB;

        =>> SELECT number, CEIL(number) AS number_ceiled FROM try1;
        =>> SELECT number, FLOOR(number) AS number_floored FROM try1;
        =>> SELECT number, ROUND(number) AS number_rounded FROM try1;       =>> 1.45  = [1 by round]
        =>> SELECT number, ROUND(number, 1) AS number_rounded FROM try1;    =>> 1.45  = [1.4 by round]
        =>> SELECT number, ROUND(number, 2) AS number_rounded FROM try1;    =>> 1.45  = [1.45 by round]
*/

$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",           // uppercase or lowercase
);                                                              // support Arabic in dataBase

try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};

?>