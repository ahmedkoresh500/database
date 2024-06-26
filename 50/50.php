<?php

/*
    * [LEFT JOIN] [RIGHT JOIN] [FULL JOIN]:

    * [phpmyadmin]:

    * two are the same:
    * [LEFT JOIN] = [LEFT OUTER JOIN]
        [1] SELECT u.id user_id,
            name userName,
            l.id AS lang_id,
            langName AS favouriteLang 
            FROM users u LEFT JOIN langs l
            ON l.id = u.lang_id                         =>> [WHERE] instead of [ON] = syntax error
            WHERE u.id = 1;

        [2] SELECT u.id user_id,
            name userName,
            l.id AS lang_id,
            langName AS favouriteLang 
            FROM users u LEFT OUTER JOIN langs l
            ON l.id = u.lang_id                         =>> [WHERE] instead of [ON] = syntax error
            WHERE u.id = 1;


    * two are the same:
    * [RIGHT JOIN] = [RIGHT OUTER JOIN]
        [3] SELECT u.id user_id,
            name userName,
            l.id AS lang_id,
            langName AS favourite_Lang 
            FROM users u RIGHT JOIN langs l
            ON l.id = u.lang_id;

        [4] SELECT u.id user_id,
            name userName,
            l.id AS lang_id,
            langName AS favourite_Lang 
            FROM users u RIGHT OUTER JOIN langs l
            ON l.id = u.lang_id;


    * [GROUP BY]:
        [5] SELECT u.id,
            name,
            langName AS favourite_Lang,
            COUNT(l.langName) repeated_langs              
            FROM users u RIGHT OUTER JOIN langs l   =>> [COUNT(l.id) repeated_langs]  =>> 2 are the same
            ON l.id = u.lang_id                      =>> [PHP] = 2
            GROUP BY l.id;

        [6] SELECT u.id,
            name,
            langName AS favouriteLang,
            COUNT(l.langName) repeated_langs        =>> [COUNT(l.id) repeated_langs]  =>> 2 are the same
            FROM users u RIGHT OUTER JOIN langs l       
            ON l.id = u.lang_id
            GROUP BY l.id;


    * [= syntax error]  =>> no obvious reason
        [1] SELECT *
            FROM users FULL JOIN langs       
            ON langs.id = users.lang_id;

        [2] SELECT *
            FROM users FULL OUTER JOIN langs       
            ON users.lang_id = langs.id;

    * space between [INNER JOIN] [LEFT JOIN] [RIGHT JOIN] [FULL JOIN]
    * [JOIN] for more than [2 tables]
*/


$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",
);

try{
    $db = new PDO($dsn, $userName, $password, $options);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};

?>
