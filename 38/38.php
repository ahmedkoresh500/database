<?php

/*
    * comparison functions: [part 2]:
        [1] IN (values)
        [2] NOT IN (values)

    * [phpmyadmin]:
        =>> SELECT * FROM clients WHERE id IN (6, 7, 8);
        =>> SELECT * FROM clients WHERE id NOT IN (6, 7, 8);

        =>> SELECT * FROM try2 WHERE date IN ('2023-01-16', '2023-02-14');  =>> must decide time if found
        =>> SELECT * FROM try2 WHERE date NOT IN ("2023-01-31 23:31:38");   =>> [']["] is a must
                                                                            =>> [`][no parentheses] = syntax error
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
