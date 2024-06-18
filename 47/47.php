<?php

/*
    * [JOIN simulation]:

    * [phpmyadmin]:
        =>> CREATE TABLE users(
            id INT (11) NOT NULL UNIQUE AUTO_INCREMENT,
            name VARCHAR (255) NOT NULL,
            lang_id INT (11) NOT NULL,
            FOREIGN KEY (lang_id) REFERENCES langs(id)
            ON UPDATE CASCADE
            ON DELETE CASCADE
        ) ENGINE = InnoDB DEFAULT CHARSET = utf8;            // [utf8]=[UTF8], [latin1] =>> [utf-8]=[UTF-8] = syntax error

        =>> ALTER TABLE users ADD PRIMARY KEY (id);         // ERROR: incorrect index name =>> id
        =>> ALTER TABLE users DROP id;
        =>> ALTER TABLE users ADD id INT (11) NOT NULL UNIQUE AUTO_INCREMENT PRIMARY KEY FIRST;   // = no error


    * id INT NOT NULL UNIQUE AUTO_INCREMENT,      // [AUTO_INCREMENT] without [UNIQUE] = syntax error =>> need one key
    * id INT (11) NOT NULL UNIQUE AUTO_INCREMENT, // [AUTO_INCREMENT] without [UNIQUE] = syntax error =>> need one key
    * id INT (11) AUTO_INCREMENT NOT NULL UNIQUE, // [AUTO_INCREMENT] without [UNIQUE] = syntax error =>> need one key
    * id INT (11) UNIQUE AUTO_INCREMENT NOT NULL, // [AUTO_INCREMENT] without [UNIQUE] = syntax error =>> need one key

        =>> SELECT * FROM users JOIN langs;     =>> two are the same  =>> show each element with all elements in the other table
        =>> SELECT * FROM users, langs;         =>> two are the same  =>> show each element with all elements in the other table

        =>> SELECT * FROM users JOIN langs                                  => two are the same
            ON langs.id = users.lang_id;
        =>> SELECT * FROM users, langs WHERE langs.id = users.lang_id;      =>> two are the same
*/


$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",       // uppercase or lowercase
);                                                          // support Arabic in dataBase

try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);     // [try & catch] =>> Exception mode
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};



?>