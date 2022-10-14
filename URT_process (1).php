<?php
if(isset($_POST['REGISTER']))
	print_r($_POST);
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pswd = md5($_POST['pswd']); 
	$gender = $_POST['gender'];

	$sql = "INSERT INTO uinfo VALUES('$name', '$email', '$pswd', '$gender')";
	$con = mysqli_connect("localhost","root","","bca30");

	if($con->query ( $sql ) == TRUE ) {
		
		echo "RECORD INSERTED SUCCESSFULLY.<br>";

		header("location:login2.php");
	}
	else{
		echo "ERROR: ". $con->error;
	}


?>
