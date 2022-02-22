<?php
include_once 'header.php';
?>

<section class="signup-form">
<div class="formP">
	<h2>Log In</h2>
	<div class="signup-form-form, formPosition">
	<form action="includes/login.inc.php" method="post">
	<input class="formitems" type="text" name="uid" placeholder="Username/Email...">
	<input class="formitems" type="password" name="pwd" placeholder="Password...">
	<button type="submit" name="submit">Log In</button>
	</form>
	</div>
	</div>
		<?php 
if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput"){
        echo "<p>Fillin all fields!</p>";
    }
    else if ($_GET["error"] == "wronglogin"){
        echo "<p>Incorrect login information!</p>";
    }
}
?>
</section>



      
<?php 
include_once 'footer.php';
?>

