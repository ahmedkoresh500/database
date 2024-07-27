<?php

/*
    * dataType: type [string]:
        [1] TINYTEXT
        [2] TEXT
        [3] MEDIUMTEXT
        [4] LONGTEXT

    * [char] vs [varchar]:
        [1] char        =>> store fixed value       (phone number)
                        =>> faster      =>> use static memory
                        =>> maximum = 255 character

        [2] varchar     =>> store dynamic value     (comment)
                        =>> slower      =>> use dynamic memory
                        =>> maximum = 255 character [v.5.0.3]   = 65.535 [v.5.0.3+]

    * [TEXT] vs [BLOB]:
        [1] TEXT    =>> have charset            =>> have hz         =>> to support Arabic
                    =>> store string

        [2] BLOB    =>> don't have charset      =>> don't have hz   =>> for photos and other files
                    =>> binary large object
                    =>> depend on numeric value of the bytes

    * [Enum] vs [set]:
        [1] Enum        =>> one choise [like radio button]  =>> [mozilla]

        [2] set         =>> more than one choice [like checkbox]  =>> [mozilla, chrome, opera]
*/

$dsn = "mysql:host=localhost;dbName=test";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",   // [utf8] uppercase or lowercase
);                                                      // [UTF8] support Arabic in database

try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
}

for($i=1 ; $i<=10 ; $i++){
    //$stm = $db -> prepare("INSERT INTO osama.identity (id) VALUES ($i)");
    $stm = $db -> prepare( "INSERT INTO osama.identity (id) VALUES ($i)" );
    $stm -> execute();
};

/*
    CREATE TABLE osama.identity(
        id INT (11) NOT NULL UNIQUE
    ) ENGINE=InnoDB DEFAULT CHARSET=UTF8;
*/

/*
    $query = "TRUNCATE osama.identity";        // two are the same  =>> to empty specific table
    $query = "DELETE FROM osama.identity";     // two are the same  =>> to empty specific table
    $db -> exec($query);
*/

/*
    $stm = $db -> prepare("");
    $stm -> execute();

    $query = "";
    $db -> exec($query);
*/

?>
