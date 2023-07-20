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
<html>

<body>
	<button onclick="history.back()" style="background-color:black;color:white;width: 200px;border-radius:15px;border-size: 2px;font-weight: bolder;">Go Back</button>
	
	
	<?php
		
		$q = mysqli_query($cn,"select * from addinfo where business_type='".$_GET['type']."'");
			while($r = mysqli_fetch_array($q))
			{
				echo"<div class='container'>";
				echo"<table class='table' >";
				echo"<center><h1>".$r[2]."</h1></center>";
				echo "<center><img src=image/".$r[4]." height=300px width=300px></center>";
				echo"<center><h3>".$r[3]."</h3></center>";
				echo "<center><a href='Infomore.php?id=$r[0]'>Read more.....</a></center>";
			}
	?>
	
</body>
<br><br><br><br>
</html>

