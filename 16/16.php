<?php

/*
    * foreign key: [part 1]:

    * primary key           =>> parent key
    * foreign key           =>> child key

    =>> CREATE TABLE clients (
        id INT (11) NOT NULL,
        userName VARCHAR (255) NOT NULL,
        email VARCHAR (255) NOT NULL UNIQUE
    ) ENGINE = InnoDB ;

    =>> CREATE TABLE orders (
        order_id INT (11) NOT NULL,
        price VARCHAR (255) NOT NULL,
        client_id INT (11) NOT NULL,        =>> if VARCHAR = syntax error  =>> foreign key must be INT
        PRIMARY KEY (order_id),
        FOREIGN KEY (client_id) REFERENCES clients(id);
    ) ENGINE = InnoDB;

    =>> BROP TABLE clients, orders;                     =>> can't drop clients
    =>> DROP TABLE clients;                             =>> drop clients

    * [phpmyadmin]:
        =>> table  =>> structure  =>> relation view  =>> to see foreign key
*/

$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",
);

$db = new PDO($dsn, $userName, $password, $options);

try{
    $db -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};


?>