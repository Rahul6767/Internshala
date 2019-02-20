<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="main.css">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Arbutus Slab' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div style="margin-bottom: 0px;" class="jumbotron">
  <div class="container text-center">
    <h1>Website123</h1>      
  </div>
</div>

<nav style="border-radius: 0;margin-bottom: 30px;" class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">HOME</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      	<?php
    if (isset($_SESSION['u_id'])) {
      	echo '<li><form method="POST" action="include/logout.inc.php">
	<button type="submit" name="submit" style="padding-top:14px;" class="btn btn-link">logout</button>
</form></li>';
      }else{
      	echo '<li><a href="login.php">Login</a></li>
        <li><a href="signup.php">Signup</a></li>';
      } 
    ?>
      </ul>
    </div>
  </div>
</nav>

