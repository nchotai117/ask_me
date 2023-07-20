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

<body><br>
	<button onclick="history.back()" style="background-color:#4C489D;color:white;width: 200px;border-radius:15px;border-size: 2px;font-weight: bolder;">Go Back</button>
		
	<?php
	
	$query = mysqli_query($cn,"select * from addinfo where business_type='".$_GET['type']."'");
	while($r = mysqli_fetch_array($query))
	{
				echo"<div class='container'>";
				echo"<table width='100%' border='1px' height='300px'>";
				echo "<tr><td width='50%'><center><img src=image/".$r[6]." height=250px width=250px></center></td>";
				echo"<td><center><b><h1>".$r[2]."</b></h1>";
				echo"<b><h3>Contact No:-".$r[3]."</b></h3>";
				echo "<a href='Infomore.php?id=$r[0]'><b>Read more.....</b></a></center></td></tr>";
				echo"<br><br>";
	}
	?>
	
</body>
<br><br><br><br>
</html>


