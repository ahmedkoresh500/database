<?php

/*
    * string functions: [part 7]:
        [1] TRIM( methods[LEADING | TRAILING | BOTH]  [string_removed]  FROM [column name])
        [2] LTRIM(column name)                  =>> trim space only
        [3] RTRIM(column name)                  =>> trim space only

        * [methods]         =>> optional        =>> by default [BOTH]
        * [string_removed]  =>> optional        =>> by default [remove space]

    * [phpmyadmin]:
        =>> SELECT trim_col, TRIM(trim_col) AS trimmed FROM try;

        =>> SELECT trim_col, TRIM(LEADING FROM trim_col) AS trimmed FROM try;   =>> [space] after [trim] = [syntax error]
        =>> SELECT trim_col, TRIM(TRAILING FROM trim_col) AS trimmed FROM try;  =>> [space] after [trim] = [syntax error]
        =>> SELECT trim_col, TRIM(BOTH FROM trim_col) AS trimmed FROM try;      =>> [space] after [trim] = [syntax error]
                                                                                =>> [space] after [MID] = [syntax error]

        =>> SELECT trim_col,
        TRIM(trim_col) AS trimmed,
        CHAR_LENGTH(trim_col) AS length_before_trim,
        CHAR_LENGTH(TRIM(trim_col)) AS length_after_trim
        FROM try;

        =>> SELECT trim_col, TRIM(BOTH '@' FROM trim_col) AS trimmed FROM try;
        =>> SELECT trim_col, TRIM(LEADING '@' FROM trim_col) AS trimmed FROM try;
        =>> SELECT trim_col, TRIM(TRAILING '@' FROM trim_col) AS trimmed FROM try;
        =>> SELECT trim_col, TRIM('@' FROM trim_col) AS trimmed FROM try;


    * [LTRIM] & [RTRIM]:
        =>> SELECT trim_col, LTRIM(trim_col) AS trimmed FROM try;       =>> trim space only
        =>> SELECT trim_col, RTRIM(trim_col) AS trimmed FROM try;       =>> trim space only

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

