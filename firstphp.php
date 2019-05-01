<?php

	//start session
	session_start();
	mysqli_connect('localhost','root','');
	mysql_select_db('isproject');
	header( "refresh:28800;url=TotalMarks.php" );

?>

<!DOCTYPE html>
<html>
<title>SherlockedCTF</title>
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

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#about"  onclick="document.getElementById('id02').style.display='block'" style="width:auto;">LEVEL0 -> LEVEL1</a>

  
  <a href="#level1" >
    
    <p >LEVEL1 -> LEVEL2 </p>
	
  </a>
  
  
 


</div>


<!-- Page Content -->
<div class="w3-padding-large" id="main1">
  <!-- Header/Home -->
    <header class="w3-container w3-padding-32 w3-center " id="home">
	<h1 style="color:rgb(255, 255, 255)" id="demo"> 
	
	</script>
	</h1>
    <h1 class="w3-jumbo" font-family:bold style="color:white"><span class="w3-hide-small">WELCOME </span> TO </br> <img src="logowhite.png"></h1>
	
	<h2 style="color:rgb(255, 255, 255)" >Solve the mystery of the Hound of the Baskervilles</h2>
    <h5 style="color:white"> Hello Player! </br>Glad to have you in the gameplay. We appreciate your courage and fearlessness </br>in solving this mystery of the hound that haunts the Baskervilles. 
	</br>   You will play as both the popular detective Sherlock Holmes and his devoted friend Dr. John H. Watson.</br> You will encounter many challenges along the way. You will be tested to the extreme and beyond.</br> Be ready. Take a breath. From here on, think like a detective. Find the flags. Win the challenges. Solve the mystery!
	</br>Good luck. You are going to need it.
	</br></br>
	
	<div id="main1" style="margin-left:0" >

		
     <span id="lgs" style="font-size:30px;cursor:pointer;" onclick="openNav()" >&#9776; Let's Get Started!!</span>
	
	
</div>
</h5>
	
    
  </header>
  <!-- About Section -->
  <div id="div1" class="w3-content w3-justify w3-text-grey w3-padding-64" id="about" style="display:none;" >
	<h2>LEVEL 0</h2>                                            
    <h2 style="color:white">Prove Yourself</h2>
    
    <h4 class="w3-text-light-grey" style="margin-right:500px;text-align:justify">You can't be Sherlock if you don't deserve to be. You must have already installed the SHERLOCKED VM by now but can't access as you don't have the password.

​

To be Sherlock, you have to know Sherlock.

If you know Sherlock, you know who calls him on his birthday.

"The Woman" he loves...

    </h4>
	<p style="font-size:small;color:grey;text-align:left">[login:sherlocked]</p>
	
	<h4 class="w3-text-light-grey" style="margin-left:300px;text-align:justify"> Sherlock Holmes and Doctor John Watson are hanging around the apartment when Doctor James Mortimer appears to consult Holmes about a very strange matter that occurred in his town of Dartmoor.
​
In the 1640s, a bad man named Hugo Baskerville kidnapped a young woman and stuck her in his castle. When she escaped, he rode out after her. And when his friends went to find Hugo to stop him, they discovered two dead bodies. The girl had died of exhaustion and fear at being ridden down by a creepy madman on the moors (wetlands) at night.

But Hugo Baskerville suffered a worse fate: his drinking buddies found him getting his throat torn out by a giant black dog from hell. Supposedly, this demon hound haunts the Baskerville family to this day.

The latest Baskerville, Sir Charles, has also just died under Mysterious Circumstances. Sir Charles was known to be terrified of the Hound, and he was found lying dead just beyond his own driveway with an expression of horror on his face</h4>
	</br></br>
	<h2 id="level1" style="margin-left:300px;text-align:justify;">LEVEL 1</h2>
	
	<h4 class="w3-text-light-grey" style="margin-left:300px;text-align:justify;"> Mortimer sends a train booking to Sherlock and Watson via mail. But the booking reference was lost at the post office.Watson goes to the post office and was
asked to find the mail from a huge dump of LOST mail lying around in the deep TERMINALS of the post office. It's going to be hectic finding the mail from this huge dump. But Watson will have to DIVE in!! </h4>
	<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;margin-left:300px;text-align:justif;">  <p > Win LEVEL 1 </p> </button>
  
  
  
   
</div>

<div id="id01" class="modal" >
  
  <form method="post" class="modal-content animate" action="http://localhost/CTF/xsslogin.php" target="_parent">
    

    <div class="container">
      <label for="uname"><b>Booking Name</b></label>
      <input type="text" placeholder="Enter Booking Number" name="uname" id="uname" required autocomplete="off">

      <label for="psw"><b>Ticket Reference Number</b></label>
      <input type="password" placeholder="Enter ticket reference number" name="psw" id="psw" required>
        
      <input type="submit" class="btn1" name="login" value="Depart To Devonshire!" id="login" >  
      
    </div>

    
  </form>
</div>

<!--NEW-->
<div id="id02" class="modal" >
  
  <div  class="modal-content animate" >
    <div class="container">
		
		

	
  <div class="w3-show-inline-block">
  
	<label> DO YOU WISH TO PROCEED??</label> <br>
    <button class="w3-btn w3-black" id="proceed" onclick="closeNav1()">PROCEED</button>
    <button class="w3-btn w3-black" id="cancel" onclick="closeNav2()">CANCEL</button>
   
  
  </div>
    
  </div>
</div>
<script language=JavaScript>




function e{


}
<!--
//Disable right mouse click Script
//By Oscar Frank
//For full source code, visit http://www.oscarmini.com
var message="Right Click is Disabled!";
///////////////////////////////////
function clickIE4(){
if (event.button==2){
alert(message);
return false;
}
}
function clickNS4(e){
if (document.layers||document.getElementById&&!document.all){
if (e.which==2||e.which==3){
alert(message);
return false;
}
}
}
if (document.layers){
document.captureEvents(Event.MOUSEDOWN);
document.onmousedown=clickNS4;
}
else if (document.all&&!document.getElementById){
document.onmousedown=clickIE4;
}
document.oncontextmenu=new Function("alert(message);return false")
// -->
</script>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script>
document.onkeydown = function(e) {
        if (e.ctrlKey && 
            (e.keyCode === 67 || 
             e.keyCode === 86 || 
             e.keyCode === 85 || 
             e.keyCode === 117)) {
            alert('Ctrl+U Not Allowed!');
            return false;
        } else {
            return true;
        }
};
</script>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "180px";
    document.getElementById("main1").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgb(192,192,192)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main1").style.marginLeft= "0";
    document.body.style.backgroundColor = "rgb(128,128,128)";
}

//NEW
function closeNav2() {
    document.getElementById("id02").style.width = "0";
    document.getElementById("id02").style.display = "none";
	window.location.href = 'firstphp.php';
}

//NEW
/* function closeNav1() {
	alert('YOUR TIME STARTS NOW!!');
    document.getElementById("id02").style.width = "0";
    document.getElementById("id02").style.display = "none";
	var countDownDate = localStorage.getItem('startDate');
	//document.getElementById("demo").innerHTML = countDownDate;
	document.getElementById("div1").style.display = "block";
	/ * document.getElementById("lgs").style.display = "none"; */
/* if (countDownDate) {
    countDownDate = new Date();
    localStorage.setItem('startDate', countDownDate);
} else {
    countDownDate = new Date();
    localStorage.setItem('startDate', countDownDate);
} */
// Update the count down every 1 second
/* var x = setInterval(function() {
 
    // Get todays date and time
    var now = new Date().getTime();
 
    // Find the distance between now an the count down date
    var distance = now - countDownDate.getTime();
 
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
 
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
}, 1000);
	
} */
// Set the date we're counting down to

function closeNav1() {
	alert('YOUR TIME STARTS NOW!! You have only 8 hours to complete this!');
    document.getElementById("id02").style.width = "0";
    document.getElementById("id02").style.display = "none";
	document.getElementById("div1").style.display = "block";
/* var set = 7;
var d = new Date();
var y = d.getFullYear(); */
/* var m = d.getMonth();
var date = d.getDate();
var t = d.getHours() ;
var min =  d.getMinutes();
var sec = d.getSeconds()+ set; */

//var countDownDate = new Date(y, m, date, t, min, sec).getTime();

// Update the count down every 1 second
//var x = setInterval(function() {

    // Get todays date and time
    //var now = new Date().getTime();
    
    // Find the distance between now and the count down date
    //var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    /* var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000); */
    
    // Output the result in an element with id="demo"
    /* document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s "; */
	
	
    
    // If the count down is over, write some text 
    /* if (distance < 0) {
        clearInterval(x);
        alert(' Your Time is up !!');
		window.location.href = 'Totalmarks.php' 
    } */
//}, 1000);

}
</script>
</body>
</html>
