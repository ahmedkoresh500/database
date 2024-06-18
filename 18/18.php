<?php

/*
    * foreign key: [part 3]:

    * ON UPDATE
    * ON DELETE
        [1] RESTRICT        =>> no check    =>> two are the same    =>> default
        [2] NO ACTION       =>> check       =>> two are the same
        [3] CASCADE
        [4] SET NULL

    * [phpmyadmin]:
        =>> ALTER TABLE orders ADD UNIQUE (client_id);                      =>> add UNIQUE
        =>> ALTER TABLE orders DROP INDEX client_id;        =>> way [1]     =>> drop UNIQUE

        =>> ALTER TABLE orders DROP CONSTRAINT ordering;    =>> way [1]     =>> DROP FOREIGN KEY
        =>> ALTER TABLE orders DROP FOREIGN KEY ordering;   =>> way [2]     =>> DROP FOREIGN KEY

        =>> ALTER TABLE orders 
        ADD CONSTRAINT ordering                             =>> [FK1] OR [FK_PersonOrder]  =>> default
        FOREIGN KEY (client_id) REFERENCES clients(id)      =>> if [clients(id)] not primary key = syntax error
        ON UPDATE SET NULL
        ON DELETE SET NULL;

*/

$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array (
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",       // uppercase or lowercase  [UTF8] or [utf8]
);                                                          // support Arabic in database

try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};

?>

