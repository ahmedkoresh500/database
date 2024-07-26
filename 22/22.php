<?php

/*
    * string functions: [part 1]:
        [1] LEFT (column name, length)          // first letter = [index 1]
                                                // length mandatory

        [2] MID(column name, position, length)  // position included
                                                // first letter = [index 1]
                                                // [length] optional

        [3] RIGHT (column name, length)         // first letter = [index 1]
                                                // [length] mandatory


    * [phpmyadmin]:
        =>> CREATE TABLE states(
            id INT (11) NOT NULL PRIMARY KEY,
            country VARCHAR (255) NOT NULL
        ) Engine = InnoDB;

        =>> INSERT INTO `states` (id, country) VALUES (1, 'Egypt');
        =>> INSERT INTO `states` (id, country) VALUES (2, 'Saudi Arabia');
        =>> INSERT INTO `states` (id, country) VALUES (3, 'Canada');

        =>> SELECT country, LEFT (country, 3) FROM states;      // [1] first 3 letters

        =>> SELECT country, MID(coountry, 2);                   // [length] optional
        =>> SELECT country, MID(country, 2, 3) FROM states;     // [3] medium letters [2, 3, 4]
                                                                // [3] [space] after [MID] = syntax error

        =>> SELECT country, RIGHT (country, 3) FROM states;     // [2] last 3 letters

*/


$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(                                           // [->] = syntax error
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",       // [utf8] uppercase or lowercase
);                                                          // [UTF8] support Arabic in databbase

try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);  // [try & catch]  =>> Exception mode
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};

?>
