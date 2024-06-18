/*

    * [tools], [methods] to modify data in database
        [1] [command prompt]  =>> desktop                                   =>> windows, linux, mac
        [2] [shell]    =>> [windows+r] =>> write [cmd]  =>> press [enter]   =>> windows, linux, mac
        [3] [xampp] program  =>> press [shell]

            =>> [cd /c/xampp/mysql/bin]
            =>> [c:/xampp/mysql/bin>mysql -u root -p]
            =>> [enter password]                            =>> ["password1"]  [open mariaDB]

            =>> [\q]                                        =>> [exit maraiaDB]
            =>> [c:/xampp/mysql/bin>mysql -u root -p]
            =>> [enter password]                            =>> ["password1"]  =>> [open mariaDB]

            =>> [\q]
            =>> mysqladmin --user=root password "password1"             =>> create password for first time
            =>> mysqladmin --user=root --password="password1" password "password2"  =>> reset password
            =>> mysqladmin --user=root --password="password1" password ""           =>> reset password [default]
            =>> in [phpmyadmin] configuration file =>> replace [config] with [cookie]

            *   [1] start
                [2] edit the system environment variables
                [3] environment variables 
                [4] new
                [5] [variable name] [variable value]  =>> c:/xampp/mysql/bin


        [2] [phpmyadmin]
            =>> press [database name]
            =>> press [operations]
            =>> DROP DATABASE `ecom`;       =>> two are the same
            =>> DROP DATABASE ecom;         =>> two are the same

            =>> new: ecom   =>> utf8mb4_general_ci

        [3] [mysql work bench] software program
*/

