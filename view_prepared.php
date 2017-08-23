<?php

include 'dbh.php';

$data = "Admin";

#Creating a Template
$sql = "SELECT * FROM user WHERE uname=?;";

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
	mysqli_stmt_bind_param($stmt, "s", $data);
#Run Paramenters inside database
	mysqli_stmt_execute($stmt);
	$result = mysqli_stmt_get_result($stmt);
	
	while ($row = mysqli_fetch_assoc($result))
	{
		echo $row['uname'];
	}	
}


