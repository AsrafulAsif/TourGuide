<?php

session_start();

include 'connection.php';

if($_GET)
{

$exploreid=$_GET['exploreid'];






$sql = "DELETE FROM division WHERE place_id='$exploreid'";

if($conn->query($sql) === TRUE){

   
	header("Location: index.php");
    exit();


}
else{
    echo "false";
	}

}
	

?>