<?php

/*
    * [Date + Time] functions: [part 3]:
        [1] MONTH(column name or date)          =>> month number
        [2] MONTHNAME(column name or date)      =>> month name
        [3] HOUR(column name or date)
        [4] MINUTE(column name or date)


    * [phpmyadmin]:
        =>> INSERT INTO try2 VALUES (2, now());   // [date] column =>> [VARCHAR]or[DATETIME] =>> no error

        =>> SELECT date, MONTH(date) FROM try2;
        =>> SELECT date, MONTHNAME(date) FROM try2;

        =>> SELECT HOUR(date) FROM try2;
        =>> [column] empty      =>> value = [NUL]
        =>> [column] not empty  =>> value = [0]     =>> [date] written, [time] not written
*/


$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",   // [utf8] uppercase or lowercase
);                                                      // [UTF8] support Arabic in database

try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};

?>
