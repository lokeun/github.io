<?php
include_once'header.php';
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "writers spot";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
?>
<style>
body {
	background-color: #f3f3f3;
	font-family: arial;
}
.orders-container {
	width:1000px;
	background-color:#fff;
	padding:30px;
}
</style>
<div class="orders-container">
<?php
if(isset($_POST['submit-search'])){
	$search = mysqli_real_escape_string($conn,$_POST['search']);
	$sql = "SELECT * FROM orders WHERE o_title LIKE'%$search%' OR o_type LIKE'%$search%' OR o_description LIKE'%$search%' OR o_reference LIKE'%$search%' ";
	$result = mysqli_query($conn,$sql);
	$queryResult = mysqli_num_rows($result);
	
	echo "There are ".$queryResult." Results!";
	
	if ($queryResult >0 ) {
		while($row = mysqli_fetch_assoc($result)) {
			echo " <a href='orders.php?title=".$row['o_title']."&date=".$row['o_sdate']."'>
			<div class='order-box'>
		<h3>".$row['o_title']."</h3>
		<h4>".$row['o_type']."</h>
		<p>".$row['o_description']."</p>
		".$row['o_sdate']."
		".$row['o_edate']."
		".$row['o_pay']."
		".$row['o_words']."
		".$row['o_pages']."
		".$row['o_reference']."
		</div></a>";
		}
	}
	else {
		echo"There are no result that matched your search!";
	}
}

?>
</div>