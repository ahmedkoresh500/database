<?php

/*
    * [PRIMARY KEY] constraint:

    * UNIQUE        =>> [1] accept NULL value           =>> [4] more than one column in table
    * primary key   =>> [2] doesn't accept NULL value   =>> [3] one column in table

    * [primary key] has [index key] [keyname]  =>>  called [PRIMARY]

    * [phpmyadmin]
        [1] CREATE TABLE classes(                       =>> way [1]
            cid INT (11) NOT NULL UNIQUE PRIMARY KEY,   =>> must decide length
            name VARCHAR (255) UNIQUE,
            ) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

        [1] CREATE TABLE teachers(
            tid INT (11) NOT NULL,
            name VARCHAR (255),
            PRIMARY KEY (tid)                           =>> way [2]
        )ENGINE=InnoDB DEFAULT CHARSET=UTF8;

        [2] ALTER TABLE students ADD PRIMARY KEY (id);  =>> way [3]

        [3] ALTER TABLE students CHANGE id id INT (11) NOT NULL UNIQUE PRIMARY KEY;     =>> way [4]
        [4] ALTER TABLE students MODIFY id INT(11) NOT NULL UNIQUE PRIMARY KEY;         =>> way [5]


        =>> ALTER TABLE students DROP PRIMARY KEY;      =>> not specified =>> cauz i have [only one]
        =>> ALTER TABLE students DROP PRIMARY KEY, ADD PRIMARY KEY(id);     =>> way [6]

    * [elzero] database:
        =>> SHOW DATABASES LIKE 'elzero';   =>> ['] is a must  =>> [`] = syntax error
                                            =>> ["] is a must

    * [students] table:
        =>> SHOW INDEXES FROM students;         =>> [`] optional    =>> ['] = syntax error
        =>> SHOW INDEXES FROM `students`;       =>> [`] optional    =>> ["] = syntax error
*/


$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",
);

$db = new PDO($dsn, $userName, $password, $options);

try{
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};

?>
