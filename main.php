<?php
 
?>

<html>
<head>
<meta charset="UTF-8" ></meta>
<title>Form</title>
<style>

header{
	height : 80px;
	background : grey;
	text-align : center;
	font-size : 40px;
    color: black;
	
}

footer{
	height : 40px;
	background : grey;
	text-align : center;
	font-size : 17px;
	
}

.grid{
	
	display : grid;
	grid-template-columns: 20% 60% 20%;
	
	
}

.grid > div{
	
	background: #dede;
	height: 500px;
	border: 1px solid blue;
	padding: 5px;
	text-align: center;
	
}
.grid > div:nth-child(even){
	
	
	background:#ddd;
}

.btn{
	
	padding: 5px;

	
}

.subgrid{
	display: grid;
	grid-template-columns: 1fr;
	text-align: center;

	
}

.d{
	
	border: 1px solid black;
}

.subgrid2{
	
	display: grid;
	grid-template-columns: 1fr;
	text-align: center;
	
}

.links{
	
	
	width: 100px;
}

</style>
</head>
<body>
<header> Welcome to registration Page</header>
<main>
<div class="grid">

<div class="subgrid">
Here is the Menu 
<div class="d">Home</div> 
<div class="d">Registration</div> 
<div class="d">About</div> 
<div class="d">Contact</div> 
 </div>

<div><form action="lab2.php" method="POST"> <h2>Registration Form </h2>
<br><br><br>
<input type="text" name="name" placeholder="Enter your Name" class="btn"> &nbsp; Username</input><br><br>
<input type="password" name="pass" placeholder="Enter your Password" class="btn"> &nbsp; Username</input><br><br><br>
<input type="Submit" name="name" value="Submit" class="btn"> </input>






</form>
</div>

<div class="subgrid2"> this is the right block
<div> here will be the image
<img src="download.jpg"  width="100px" height="100px"/>

</div>
<div> Links <br> <br>
<a href="www.google.com"/><input type="submit" value="Facebook" class="links"/><br>
<a href="www.google.com"/><input type="submit" value="Twitter" class="links"/><br>
<a href="www.google.com"/><input type="submit" value="Instagram" class="links"/><br>
<a href="www.google.com"/><input type="submit" value="Linkedin" class="links"/>

</div>








</div>



</div>

</main>
<footer> OShin@2018 powered by web class</footer>

</body>

</html>
