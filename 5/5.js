/*
    * dataType: [integer type]:

    * TINYINT       =>> length [4] [-128 : 127]
    * SMALLINT      =>> length [6] [-32,768 : 32,767]
    * MEDIUMINT     =>> length [9] [-8,388,608 : 8,388,607]
    * INT           =>> length [11] [-2,147,483,648 : 2,147,483,647]
    * BIGINT        =>> length [20] [-9,223,372,036,854,775,808 : 9,223,372,036,854,775,807]

    * FLOAT
    * DECIMAL
    * DOUBLE
    * REAL          =>> alias for [DOUBLE]

    * BIT           =>> must decide length
    * BOOLEAN       =>> [true, false] [1, 0]
    * SERIAL        =>> alias for [BIGINT]

    * [phpmyadmin]:
        * 4 ways to empty specific [table]:
        [1] press [database]  =>> press [empty] for specific table  =>> 4 are the same
        [2] press [table] =>> press [operations] =>> press [empty]  =>> 4 are the same

        [3] TRUNCATE `items`;                                       =>> 4 are the same
        [3] TRUNCATE `products`.`items`;                            =>> 4 are the same
        [4] DELETE FROM items;                                      =>> 4 are the same

        * to change [column] datatype:
        [1] press [table]  =>> press [structure]  =>> press [change] for any column  =>> change [dataType]
        [2] ALTER TABLE items CHANGE id id INT (11) NOT NULL UNIQUE;
        [3] ALTER TABLE items MODIFY id INT (11) NOT NULL UNIQUE;

    * row = record = tuple
    * coulmn = attribute = field
*/
