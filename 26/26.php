<?php

/*
    * string functions: [part 5]:
        [1] CONCAT (column name, column name, ..., text)                =>> [text] at any place
        [2] CONCAT_WS (separator, column name, column name, ..., text)  =>> [text] at any place
                                                                        =>> [separator] is a must

    * [phpmyadmin]:
        =>> SELECT comment, CONCAT(client_id, comment) AS concated FROM comments;
        =>> SELECT comment, CONCAT("first ", comment,  " end") AS concated FROM comments;
        =>> SELECT comment, CONCAT("- ", REVERSE(comment)) AS concated FROM comments;

        =>> SELECT CONCAT_WS("-", client_id, " ", comment) AS concated FROM comments;
        =>> SELECT CONCAT_WS('- ', client_id, REVERSE(comment)) AS concated FROM comments;

        =>> SELECT CONCAT( CONCAT_WS('-', client_id, ' '), comment) AS concated FROM comments;
        =>> SELECT CONCAT_WS( "-", client_id, CONCAT( " ", REVERSE(comment) ) ) AS concated FROM comments;
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
