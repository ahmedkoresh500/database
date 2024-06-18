/*
    * [xampp] program  =>> start mysql  =>> syntax error:
        =>> c:/xampp/mysql  
        =>> delete [files] not [folders]  
        =>> [xampp] program  =>> start mysql

    [1] [command prompt]  =>> desktop                                   =>> windows, linux, mac
    [2] [shell]    =>> [windows+r] =>> write [cmd]  =>> press [enter]   =>> windows, linux, mac
    [3] [xampp] program  =>> press [shell]

        =>> mysql -u root -p
        =>> [enter password]                        =>> [""]  [open mariaDB]
        =>> show databases;                         =>> semicolon is a must
        =>> use products;                           =>> semicolon is a must

        =>> SELECT id, name FROM items;             =>> two are the same
        =>> SELECT id, name FROM products.items;    =>> two are the same
        =>> quit                                    =>> semicolon here optional =>> two are the same
        =>> \q                                      =>> semicolon here optional =>> two are the same

    * [phpmyadmin]  =>> press [SQL]:
        =>> CREATE DATABASE osama;                  =>> not sensitive to upper and lower cases
        =>> CREATE DATABASE IF NOT EXISTS osama;    =>> not sensitive to upper and lower cases

        =>> DROP DATABASE osama;
        =>> DROP DATABASE IF EXISTS osama;          =>> not sensitive to upper and lower cases
        
        =>> CREATE TABLE osama.items (
            id INT (11) NOT NULL PRIMARY KEY,
            name VARCHAR (255) NOT NULL,
            email VARCHAR (255) NOT NULL UNIQUE,
            info VARCHAR (255) NOT NULL,
            country VARCHAR(255) NOT NULL
        ) ENGINE = InnoDB;


        =>> SELECT * FROM items WHERE id = 1 AND country = 'Egypt' ORDER BY id ASC LIMIT 1;
        =>> SELECT * FROM items WHERE id = 5 AND country = 'Saudi Arabia' ORDER BY id ASC LIMIT 1;
        =>> SELECT name, email, info FROM items WHERE id = 100 ORDER BY id DESC LIMIT 1;

        =>> SELECT * FROM osama.items;
        =>> SELECT id, name FROM items;


        =>> INSERT INTO osama.items (id, name) VALUES (1, 'car');           =>> two are the same
        =>> INSERT INTO items VALUES (1, 'car');                            =>> two are the same

        =>> INSERT INTO osama.items (id, name) VALUES (NULL, 'bicycle');
        =>> INSERT INTO items VALUES (NULL, 'bicycle');
*/