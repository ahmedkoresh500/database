<?php

/*
    * foreign key: [part 6]:
        =>> [one to one]        =>> visa number owned by one client
        =>> [one to many]       =>> more than one address
        =>> [many to many]

    * [phpmyadmin]: =>> [many to many]
        =>> mysql -u root
        =>> show databases;
        =>> use elzero;

        =>> CREATE TABLE markets(
            id INT (11) NOT NULL,
            name VARCHAR (255) NOT NULL,
            PRIMARY KEY (id)
        ) ENGINE = InnoDB;

        =>> CREATE TABLE market_membership(
            client_id INT (11) NOT NULL,
            market_id INT (11) NOT NULL,
            PRIMARY KEY (client_id, market_id),             // composite primary key
            CONSTRAINT client                               // without add
            FOREIGN KEY (client_id) REFERENCES clients(id)
            ON UPDATE CASCADE
            ON DELETE CASCADE,
            CONSTRAINT market                               // without add
            FOREIGN KEY (market_id) REFERENCES markets(id)
            ON UPDATE CASCADE
            ON DELETE CASCADE
            
        ) ENGINE = InnoDB;

        =>> SELECT * FROM clients JOIN market_membership        =>> written first  =>> shown first
        ON clients.id = market_membership.client_id
        WHERE market_membership.market_id = 1;

        =>> SELECT * FROM market_membership JOIN markets        =>> written first  =>> shown first
        ON markets.id = market_membership.market_id
        WHERE market_membership.client_id = 5;
*/

$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",       // uppercase or lowercase [utf8], [UTF8]
);                                                          // support Arabic in dataBase

try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};

?>