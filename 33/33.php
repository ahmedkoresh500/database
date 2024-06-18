<?php

/*
    * [Date + Time] functions: [part 2]:
        [1] DAYNAME(date)
        [2] DAYOFWEEK(date)         =>> [sunday = day 1], [saturday = day 7]
        [3] DAYOFMONTH(date)
        [4] DAYOFYEAR(date)

    * [phpmyadmin]:
        =>> SELECT date, DAYNAME(date) AS day_name FROM try2;
        =>> SELECT DAYNAME('2020-07-19');

        =>> SELECT date, DAYOFWEEK(date) FROM try2;
        =>> SELECT date, DAYOFMONTH(date) FROM try2;
        =>> SELECT date, DAYOFYEAR(date) FROM try2;
*/


$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",       // uppercase or lowercase
);                                                          //support Arabic in dataBase


try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};


?>