<?php

/*
    * string functions: [part 3]:
        [1] LCASE (column name)  = LOWER (column name)
        [2] UCASE (column name)  = UPPER (column name)    

    * [phpmyadmin]:
        =>> SELECT LCASE (comment) AS lowered_1 FROM comments;
        =>> SELECT LOWER (comment) AS lowered_2 FROM comments;

        =>> SELECT UCASE (comment) AS uppered_1 FROM comments;
        =>> SELECT UPPER (comment) AS uppered_2 FROM comments;

        =>> SELECT comment,
            lcase (comment) as lowered_1,
            lower (comment) as lowered_2,
            ucase (comment) as uppered_1,
            upper (comment) as uppered_2,
            LENGTH (comment) as num_of_counted_letters              // [-] = syntax error
            from comments order by length (comment) asc limit 2;    // [limit 1] = 1 row
                                                                    // [limit 2] = 2 rows
*/


$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",           // [utf8] uppercase or lowercase
);                                                              // [UTF8] support Arabic in database

try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};

?>