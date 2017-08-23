<?php

include 'dbh.php';


$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$uname = mysqli_real_escape_string($conn, $_POST['uname']);
$pass  = mysqli_real_escape_string($conn, $_POST['pass']);

#Error Handlers

# Check for Empty Fields
if (empty($fname) || empty($lname) || empty($email) || empty($uname) || empty($pass))
{
	echo "Please fill out all fields";
	exit();
}
else
{
#Checking if Input Characters are Valid
	if (!preg_match("/^[a-zA-Z]*$/", $fname) || !preg_match("/^[a-zA-Z]*$/", $lname))
	{
		echo "Invalid Input";
		exit();		
	}
	else
	{
#Checking if Email is Valid
		if (!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			echo "Invalid Email";
			exit();
		}
#Check if Username Exists
		else
		{
			$sql = "SELECT * FROM user WHERE uname='$uname'";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);

			if ($resultCheck > 0)
			{
				echo "Username Exists";
			}
			else
			{
#Hashing the Password
				$hashedPass = password_hash($pass, PASSWORD_DEFAULT);
#Insert Data into Database
				$sql = "INSERT INTO user (fname, lname, email, uname, pass) VALUES ('$fname', '$lname', '$email', '$uname', '$hashedPass')";
				mysqli_query($conn, $sql);
				exit();
			}
		}
	}
}