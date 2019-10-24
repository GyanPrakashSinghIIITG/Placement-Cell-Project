<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Company Updation Form</title>
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
<?php

include("configure.php");
session_start();
$id = $_SESSION["c_id"];
$get2="select * from company_login where ID='$id'";
$get1="select * from company where C_ID='$id'";
$sql1=mysqli_query($connection,$get1);
$sql2=mysqli_query($connection,$get2);
//$get = @mysql_query("SELECT * FROM items WHERE owner = '$username'");
    
    $check1 = mysqli_num_rows($sql1);

    if($check1 == 0)
        echo "You have no Company Detail enteries in database.";

    while($row = mysqli_fetch_assoc($sql1))
    {
    
 	//echo "<p>Name  :" . $row['Name'] . "</p></br>";
        $b=$row['Name']; 
		$a=$row['Website'];
		$c=$row['Email'];
		$d=$row['Telephone_No'];
		$e=$row['No_Of_Jobs_Offer'];
		$f=$row['Address'];
		$g=$row['Contact_Person'];
		$h=$row['Desgination'];
		$i=$row['Org_Type'];
		$j=$row['Website'];
		$k=$row['Phone_No'];
		$l=$row['Countryy'];
    }
$check2 = mysqli_num_rows($sql2);
if($check2 == 0)
        echo "You have no Student_Login Detail enteries in database.";

    while($row2 = mysqli_fetch_assoc($sql2))
    {
        //echo "<p>Roll Number:" . $row['Roll_No'] . "</p></br>";
        //$p=$row['Roll_No'];
 	//echo "<p>Name  :" . $row['Name'] . "</p></br>";
        $p=$row2['Password']; 
		$x=$row2['username'];
	
    }

?>	
	<div class="limiter">
		
		<div class="container-login100">
		
			<div class="wrap-login100">
			<br><br>
<a href="companyalogin.php"><i class="fa fa-arrow-circle-left" style="font-size:36px; align:right;"></i></a>
        <form action="" class="register" method="post">
            <h1>Company Updation</h1>
			<hr><hr>
			<fieldset class="row1">
                <legend><br><br><h3>Login Details</h3><br>
                </legend>
                <p>
					<table>
                    <tr>
                                <td>Username</td><td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td width="100%"><input class="input100" id="username" name=
                                "username" type="text" placeholder="e.g. name123" value=<?php echo $x ; ?> readonly ></td>
                            </tr>
					</table>
                </p>
			<br>
                <p>
				
                    <table>
                    <tr>
                                <td>Password</td><td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input class="input100" id="pass" name=
                                "pass" type="password" placeholder="Password" onfocus="this.value=''" value=<?php echo $p ; ?>>
					
                    </td><td>Repeat Password</td><td>&nbsp;</td>
                                <td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                   
                    <td><input class="input100" type="password" placeholder="Password" onfocus="this.value=''" value=<?php echo $p ; ?>/></td>
					</tr>
					</table>
                    
                </p>
            </fieldset>
			<hr><hr>
            <fieldset class="row2">
                <legend><h3>Company Details</h3>
                </legend><br>
                <p>
                    <table>
                    <tr>
                                <td>Name</td><td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input class="input100" id="name" name=
                                "name" type="text" value=<?php echo $b ?> placeholder="Name" readonly ></td>
                            </tr>
					</table>
                </p>
				<br>
				<p>
                    <table>
                    <tr>
                                <td>Organization Type</td><td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input class="input100" id="org" name=
                                "org" type="text" value=<?php echo $i ?> onfocus="this.value=''" placeholder="Private/Govt."></td>
                            </tr>
					</table>
                </p><br>
				<p>
                    <table>
                    <tr>
                                <td>Number of Jobs Offering</td><td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input class="input100" id="offer" name=
                                "offer" type="number" value=<?php echo $e ?> onfocus="this.value=''" placeholder="2/3/4/..."></td>
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
                                "phone" type="text" value=<?php echo $d ?> onfocus="this.value=''" placeholder="Company contact"></td>
                            </tr>
					</table>
                </p><br>
				<p>
                    <table>
                    <tr>
                                <td>Email</td><td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input class="input100" id="email" name=
                                "email" type="email" value=<?php echo $c ?> onfocus="this.value=''" placeholder="Email"></td>
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
                                "add" type="text" value=<?php echo $f ?> onfocus="this.value=''" placeholder="Headquarters/Permanent Office"></td>
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
                                "count" type="text" value=<?php echo $l ?> onfocus="this.value=''" placeholder="India"></td>
                            </tr>
					</table>
                </p><br>
                <p>
                    <table>
                    <tr>
                                <td>Website</td><td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input class="input100" id="website" onfocus="this.value=''" name=
                                "website" type="url" value=<?php echo $a ?> /></td>
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
                                <td>Name</td><td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input class="input100" id="cname" name=
                                "cname" type="text" value=<?php echo $g ?> onfocus="this.value=''" placeholder="Name"></td>
                            </tr>
					</table>
                </p><br>
				<p>
                    <table>
                    <tr>
                                <td>Designation</td><td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input class="input100" id="designation" name=
                                "designation" type="text" value=<?php echo $h ?> onfocus="this.value=''" placeholder="dsgn"></td>
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
                                "cphone" type="text" value=<?php echo $k ?> onfocus="this.value=''" placeholder="Contact no."></td>
                            </tr>
					</table>
                </p>
				</fieldset><hr><hr>
			<div class="container-login100-form-btn">
						
						<div><input type='submit' name='submit' class="login100-form-btn" value="Update"/></div>&nbsp;&nbsp;&nbsp;&nbsp;<div>
					</div>
					</div>
        </form>
		<?php
       if (isset($_POST['submit']))
            {     
        include("configure.php");

        session_start();
		$id = $_SESSION["c_id"];
        $uname=$_POST['name'];
	$org=$_POST['org'];
	$pass=$_POST['pass'];
	$off=$_POST['offer'];
	$cno=$_POST['phone'];
	$eml=$_POST['email'];
	$webs=$_POST['website'];
        $locl=$_POST['add'];
	$countr=$_POST['count'];
	$cname=$_POST['cname'];
	$dsg=$_POST['designation'];
	$cphone=$_POST['cphone'];
	$sql="update company_login set Password='$pass' where ID='$id'";
         $sql2="update company set Website='$webs',Email='$eml',Telephone_No='$cno',Phone_No='$cphone',No_Of_Jobs_Offer='$off',   
		 Address='$locl',Countryy='$countr',Org_Type='$org',Contact_Person='$cname',Desgination='$dsg' where C_ID='$id'";
		 
        if (mysqli_query($connection,$sql) && mysqli_query($connection,$sql2))
        {		
           
		 echo "<script type='text/javascript'>alert('Your Details have Been successfully updated!')</script>";
		 echo "<script language='javascript' type='text/javascript'> location.href='companyalogin.php' </script>";
          }
          else
          {
        echo "<script type='text/javascript'>alert('ERROR!!!!!!!!')</script>";
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





