<?php

/*
    * string functions: [part 1]:
        [1] LEFT (column name, length)
        [2] MID(column name, position, length)          // first letter = [index 1]
        [3] RIGHT (column name, length)


    * [phpmyadmin]:
        =>> CREATE TABLE states(
            id INT (11) NOT NULL PRIMARY KEY,
            country VARCHAR (255) NOT NULL
        ) Engine = InnoDB;

        =>> INSERT INTO `states` (id, country) VALUES (1, 'Egypt');
        =>> INSERT INTO `states` (id, country) VALUES (2, 'Saudi Arabia');
        =>> INSERT INTO `states` (id, country) VALUES (3, 'Canada');

        =>> SELECT LEFT (country, 3) FROM states;

        =>> SELECT MID(country, 5, 3) FROM states;          // [space] after [MID]  =>> syntax error

        =>> SELECT RIGHT (country, 3) FROM states;

*/


$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",       // uppercase or lowercase
);                                                          // support arabic in databBase

try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);  // [try], [catch]  =>> Exception mode
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};

?>
