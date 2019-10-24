<?php session_start(); 
error_reporting(E_ERROR);
// define variables and set to empty values
$nameErr = $emailErr = $orge= $countrye=$anameerr=$dsge= $offe="";
$uname="";
 $webs="http://";
 $cno="";
 $locl="";
	$org="";
	$off="";
	$cphone="";
	$countr="";
	$cname="";
	$dsg="";
	$eml="";
	$flag=1;
	$flag1=1;
	$flag2=1;
	$flag3=1;
	$flag4=1;
	$flag5=1;
	$flag6=1;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$cno=$_POST['phone'];
	
	$webs=$_POST['website'];
        $locl=$_POST['add'];
		$cphone=$_POST['cphone'];
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
	$flag=0;
  } else {
    $uname = $_POST["name"];
	$flag=1;
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$uname)) {
		$flag=0;
      $nameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["org"])) {
	  $flag1=0;
    $orge = "Organization is required";
  } else {
    $org = $_POST["org"];
	$flag1=1;
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$org)) {
		$flag1=0;
      $orge = "Only letters and white space allowed";
    }
  }
 
    $countr = $_POST["count"];
	$flag2=1;
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$countr)) {
		$flag2=0;
      $countrye = "Only letters and white space allowed";
    }
  if (empty($_POST["cname"])) {
	  $flag3=0;
    $anameerr = "Name is required";
  } else {
	  $flag3=1;
    $cname = $_POST["cname"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$cname)) {
		$flag3=0;
      $anameerr= "Only letters and white space allowed";
    }
  }
  if (empty($_POST["designation"])) {
	  $flag4=0;
    $dsge = "Designation is required";
  } else {
	  $flag4=1;
    $dsg = $_POST["designation"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$dsg)) {
		$flag4=0;
      $dsge = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["offer"])) {
	  $flag5=0;
    $offe= "Offer number is required";
  } else {
	  $flag5=1;
    $off = $_POST["offer"];
    // check if name only contains letters and whitespace
  }
  
  if (empty($_POST["email"])) {
	  $flag6=0;
    $emailErr = "Email is required";
  } else {
	  $flag6=1;
    $eml = $_POST["email"];
  }
    
 
}
	
	?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Company Registration Form</title>
		
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
    <body>    
	<div class="limiter">
		
		<div class="container-login100">
		
			<div class="wrap-login100">
			<br><br>
<a href="companyalogin.php"><i class="fa fa-arrow-circle-left" style="font-size:36px; align:right;"></i></a>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="register" method="post">
            <h1>Company Registration</h1>
            
              <br><hr><hr><br>
            <fieldset class="row2">
                <legend><h3>Company Details</h3>
                </legend><br>
                <p>
                    <table>
                    <tr>
                                <td>Name *</td><td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input class="input100" id="name" name=
                                "name" type="text" placeholder="Name" value=<?php echo $uname?> ><span class="error"> <?php echo $nameErr;?></span></td>
                            </tr>
					</table>
                </p>
				<br>
				<p>
                    <table>
                    <tr>
                                <td>Organization Type *</td><td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input class="input100" id="org" name=
                                "org" type="text" placeholder="Private/Govt." value=<?php echo $org?> ><span class="error"><?php echo $orge;?></span></td>
                            </tr>
					</table>
                </p><br>
				<p>
                    <table>
                    <tr>
                                <td>Number of Jobs Offering *</td><td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input class="input100" id="offer" name=
                                "offer" type="number"  placeholder="2/3/4/..." value=<?php echo $off?> ><span class="error"><?php echo $offe;?></span></td>
                            </tr>
					</table>
                </p><br>
                <p>
                    <table>
                    <tr>
                                <td>Telephone</td><td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input class="input100" id="phone" name=
                                "phone" type="number" placeholder="Company contact" value=<?php echo $cno?> ></td>
                            </tr>
					</table>
                </p><br>
				<p>
                    <table>
                    <tr>
                                <td>Email *</td><td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input class="input100" id="email" name=
                                "email" type="email"  placeholder="Email" value=<?php echo $eml?> ><span class="error"> <?php echo $emailErr;?></span></td>
                            </tr>
					</table>
                </p><br>
                <p>
                    <table>
                    <tr>
                                <td>Address</td><td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input class="input100" id="add" name=
                                "add" type="text"  placeholder="Headquarters/Permanent office" value=<?php echo $locl?>></td>
                            </tr>
					</table>
                </p><br>
                <p>
                    <table>
                    <tr>
                                <td>Country</td><td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input class="input100" id="count" name=
                                "count" type="text"  placeholder="India" value=<?php echo $countr?> ><span class="error"> <?php echo $countrye;?></span></td>
                            </tr>
					</table>
                </p><br>
          
                <p>
                    <table>
                    <tr>
                                <td>Website *</td><td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input class="input100" id="website" name=
                                "website" type="url" value=<?php echo $webs?> ></td>
                            </tr>
					</table>
				</p>
            </fieldset><hr><hr>
            <fieldset class="row3">
                <legend><h3>Contact Person Information</h3>
                </legend><br>
               <p>
                    <table>
                    <tr>
                                <td>Name *</td><td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input class="input100" id="cname" name=
                                "cname" type="text" placeholder="Name" value=<?php echo $cname;?> ><span class="error" > <?php echo $anameerr;?></span></td>
                            </tr>
					</table>
                </p><br>
				<p>
                    <table>
                    <tr>
                                <td>Designation *</td><td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input class="input100" id="designation" name=
                                "designation" type="text" placeholder="dsgn"  value=<?php echo $dsg; ?> ><span class="error"> <?php echo $dsge;?></span></td>
                            </tr>
					</table>
                </p><br>
				<p>
                    <table>
                    <tr>
                                <td>Phone Number</td><td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input class="input100" id="cphone" name=
                                "cphone" type="number" value=<?php echo $cphone; ?> placeholder="Contact no."></td>
                            </tr>
					</table>
                </p>
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
	
        
		$rno=$_SESSION['c_id'];
	if(mysqli_num_rows(mysqli_query($connection,"select * from company where C_ID='$rno'"))!=0){
		echo "<script type='text/javascript'>alert('Details of user already exist go to <UPDATE> to update them!!!!!')</script>";
		 echo "<script language='javascript' type='text/javascript'> location.href='companyalogin.php' </script>";  
	}
	else{
		if($flag==1 && $flag1==1 && $flag2==1 && $flag3==1 && $flag4==1 && $flag5==1 && $flag6==1  ){
        $sql2="INSERT INTO company(C_ID,Name,Website,Email,Telephone_No,No_Of_Jobs_Offer,Address,
		Contact_Person,Desgination,Org_Type,Phone_No,Countryy,validity)VALUES
		('$rno','$uname','$webs','$eml','$cno','$off','$locl','$cname','$dsg','$org','$cphone','$countr','1')";
         if (mysqli_query($connection,$sql2))
        {		
           
		 echo "<script type='text/javascript'>alert('Your details have successfully added!')</script>";
		 echo "<script language='javascript' type='text/javascript'> location.href='companyalogin.php' </script>";  
          }
		}
		else
			echo "Check your details";
          
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





