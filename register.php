<?php
	include("header.php");
?>


<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
  <link rel="stylesheet" href="style.css">
</head>
<body><br><br>
  <div class="container1">
	<div class="screen">
		<div class="screen__content">
			<form class="login" action="registerproc.php" method="POST">
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" placeholder="User Name" name="name" required>
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" placeholder="Mobile Number" name="mobileno" required>
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" placeholder="Email" name="email" required>
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" placeholder="Password" name="password" required>
				</div>
				<button class="button login__submit">
					<span class="button__text">Register</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
			</form>
			<div class="social-login">
				<h3>Already have an Account?</h3>
				<div class="social-icons">
					<a href="login.php" class="social-login__icon">Login Now</a>
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