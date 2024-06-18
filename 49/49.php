<?php

/*
    * [INNER JOIN]:

    * [phpmyadmin]:
        =>> SELECT u.id AS user_id,
            name user_name,
            langName favouriteLang 
            FROM users u, langs l
            WHERE l.id = u.lang_id;

        =>> SELECT u.id AS user_id,
            name user_name,
            langName favouriteLang 
            FROM users u INNER JOIN langs l
            ON l.id = u.lang_id;

        =>> SELECT u.id AS user_id,
            name user_name,
            langName favouriteLang 
            FROM users u INNER JOIN langs l
            WHERE l.id = u.lang_id;                 // [WHERE] instead of [ON]  =>> no error

    * space between [INNER JOIN] [LEFT JOIN] [RIGHT JOIN] [FULL JOIN]
    * JOIN for more than 2 tables
*/


$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_aTTR_INIT_COMMAND => "SET NAMES utf8",       // uppercase or lowercase
);                                                          // support Arabic in dataBase

try{
    $db = new PDO($dsn, $userName, $password, $options);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};


?>