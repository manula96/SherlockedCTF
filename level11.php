<?php

	//session start
	session_start();
	header( "refresh:28800;url=TotalMarks.php" );
	
	if(isset($_POST['wifi']))
	{
		if($_POST['psw']=="y0uc@&c0w!th!m@yy0ul1k!" )
		{
			echo 
			"<script> alert('Login Sucess!..Good Luck With the Next Level..')
			window.location.href = 'level10.php'</script>";
			 			
		}
		else
		{
			
			echo "<script> alert('Login Failed..Try again')
			window.location.href = 'level9.php' </script>";
			
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
<body>
	<br> <br>
	<h2 style="color:white;text-align:center" >LEVEL 11 </h2>
	<h2 style="color:white;text-align:center"> MANULA 1 <br> <br></h2>
	
	
<div  class="modal" >
<br> <br>
	<br> <br>
	<form method="post" class="modal-content animate" action="level12.php">
    
	 <div class="container">
      <label for="uname"><b> Password </b></label>
      <input type="password" placeholder="Password" required="" value="" name="code1" id="code1" class="form-control">

        
      <input type="submit" class="btn1" name="login" value="Submit!" id="M1" >  
      
    </div>

    
  </form>
</div>
  
</body>

</html>
