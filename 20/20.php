<?php

/*
    * foreign key: [part 5]: relationships:
        =>> [one to one]        =>> visa number owned by one client
        =>> [one to many]       =>> more than [one address] [one order]
        =>> [many to many]

    * [one to many] [client -> orders] =>> primary key [one]  =>> foreign key [many]
        =>> mysql -u root -p
        =>> enter password                                      =>> [""] no password
        
        =>> show databases;
        =>> use elzero;

        =>> CREATE TABLE comments(                              =>> two are the same
            id INT(11) NOT NULL PRIMARY KEY,
            comment VARCHAR (255) NOT NULL,
            client_id INT (11) NOT NULL,
            FOREIGN KEY (client_id) REFERENCES clients(id)      // [1] CONSTRAINT optional = [FK] column name [by default]
        ) ENGINE = InnoDB;

        =>> CREATE TABLE comments(                              =>> two are the same
            id INT(11) NOT NULL PRIMARY KEY,
            comment VARCHAR (255) NOT NULL,
            client_id INT (11) NOT NULL,
            CONSTRAINT commenting                               // [2] [CONSTRAINT] optional = [FK] column name [by default]
            FOREIGN KEY (client_id) REFERENCES clients(id)      // add foreign key
            ON UPDATE CASCADE                                   // [foreign key] constraint = commenting
            ON DELETE CASCADE,                                  // (client_id)  =>> parentheses is a must
        ) ENGINE = InnoDB;

        =>> ALTER TABLE comments
            DROP CONSTRAINT commenting;         =>> two are the same

        =>> ALTER TABLE comments
            DROP FOREIGN KEY commenting;        =>> two are the same

        =>> ALTER TABLE comments
            ADD CONSTRAINT commenting                       // [CONSTRAINT] optional = [FK] column name [by default]
            FOREIGN KEY (client_id) REFERENCES clients(id)  // add foreign key
            ON UPDATE CASCADE                               // foreign key constraint = commenting
            ON DELETE CASCADE;                              // (client_id)  =>> parentheses is a must

*/

$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",   // [utf8] uppercase or lowercase
);                                                      // [utf8] support arabic in database

try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};              // [getMessage()] [getLine()] [getCode()]  =>> in [try & catch] by default

?>