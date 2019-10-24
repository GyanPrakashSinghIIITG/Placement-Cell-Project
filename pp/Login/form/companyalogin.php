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
}
</style>
<body>
<?php

include("configure.php");
session_start();
$id = $_SESSION["id"];
$_SESSION['c_id']=$id;
$get1="select * from company where C_ID='$id'";
$sql1=mysqli_query($connection,$get1);
//$get = @mysql_query("SELECT * FROM items WHERE owner = '$username'");
    
    $check1 = mysqli_num_rows($sql1);

    if($check1 == 0)
        echo "You have no Company Detail enteries in database.";

    while($row = mysqli_fetch_assoc($sql1))
    {
       // echo "<p>Roll Number:" . $row['Roll_No'] . "</p></br>";
        $a=$row['Name'];
		$_SESSION['cname']=$a;
 	//echo "<p>Name  :" . $row['Name'] . "</p></br>";
        $b=$row['Org_Type']; 
	$c=$row['Telephone_No'] ;
	//echo "<p>Email :" . $row['Email'] . "</p></br>";
	$d=$row['Email'] ;
	//echo "<p>Website :" . $row['Website'] . "</p></br>";
	$e=$row['Website'] ;
	//echo "<p>Locality :" . $row['Locality'] . "</p></br>";
	$f= $row['Address'];
	//echo "<p>District :" . $row['District'] . "</p></br>";
	//echo "<p>State :" . $row['State'] . "</p></br>";
	$h=$row['Countryy'];
        //echo "<p>Gender :" . $row['Gender'] . "</p></br>";
	$l=$row['Contact_Person'];
	//echo "<p>Day :" . $row['Day'] . "</p></br>";
	$m=$row['Desgination'];
	//echo "<p>Month :" . $row['Month'] . "</p></br>";
	$n=$row['Phone_No'];
	//echo "<p>Year :" . $row['Yr'] . "</p></br>";
    }

?>
<!-- Navbar -->
<div class="w3-top">
<div class="w3-bar w3-white w3-card w3-large" >
<img src="header.svg">
</div>
  <div class="w3-bar w3-black w3-card w3-large">
    <!--<a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>-->
    <a href="../../nm.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Home</a>
	<a href="companycreate.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Add Details</a>
    <a href="companyupdate.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Update Details</a>
    <a href="../jobadd.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Add Job</a>
	<a href="viewcjobs.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">View Jobs</a>
	<a href="viewapply.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Applications</a>
	<a href="logout2.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white w3-align-right">LOGOUT</a>
	<a href="placementupdate.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white w3-align-right">Notify Selected Students</a>
	
  </div>
   
	

</div>
<!-- Header -->

<video autoplay muted loop id="myVideo">
  <source src="22.mp4" type="video/mp4">
</video>
<div class="content w3-center ">
<br>
	<?php if($a==null)
	{?>
		 <h1 class="w3-margin w3-jumbo"><font color="white">Add your Details</font></h1>
	<?php 
	}
	else{ ?>
  <h1 class="w3-margin w3-jumbo"><font color="white"><?php echo $a . "</br>"; ?></font></h1>
  <h1 class="w3-margin "><font color="white"><?php echo "Organization :". $b."</br>"; ?></font></h1>
  <h2 class="w3-margin "><font color="white"><?php echo "Contact Number :".$c . "</br>"; ?></font></h2>
  <h2 class="w3-margin "><font color="white"><?php echo "Email :" .$d . "</br>"; ?></font></h2>
  <h2 class="w3-margin "><font color="white">Website :<a href="http://www.microsoft.com"><?php echo $e ?></a></font></h2>
  <h2 class="w3-margin "><font color="white"><?php echo "Headquarters :" .$f . " , " .$h. "</br>"; ?></font></h2>
  <br>
  <?php } ?>
 <br><br><br><br><br>
	
	

				
<footer class="w3-sand w3-padding w3-bottom w3-center w3-opacity">  
  
 <p>Powered by <a href="http://www.iiitg.ac.in/" target="_blank">IIITG</a></p>
</footer>
</div>

</body>
</html>
