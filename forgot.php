<?php
	include("header.php");
?>


<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
  <link rel="stylesheet" href="style.css">
  <script>
	function cpass()
	{
		var p1=f1.newpassword.value;
		var p2=f1.confirmpassword.value;
		if(p1!=p2)
		{
			alert("Password does not match");
		}
	}
</script>

</head>
<body><br><br>
  <div class="container1">
	<div class="screen">
		<div class="screen__content">
			<form class="login" action="forpassproc.php" method="POST" name="f1">
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" placeholder="Mobile Number" name="mobileno" required>
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" placeholder="Email" name="email" required>
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" placeholder="New Password" name="password" required>
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="text" class="login__input" placeholder="Confirm Password" name="confirmpassword" required onblur="cpass()">
				</div>
				<input type="submit" class="button login__submit" name="submit" value="submit">
					
					
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