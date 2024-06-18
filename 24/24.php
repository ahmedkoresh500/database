<?php

/*
    * string functions: [part 3]:
        [1] LCASE(column name)  = LOWER (column name)
        [2] UCASE(column name)  = UPPER (column name)    

    * [phpmyadmin]:
        =>> SELECT LCASE (comment) AS comment FROM comments;
        =>> SELECT LOWER (comment) AS comment FROM comments;

        =>> SELECT UCASE (comment) AS comment FROM comments;
        =>> SELECT UPPER (comment) AS comment FROM comments;

        =>> SELECT comment, LENGTH(comment) AS counted_letters FROM comments ORDER BY LENGTH(comment) ASC;
*/


$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",           // uppercase or lowercase
);                                                              // support Arabic in dataBase

try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};

?>