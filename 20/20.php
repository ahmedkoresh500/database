<?php

/*
    * foreign key: [part 5]: relationships:
        =>> [one to one]        =>> visa number owned by one client
        =>> [one to many]       =>> more than [one address] [one order] [one comment]
        =>> [many to many]

    * [client -> orders] [one to many]  =>> primary key [one]  =>> foreign key [many]
        =>> mysql -u root -p
        =>> enter password                                  =>> [""] no password  =>> open [MariaDB]
        
        =>> show databases;                                 =>> [;] is a must
        =>> use elzero;                                     =>> [;] is a must

        [1] CREATE TABLE comments(                      =>> two are the same
            id INT(11) NOT NULL PRIMARY KEY,
            comment VARCHAR (255) NOT NULL,
            client_id INT (11) NOT NULL,
            FOREIGN KEY (client_id) REFERENCES clients(id) // [1] CONSTRAINT optional => shown in [relation view]
        ) ENGINE = InnoDB;

        [1] CREATE TABLE comments(                      =>> two are the same
            id INT(11) NOT NULL PRIMARY KEY,
            comment VARCHAR (255) NOT NULL,
            client_id INT (11) NOT NULL,                    // [2] [CONSTRAINT] optional => shown in [relation view]
            CONSTRAINT commenting                           // way [1]: add foreign key
            FOREIGN KEY (client_id) REFERENCES clients(id)  // [foreign key] constraint = commenting
            ON UPDATE CASCADE                               // relation view
            ON DELETE CASCADE,                              // (client_id)  =>> parentheses is a must
        ) ENGINE = InnoDB DEFAULT CHARSET = UTF8;

    * [commenting] constraint  =>> in relation view     =>> dropped
    * [commenting] [index key] or [keyname]             =>> not dropped

        [2] ALTER TABLE comments                =>> two are the same
            DROP CONSTRAINT commenting;         

        [2] ALTER TABLE comments                =>> two are the same
            DROP FOREIGN KEY commenting;        

        =>> ALTER TABLE comments                            // [2] [CONSTRAINT] optional => shown in [relation view]
            ADD CONSTRAINT commenting                       // way [2]: add foreign key
            FOREIGN KEY (client_id) REFERENCES clients(id)  // [foreign key] constraint = commenting
            ON UPDATE CASCADE                               // relation view
            ON DELETE CASCADE;                              // (client_id)  =>> parentheses is a must

*/

$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(                                       // [->] = syntax error
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",   // [utf8] uppercase or lowercase
);                                                      // [UTF8] support Arabic in database

try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);     // [try & catch] Excception mode
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};              // [getMessage()] [getLine()] [getCode()]  =>> in [try & catch] by default

?>
