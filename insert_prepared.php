<?php

include 'dbh.php';

$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$uname = mysqli_real_escape_string($conn, $_POST['uname']);
$pass  = mysqli_real_escape_string($conn, $_POST['lname']);

$sql = "INSERT INTO user(fname, lname, email, uname, pass) VALUES ('?', '?', '?', '?', '?')";

#Create a Prepare Statement
$stmt = mysqli_stmt_init($conn);

#Prepare the Prepared Statement
if (mysqli_stmt_prepare($stmt, $sql)) 
{
	echo "Your Error Message";	
}
else
{

#Bind Parameters to the Placeholder
	mysqli_stmt_bind_param($stmt, "sssss", $fname, $lname, $email, $uname, $pass);
#Run Paramenters inside database
	mysqli_stmt_execute($stmt);	
}
