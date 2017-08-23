<?php

include 'dbh.php';

$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$uname = mysqli_real_escape_string($conn, $_POST['uname']);
$pass  = mysqli_real_escape_string($conn, $_POST['lname']);

$sql = "INSERT INTO user(fname, lname, email, uname, pass) VALUES ('$fname', '$lname', '$email', '$uname', '$pass')";
mysqli_query($conn, $sql);

