<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Company Deletion Form</title>
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
			<a href="Afteradminlogin.php"><i class="fa fa-arrow-circle-left" style="font-size:36px; align:right;"></i></a>
        <form action="" class="register" method="post">
            <h1>Coordinator Removal</h1>
            <fieldset class="row1">
                <legend><br><br><h3>Login Details</h3><br>
                </legend>
                <p>
					<table>
                    <tr>
                                <td>CoordinatorID</td></td><td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input class="input100" id="coordinatorid" name=
                                "coordinatorid" type="text" placeholder="Coordinatorid"></td>
                            </tr>
					</table>
                </p><br>
                
            	<div class="container-login100-form-btn">
						
						<div><input type='submit' name='submit' class="login100-form-btn" value="Delete"/></div>&nbsp;&nbsp;&nbsp;&nbsp;<div>
						<input type='reset' name='reset' class="login100-form-btn" value="Reset"/></div>
					</div>
        </form>
		<?php
       if (isset($_POST['submit']))
            {     
        include("configure.php");
	echo "Connected to Database";
        //session_start();
	$rno=$_POST['coordinatorid'];
        	$sql="UPDATE admin_login SET validity='0' WHERE ID='$rno'";
	//mysqli_query($connection,$sql);
        $sql2="UPDATE  admin SET validity='0' WHERE ID='$rno'";
         if ((mysqli_query($connection,$sql)) && (mysqli_query($connection,$sql2)))
        {		
           
		 echo "<script type='text/javascript'>alert('Coordinator Has Been successfully Disabled!')</script>";
		 echo "<script language='javascript' type='text/javascript'> location.href='Afteradminlogin.php' </script>";  
          }
          else
          {
        echo "<script type='text/javascript'>alert('ERROR IN Deletion!!!!!')</script>";
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





