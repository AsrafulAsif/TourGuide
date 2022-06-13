<?php
session_start();


  $msg = "";

  if (isset($_POST['submit'])) {       
      $email = $_POST['email'];
      $Phone_number = $_POST['Phone_number'];
      $full_name = $_POST['full_name'];
      $password = $_POST['password'];

      if (empty($email) || empty($Phone_number) || empty($full_name) || empty($password)) {
          $msg = "<div class='alert alert-danger'>All fields are required.</div>";
      }else {
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $msg = "<div class='alert alert-danger'>Enter a valid email.</div>";
          }else {             
                if(!preg_match("/^[0-9]{11}$/", $Phone_number))
                  {
                    $msg = "<div class='alert alert-danger'>Enter a valid phone number.</div>";
                  } else {
                         if (strlen($_POST["password"]) <= '8') {
                           $msg = "<div class='alert alert-danger'>Your Password Must Contain At Least 8 Characters!</div>";
                           } else {              
                            include 'Php_connections/Database_Connection.php';

                            $email=$_POST['email'];
                            $Phonenumber=$_POST['Phone_number'];
                            $uname=$_POST['full_name'];
                            $password=$_POST['password'];
                            $secretkey="TourGuide";
                            $password_encrypted=sha1($password.$secretkey);
                            
                            
                            $sql = "INSERT INTO registration (Email, PhoneNumber, UserName, EPassword) 
                            VALUES ('$email', '$Phonenumber', '$uname' , '$password_encrypted')";
                            
                            if($conn->query($sql) === TRUE){
                             
                              $_SESSION["success"] = "Registration Successful";
                              header("Location: signUp.php");
                                exit();

                            
                            
                            
                            }
                            else{
                              ?>
<script>
alert('Values did not insert');
</script>
<?php
                              }
                  }
              }
          }
      }
  }
  


        ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style_Registration.css">
</head>

<body>
    <div class="center">
        <h1>Sign UP</h1>
        <?php  echo $msg; ?>
        <form method="post">
            <div class="txt_field">
                <input type="text" name="email" class="input" id="email"
                    value="<?php if (isset($_POST['submit'])) { echo $email; } ?>" required>
                <span></span>
                <label for="email" class="input-label">Enter your email</label>
            </div>
            <div class="txt_field">
                <input type="text" name="Phone_number" class="input" id="Phone_number"
                    value="<?php if (isset($_POST['submit'])) { echo $Phone_number; } ?>" required>
                <span></span>
                <label for="Phone_number" class="input-label">Enter your phone number</label>
            </div>
            <div class="txt_field">
                <input type="text" name="full_name" class="input" id="full_name"
                    value="<?php if (isset($_POST['submit'])) { echo $full_name; } ?>" required>
                <span></span>
                <label for="full_name" class="input-label">Enter your user name</label>
            </div>
            <div class="txt_field">
                <input type="password" name="password" class="input" id="password"
                    value="<?php if (isset($_POST['submit'])) { echo $password; } ?>" required>
                <span></span>
                <label for="password" class="input-label">Enter your password</label>
            </div>
            <input type="submit" name="submit" value="Signup">
            <div class="signup_link">
                Already a member? <a href="LoginPage.php">Login</a>
            </div>
        </form>
    </div>


    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



    <?php
    if(isset($_SESSION["success"])){

      ?>

    <script>
    swal({
            title: 'Registration Success',
            text: 'Redirecting...',
            icon: 'success',
            timer: 3000,
            buttons: false,
        })
        .then(function() {
            window.location = "LoginPage.php";
        });
    </script>

    <?php
unset($_SESSION['success']);
    }

    else{


    }
    

    ?>








</body>

</html>