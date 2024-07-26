<?php

/*
    * constraint intro: [NOT NULL]:

    * [phpmyadmin]:
        =>> mysql -u root -p
        =>> enter password:                                 =>> [""] no password  =>> open [MariaDB]

        =>> show databases;                                 =>> [;] is a must
        =>> use elzero;                                     =>> semicolon is a must

        [1] ALTER TABLE students ADD country VARCHAR (255) NOT NULL;  =>> add new column  =>> at end [by default]
        =>> ALTER TABLE students DROP country;                        =>> drop column

        [2] ALTER TABLE students ADD country VARCHAR (255) NOT NULL FIRST;  =>> add new column => at first
        [3] ALTER TABLE students MODIFY country VARCHAR (255) NOT NULL AFTER userName; => after specific column

*/

# [unix shell] comment style
# one line comment  =>> like [//]

$dsn = "mysql:host=localhost;dbname=elzero";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",       // [utf8]  =>> uppercase or lowercase
);                                                          // [UTF8]  =>> support Arabic in database

$db = new PDO($dsn, $userName, $password, $options);

try{
    $db -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};              // [getMessage()] [getLine()] [getCode()]   =>> in [try & catch] by default

?>
