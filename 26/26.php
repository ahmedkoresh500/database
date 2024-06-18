<?php

/*
    * string functions: [part 5]:
        [1] CONCAT(column name, column name, column name, text)                 =>> text at any place
        [2] CONCAT_WS(separator, column name, column name, column name, text)   =>> text at any place

    * [phpmyadmin]:
        =>> SELECT comment, CONCAT(client_id, " added by me") AS concated FROM comments;
        =>> SELECT comment, CONCAT(client_id, comment,  " added by me") AS concated FROM comments;
        =>> SELECT comment, CONCAT("first ", comment,  " added by me") AS concated FROM comments;

        =>> SELECT comment, CONCAT_WS(",", client_id, " added by me") AS concated FROM comments;
        =>> SELECT comment, CONCAT_WS(",", client_id, " ", comment, " ", "added by me") AS concated FROM comments;
        =>> SELECT id, comment, CONCAT(CONCAT_WS(',', client_id, ' '), comment) AS concated FROM comments;

        =>> SELECT id, comment, CONCAT_WS(',', client_id, REVERSE(comment)) AS concated FROM comments;

        =>> SELECT comment, CONCAT(" ", REVERSE(comment)) AS concated FROM comments;
        =>> SELECT id, comment, CONCAT_WS( ",", client_id, CONCAT( " ", REVERSE(comment) ) ) AS concated FROM comments;
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