<?php
 include 'Php_connections/Database_Connection.php';
session_start();


if (!isset($_SESSION['login'])) {
    header("location:loginpage.php");
    die();
}

$user_check = $_SESSION['login'];

$ses_sql = mysqli_query($conn, "SELECT * FROM registration WHERE id = '$user_check' ");

$user = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);
    
    $fname = $user['UserName'];
    $email = $user['Email'];
    $phone = $user['PhoneNumber'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="profile.css">
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
                <input class="form-control mr-sm-2" onkeyup="showResult(this.value)" type="search" placeholder="Search"
                    aria-label="Search">

                <ul class="result_Box" id="result"></ul>
            </form>
            <ul class="navbar-nav p-2">
                <li class="nav-item">
                    <a href="logout.php" class="btn btn-danger my-2 my-sm-0" type="submit">Logout</a>
                </li>
            </ul>
        </div>
    </nav>




    <div class="container m-t-10">
        <div class="row">
            <div class="col-md-12">
                <div class="card user-card">
                    <div class="card-header">
                        <h5>User Profile</h5>
                    </div>
                    <div class="card-block">
                        <div class="user-image">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="img-radius"
                                alt="User-Profile-Image">
                        </div>
                        <h6 class="f-w-600 m-t-25 m-b-10"><?php echo $fname; ?></h6>
                        <hr>


                        <div class="user-tab text-center">
                            <ul class="nav nav-tabs justify-content-center" role="tablist">
                                <li role="presentation" class="active">
                                    <a class="active show" href="#user-info" aria-controls="user-info" role="tab"
                                        data-toggle="tab" aria-selected="true">Account Information</a>
                                </li>
                                <li role="presentation"><a href="#user-wishlist" aria-controls="user-wishlist"
                                        role="tab" data-toggle="tab" class="" aria-selected="false">Wishlist</a></li>
                            </ul>
                            <div class="tab-content text-left">
                                <div role="tabpanel" class="tab-pane fade active show" id="user-info">
                                    <div class="row">

                                        <div class="col-md-6 col-lg-12">


                                            <div class="bg-c-blue counter-block m-t-10 p-20">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <i class="fas fa-phone"></i>
                                                        <p><?php echo  $phone; ?></p>
                                                    </div>
                                                    <div class="col-4">
                                                        <i class="fas fa-envelope"></i>
                                                        <p><?php echo $email; ?></p>
                                                    </div>
                                                    <div class="col-4">
                                                        <i class="fas fa-map"></i>
                                                        <p>Shukrabaad, Dhanmondi, Dhaka</p>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div><!-- /.row -->
                                </div><!-- /.tab-pane -->
                                <div role="tabpanel" class="tab-pane fade in" id="user-wishlist">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-12">

                                            <div class="row">
                                                <?php
                                                    $user=$_SESSION['login'];
                                                    $c="SELECT * FROM wishlist WHERE user_id = '$user' ";
                                                    $wish = mysqli_query($conn, $c);
                                                        
                                                        if (mysqli_num_rows($wish) > 0) {
                                                        // output data of each row
                                                        while($wishrow = mysqli_fetch_assoc($wish)) {
                                                    ?>

                                                <div
                                                    class="col-12 col-sm-8 col-md-6 col-lg-3 d-flex align-items-stretch">
                                                    <div class="card">
                                                        <img class="card-img-top"
                                                            src="admin/<?php echo $wishrow['place_image'];?>"
                                                            alt="card image">
                                                        <div class="card-body d-flex flex-column ">
                                                            <h4 class="card-title"><?php echo $wishrow['place_name']; ?>
                                                            </h4>
                                                            <p class="card-text shortdes">
                                                                <?php echo $wishrow['place_description'];  ?> </p>
                                                            <a href="singlepage.php?exploreid=<?php echo $wishrow['explore_id'];  ?>"
                                                                class="btn btn-primary mt-auto btn-block "
                                                                role="button">Explore</a>

                                                                <form method="post" action="deletewishlist.php" name="form">
                                                                <input type="hidden" value="<?php echo $wishrow['wishlist_id']; ?>"  name="wishlistid">
                                                                

                                                                <button type="submit" class="btn btn-danger mt-2 btn-block ">Remove</button>
                                                                
                                                                </form>

                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                                    }
                                                    }
                                                    else {
                                                        ?>
                                                         <div class="alert alert-success mt-2">
                                                <strong>There is no item in your wishlist!</strong> <a href="exploreBydivision.php" class="alert-link">Visit Explore Page.</a>.
                                            </div>
                                            <?php
                                                    }
                                                ?>
                                            </div>

                                        </div>

                                    </div><!-- /.row -->
                                </div><!-- /.tab-pane -->

                            </div>
                        </div><!-- /.user-tab -->

                        <hr>

                    </div>
                </div>
            </div>

        </div>

    </div>
    <script type="text/javascript" src="searchscript.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<?php
if(isset($_SESSION["wishlist_delete"])){

  ?>
  
  <script>

swal({
title: "DELETED!!",
text: "<?php echo $_SESSION["wishlist_delete"];?>",
icon: "success",
button: "OK",
});


</script>

<?php
unset($_SESSION['wishlist_delete']);
}

else{


}


?>

</body>

</html>