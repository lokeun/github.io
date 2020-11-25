<?php
session_start ();
?>

<!DOCTYPE html>
<html>
<head>
      <title>Writer's Spot</title>
	  
</head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: orange;
}
div.background {
    background: url(logo.jpg)95%;
    border: 2px solid black;
	width: 100%;
}
div.background:hover {
    width: 100%;
    height: 100%;
    -webkit-transform: rotate(360deg); /* Safari */
    transform: rotate(360deg);
}
.floating-box {
    display: inline-block;
    width: 440px;
    height: 250px;
    margin: 10px; 
}

div.transbox {
    margin: 30px;
    background-color: #ffffff;
    border: 1px solid black;
    opacity: 0.6;
    filter: alpha(opacity=60); /* For IE8 and earlier */
}

div.transbox p {
    margin: 5%;
    font-weight: bold;
    color: #000000;
}
#column {
    float: center;
    width: 31.3%;
    margin-bottom: 16px;
    padding: 0 8px;
}
@media screen and (max-width: 650px) {
    .column {
        width: 100%;
        display: block;
   }
   }
.card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

/* Some left and right padding inside the container */
.container {
    padding: 0 16px;
}

/* Clear floats */
.container::after, .row::after {
    content: "";
    clear: both;
    display: table;
}

.title {
    color: grey;
}


}

body{	
margin:0px;
border:0px;
padding-top:0px;
background-style:transparent;
font-family:Sans-Serif;
text-align:justify;
font-family:Helvetica;

}
.navbar{
width:100%;
height:70px;
position:fixed;
top:0px;
background-color:;
}
.footer{
background-image:url("adult-analyzing-brainstorming-10808652.png");
}
description {
    background-image: url("my app/logo.jpg");
}
.tooltip {
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: black;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
    
    /* Position the tooltip */
    position: absolute;
    z-index: 1;
    top: -5px;
    left: 105%;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
}
</style>
<!--head section-->
      <body style="text-decorations:none">
	  
	
	  <ul>
	 <li> <h3 style="color:white;font-family:'Comic Sans MS', cursive, serif;text-shadow: 2px 2px orange;">
            WRITER'S SPOT  | </h3></li>
  <li><a class="active" href="writer's spot homepage.html">Home</a></li>
  <li><a href="yy.html">Available orders</a></li>
  <li><a href="contactus.html">Contact</a></li>
  <li><a href="howitworks.html">About </a></li>
  <li><a href="post.html">Post A job</a></li>
  <div id="top" style="float:right">
  <li><a href="log in.html">Log in</a></li>
  <li><a href="signup.php">Sign up</a></li>
  </div>
</ul>
	
	<div class="background">
  <div class="transbox">
    <p><center><h3 style="color:orange;font-family:'Comic Sans MS', cursive, serif;text-shadow: 2px 2px black;">WRITER'S SPOT</h3><p>Your best writing solution</p></center>
	</div></p>
  </div>
</div>
		

<!--End of head section-->

<div style="background-color:#f2f2f2">
<fieldset>
<div class="floating-box"><center><img src="avatar.png" style="width:30%;height:30%"/><h3 style="color:orange;font-family:'Comic Sans MS', cursive, serif;text-shadow: 2px 2px black;">Writers</h3></center><p style="font-size:14px;font-family: Arial, Helvetica, sans-serif;">Writer's Spot is currently hiring new writers.Writer's Spot is proving to be the best writing platform offering freelance writers with best opportunities to turn their writing skills to a stable income.</br>Sign up using the link below.</br><div class="tooltip"><a href="signup.php"><button style="border-radius:12px">SIGN UP</button></a><span class="tooltiptext">Sign up for account</span> </div></p> </div></hr>
<div class="floating-box"><center><img src="avatar.png" style="width:30%;height:30%" /><h3 style="color:orange;font-family:'Comic Sans MS', cursive, serif;text-shadow: 2px 2px black;">Employers</h3></center><p style="font-size:14px;font-family: Arial, Helvetica, sans-serif;">You dont have time to waste!Thousandths of freelance writers are on stage waiting for you to post your work.The process is just the simpliest.Post a job, get it done and pay out.</hr>Post your job using the link below<div class="tooltip"><a href="post.html"><button style="border-radius:12px">POST A JOB</button></a><span class="tooltiptext">Post your work now</span></div></div>
</fieldset>
</div>


			
		
	  <i><marquee style="color:orange;font-family:'Comic Sans MS', cursive, serif;text-shadow: 2px 2px black;" >TRY WITH US NOW!</marquee></i>
	 
	

 </html>
 <?php
 include_once'footer.php';
 ?>