
		<?php
       if (isset($_GET['jid']))
            {     
		$jid = $_GET['jid'];
		
        include("configure.php");
	
        session_start();
	
		$roll=$_SESSION['Roll'];
		$get="select * from student where Roll_No='$roll'";
		$sql=mysqli_query($connection,$get);

    $check = mysqli_num_rows($sql);

    if($check == 0)
        echo "You have no enteries in database.";

    while($row1 = mysqli_fetch_assoc($sql))
    {
		$name=$row1['Name'];
		$dept=$row1['Dept_Name'];
		$prog=$row1['Prog_Name'];
		$cpi=$row1['CPI'];
		$eml=$row1['Email'];
	}
	$get1="select * from jobs where J_ID='$jid'";
$sql1=mysqli_query($connection,$get1);

    
    $check1 = mysqli_num_rows($sql1);

    if($check1 == 0)
        echo "You have no enteries in database.";

    while($row = mysqli_fetch_assoc($sql1))
    {
		$cid=$row['C_ID'];
		$jname=$row['Position_offering'];
	}
        $sql2="INSERT INTO apply(Name,Rollno,email,Department,Programme,cpi,c_id,j_id,Jobname,validity)VALUES('$name','$roll','$eml','$dept','$prog','$cpi','$cid','$jid','$jname','1')";
         if (mysqli_query($connection,$sql2))
        {		
           
		 echo "<script type='text/javascript'>alert('You have Successfully Submitted your Response!!')</script>";
		 echo "<script language='javascript' type='text/javascript'> location.href='studentalogin.php' </script>";  
          }
          else
          {
        echo "<script type='text/javascript'>alert('You have already applied for the same job!!')</script>";
		echo "<script language='javascript' type='text/javascript'> location.href='studentalogin.php' </script>";  
        }
			}
        ?>
