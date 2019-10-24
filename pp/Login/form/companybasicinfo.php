<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Company Registration Form</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <!--<link rel="stylesheet" type="text/css" href="css/default.css"/>-->
		<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
    </head>
    <body>    
	<div class="limiter">
		
		<div class="container-login100">
		
			<div class="wrap-login100">
			<br><br>
<a href="Afteradminlogin.php"><i class="fa fa-arrow-circle-left" style="font-size:36px; align:right;"></i></a>
        <form action="" class="register" method="post">
            <h1>Company Validation</h1>
            <fieldset class="row1">
                <legend><br><br><h3>Login Details</h3><br>
                </legend>
                <p>
					<table>
                    <tr>
                                <td>Company Username</td></td><td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input class="input100" id="username" name=
                                "username" type="text" placeholder="Username"></td>
                            </tr>
					</table>
                </p><br>
					<p>
					<table><tr><td>Password *
						<input type="password" class="input100" name="pass" id="txtNewPassword" placeholder="Password"/>
					</td><td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td><td>
					Confirm Password *
						<input type="password" class="input100" id="txtConfirmPassword" placeholder="Password" onChange="checkPasswordMatch();" />
					
						<div class="registrationFormAlert" id="divCheckPasswordMatch">
					</div></td>
                    </tr></table>
                </p><br>
            </fieldset><hr><hr>
            
			<div class="container-login100-form-btn">
						
						<div><input type='submit' name='submit' class="login100-form-btn" value="Register"/></div>&nbsp;&nbsp;&nbsp;&nbsp;<div>
						<input type='reset' name='reset' class="login100-form-btn" value="Reset"/></div>
					</div>
        </form>
		<?php
       if (isset($_POST['submit']))
            {     
        include("configure.php");
	echo "Connected to Database";
        //session_start();
		$rno=$_POST['username'];
	$pass=$_POST['pass'];
	if(mysqli_num_rows(mysqli_query($connection,"select * from company_login where username='$rno'"))==0){
	$sql="INSERT INTO company_login(username,Password,validity)VALUES('$rno', '$pass','1')";
         if (mysqli_query($connection,$sql))
        {		
           
		 echo "<script type='text/javascript'>alert('Company Has Been successfully registered!')</script>";
		 echo "<script language='javascript' type='text/javascript'> location.href='Afteradminlogin.php' </script>";  
          }
          else
          {
        echo "<script type='text/javascript'>alert('Error!!!!')</script>";
        }
			}
			else
			{
				echo "<script type='text/javascript'>alert('Username already exists!!!!!')</script>";
			}
			}
        ?>
		</div>
		</div>
	</div>
		<script>
	function checkPasswordMatch() {
    var password = $("#txtNewPassword").val();
    var confirmPassword = $("#txtConfirmPassword").val();

    if (password != confirmPassword)
        $("#divCheckPasswordMatch").html("Passwords do not match!");
    else
        $("#divCheckPasswordMatch").html("Passwords match.");
}

$(document).ready(function () {
   $("#txtConfirmPassword").keyup(checkPasswordMatch);
});


</script>
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





