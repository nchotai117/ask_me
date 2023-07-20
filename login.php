
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
			<form class="login" action="loginproc.php" method="POST">
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" placeholder="Mobile Number" name="mobileno" required>
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" placeholder="Password" name="password" required>
				</div>
				<button class="button login__submit">
					<span class="button__text">Log In Now</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>	<br>			
				<a href="forgot.php">Forgot Password??</a>
			</form>
			<div class="social-login">
				<h3>Don't have an Account</h3>
				<div class="social-icons">
					<a href="register.php" class="social-login__icon">Create Account</a>
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

<?php
	include("footer.php");
?>
