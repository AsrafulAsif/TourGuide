 <?php

 session_start();
 
 include 'Php_connections/Database_Connection.php';

$email=$_POST['email'];
$password=$_POST['password'];
$secretkey="TourGuide";
$rememberme=$_POST['remember'];
$password_encrypted=sha1($password.$secretkey);

$sql = mysqli_query($conn, "SELECT count(*) as total from registration WHERE Email = '".$email."' and 
	EPassword = '".$password_encrypted."'");

$row = mysqli_fetch_array($sql);

$login = "SELECT id FROM registration WHERE Email = '$email' and EPassword = '$password_encrypted'";

$result = mysqli_query($conn, $login);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$id = $row['id'];

$count = mysqli_num_rows($result);

if ($count == 1) {
	if(isset($rememberme)){
		setcookie('emailcookie',$email, time()+86400 * 30);
		setcookie('passwordcookie',$password_encrypted, time()+86400 * 30);
	}
	$_SESSION["login"]=$id;

header("Location: exploreBydivision.php");
exit();
}
else{
	$_SESSION["error"] = "Login Failed";
	header("Location: LoginPage.php");
    exit();
}
 
 
 ?>