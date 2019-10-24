<?php error_reporting(E_ERROR); ?>

<!DOCTYPE html>
<html>
<title>Coordinator</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="iiitgic.png">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../../css/style.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Comic Sans MS", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
#myVideo {
	position:fixed;
    right:0px;
    bottom: 0;
    min-width: 100%; 
    min-height: 100%;
}

.content {
    position: absolute;
    bottom: 0px;
    color: #f1f1f1;
    width: 100%;
	height:100%;
    padding: 100px;
}
.content1 {
    bottom: 0px;
    background: rgba(0, 0, 0, 0.5);
    color: #f1f1f1;
    width: 100%;
    padding: 0px;
}
body {
    background-image: url("c.jpg");
    background-repeat: repeat;
}
</style>
<body>
<video autoplay muted loop id="myVideo">
  <source src="xy.mp4" type="video/mp4">
</video>
<div class="content w3-center ">
<br><br>
<a href="Afteradminlogin.php"><i class="fa fa-arrow-circle-left w3-right" style="font-size:36px; align:right;"></i></a>
<h1>Coordinator Details<h1>
<br>
<?php

include("configure.php");
session_start();
$get1="select * from admin where position='Coordinator' and validity='1'";
$sql1=mysqli_query($connection,$get1);
//$get = @mysql_query("SELECT * FROM items WHERE owner = '$username'");
    
    $check1 = mysqli_num_rows($sql1);

    if($check1 == 0)
        echo "No coordinator Found in Database!..";

    while($row = mysqli_fetch_assoc($sql1))
    {
                echo"<hr>";
        	echo"ID-";
		$a=$row['ID'];
		echo $a;
                echo"<br>";
		echo"Name-";
		$b=$row['Name'];
		echo $b;
		echo"<br>";
		echo"Phone-";
		$c=$row['phone'];
		echo $c;
		echo"<br>";
		echo"Email-";
		$d=$row['email'];
		echo $d;
		echo"<br>";
		echo"Homepage-";
		$e=$row['homepage'];
		echo $e;
		echo"<br>";
		echo "<br>";
		echo "<hr>";
		}
		
?>			
<footer class="w3-sand w3-padding w3-center w3-opacity">  
  
 <p>Powered by <a href="http://www.iiitg.ac.in/" target="_blank">IIITG</a></p>
</footer>
</div>

</body>
</html>
