<?php

session_start();

include 'Php_connections/Database_Connection.php';

if($_POST)
{

$wishlistid=$_POST['wishlistid'];






$sql = "DELETE FROM wishlist WHERE wishlist_id='$wishlistid'";

if($conn->query($sql) === TRUE){

    $_SESSION["wishlist_delete"] = "Wishlist is Deleted from your list.";
	header("Location: profile.php");
    exit();


}
else{
    echo "false";
	}

}
	

?>