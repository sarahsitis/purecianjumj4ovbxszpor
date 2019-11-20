<?php 
if(isset($_POST['send'])){
	ini_set( 'display_errors',1);
	error_reporting( E_ALL );

	$admin = "pure.cianjur@gmail.com";
	$name = htmlentities($_POST['name']);
	$email = htmlentities($_POST['email']);
	$subject = 'Cust Message';
	$message = htmlentities($_POST['message']);

	$sender = 'From:'.$name.' <'.$email.'>';

	if(mail($admin, $subject, $message, $sender)){
		echo "<script>alert('Message sent!')</script>";
		header("Location:index.html");
	}

}else{
	header("Location:index.html");
}
?>
