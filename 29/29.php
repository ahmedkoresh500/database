<?php

/*
    * string functions: [part 8]:
        [1] LPAD(column name, returned_letters_number, padded string)  =>> like padding
        [2] RPAD(column name, returned_letters_number, padded string)  =>> like padding

    * [phpmyadmin]:
        =>> [first letter] = index 1

    [1] padded string =>> empty
        =>> SELECT text, LPAD(text, 4, '') AS padded_text FROM try;  stored[6]>[4]  =>> [result = 2 letters]
        =>> SELECT text, LPAD(text, 4, '') AS padded_text FROM try;  stored[4]=[4]  =>> [result = 3 letters]
        =>> SELECT text, LPAD(text, 4, '') AS padded_text FROM try;  stored[2]<[4]  =>> [result = NULL]

    [2] padded string =>> not empty
        =>> SELECT text, LPAD(text, 4, '$') AS padded_text FROM try;  stored[6]>[4]  =>> [result = 4 letters]
        =>> SELECT text, LPAD(text, 4, '$') AS padded_text FROM try;  stored[4]=[4]  =>> [result = 5 letters]
        =>> SELECT text, LPAD(text, 4, '$') AS padded_text FROM try;  stored[3]<[4]  =>> [result = 6 letters]

        =>> SELECT text, RPAD(text, 4, '$') AS padded_text FROM try;  stored[6]>[4]  =>> [result = 4 letters]
        =>> SELECT text, RPAD(text, 4, '$') AS padded_text FROM try;  stored[4]<[4]  =>> [result = 5 letters]
        =>> SELECT text, RPAD(text, 4, '$') AS padded_text FROM try;  stored[3]=[4]  =>> [result = 6 letters]

*/

$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",       // [utf8] uppercase or lowercase
);                                                          // [UTF8] support Arabic in database

try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};

/*
$stm = $db -> prepare("query");
$stm -> execute();

$query = "";
$db -exec($query);
*/

?>
