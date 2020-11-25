<?php
include 'dbh.inc.php';

?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: orange;
}

li {
    float: right;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
</style>
</head>
<body style="border-padding:0%">
<ul>
<li><a href="logout.php"><img src="logout.png" style="width:20%;height:20%;float:right;"></a></li>
<li><a href="profile.php" style="color:white;font-family:'Comic Sans MS', cursive, serif;text-shadow: 2px 2px orange;">
<?php
session_start();
?>
</a></li>
  <li><a href="balance.php">My Balance</a></li>
 <li><a href="writemesage.php">Mesages</a></li>
  <li><a href="postajob.php">Post a Job</a></li>
 <li><a href="availableorders.php"><img src="orders.png" style="width:30%;height:30%;float:left"></a></li>
 <li style="float:left"><a href="activeorders.php">Active orders</a></li>
 <li style="float:left"><a href="bids.php">My bids</a></li>
</ul>
</body>
</html>