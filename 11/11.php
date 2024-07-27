<?php

/*
    * deal with tables: [part 3]: [ALTER]:

    [1] [Add]:
        =>> mysql -u root -p
        =>> enter password                                  =>> [""] no password    =>> open [MariaDB]

        =>> show databases;                                 =>> [;] is amust
        =>> use osama;                                      =>> semicolon is a must

        =>> show table status                                           =>> show status of all tables
        =>> ;                                                           =>> semicolon is a must

        * [datatype] is a must:
        =>> ALTER TABLE students ADD password VARCHAR(255);             =>> add new column  =>> at end [by default]
        =>> ALTER TABLE students ADD age INT (11) FIRST;                =>> add new column  =>> at first
        =>> ALTER TABLE students ADD userName VARCHAR(255) AFTER name;  =>> add new column  =>> after specific column

    [2] [DROP]:
        =>> ALTER TABLE students DROP age;                             =>> drop specific column
    * [phpmyadmin]
        =>> press [table]  =>> press [structure]  =>> press [drop] for specific column

    [3] [move]:
    * [phpmyadmin]:
        =>> press [table]  =>> press [structure]  =>> press [move columns]

        =>> ALTER TABLE students CHANGE name name VARCHAR (255);
        =>> ALTER TABLE students CHANGE name Name CHAR (255) FIRST;
        =>> ALTER TABLE students CHANGE `Name` `name` CHAR (255) AFTER `id`;
        =>> ALTER TABLE students MODIFY name VARCHAR (255);

*/

$dsn = "mysql:host=localhost;dbName=test";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",       // [utf8] uppercase or lowercase
);                                                          // [UTF8] support arabic in database

$db = new PDO($dsn, $userName, $password, $options);

try{
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};

?>
