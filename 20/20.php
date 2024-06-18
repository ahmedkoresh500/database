<?php

/*
    * foreign key: [part 5]:
        =>> [one to one]        =>> visa number owned by one client
        =>> [one to many]       =>> more than one address
        =>> [many to many]

    * [phpmyadmin]:  =>> [one to many]  =>> primary key [one]  =>> foreign key [in many]
        =>> mysql -u root
        =>> show databases;
        =>> use elzero;

        =>> CREATE TABLE comments(                              =>> two are the same
            id INT(11) NOT NULL PRIMARY KEY,
            comment VARCHAR (255) NOT NULL,
            client_id INT (11) NOT NULL,
            FOREIGN KEY (client_id) REFERENCES clients(id)      // [1] without foreign key CONSTRAINT
        ) ENGINE = InnoDB;

        =>> CREATE TABLE comments(                              =>> two are the same
            id INT(11) NOT NULL PRIMARY KEY,
            comment VARCHAR (255) NOT NULL,
            client_id INT (11) NOT NULL,
            CONSTRAINT commenting                               // [2] with foreign key [CONSTRAINT]
            FOREIGN KEY (client_id) REFERENCES clients(id)
            ON UPDATE CASCADE
            ON DELETE CASCADE,
        ) ENGINE = InnoDB;

        =>> ALTER TABLE comments
        DROP CONSTRAINT commenting;         =>> two are the same

        =>> ALTER TABLE comments
        DROP FOREIGN KEY commenting;        =>> two are the same

        =>> ALTER TABLE comments
        ADD CONSTRAINT commenting
        FOREIGN KEY (client_id) REFERENCES clients(id)
        ON UPDATE CASCADE
        ON DELETE CASCADE;

*/

$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
);

try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};

?>