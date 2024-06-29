<?php

/*
    * the end and references:

    * [phpmyadmin]:
        =>> SELECT *
        FROM users INNER JOIN langs
        USING (lang_id);            // [USING] instead of [ON]  =>> [PRIMARY] [FOREIGN] the same name

    * [MariaDB] website
    * [MYSQL] website
    * [MYSQLTUTORIAL.org] website

    * [MDN] website
    * [W3school] website
*/

$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
);

try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};

?>
