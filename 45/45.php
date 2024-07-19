<?php

/*
    * information functions:

    * [phpmyadmin]:
        =>> SELECT USER();          =>> userName who's in access to [domain]  =>> 3 are the same
        =>> SELECT SESSION_USER();  =>> userName who's in access to [domain]  =>> 3 are the same
        =>> SELECT SYSTEM_USER();   =>> userName who's in access to [domain]  =>> 3 are the same

        =>> SELECT VERSION();       =>> [current version] of mysql database [MariaDB]

        =>> SELECT CHARSET( USER() );                       =>> CHARSET = character set = الترميز = utf8
        =>> SELECT CHARSET( CONVERT( USER() USING latin1 ) ) converted;      =>> two are the same
        =>> SELECT CHARSET( CONVERT( USER() USING utf8 ) ) AS converted;     =>> two are the same
        =>> SELECT CHARSET( USER() );

        =>> SELECT DATABASE();          =>> [current database] i'm working on

        =>> SELECT CONNECTION_ID();     =>> userName [connection id]  =>> used in specific projects
*/


$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",
);

try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};

?>
