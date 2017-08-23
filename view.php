<?php

include 'dbh.php';

$sql = "SELECT * FROM user";
#$sql = "SELECT * FROM user WHERE uname='admin'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck>0) 
{
	while ($row = mysqli_fetch_assoc($result))
	{
		echo $row['fname'];
	}
}