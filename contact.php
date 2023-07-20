<?php
	include("header.php");
	if(!isset($_SESSION["mobileno"]))
	{
		header('location:login.php');
	}
	 
?>
<html>

<body><br>
	<button onclick="history.back()" style="background-color:#4C489D;color:white;width: 200px;border-radius:15px;border-size: 2px;font-weight: bolder;">Go Back</button>
	<center><h1>Contact Us </h1></center>
	<form method="post" action="login.php"><br>
	<center>
	<table border=0 width="100%">
	<tr>
		<td width=30% align=center><font color=purple size=+2><b>Bhakti Gandhi</b><br>Mo:- 9428249307
			<font color=purple><br>bhaktigandhi343@gmail.com</td>
		</td>
		<td width=10px></td>
			<td width=30% align=center><img src="askme logo.png" height="300" width="300"></td>
		<td width=10px></td>
		<td width=30% align=center><font color=purple size=+2><b>Nishchal chotai</b><br>Mo:- 9426845950
			<font color=purple><br>nishchalchotaii4@gmail.com</td>
		</td>
	</tr>
</table>
</form>
<br><br><br><br>         
<?php include("footer.php");?>   
</html>