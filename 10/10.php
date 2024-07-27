<?php

/*
    * deal with tables: [part 2]:
        =>> [rename table] and [storage engine]:

    * [command prompt]      =>> desktop
    * [shell]       =>> [windows+R]  =>> write [cmd]  =>> press [enter]
    * [xampp] program       =>> press [shell]
    * [phpmyadmin]          =>> press [SQL]

    =>> mysql -u root -p
    =>> enter password:                             =>> [""]or["password1"]  =>> open [MariaDB]

    =>> create table s1 (id int (11) not null primary key) engine=innodb;
    =>> create table s2 (id INT (11) NOT NULL PRIMARY KEY) engine=innodb;

    [1] RENAME TABLE s1 TO new1, s2 TO new2;                            =>> 3 are the same
    [2] ALTER TABLE new1 RENAME s1;                                     =>> 3 are the same
    [2] ALTER TABLE new2 RENAME s2;                                     =>> 3 are the same

    =>> ALTER TABLE s1 ENGINE = InnoDB;
    =>> ALTER TABLE s2 ENGINE = MYISAM;

    [3] [phpmyadmin]:
        =>> press [table]  =>> press [operations]  =>> rename table        =>> 3 are the same
        =>> press [table]  =>> press [operations]  =>> change engine       =>> 3 are the same

    * [engine] [storage engine] = InnoDB
    * [engine] [storage engine] = MYISAM
*/

$dsn = "mysql:host=localhost;dbName=test";
$userName = "root";
$password = "";
$options = array( 
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"    // [utf8]  =>> uppercase or lowercase
);                                                      // [UTF8]  =>> support Arabic in database


$db = new PDO($dsn, $userName, $password, $options);
try{
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};

?>
