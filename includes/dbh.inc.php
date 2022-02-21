<?php

$serverName = "db";
$dBUsername = "root";
$dBpassword = "password";
$dBName = "group4log";

$conn = mysqli_connect($serverName, $dBUsername, $dBpassword, $dBName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}