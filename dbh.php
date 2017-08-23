<?php

$dbServername = "localhost";
$dbUsername   = "root";
$dbPassword   = "mysql";
$dbName       = "procedural";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

// $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword);