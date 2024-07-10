<?php

/*
    * Numeric functions: [part 2]:
        [1] MOD (column name, modulus number)
        [2] TRUNCATE (column name, decimal)          =>> [decimal] mandatory  =>> [decimal] is a must
        [3] POW (column name, power) = POWER(column name, power)

    * [phpmyadmin]:
    [1] MOD();
        =>> SELECT MOD(7, 2);                                           // result = 1
        =>> SELECT MOD(21, 6);                                          // result = 3
        =>> SELECT number, MOD(number, 1) AS modulated FROM try1;

    [2] TRUNCATE
        =>> SELECT number, TRUNCATE(number, 0) AS truncated FROM try1;

        =>> SELECT number, ROUND(number, 1) AS rounded, TRUNCATE(number, 1) AS truncated FROM try1;
        =>> 1.456               1.5                             1.4
        =>> SELECT number, ROUND(number, 2) AS rounded, TRUNCATE(number, 2) AS truncated FROM try1;
        =>> 1.455               1.46                            1.45
        
        =>> INSERT INTO try1 (id, number) VALUES (9, TRUNCATE(123.56998, 2));

    [3] POW();
        =>> SELECT POW (2, 3) AS powered;
        =>> SELECT id, POWER (id, 2) AS powered_id FROM try1;

    * [phpmyadmin]:
    * [4] ways  =>> to empty specific table:
        =>> press [database] =>> press [empty] for specific table       =>> 4 are the same
        =>> press [table] =>> press [operations]  => press [truncate]   =>> 4 are the same
        =>> TRUNCATE test;                                              =>> 4 are the same
        =>> DELETE FROM test;                                           =>> 4 are the same

        =>> DELETE * FROM test;                 =>> no [*] in delete    = syntax error  
*/

$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(                                               // [->] = syntax error
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",           // [utf8] uppercase or lowercase
);                                                              // [UTF8] support Arabic in database

try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};

/*
    // [way 1]:
        $stm = $db ->prepare('INSERT INTO elzero.`try1` VALUES (10, 5)');
        $stm ->execute();

    // [way 2]:
        $query = "INSERT INTO elzero.try1 VALUES(11, 5)";
        $db->exec($query);
*/

?>
