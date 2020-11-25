<?php
if(isset($_POST['submit'])){
	include_once'dbh.inc.php';
	$first = mysqli_real_escape_string($conn,$_POST['first']);
	$last = mysqli_real_escape_string($conn,$_POST['last']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$wid = mysqli_real_escape_string($conn,$_POST['wid']);
	$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
	//Error handlers
	//Empty fields
	if(empty($first)||empty($last)||empty($email)||empty($wid)||empty($pwd)){
		header("Location: ../signup.php?signup=empty");
	exit();
	} else {
		//check if input characters are valid
		if(!preg_match("/^[a-zA-Z*$]/",$first) || !preg_match("/^[a-zA-Z*$]/",$last) ){
			header("Location: ../signup.php?signup=invalidinputs");
	exit();
		}else{
			//check if email is valid
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				header("Location: ../signup.php?signup=invalidemail");
	exit();
			}
			else{
				$sql = "SELECT * FROM writers WHERE writer_wid='$wid'";
				$result = mysqli_query($conn,$sql);
				$resultCheck =mysqli_num_rows($result);
				if($resultCheck >0){
					header("Location: ../signup.php?signup=userexist");
	exit();
				}else{
					//hashing the password
					$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
					//insert the writer into the database
					$pwd = md5($pwd);
					$sql= mysqli_query($conn,"INSERT INTO writers(writer_first,writer_last,writer_email,writer_wid,writer_pwd) values('$first','$last','$email','$wid','$pwd');");
					if($sql)
					{
					echo '<div style="color:green">Successifullly registered!<br/>Now go back and log in toy your new acc</div>';
					}
					else{
						echo "there was an error doing the insertion";
					}					
	
				}
			}
		}
	}
} else {
	header("Location: ../signup.php");
	exit();
}
