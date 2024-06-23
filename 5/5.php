<?php

/*
    * dataType: [integer type]:

    * queries:
        [1] ALTER TABLE date ADD UNIQUE (id);           =>> 3 are the same  =>> [parentheses] is a must
        [2] ALTER TABLE products.date ADD UNIQUE (id);  =>> 3 ar ethe same  =>> [parentheses] is a must
        [3] ALTER TABLE date ADD INDEX (id);            =>> 3 are the same  =>> [parentheses] is a must

        [1] add [unique] attribute with [keyname]  =>> [id]
        [2] add [unique] attribute with [keyname]  =>> [id_1]
        [3] add [unique] attribute with [keyname]  =>> [id_2]

        [4] ALTER TABLE date DROP INDEX id;     =>> drop unique attribute  =>> [no parentheses] is a must
        [5] ALTER TABLE date DROP INDEX id_2;   =>> drop unique attribute  =>> [no parentheses] is a must
        [6] ALTER TABLE date DROP INDEX id_3;   =>> drop unique attribute  =>> [no parentheses] is a must

        =>> ALTER TABLE date ADD PRIMARY KEY (id);
        =>> ALTER TABLE date DROP PRIMARY KEY;
        =>> ALTER TABLE products.date DROP PRIMARY KEY, ADD PRIMARY KEY (id);

        =>> CREATE DATABASE 'elzero';                               =>> create database
        =>> DROP DATABASE 'elzero';                                 =>> drop database

        =>> CREATE TABLE 'date'(id INT (11) NOT NULL);              =>> create table
        =>> DROP TABLE 'date';                                      =>> drop table

        =>> ALTER TABLE date ADD birth_day VARCHAR (255) NOT NULL;  =>> add column
        =>> ALTER TABLE date DROP birth_day;                        =>> drop column
*/


$dsn = "mysql:host=localhost;dbName=products";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",       // [utf8]   =>> uppercase or lowercase
);                                                          // [utf8]   =>> support arabic in database

try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // try, catch =>> [exception] mode

    $stm = $db -> prepare( "INSERT INTO products.date (id, birth_year) VALUES ('4', '2003')" );
    $stm -> execute();

}catch(PDOException $e){
    echo "failed " . $e -> getMessage();
};


/*
    $stm = $db -> prepare("");      =>> two are the same
    $stm -> execute();

    $query = "";                    =>> two are the same
    $db -> exec($query);
*/

?>