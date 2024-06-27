<?php

/*
    * comparison operators:
        [1] [>] greater than
        [2] [>=] greater than equal

        [3] [<] smaller than
        [4] [<=] smaller than equal

        [5] [=] equal
        [6] [!=] [<>] not equal


    * [phpmyadmin]:
        =>> SELECT * FROM try2 WHERE number > 7;
        =>> SELECT * FROM try2 WHERE number >= 7;

        =>> SELECT * FROM try2 WHERE number < 12;
        =>> SELECT * FROM try2 WHERE number <= 12;

        =>> SELECT * FROM try2 WHERE number = 12;
        =>> SELECT * FROM try2 WHERE number != 12;      =>> two are the same
        =>> SELECT * FROM try2 WHERE number <> 12;      =>> two are the same
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
