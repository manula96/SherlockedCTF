<?php

	//session start
	session_start();
	$var = $_POST['login'];
?>




<!DOCTYPE html>
<html>
<body background="woods.png">
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
	margin: 5% auto 15% auto;
	background-color: #111;
    padding: 10px 54px;
    border-style: solid;
    border-color: #111;
    font-size: 20px;
    color: #818181;
    display: block;
    transition: 0.3s;
    width:300PX ;
	height:100px;
    
	
}
.btn2 {
	
	background-color: #111;
    padding: 100px 10px;
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
    display: block; /* Hidden by default */
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
    width: 360px; /* Could be more or less, depending on screen size */
	height: 5px;
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
	<br> <br>
	<h2 style="color:white;text-align:center" > Click Below To See Your Final Score!! </h2>
	

	
<div  class="modal" >
<br> <br>
	<br> <br>
	<form method="post" class="modal-content animate" ">
    
	 <div class="container">
		<input type="submit" class="btn1" name="ctf" value="Your Score!" id="ctf" action="<?php ($_SERVER["PHP_SELF"]);?>">  
		<?php
	if(isset($_POST['ctf']))
	{
	if(isset($_POST['login']))
	{
	
	
		if(isset($_POST['code']))
		{
			if(isset($_POST['sql']))
			{
				if(isset($_POST['self']))
				{
					if(isset($_POST['location']))
					{
						if(isset($_POST['usb1']))
						{
							if(isset($_POST['usbdump']))
							{
								if(isset($_POST['lsrf']))
								{
									if(isset($_POST['key1']))
									{
											if(isset($_POST['python']))
											{
												if(isset($_POST['wifi']))
												{
													if(isset($_POST['M1']))
													{
															if(isset($_POST['M2']))
															{
																if(isset($_POST['M3']))
																{
																	if(isset($_POST['rainbow']))
																	{
						
																	}
																	else
																	{
																		echo "<script> alert('150 Makrs!') </script>";
												
																	}
																}
																else
																{
																	echo "<script> alert('140 Makrs!') </script>";
												
																}
															}
															else
															{
																echo "<script> alert('130 Makrs!') </script>";
												
															}
													}
													else
													{
														echo "<script> alert('120 Makrs!') </script>";
												
													}	
												}
												else
												{
													echo "<script> alert('110 Makrs!') </script>";
												
												}
											}
											else
											{
												echo "<script> alert('100 Makrs!') </script>";

											}
									}
									else
									{
										echo "<script> alert('90 Makrs!') </script>";

									}
								}
								else
								{
									echo "<script> alert('80 Makrs!') </script>";

								}
							}
							else
							{
								echo "<script> alert('70 Makrs!') </script>";

							}
						}
						else
						{
							echo "<script> alert('60 Makrs!') </script>";

						}
					}
					else
					{
						echo "<script> alert('50 Makrs!') </script>";

					}
				}
				else
				{
					echo "<script> alert('40 Makrs!') </script>";

				}
			 			
			}
			else
			{
				echo "<script> alert('30 Makrs!') </script>";
			}				 
		}
		else
		{
			
			echo "<script> alert('20 Makrs!') </script>";
			
		}
		
	}
	
	else
	{
		echo "<script> alert('No marks!') </script>";
		
	}
	}
      ?>
    </div>

    
  </form>
</div>
  
</body>
<script>

</script>
</html>
