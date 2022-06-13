
<?php
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
                                $msg = "<div class='alert alert-success'>Register successfully completed.</div>";
                                $email = "";
                                $Phone_number = "";
                                $full_name = "";
                                $password = "";
                    }
                }
            }
        }
    }
?>