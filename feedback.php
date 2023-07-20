<?php
	include("header.php");
	if(!isset($_SESSION["mobileno"]))
	{
		header('location:login.php');
	}
	if(isset($_GET['type']))
	{
		$cn=mysqli_connect("localhost","root","","askme");			
			
	}
?>


<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
  <link rel="stylesheet" href="style.css">
</head>
<body><br><br>
<button onclick="history.back()" style="background-color:#4C489D;color:white;width: 200px;border-radius:15px;border-size: 2px;font-weight: bolder;">Go Back</button>
	
  <div class="container1">
	<div class="screen">
		<div class="screen__content">
			<form class="login" action="feedbackproc.php" method="POST">
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" placeholder="Name" name="name" required>
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" placeholder="Mobile Number" name="mobile_no" required>
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="feedback" class="login__input" placeholder="Feedback" name="feedback" required>
				</div>
				<button class="button login__submit">
					<span class="button__text">submit</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
			</form>
			<div class="social-login">
				<div class="social-icons">
				</div>
			</div>
		</div>
		<div class="screen__background">
			
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>

</body>
</html>