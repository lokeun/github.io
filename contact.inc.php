<?php
if(isset($_POST['submit'])){
include_once 'dbh.inc.php'
$name = mysqli_real_escape_string($conn,$_POST['name']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$subject = mysqli_real_escape_string($conn,$_POST['subject']);
$mesage = mysqli_real_escape_string($conn,$_POST['mesage']);

if(empty($name)||empty($email||)empty($subject)||empty($mesage)){
	echo "Please fill the required fields"
}
else {
	$sql= mysqli_query($conn,"INSERT INTO contact us(your_name,your_email,your_subject,your_mesage) values('$name','$email','$subject','$mesage');");
}
}

