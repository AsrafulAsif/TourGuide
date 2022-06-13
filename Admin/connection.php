<?php
$servername="localhost";
$username="root";
$password="";
$dbname="tourguide";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
   //echo "ok";

}
else{
    echo "connection failed";
}

?>