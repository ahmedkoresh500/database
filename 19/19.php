<?php

/*
    * foreign key: [part 4]: relationships:
        =>> [one to one]            =>> visa number owned by one client
        =>> [one to many]           =>> more than [one address] [one order]
        =>> [many to many]

    * [phpmyadmin]:  =>> [one to one] relationship:
        =>> CREATE TABLE cards(                             =>> two are the same
            id INT (11) NOT NULL PRIMARY KEY,
            card_num VARCHAR (255),
            client_id INT (11) NOT NULL,                        =>> way [1]: add foreign key
            FOREIGN KEY (client_id) REFERENCES clients(id)      =>> [foreign key] constraint = client_id
        ) ENGINE = InnoDB;                                      =>> (client_id)  =>> parentheses is a must

        =>> CREATE TABLE cards(                             =>> two are the same
            id INT (11) NOT NULL PRIMARY KEY,
            card_num VARCHAR (255),
            client_id INT (11) NOT NULL,
            CONSTRAINT ordering                             =>> [constraint] optional = [FK] column name [by default]
            FOREIGN KEY (client_id) REFERENCES clients(id)  =>> way [2]: add foreign key
            ON UPDATE CASCADE                               =>> [foreign key] constraint = ordering
            ON DELETE CASCADE,                              =>> (client_id)  =>> parentheses is a must
        ) ENGINE = InnoDB;

        =>> ALTER TABLE cards ADD UNIQUE (card_num);        =>> two are the same
        =>> ALTER TABLE cards ADD INDEX (card_num);        =>> two are the same
*/

$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = (
    PDO::MYSQL_aTTR_INIT_COMMAND => "SET NAMES UTF8",   // [utf8]  =>> uppercase or lowercase
);                                                      // [UTF8]  =>> support Arabic in database

try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // [try & catch] Exception mode
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};          // [getmessage()] [getLine()] [getCode()]  =>> in [try & catch] by default

?>
