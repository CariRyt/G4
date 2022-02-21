<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tenerife travel</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css">

<style>
.formP{
display:block;
margin-top:8%;
position:relative;
}
.formPosition{
position:relative;
width:80%;
margin-left:auto;
margin-right:auto;
text-align:center;
padding:10px;
}
.formitems{
width:25%;
margin-left:auto;
margin-right:auto;
margin-top: 15px;
display:flex;
flex-direction:column;
position:relative;
text-align:center;
}
button{
margin-top:25px;
padding:5px;
width:10%;
background-color:  #003b31;
color: white;
}
h2{
text-align:center;
}
footer{
position:absolute;
bottom:0;
}
.container {
    position: relative;
    text-align: center;
    color: white;
}
.centered {
    position: absolute;
    top: 50%;
    color: white;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 70px;}
    
    </style>
    </head>
    <body>
    
    <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
    <div class="navbar-header">
    <a class="navbar-brand" href="#"></a>
    <img src="https://cdn.discordapp.com/attachments/934009802298888219/936933677223526410/tene2.png" width="60" height="60" alt="">
    </div>
    <ul class="nav navbar-nav">
    <li><a href="index.php">Home</a></li>
    <li><a href="LS.html">Activities</a></li>
    <li><a href="/group4new/html/cr.html">Culture</a></li>
    <li><a href="ST.html">Nature</a></li>
    <li><a href="/group4new/html/MW.html">How to get around</a></li>
    <?php 
        if (isset($_SESSION["useruid"])) {
            echo "<li><a href='profile.php'>Profile page</a></li>";
            echo "<li><a href='includes/logout.inc.php'>Log out</a></li>";
        }
        else {
            echo "<li><a href='signup.php'>Sign up</a></li>";
            echo "<li><a href='login.php'>Log in</a></li>";
        }
    ?>
    </ul>
    </div>
    </nav>