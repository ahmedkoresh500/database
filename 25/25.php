<?php

/*
    * string functions: [part 4]:
        [1] REPEAT (column name, repeated_number)
        [2] REPLACE (column name, "current_text", "new_text")
        [3] REVERSE (column name)

    * [phpmyadmin]:
        [1] SELECT COMMENT, REPEAT (comment, 2) AS repeated_column FROM comments;

        [2] SELECT COMMENT, REPLACE (comment, "zx", "zy") AS replaced_text FROM comments;

        [3] SELECT COMMENT, REVERSE (comment) AS reversed_column FROM comments;

        =>> SELECT comment, REPLACE (comment, "zx", "zy") AS replaced_text FROM comments;
        =>> UPDATE comments SET comment = REPLACE (comment, "zx", "zy");            =>> special query

    * [cloumn name] [table name]:
        [1] CREATE:     sensitive to        =>> upper and lower cases
        [2] SELECT:     not sensitive to    =>> upper and lower cases
    * [cloumn name] [table name]  =>>        =>> 
        =>> select COMMENT from COMMENTS;
*/

$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(                                               // [->] = syntax error
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",           // [utf8] uppercase or lowercase
);                                                              // [UTF8] support Arabic in database

try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};

?>
