<?php
	$cn=mysqli_connect("localhost","root","","askme");
	
	
		$name = $_POST['name'];
		$mobile_no = $_POST['mobile_no'];		
		$feedback = $_POST['feedback'];


	$q=mysqli_query($cn,"insert into feedback values('','$name','$mobile_no','$feedback')");
	echo "<script> alert('Record Inserted Successfully....')</script>";
	echo "<script>window.location='feedback.php'</script>"
		
	
?>