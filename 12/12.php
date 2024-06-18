<?php

/*
    * deal with tables: [part 4]: 
        =>> ALTER revision:

    * [phpmyadmin]:
        =>> RENAME TABLE S2 to new2;                                =>> rename table  =>> way [1]

        =>> ALTER TABLE new2 CHANGE id ID VARCHAR (255);            =>> rename column =>> way [1]
        =>> ALTER TABLE new2 MODIFY ID CHAR (50);                   =>> modify column =>> way [2]

        =>> ALTER TABLE new2 RENAME s2;                             =>> rename table  =>> way [2]

        =>> ALTER TABLE students MODIFY id INT (22), CHANGE NAme name CHAR (222);

        =>> ALTER TABLE students CONVERT TO CHARACTER SET utf8;     =>> convert all columns to [utf8]
        =>> ALTER TABLE students CONVERT TO CHARACTER SET latin1    =>> convert all columns to [latin1]
*/


$dsn = "mysql:host=localhost;dbName=students";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",
);

$db = new PDO($dsn, $userName, $password, $options);

try{
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};


?>