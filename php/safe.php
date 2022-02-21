<?php
function setComments() {
    if (isset($_POST['cSub'])) {
        $uid = $_POST['uid'];
        $message = $_POST['message'];
        
        $sql = "INSERT INTO comments (uid, mesage) VALUES ('$uid', '$message')";
        $result = $conn->query($sql);
    }
}