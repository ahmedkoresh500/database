<?php

/*
    * [Date + Time] functions: [part 5]:
        [1] LAST_DAY(column name)                   =>> in the month
        [2] DATE_ADD(column name, [INTERVAL expression] timeunit)
        [3] DATE_SUB(column name, [INTERVAL expression] timeunit)

    * [phpmyadmin]:
        =>> SELECT date, LAST_DAY(date) FROM try2;
        =>> SELECT date, LAST_DAY(date) AS last_day, DAYNAME(LAST_DAY(date)) AS lsat_day_name FROM try2;

        =>> SELECT date, DATE_ADD(date, INTERVAL 10 DAY) AS date_Added_10DAY FROM try2;
        =>> SELECT date, DATE_SUB(date, INTERVAL 13 DAY) AS date_deleted_13DAY FROM try2;
        =>> SELECT date, DATE_SUB(date, INTERVAL 3 MONTH) AS date_deleted_13MONTH FROM try2;

    * timeunits: [DAY], [WEEK], [MONTH], [YEAR]
*/

$dsn = "mysql:host=localhost;dbName=elzero";
$userName = "root";
$password = "";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",       // uppercase or lowercase
);                                                          // support Arabic in dataBase



try{
    $db = new PDO($dsn, $userName, $password, $options);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed" . $e -> getMessage();
};

/*
$stm = $db -> prepare("");
$stm -> execute();


$query = "";
$db -> exec($query);

*/

?>