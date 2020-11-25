<?php
include_once'header.php';
?>
<?php
include_once'header.php';
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "writers spot";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
    box-sizing: border-box;
}
.row:after {
    content: "";
    clear: both;
    display: block;
}
[class*="col-"] {
    float: left;
    padding: 15px;
}
.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}
html {
    font-family: "Lucida Sans", sans-serif;
}
.header {
    background-color: #33b5e5;
    color: #ffffff;
    padding: 15px;
}
.menu ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}
.menu li {
    padding: 8px;
    margin-bottom: 7px;
    background-color :#33b5e5;
    color: #ffffff;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
.menu li:hover {
    background-color: #0099cc;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}
.footer {
	width: 600px;
	border-collapse: collapse;
	top:10px;
	vertical-align:top;
	
}
.body {
	background-color: #f3f3f3;
	font-family: arial;
	font-size:15px;
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
	top:10px;
	vertical-align:top;
	background-color: #f2f1f1;
    color: black;
    padding: 10px;
    font-size: 15px;
	
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
	padding-top:0px;
}
div.card {
  width: 250px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 15px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: right;
}
div.header {
    background-color: #f2f1f1;
    color: black;
    padding: 10px;
    font-size: 20px;
}
tr:hover{background-color:#f5f5f5}
/* Media Queries: Tablet Landscape */
@media screen and (max-width: 1060px) {
    #primary { width:67%; }
    #secondary { width:30%; margin-left:3%;}  
}

/* Media Queries: Tabled Portrait */
@media screen and (max-width: 768px) {
    #primary { width:100%; }
    #secondary { width:100%; margin:0; border:none; }
}
</style>
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
</head>
<body>

<div class="row">

<div class="col-3 menu">
<ul>
<body>
<center>
<div id="card">
<div class="header">
<img src="avatar.png"><br/>
First name: <?php
echo $_SESSION['w_first'];
?><br/>
Last name: <?php
echo $_SESSION['w_last'];
?><br/>
Email:  <?php
echo $_SESSION['w_email'];
?>

</div>
</div>
</center>
</body>
</ul>
</div>

<div class="col-9">
<table>
  <tr>
    <th>Title</th>
    <th>Type</th>
    <th>Description</th>
	
  </tr>
<?php
$sql = "SELECT * FROM orders";
$result = mysqli_query($conn,$sql);
$queryResults = mysqli_num_rows($result);
if ($queryResults >0){
	while($row = mysqli_fetch_assoc($result) ){
		echo" <div class='order-box'>
  <tr>
  <a href='orders.php?title=".$row['o_title']."&date=".$row['o_sdate']."'>
    <td>".$row['o_title']."</td>
    <td>".$row['o_type']."</td>
    <td>".$row['o_description']."</td>
  </tr>
		</div>";
	}
}
include_once'footer.php';

?>
</tr>
</div>
</fieldset>
</div>
</html>
<div id="footer" style="width:50%">

</div>
</body>



