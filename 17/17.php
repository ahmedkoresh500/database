<?php

/*
    * foreign key: [part 2]:

    * [phpmyadmin]:
        =>> DROP TABLE clients, orders;                 =>> can't drop clients
        =>> DROP TABLE orders, clients;                 =>> drop clients

        =>> CREATE TABLE clients (
            id INT (11) NOT NULL PRIMARY KEY,
            userName VARCHAR (255) NOT NULL,
            email VARCHAR(255) NOT NULL
        ) ENGINE = InnoDB;

        =>> CREATE TABLE orders (
            id INT (11) NOT NULL PRIMARY KEY,
            price VARCHAR(255) NOT NULL,
            client_id INT (11) NOT NULL
        ) ENGINE = InnoDB;

        =>> ALTER TABLE orders                          =>> [1] add foreign key
        ADD CONSTRAINT ordering                         =>> or [FK1], [FK_PersonOrder]
        FOREIGN KEY (client_id) REFERENCES clients(id)  =>> if [clients(id)] not primary key = [syntax error]
        ON UPDATE CASCADE
        ON DELETE CASCADE;

        =>> ALTER TABLE orders
        DROP CONSTRAINT ordering;                       =>> [2] drop foreign key

        =>> ALTER TABLE orders
        DROP FOREIGN KEY ordering;                      =>> [2] drop foreign key


        =>> SELECT * FROM orders JOIN clients           =>> written first  =>> shown first
        ON clients.id = orders.client_id;

        =>> SELECT * FROM orders JOIN clients
        ON clients.id = orders.client_id
        WHERE clients.id = 1;                           =>> [clients.id]  =>> to specify which table


    * [CASCADE] effect:
            =>> UPDATE clients SET id = 6 WHERE id = 3;     =>> update data in [clients] and [orders]

            =>> DELETE FROM 'clients' WHERE id = 11;        =>> delete data in [clients] and [orders]



    * revision:
        =>> CREATE TABLE try2(id INT(11));      =>> to create table
        =>> DROP TABLE try2;                    =>> to drop table
        =>> TRUNCATE try2;                      =>> to empty table
*/

$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",       // [->]  =>> syntax error
);

$db = new PDO($dsn, $userName, $password, $options);

try{
    $db -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
}
?>