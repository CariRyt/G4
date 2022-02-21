<?php

//saattaa auttaa connectionissa.
$serverName = "db";
$dBUsername = "root";
$dBpassword = "password";
$dBName = "group4log";
//saattaa auttaa connectionissa.
$conn = mysqli_connect($serverName, $dBUsername, $dBpassword, $dBName);

if (isset($_POST["submit"])) {
    
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    if (emptyInputLogin($username, $pwd) !== false) {
        header("location: ../login.php?error=emptyinput");
        exit();
    }
    
    loginUser($conn, $username, $pwd);
}
else {
    header("location: ../login.php");
    exit();
}