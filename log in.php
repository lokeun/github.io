<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <title>log in to  your account</title>
</head>
     <body style="background-color:#f2f2f2">
       <center>
	   <!--heading-->
         <h1 style="color:orange;font-family:'Comic Sans MS', cursive, serif;text-shadow: 2px 2px black;">  Log in now to work or post a job</h1></center>
    <center>
	<!--form-->
	<fieldset>
 <form action="includes/login.inc.php" method="POST">
       User name or email:</br>
           <input type="text" name="wid" placeholder="username/e-mail"></br></br></br>
              Your Password:</br>
        <input type="password" name="pwd" placeholder="password"></br></br></br>
<input type="checkbox" checked="checked" name="Remember me">Rember me
<button type="submit" name="submit">Log in</button></br><br></br>
<h4><a href="#">Forgotten password?</a></h4>
<i>Or</i>
<h4><a href="landing1.html">Create a new account</a></h4>
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
	<script src="js/config.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-panels.min.js"></script>
	</center>
   </body>
</html>
