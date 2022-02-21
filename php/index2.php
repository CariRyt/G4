<?php
    include 'config.php';
   
    if (isset($_POST['cSub'])) {
        $uid = $_POST['userid'];
        $message = $_POST['message'];
    
        $sql = "INSERT INTO comments (userid, message)";
            
        if ($link->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }
    }
         
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Carita Rytkölä">
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <title>Tenerife travel</title>
    <meta name="description" content="Culture of Tenerife">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="../css/style.css" rel="stylesheet" type="text/css">  


<style>

  .container {
    position: relative;
  }

  .center {
    position: absolute;
    top:50%;
    width:100%;
    text-align: center;
    font-size: 18px;
  }

  .First {
    margin-top: 10%;
    width: 100%;
    height: auto;
    opacity: 0.9;
  }

  .toLeft {
    text-align: left;
  }

  .center {
    font-family: 'Brush Script MT', cursive;
    font-size: 100px;
    color: rgb(111, 252, 132);
  }

  .Second {
    float: right;
    border-radius: 15px 50px 30px;
    padding: 20px;
    width: 33%;
    height: auto;
  }

  .Third {
    float: left;
    border-radius: 15px 50px 20px;
    padding: 20px;
    width: 33%;
    height: auto;
  }
  .div2 {
    float: right;
    width: 300px;
    height: 100px;
    padding: 50px;
    border: 1px solid red;
    box-sizing: border-box;
  }

  .box {
    background-color: rgb(227, 247, 222);
    border: solid rgb(181, 226, 177) 1px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  height: 250px;
  border-radius: 8px;
  width: 100%;
  margin: 30px;

  }
  .clearfix {
    overflow:auto;
  }
  .TopMargins {
    margin: 5%;
  }

  .maker {
    color: white;
    text-align: center;
    background-color: green;
  }
  textarea {
	width: 400px;
	height: 80px;
	background-color: #fff;
	resize: none;
}

button {
	width: 80px;
	height: 30px;
	background-color: #282828;
	border: none;
	color: #fff;
	font-family: arial;
	font-weight: 400;
	cursor: pointer;
	margin-bottom: 60px;

}

.comment-box {
	width: 815px;
	padding: 20px;
	margin-bottom: 4px;
	background-color: rgb(181, 226, 177);
	border-radius: 4px;
	
}


</style>
</head>
<body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.html">
        <img src="https://cdn.discordapp.com/attachments/934009802298888219/936933677223526410/tene2.png" width="100" height="30" alt="tene2">
        </a>
      </div>

      <ul class="nav navbar-nav">           
        <li><a href="LS.html">Activities</a></li>
        <li><a href="cr.html">Culture</a></li>
        <li><a href="ST.html">Nature</a></li>
        <li><a href="MW.html">Travel planning</a></li>
      </ul>
    </div>
  </nav>

        
 
  
      <div class="sidenav hideside">
        <img src="https://cdn.discordapp.com/attachments/937685854099492904/937759206520537119/fish-4202421_1280.png" width="100" alt="">
        <h5>Eat fish or fish eat you</h5>
        <img src="https://cdn.discordapp.com/attachments/937685854099492904/937759206809935872/spanish-dancing-vector-767515.jpg" width="125" alt="">
        <h5>Dance olé!</h5>
        <img src="https://cdn.discordapp.com/attachments/937685854099492904/937685927545946142/beerani.gif" alt="">
        <h5>Grab cold one and relax</h5>
       </div>
      
  
      <div class="container text-center">
                
            <article class="TopMargins">
                <section>
                <h2>Free feedback section</h2>
                <p>Have you visited Teneriffe yet? Did our side help you at all? Deciding to go?
                <br>Feel free to leave commends about our side or Teneriffe overall along tips to others below!</p>
                </section>
                </article>
                
                <?php
                echo "<form> 
                  <input type='hidden' name='uid' value='User'>
                  <textarea name='message'></textarea><br>
                  <button type='submit' name='cSub'>Comment</button>
                  </form>";
                
            
                ?>
               
          
            </div>
  </body>
  <footer class="maker">
    <b><em>Team 4 website project. This page was made by Carita Rytkölä</em></b>
  </footer>
</html>