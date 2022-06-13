<?php
require('config.php');
if(isset($_POST['stripeToken'])){
	\Stripe\Stripe::setVerifySslCerts(false);

	$token=$_POST['stripeToken'];

	$data=\Stripe\Charge::create(array(
		"amount"=>500,
		"currency"=>"usd",
		"description"=>"Payment System Desc",
		"source"=>$token,
	));

	header("Location: Thankyou.php");
exit();
}
?>