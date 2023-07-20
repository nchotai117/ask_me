<?php
	session_start();
	if(!isset($_SESSION["mobileno"]))
	{
		header('location:login.php');
	}
	include("header.php");
	/*if(isset($_GET['id']))
	{
		$cn=mysqli_connect("localhost","root","","askme");			
				
	}*/	
?>
<html>
<body>
	<button onclick="history.back()" style="background-color:#4C489D;color:white;width: 200px;border-radius:15px;border-size: 2px;font-weight: bolder;">Go Back</button>
	<table style="width:90%;margin:10px" border="1" align="center">	
	<?php
	$cnt = 0;
	$query = mysqli_query($cn,"select * from addinfo where business_type like '%".$_GET['type']."%' or city like '%".$_GET['type']."%'");
	while($r = mysqli_fetch_array($query))
	{
				echo"<div class='container'>";
				echo"<table width='100%' border='1px' height='300px'>";
				echo "<tr><td width='50%'><center><img src=image/".$r[4]." height=250px width=250px></center></td>";
				echo"<td><center><b><h1>".$r[2]."</b></h1>";
				echo"<b><h3>Contact No:-".$r[3]."</b></h3>";
				echo "<a href='Infomore.php?id=$r[0]'><b>Read more.....</b></a></center></td></tr>";
				echo"<br><br>";
	}
	?>
	
	</table>
	<?php
	/*$query = mysqli_query($cn,"select * from feedback");
	while($rec = mysqli_fetch_array($query))
	{
		echo "<tr><td><a href='delfeedback.php?id=".$rec[0]."'>Delete</a></td><td>".$rec[0]."</td><td>".$rec[1]."</td><td>".$rec[2]."</td><td>".$rec[3]."</td><td>".$rec[4]."</td></tr>";	
	}*/
	?>
	</table>

</body>
</html>

<?php
	include("footer.php");
?>