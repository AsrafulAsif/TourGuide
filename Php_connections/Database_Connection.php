<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tourguide";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){

    die("Failed Connection");

}


?>