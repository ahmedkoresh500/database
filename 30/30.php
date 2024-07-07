<?php

/*
    * Numeric functions: [part 1]:
        [1] CEIL (column name)
        [2] FLOOR (column name)
        [3] ROUND (column name, decimal)    =>> decimal: optional  =>> by default [to correct number] 

    * [phpmyadmin]:
        =>> CREATE TABLE try1 (
            id INT (11) NOT NULL,
            number DOUBLE,              =>> note this datatype
            PRIMARY KEY (id)
        ) ENGINE = InnoDB DEFAULT CHARSET = UTF8;

        =>> SELECT number, CEIL (number) AS number_ceiled FROM try1;
        =>> SELECT number, FLOOR (number) AS number_floored FROM try1;
        =>> SELECT number, ROUND (number) AS number_rounded FROM try1;       =>> 1.45  = [1 by round]
        =>> SELECT number, ROUND (number, 1) AS number_rounded FROM try1;    =>> 1.45  = [1.4 by round]
        =>> SELECT number, ROUND (number, 2) AS number_rounded FROM try1;    =>> 1.45  = [1.45 by round]

    * notes:
        =>> round(number)             =>> [3.4 => 3] [3.5 => 4]
        =>> round(number, 1)          =>> [3.45 = 3.450 => 3.4] [3.451 => 3.5] [3.46 => 3.5]

        =>> round(number, 2)          =>> [3.454 => 3.45] [3.455 => 3.46]

*/

$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",           // [utf8] uppercase or lowercase
);                                                              // [UTF8] support Arabic in database

try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};

?>
