<?php

include 'Php_connections/Database_Connection.php';

$email=$_POST['email'];
$Phonenumber=$_POST['Phonenumber'];
$uname=$_POST['uname'];
$password=$_POST['password'];
$secretkey="TourGuide";
$password_encrypted=sha1($password.$secretkey);


$sql = "INSERT INTO registration (Email, PhoneNumber, UserName, EPassword) 
VALUES ('$email', '$Phonenumber', '$uname' , '$password_encrypted')";

if($conn->query($sql) === TRUE){
	?>
	<script>
		alert('Values have been inserted');
	</script>
	<?php

header("Location: LoginPage.html");
exit();


}
else{
	?>
	<script>
		alert('Values did not insert');
	</script>
	<?php
	}
	

?>