
<?php

session_start();

if(isset($_POST['submit']))
{
	include 'newsdb.inc.php';
	$Email = mysqli_real_escape_string($conn,$_POST['Email']);
	$Passwod = mysqli_real_escape_string($conn,$_POST['Password']);
	
//Error handlers
//Check if inputs are empty
if(empty($wid)||empty($pwd))
{
	header("Location: ../signup.php?login=empty");
	exit();
}
else{
	$sql = "SELECT * FROM admin WHERE AdminId='$AdminId' ";
	$result = mysqli_query($conn,$sql); 
	$resultCheck = mysqli_num_rows($result);
	if($resultCheck <1)
	{
		header("Location:../login.php");
		
		
	}
	else {
		if ($row = mysqli_fetch_assoc($result)){
			//de-hashing the password
			$pwd = md5($pwd);
			$hashedPwdCheck = false;
			if($Password == $row['Password'])
			{
				$hashedPwdCheck = true;
			}
			if($hashedPwdCheck == false){
				header("Location: ../login.php?login=error");
	            exit();				
			}
			elseif($hashedPwdCheck == true)
			{
				//Log in the admin
				$_SESSION['AdminId'] = $row['AdminId'];
				$_SESSION['Email'] = $row['Email'];
			    $_SESSION['Password'] = $row['Password';
				
				
				
						echo $row['AdminId'];
						echo ' <hr/><div style="color:green;alignment:center;">log in success!</div>';
						header("Location: ../adminarea.php");
	                    exit();
									
			}
					
				
				
			
		}	
		
	}
}
}
else {
}	
