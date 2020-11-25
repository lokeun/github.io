<?php

session_start();
if(isset($_GET['login'])){
	if($_GET['login']== "error" ){
		
	}
	else{
		
	}
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>log in to  your account</title>
</head>
     <body style="background-color:#f2f2f2">
	 <fieldset>
       <center>
	   <!--heading-->
         <h1 style="color:orange;font-family:'Comic Sans MS', cursive, serif;text-shadow: 2px 2px black;">  Log in now to work or post a job</h1></center>
    <center>
	<hr/>
	<!--form-->

  <form action="useracc.php" method="POST">
 <span style="color:red" id="userd">Please enter a valid email or password!</span></br>
       User name or email:</br>
           <input type="text" name="wid" placeholder="username/e-mail"></br></br></br>
		  
              Your Password:</br>
        <input type="password" name="pwd" placeholder="password"></br></br></br>
<input type="checkbox" checked="checked" name="Remember me">Rember me
<button type="submit" name="submit">Log in</button></br><br></br>
<h4><a href="#">Forgotten password?</a></h4>
<i>Or</i>
<h4><a href="signup.php">Create a new account</a></h4>
    </form>

 
	</fieldset>
	<!--end of form-->

<div id="footer-wrapper">
			<div class="container">
				<div class="row">
					<div class="12u">
						<div id="copyright">
							&copy; 2019 - <?php echo date("Y"); ?> <a href="writer's spot homepage.html" target="_self">www.writer's spot.com</a> All rights Reserved.  
						</div>
					</div>
				</div>
			</div>
		</div>
	<!-- ********************************************************* -->
	</center>
   </body>
</html>