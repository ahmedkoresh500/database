<?php

/*
    * comparison functions: [part 3]:
        [1] LIKE()                      =>> parentheses optional
        [2] NOT LIKE()                  =>> parentheses optional
        
        =>> %  =>> [zero or more characters]
        =>> _  =>> [one character]

    * [phpmyadmin]:
        =>> SELECT * FROM clients WHERE userName = 'osama';
        =>> SELECT * FROM clients WHERE userName like ('%sama');    =>> [zero or more characters]
        =>> SELECT * FROM clients WHERE userName LIKE '%ama';       =>> [zero or more characters]
        =>> SELECT * FROM clients WHERE userName LIKE '%ama%';      =>> [zero or more characters]

        =>> SELECT * FROM clients WHERE userName LIKE '%i%';        =>> contains [i]
        =>> SELECT * FROM clients WHERE userName LIKE '%ex%';

        =>> SELECT * FROM clients WHERE userName LIKE 'z%i';        =>> [start=z], [end=i]

        =>> SELECT * FROM clients WHERE userName LIKE '%a%a%';

        =>> SELECT * FROM clients WHERE userName LIKE '_ama';       =>> no result
        =>> SELECT * FROM clients WHERE userName LIKE '_sama';      =>> there is result

        =>> SELECT * FROM clients WHERE userName LIKE 'sam_h';      =>> result = [sameh], [samah]

        =>> SELECT * FROM clients WHERE userName LIKE '%m_h';       =>> result = [sameh], [samah]

        =>> SELECT * FROM clients WHERE userName LIKE '%';          =>> [result = all]
        =>> SELECT * FROM clients WHERE userName LIKE '%%';         =>> [result = all]
        =>> SELECT * FROM clients WHERE userName LIKE '%_%';        =>> [result = all] except empty

        =>> SELECT * FROM clients WHERE userName NOT LIKE '%sama';  =>> 2 are the same [at start] or [at end]
        =>> SELECT * FROM clients WHERE NOT userName LIKE '%sama';  =>> 2 are the same [at start] or [at end]
                                                                    =>> [41] logical operators


    * [%] wild char = wild character
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
