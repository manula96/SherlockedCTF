<?php

	//start session
	session_start();
	mysqli_connect('localhost','root','','sherlocked');
	header( "refresh:28800;url=TotalMarks.php" );
	//mysql_select_db('sherlocked');
	if(isset($_POST['usbdump']))
	{
		if($_POST['psw']=="BaskervilleIsHaunted")
		{
			echo 
			"<script> alert('Login Sucess!..Good Luck With the Next Level..')
			window.location.href = 'level7.php'</script>";
			 			
		}
		else
		{
			
			echo "<script> alert('Login Failed..Try again')
			window.location.href = 'level6.php' </script>";
			
		}
		
	}
	else
	{
		echo "<script> alert('YOU SNEAKY LITTLE BRAT!! HOPE YOU HAVE THE PASSWORDS NOTED DOWN!')
				window.location.href = 'firstphp.php' </script>";
		
	}
?>

<!DOCTYPE html>
<html>
<title>Level 5</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>

body, h1,h3,h4,h5,h6 {font-family: "Times New Roman"}

button{
    background-color: #111;
    padding: 10px 18px;
    border-style: solid;
    border-color: #111;
    font-size: 12px;
    color: #818181;
    display: block;
    transition: 0.3s;
    width:120px;
}
.button1{
    background-color: #111;
    padding: 10px 10px;
    border-style: solid;
    border-color: #111;
    font-size: 12px;
    color: #818181;
    display: block;
    transition: 0.3s;
    width:10px;
}
button:hover {
     color: #f1f1f1;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 25%; /* Could be more or less, depending on screen size */
}
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}
@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
.container {
    padding: 16px;
	background-color:rgb(192,192,192);
}
.btn1 {
	
	background-color: #111;
    padding: 10px 54px;
    border-style: solid;
    border-color: #111;
    font-size: 20px;
    color: #818181;
    display: block;
    transition: 0.3s;
    width:300PX ;
    text-align: justify;
	
}
.btn2 {
	
	background-color: #111;
    padding: 10px 10px;
    border-style: solid;
    border-color: #111;
    font-size: 20px;
    color: #818181;
    display: block;
    transition: 0.3s;
    width:30PX ;
    
	
}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 220px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */

/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) 
#main1 {
    transition: margin-left .5s;
    padding: 16px ;
	
    position: fixed;
    up: 0;
    
    color: #f1f1f1;
    width: 100%;
}
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 25%; /* Could be more or less, depending on screen size */
}
div.background {
  background: url(dog.png) repeat;
  width:100%;
  height:100%;
}

div.transbox {
  margin: 1px 240px 50px;
  width : 100%;
  height:100%;
  background-color: #ffffff;
  border: 1px solid ;
  opacity: 0.2;
  filter: alpha(opacity=60); /* For IE8 and earlier */
}

div.transbox p {
  margin: 5%;
  font-weight: bold;
  color: #000000;
}
body {
    background-image: url("dog.png");
}
h2{
	
	
	font-family:italic;
}
.sidenav {
    height: 100%;
    width:0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    background-color: #111;
    padding: 0px 18px;
    border-style: solid;
    border-color: #111;
    font-size: 12px;
    color: #818181;
    display: block;
    transition: 0.3s;
    width:auto;
	text-decoration:none;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 20px;
    margin-left: 50px;
}
</style>
<body>



<!-- Page Content -->
<div class="w3-padding-large" id="main1">
  <!-- Header/Home -->
    <header class="w3-container w3-padding-32 w3-center " id="home">
	<h5 style="color:rgb(255, 255, 255)" id="demo"></h5>
    <h1 class="w3-jumbo" font-family:bold style="color:white"><span class="w3-hide-small">You have reached the locked safe! </br><img src="safe.png"> </h1>
		<h2 style="color:rgb(255, 255, 255)" >LEVEL 7 </h2>

	<h2 style="color:rgb(255, 255, 255)" >Pick the safe to unlock the mystery inside.</h2>
    <h5 style="color:white"> Sherlock Holmes is a skilled Crypto Analyst. </br>His skills will be tested when trying to crack the clockwork algorithm <br>
    that binds this old safe. It was amazing that this  piece had LSFR clock signal technique,<br>
    given how ancient the safe is! Sherlock has found out that the combination is <br>the concatanation of  the 1st, 3rd and 5th pulses.
	</br>
	<h5 style="color:white"> The primitive polynomial that tallied with the inner mechanisms of the safe was x<sup>3</sup>+x+1
	</br>
	</br></br></br></br></br>
			The pin of the safe:<br>
				
  
				<form method="post" action="level8.php">
				    

					<div   align="center"">


					<label for="psw"><b></b></label>
					<input type="password"  name="psw" id="psw" required >
					
					<input type="submit" class="btn1" name="lsrf" value="Crack the Safe" id="lsrf" align="center">  
				      
				</div>

				    
				  </form>
		

   
</div>


			

</body>
</html>

