<?php

/*
    * [NOT NULL], [UNIQUE]:
    =>> dataBase name  =>> table name  =>> empty        =>> three are the same  =>> to empty table
    =>> table  =>> operation  =>> truncate              =>> three are the same  =>> to empty table
    =>> TRUNCATE elzero.students;                       =>> three are the same  =>> to empty table

    =>> ALTER TABLE students ADD UNIQUE (id);       =>> parentheses is a must   =>> way [1]
    =>> ALTER TABLE students DROP INDEX id;         =>> no parentheses

    =>> ALTER TABLE students MODIFY id INT (11) NOT NULL UNIQUE;                =>> way [2]
*/

?>

