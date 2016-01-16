<!DOCTYPE html>
<html>
    <head>
        <title>Visitor Log In</title>
        <link rel="stylesheet" type ="text/css" href="site.css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
        <link rel="icon" type="image/png" href="http://vignette3.wikia.nocookie.net/fatestay-night/images/6/64/Favicon.ico/revision/latest?cb=20121220061449">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<div id="wrap">
  <!-- Fixed navbar -->
  <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">David Chau's CSC 412 Page</a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="about.html">About</a></li>
          <li><a href="current.html">Skills</a></li>
          <li><a href="projects.html">Projects</a></li>
          <li class = "active"><a href="visitorLog.php">Visitor Log</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
  </div>
        <?php
            $name = $email = $quote = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
               $name = test_input($_POST["name"]);
               $email = test_input($_POST["email"]);
               $quote = test_input($_POST["quote"]);
            }

            function test_input($data) {
               $data = trim($data);
               $data = stripslashes($data);
               $data = htmlspecialchars($data);
               return $data;
            }
        ?>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
            <script src="externalscript.js"></script>
            <script>
                document.write('<style type="text/css">body{background:url("http://area51.the-dollars.com/betterthanyou/03%20afternoon.jpg") no-repeat center center fixed; -webkit-background-size:cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;}</style>');
            </script>
        <div id="floater">
        </div>
        <div id = "loginbox">
        <form method="post" action="db.php"> 
            <p class = "andaleMono">Name</p>
            <input type="textbox" name="name" value="<?php echo $name;?>" id = "name">
            <p class = "andaleMono">Email</p>
            <input type="textbox" name="email" value="<?php echo $email;?>" id = "email">
            <p class = "andaleMono">Comments</p>
            <input type ="textbox" name="quote" value="<?php echo $quote;?>" id = "quotes">
            <br><br>
            <input type="submit" value="Submit" id="submit"> 
        </form>
        </div>
</html>

