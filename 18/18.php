<?php

/*
    * foreign key: [part 3]:

    * ON UPDATE
    * ON DELETE
        [1] RESTRICT        =>> no check    =>> two are the same    =>> default
        [2] NO ACTION       =>> check       =>> two are the same
        [3] CASCADE
        [4] SET NULL                        =>> changing [primary key]  =>> doesn't change [foreign key]

    * [phpmyadmin]:
        =>> ALTER TABLE orders ADD UNIQUE (client_id);      =>> way [1]: add [UNIQUE or INDEX] attribute
        =>> ALTER TABLE orders ADD INDEX (client_id);       =>> way [2]: add [UNIQUE or INDEX] attribute
                                                            =>> [parentheses] is a must

        =>> ALTER TABLE orders DROP INDEX client_id;        =>> drop [UNIQUE or INDEX] attribute
                                                            =>> [no parentheses] is a must

        =>> ALTER TABLE orders 
        ADD CONSTRAINT ordering                             =>> add [foreign key]
        FOREIGN KEY (client_id) REFERENCES clients(id)      =>> [foreign key] constraint = ordering
        ON UPDATE SET NULL                                  =>> (client_id)  =>> parentheses is a must
        ON DELETE SET NULL;

    * note: [UNIQUE or INDEX] attribute of [ordering] not dropped
        =>> ALTER TABLE orders DROP CONSTRAINT ordering;    =>> way [1]: DROP FOREIGN KEY
        =>> ALTER TABLE orders DROP FOREIGN KEY ordering;   =>> way [2]: DROP FOREIGN KEY

*/

$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array (
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",       // [utf8] uppercase or lowercase
);                                                          // [utf8] support Arabic in database

try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};          // [getMessage()] [getLine()] [getCode()]  =>> in [try & catch] by default

?>

