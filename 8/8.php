<?php

/*
    * deal with dataBases:

    * [cmder program]:
        =>> mysql -u root
        =>> show databases;                         =>> semicolon is a must
        =>> use elzero;                             =>> to be inside dataBase elzero

        =>> CREATE DATABASE elzero;                 =>> [1] created successfully
        =>> CREATE DATABASE elzero;                 =>> found
        =>> CREATE DATABASE IF NOT EXISTS elzero;

        =>> DROP DATABASE elzero;                   =>> [1] deleted successfully
        =>> DROP DATABASE elzero;                   =>> not found
        =>> DROP DATABASE IF EXISTS elzero;


        =>> SHOW DATABASES LIKE 'elzero';           =>> [`]  =>> syntax error
        =>> SHOW INDEXES FROM students;             =>> ['] is a must

    * path of dataBases created         =>> c:/xampp/mysql/data/
                                        =>> .frm
                                        =>> .ibd    =>> related to storage
                                                    =>> [storage engine = InnoDB]
*/

$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",
);

$db = new PDO ($dsn, $userName, $password, $options);
try{
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};


?>