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
	<center><h1><b>About Us</b></h1></center>
	
    
    <h3 style="text-align: center;"><b>Welcome To Ask me</b></h3>
    <justify><p>Ask me is a Professional local search engine Platform.</p>
<p>Here we will provide you only interesting content, which you will like very much.</p>
<p> We're dedicated to providing you the best of local search engine, with a focus on dependability and address and contact of all bussiness.</p>
<p> We're working to turn our passion for local search engine into a booming online website</p>.
<p> We hope you enjoy our local search engine as much as we enjoy offering them to you.</p>
<p>I will keep posting more important posts on my Website for all of you. Please give your support and love.</p>
<p>Thanks For Visiting Our Site<br><br>
<p>Have a nice day!</p></justify>
    <br><br><br><br>          
<?php include("footer.php");?> 
</html>  