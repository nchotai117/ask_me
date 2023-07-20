<?php
	$cn=mysqli_connect("localhost","root","","askme");
	
	session_start();

	$mobileno= $_POST['mobileno'];
	$password = $_POST['password'];

	$login = $cn->query("SELECT * FROM register WHERE mobileno='$mobileno' AND password='$password'");

	$fetch = $login->fetch_array();
	if($login->num_rows == 1)
	{
		if($fetch['usertype'] == 'admin')
		{
			$_SESSION['mobileno'] = $fetch['mobileno'];
			header('location:admin/index.php');
		}
		elseif ($fetch['usertype'] == 'user')  
		{
			$_SESSION['mobileno'] = $fetch['mobileno'];
			header('location:index.php');
		}	
	}
	else 
	{
		?>
			<div class="alert alert-success" style="background-color: red; color: white;">
	    		<strong>ERROR!</strong>incorrect password..
  			</div>
		 <?php 
		$_SESSION['error'] = '';
	}
?>