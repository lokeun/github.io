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
	font-size:15px;
	margin:0px;
	border:0px;
}
.orders-container {
	width:950px;
	background-color:#fff;
	padding:30px;
}
.order-box {
	padding-bottom:30px;
	width:100%;
}
input {
	padding: 0px 20px;
	width:300px;
	font-size:22px;
	border-radius: 12px;
}
input {
	width:100px;
	font-size:17px;
}
table {
    border-collapse: collapse;
    width: 100%;
	top:0px;
	vertical-align:top;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
	padding-top:0px;
}

tr:hover{background-color:#f5f5f5}

</style>
<fieldset>
<form action='search.php' method='POST'>
<input type='text' name='search' placeholder='Search....' style='width:300px;'>
<button type='submit' name='submit-search' style='border-radius: 12px;height:23px;'>SEARCH</button>
</form>
</br>
<h4>All available orders</h4>
<?php
$sql = "SELECT * FROM orders";
$result = mysqli_query($conn,$sql);
$queryResults = mysqli_num_rows($result);
if ($queryResults >0){
	while($row = mysqli_fetch_assoc($result) ){
echo"
<p>
".$row['o_id']."<fieldset>

<legend>".$row['o_type']."</legend>
<center>".$row['o_title']." </p></br>
".$row['o_description']."</br>
Number of pages: ".$row['o_pages']."
</br>
Starting date: ".$row['o_sdate']."</br>
Ending date  :".$row['o_edate']."</br>
".$row['o_words']."</br>
References : ".$row['o_reference']."</br>
<button> take</button>
</fieldset>
</p> ";
	}
}
 ?>
</fieldset>
</html>
</body>
<?php
include_once'footer.php';
?>
