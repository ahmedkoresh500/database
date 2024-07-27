<?php

/*
    * deal with tables: [part 4]: [ALTER] revision:

    * [phpmyadmin]:
        =>> RENAME TABLE S1 TO new1;                                =>> rename [table]  =>> way [1]
        =>> ALTER TABLE new1 RENAME s1;                             =>> rename [table]  =>> way [2]

        =>> ALTER TABLE s1 CHANGE id ID VARCHAR (255);              =>> rename [column] =>> way [1]
        =>> ALTER TABLE s1 MODIFY ID INT (11);                      =>> modify column   =>> way [2]

        =>> ALTER TABLE students MODIFY ID INT (11), CHANGE name name CHAR (255);

    * related to lesson [45]:
        =>> ALTER TABLE students CONVERT TO CHARACTER SET utf8;     =>> all columns [utf8]
        =>> ALTER TABLE students CONVERT TO CHARACTER SET latin1    =>> all columns [latin1]

        =>> CREATE TABLE students(
                id INT (11) NOT NULL UNIQUE AUTO_INCREMENT PRIMARY KEY      =>> [,] here = syntax error
        )ENGINE=InnoDB DEFAULT CHARSET=UTF8;
*/


$dsn = "mysql:host=localhost;dbName=students";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",           // [utf8]  =>> uppercase or lowercase
);                                                              // [UTF8]  =>> support Arabic in database

$db = new PDO($dsn, $userName, $password, $options);

try{
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};              // [getMessage()] [getLine()] [getCode()]  =>> in [try & catch] by default

?>
