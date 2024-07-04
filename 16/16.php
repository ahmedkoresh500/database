<?php

/*
    * foreign key: [part 1]:

    * primary key           =>> parent key
    * foreign key           =>> child key
    
    * [primary key] [foreign key]  =>> must be INT

    =>> CREATE TABLE clients (
        id INT (11) NOT NULL,
        userName VARCHAR (255) NOT NULL,
        email VARCHAR (255) NOT NULL UNIQUE
    ) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

    =>> CREATE TABLE orders (
        id INT (11) NOT NULL,
        price VARCHAR (255) NOT NULL,
        client_id INT (11) NOT NULL,    =>> if VARCHAR = syntax error  =>> when making [foreign key] relationship
        PRIMARY KEY (id),
        FOREIGN KEY (client_id) REFERENCES clients(id);
    ) ENGINE = InnoDB DEFAULT CHARSET = UTF8;

    =>> BROP TABLE clients, orders;                     =>> can't drop clients
    =>> DROP TABLE clients;                             =>> drop clients

    * [phpmyadmin]:
        =>> press [table]  =>> press [structure]  =>> press [relation view]  =>> to see [foreign key] relationship
*/

$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",   // [->] = syntax error
);

$db = new PDO($dsn, $userName, $password, $options);

try{
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};

?>
