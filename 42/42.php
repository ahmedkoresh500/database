<?php

/*
    * control flow function: [IF]:
        [1] IF(condition, true, false)

    * [phpmyadmin]:
        =>> SELECT id, number, IF (number > 8, 'congrats', 'hard luck') AS conditioned FROM try2;
        =>> SELECT id, number, IF(number>8, CONCAT('congrats ', number), CONCAT('hard luck ', number)) AS conditioned FROM try2;
        =>> UPDATE try2 SET number = IF(number<=4, number + 10, number);

        =>> ALTER TABLE try2 CHANGE number number INT (11) NULL;
        =>> ALTER TABLE try2 CHANGE date date VARCHAR (255) NULL;

        =>> SELECT id, IF(date IS NULL, 'Not Available', date) FROM try2;   =>> doesn't work
*/

$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",
);

try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};

?>
