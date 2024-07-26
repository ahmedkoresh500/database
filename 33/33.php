<?php

/*
    * [Date + Time] functions: [part 2]:
        [1] DAYNAME(column name or date)
        [2] DAYOFWEEK(column name or date)          =>> [sunday = 1], [saturday = 7]
        [3] DAYOFMONTH(column name or date)
        [4] DAYOFYEAR(column name or date)

    * [phpmyadmin]:
        =>> SELECT date, DAYNAME(date) AS day_name FROM try2;
        =>> SELECT DAYNAME('1998-11-28') AS my_birthday;            =>> [']["] is a must

        =>> SELECT DAYNAME(CURTIME()) AS day_name, DAYOFWEEK(CURRENT_TIME) AS day_of_Week;
        =>> SELECT DAYNAME(CURDATE()) AS day_name, DAYOFMONTH(CURRENT_DATE) AS day_of_month;
        =>> SELECT DAYNAME(NOW()) AS day_name, DAYOFYEAR(CURRENT_TIMESTAMP) AS day_of_year;
*/


$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(                                           // [->] = syntax error
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",       // [utf8] uppercase or lowercase
);                                                          // [UTF8] support Arabic in database


try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};

?>
