<?php

/*
    * deal with tables: [part 1]:

    * row = record = tuple
    * coulmn = attribute = field

    * [cmder program]:
        =>> mysql -u root
        =>> show databases;
        =>> use elzero;
        =>> CREATE TABLE students;                                          =>> must have one column
        =>> CREATE TABLE students(id INT(11), name VARCHAR(255), email VARCHAR(255));
                                                                            =>> [1] one line
        =>> CREATE TABLE students(                                          =>> [2] more than one line
            id INT(11),
            name VARCHAR(255),
            email VARCHAR(255)
        ) ENGINE = InnoDB;

        =>> describe students;                  =>> three are the same  = structure of the table
        =>> show columns from students;         =>> three are the same  = structure of the table
        =>> show fields from students;          =>> three are the same  = structure of the table

        =>> show table status;                  =>> to show status of all tables

        =>> show create table students;         =>> to show [create command]


        =>> CREATE TABLE students;                              =>> must have one column   
        =>> CREATE TABLE students (id INT(11));                 =>> found
        =>> CREATE TABLE IF NOT EXISTS students (id INT (11));
        =>> DROP TABLE IF EXISTS students;
*/

$dsn = "mysql:host=localhost;dbName=test";
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