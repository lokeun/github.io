<?php
if(isset($_post['submit'])){
	include_once'dbh.inc.php';
	session_start();
	$title = mysqli_real_escape_string($conn,$_post['title']);
	$type = mysqli_real_escape_string($conn,$_post['type']);
	$description = mysqli_real_escape_string($conn,$_post['description']);
	$sdate = mysqli_real_escape_string($conn,$_post['sdate']);
	$edate = mysqli_real_escape_string($conn,$_post['edate']);
	$pay = mysqli_real_escape_string($conn,$_post['pay']);
    $words = mysqli_real_escape_string($conn,$_post['words']);
	$pages = mysqli_real_escape_string($conn,$_post['pages']);
	$references = mysqli_real_escape_string($conn,$_post['references']);
	// insert the data into the database here
	$sql= mysqli_query($conn,"INSERT INTO orders(o_title,o_type,o_description,o_sdate,o_edate,o_pay,o_words,o_pages,o_references) values('$title','$type','$description','$sdate','$edate','$pay','$words','pages','references');");
	if($sql)
					{
					echo '<div style="color:green">Successifullly registered!<br/>Now go back and log in toy your new acc</div>';
					}
					
}
else{
	header("Location:../postajob.php");
	echo"<div style='color:red;'>sucessfull not</div>";
}

?> 