<?php

/*
    * logical operators:
        [1] [AND] = [&&]    =>> [all conditions true]
        [2] [OR] = [||]     =>> [all conditions true] or [one of the conditions]

        [3] [XOR]           =>> [all conditions true] or [one of the conditions]
                            =>> [data in common] not displayed
                            =>> [data in more than one condition] not displayed
        [3] [NOT] = [!]

    * [phpmyadmin]:
    [1] [AND] [&&]
        =>> SELECT * FROM clients WHERE userName LIKE '%sama' AND id >= 4;  =>> two are the same   [AND]
        =>> SELECT * FROM clients WHERE userName LIKE '%sama' && id >= 4;   =>> two are the same   [&&]

    [2] [OR] [||]
        =>> SELECT * FROM clients WHERE userName LIKE '%sama' OR id >= 7;   =>> two are the same [OR]
        =>> SELECT * FROM clients WHERE userName LIKE '%sama' || id > 7;    =>> two are the same [||]

    [3] [XOR]
        =>> SELECT * FROM clients WHERE userName LIKE '%sama' XOR id > 4;                       [XOR]
        =>> SELECT * FROM clients WHERE userName LIKE '%sama' XOR id = 8;                       [XOR]

    [4] [NOT] [!]
        =>> SELECT * FROM clients WHERE userName NOT LIKE '%sama';          =>> comparison functions [39]
        =>> SELECT * FROM clients WHERE NOT userName like '%sama';          =>> comparison functions [39]

        =>> SELECT * FROM clients WHERE userName ! like '%sama';            =>> result = syntax error
        =>> SELECT * FROM clients WHERE ! userName like '%sama';            =>> result = syntax error

        =>> SELECT * FROM clients WHERE userName != 'osama';
        =>> SELECT * FROM clients WHERE userName <> 'osama';
        =>> SELECT * FROM clients WHERE id != 4;
        =>> SELECT * FROM clients WHERE id <> 4;
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
