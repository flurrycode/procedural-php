<?php

include 'dbh.php';


$uname = mysqli_real_escape_string($conn, $_POST['uname']);
$pass  = mysqli_real_escape_string($conn, $_POST['pass']);

#Error Handlers

# Check for Empty Fields
if (empty($uname) || empty($pass))
{
	echo "Please fill out all fields";
	exit();
}
else
{
#Check if Username Exists
	$sql = "SELECT * FROM user WHERE uname='$uname'";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck < 1)
	{
		echo "Username does not Exists";
		exit();
	}
	else
	{
		if ($row = mysqli_fetch_assoc($result))
		{
#Dehashing Password
			$hashedPass = password_verify($pass, $row['pass']);

			if ($hashedPass == false)
			{
				echo "Password Invalid";
			}
			elseif ($hashedPass == true)
			{
				// $_SESSION['uid'] = $row['id'];
				// $_SESSION['fname'] = $row['fname'];
				// $_SESSION['lname'] = $row['lname'];
				// $_SESSION['email'] = $row['email'];
				// $_SESSION['uname'] = $row['uname'];

				$id    = $row['id'];
				$fname = $row['fname'];
				$lname = $row['lname'];
				$email = $row['email'];
				$uname = $row['uname'];
			}
		}
	}
}