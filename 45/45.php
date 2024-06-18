<?php

/*
    * information functions:

    * [phpmyadmin]:
        =>> SELECT USER();          =>> userName who connected with dataBase, [domain] = [host name]
        =>> SELECT SESSION_USER();  =>> userName who connected with dataBase, [domain] = [host name]
        =>> SELECT SYSTEM_USER();   =>> userName who connected with dataBase, [domain] = [host name]

        =>> SELECT VERSION();       =>> dataBase version = mysql version


        =>> SELECT CHARSET( USER() );   =>> character set = الترميز = utf8
        =>> SELECT CHARSET( CONVERT( USER() USING latin1 ) ) AS converted;      =>> two are the same
        =>> SELECT CHARSET( CONVERT( USER() USING latin1 ) ) converted;         =>> two are the same
        =>> SELECT CHARSET( USER() );

        =>> SELECT DATABASE();          =>> dataBase name i'm working on

        =>> SELECT CONNECTION_ID();     =>> userName connection id       =>> elzero used in a project

*/


$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",        // uppercase or lowercase
);

try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};


?>