DROP database if exists cock;

CREATE DATABASE cock;

USE cock;

CREATE TABLE Beginner (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Cocktails VARCHAR(30) NOT NULL,
Fruit VARCHAR(230) NOT NULL,
Alcohol VARCHAR(230) NOT NULL
);

CREATE TABLE Intermediate (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Cocktails VARCHAR(30) NOT NULL,
Fruit VARCHAR(230) NOT NULL,
Alcohol VARCHAR(320) NOT NULL
);

CREATE TABLE Expert (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Cocktails VARCHAR(30) NOT NULL,
Fruit VARCHAR(230) NOT NULL,
Alcohol VARCHAR(230) NOT NULL
);

CREATE TABLE Summer (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Cocktails VARCHAR(30) NOT NULL,
Fruit VARCHAR(230) NOT NULL,
Alcohol VARCHAR(320) NOT NULL
);

CREATE TABLE Premium (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Cocktails VARCHAR(30) NOT NULL,
Fruit VARCHAR(230) NOT NULL,
Alcohol VARCHAR(320) NOT NULL
);

INSERT INTO Beginner (id, Cocktails, Fruit, Alcohol)
VALUES (1, 'Gimlet', 'Lime', 'Gin');
VALUES (2, 'Cosmopolitan', 'Cranberry', 'Gin');
VALUES (3, 'Hemingway Daiquiri', 'Lime''Grapefruit', 'Rum');
VALUES (4, 'Negroni', 'Orange', 'Gin');
VALUES (5, 'Sidecar', 'Lemon', 'Brandy');

INSERT INTO Intermediate(id, Cocktails, Fruit, Alcohol)
VALUES (6,'Blue Coconut', 'Coconut', 'Curacao''Vodka');
VALUES (7,'Cake by the Ocean', 'Pineapple''Orange', 'Vodka''Rum');
VALUES (8,'Rainbow Sangria', 'Blackberries''Blueberries''Kiwis''Pinapple''Mango''Straberries''Limes', 'White Wine');
VALUES (9,'Malibu Sunset', 'Orange''Pineapple''Cherries', 'Vermouth''Rum');

INSERT INTO Expert(id, Cocktails, Fruit, Alcohol)
VALUES (10,'Mai-Tai', 'Lime', 'Rum');
VALUES (11,'Old-Fashioned', 'Orange''Cherry', 'Whisky');
VALUES (12,'Alien Sky','Pineapple' 'Orange', 'Rum');
VALUES (13,'Chocolate Mintini', 'Coco', 'Vodka');

INSERT INTO Summer(id, Cocktails, Fruit, Alcohol)
VALUES (14,'Pina Colada', 'Coconut''Pineapple', 'Rum');
VALUES (15,'Cuba Libre', 'Lime', 'Rum');
VALUES (16,'Hurricane','Lemon''Lime', 'Rum');
VALUES (17,'Blackberries', 'Blackberries' 'Mint', 'Vodka''Rum');


SELECT 
    *
FROM
    Beginner;