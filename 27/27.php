<?php

/*
    * string functions: [part 6]:
        [1] INSERT(column name, position, length [to be deleted], new string)   // first letter = index 1

        [22] MID(column name, position, length)      =>> lesson [22]

    * [use]: 
        =>> replace string

    * [phpmyadmin]:
        =>> SELECT comment, INSERT(comment, 3, 2, "osama") AS inserted FROM comments;

        =>> UPDATE try SET text = INSERT(text, 4, 3, 'serial');
        =>> UPDATE try SET text = INSERT(text, 6, 4, '#');

        =>> UPDATE try SET text1 = INSERT (text1, 7, 1, id);
*/

$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",       // uppercase or lowercase
);                                                          // support Arabic in dataBase

try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};

?>