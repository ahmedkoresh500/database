<?php

/*
    * control flow function: [case]:
        [2] CASE
                WHEN column = value THEN result
                WHEN column >= value THEN result
                WHEN column <= value THEN result
                ELSE result
            END

        [2] CASE column
                WHEN value THEN result
                WHEN value THEN result
                ELSE result
            END

    * [phpmyadmin]:
        =>> SELECT id,number,
        CASE
            WHEN number = 7 THEN 'not bad'
            WHEN number >= 8 THEN 'good'
            ELSE 'bad' 
        END AS result
        FROM try2;

        =>> SELECT id, number,
        CASE number
            WHEN 7 THEN 'not bad'
            WHEN 8 THEN 'good'
            WHEN 13 THEN 'perfect'
            ELSE 'bad'
        END AS result
        FROM try2;
*/

$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",        // uppercase or lowercase
);

try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};


?>