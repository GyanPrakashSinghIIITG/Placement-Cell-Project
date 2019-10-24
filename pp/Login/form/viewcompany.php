<?php error_reporting(E_ERROR); ?>
<!DOCTYPE html>
<html>
<title>Company</title>
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
<?php

include("configure.php");
session_start();
$get1="select * from company where No_Of_Jobs_Offer>0 and validity='1'";
$sql1=mysqli_query($connection,$get1);
//$get = @mysql_query("SELECT * FROM items WHERE owner = '$username'");
    
    $check1 = mysqli_num_rows($sql1);

    if($check1 == 0)
        echo "None of the companies have registerd yet!..";

    while($row = mysqli_fetch_assoc($sql1))
    {
       
                $a=$row['Name'];
		$b=$row['C_ID'];
		$c=$row['Telephone_No'];
		$d=$row['No_Of_Jobs_Offer'];
		$e=$row['Email'];
		$f=$row['Website'];
		$g=$row['Address'];
		$h=$row['Countryy'];
				?>
		<h1 class="w3-margin w3-center w3-padding 900px"><font color="white"><u><?php echo $a ?></u></font></h1>
		
       <h3 class="w3-margin w3-center w3-padding 900px"><font color="white"><br> ID : <?php echo $b ?><br> Contact-Number :<?php echo $c ?>
        <br> Number Of Jobs Offering :<?php echo $d ?><br> Email :<?php echo $e ?><br>Website :<?php echo $f ?><br> Address:<?php echo $g?><br>Country :<?php echo $h ?><br></font></h3>
		<?php
		}
		echo "<br>";
		
       

?>			
<footer class="w3-sand w3-padding w3-center w3-opacity">  
  
 <p>Powered by <a href="http://www.iiitg.ac.in/" target="_blank">IIITG</a></p>
</footer>
</div>

</body>
</html>
