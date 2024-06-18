<?php

/*
    * constraint intro:
        =>> [NOT NULL]:

    * [phpmyadmin]:
        =>> mysql -u root
        =>> show databases;
        =>> use elzero;

        =>> ALTER TABLE students ADD osama VARCHAR (255) NOT NULL;          =>> add column  =>> at the end
        =>> ALTER TABLE students DROP osama;                                =>> drop column

        =>> ALTER TABLE students ADD name VARCHAR (200) NOT NULL FIRST;
        =>> ALTER TABLE students MODIFY name VARCHAR (255) NOT NULL AFTER id;

*/

# unix shell comment style
# comment with hash  =>> one line comment  =>> like [//]

$dsn = "mysql:hos=localhost;dbname=elzero";             // watch the difference
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",
);

$db = new PDO($dsn, $userName, $password, $options);

try{
    $db -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};

?>