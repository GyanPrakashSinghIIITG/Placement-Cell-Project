<?php error_reporting(E_ERROR); ?>
<!DOCTYPE html>
<html>
<title>Records</title>
<!--<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather">-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--<link rel="stylesheet" href="../../css/style.css">-->
<style>
h1,h2,h3,h4,h5,h6 {
font-family: "Lato", sans-serif
	
}
 ul {
    list-style-position: inside;
    list-style-type: circle;
  }

body,p {
 font-family: georgia, serif; 
        font-size: 12px;
        font-style: italic;
         text-shadow: 1px 1px 6px orange;
          list-style-position: outside;
        list-style: square inside;
}	
	
body {
	
    background-image: url("o.jpeg");
    background-repeat: repeat;
}
</style>

<body>
<img src="header.svg">
<br><br>
<br><br>
<a href="studentalogin.php"><i class="fa fa-arrow-circle-left w3-right" style="font-size:36px; align:right;"></i></a>
<br>
<h1>Selected Applications<h1>
<br>
<ul>
<?php

include("configure.php");
session_start();
$rno=$_SESSION['Roll'];
$_SESSION['rolll']=$rno;
$get1="select * from record where Rollno='$rno' and validity='1'";
$sql1=mysqli_query($connection,$get1);    
    $check1 = mysqli_num_rows($sql1);

    if($check1 == 0)
        echo "No Record Found in Database!..";

    while($row = mysqli_fetch_assoc($sql1))
    {
    
   
     		   $x=$row['jid'];  
                echo"<hr>";
		echo"Company-";
		$e=$row['Company'];
		echo $e;
		echo"<br>";
		echo"Position-";
		$f=$row['position'];
		echo $f;
		echo"<br>";
		echo"Package-";
		$g=$row['package'];
		echo $g;
		echo"<br>";
		echo"Work-Location-";
		$h=$row['work_location'];
		echo $h;
		echo"<br>";?>
		
		<button onclick="location.href='records.php?jid=<?php echo $x;?>'">Accept</button>
		<hr>
		
			<?php
			}
		
?>	
</ul>		

  
 <p  style="font-family: Lato, sans-serif;position: absolute;left: 500px;font-size-adjust: 0.98; ">Powered by <a href="http://www.iiitg.ac.in/" target="_blank">IIITG</a></p>


</body>
</html>
