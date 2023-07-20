<?php
	$cn=mysqli_connect("localhost","root","","Demo");
	
	session_start();
	session_unset();	
	header('location:index.php');
?>