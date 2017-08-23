<?php

include 'dbh.php';


// $sql_create_database = "CREATE DATABASE procedural";
// if (mysqli_query($conn, $sql_create_database))
// {
//     echo "Database created successfully";
// } else
// {
//     echo "Error Creating Database: " . mysqli_error($conn);
// }



$sql_table_create = "CREATE TABLE user
(
	id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	fname varchar(25) NOT NULL,
	lname varchar(25) NOT NULL,
	email varchar(255) NOT NULL,
	uname varchar(30) NOT NULL,
	pass varchar(255) NOT NULL
)";


if (mysqli_query($conn, $sql_table_create)) 
{
    echo "Table User created Successfully.";
} 
else 
{
    echo "Error creating table User: " . $conn->error;
}


$sql_table_insert = "INSERT INTO user (fname, lname, email, uname, pass) VALUES('Flurry', 'Code', 'mail@mailbox.com', 'flurry', 'password'), ('Hue', 'Lui', 'hue@mailbox.com', 'hue', 'password'), ('Tom', 'Jerry', 'tommy@mailbox.com', 'thomas', 'password'), ('Admin', 'System', 'admin@mailbox.com', 'admin', 'password'), ('Qwerty', 'Asdf', 'qwas@mailbox.com', 'qwerty', 'password')";

if (mysqli_query($conn, $sql_table_insert)) 
{
    echo "Data Inserted Successfully In Table User.";
} 
else 
{
    echo "Error Inserting in Table User: " . $conn->error;
}

