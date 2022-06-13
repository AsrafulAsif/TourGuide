<?php
  session_start();
  if(!isset ($_SESSION['admin']))
  {
      header('location:admin_login.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link rel="stylesheet" href="admin.css">
</head>
<body>

               <!------Start------>
<?php
include('adminNavbar.php');
?>
<h3>Hi <?php echo $_SESSION['admin'] ; ?> Admin</h3>
     <h4>Welcome to tourguide admin panel</h4>
<div class="division">
   <a href="addingplace.php" class="my-button-hole">Add visiting place.</a>
</div>

             <!------End------->
</body>
</html>