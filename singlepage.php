<?php
include 'Php_connections/Database_Connection.php';
session_start();
if (!isset($_SESSION['login'])) {
    header("location:LoginPage.php");
    die();
}



?>
<html>
    <head>
        <title>Place Details</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
       integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
       integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <link rel="stylesheet" href="singlepage.css">
        <link rel="stylesheet" href="searchstyle.css">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
       <a class="navbar-brand" href="HomePage.html">TourGuide</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
           aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
       </button>
 
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav mr-auto">
               <li class="nav-item active">
                   <a class="nav-link" href="exploreBydivision.php">Home <span class="sr-only">(current)</span></a>
               </li>
 
               <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                   <a href="logout.php" class="btn btn-danger my-2 my-sm-0" type="submit">Logout</a>
               </li>
           </ul>
       </div>
   </nav>
     <main>







     <div class="container">
     <?php
        $exploreid=$_GET['exploreid'];
        $s="SELECT *FROM division WHERE place_id = '$exploreid' ";
        $result = mysqli_query($conn, $s);
               
               if (mysqli_num_rows($result) > 0) {
               // output data of each row
               $row = mysqli_fetch_assoc($result) ;

               
                $placename = $row['place_name'];
                $placedes = $row['place_description'];
                $placeimage = $row['place_image'];
                $long = $row['place_log'];
                $latt = $row['place_lat'];
                $placedivision = $row['place_division'];
                $placeadd = $row['place_address'];
               }

        ?>
      <!-- Topic Cards -->
      <div id="cards_landscape_wrap-2">
       <div class="container">
           <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
                   <a href="">
                       <div class="card-flyer">
                           <div class="text-box">
                               <div class="image-box">
                                   <img src="admin/<?php echo $row['place_image'];?>" alt="" />
                               </div>
                           </div>
                       </div>
                   </a>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
                   <a href="">
                       <div class="card-flyer">
                           <div class="text-box">
                              
                               <div class="text-container">
                                   <h6><?php echo $placename; ?></h6>
                                   <span class="badge badge-pill badge-success"><?php echo $placedivision;?> </span>
                                   <p><?php echo $placedes;?></p>
                               </div>
                               <div class="card">
 
                                   <!--Card content-->
                                   <div class="card-body text-center">
                      
                                       <h6 class="mb-3">Map Location</h6>
                      
                                       <!--Google map-->
                                       <div id="googleMap" style="width:100%;height:200px;"></div>

                                       <?php
                                       $user = $_SESSION['login'];

                                        $check_explore=mysqli_query($conn," SELECT * FROM wishlist WHERE user_id ='$user' AND explore_id='$exploreid' ");
                                      
                                        if (mysqli_num_rows($check_explore) > 0)
                                        {
                                            ?>

                                            <div class="alert alert-success mt-2">
                                                <strong>This place is added to your wishlist!</strong> <a href="profile.php" class="alert-link">Check your wishlist.</a>.
                                            </div>
                                        <?php
                                        }
                                        else { 
                                       ?>
                      
                                        <form method="post" action="addtowishlist.php" name="form">
                                            <input type="hidden" value="<?php echo $_SESSION['login']; ?>"  name="userid">
                                            <input type="hidden" value="<?php echo $placeimage; ?>"  name="placeimage">
                                            <input type="hidden" value="<?php echo $placename; ?>"  name="placename">
                                            <input type="hidden" value="<?php echo $placedes; ?>"  name="desc">
                                            <input type="hidden" value="<?php echo $exploreid; ?>"  name="exploreid">
                                            

                                       <button type="submit" class="btn btn-primary mt-2">Add to wishlist</button>
                                       
                                       </form>

                                       <?php
                                       }
                                       ?>
                                   </div>
                                   <!--/.Card content-->
                                  
                               </div>
                              
 
 
                           </div>
                       </div>
                   </a>
               </div>
           </div>
       </div>
   </div>
 
 
     </div>

        
     </main>

     <script>
        function myMap() {
        var mapProp= {
          center:new google.maps.LatLng(<?php echo $long;?>,<?php echo $latt;?>),
          zoom:15,
        };
        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
        }
        </script>
        
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANeLlHx-W5BnX0njt-t4Z2u5yqSuS9Crw&callback=myMap"></script>
        <script type="text/javascript" src="searchscript.js"></script>


        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>







   
   

    </body>
</html>