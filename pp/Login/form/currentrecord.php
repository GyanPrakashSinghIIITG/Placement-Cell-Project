<?php error_reporting(E_ERROR); ?>
<!DOCTYPE html>
<html>
<title>Records</title>
<!--<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../../css/style.css">-->
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
<br>
<h1>Current Year Placement Details<h1>
<br>
<ul>
<?php

include("configure.php");
session_start();
$get1="select * from records where validity='1'";
$sql1=mysqli_query($connection,$get1);    
    $check1 = mysqli_num_rows($sql1);

    if($check1 == 0)
        echo "No Record Found in Database!..";

    while($row = mysqli_fetch_assoc($sql1))
    {
    
   
     		     
                echo"<hr>";
        	echo"Roll Number-";
		$a=$row['Rollno'];
		echo $a;
                echo"<br>";
		echo"Student Name-";
		$b=$row['student_name'];
		echo $b;
		echo"<br>";
		echo"Department-";
		$c=$row['Department'];
		echo $c;
		echo"<br>";
		echo"Programme-";
		$d=$row['Programme'];
		echo $d;
		echo"<br>";
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
		echo"<br>";
		echo"Year of Placement-";
		$i=$row['Year_Of_Placement'];
		echo $i;
		echo "<br>";
		echo "<hr>";
		
			}
		
?>	
</ul>		

  
 <p  style="font-family: Lato, sans-serif;position: absolute;left: 500px;font-size-adjust: 0.98; ">Powered by <a href="http://www.iiitg.ac.in/" target="_blank">IIITG</a></p>


</body>
</html>
