<?php

/*
    * string functions: [part 8]:
        [1] LPAD(column name, returned_letters_number, padded string)  =>> like padding
        [2] RPAD(column name, returned_letters_number, padded string)  =>> like padding

    * [phpmyadmin]:
        =>> [first letter] = index 1

    [1] padded string =>> empty
        =>> SELECT text, LPAD(text, 2, '') AS padded_text FROM try;  [2]<stored[3]  =>> [result = 2 letters]
        =>> SELECT text, LPAD(text, 3, '') AS padded_text FROM try;  [3]=stored[3]  =>> [result = 3 letters]
        =>> SELECT text, LPAD(text, 4, '') AS padded_text FROM try;  [4]>stored[3]  =>> [result = NULL]

    [2] padded string =>> not empty
        =>> SELECT text, LPAD(text, 4, '$') AS padded_text FROM try;  [4]<stored[5]  =>> [result = 4 letters]
        =>> SELECT text, LPAD(text, 5, '$') AS padded_text FROM try;  [5]=stored[5]  =>> [result = 5 letters]
        =>> SELECT text, LPAD(text, 6, '$') AS padded_text FROM try;  [6]>stored[5]  =>> [result = 6 letters]

        =>> SELECT text, RPAD(text, 4, '$') AS padded_text FROM try;  [4]<stored[5]  =>> [result = 4 letters]
        =>> SELECT text, RPAD(text, 5, '$') AS padded_text FROM try;  [5]=stored[5]  =>> [result = 5 letters]
        =>> SELECT text, RPAD(text, 6, '$') AS padded_text FROM try;  [6]>stored[5]  =>> [result = 6 letters]

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
$stm = $db -> prepare("");
$stm -> execute();

$query = "";
$db -exec($query));
*/

?>
