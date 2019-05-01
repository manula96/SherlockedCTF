<?php

	//session start
	session_start();
	header( "refresh:28800;url=TotalMarks.php" );
	mysqli_connect('localhost','root','','ispproject');
	//mysql_select_db('ispproject');
	
	if(isset($_POST['usb1']))
	{
		if($_POST['psw1']=="three")
		{
			echo 
			"<script> alert('Login Sucess!..Good Luck With the Next Level..')
			window.location.href = 'level6.php'</script>";
			 			
		}
		else
		{
			
			echo "<script> alert('Login Failed..Try again')
			window.location.href = 'level5.php' </script>";
			
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

	<h2 id="level2" style="color:white;text-align:center" >LEVEL 6 </h2>
	<h3 style="color:white;text-align:center" font-family: "Times New Roman"> USB DUMP!</h3>

	<div id="id01" class="modal">
  <br> <br>   <br> <br>
  <br> <br>


  <form method="post" class="modal-content animate" action="level7.php">
    

    <div class="container" style="margin-left:700px">


      <label for="psw"><b></b></label>
      <input type="password" placeholder="Password" id="psw"  name="psw" required style="text-align:center">
	  <br><br>
      <input type="submit" class="btn1" name="usbdump" value="See what's next!" id="usbdump" style="margin-left:25px">  
      
    </div>

    
  </form>
</div>








</body>

</html>
