<?php
	include("header.php");
	if(isset($_POST['submit']))
	{
		$cn=mysqli_connect("localhost","root","","askme");			
		$business_type = $_POST['business_type'];
		$business_name = $_POST['business_name'];
		$contact_person= $_POST['contact_person'];
		$mobileno = $_POST['mobileno'];
		$Area = $_POST['Area'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		if (empty($_FILES['photo']['name']))
		{		
			$q=mysqli_query($cn,"insert into addinfo(business_type,business_name,contact_person,mobileno,Area,city,state,photo) values ('$business_type','$business_name','$contact_person','$mobileno','$Area','$city','$state','default.jpg')");
		}
		else
		{					
			$filename = $_FILES['photo']['name'];
			$tempname = $_FILES['photo']['tmp_name'];    
			$folder = "../image/".$filename;		
			move_uploaded_file($tempname, $folder);
			$q=mysqli_query($cn,"insert into addinfo(business_type,business_name,contact_person,mobileno,Area,city,state,photo) values ('$business_type','$business_name','$contact_person','$mobileno','$Area','$city','$state','$filename')");
		}	
	}
?>
<html>
<body>

<form method="POST" action="addinfo.php" enctype="multipart/form-data">
<table align="center" border="0">
<tr>
	<td>Enter business_type: </td><td><input type="text" name="business_type" required></td>
</tr>
<tr>
	<td>Enter business_name :</td><td><input type="text" name="business_name" required></td>
</tr>
<tr>
	<td>Enter contact_person	:</td><td><input type="text" name="contact_person" required></td>
</tr>
<tr>
	<td>Enter mobileno	:</td><td><input type="text" name="mobileno" required></td>
</tr>
<tr>
	<td>Enter Area	:</td><td><input type="text" name="Area" required></td>
</tr>
<tr>
	<td>Enter city	:</td><td><input type="text" name="city" required></td>
</tr>
<tr>
	<td>Enter state	:</td><td><input type="text" name="state" required></td>
</tr>
<tr>
   	 <td>upload photo	:</td> <td><input type="file" name="photo"></td>
	
</tr>
<tr>
	<td colspan="2" align="center"> <input type="submit" name="submit" value="Submit">
</tr>



</table>
</form>





</body>
</html>

<?php
	include("footer.php");
?>


