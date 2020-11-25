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
.order-box {
	padding-bottom:30px;
	width:100%;
}
<div class="orders-container">
<?php
$title = mysqli_real_escape_string($conn,$_GET['title']);
$date = mysqli_real_escape_string($conn,$_GET['date']);
$sql = "SELECT * FROM orders WHERE o_title = '$title' AND o_sdate = '$date'";
$result = mysqli_query($conn,$sql);
$queryResults = mysqli_num_rows($result);
if ($queryResults >0){
	while($row = mysqli_fetch_assoc($result) ){
		echo " <div class='order-box'>
		<h3>".$row['o_title']."</h3>
		<h4>".$row['o_type']."</h4>
		<p>".$row['o_description']."</p>
		<h4>".$row['o_sdate']."</h4>
		<h4>".$row['o_edate']."</h4>
		<h4>".$row['o_pay']."</h4>
		<h4>".$row['o_words']."</h4>
		<h4>".$row['o_pages']."</h4>
		<h4>".$row['o_reference']."</h4>
		</div>";
	}
}
?>
</div>
</html>
</body>
<?php
include_once'footer.php';
?>