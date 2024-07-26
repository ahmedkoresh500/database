<?php

/*
    * [NOT NULL], [UNIQUE]:
        =>> ALTER TABLE students ADD UNIQUE (id);   =>> [parentheses] is a must  =>> way [1] [keyname = id]
        =>> ALTER TABLE students ADD INDEX (id);    =>> [parentheses] is a must  =>> way [2] [keyname = id_1]
        =>> ALTER TABLE students DROP INDEX id;     =>> [no parentheses] is a must

        =>> ALTER TABLE students MODIFY id INT (11) NOT NULL UNIQUE;            =>> way [3]
        =>> ALTER TABLE students change id id INT (11) NOT NULL UNIQUE;         =>> way [4]


    * [4] ways to empty specific table:
        =>> press [database]  =>> press [empty] for specific table          =>> 4 are the same
        =>> press [table]  =>> press [operations]  =>> press [truncate]     =>> 4 are the same
        
        =>> TRUNCATE students;                                              =>> 4 are the same
        =>> DELETE FROM elzero.students;                                    =>> 4 are the same

        =>> DELETE * FROM students;                 =>> result = syntax error   =>> no [*] in delete
*/

?>
