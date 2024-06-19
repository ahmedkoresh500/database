<?php

/*
    * dataType: [string type]:
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
        [1] TEXT    =>> have charset            =>> have hz         =>> to support arabic
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
);                                                      // [utf8] support arabic in database

try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
}

for($i=1 ; $i<=100 ; $i++){
    //$stm = $db -> prepare("INSERT INTO test.number (id) VALUES ($i)");
    $stm = $db -> prepare( "INSERT INTO test.number (id) VALUES ($i)" );
    $stm -> execute();
};

/*
$query = "TRUNCATE test.string";        // two are the same
$query = "DELETE FROM test.number";     // two are the same
$db -> exec($query);
*/

/*
    $stm = $db -> prepare("");
    $stm -> execute();

    $query = "";
    $db -> exec($query);
*/

?>