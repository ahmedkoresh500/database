<?php

/*
    * connect with PDO:

    [1] [command prompt]    =>> desktop                                  =>> windows, linux, mac
    [2] [shell]     =>> [windows+R]  =>> write [cmd]  =>> press [enter]  =>> windows, linux, mac
    [3] [xampp] program     =>> press [shell]
    [4] [phpmyadmin]  =>> press [SQL]

    =>> ALTER TABLE items CHANGE city name VARCHAR (255) NOT NULL;      =>> change [column name]
    =>> ALTER TABLE items CHANGE name city VARCHAR (255) NOT NULL;      =>> change [column name]

    =>> DROP TABLE items;               =>> two are the same
    =>> DROP TABLE products.items;      =>> two are the same
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
$dsn = 'mysql:host=localhost;dbName=products';  // accept [port], [database name], [unix socket], [character set]
$userName = 'root';
$password = '';
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',   // [utf8]  =>> uppercase or lowercase
);                                                      // [UTF8]  =>> support Arabic in database

try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // in [try & catch] exception mode
    //echo "you are connected";

    // way [1]:
    $stm = $db -> prepare("INSERT INTO products.items VALUES (NULL, 'Cairo', 'Egypt')");
    $stm -> execute();

    // way [2]:
    $query = "INSERT INTO products.items VALUES (NULL, 'Khortom', 'Sudan')";                            // 2 are the same
    // $query = "INSERT INTO products.items (id, `city`, `country`) VALUES (NULL, 'khortom', 'sudan')"; // 2 are the same
    $db -> exec($query);

}catch(PDOException $e){
    echo 'Failed ' . $e -> getMessage();
};                          // [getMessage()], [getLine()], [getCode()] in [try & catch] by default

?>
