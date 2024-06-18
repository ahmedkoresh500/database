/*
    * MySQL needed tools:

    * methods to modify data in dataBase
        [1] [command line]    =>> windows, linux, mac

            * [cmder program] starts in  =>> [c:/xampp/mysql/bin]
                =>> [c:/xampp/mysql/bin>mysql -u root] = [c:/xampp/mysql/bin>mysql -u root -p]

            * [1] start  =>> [2] edit the system environment variables  =>> [3] environment variables 
                =>> [4] new =>> [5] c:xampp/mysql/bin

            * [1] [xampp] program =>> [2] shell
                =>> mysqladmin --user=root password "password1"         =>> create password for first time
                =>> mysqladmin --user=root --password="password1" password "" =>> reset password
                =>> in [phpmyadmin] configuration file =>> replace [config] with [cookie]

        [2] [phpmyadmin]
            =>> dataBase  =>> operation  =>> DROP DATABASE ecom;    =>> two are the same
            =>> DROP DATABASE ecom;                                 =>> two are the same

            =>> new: ecom   =>> utf8_general_ci

        [3] software: [mysql work bench] program

*/

