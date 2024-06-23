<?php

/*
    * [NOT NULL], [UNIQUE]:
    =>> database name  =>> table name  =>> empty        =>> 3 are the same  =>> to empty table
    =>> table  =>> operation  =>> truncate              =>> 3 are the same  =>> to empty table
    =>> TRUNCATE elzero.students;                       =>> 3 are the same  =>> to empty table

    =>> ALTER TABLE students ADD UNIQUE (id);           =>> parentheses is a must   =>> way [1]
    =>> ALTER TABLE students ADD INDEX (id);            =>> parentheses is a must   =>> way [2]
    =>> ALTER TABLE students DROP INDEX id;             =>> no parentheses

    =>> ALTER TABLE students MODIFY id INT (11) NOT NULL UNIQUE;                =>> way [3]
*/

?>
