<?php

/*
    * deal with tables: [part 1]:

    * row = record = tuple
    * column = attribute = field

    * [command prompt]      =>> desktop
    * [shell]       =>> [windows+R]  =>> write [cmd]  =>> press [enter]
    * [xampp] program       =>> press [shell]
    * [phpmyadmin]          =>> press [SQL]
        =>> mysql -u root -p
        =>> enter password                                          =>> [""]  =>> no password

        =>> show databases;
        =>> use osama;

        =>> CREATE TABLE students;                          =>> must have one column =>> [;] is a must
        =>> CREATE TABLE students(id INT(11), name VARCHAR(255), email VARCHAR(255));
                                                            =>> [1] one line
        =>> CREATE TABLE students(                          =>> [2] more than one line
            id INT(11),
            name VARCHAR(255),
            email VARCHAR(255)
        ) ENGINE = InnoDB;

        =>> describe students;                  =>> 3 are the same  = display table structure
        =>> show columns from students;         =>> 3 are the same  = display table structure
        =>> show fields from students;          =>> 3 are the same  = display table structure

        =>> show table status;                  =>> show status of all tables

        =>> show create table students;         =>> show [create command]

        =>> CREATE TABLE students;                              =>> must have one column   
        =>> CREATE TABLE students (id INT (11));                =>> exists
        =>> CREATE TABLE IF NOT EXISTS students (id INT (11));
        =>> DROP TABLE IF EXISTS students;
*/

$dsn = "mysql:host=localhost;dbName=test";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",       // [utf8]  =>> uppercase or lowercase
);                                                          // [utf8]  =>> support arabic in database

$db = new PDO($dsn, $userName, $password, $options);

try{
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};              // [getMessage()] [getLine()] [getCode()]  =>> in [try & catch] by default

?>