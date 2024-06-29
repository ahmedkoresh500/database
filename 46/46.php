<?php

/*
    * [GROUP BY] & [ORDER BY] & [HAVING]:

    * [phpmyadmin]:
        =>> CREATE TABLE contribution(
            id INT (11) NOT NULL,
            name VARCHAR (255) NOT NULL,
            points INT (11) NOT NULL,
            PRIMARY KEY (id)                    =>> colon here = syntax error
        ) ENGINE=InnoDB DEFAULT CHARSET=UTF8;


    [1] [ORDER BY]
        =>> SELECT * FROM contribution ORDER BY name;           =>> two are the same
        =>> SELECT * FROM contribution ORDER BY name ASC;       =>> two are the same  =>> Ahmed 114 => 115
        =>> SELECT * FROM contribution ORDER BY name DESC;                            =>> Ahmed 114 => 115
                    =>> two rows equal in value => like [name]  =>> FIRST INSERTED FIRST  =>> [ASC]or[DESC]

        =>> SELECT * FROM contribution ORDER BY name, points;
        =>> SELECT * FROM contribution ORDER BY name, points ASC;   =>> Ahmed 114 =>> 115
        =>> SELECT * FROM contribution ORDER BY name, points DESC;  =>> Ahmed 115 =>> 114
                                                                    =>> [name] ASC, [points] DESC
                                                                    =>> order [name] first
        =>> SELECT * FROM contribution ORDER BY name DESC, points DESC;


    [2] [GROUP BY]: 
        * [1][order ASC]  [2][return one value]  =>> from repeated values =>> first [inserted first]
        =>> SELECT name, points FROM contribution GROUP BY name;
        =>> SELECT name, points FROM contribution GROUP BY name DESC;  =>> order [DESC] after [GROUP] effect
        =>> SELECT * FROM contribution GROUP BY name ORDER BY points;

        =>> SELECT name, SUM(POINTS) from contribution;
        =>> SELECT name, SUM(points) FROM contribution GROUP BY name;
        =>> SELECT name, SUM(points) FROM contribution GROUP BY name DESC;
        =>> SELECT name, SUM(points) FROM contribution GROUP BY name ORDER BY points;
        =>> SELECT name, SUM(points) FROM contribution GROUP BY name ORDER BY points DESC;
                                                                    =>> [ORDER] stronger than [GROUP]

    [3] [GROUP BY], [ORDER BY]
        =>> CREATE TABLE orders_1(
            id INT (11) NOT NULL PRIMARY KEY,
            status VARCHAR (255) NOT NULL               =>> colon here = syntax error
        ) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

        =>> SELECT status, COUNT(status) FROM orders_1 GROUP BY status;                  =>> 3 are the same
        =>> SELECT status, COUNT(status) FROM orders_1 GROUP BY status ASC;              =>> 3 are the same
        =>> SELECT status, COUNT(status) FROM orders_1 GROUP BY status ORDER BY status;  =>> 3 are the same

        =>> SELECT status, COUNT(status) counted FROM orders_1 GROUP BY status ORDER BY counted;          =>> two are the same
        =>> SELECT status, COUNT(status) AS counted FROM orders_1 GROUP BY status ORDER BY COUNT(status); =>> two are the same

    [4] [GROUP BY], [HAVING]                    = no error
        [GROUP BY], [WHERE]or[WHERE CLAUSE]     = syntax error
        * [column] must be selected when using HAVING

        =>> SELECT status, COUNT(status) counted FROM orders_1 GROUP BY status HAVING counted>1;
        =>> SELECT status, COUNT(status) AS counted FROM orders_1 GROUP BY status HAVING COUNT(status)>1;

    [5] [GROUP BY], [HAVING], [ORDER BY] = no error
    [5] [GROUP BY], [ORDER BY], [HAVING] = syntax error
        =>> SELECT status, COUNT(status) counted FROM orders_1 GROUP BY status HAVING counted>=1 ORDER BY counted;                 =>> two are the same
        =>> SELECT status, COUNT(status) AS counted FROM orders_1 GROUP BY status HAVING COUNT(status)>=1 ORDER BY COUNT(status);  =>> two are the same

    * [GROUP BY], [HAVING]                  = no error
    * [GROUP BY], [WHERE]or[WHERE CLAUSE]   = syntax error      [WHERE CLAUSE] = حيث الشرطيه
    * [column] must be selected when using HAVING
        =>> SELECT id, status, COUNT(status) counted FROM orders_1 GROUP BY status HAVING id=1;  = no error
        =>> SELECT status, COUNT(status) counted FROM orders_1 GROUP BY status HAVING id=1;      = syntax error
        =>> SELECT status, COUNT(status) counted FROM orders_1 GROUP BY status WHERE id=1;       = syntax error

    * aggregation functions:
        [1] max
        [2] min
        [3] count
        [4] sum
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
