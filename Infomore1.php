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
	<tr><td width='40%'><center><font color='#4C489D'><h3>Contact Number:-</center></h3></td>
					<td><h3><center>".$r[3]."</font></h3></center></td></tr>
				<tr><td><center><font color='#4C489D'><h3>Address:-</td></center></h3>
					<td><h3><center>".$r[5]."</font></h3></center></td></tr>";
	}
?>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="login.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="lock.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="mm1.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html>

