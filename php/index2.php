<?php
    
    
    function createUser($link, $userid, $message) {
        $sql = "INSERT INTO comments (userid, message) VALUES (?, ?);";
        $stmt = mysqli_stmt_init($link);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../signup.php?error=stmtfailed2");
            exit();
        }
        
        
        mysqli_stmt_bind_param($stmt, "ss", $userid, $message);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../signup.php?error=none");
        exit();
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

      
  
      <div class="container text-center">
                
            <article class="TopMargins">
                <section>
                <h2>Free feedback section</h2>
                <p>Have you visited Teneriffe yet? Did our side help you at all? Deciding to go?
                <br>Feel free to leave commends about our side or Teneriffe overall along tips to others below!</p>
                </section>
                </article>
                <form action='safe.php' method='post'>
                <?php
                echo "<form>
                  <textarea name='message'></textarea><br>
                  <button type='submit' name='cSub'>Comment</button>
                  </form>";
            // ^ Luodaan kommenttikenttä ja nappi jolla saadaan lähetettyä viesti eteenpäin
                ?>
                </form>
            </div>
  </body>
</html>