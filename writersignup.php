<!DOCTYPE html>
<html>

<head>
<!--title-->
   <title>Create your account</title>
</head>
<style>

</style>
     <body>
	 <center>
	 <div id="navbar">
    
</div>	

	   <!--form-->
 <form  action="includes/signup.inc.php" method="POST">
 <fieldset>
 <div style="background-color:#f2f2f2">
 <legend style="color:orange;font-family:'Comic Sans MS', cursive, serif;text-shadow: 2px 2px black;">PERSONAL DETAILS</legend></br>
 <hr>
 <div class="container" style="color:green">
 <?php
if(isset($_GET['signup'])){
	if($_GET['signup'] == "empty" ){
		echo '<p style="color:red">Fill in the required fields!</p>';
	}
	if($_GET['signup'] == "invalidinputs" ){
		echo '<p style="color:red">Inavlid password!</p>';
	}
	if($_GET['signup'] == "invalidemail" ){
		echo '<p style="color:red">Please input a valid email!</p>';
	}
	if($_GET['signup'] == "userexist" ){
		echo '<p style="color:red">User exist, please log in!</p>';
	}
	
	
}

?>   
     First Name:*</br>
     <input type="text"  name="first" placeholder="Firstname..."></br></br>
          Last Name:*</br>
             <input type="text"  name="last" placeholder="Lastname..."></br></br>
               Email:*</br>
            <input type="email" name="email"  placeholder="email..."></br></br>
           User name:*</br>
      <input type="text"  name="wid" placeholder="Username..."></br></br>
    password:*</br>
   <input type="password"  name="pwd" placeholder="pwd..."></br></br>
   <div>
   
<button type="submit" name="submit">Sign up</submit>
<br>
</div>
</div>
</fieldset>
 </form>
 <!--end of form-->
 <div class="container" >
				<div class="row">
					<div class="12u">
						<div id="copyright">
							&copy; 2019 - <?php echo date("Y"); ?> <a href="writer's spot homepage.html" target="_self">www.writer's spot.com</a> All rights Reserved.  
						</div>
					</div>
				</div>
			</div>
		</div>
		</center>
	<!-- ********************************************************* -->
	<script src="js/config.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-panels.min.js"></script>
   </body>
</body>
</html>