<?php
$servername = "db";
$username = "root";
$password = "password";
$dbname = "comments";

$conn = mysqli_connect($serverName, $dBUsername, $dBpassword, $dBName);

if ($conn) {
    die("Connection failed: " . mysqli_connect_error());
}