<?php

/*
    * foreign key: [part 2]:

        [1] [primary key]       =>> parent key
        [2] [foreign key]       =>> child key

        =>> [primary] [foreign]  =>> must be INT
        =>> if VARCHAR = syntax error   =>> when making [foreign key] relationship

    * [phpmyadmin]: to see [foreign key] relationships
        =>> press [table]  =>> press [structure]  =>> press [relation view]

    * [phpmyadmin]:
        =>> DROP TABLE clients, orders;                 =>> can't drop clients
        =>> DROP TABLE orders, clients;                 =>> drop clients

        [1] CREATE TABLE clients (
            id INT (11) NOT NULL PRIMARY KEY,
            userName VARCHAR (255) NOT NULL,
            email VARCHAR(255) NOT NULL
        ) ENGINE = InnoDB DEFAULT CHARSET = UTF8;

        [2] CREATE TABLE orders (
            id INT (11) NOT NULL PRIMARY KEY,
            price VARCHAR(255) NOT NULL,
            client_id INT (11) NOT NULL,
            FOREIGN KEY (client_id) REFERENCES clients (id) =>> way [1]: add foreign key
            ON UPDATE CASCADE                       =>> [foreign key] constraint  =>> by default = (orders_ibfk_1)
            ON DELETE CASCADE                       =>> [relation view]
        ) ENGINE = InnoDB DEFAULT CHARSET = UTF8;   =>> (client_id)  =>> parentheses is a must

        [2] CREATE TABLE orders (
            id INT (11) NOT NULL PRIMARY KEY,
            price VARCHAR(255) NOT NULL,
            client_id INT (11) NOT NULL,
            CONSTRAINT ordering
            FOREIGN KEY (client_id) REFERENCES clients (id) =>> way [1]: add foreign key
            ON UPDATE CASCADE                               =>> [foreign key] constraint = (ordering)
            ON DELETE CASCADE                               =>> (client_id)  =>> parentheses is a must
        ) ENGINE = InnoDB DEFAULT CHARSET = UTF8;

        [3] ALTER TABLE orders                              =>> way [2]: add foreign key
        ADD FOREIGN KEY (client_id) REFERENCES clients (id) =>> [foreign key] constraint  =>> by default = (orders_ibfk_1)
        ON UPDATE CASCADE                                   =>> [relation view]
        ON DELETE CASCADE;                                  =>> (client_id)  =>> parentheses is a must

        [3] ALTER TABLE orders                              =>> way [2]: add foreign key
        ADD CONSTRAINT ordering                             =>> [foreign key] constraint = [ordering]
        FOREIGN KEY (client_id) REFERENCES clients (id)     =>> (client_id)  =>> parentheses is a must
        ON UPDATE CASCADE
        ON DELETE CASCADE;


    * [ordering] constraint  =>> in [relation view]     =>> dropped
    * [ordering] => [INDEX key] or [keyname]            =>> not dropped
        [1] ALTER TABLE orders                      =>> way [1]: drop foreign key
        DROP CONSTRAINT ordering;                   =>> [no parentheses] mandatory  =>> [no parentheses] is a must

        [1] ALTER TABLE orders                      =>> way [2]: drop foreign key
        DROP FOREIGN KEY ordering;                  =>> [no parentheses] mandatory  =>> [no parentheses] is a must

        [2] SELECT * FROM orders JOIN clients   =>> written first  =>> shown first
        ON clients.id = orders.client_id        =>> [WHERE] instead of [ON]  =>> [JOIN] [INNER JOIN] only
        WHERE clients.id = 7;


    * [CASCADE] effect:
            =>> UPDATE clients SET id=3 WHERE id=5;     =>> update data in two tables => [clients] [orders]
            =>> DELETE FROM 'clients' WHERE id = 3;     =>> delete data in two tables => [clients] [orders]
                                                        =>> delete whole row in [orders]


    * revision:
        =>> CREATE TABLE try2(id INT(11));      =>> create table
        =>> DROP TABLE try2;                    =>> drop table

    * [4] ways  =>> to empty specific table:
        =>> press [database]  =>> press [empty] for specific table          =>> 4 are the same
        =>> press [table]  =>> press [operations]  =>> press [truncate]     =>> 4 are the same
        =>> TRUNCATE try2;                                                  =>> 4 are the same
        =>> DELETE FROM try2;                                               =>> 4 are the same

        =>> DELETE * FROM try2;                 =>> result = syntax error   =>> no [*] in delete
*/

$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",       // [->] = syntax error
);

$db = new PDO($dsn, $userName, $password, $options);

try{
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);     // [try & catch] Exception mode
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
}

?>
