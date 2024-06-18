<?php

/*
    * foreign key: [part 4]: 
        =>> [one to one] relationship           =>> visa number owned by one client
        =>> [one to many] relationship          =>> more than one address
        =>> [many to many] relationship

    * [phpmyadmin]:  =>> [one to one]:
        =>> CREATE TABLE cards(                             =>> two are the same
            id INT (11) NOT NULL PRIMARY KEY,
            card_num VARCHAR (255),
            client_id INT (11) NOT NULL,
            FOREIGN KEY (client_id) REFERENCES clients(id)
        ) ENGINE = InnoDB;

        =>> CREATE TABLE cards(                             =>> two are the same
            id INT (11) NOT NULL PRIMARY KEY,
            card_num VARCHAR (255),
            client_id INT (11) NOT NULL,
            CONSTRAINT ordering
            FOREIGN KEY (client_id) REFERENCES clients(id)  =>> if [clients(id)] not primary key = [syntax error]
            ON UPDATE CASCADE
            ON DELETE CASCADE,
        ) ENGINE = InnoDB;

        =>> ALTER TABLE cards ADD UNIQUE (card_num);
*/

$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = (
    PDO::MYSQL_aTTR_INIT_COMMAND => "SET NAMES UTF8",
);

try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE,ERRMODE_EXCEPTION);
}catch($PDOException $e){
    echo "Failed" . $e -> getMessage();
};



?>