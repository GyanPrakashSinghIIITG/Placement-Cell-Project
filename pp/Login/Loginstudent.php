<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Student</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	
	<div class="limiter">
	
		<div class="container-login100">
			<div class="wrap-login100">
			<a href="../nm.php"><i class="fa fa-arrow-circle-left w3-right" style="font-size:36px;"></i></a>
				<div class="login100-pic js-tilt" data-tilt>
				
					<img src="student.svg" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="" method="post">
					<span class="login100-form-title">
						Student Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid Rollno is required: ex@1601050">
						<input class="input100" type="text" name="username" placeholder="Roll number">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					
					<div class="container-login100-form-btn">
						
						<input type='submit' name='login' class="login100-form-btn" value="Login"/>
					</div>
					

				</form>
				<?php
				if(isset($_POST['login']))
				{
					
					$roll=$_POST['username'];
					$pass=$_POST['pass'];
					
					include("configure.php");
					session_start();
					$_SESSION['Rollno']=$roll;
					$sql="SELECT Rollno from student_login where Rollno='$roll' and Password='$pass' and validity='1'";
					if (mysqli_num_rows(mysqli_query($connection,$sql))==1)
					{		
						echo "<script language='javascript' type='text/javascript'> location.href='form/studentalogin.php' </script>";  
					}
					else
					{
						echo "<script type='text/javascript'>alert('User Name or Password is Incorrect!!!!!')</script>";
					}
				}
			?>
			</div>
		</div>
	</div>
	
	

	

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="js/main.js"></script>

</body>
</html>