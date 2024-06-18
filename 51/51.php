<?php

/*
    * the end and references:

    * [phpmyadmin]:
        =>> SELECT *
        FROM users INNER JOIN langs
        USING (lang_id);            // [USING] instead of [ON]  =>> column the same name at the two tables

    * [MARIADB] website
    * [MYSQL] website
    * [MYSQLTUTORIAL.org] website

    * [MDN] website
    * [W3school] website
*/

$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",           // uppercase or lowercase
);                                                              // support Arabic in dataBase

try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};

?>