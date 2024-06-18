<?php

/*
    * comparison operators:
        [1] [=] equal
        [2] [!=] [<>] not equal

        [3] [>] greater than
        [4] [>=] greater than equal

        [5] [<] smaller than
        [6] [<=] smaller than equal


    * [phpmyadmin]:
        =>> SELECT * FROM try2 WHERE number = 4;
        =>> SELECT * FROM try2 WHERE number > 4;
        =>> SELECT * FROM try2 WHERE number >= 4;
        =>> SELECT * FROM try2 WHERE number < 4;
        =>> SELECT * FROM try2 WHERE number <= 4;
        =>> SELECT * FROM try2 WHERE number != 4;
        =>> SELECT * FROM try2 WHERE number <> 4;
*/

$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8";       // uppercase or lowercase
);

try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};

?>