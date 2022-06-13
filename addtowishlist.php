<?php

include 'Php_connections/Database_Connection.php';

if($_POST)
{

$placeimage=$_POST['placeimage'];
$placename=$_POST['placename'];
$desc=$_POST['desc'];
$exploreid=$_POST['exploreid'];
$userid=$_POST['userid'];




$sql = "INSERT INTO wishlist (user_id, explore_id,place_description,place_image,place_name ) 
VALUES ('$userid', '$exploreid','$desc','$placeimage','$placename')";

if($conn->query($sql) === TRUE){

    $_SESSION["wishlist"] = "OK";
	header("Location: singlepage.php?exploreid=$exploreid");
    exit();


}
else{
    echo "false";
	}

}
	

?>