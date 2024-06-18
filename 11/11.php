<?php

/*
    * deal with tables: [part 3]:
        =>> [ALTER]

    [1] [Add]:
        =>> mysql -u root
        =>> use elzero;                                                 =>> to be inside dataBase elzero;
        =>> ALTER TABLE students ADD password VARCHAR(255);             =>> add at the end

        =>> show table status                                           =>> to show status of all tables
        =>> ;                                                           =>> semicolon is a must

        =>> ALTER TABLE students ADD test VARCHAR (255) FIRST;          =>> [1] add column
        =>> ALTER TABLE students ADD userName VARCHAR(255) AFTER name;  =>> dataType is a must

    [2] [DROP]:
        =>> ALTER TABLE students DROP test;                             =>> [1] drop column
    * [phpmyadmin]
        =>> table  =>> structure  =>> column  =>> DROP column

    [3] [move]:
    * [phpmyadmin]:
        =>> table  =>> structure  =>> column  => change column  =>> move column
        =>> ALTER TABLE students CHANGE `password` `password` VARCHAR (255) AFTER `email`;

        =>> ALTER TABLE students CHANGE name name CHAR (50);
        =>> ALTER TABLE students MODIFY name CHAR (30);

        =>> ALTER TABLE students CHANGE name NAme CHAR (90);
*/

$dsn = "mysql:host=localhost;dbName=test";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",       // uppercase or lowercase
);                                                          // support arabic in dataBase

$db = new PDO($dsn, $userName, $password, $options);

try{
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOEception $e){
    echo "Failed" . $e -> getMessage();
};



?>