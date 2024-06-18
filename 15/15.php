<?php

/*
    * [primary key] constraint:

    * UNIQUE        =>> accept NULL value           =>> more than one column in table
    * primary key   =>> doesn't accept NULL value   =>> one column in table

    * primary key = index key
    * primary key index =>> called [primary]

    =>> CREATE TABLE classes(                       =>> way [1]
        cid INT (11) NOT NULL PRIMARY KEY,          =>> must decide length
        name VARCHAR (255) UNIQUE,
    );

    =>> CREATE TABLE teachers(                      =>> way [2]
        tid INT (11) NOT NULL,
        name VARCHAR (255),
        PRIMARY KEY (tid)
    );

    =>> ALTER TABLE students ADD PRIMARY KEY (id);  =>> way [3]

    =>> ALTER TABLE students DROP PRIMARY KEY;      =>> not specified =>> cauz i have only one

    =>> SHOW DATABASES LIKE 'elzero';               =>> [`] syntax error
                                                    =>> ['] is a must
    =>> SHOW INDEXES FROM students;                 =>> students [table]
*/


$dsn = "mysql:host=localhost;dbName=elzero";
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

