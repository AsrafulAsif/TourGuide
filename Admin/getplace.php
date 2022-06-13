<?php
 //session_start();
 include("connection.php");
 header('Cache-Control: no cache'); //no cache
session_cache_limiter('private_no_expire'); // works
// //session_cache_limiter('public'); // works too
session_start();

 
 
?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <title>Explore</title>
    <style>
      body {background-color: #e6f3ff;}
.card-img-top {
    width: 100%;
    height: 15vw;
    object-fit: cover;
}

      </style>
  </head>
  <body>

  
<div class="container">


    <div class="row" >
        <!-- first card  -->
        <?php

        $division_name=$_POST['division_name'];
        $s="SELECT *FROM division WHERE place_division = '$division_name' ";
        $result = mysqli_query($conn, $s);
               
               if (mysqli_num_rows($result) > 0) {
               // output data of each row
               while($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="col-sm-6 col-md-4 col-lg-4 my-5">

            <div class="card">
                <img class="card-img-top" src="<?php echo $row['place_image'];?>" alt="Card image cap">
                <div class="card-body ">
                  <h5 class="card-title"><?php echo $row['place_name']; ?></h5>
                  <p style="text-overflow: ellipsis; overflow: hidden; width: 200px; height: 1.2em; white-space: nowrap;" class="card-text"><?php echo $row['place_description'];  ?></p>
                  <a href="singlepage.php?exploreid=<?php echo $row['place_id'];?> "  class="btn btn-success">Explore</a>
                </div>
              </div> 
        </div>
        <?php
               }
            }
            else echo "There is no data for this division!";
        ?>   
    </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>