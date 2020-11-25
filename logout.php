//hashing the password
					$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
					//insert the writer into the database
					$pwd = md5($pwd);
					
					
					
					//de-hashing the password
			$hashedPwdCheck = password_verify($_POST["pwd"],$hashed_pwd);