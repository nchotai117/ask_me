<?php
	
	$cn=mysqli_connect("localhost","root","","askme");
	if(isset($_POST['submit']))
	{
		$mobileno= $_POST['mobileno'];
		$email = $_POST['email'];
		$password= $_POST['password'];
		$confirmpassword=$_POST['confirmpassword'];
		
		$query=mysqli_query($cn,"select mobileno from register where email='$email' and mobileno='$mobileno'");
		if(mysqli_num_rows($query)!=0)
		{
			 $query=mysqli_query($cn,"UPDATE  register SET password =  '$password' WHERE mobileno = '$mobileno'");
			 echo "<script> alert('Password Updated Successfully....')</script>";
		}
		else
		{
			 echo "<script> alert('Email and Mobile No not matched')</script>";
		}
	}
	 echo "<script>window.location='login.php'</script>";	
?>