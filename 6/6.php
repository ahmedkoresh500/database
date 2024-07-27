<?php

/*
    * dataType: [Date & Time]:
        [1] Date            YYY-MM-DD
        [2] Time            HH:MM:SS
        [3] DateTime        YYY-MM-DD HH:MM:SS
        [4] TimeStamp       YYY-MM-DD HH:MM:SS      =>> [now()] [current_timestamp()] [current_timestamp]
                                                    =>> when insert data  =>> lesson [32]
        [5] Year            YYY | YY
            =>> 69  = 2069
            =>> 70  = 1970      =>> start of the date range
*/

$dsn = "mysql:host=localhost;dbName=test";
$userName = "root";
$password = "";

$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8";       // [utf8]  =>> uppercase or lowercase
);                                                          // [UTF8]  =>> support Arabic in database

try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};

/*
    $stm = $db -> prepare("");      =>> two are the same
    $stm -> execute();

    $query = "";                    =>> two are the same
    $db -> exec($query);
*/

?>
