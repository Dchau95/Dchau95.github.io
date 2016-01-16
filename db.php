<html>
    <head>
        <title>The Log of Champions</title>
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
          <li class="active"><a href="visitorLog.php">Visitor Log</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
    </div>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <script>
        document.write('<style type="text/css">body{background:url("http://area51.the-dollars.com/betterthanyou/03%20afternoon.jpg") no-repeat center center fixed; -webkit-background-size:cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;}</style>');
    </script>
    <div id="floater2"> </div>
    <div id ="loginbox">
<?php

// Create connection
$con=mysqli_connect('setapproject.org','csc412','csc412','csc412');

// Check connection
if (mysqli_connect_errno($con)) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$name = $_POST["name"];
$email = $_POST["email"];
$quote = $_POST["quote"];

$sql = "INSERT INTO dtchau_table (name, email, quote) VALUES ('$name', '$email', '$quote')";

if ($con->query($sql) === TRUE) {
    echo "<div style ='font:21px/21px andaleMono;color:white'>Here lies the most awesomest visitors ever</div>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
echo "<br>";

$result = mysqli_query($con,"SELECT * FROM dtchau_table");

while($row = mysqli_fetch_array($result)) {
  echo '<div style ="font:21px/21px andaleMono;color:white">' . $row['name'] . " " . $row['email'] . " " . $row['quote'] . '</div>';
  echo "<br>";
}

mysqli_close($con);
?>
    </div> 
</html>