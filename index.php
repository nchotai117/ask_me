<?php
	include("header.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
	
</head>

		
		<script>
		//Using setTimeout to execute a function after 5 seconds.
			/*setTimeout(function () 
			{
   				//Redirect with JavaScript
   				window.location.href= 'http://localhost/ask_me/login.php/php-forcing-https-over-http/';
			}, 1500);*/
		</script>
	
	
 

<body>
<div class="container">
	<div>
		<center> <a href="index.php"><img src="askme logo.png" height="300" width="300"></center>	</a>
	</div>
	</div>
	<br><br>
	 <div class="text-center">
	 <div class="search-container">
    	<form action="info.php" method="GET">
	
		  <select name="type" class="search2" type="text">
				<option value="0">Select Business</option>
					<?php
						$q=mysqli_query($cn,"select business_type from business_type");
						while($r=mysqli_fetch_array($q))
						{
							echo "<option value='".$r[0]."'>".$r[0]."</option>";
						}
					?>
			</select>
  		<button type="submit" class="button2">Submit</button>
	</form>
	
	
	<br><br><br><br>
	
            	<a href="info.php?type=Doctor"><button type="button" class="button2">Doctor</button></a>
            	<a href="info.php?type=Movies"><button type="button" class="button2">Movies</button></a>
            	<a href="info.php?type=Medical"><button type="button" class="button2">Medical</button></a>
            	<a href="info.php?type=Electricians"><button type="button" class="button2">Electricians</button></a>
			<a href="info.php?type=Hotels"><button type="button" class="button2">Hotels</button></a>
			<a href="info.php?type=Education"><button type="button" class="button2">Education</button></a>
			<a href="info.php?type=Jewellery"><button type="button" class="button2">Jewellery</button></a>
			<a href="info.php?type=Fitness"><button type="button" class="button2">Fitness</button></a>
			<a href="info.php?type=Engineers"><button type="button" class="button2">Engineers</button></a>
			<a href="info.php?type=Flights"><button type="button" class="button2">Flights</button></a>
			<a href="info.php?type=Language classes"><button type="button" class="button2">Language</button></a>
			<a href="info.php?type=Sports"><button type="button" class="button2">Sports</button></a>
			<a href="info.php?type=Shopping"><button type="button" class="button2">Shopping</button></a>
			<a href="info.php?type=Real Estate"><button type="button" class="button2">Real Estate</button></a>
	
        </div>
</div>
		
</body>
<br><br><br><br>
<?php
	include("footer.php");
?>
</html>


