<?php

	//session start
	session_start();
	header( "refresh:28800;url=TotalMarks.php" );

	if(isset($_POST['login']))
	{
			if($_POST['uname']=="MortimerToHolmes" && $_POST['psw']=="ref1234" )
			{
				"<script> alert('Login Sucess!..Good Luck With the Next Level..')
				</script>";
			 			
			}
			else
			{
			
				echo "<script> alert('Login Failed..Try again')
				window.location.href = 'xsslogin.php' </script>";
			
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

	<h2 id="level2" style="color:white;text-align:center" >LEVEL 2 </h2>

	<h3 style="color:white;text-align:center;" font-family: "Times New Roman"> Task is SIMPLE!! <br><br> Go to the next Level... <br><br> </h3>





<div id="id01" class="modal">
  
  <form method="post" class="modal-content animate" action="name.php" >
    

    <div class="container" style="margin-left:700px">


      <label for="psw"><b></b></label>
	  <input type="text" name="uname" ><br/><br>
	  <input type="submit" value="GO TO NEXT LEVEL" style="margin-left:12px"><br/>
      
    </div>

    
  </form>
</div>

<div class="modal" >
<!--<h3 style="color:white;text-align:center;padding:200px;" font-family: "Times New Roman"> Current Marks <br> 20 </h3>-->
</div>


</body>

</html>
