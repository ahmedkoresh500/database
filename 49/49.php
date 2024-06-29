<?php

/*
    * [JOIN] = [INNER JOIN]:

    * [phpmyadmin]:
        =>> SELECT u.id userID,
            name userName,
            langName AS favouriteLang 
            FROM users u, langs l
            WHERE l.id = u.lang_id;                 * if [users] used = syntax error
                                                    * if [langs] used = syntax error

        =>> SELECT u.id user_id,
            name userName,
            langName AS favouriteLang 
            FROM users u INNER JOIN langs l
            WHERE l.id = u.lang_id;                 =>> [WHERE] instead of [ON] = no error

        =>> SELECT u.id user_id,
            name userName,
            langName AS favouriteLang 
            FROM users u INNER JOIN langs l
            WHERE l.id = u.lang_id;                 =>> [WHERE] instead of [ON] = no error
                                                    =>> [WHERE langs.id = u.lang_id] = syntax error

    * space between [INNER JOIN] [LEFT JOIN] [RIGHT JOIN] [FULL JOIN]
    * JOIN for more than 2 tables
*/


$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_aTTR_INIT_COMMAND => "SET NAMES utf8",       // uppercase or lowercase
);                                                          // support Arabic in dataBase

try{
    $db = new PDO($dsn, $userName, $password, $options);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};


?>