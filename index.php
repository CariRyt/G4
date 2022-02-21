<?php 
include_once 'header.php';
?>
	<br>
	<br>
	<br>
	<br>
   <section class="index-intro">
   <?php 
    if (isset($_SESSION["useruid"])) {
        echo "<p>Welcome to website " . $_SESSION["useruid"] . "</p>";
    }
    ?>
    </section>

      <div class="container">
        <a href="LS.html">
          <div class="centered">Activities</div>
          <img src="https://cdn.discordapp.com/attachments/934009802298888219/937795623678259240/dolphins-2532924_960_720.jpg" alt="" class="imagesize">
        </a>
      </div>
      <div class="container">
        <a href="cr.html">
          <div class="centered">Culture</div>
          <img src="https://cdn.discordapp.com/attachments/934009802298888219/937794763124535346/palacio-de-congresos-461666_960_720.jpg" alt="" class="imagesize">
        </a>
      </div>      <div class="container">
        <a href="ST.html">
          <div class="centered">Nature</div>
          <img src="https://cdn.discordapp.com/attachments/934009802298888219/937793735620714536/panoramic-943692_960_720.jpg" alt="" class="imagesize">
        </a>
      </div>      <div class="container">
        <a href="MW.html">
          <div class="centered">Travel planning</div>
          <img src="https://cdn.discordapp.com/attachments/934009802298888219/937797268231319582/transport-ga2e38a356_1920.jpg" alt="" class="imagesize">
        </a>
      </div> 
      
<?php 
include_once 'footer.php';
?>
</body>
</html>