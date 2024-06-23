<?php

/*
    * string functions: [part 4]:
        [1] REPEAT(column name, repeated numbers)
        [2] REPLACE(column name, "from", "to")
        [3] REVERSE(column name)

    * [phpmyadmin]:
        =>> SELECT COMMENT, REPEAT (comment, 3) AS repeated FROM comments;

        =>> SELECT COMMENT, REPLACE (comment, "you", "me") AS repeated FROM comments;

        =>> SELECT COMMENT, REVERSE (comment) AS reversed FROM comments;


        =>> SELECT comment, REPLACE (comment, "you", "me") AS replaced FROM comments;
        =>> UPDATE comments SET comment = REPLACE (comment, "you", "me");               =>> special query


    * cloumn name  =>> not sensitive to  =>> upper and lower cases
*/

$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",           // [utf8] uppercase or lowercase
);                                                              // [UTF8] support Arabic in dataBase

try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};

?>