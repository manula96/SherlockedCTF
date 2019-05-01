<?php

	//session start
	session_start();
	header( "refresh:28800;url=TotalMarks.php" );
	//mysqli_connect('localhost','root','');
	//mysql_select_db('isproject');
	
	if(isset($_POST['lsrf']))
	{
		if($_POST['psw']=="10110011")
		{
			echo 
			"<script> alert('Login Sucess!..Good Luck With the Next Level..')
			window.location.href = 'level8.php'</script>";
			 			
		}
		else
		{
			
			echo "<script> alert('Login Failed..Try again')
			window.location.href = 'level7.php' </script>";
			
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

	<h2 id="level2" style="color:white;text-align:center" >LEVEL 8 </h2>
	<h3 style="color:white;text-align:center" font-family: "Times New Roman"> Key Space is 2^4 <br/> <br>And known plain text- cipher text pairs would be,<br> <br> P1-C1 --> 1100, c5eaac22085a43dfee317123ac2892d9 <br> P2-C2 --> 1001, 7af2dbe32d46253d7c378375446df7b0 <br><br> You know what to do!! </h3>

	<div id="id01" class="modal">
  <br> <br>   <br> <br>
  <br> <br>
  <br> <br>


  <form method="post" class="modal-content animate" action="level9.php">
    

    <div class="container" style="margin-left:600px">


      <label for="psw"><b></b></label>
      <input type="password" placeholder="K1" id="k3" required>
      <input type="password" placeholder="K2" id="k4" required> <br> <br>
      <input type="submit" class="btn1" name="key" value="See what's next!" id="key1" style="margin-left:120px">  
      
    </div>

    
  </form>
</div>








</body>

</html>
