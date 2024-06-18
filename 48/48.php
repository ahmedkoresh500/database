<?php

/*
    * [Alias names]:

    * [phpmyadmin]:
        =>> SELECT * FROM users, langs
            WHERE langs.id = users.lang_id;

        =>> SELECT id FROM users, langs             // [id] = syntax error = ambiguous
            WHERE langs.id = users.lang_id;

        =>> SELECT users.id FROM users, langs       // [users.id] = no error = not ambiguous
            WHERE langs.id = users.lang_id;

        =>> SELECT users.id, name, langName
            FROM users, langs 
            WHERE langs.id = users.lang_id;

        =>> SELECT u.id, name, langName 
            FROM users u, langs l           // Alias name
            WHERE l.id = u.lang_id;

        =>> SELECT u.id AS user_id,
            u.name userName,
            l.langName favouriteLangs
            FROM users u, langs l           // Alias name
            WHERE l.id = u.lang_id;
*/

$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf",            // uppercase or lowercase
);                                                              // support Arabic in dataBase

try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);     // [try & catch] Exception mode
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};

?>