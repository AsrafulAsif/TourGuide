<?php
include("connection.php");



if (isset($_POST['submit'])) {
  $exploreid=$_POST['exploreid'];
  $p_latitude=$_POST['platitude'];
  $p_longitude=$_POST['plongitude'];
  $p_address=$_POST['paddress'];

  $d_name = $_POST['dname'];
  $p_name = $_POST['pname'];


  $p_info = $_POST['pinfo'];


  $sql = "UPDATE division SET place_division='$d_name',place_name='$p_name',place_address='$p_address',place_log='$p_longitude',place_lat='$p_latitude',place_description='$p_info'
   WHERE place_id = $exploreid ";
  mysqli_query($conn, $sql);

 
  header("Location: editplace.php?exploreid=$exploreid");
  
  
}
//mysqli_close($conn);

?>
