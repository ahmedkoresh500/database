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
        * to empty specific [table]:
        [1] press [table] =>> press [operations] =>> press [empty]  =>> 3 are the same
        [2] TRUNCATE `items`;                                       =>> 3 are the same
        [3] TRUNCATE `products`.`items`;                            =>> 3 are the same

        * to change [column] datatype:
        =>> press [table]
        =>> press [structure]
        =>> press [change] for any column
        =>> change [dataType]

    * row = record = tuple
    * coulmn = attribute = field
*/
