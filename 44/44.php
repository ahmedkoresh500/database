<?php
/*
    * [Arithmetic operators]:
        [1] [+] addition
        [2] [-] subtraction
        [3] [*] multiplication
        [4] [/] division
        [5] [%] modulus

    * [phpmyadmin]:
        =>> SELECT 2*2+100;         =>> 2 are the same
        =>> SELECT (2*2+100);       =>> 2 are the same

        =>> SELECT 20/2;            =>> result = [10.0000]      =>> 2 are the same
        =>> SELECT (20/2);          =>> result = [10.0000]      =>> 2 are the same

        =>> SELECT ROUND(20/2);     =>> decimal optional  =>> by default [to correct number] lesson: [30]
        
        =>> SELECT 20 DIV 2;        =>> result = [10]       =>> 2 are the same
        =>> SELECT (20 DIV 2);      =>> result = [10]       =>> 2 are the same

        =>> SELECT 20%3;            =>> 2 are the same
        =>> SELECT (20%3);          =>> 2 are the same

        =>> SELECT number, number%3 as modulated from try2;
        =>> SELECT number, (number%3) as modulated from try2;
        =>> SELECT number, MOD(number, 3) as modulated from try2;

        =>> CREATE TABLE try3 (
            name VARCHAR (255) NOT NULL,
            days INT (11) NOT NULL,
            ratePerDay INT (11) NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

    =>> SELECT name, days, ratePerDay, days * ratePerDay AS salary FROM try3;
    =>> SELECT name, days, ratePerDay, days * ratePerDay + 100 AS 'salary+Bonus' FROM try3;
*/

$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",
);

try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};

?>
