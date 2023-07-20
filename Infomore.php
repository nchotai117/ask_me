<?php
	include("header.php");
	if(isset($_GET['id']))
	{
		$cn=mysqli_connect("localhost","root","","askme");			
				
	}	
?>
<html><head> <link rel="stylesheet" href="style.css"></head>
<body><br>
	<button onclick="history.back()" style="background-color:#4C489D;color:white;width: 200px;border-radius:15px;border-size: 2px;font-weight: bolder;">Go Back</button>
	<?php
	$query = mysqli_query($cn,"select * from addinfo where id='".$_GET['id']."'");
	while($r= mysqli_fetch_array($query))
	{
		echo"<div class='container'>
				<table class='table' border='5px' bordercolor='#4C489D' height='200px'>
				<tr><center><b><font color='#4C489D'><h1>".$r[2]."</b></font></h1></center></tr><br>
				<tr><center><img src='image/".$r[6]."' width='500px' height='500px'></center></tr><br><br>
				<tr><td width='40%'><center><font color='#4C489D'><h3>Contact Number:-</center></h3></td>
					<td><h3><center>".$r[3]."</font></h3></center></td></tr>
				<tr><td><center><font color='#4C489D'><h3>Address:-</td></center></h3>
					<td><h3><center>".$r[4]."</font></h3></center></td></tr>
				<tr><td><center><font color='#4C489D'><h3>City:-</td></center></h3>
					<td><h3><center>".$r[5]."</font></h3></center></td></tr>";
	}
?>

</body>
</html>

