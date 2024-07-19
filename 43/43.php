<?php

/*
    * control flow function: [case]:
        [1] CASE                                        =>> [1] no column
                WHEN column = value THEN result
                WHEN column > value THEN result
                WHEN column < value THEN result
                ELSE result                             =>> [***] [ELSE] optional
            END

        [2] CASE column                                 =>> [2] there is column
                WHEN value THEN result
                WHEN value THEN result
                ELSE result                             =>> [***] [ELSE] optional
            END AS ...


    * [EXAMPLES]:
        [1] SELECT id, number,
            CASE
                WHEN number=9 THEN 'not bad'
                WHEN number>9 THEN 'good'
                WHEN number<9 THEN 'bad'
            END AS cased
            FROM try2;

        [2] SELECT id, number,
            CASE number
                WHEN 7 THEN 'not bad'
                WHEN 8 THEN 'good'
                WHEN 13 THEN 'perfect'
                ELSE 'bad'
            END AS cased
            FROM try2;
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
