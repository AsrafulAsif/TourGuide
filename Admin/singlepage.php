<?php
include 'connection.php';
// session_start();
// if (!isset($_SESSION['login'])) {
//     header("location:admin_logIn.php");
//     die();
//}
header('Cache-Control: no cache'); //no cache
session_cache_limiter('private_no_expire'); // works
//session_cache_limiter('public'); // works too
session_start();


?>
<html>
    <head>
        <title>Place</title>
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
                                   <img src="<?php echo $row['place_image'];?>" alt="" />
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

                                       <br>

                                       <a href="editPlace.php?exploreid=<?php echo $row['place_id'];?>"  class="btn btn-success">Edit</a>
                                       <a href="deleteplace.php?exploreid=<?php echo $row['place_id'];?>"  class="btn btn-danger">Delete</a>
                                       
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