<?php
include 'Php_connections/Database_Connection.php';
session_start();
if (!isset($_SESSION['login'])) {
    header("location:LoginPage.php");
    die();
}


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="searchstyle.css">
    <title>Explore</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="HomePage.html">TourGuide</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="exploreBydivision.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Menu
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="profile.php">Profile</a>
            <a class="dropdown-item" href="feedback.php">Feedback</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="donation.php">Donate</a>
          </div>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" onkeyup="showResult(this.value)" type="search" placeholder="Search" aria-label="Search">
		
     <ul class="result_Box" id="result"></ul>
      </form>
      <ul class="navbar-nav p-2">
      <li class="nav-item">
      <a href="logout.php" class="btn btn-danger my-2 my-sm-0" type="submit" >Logout</a>
    </li>
  </ul>
    </div>
  </nav>
<div class="d-flex vw-100 vh-100 position-relative p-3 mx-auto flex-column text-center text-dark">

	<main role="main">
		<h1 class="mb-5">Thanks for supporting us!! </h1>
		<a href="exploreBydivision.php" class="btn btn-lg btn-primary">Return to Explore</a>

	
	</main>


</div>



    <script type="text/javascript" src="searchscript.js"></script>
  </body>
</html>