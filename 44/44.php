<?php
/*
    * [Arithmetic operators]:
        [1] [+] addition
        [2] [-] subtraction
        [3] [*] multiplication
        [4] [/] division
        [5] [%] modulus

    * [phpmyadmin]:
        =>> SELECT (2 * 2) + 100;

        =>> SELECT ROUND(20 / 2);       =>> decimal optional  =>> to correct number by default  [10]
        =>> SELECT (20 / 2);            =>> with decimal        [10.0000]
        =>> SELECT (20 DIV 2);          =>> without decimal     [10]

        =>> SELECT (21 % 6);

        =>> CREATE TABLE try3 (
            name VARCHAR (255) NOT NULL,
            days INT (11) NOT NULL,
            ratePerDay INT (11) NOT NULL
        ) ENGINE = InnoDB DEFAULT CHARSET = UTF8;

    =>> SELECT name, days AS workedDays, ratePerDay, days * ratePerDay AS salary FROM try3;  =>> [days] no error
    =>> SELECT name, days AS workedDays, ratePerDay, days * ratePerDay + 100 AS 'salary+Bonus' FROM try3;
*/

$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",        // uppercase or lowercase
);

try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};


?>