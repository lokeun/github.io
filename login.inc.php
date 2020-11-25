
<?php

session_start();

if(isset($_POST['submit']))
{
	include 'dbh.inc.php';
	$wid = mysqli_real_escape_string($conn,$_POST['wid']);
	$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
	
//Error handlers
//Check if inputs are empty
if(empty($wid)||empty($pwd))
{
	header("Location: ../signup.php?login=empty");
	exit();
}
else{
	$sql = "SELECT * FROM writers WHERE writer_wid='$wid' ";
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
			if($pwd == $row['writer_pwd'])
			{
				$hashedPwdCheck = true;
			}
			if($hashedPwdCheck == false){
				header("Location: ../login.php?login=error");
	            exit();				
			}
			elseif($hashedPwdCheck == true)
			{
				//Log in the writer here
				$_SESSION['w_id'] = $row['writer_id'];
				$_SESSION['w_first'] = $row['writer_first'];
				$_SESSION['w_last'] = $row['writer_last'];
				$_SESSION['w_email'] = $row['writer_email'];
				
				
						echo $row['writer_wid'];
						echo ' <hr/><div style="color:green;alignment:center;">log in success!</div>';
						header("Location: ../useracc.php");
	                    exit();
									
			}
					
				
				
			
		}	
		
	}
}
}
else {
}	

