 <?php
 
 include 'Php_connections/Database_Connection.php';

$email=$_POST['email'];
$password=$_POST['password'];
$secretkey="TourGuide";
$password_encrypted=sha1($password.$secretkey);

$sql = mysqli_query($conn, "SELECT count(*) as total from registration WHERE Email = '".$email."' and 
	EPassword = '".$password_encrypted."'");

$row = mysqli_fetch_array($sql);

if($row["total"] > 0){
	?>
	<script>
		alert('Login successful');
	</script>
	
	<?php

header("Location: exploreBydivision.html");
exit();
}
else{
	?>
	<script>
		alert('Login failed');
	</script>
	<?php
}
 
 
 ?>