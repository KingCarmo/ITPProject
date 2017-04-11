DROP DATABASE IF EXISTS logintestpeter;

CREATE DATABASE logintestpeter;

USE logintestpeter;

CREATE TABLE `accounts`
(
    `id` INT NOT NULL AUTO_INCREMENT,
    `username` VARCHAR(100) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `password` VARCHAR(100) NOT NULL,
    `avatar` VARCHAR(100) NOT NULL,
PRIMARY KEY (`id`) 
);

INSERT INTO accounts VALUES (
"","Peter","peter@peter.com","pass",""
);

INSERT INTO accounts VALUES (
"","Peter2","peter22@peter.com","password",""
);

select *
FROM accounts;

