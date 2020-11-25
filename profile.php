<?php
include_once'header.php';
?>
<html>
<head>
<style>
div.card {
  width: 250px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 15px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
}
div.header {
    background-color: #f1f1f1;
    color: black;
    padding: 10px;
    font-size: 20px;
}
</style>
</head>
<body>
<fieldset>
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
</fieldset>
</body>
</html>
<?php
include_once'footer.php';
?>