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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="explore.css">
    <link rel="stylesheet" href="searchstyle.css">
    <title><?php echo $_POST['division_name'];?></title>
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
<div class="container">
<div class="row">

<?php
        $division_name=$_POST['division_name'];
        $s="SELECT *FROM division WHERE place_division = '$division_name' ";
        $result = mysqli_query($conn, $s);
               
               if (mysqli_num_rows($result) > 0) {
               // output data of each row
               while($row = mysqli_fetch_assoc($result)) {
        ?>

 


<div class="col-12 col-sm-8 col-md-6 col-lg-3 d-flex align-items-stretch " >
      <div class="card">
        <img class="card-img-top" src="admin/<?php echo $row['place_image'];?>" alt="card image" loading="lazy" >
        <div class="card-body d-flex flex-column ">
          <h4 class="card-title"><?php echo $row['place_name']; ?></h4>
          <p class="card-text shortdes"><?php echo $row['place_description'];  ?> </p>
		 <a href="singlepage.php?exploreid=<?php echo $row['place_id'];  ?>"  class="btn btn-danger mt-auto btn-block " role="button">Explore</a>
          
        </div>
      </div>
      </div>
		<?php
               }
            }
        ?>

    
</div>
</div>

<script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
<df-messenger
  intent="WELCOME"
  chat-title="TourGuide"
  agent-id="7e45f163-9224-4815-b14c-bbc74ccc4688"
  language-code="en"
></df-messenger>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="searchscript.js"></script>
  </body>
</html>