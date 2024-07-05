<?php

/*
    * string functions: [part 3]:
        [1] LCASE (column name)  = LOWER (column name)
        [2] UCASE (column name)  = UPPER (column name)    

    * [phpmyadmin]:
        =>> SELECT comment, LCASE (comment) AS lowered FROM comments;
        =>> SELECT comment, LOWER (comment) AS lowered FROM comments;

        =>> SELECT comment, UCASE (comment) AS uppered_1 FROM comments;
        =>> SELECT comment, UPPER (comment) AS uppered_2 FROM comments;

        =>> SELECT comment,
            lcase (comment) as lowered,
            lower (comment) as lowered,
            ucase (comment) as uppered,
            upper (comment) as uppered,
            LENGTH (comment) as num_of_counted_letters              // [-] = syntax error
            from comments order by length (comment) asc limit 2;    // [limit 1] = 1 row
                                                                    // [limit 2] = 2 rows
*/


$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(                                               // [->] = syntax error
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",           // [utf8] uppercase or lowercase
);                                                              // [UTF8] support Arabic in database

try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};

?>
