<?php

/*
    * deal with tables: [part 2]:
        =>> [rename table] and [storage engine]:

    * [phpmyadmin]:
    * [cmder program]:
        =>> create two tables [s1], [s2] with one column [id]

        =>> RENAME TABLE s1 TO new1, s2 TO new2;        =>> three are the same
        =>> ALTER TABLE s1 RENAME new1;                 =>> three are the same
        =>> ALTER TABLE new1 ENGINE = MYISAM;
        =>> ALTER TABLE new1 ENGINE = InnoDB;

    * [phpmyadmin]:
        =>> [s1]  =>> operation  =>> rename table       =>> three are the same
        =>> [s1]  =>> operation  =>> change engine

    * storage engine = InnoDB;
*/

$dsn = "mysql:host=localhost;dbName=test";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",
);

$db = new PDO($dsn, $userName, $password, $options);

try{
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};

?>