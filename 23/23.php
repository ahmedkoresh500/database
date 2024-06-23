<?php

/*
    * string functions: [part 2]:
        [1] LENGTH(column name)                     =>> result = number of counted letters
        [2] CHAR_LENGTH(column name)                =>> result = number of counted letters  =>> identical
        [3] CHARACTER_LENGTH(column name)           =>> result = number of counted letters  =>> identical

    * character =  شخصيه, رمز, حرف

    * [phpmyadmin]:
        =>> SELECT LENGTH(comment) FROM comments;
        =>> SELECT comment, LENGTH(comment) FROM comments;
        =>> SELECT comment, LENGTH(comment) as num_of_counted_letters FROM comments;

    =>> INSERT INTO comments (`id`, `comment`, `client_id`) VALUES ('3', '€', '6');

    =>> SELECT comment, LENGTH(comment) AS num_of_counted_letters FROM comments;    [Euro = 3 characters]
    =>> SELECT comment, CHAR_LENGTH(comment) AS counted_letters FROM comments;      [Euro = 1 character]


    * [yen] [euro] =>> multi-byte characters:
    * [alt + 0165] = [¥] Yen sign
    * [alt + 0128] = [€] Euro sign
*/

$dsn = "mysql:host=localhost;dbName=states";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",           // [utf8] uppercase or lowercase
);                                                              // [UTF8] support Arabic in database

try{
    $db = new PDO ($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};

?>