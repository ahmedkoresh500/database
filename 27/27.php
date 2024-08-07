<?php

/*
    * string functions: [part 6]:
        [1] INSERT (column name, position, length [to be deleted], new string[to be added])

        =>> position included
        =>> first letter = index 1

        [22] MID(column name, position, length)     =>> lesson [22]  =>> space after[MID]  = syntax error

    * [phpmyadmin]:
        =>> SELECT comment, INSERT (comment, 3, 3, "abcd") AS inserted FROM comments;

        =>> SELECT text, INSERT (text, 4, 2, "##") AS inserted from try;
        =>> SELECT id, text, INSERT (text, 4, 2, id) AS inserted from try;  =>> new string [to be added]
                                                                            =>> can be [column name]

        =>> UPDATE `try` SET text = INSERT(text, 4, 2, '##');
*/

$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",       // [utf8] uppercase or lowercase
);                                                          // [UTF8] support Arabic in database

try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};

?>
