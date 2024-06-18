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

    
    * [phpMyAdmin]:
        =>> dataBase name  =>> table name  =>> empty        =>> three are the same  =>> to empty table
        =>> table  =>> operation  =>> empty                 =>> three are the same  =>> to empty table
        =>> TRUNCATE 'table name';                          =>> three are the same  =>> to empty table

        =>> table  =>> structure  =>> column  =>> change column  =>> change dataType


    * row = record = tuple
    * coulmn = attribute = field
*/