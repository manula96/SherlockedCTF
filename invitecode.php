<?php

	//session start
	session_start();
	header( "refresh:28800;url=TotalMarks.php" );
	
	
	
?>

<!DOCTYPE html> <html lang="en"> 
<head>
 <meta charset="utf-8"> 
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <meta name="description" content="Entry challenge for joining SHERLOCKED. You have to hack your way in!" /> 
	</head> 
	<body class="blank" style="overflow-y:hidden; ">
	<div class="wrapper"> <section class="content" style="margin:0px; padding:0px;"> 
	<div class="container-center centerbox"> <div class="view-header"> <div class="header-icon"> 
	<i class="pe page-header-icon pe-7s-smile"></i> 
	</div> 
	<div class="header-title">
	<h3>Hi!</h3> 
	<small> Feel free to hack your way in :) </small>
	</div> 
	</div> 
	<div class="panel panel-filled"> 
	 <div class="panel-body"> 
	 <form action="http://localhost/invitecode.php" id="verifyForm" method="post">
	  <div class="form-group "> <label class="control-label" for="code">Invite Code</label>
	   <input type="text" title="Please enter your invite code" required="" value="" name="code" id="code" class="form-control"> 
	   <span class="help-block small"></span>
	    </div> 
		<div> 
		<button class="btn btn-accent">Sign Up</button>
		 </div> 
		 </form> 
		 </div> 
		 </div> 
		 <br>
		  <script src="//m.servedby-buysellads.com/monetization.js" type="text/javascript"></script> 
		  <div class="native-ad"></div> <script> (function(){ if(typeof _bsa !== 'undefined' && _bsa) { _bsa.init('default', 'CKYDLKJJ', 'placement:hacktheboxeu', { target: '.native-ad', align: 'horizontal', disable_css: 'true' }); } })(); </script> 
		  </div>
		   <div class="particles_full" id="particles-js"></div> 
		   </section>
		    </div>
			 <script src="http://localhost/js/htb-frontend.min.js"></script>
			 <script defer src="/js/inviteapi.min.js"></script>
			 </html>