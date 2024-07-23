<?php

/*
    * [JOIN simulation]:

    * [phpmyadmin]:
        =>> CREATE TABLE users_1(
            id INT (11) NOT NULL UNIQUE AUTO_INCREMENT,
            name VARCHAR (255) NOT NULL,
            lang_id INT (11) NOT NULL,
            FOREIGN KEY (lang_id) REFERENCES langs(id)      =>> by default [CONSTRAINT = users_1_ibfk_1] 
            ON UPDATE CASCADE
            ON DELETE CASCADE
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8;           =>> [utf8]or[UTF8], [latin1] 
                                                        =>> [utf-8]or[UTF-8] = syntax error
                                                        =>> [<meta charset="utf-8">]

        =>> ALTER TABLE users_1 ADD PRIMARY KEY (id);   = [syntax error] = incorrect index name 'id'
        =>> ALTER TABLE users_1 CHANGE id id int (11) NOT NULL UNIQUE PRIMARY KEY;
                                                        = [syntax error] = incorrect index name 'id'


    * [AUTO_INCREMENT] must be [added with]or[after] [UNIQUE]or[PRIMARY KEY] attribute  =>> has [key name]
    * can't drop [UNIQUE]or[PRIMARY KEY] attribute and [AUTO_INCREMENT] is found
    * drop [AUTO_INCREMENT] first then drop [UNIQUE]or[PRIMARY KEY] attribute
    [1]
    =>> ALTER TABLE users_1 modify id INT (11) NOT NULL;    =>> drop [AUTO_INCREMENT]  =>> 2 are the same
    =>> ALTER TABLE users_1 CHANGE id id INT (11) NOT NULL; =>> drop [AUTO_INCREMENT]  =>> 2 are the same
    
    [2]
    =>> ALTER TABLE users_1 DROP id;                        =>> drop [AUTO_INCREMENT]
    =>> ALTER TABLE users_1 ADD id INT (11) NOT NULL UNIQUE AUTO_INCREMENT PRIMARY KEY FIRST; =>> no error


    * display each element [in table 1]  =>> with all elements [in table 2]
        =>> SELECT * FROM users, langs;         =>> two are the same
        =>> SELECT * FROM users JOIN langs;     =>> two are the same 
                                            =>> important note: this [JOIN] = [FULL JOIN] =>> lesson [50]

        =>> SELECT * FROM users, langs 
            WHERE langs.id = users.lang_id;             =>> two are the same
        =>> SELECT * FROM users JOIN langs              =>> two are the same
            ON langs.id = users.lang_id;    =>> important note: this [JOIN] = [INNER JOIN] =>> lesson [50]
*/


$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",
);

try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // [try & catch] =>> Exception mode
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};

?>
