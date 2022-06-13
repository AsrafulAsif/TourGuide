<?php
session_start();
if (isset($_SESSION['login'])) {
    header("location:exploreBydivision.php");
    die();
}


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TourGuide</title>
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
    <div class="center">
      <h1>Login</h1>
      <form action="Login.php" method="post">
        <div class="txt_field">
          <input type="text" required name="email" id="email" >
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input type="password" required name="password" id="password" >
          <span></span>
          <label>Password</label>
        </div>
        <div class="row">
          <div class="column">

          <input type="checkbox" name="remember" id="remember" value="1">
        <label class="pass" for="defaultUnchecked">Remember Me</label>

          </div>
          <div class="column"></div>


          <div class="pass">Forgot Password?</div>


        </div>
        
        
       
        <input type="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="signUp.php">Signup</a>
        </div>
      </form>
    </div>


    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <?php
    if(isset($_SESSION["error"])){

      ?>
      
      <script>
    
    
    swal({
  title: "Opps!!",
  text: "<?php echo $_SESSION["error"];?>",
  icon: "error",
  button: "Try Again!",
});
    
    
    </script>

<?php
unset($_SESSION['error']);
    }

    else{


    }
    

    ?>
    

  </body>


</html>
