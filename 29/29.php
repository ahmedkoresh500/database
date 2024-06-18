<?php

/*
    * string functions: [part 8]:
        [1] LPAD(column name, returned letters number, padded string)  =>> like padding
        [2] RPAD(column name, returned letters number, padded string)  =>> like padding

    * [phpmyadmin]:
        =>> SELECT text, LPAD(text, 5, '') AS padded_text FROM try;     =>> result = NULL
        =>> SELECT text, LPAD(text, 5, '$') AS padded_text FROM try;    =>> first letter = index 1
        =>> SELECT text, RPAD(text, 5, '$') AS padded_text FROM try;    =>> first letter = index 1
*/

$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",       // uppercase or lowercase
);                                                          // support Arabic in dataBase

try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};

/*
$stm = $db -> prepare("");
$stm -> execute();

$query = "";
$db -exec($query));
*/

?>