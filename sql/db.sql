-- Database creation
DROP DATABASE IF EXISTS assignment2;
CREATE DATABASE assignment2;

USE assignment2;
-- Table: users
DROP TABLE IF EXISTS users;
CREATE TABLE users (
    userID INT NOT NULL AUTO_INCREMENT,
    email varchar(255) NOT NULL,
    username varchar(255) NOT NULL,
    fullname varchar(255) NOT NULL,
    PRIMARY KEY (userID)
);