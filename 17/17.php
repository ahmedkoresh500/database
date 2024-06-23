<?php

/*
    * foreign key: [part 2]:

        [1] [primary key] must be INT
        [2] [foreign key] must be INT
        =>> if VARCHAR = syntax error   =>> when making foreign key relationship

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
            client_id INT (11) NOT NULL,
            FOREIGN KEY (client_id) REFERENCES clients(id)      =>> way [1]: add foreign key
            ON UPDATE CASCADE                                   =>> [foreign key] constraint = [client_id]
            ON DELETE CASCADE
        ) ENGINE = InnoDB;

        =>> ALTER TABLE orders                                  =>> way [2]: add foreign key
        ADD CONSTRAINT ordering                                 =>> [foreign key] constraint = [ordering]
        FOREIGN KEY (client_id) REFERENCES clients(id)          =>> (client_id)  =>> parentheses is a must
        ON UPDATE CASCADE
        ON DELETE CASCADE;


    * note: [UNIQUE or INDEX] attribute of [ordering] not dropped
        [1] ALTER TABLE orders
            DROP CONSTRAINT ordering;                       =>> way [1]: drop foreign key

        [2] ALTER TABLE orders
            DROP FOREIGN KEY ordering;                      =>> way [2]: drop foreign key
                                            

        =>> SELECT * FROM orders JOIN clients           =>> written first  =>> shown first
        ON clients.id = orders.client_id;

        =>> SELECT * FROM orders JOIN clients           =>> written first  =>> shown first
        ON clients.id = orders.client_id
        WHERE clients.id = 1;                           =>> [clients.id]  =>> condition on specific table

    * [CASCADE] effect:
            =>> UPDATE clients SET id=6 WHERE id=3;     =>> update data in two tables => [clients] [orders]
            =>> DELETE FROM 'clients' WHERE id = 11;    =>> delete data in two tables => [clients] [orders]
                                                        =>> delete whole row in [orders]
    * revision:
        =>> CREATE TABLE try2(id INT(11));      =>> create table
        =>> DROP TABLE try2;                    =>> drop table

        =>> TRUNCATE try2;                      =>> empty table         =>> 3 are the same
        =>> DELETE FROM try2;                   =>> empty table         =>> 3 are the same
        =>> press [table]  =>> press [operations]  =>> press [truncate] =>> 3 are the same
*/

$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",       // [->] = syntax error
);

$db = new PDO($dsn, $userName, $password, $options);

try{
    $db -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
}

?>