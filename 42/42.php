<?php

/*
    * control flow function: [IF]:
        [1] IF(condition, true_statement, false_statement)

    * [phpmyadmin]:
        =>> SELECT id, number, IF (number>8, 'congrats', 'hard luck') conditioned FROM try2;
        =>> SELECT id, number, IF(number>8, CONCAT('congrats ', number), CONCAT('hard luck ', number)) AS conditioned FROM try2;
        =>> UPDATE try2 SET number = IF(number<=8, number+10, number);

        =>> ALTER TABLE try2 CHANGE number number INT (11) NULL;
        =>> ALTER TABLE try2 CHANGE date date VARCHAR (255) NULL;

        =>> SELECT id, date, IF(date IS NULL, 'Not Available', date) AS conditioned FROM try2;
                                                                            => works with [NULL] value only
        =>> SELECT * FROM try2 WHERE date IS NULL;                          => works with [NULL] value only
        =>> SELECT * FROM try2 WHERE date NOT NULL;
        =>> SELECT id, date, IF(date="", 'not available', date) AS conditioned FROM try2;
                                                                            =>> it works
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
