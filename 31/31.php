<?php

/*
    * Numeric functions: [part 2]:
        [1] MOD(column name, modulus number)
        [2] TRUNCATE(column name, decimal)          =>> decimal mandatory
        [3] POW(column name, power)  = POWER(column name, power)

    * [phpmyadmin]:
        =>> SELECT MOD(7, 2);
        =>> SELECT MOD(21, 6);
        =>> SELECT number, MOD(number, 1) AS modulated FROM try1;


        =>> SELECT number, ROUND(number, 2) AS rounded, TRUNCATE(number, 2) AS truncated FROM try1;
        =>> 1.456               1.46                            1.45
        =>> SELECT number, ROUND(number, 1) AS rounded, TRUNCATE(number, 1) AS truncated FROM try1;
        =>> 1.456               1.5                             1.4

        =>> SELECT TRUNCATE(number, 0) FROM try1;
        =>> INSERT INTO try1 (id, number) VALUES (9, TRUNCATE(123.56998, 2));


        =>> SELECT POW(2, 3);
        =>> SELECT number, POWER(number, 2) AS number_powered FROM try1;



    * [phpmyadmin]:
        =>> dataBase name  =>> table name  =>> empty        =>> three are the same  =>> to empty table
        =>> table  =>> operation  =>> empty                 =>> three are the same  =>> to empty table
        =>> TRUNCATE try1;                                  =>> three are the same  =>> to empty table
*/


$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",           // uppercase or lowercase
);                                                              // support Arabic in dataBase


try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};

?>