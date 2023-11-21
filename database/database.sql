CREATE DATABASE MyDatabase;

USE MyDatabase;

CREATE TABLE Users (
    ID INT PRIMARY KEY,
    Username VARCHAR(255),
    Titkos VARCHAR(255)
);

INSERT INTO Users (ID, Username, Titkos)
VALUES 
(1, 'katika@gmail.com', 'piros'),
(2, 'arpi40@freemail.hu', 'zold'),
(3, 'zsanettka@hotmail.com', 'sarga'),
(4, 'hatizsak@protonmail.com', 'kek'),
(5, 'terpeszterez@citromail.hu', 'fekete'),
(6, 'nagysanyi@gmail.hu', 'feher');