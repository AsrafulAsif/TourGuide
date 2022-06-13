<?php
include 'Php_connections/Database_Connection.php';


  $q = $_GET["q"];

  $sql=" SELECT * FROM division WHERE place_name like '%".$q."%'  ";

  $result = mysqli_query($conn, $sql);

  $count=mysqli_num_rows($result);
  if($count>=1){


 
  while ($row = mysqli_fetch_assoc($result))
  {
     
  
    echo "<li>".$row["place_name"]."<a href='singlepage.php?exploreid=".$row["place_id"]."'>--Explore</a></li>";

 
  }

}
  
  else {

echo "No result found!";
  }

 
  ?>