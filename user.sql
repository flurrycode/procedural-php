CREATE DATABASE procedural;

-- DDL - Data Defination Language
-- It is used to define structure of database and table

CREATE TABLE user
(
	id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	fname varchar(25) NOT NULL,
	lname varchar(25) NOT NULL,
	email varchar(255) NOT NULL,
	uname varchar(30) NOT NULL,
	pass varchar(255) NOT NULL
);

ALTER TABLE user CHANGE password pass VARCHAR(255);

TRUNCATE TABLE user;

DROP TABLE user;


-- DML - Data Manipulation Language
-- It is used to manipulate data inside table.

-- Insert Single Line Code SQL
INSERT INTO user (fname, lname, email, uname, pass) VALUES('Flurry', 'Code', 'mail@mailbox.com', 'flurry', 'password');
-- Insert Multiple Line Code SQL
INSERT INTO user (fname, lname, email, uname, pass) VALUES('Hue', 'Lui', 'hue@mailbox.com', 'hue', 'password'), 
('Tom', 'Jerry', 'tommy@mailbox.com', 'thomas', 'password'), ('Admin', 'System', 'admin@mailbox.com', 'admin', 'password'), 
('Qwerty', 'Asdf', 'qwas@mailbox.com', 'qwerty', 'password');

-- Update all Column
UPDATE user SET pass = 'pass';
-- Update Single Column
UPDATE user SET pass = 'pass' WHERE uname='thomas';


-- Delete all from Table
DELETE FROM user;
-- Delete Single Column
DELETE FROM user WHERE uname='thomas';


-- DQL - Data Query Language

--Select All
SELECT * FROM user;
-- Select Single Column
SELECT uname FROM user;