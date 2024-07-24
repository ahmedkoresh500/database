<?php

/*
    * [Alias name]:

    * [phpmyadmin]:
        [1] SELECT * FROM users, langs
            WHERE langs.id = users.lang_id;     =>> [written first] [shown first]  =>> [users] -> [langs]

        [2] SELECT id FROM users, langs         = syntax error  =>> [id] ambiguous
            WHERE langs.id = users.lang_id;

        [3] SELECT users.id FROM users, langs   = true syntax   =>> [users.id] not ambiguous
            WHERE langs.id = users.lang_id;

        [4] SELECT users.id, name, langName
            FROM users, langs 
            WHERE langs.id = users.lang_id;

        * [Alias name]:
        [5] SELECT u.id, name, langName
            FROM users u, langs l           * [users AS u, langs AS l]    =>> two are the same
            WHERE l.id = u.lang_id;         * if [users] used = syntax error
                                            * if [langs] used = syntax error

        [6] SELECT u.id user_id, u.name AS userName, l.langName favouriteLangs 
            FROM users u JOIN langs l       * [users AS u JOIN langs AS l]    =>> two are the same
            ON l.id = u.lang_id             * if [users] used = syntax error
            WHERE u.id = 1;                 =>> [WHERE user_id = 1] = syntax error
*/

$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
);

try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // [try & catch] Exception mode
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};

?>
