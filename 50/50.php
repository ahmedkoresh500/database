<?php

/*
    * [LEFT], [RIGHT] JOIN:
    * [FULL JOIN]:


    * [phpmyadmin]:
    * two are the same:
        =>> SELECT u.id AS user_id,
            name user_name,
            langName favouriteLang 
            FROM users u LEFT JOIN langs l          // two are the same
            ON l.id = u.lang_id;

        =>> SELECT u.id AS user_id,
            name user_name,
            langName favouriteLang 
            FROM users u LEFT OUTER JOIN langs l    // two are the same
            ON l.id = u.lang_id;


    * two are the same:
        =>> SELECT u.id AS user_id,
            name user_name,
            langName favouriteLang 
            FROM users u RIGHT JOIN langs l         // two are the same
            ON l.id = u.lang_id;

        =>> SELECT u.id AS user_id,
            name user_name,
            langName favouriteLang 
            FROM users u RIGHT OUTER JOIN langs l   // two are the same
            ON l.id = u.lang_id;


        =>> SELECT l.id AS lang_id,
            langName favouriteLang,
            COUNT(l.langName) langsCounted              // why [PHP] two times
            FROM users u RIGHT OUTER JOIN langs l       // alias name
            ON l.id = u.lang_id
            GROUP BY l.id;

        =>> SELECT l.id AS lang_id,
            langName favouriteLang,
            COUNT(l.langName) langsCounted
            FROM users u RIGHT OUTER JOIN langs l       
            ON l.id = u.lang_id
            GROUP BY u.lang_id;



    * syntax error  =>> i don't know why
        =>> SELECT *
            FROM users FULL JOIN langs       
            ON langs.id = users.lang_id;

        =>> SELECT *
            FROM users FULL OUTER JOIN langs       
            ON langs.id = users.lang_id;



    * space between [INNER JOIN] [LEFT JOIN] [RIGHT JOIN] [FULL JOIN]
    * JOIN for more than 2 tables
*/


$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",           // uppercase or lowercase
);                                                              // support Arabic in dataBase


try{
    $db = new PDO($dsn, $userName, $password, $options);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};


?>