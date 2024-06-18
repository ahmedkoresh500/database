<?php

/*
    * connect with PDO:

    * [phpmyadmin]:
    * [cmder program]:
        =>> DROP TABLE products.items;      =>> two are the same
        =>> DROP TABLE items;               =>> two are the same
*/

$host = 'localhost';
$userName = 'root';
$password = '';
$dbName = 'products';

$conn = mysqli_connect($host, $userName, $password, $dbName);
if($conn){
    echo '<p> connection true </p>';
}else{
    echo "<p> connection false </p>";
};

/*
    * [dsn] = data source name
    * [mysql]  =>> prefix related to database
*/
$dsn = 'mysql:host=localhost;dbName=products';  // accept [port], [dataBase name], [unix socket], [character set]
$userName = 'root';
$password = '';
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',   // uppercase or lowercase
);                                                      // [support arabic in dataBase]

try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // [try], [catch]  =>> exception mode
    //echo "you are connected";

    // way [1]:
    $stm = $db -> prepare("INSERT INTO products.items VALUES (NULL, 'bicycle')");
    $stm -> execute();

    // way [2]:
    $query = "INSERT INTO products.items (id, `name`) VALUES (NULL, 'beachbugy')";  // two are the same
    // $query = "INSERT INTO items VALUES ('beachbugy')";                           // two are the same
    $db -> exec($query);

}catch(PDOException $e){
    echo 'Failed ' . $e -> getMessage(); // [getMessage()], [getLine()], [getCode()] in [try & catch] by default
};


?>