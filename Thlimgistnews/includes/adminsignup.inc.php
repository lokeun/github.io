<?php
if(isset($_POST['submit'])){
	include_once'newsdb.inc.php';
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
	//Error handlers
	//Empty fields
	|empty($email)||empty($pwd)){
		header("Location: ../signup.php?signup=empty");
	exit();
	} else{
			//check if email is valid
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				header("Location: ../signup.php?signup=invalidemail");
	exit();
			}
			else{
				$sql = "SELECT * FROM admin WHERE AdminId='$Aid'";
				$result = mysqli_query($conn,$sql);
				$resultCheck =mysqli_num_rows($result);
				if($resultCheck >0){
					header("Location: ../signup.php?signup=userexist");
	exit();
				}else{
					//hashing the password
					$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
					//insert the admin into the database
					$pwd = md5($pwd);
					$sql= mysqli_query($conn,"INSERT INTO admin(AdminId,Email,Password) values('$email','$pwd');");
					if($sql)
					{
					echo '<div style="color:green">Successifullly registered!<br/>Now go back and log in to your new admin acc</div>';
					}
					else{
						echo "there was an error doing the insertion";
					}					
	
				}
			}
		}
	}
} else {
	header("Location: ../adminsignup.php");
	exit();
}