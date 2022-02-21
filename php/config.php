<?php
define('DB_SERVER', 'db');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'password');
define('DB_NAME', 'comments');

$conn = mysqli_connect(DB_SERVER , DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($conn) {
    die("Connection failed: " . mysqli_connect_error());
}