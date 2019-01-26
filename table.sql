CREATE DATABASE BankingSystem;

USE BankingSystem;

CREATE TABLE users (
id INT NOT NULL AUTO_INCREMENT,
name VARCHAR(255), 
email VARCHAR(255), 
password VARCHAR(255), 
balance DECIMAL,
UNIQUE KEY email (email),
PRIMARY KEY (id));