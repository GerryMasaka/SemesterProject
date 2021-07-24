<?php


include('dbconnection.php');  


if(isset($_POST["submit"])){
	$email=$_POST["email"];
	$password=$_POST["password"];
	

	$sql="UPDATE tlclient SET password='$password' WHERE email='$email'";
if(mysqli_query($conn,$sql)){
	echo ("<SCRIPT LANGUAGE='JavaScript'>
	window.alert('password successfully changed')
	window.location.href='Registration.php';
	</SCRIPT>");

	}
	else{
		echo'<script type="text/javascript">alert("Password Not Updated")</script>';
	}
}

?>