<?php

/*
    * foreign key: [part 4]: relationships:
        =>> [one to one]            =>> visa number owned by one client
        =>> [one to many]           =>> more than [one address] [one order] [one comment]
        =>> [many to many]

    * [phpmyadmin]:  =>> [one to one] relationship:
        [1] CREATE TABLE cards(
            id INT (11) NOT NULL PRIMARY KEY,
            card_num VARCHAR (255),
            client_id INT (11) NOT NULL,                    =>> way [1]: add foreign key
            FOREIGN KEY (client_id) REFERENCES clients(id)  =>> [foreign key] constraint => by default = (orders_ibfk_1)
        ) ENGINE = InnoDB DEFAULT CHARSET = UTF8;           =>> (client_id)  =>> parentheses is a must

        [1] CREATE TABLE cards(
            id INT (11) NOT NULL PRIMARY KEY,
            card_num VARCHAR (255),
            client_id INT (11) NOT NULL,                    =>> [constraint] optional  =>> shown in [relation view]
            CONSTRAINT ordering                             =>> way [1]: add foreign key
            FOREIGN KEY (client_id) REFERENCES clients(id)  =>> [foreign key] constraint = ordering
            ON UPDATE CASCADE                               =>> relation view
            ON DELETE CASCADE,                              =>> (client_id)  =>> parentheses is a must
        ) ENGINE = InnoDB DEFAULT CHARSET = UTF8;

        =>> ALTER TABLE cards ADD UNIQUE (card_num);  =>> 2 are the same  =>> [index key]or[keyname] = [card_num]
        =>> ALTER TABLE cards ADD INDEX (card_num);   =>> 2 are the same  =>> [index key]or[keyname] = [card_num_1]
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
