<?php

/*
    * comparison functions: [part 1]:
        [1] BETWEEN ... AND ...             =>> [minimum first] is a must
        [2] NOT BETWEEN ... AND ...         =>> [minimum first] is a must

    * [phpmyadmin]:
        =>> ALTER TABLE try2 ADD number INT(11) NOT NULL;

        =>> SELECT * FROM try2 WHERE id BETWEEN 2 AND 5;    [2, 5] included
        =>> SELECT * FROM try2 WHERE id BETWEEN 3 AND 3;    [3, 3] included

        =>> SELECT * FROM try2 WHERE date BETWEEN DATE_SUB(NOW(), INTERVAL 2 MONTH) AND NOW();
        =>> SELECT * FROM try2 WHERE date BETWEEN '2022-12-15' AND '2023-02-2';
                                    // [01], [02]   =>> [0] is a must

        =>> SELECT * FROM try2 WHERE date NOT BETWEEN '2023-01-15' AND '2023-02-2';

        =>> SELECT * FROM try2 WHERE date BETWEEN '01-15-2023' AND '02-02-2023';
                                            =>> no result  =>> different format

        =>> SELECT * FROM try2 WHERE id = 5 AND number = 5;                                =>> true syntax
        =>> SELECT * FROM try2 WHERE id = 5 AND date BETWEEN '2023-01-15' AND '2023-02-2'; =>> true syntax
*/

$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",       // [utf8] uppercase or lowercase
);                                                          // [UTF8] support Arabic in database

try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};

?>