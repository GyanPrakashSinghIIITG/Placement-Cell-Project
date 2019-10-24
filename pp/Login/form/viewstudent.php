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
//session_start();
$get1="select * from student where (YEAR(CURDATE())-Year_Of_Admission)=4 and validity='1'";
$sql1=mysqli_query($connection,$get1);
$get2=mysqli_query($connection,"update student set validity='0' where (YEAR(CURDATE())-Year_Of_Admission)>4");
$sql2=mysqli_query($connection,$get2);
$get3=mysqli_query($connection,"update student set validity='0' where (YEAR(CURDATE())-Year_Of_Admission)<4");
$sql3=mysqli_query($connection,$get3);
$get4=mysqli_query($connection,"update student_login set validity='0' where Rollno not in (select Roll_No from student where (YEAR(CURDATE())-Year_Of_Admission)=4 and validity='1')");
$sql4=mysqli_query($connection,$get4);
$get6=mysqli_query($connection,"select * from student where validity='0'");
 while($row1 = mysqli_fetch_assoc($get6))
    {
		$aa=$row1['Roll_No'];
$get5=mysqli_query($connection,"update apply set validity='0' where Rollno='$aa'");
$get7=mysqli_query($connection,"update record set validity='0' where Rollno='$aa'");
//$get = @mysql_query("SELECT * FROM items WHERE owner = '$username'");
    }
    $check1 = mysqli_num_rows($sql1);

    if($check1 == 0)
        echo "None of the Students have registerd yet!..";

    while($row = mysqli_fetch_assoc($sql1))
    {
       
                $a=$row['Name'];
		$b=$row['Roll_No'];
		$c=$row['Dept_Name'];
		$d=$row['Prog_Name'];
		$e=$row['CPI'];
		$f=$row['Phone_No'];
		$g=$row['Email'];
		$h=$row['Website'];
		$i=$row['Locality'];
		$j=$row['District'];
		$k=$row['State'];
		$cv=$row['CV'];
				?>
		<h1 class="w3-margin w3-center w3-padding 900px"><font color="white"><u><?php echo $a ?></u></font></h1>
		
       <h3 class="w3-margin w3-center w3-padding 900px"><font color="white"><br> Roll Number : <?php echo $b ?><br> Programme :<?php echo $d ?>
        <br> Department :<?php echo $c ?><br>CPI :<?php echo $e ?><br> Contact-Number :<?php echo $f ?><br> Email :<?php echo $g ?><br> Website :<?php echo $h ?><br>Address :<?php echo $i. ','. $j ?><br>State :<?php echo $k ?><br></font></h3>
		<h2 class="w3-margin "><font color="blue"><a href="files/<?php echo $cv;?>">CV check</a></font></h2>
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
