<?php

/*
    * dataType: [Date & Time] type:
        [1] Date            YYY-MM-DD
        [2] DateTime        YYY-MM-DD HH:MM:SS
        [3] TimeStamp       YYY-MM-DD HH:MM:SS      =>> [current_timestamp()]  =>> [phpmyadmin] when inserting data
        [4] Time            HH:MM:SS
            [default = none], [attribute = empty]  =>> [phpmyadmin] when changing column
        [5] Year            YYY | YY
            =>> 69  = 2069
            =>> 70  = 1970      =>> start of the date range    
*/

$dsn = "mysql:host=localhost;dbName=test";
$user = "root";
$password = "";

$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8";
);

try{
    $db = new PDO($dsn, $user, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};

/*
    $stm = $db -> prepare("");    =>> two are the same
    $stm -> execute();

    $query = "";                =>> two are the same
    $db -> exec($query);
*/


?>