<?php

/*
    * dataType: [integer type]:

    * queries:
        [1] ALTER TABLE date ADD UNIQUE (id);           =>> 3 are the same  =>> [parentheses] is a must
        [2] ALTER TABLE products.date ADD UNIQUE (id);  =>> 3 ar ethe same  =>> [parentheses] is a must
        [3] ALTER TABLE date ADD INDEX (id);            =>> 3 are the same  =>> [parentheses] is a must

        [1] [index key] or [keyname]    = [id]
        [2] [index key] or [keyname]    = [id_1]
        [3] [index key] or [keyname]    = [id_2]

    * [no parentheses] is a must  =>> id, id_1, id_2
        [4] ALTER TABLE date DROP INDEX id;     =>> drop [unique] attribute
        [5] ALTER TABLE date DROP INDEX id_2;   =>> drop [unique] attribute
        [6] ALTER TABLE date DROP INDEX id_3;   =>> drop [unique] attribute

        =>> ALTER TABLE date ADD PRIMARY KEY (id);
        =>> ALTER TABLE date DROP PRIMARY KEY;
        =>> ALTER TABLE products.date DROP PRIMARY KEY, ADD PRIMARY KEY (id);

        =>> CREATE DATABASE 'elzero';                       =>> create database  =>> 2 are the same
        =>> CREATE DATABASE IF NOT EXISTS `elzero`;         =>> create database  =>> 2 are the same

        =>> DROP DATABASE 'elzero';                         =>> drop database   =>> 2 are the same
        =>> DROP DATABASE IF EXISTS `elzero`;               =>> drop databse    =>> 2 are the same

        =>> CREATE TABLE 'date'(id INT (11) NOT NULL);      =>> create table
        =>> DROP TABLE 'date';                              =>> drop table

        =>> ALTER TABLE date ADD birth_day VARCHAR (255) NOT NULL;  =>> add column
        =>> ALTER TABLE date DROP birth_day;                        =>> drop column
*/


$dsn = "mysql:host=localhost;dbName=products";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",       // [utf8]   =>> uppercase or lowercase
);                                                          // [UTF8]   =>> support Arabic in database

try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // in [try & catch] [exception] mode

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
