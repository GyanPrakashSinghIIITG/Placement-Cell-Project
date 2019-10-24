<!DOCTYPE html>
<html>
<title>Jobs</title>
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
<a href="companyalogin.php"><i class="fa fa-arrow-circle-left w3-right" style="font-size:36px;"></i></a>
<h1 class="w3-margin w3-center w3-padding 900px"><font color="white"><u> JOBS </u></font></h1>
<?php
include("configure.php");
session_start();
$id=$_SESSION['c_id'];
$get1="select * from jobs where C_ID='$id'";
$sql1=mysqli_query($connection,$get1);

    
    $check1 = mysqli_num_rows($sql1);

    if($check1 == 0)
        echo "No Jobs Available !..";
    while($row = mysqli_fetch_assoc($sql1))
    {
       
                $a=$row['J_ID'];
		$d=$row['Position_offering'];
		$e=$row['Vacancies'];
		$f=$row['Job_location'];
		$g=$row['Salary'];
		$n=$row['Bond'];
		$h=$row['CPI_req'];
		$i=$row['Recruitment_start'];
		$j=$row['No_of_rounds'];
		$k=$row['Exam_process'];
		$l=$row['Recruitment_end'];
                $m=$row['Preffered_deptt'];
				?>
		
 <h3 class="w3-margin w3-center w3-padding 900px"><font color="white"><br>Job-Id : <?php echo $a ?><br>Post-Offered :<?php echo $d ?><br>Preferred-Dept. :<?php echo $m ?><br>Vacancies :<?php echo $e ?><br> Job-Location :<?php echo $f ?><br> Salary :<?php echo $g ?><br> Bonds :<?php echo $n ?><br>Cpi_Required :<?php echo $h ?><br>Recruitment-Start :<?php echo $i ?><br>Recruitment-End :<?php echo $l ?><br> Exam-Process :<?php echo $k ?><br></font></h3><hr><?php
		}
		echo "<br>";
		
       

?>			
<footer class="w3-sand w3-padding w3-center w3-opacity">  
  
 <p>Powered by <a href="http://www.iiitg.ac.in/" target="_blank">IIITG</a></p>
</footer>
</div>

</body>
</html>
