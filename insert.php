<?php

include 'dbh.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$uname = $_POST['uname'];
$pass = $_POST['pass'];

$sql = "INSERT INTO users(fname, lname, email, uname, pass) VALUES ('$fname', '$lname', '$email', '$uname', '$pass')";
mysqli_query($conn, $sql);

