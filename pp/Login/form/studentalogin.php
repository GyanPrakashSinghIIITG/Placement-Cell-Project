<?php error_reporting(E_ERROR); ?>
<!DOCTYPE html>
<html>
<title>Student</title>
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

tr:nth-child(even) {background: #CCC}
tr:nth-child(odd) {background: #FFF}
</style>
<body>

<?php

include("configure.php");
session_start();
$username = $_SESSION["Rollno"];
$_SESSION["Roll"]=$username;
$get1="select * from student where Roll_No='$username'";
$sql1=mysqli_query($connection,$get1);
//$get = @mysql_query("SELECT * FROM items WHERE owner = '$username'");
    
    $check1 = mysqli_num_rows($sql1);

    if($check1 == 0)
        echo "You have no Student Detail enteries in database.";

    while($row = mysqli_fetch_assoc($sql1))
    {
       // echo "<p>Roll Number:" . $row['Roll_No'] . "</p></br>";
        $a=$row['Roll_No'];
 	//echo "<p>Name  :" . $row['Name'] . "</p></br>";
        $b=$row['Name']; 
	//echo "<p>Department name :" . $row['Dept_Name'] . "</p></br>";
   	$c=$row['Dept_Name'];
	//echo "<p>Program:" . $row['Prog_Name'] . "</p></br>";
	$d=$row['Prog_Name'];
	//echo "<p>CPI  :" . $row['CPI'] . "</p></br>";
	$e=$row['CPI'] ;
	//echo "<p>Phone Number :" . $row['Phone_No'] . "</p></br>";
	$f=$row['Phone_No'] ;
	//echo "<p>Email :" . $row['Email'] . "</p></br>";
	$g=$row['Email'] ;
	//echo "<p>Website :" . $row['Website'] . "</p></br>";
	$h=$row['Website'] ;
	//echo "<p>Locality :" . $row['Locality'] . "</p></br>";
	$i= $row['Locality'];
	//echo "<p>District :" . $row['District'] . "</p></br>";
 	$j=$row['District'];
	//echo "<p>State :" . $row['State'] . "</p></br>";
	$k=$row['State'];
        //echo "<p>Gender :" . $row['Gender'] . "</p></br>";
	$l=$row['Gender'];
	//echo "<p>Day :" . $row['Day'] . "</p></br>";
	$m=$row['Day'];
	//echo "<p>Month :" . $row['Month'] . "</p></br>";
	$n=$row['Month'];
	//echo "<p>Year :" . $row['Yr'] . "</p></br>";
	$o=$row['Yr'];	
	$pro=$row['Profile'];
	$cv=$row['CV'];
    }

?>
<!-- Navbar -->
<div class="w3-top">
<div class="w3-bar w3-white w3-card w3-large" >
<img src="header.svg">
</div>
  <div class="w3-bar w3-black w3-card w3-left-align w3-large">
    <!--<a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>-->
    <a href="../../nm.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Home</a>
    <a href="studentcreate.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Add Details</a>
	<a href="studentupdate.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Update Details</a>
    <a href="studentapply.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Apply</a>
	 <a href="viewoffer.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Selected Applications</a>
	<a href="logout1.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white w3-align-right">LOGOUT</a>
  </div>
</div>
<!-- Header -->
<header class="w3-container w3-black w3-left-align">
<video autoplay muted loop id="myVideo">
  <source src="22.mp4" type="video/mp4">
</video>
<div class="content">
<div class="col-md-3 ftr_navi ftr w3-half">

<?php
if($b==null)
echo '<h1 class="w3-margin w3-jumbo">Add your Details</h1>'	;
else{
	?>
  <h1 class="w3-margin w3-jumbo"><font color="blue"><?php echo $b . "</br>"; ?></font></h1>
  <h1 class="w3-margin "><font color="blue"><?php echo  $c . " , " . $d. "</br>"; ?></font></h1>
  <h2 class="w3-margin "><font color="blue"><?php echo "CPI  :". $e . "</br>"; ?></font></h2>
  <h2 class="w3-margin "><font color="blue"><a href="files/<?php echo $cv;?>">CV</a></font></h2>
  <h2 class="w3-margin "><font color="blue"><?php echo "Phone Number :".$f . "</br>"; ?></font></h2>
  <h2 class="w3-margin "><font color="blue"><?php echo "Email :" .$g . "</br>"; ?></font></h2>
  <h2 class="w3-margin "><font color="blue">Website :<a href="#"><?php echo $h ?></a></font></h2>
  <h2 class="w3-margin "><font color="blue"><?php echo "Address :" .$i . " , " . $j . " , " .$k. "</br>"; ?></font></h2>
  <h2 class="w3-margin "><font color="blue"><?php echo "Birthdate :".$m . "/" . $n . "/" .$o. "</br>"; ?></font></h2>
  <br><br><br>
  <?php
}
?>
	
	</div>
	<div class="col-md-3 ftr_navi ftr w3-rest">
	<br><br>
	
	 <img src="profile/<?php echo $pro;?>" alt="Upload Your Image" style="border-radius: 50%;" align="right" height="500" width="500"> 
	 </div>
	 <br><br><br>
	 <div class="w3-sand w3-padding w3-bottom w3-center w3-opacity">
	 <p>Powered by <a href="http://www.iiitg.ac.in/" target="_blank">IIITG</a></p>
	 </div>
	 </div>
	 
</header>

				


</body>
</html>
