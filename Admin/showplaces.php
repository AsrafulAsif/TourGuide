<?php
 session_start();
 include("connection.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Show places</title>
  <link rel="stylesheet" href="admin.css">
</head>
<body>
               <!------Start------>
<?php
include('adminNavbar.php');
?>

<div class="division">

    <!----------- For DHAKA ----------->
    <form action="getplace.php" method="post">
        <input type="hidden" name="division_name" value="Dhaka">
        <input type="submit"  value="Visiting place in Dhaka">
    </form>
    <!----------- For Chittagong ----------->
    <form action="getplace.php" method="post">
        <input type="hidden" name="division_name" value="Chittagong">
        <input type="submit"  value="Visiting place in Chittagong">
    </form>
    <!-- for Barisal -->
    <form action="getplace.php" method="post">
        <input type="hidden" name="division_name" value="Barisal">
        <input type="submit"  value="Visiting place in Barisal">
    </form>


    <!-- for Khulna -->
    <form action="getplace.php" method="post">
        <input type="hidden" name="division_name" value="Khulna">
        <input type="submit"  value="Visiting place in Khulna">
    </form>


    <!-- for Mymensingh  -->
    <form action="getplace.php" method="post">
        <input type="hidden" name="division_name" value="Mymensingh">
        <input type="submit"  value="Visiting place in Mymensingh">
    </form>


    <!-- for Rajshahi  -->
    <form action="getplace.php" method="post">
        <input type="hidden" name="division_name" value="Rajshahi">
        <input type="submit"  value="Visiting place in Rajshahi">
    </form>


    <!-- for Rangpur  -->
    <form action="getplace.php" method="post">
        <input type="hidden" name="division_name" value="Rangpur">
        <input type="submit"  value="Visiting place in Rangpur">
    </form>

    <!-- for Sylhet -->
    <form action="getplace.php" method="post">
        <input type="hidden" name="division_name" value="Sylhet">
        <input type="submit"  value="Visiting place in Sylhet">
    </form>

    

   <!-- <a href="#" class="my-button-hole">Visiting place  In <br> Dhaka.</a>
   <a href="#" class="my-button-hole">Visiting place In Chittagong.</a>
   <a href="#" class="my-button-hole">Visiting place In Barisal.</a>
   <a href="#" class="my-button-hole">Visiting place In Khulna.</a>
   <a href="#" class="my-button-hole">Visiting place In Mymensingh.</a>
   <a href="#" class="my-button-hole">Visiting place In Rajshahi.</a>
   <a href="#" class="my-button-hole">Visiting place In Rangpur.</a>
   <a href="#" class="my-button-hole">Visiting place In Sylhet.</a> -->
</div>

             <!------End------->
</body>
</html>