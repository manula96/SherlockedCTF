<?php

	session_start();
	header( "refresh:28800;url=TotalMarks.php" );
	if(isset($_POST['location']))
	{
		if($_POST['psw']=="50.5719N,3.9207W" )
		{
			echo 
			"<script> alert('Login Sucess!..Good Luck With the Next Level..')
			window.location.href = 'level5.php'</script>";
			 			
		}
		else
		{
			
			echo "<script> alert('Login Failed..Try again')
			window.location.href = 'level4.php' </script>";
			
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
<body background="woods.png">


<br>

	<h1 id="level3" align=center style="color:white" >LEVEL 5 </h2>
	<br>

<h5 style="color:white;text-align:center" font-family: "Times New Roman"> Sherlock finds a hint that there may be a clue, (possibly the foot prints of the hound at the beach nearby.<br> He goes there, and does an n depth search along the lamp posts along the beach. <br>
Sherlock stumbles upon left behind foot prints near a lamp post with a bench under it.</h5>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d350.0885416638338!2d79.97361419314208!3d6.914534657906684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae256db1984b293%3A0x4f164fcb7a99f66c!2sSLIIT+Car+Park!5e0!3m2!1sen!2slk!4v1535871532106" width="600" height="450" frameborder="0" style="border:0;margin-left:500px" allowfullscreen></iframe>
	<br> <br>
	
  <form method="post" class="modal-content animate" action="level6.php">
  
	<div class="container" style="margin-left:700px">


      <label for="psw"><b></b></label>
      <input type="password" placeholder="Lamp Post Number" id="psw1"  name="psw" required style="text-align:center"> <br> <br>
      <input type="submit" class="btn1" name="usb" value="See what's next!" id="usb1" style="margin-left:25px">  
      
    </div>
    </form>
</body>

</html>
