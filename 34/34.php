<?php

/*
    * [Date + Time] functions: [part 3]:
        [1] MONTH(column name)          =>> month number
        [2] MONTHNAME(column name)      =>> month name
        [3] HOUR(column name)
        [4] MINUTE(column name)


    * [phpmyadmin]:
        =>> INSERT INTO try2 VALUES (2, now());     // [date] column = [VARCHAR]or[DATETIME] = no error

        =>> SELECT date, MONTH(date) FROM try2;
        =>> SELECT date, MONTHNAME(date) FROM try2;
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
