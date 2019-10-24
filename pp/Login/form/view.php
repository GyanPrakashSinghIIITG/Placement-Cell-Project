<?php
include("configure.php");
session_start();
$username = $_SESSION["Rolln"];
$get="select * from student where Roll_No='$username'";
$sql=mysqli_query($connection,$get);
//$get = @mysql_query("SELECT * FROM items WHERE owner = '$username'");
    
    $check = mysqli_num_rows($sql);

    if($check == 0)
        echo "You have no enteries in database.";

    while($row = mysqli_fetch_assoc($sql))
    {
        echo "<p>Roll Number:" . $row['Roll_No'] . "</p></br>";
 	echo "<p>Name  :" . $row['Name'] . "</p></br>";
	echo "<p>Department name :" . $row['Dept_Name'] . "</p></br>";
	echo "<p>Program:" . $row['Prog_Name'] . "</p></br>";
	echo "<p>CPI  :" . $row['CPI'] . "</p></br>";
	echo "<p>Phone Number :" . $row['Phone_No'] . "</p></br>";
	echo "<p>Email :" . $row['Email'] . "</p></br>";
	echo "<p>Website :" . $row['Website'] . "</p></br>";
	echo "<p>Locality :" . $row['Locality'] . "</p></br>";
	echo "<p>District :" . $row['District'] . "</p></br>";
	echo "<p>State :" . $row['State'] . "</p></br>";
	echo "<p>Gender :" . $row['Gender'] . "</p></br>";
	echo "<p>Day :" . $row['Day'] . "</p></br>";
	echo "<p>Month :" . $row['Month'] . "</p></br>";
	echo "<p>Year :" . $row['Yr'] . "</p></br>";	
	
    }

?>
