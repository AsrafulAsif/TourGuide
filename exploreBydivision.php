<?php
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
  <div class="container">
  <div class="row">
    <div class="col-12 col-sm-8 col-md-6 col-lg-3 d-flex align-items-stretch " >
      <div class="card">
        <img class="card-img-top" src="Division/Dhaka.jpg" alt="Bologna" loading="lazy">
        <div class="card-body d-flex flex-column ">
          <h4 class="card-title">Dhaka</h4>
          <p class="card-text shortdes"> Dhaka, also spelled Dacca, city and capital of Bangladesh. It is located just north of the Buriganga River, a channel of the Dhaleswari River, in the south-central part of the country. Dhaka is Bangladesh’s most populous city and is one of the largest metropolises in South Asia. Dhaka is one of the largest city in south asia......... </p>
		  <form action="detailedexplore.php" method="post">
         <input type="hidden" name="division_name" value="Dhaka"> 
		 <button type="submit" class="btn btn-primary mt-auto btn-block " role="button">Explore</button>
          </form>  
        </div>
      </div>
    </div>


	<div class="col-12 col-sm-8 col-md-6 col-lg-3 d-flex align-items-stretch ">
      <div class="card">
        <img class="card-img-top" src="Division/ct.jpg" alt="Bologna" loading="lazy">
        <div class="card-body d-flex flex-column">
          <h4 class="card-title">Chattogram</h4>
          <p class="card-text shortdes"> Chittagong, officially called Chattogram, city that is the chief Indian Ocean port of Bangladesh. It lies about 12 miles (19 km) north of the mouth of the Karnaphuli River, in the southeastern arm of the country. Chittagong is the second largest city in Bangladesh, after Dhaka </p>
          <form action="detailedexplore.php" method="post">
          <input type="hidden" name="division_name" value="Chittagong">
		  <button type="submit" class="btn btn-primary mt-auto btn-block  " role="button">Explore</button>
		  </form>
        </div>
      </div>
    </div>


	<div class="col-12 col-sm-8 col-md-6 col-lg-3 d-flex align-items-stretch ">
      <div class="card">
        <img class="card-img-top" src="Division/borisal.jpg" alt="Bologna" loading="lazy">
        <div class="card-body d-flex flex-column">
          <h4 class="card-title">Barishal</h4>
          <p class="card-text shortdes"> Barisal, officially called Barishal, city, south-central Bangladesh. It lies in the delta of the Padma (Ganges [Ganga]) and Jamuna (Brahmaputra) rivers on the Kirtonkhola, an offshoot of the Arial Khan River.                                                                </p>
		  <form action="detailedexplore.php" method="post">
          <input type="hidden" name="division_name" value="Barisal">
		  <button type="submit" class="btn btn-primary mt-auto btn-block  " role="button">Explore</button>
		  </form>    
        </div>
      </div>
    </div>


	<div class="col-12 col-sm-8 col-md-6 col-lg-3 d-flex align-items-stretch ">
      <div class="card">
        <img class="card-img-top" src="Division/Khulna.jpg" alt="Bologna" loading="lazy">
        <div class="card-body d-flex flex-column">
          <h4 class="card-title">Khulna</h4>
          <p class="card-text shortdes"> Khulna is Bangladesh's third-largest city, after Dhaka and Chittagong. In the south-western part of the country, on the Rupsha and Bhairab Rivers, it covers an area of 59.57 square kilometres (23.00 sq mi); the district covers 4,394.46 square kilometres (1,696.71 sq mi). </p>
		  <form action="detailedexplore.php" method="post">
          <input type="hidden" name="division_name" value="Khulna"> 
		  <button type="submit" class="btn btn-primary mt-auto btn-block  " role="button">Explore</button>
		  </form>
        </div>
      </div>
    </div>

	</div>
	<div class="row">


	<div class="col-12 col-sm-8 col-md-6 col-lg-3 d-flex align-items-stretch ">
      <div class="card">
        <img class="card-img-top" src="Division/Raj.jpg" alt="Bologna" loading="lazy">
        <div class="card-body d-flex flex-column">
          <h4 class="card-title">Rajshahi</h4>
          <p class="card-text shortdes"> Rajshahi (Bengali: রাজশাহী, historically Rampur Boalia; nicknamed Silk City or City of Education) is a metropolitan city, and a major urban, commercial and educational centre of Bangladesh. It is also the administrative seat of eponymous division and district. </p>
		  <form action="detailedexplore.php" method="post">
          <input type="hidden" name="division_name" value="Rajshahi"> 
		  <button type="submit" class="btn btn-primary mt-auto btn-block" role="button">Explore</button>
		  </form>
        </div>
      </div>
    </div>


	<div class="col-12 col-sm-8 col-md-6 col-lg-3 d-flex align-items-stretch ">
      <div class="card">
        <img class="card-img-top" src="Division/sy.jpg" alt="Bologna" loading="lazy">
        <div class="card-body d-flex flex-column">
          <h4 class="card-title">Sylhet</h4>
          <p class="card-text shortdes"> Sylhet (Bengali: সিলেট) is a metropolitan city in northeastern Bangladesh. It is the administrative seat of Sylhet Division. Located on the north bank of the Surma River at the eastern tip of Bengal, Sylhet has a subtropical climate and lush highland terrain. </p>
		  <form action="detailedexplore.php" method="post">
          <input type="hidden" name="division_name" value="Sylhet"> 
		  <button type="submit" class="btn btn-primary mt-auto btn-block" role="button">Explore</button>
		  </form>
        </div>
      </div>
    </div>


	<div class="col-12 col-sm-8 col-md-6 col-lg-3 d-flex align-items-stretch ">
      <div class="card">
        <img class="card-img-top" src="Division/rang.jpg" alt="Bologna" loading="lazy">
        <div class="card-body d-flex flex-column">
          <h4 class="card-title">Rangpur</h4>
          <p class="card-text shortdes"> Rangpur is an industrial centre noted for the manufacture of dhurries (cotton carpets), bidis (cigarettes), and cigars. Rangpur was constituted a municipality in 1869. The surrounding area is composed of a vast alluvial plain.  </p>
		  <form action="detailedexplore.php" method="post">
          <input type="hidden" name="division_name" value="Rangpur"> 
		  <button type="submit" class="btn btn-primary mt-auto btn-block" role="button">Explore</button>
		  </form>
        </div>
      </div>
    </div>



	<div class="col-12 col-sm-8 col-md-6 col-lg-3 d-flex align-items-stretch ">
      <div class="card">
        <img class="card-img-top" src="Division/mymo.jpg" alt="Bologna" loading="lazy">
        <div class="card-body d-flex flex-column">
          <h4 class="card-title">Mymensingh</h4>
          <p class="card-text shortdes"> Mymensingh (Bengali: ময়মনসিংহ) Located on the bank of Brahmaputra River, about 120 km (75 mi) north from Dhaka, it is a major financial centre and educational hub of north-central Bangladesh. </p>
		  <form action="detailedexplore.php" method="post">
          <input type="hidden" name="division_name" value="Mymensingh"> 
		  <button type="submit" class="btn btn-primary mt-auto btn-block " role="button">Explore</button>
		  </form>
        </div>
      </div>
    </div>

	
  </div>
</div>

<script >


document.addEventListener('DOMContentLoaded', function() {
 if (!Notification) {
  alert('Desktop notifications not available in your browser. Try Chromium.');
  return;
 }

 if (Notification.permission !== 'granted')
  Notification.requestPermission();
});


function notifyMe() {
 if (Notification.permission !== 'granted')
  Notification.requestPermission();
 else {
  var notification = new Notification('Tour Guide', {
   icon: 'images/logo.png',
   body: 'Your small support can inspire us to take tour guide to new heights',
  });
  notification.onclick = function() {
   window.open('donation.php');
  };
 }
}

  
</script>
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