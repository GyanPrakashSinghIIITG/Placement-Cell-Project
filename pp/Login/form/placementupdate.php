<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Notify</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <!--<link rel="stylesheet" type="text/css" href="css/default.css"/>-->
		<link rel="icon" href="iiitgic.png">
		<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
    </head>
	<img src="images/bg.jpg" id="bg" alt="">

<style>
html {
  background: url(bgs.jpg) no-repeat center center fixed;
  background-size: cover;
  height: 100%;
}
</style>
    <body >  
		<div class="limiter">
		
		<div class="container-login100">
		
			<div class="wrap-login100">
			<br><br>
<a href="companyalogin.php"><i class="fa fa-arrow-circle-left" style="font-size:36px; align:right;"></i></a>
        <form action="" class="register" method="post">
            
                
				<p>
                    <table>
                    <tr>
                                <td>Enter Email of Selected Student</td></tr><tr>
                                
                                <td><input class="input100" id="email" name=
                                "email" type="email" placeholder="Email"></td>
                            </tr>
					</table>
                </p><br>
				<p>
                    <table>
                    <tr>
                                <td>For position</td></tr><tr>
                                
                                <td><input class="input100" id="pos" name=
                                "pos" type="pos" ></td>
                            </tr>
					</table>
                </p><br>
                
			<hr><hr>
			<div class="container-login100-form-btn">
						
						<div><input type='submit' name='submit' class="login100-form-btn" value="Submit"/></div>&nbsp;&nbsp;&nbsp;&nbsp;<div>
						<input type='reset' name='reset' class="login100-form-btn" value="Reset"/></div>
					</div>
        </form>
		<?php
       if (isset($_POST['submit']))
            {     
        include("configure.php");
	echo "Connected to Database";
        session_start();
		$cid=$_SESSION['c_id'];
		$cname=$_SESSION['cname'];
	$eml=$_POST['email'];
	$pos=$_POST['pos'];
	$get1="select * from student where Email='$eml'";
	$sql1=mysqli_query($connection,$get1);

    
    $check1 = mysqli_num_rows($sql1);

    if($check1 == 0)
        echo "No  Students Available !..";
    while($row = mysqli_fetch_assoc($sql1))
    {
       
                $a=$row['Roll_No'];
				$b=$row['Dept_Name'];
				$c=$row['Prog_Name'];
				$d=$row['Name'];
	}
	$get2="select * from jobs where C_ID='$cid' and Position_offering='$pos'";
	$sql2=mysqli_query($connection,$get2);

    
    $check2 = mysqli_num_rows($sql2);

    if($check2 == 0)
        echo "No Jobs Available !..";
    while($row1 = mysqli_fetch_assoc($sql2))
    {
		$zz=$row1['J_ID'];
       
                $e=$row1['Salary'];
				$f=$row1['Job_location'];
	}
	$yrea=date("Y");
	$sql="INSERT INTO record(Rollno,student_name,Department,Programme,Company,position,package,work_location,validity,jid,Year_Of_Placement)VALUES('$a', '$d','$b','$c','$cname','$pos','$e','$f','1','$zz','$yrea')";
       
         if (mysqli_query($connection,$sql))
        {		
           
		 echo "<script type='text/javascript'>alert('Student have been informed!')</script>";
		 echo "<script language='javascript' type='text/javascript'> location.href='companyalogin.php' </script>";
          }
          else
          {
        echo "<script type='text/javascript'>alert('Email not exist!!!!')</script>";
        }
			}
        ?>
	</div>
		</div>
	</div>
<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../vendor/select2/select2.min.js"></script>
	<script src="../vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="../js/main.js"></script>	
    </body>
</html>
