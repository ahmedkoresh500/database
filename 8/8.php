<?php

/*
    * deal with databases:

    [1] [command prompt]        =>> desktop
    [2] [shell]                 =>> [winows+R]  =>> write [cmd]  =>> press [enter]
    [3] [xampp] program         =>> press [shell]
    [4] [phpmyadmin]            =>> press [SQL]
        =>> mysql -u root -p
        =>> enter password                          =>> [""]or["password1"]  =>> open [MariaDB]

        =>> show databases;                         =>> semicolon is a must
        =>> use osama;                              =>> semicolon is a must

        =>> SHOW DATABASES LIKE 'osama';            =>> ['] is a must       =>> [`] = syntax error
        =>> SHOW DATABASES LIKE "osama";            =>> ["] is a must       =>> [`] = syntax error

        =>> SHOW INDEXES FROM identity;             =>> [`] is optional     =>> [']or["] = syntax error
        =>> SHOW INDEXES FROM `identity`;           =>> [`] is optional     =>> [']or["] = syntax error
        =>> SHOW INDEXES FROM osama.identity;
        =>> SHOW INDEXES FROM `osama`.`identity`;

        =>> CREATE DATABASE osama;                  =>> [1] created successfully
        =>> CREATE DATABASE osama;                  =>> [2] [exists]
        =>> CREATE DATABASE IF NOT EXISTS osama;    =>> [3] no reply

        =>> DROP DATABASE osama;                    =>> [1] deleted successfully
        =>> DROP DATABASE osama;                    =>> [2] [not exists]
        =>> DROP DATABASE IF EXISTS osama;          =>> [3] no reply

    * path of databases created     =>> c:/xampp/mysql/data/
                                    =>> .frm
                                    =>> .ibd    =>> related to storage
                                            =>> [storage engine = InnoDB]
*/

$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",       // [utf8]  =>> uppercase or lowercase
);                                                          // [utf8]  =>> support Arabic in database

$db = new PDO ($dsn, $userName, $password, $options);
try{
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};

?>
