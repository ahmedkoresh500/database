<?php

/*
    * foreign key: [part 3]:

    * ON UPDATE:
    * ON DELETE:
        [1] RESTRICT        =>> no check    =>> two are the same    =>> default
        [2] NO ACTION       =>> check       =>> two are the same
        [3] CASCADE
        [4] SET NULL                        =>> changing [primary key]  =>> doesn't change [foreign key]

    * [phpmyadmin]:
        =>> ALTER TABLE orders ADD UNIQUE (client_id);  =>> way [1]: add [UNIQUE or INDEX] attribute => (client_id)
        =>> ALTER TABLE orders ADD INDEX (client_id);   =>> way [2]: add [UNIQUE or INDEX] attribute => (client_id_1)
                                                        =>> [parentheses] is a must

        =>> ALTER TABLE orders DROP INDEX client_id;        =>> drop [UNIQUE or INDEX] attribute
                                                            =>> [no parentheses] is a must

        =>> ALTER TABLE orders 
        ADD CONSTRAINT ordering                             =>> add [foreign key]
        FOREIGN KEY (client_id) REFERENCES clients (id)     =>> [foreign key] constraint = (ordering)
        ON UPDATE SET NULL                                  =>> (client_id)  =>> parentheses is a must
        ON DELETE SET NULL;

    * [ordering] constraint     =>> in relation view    =>> dropped
    * [ordering]  =>> [index key] or [keyname]          =>> not dropped

        [1] ALTER TABLE orders                          =>> way [1]: DROP FOREIGN KEY
            DROP CONSTRAINT ordering;                   =>> [no parentheses] is a must

        [1] ALTER TABLE orders                          =>> way [2]: DROP FOREIGN KEY
            DROP FOREIGN KEY ordering;                  =>> [no parentheses] is a must

        [2] ALTER TABLE orders                          =>> way [1]: drop foreign key
            DROP CONSTRAINT orders_ibfk_1;              =>> [no parentheses] is a must

        [2] ALTER TABLE orders                          =>> way [2]: drop foreign key
            DROP FOREIGN KEY orders_ibfk_1;             =>> [no parentheses] is a must

*/

$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array (
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",       // [utf8] uppercase or lowercase
);                                                          // [UTF8] support Arabic in database

try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};          // [getMessage()] [getLine()] [getCode()]  =>> in [try & catch] by default

?>
