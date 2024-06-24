<?php

/*
    * string functions: [part 7]:
        [1] TRIM( methods[LEADING--TRAILING--BOTH] [string_to_be_trimmed] FROM [column name])
        [2] LTRIM(column name)                  =>> trim space only  =>> from left
        [3] RTRIM(column name)                  =>> trim space only  =>> from right

        * [methods]                 =>> optional        =>> by default [BOTH]
        * [string_to_be_trimmed]    =>> optional        =>> by default [trim space from left and right]

    * [phpmyadmin]:
        * [space] after [trim] [ltrim] [rtrim] = syntax error
        * [space] after [MID] = [syntax error]
    
        [1] SELECT ordinal_column,
            LENGTH(ordinal_column) AS length_before_trim,
            LENGTH( TRIM(ordinal_column) ) AS length_After_trim     =>> two are the same
            FROM try;                                               =>> [1] trim space [from left] [and right]

        [2] SELECT ordinal_column,
            LENGTH(ordinal_column) AS length_before_trim,           =>> two are the same
            LENGTH( TRIM(BOTH FROM ordinal_column) ) AS length_After_trim
            FROM try;                                               =>> [2] trim space [from left] [and right]

        [3] SELECT ordinal_column,
            LENGTH(ordinal_column) AS length_before_trim,
            LENGTH( TRIM(LEADING FROM ordinal_column) ) AS length_After_trim
            FROM try;                                               =>> [3] trim space only  =>> from left

        [4] SELECT ordinal_column,
            LENGTH(ordinal_column) AS length_before_trim,
            LENGTH( TRIM(TRAILING FROM ordinal_column) ) AS length_After_trim
            FROM try;                                               =>> [4] trim space only  =>> from right


        =>> SELECT ordinal_column, TRIM(LEADING '@' FROM ordinal_column) AS trimmed FROM try;
        =>> SELECT ordinal_column, TRIM(TRAILING '@' FROM ordinal_column) AS trimmed FROM try;
        =>> SELECT ordinal_column, TRIM(BOTH '@' FROM ordinal_column) AS trimmed FROM try;
        =>> SELECT ordinal_column, TRIM('@' FROM ordinal_column) AS trimmed FROM try;


    * [LTRIM] & [RTRIM]:
        =>> SELECT ordinal_column,
            length (ordinal_column) AS length_before_trim,
            length ( LTRIM(ordinal_column) ) AS length_after_trim   = [TRIM(LEADING FROM ordinal_column)]
            FROM try;                                   =>> trim space only =>> from left

        =>> SELECT ordinal_column,
            length (ordinal_column) AS length_before_trim,
            length ( RTRIM(ordinal_column) ) AS length_after_trim   = [TRIM(TRAILING FROM ordinal_column)]
            FROM try;                                   =>> trim space only =>> from right

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

?>
