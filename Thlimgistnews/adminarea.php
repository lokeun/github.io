
<?php
include 'newsdb.inc.php';

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
    background-color: blue;
}

li {
    float: right;
}

li a {
    display: block;
    color: orange;
    text-align: none;
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
   
   <li><a href="adminlogout.php"><img src="logout-icon.png" style="height:20px; width:20px"></img></a></li>
  
    <li><a href="adminpostnews.html">Post a news article</a></li>
  <li><a href="balance.php">Education</a></li>
 <li><a href="writemesage.php">News</a></li>
  <li><a href="postajob.php">Politics</a></li>
  <li><a href="postajob.php">Religion</a></li>
  <li><a href="postajob.php">Relationships</a></li>
   <li><a href="postajob.php">Footbal</li>
   
</ul>
<table style="border-spacing: 100px;top-border-spacing:0px;" >
<th style="color:orange; ">Football</th>
<th style="color:orange">Relationships</th>
<th style="color:orange">Religion</th>
<th style="color:orange">Politics</th>
<th style="color:orange">News</th>
<th style="color:orange">Education</th>
</table>
</body>
</html>