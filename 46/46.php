<?php

/*
    * [GROUP BY] & [ORDER BY] & [HAVING]:

    * [phpmyadmin]:
        =>> CREATE TABLE contribution(
            id INT (11) NOT NULL,
            name VARCHAR (255) NOT NULL,
            points INT (11) NOT NULL,
            PRIMARY KEY (id)                    =>> colon here = syntax error
        ) ENGINE = InnoDB;

        =>> SELECT * FROM contribution ORDER BY name;           =>> two are the same
        =>> SELECT * FROM contribution ORDER BY name ASC;       =>> two are the same  =>> Ahmed 114 => 115
        =>> SELECT * FROM contribution ORDER BY name DESC;                            =>> Ahmed 114 => 115
                                        =>> [name] equal  =>> INSERTED FIRST  =>> [ASC]or[DESC]

        =>> SELECT * FROM contribution ORDER BY name, points;
        =>> SELECT * FROM contribution ORDER BY name, points ASC;   =>> Ahmed 114 =>> 115  =>> the same in [osama]
        =>> SELECT * FROM contribution ORDER BY name, points DESC;  =>> Ahmed 115 =>> 114  =>> the same in [osama]              
                                                                    =>> order [name] first
                                                                    =>> [points] desc only
        
        =>> SELECT name, points FROM contribution GROUP BY name;    =>> return one value =>> from repeated values =>> and ordered ASC
        =>> SELECT name, SUM(points) FROM contribution GROUP BY name;
        =>> SELECT name, SUM(points) FROM contribution GROUP BY name ORDER BY points;       =>> [ORDER] stronger than [GROUP]
        =>> SELECT name, SUM(points) FROM contribution GROUP BY name ORDER BY points DESC;

    * [GROUP BY], [ORDER BY]
        =>> CREATE TABLE orders1(
            id INT (11) NOT NULL PRIMARY KEY,
            status VARCHAR (255) NOT NULL                   // colon here = syntax error
        ) ENGINE = InnoDB;

        =>> SELECT status, COUNT(status) FROM orders1 GROUP BY status;                  =>> same result
        =>> SELECT status, COUNT(status) FROM orders1 GROUP BY status ORDER BY status;  =>> same result

        =>> SELECT status, COUNT(status) AS how_much FROM orders1 GROUP BY status ORDER BY COUNT(status); =>> two are the same
        =>> SELECT status, COUNT(status) how_much FROM orders1 GROUP BY status ORDER BY how_much;     =>> two are the same

    * [GROUP BY], [HAVING]
        =>> SELECT status, COUNT(status) how_much FROM orders1 GROUP BY status HAVING COUNT(status) > 1;
        =>> SELECT status, COUNT(status) how_much FROM orders1 GROUP BY status HAVING how_much > 1;

    * [GROUP BY], [HAVING], [ORDER BY] = no error
    * [GROUP BY], [ORDER BY], [HAVING] = syntax error
        =>> SELECT status, COUNT(status) how_much FROM orders1 GROUP BY status HAVING COUNT(status) >= 1 ORDER BY COUNT(status); =>> two are the same
        =>> SELECT status, COUNT(status) how_much FROM orders1 GROUP BY status HAVING how_much >= 1 ORDER BY how_much;      =>> two are the same

    * [GROUP BY], [WHERE CLAUSE] = sytax error              [WHERE CLAUSE] = حيث الشرطيه
    * [column] must be selected when using HAVING
        =>> SELECT id, status, COUNT(status) how_much FROM orders1 GROUP BY status HAVING id >= 1; = no error
        =>> SELECT status, COUNT(status) how_much FROM orders1 GROUP BY status HAVING id = 1;      = syntax error
        =>> SELECT status, COUNT(status) how_much FROM orders1 GROUP BY status WHERE id = 1;       = syntax error

    * aggregation functions:
        [1] max
        [2] main
        [3] count
        [4] sum
        [5] 
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