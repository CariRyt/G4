<?php 
include_once 'header.php';
?>

<section class="signup-form">
	<div class="formP">
	<h2>Sign Up</h2>
	<div class="signup-form-form, formPosition">
	<form  action="includes/signup.inc.php" method="post">
	<input  class="formitems" type="text" name="name" placeholder="Full name...">
	<input class="formitems" type="text" name="email" placeholder="Email...">
	<input class="formitems" type="text" name="uid" placeholder="Username...">
	<input class="formitems" type="password" name="pwd" placeholder="Password...">
	<input class="formitems" type="password" name="pwdrepeat" placeholder="Repeat password...">
	<button type="submit" name="submit">Sign Up</button>
	</form>
	</div>
	</div>
	<?php 
if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput"){
        echo "<p>Fillin all fields!</p>";
    }
    else if ($_GET["error"] == "invaliduid"){
        echo "<p>Choose a proper username</p>";
    }
    else if ($_GET["error"] == "invalidemail"){
        echo "<p>Choose a proper email</p>";
    }
    else if ($_GET["error"] == "passwordsdontmatch"){
        echo "<p>Choose a proper username</p>";
    }
    else if ($_GET["error"] == "stmtfailed"){
        echo "<p>Something went wrong, try again!</p>";
    }
   else if ($_GET["error"] == "usernametaken"){
       echo "<p>Username already taken!!</p>";
   }
    else if ($_GET["error"] == "none"){
        echo "<p>You have signed up!</p>";
    }
}
?>
</section>     
<?php 
include_once 'footer.php';
?>