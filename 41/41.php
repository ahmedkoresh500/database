<?php

/*
    * logical operators:
        [1] [&&] = [AND]    =>> all conditions true
        [2] [||] = [OR]     =>> all conditions true   =>> one condition true
        [3] XOR             =>> [one of the two conditions]
        [3] [!] = [NOT]

    * [phpmyadmin]:
        =>> SELECT * FROM clients WHERE userName LIKE '%sama' && id > 100;   =>> two are the same   [&&]
        =>> SELECT * FROM clients WHERE userName LIKE '%sama' AND id < 100;  =>> two are the same   [AND]


        =>> SELECT * FROM clients WHERE userName LIKE '%sama' || id > 100;    =>> two are the same [||]
        =>> SELECT * FROM clients WHERE userName LIKE '%sama' OR id < 100;    =>> two are the same [OR]




        =>> SELECT * FROM clients WHERE userName LIKE '%sama' XOR id > 100;                        [XOR]
        =>> SELECT * FROM clients WHERE userName LIKE '%sama' XOR id < 100;                        [XOR]

        =>> SELECT * FROM clients WHERE userName LIKE '%sama' XOR id >= 10;
        =>> SELECT * FROM clients WHERE userName LIKE '%sama' XOR id <= 10;

        =>> SELECT * FROM clients WHERE userName like '%EX%' XOR id >= 12;
        =>> SELECT * FROM clients WHERE userName like '%EX%' XOR id <= 12;

        * one condition true  =>> no problem
        * two conditions true:
            [1] result from one condition  =>> not repeated in result from the other condition  =>> two results printed
            [2] result from one condition  =>> repeated in result from the other condition  =>> the repeated result never printed


        =>> SELECT * FROM clients WHERE userName NOT LIKE '%sama';          =>> comparsion functions [39]
        =>> SELECT * FROM clients WHERE NOT userName like '%sama';                              [!]
        =>> SELECT * FROM clients WHERE ! userName like '%sama';            =>> syntax error    [!]
*/


$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",       // uppercase or lowercase
);


try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};

?>