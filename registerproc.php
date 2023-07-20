<?php
	$cn=mysqli_connect("localhost","root","","askme");
	session_start();

	$name = $_POST['name'];
	$mobileno = $_POST['mobileno'];
	$email = $_POST['email'];
	$password = $_POST['password'];


	$insert = $cn->query("INSERT INTO register(name, mobileno,email,password,usertype) VALUES('$name','$mobileno','$email','$password', 'user')");
	if($insert){
		$_SESSION['success'] = '';
		header('location:login.php');
	}else { ?>
	<div class="alert alert-success" style="background-color: red; color: white;">
    <strong>ERROR!</strong> This alert box could indicate a successful or positive action.
  </div>
	 <?php }
?>