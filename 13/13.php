<?php

/*
    * constraint intro: [NOT NULL]:

    * [phpmyadmin]:
        =>> mysql -u root -p
        =>> enter password                                      =>> [""] no password

        =>> show databases;
        =>> use elzero;

        =>> ALTER TABLE students ADD country VARCHAR (255) NOT NULL;  =>> add new column  =>> at end [by default]
        =>> ALTER TABLE students DROP country;                        =>> drop column

        =>> ALTER TABLE students ADD country VARCHAR (255) NOT NULL FIRST;             =>> at first
        =>> ALTER TABLE students MODIFY country VARCHAR (255) NOT NULL AFTER userName; =>> after specific column

*/

# unix shell comment style
# comment with hash  =>> one line comment  =>> like [//]

$dsn = "mysql:hos=localhost;dbname=elzero";             // watch the difference
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",       // [utf8]  =>> uppercase or lowercase
);                                                          // [utf8]  =>> support arabic in database

$db = new PDO($dsn, $userName, $password, $options);

try{
    $db -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};              // [getMessage()] [getLine()] [getCode()]   =>> in [try & catch] by default

?>