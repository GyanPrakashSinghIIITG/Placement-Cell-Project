<?php
include("configure.php");
session_start();
$wer = $_SESSION["Rollno"];
?>
<html>
<head></head>
<body>
<p align=center>
<h1 align=center>
Welcome Mr. 
<?php
echo ($wer);
$_SESSION["Rolln"]=$wer;
?>
<a href='view.php'><h3>VIEW YOUR DETAILS</h3></a>
<a href='studentupdate.php'><h3>UPDATE YOUR DETAILS</h3></a>
</body>
</html>
