<?php

/*
    * dataType: [integer type]:

    * queries:
        =>> ALTER TABLE test.tbl ADD UNIQUE (id);       =>> two ar ethe same  =>> parentheses is a must
        =>> ALTER TABLE tbl ADD UNIQUE (id);            =>> two are the same  =>> parentheses is a must

        =>> ALTER TABLE tbl DROP INDEX id;              =>> drop unique


        =>> ALTER TABLE tbl ADD PRIMARY KEY (id);

        =>> ALTER TABLE test.tbl DROP PRIMARY KEY;
        =>> ALTER TABLE tbl DROP PRIMARY KEY, ADD PRIMARY KEY(id);



        =>> CREATE DATABASE 'elzero';                           =>> create dataBase
        =>> DROP DATABASE 'elzero';                             =>> drop database

        =>> CREATE TABLE 'tbl'(id INT (11) NOT NULL);           =>> create table
        =>> DROP TABLE 'tbl';                                   =>> drop table

        =>> ALTER TABLE tbl ADD name VARCHAR (255) NOT NULL;    =>> add column
        =>> ALTER TABLE tbl DROP name;                          =>> drop column
*/


$dsn = "mysql:host=localhost;dbName=test";
$user = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",       // uppercase or lowercase
);                                                          // support arabic in database

try{
    $db = new PDO($dsn, $user, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "failed " . $e -> getMeassage();
};

for($i=1 ; $i<=77 ; $i++){
    $stm = $db -> prepare( "INSERT INTO test.tbl (id) VALUES ('127')" );
    $stm -> execute();
};

/*
    $stm = $db -> prepare("");      =>> two are the same
    $stm -> execute();

    $query = "";                    =>> two are the same
    $db -> exec($query);
*/

?>