-- Database creation
DROP DATABASE IF EXISTS users;
CREATE DATABASE users;

USE users;
-- Table: users
DROP TABLE IF EXISTS users;
CREATE TABLE users (
    userID INT NOT NULL AUTO_INCREMENT,
    email varchar(255) NOT NULL,
    username varchar(255) NOT NULL,
    fname varchar(255) NOT NULL,
    surname varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    PRIMARY KEY (userID)
);

