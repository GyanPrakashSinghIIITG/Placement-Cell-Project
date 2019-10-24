<?php   session_start();
error_reporting(E_ERROR);
$nameErr = $emailErr = $orge= $countrye=$yre=$anameerr=$dsge= $offe="";
$uname="";
 $webs="http://";
 $cno="";
 $locl="";
	$eml="";
	$yr="";
	$dist="";
	$stat="";
	$dept="";
	$prgm="";
	$cpi="";
	$year="";
	$flag=1;
	$flag1=1;
	$flag2=1;
	$flag3=1;
	$flag4=1;
	$flag5=1;
	$flag6=1;
	$flag7=1;
	

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$cno=$_POST['phone'];
	$webs=$_POST['website'];
        $locl=$_POST['locality'];
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
  if (empty($_POST["dept"])) {
	  $flag1=0;
    $orge = "Department is required";
  } else {
    $dept = $_POST["dept"];
	$flag1=1;
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$dept)) {
		$flag1=0;
      $orge = "Only letters and white space allowed";
    }
  }
 
    $stat = $_POST["state"];
	$flag2=1;
	
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$stat)) {
		$flag2=0;
      $countrye = "Only letters and white space allowed";
    }
	$dist = $_POST["distt"];
	$flag3=1;
	
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$dist)) {
		$flag3=0;
      $anameerr = "Only letters and white space allowed";
    }
  if (empty($_POST["prog"])) {
	  $flag4=0;
    $dsge = "Programme name is required";
  } else {
	  $flag4=1;
    $prgm = $_POST["prog"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$prgm)) {
		$flag4=0;
      $dsge = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["cpi"])) {
	  $flag5=0;
    $offe= "CPI is required";
  } else {
	  $flag5=1;
    $cpi = $_POST["cpi"];
	if($cpi>10 or $cpi < 1)
	{
		$offe="Invalid CPI";
		$flag5=1;
	}
    // check if name only contains letters and whitespace
  }
    if (empty($_POST["yr"])) {
	  $flag6=0;
    $yre= "Year is required";
  } else {
	  $flag6=1;
    $yr = $_POST["yr"];
    // check if name only contains letters and whitespace
  }
  if (empty($_POST["email"])) {
	  $flag7=0;
    $emailErr = "Email is required";
  } else {
	  $flag7=1;
    $eml = $_POST["email"];
  }
    
 $year=$_POST['year'];
}
 ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Student Registration Form</title>
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
			
<a href="studentalogin.php"><i class="fa fa-arrow-circle-left" style="font-size:36px; "></i></a>
			
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="register" method="post" enctype="multipart/form-data">
		<h1 align="center">Registration</h1>

            <br><hr><hr><br>
            <fieldset class="row2">
                <legend><h3>Personal Details</h3>
                </legend><br>
                <p>
                    <table>
                    <tr>
                                <td>Name *</td><td>&nbsp;</td>
                                <td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
<td>
							<input class="input100" id="name" name=
                                "name" type="text" placeholder="Name" value=<?php echo $uname?> ><span class="error"> <?php echo $nameErr;?></span></td></tr></table></p><br>
								<p>
							
				Upload Profile Image(File name must start with your Roll number) **
				<input type="file" name="prof" />
				
                </p>
				<br>
				<p>
                    <table>
                    <tr>
                                <td>Department Name *</td><td>&nbsp;</td>
                                <td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input class="input100" id="dept" name=
                                "dept" type="text"placeholder="CSE/ECE" value=<?php echo $dept?> ><span class="error"> <?php echo $orge;?></span></td>
                            </tr>
					</table>
                </p><br>
				<p>
                    <table>
                    <tr>
                                <td>Programme *</td><td>&nbsp;</td>
                                <td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input class="input100" id="prog" name=
                                "prog" type="text" placeholder="BTech/Mtech/Phd" value=<?php echo $prgm?> > <span class="error"> <?php echo $dsge;?></span></td>
                            </tr>
					</table>
                </p><br>
				<p>
                    <table>
                    <tr>
                                <td>CPI *</td><td>&nbsp;</td>
                                <td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input class="input100" id="cpi" name=
                                "cpi" type="number" step=".01" placeholder="e.g. 8.8" value=<?php echo $cpi?>><span class="error"> <?php echo $offe;?></span></td>
                            </tr>
					</table>
                </p><br>
				<p>
                    <table>
                    <tr>
                                <td>Year Of Admission *</td><td>&nbsp;</td>
                                <td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input class="input100" id="yr" name=
                                "yr" type="number" placeholder="Admission Year" value=<?php echo $yr?> ><span class="error"> <?php echo $yre;?></span></td>
                            </tr>
					</table>
                </p><br>
                <p>
                    <table>
                    <tr>
                                <td>Phone</td><td>&nbsp;</td>
                                <td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input class="input100" id="phone" name=
                                "phone" type="number" placeholder="Contact No." value=<?php echo $cno?>></td>
                            </tr>
					</table>
                </p><br>
				<p>
                    <table>
                    <tr>
                                <td>Email *</td><td>&nbsp;</td>
                                <td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input class="input100" id="email" name=
                                "email" type="email" placeholder="Email" value=<?php echo $eml?>><span class="error"> <?php echo $emailErr;?></span></td>
                            </tr>
					</table>
                </p><br>
                <p>
                    <table>
                    <tr>
                                <td>Locality</td><td>&nbsp;</td>
                                <td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input class="input100" id="locality" name=
                                "locality" type="text" placeholder="area" value=<?php echo $locl?> ></td>
                            </tr>
					</table>
                </p><br>
                <p>
                    <table>
                    <tr>
                                <td>District</td><td>&nbsp;</td>
                                <td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input class="input100" id="distt" name=
                                "distt" type="text" placeholder="District" value=<?php echo $dist?> ><span class="error"> <?php echo $anameerr;?></span></td>
                            </tr>
					</table>
                </p><br>
                <p>
                    <table>
                    <tr>
                                <td>State</td><td>&nbsp;</td>
                                <td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input class="input100" id="state" name=
                                "state" type="text" placeholder="e.g.U.p." value=<?php echo $stat?>><span class="error"> <?php echo $countrye;?></span></td>
                            </tr>
					</table>
                </p><br>
                <p>
                    <table>
                    <tr>
                                <td>Website</td><td>&nbsp;</td>
                                <td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input class="input100" id="website" name=
                                "website" type="url" value=<?php echo $webs?> ></td>
                            </tr>
					</table>
				</p><br>
				<p>
				Upload CV (File name must start with your Roll number)
				<input type="file" name="pdf" />
				</p><br>
            </fieldset>
			<hr><hr>
            <fieldset class="row3">
                <legend><h3>Further Information</h3>
                </legend><br>
                <p>
                    <label>Gender *</label>
                    <input id="gen" type="radio" value="Male" name="gen">Male
					<input id="gen" type="radio" value="Female" name="gen">Female
                </p><br>
                <p>
                    <label>Birthdate
                    </label>
                    <select name="date">
                        <option value="1">01
                        </option>
                        <option value="2">02
                        </option>
                        <option value="3">03
                        </option>
                        <option value="4">04
                        </option>
                        <option value="5">05
                        </option>
                        <option value="6">06
                        </option>
                        <option value="7">07
                        </option>
                        <option value="8">08
                        </option>
                        <option value="9">09
                        </option>
                        <option value="10">10
                        </option>
                        <option value="11">11
                        </option>
                        <option value="12">12
                        </option>
                        <option value="13">13
                        </option>
                        <option value="14">14
                        </option>
                        <option value="15">15
                        </option>
                        <option value="16">16
                        </option>
                        <option value="17">17
                        </option>
                        <option value="18">18
                        </option>
                        <option value="19">19
                        </option>
                        <option value="20">20
                        </option>
                        <option value="21">21
                        </option>
                        <option value="22">22
                        </option>
                        <option value="23">23
                        </option>
                        <option value="24">24
                        </option>
                        <option value="25">25
                        </option>
                        <option value="26">26
                        </option>
                        <option value="27">27
                        </option>
                        <option value="28">28
                        </option>
                        <option value="29">29
                        </option>
                        <option value="30">30
                        </option>
                        <option value="31">31
                        </option>
                    </select>
                    <select name="month">
                        <option value="1">January
                        </option>
                        <option value="2">February
                        </option>
                        <option value="3">March
                        </option>
                        <option value="4">April
                        </option>
                        <option value="5">May
                        </option>
                        <option value="6">June
                        </option>
                        <option value="7">July
                        </option>
                        <option value="8">August
                        </option>
                        <option value="9">September
                        </option>
                        <option value="10">October
                        </option>
                        <option value="11">November
                        </option>
                        <option value="12">December
                        </option>
                    </select>
                    <input name="year" type="number" size="4" maxlength="4" placeholder="year" value=<?php echo $year?>>
                </p><br>
                
</input>
            </fieldset>
			<hr><hr>
			<div class="container-login100-form-btn">
						
						<div><input type='submit' name='submit' class="login100-form-btn" value="Register"/></div>&nbsp;&nbsp;&nbsp;&nbsp;<div>
						<input type='reset' name='reset' class="login100-form-btn" value="Reset"/></div>
					</div>
        </form>
		<?php
		$errors=1;
		$err=1;
 //Targeting Folder
 $target="files/";
 $target1="profile/";
       if (isset($_POST['submit']))
            {     
        include("configure.php");
	
      
        $rno=$_SESSION['Roll'];
	$gender=$_POST['gen'];
	$day=$_POST['date'];
	$month=$_POST['month'];
	if($flag==1 && $flag1==1 && $flag2==1 && $flag3==1 && $flag4==1 && $flag5==1 &&$flag6==1 && $flag7==1){
	$target1=$target1.basename($_FILES['prof']['name']);
$target=$target.basename($_FILES['pdf']['name']);
 //Getting Selected PDF Type
 $type=pathinfo($target,PATHINFO_EXTENSION);
 //Allow Certain File Format To Upload
 if($type!='pdf' && $type!='doc' && $type!='docx'){
  echo "Only PDF,DOC,DOCX files format are allowed to Upload";
  $errors=0;
 }
 //Checking for File Size 1000000 bytes== 1MB
  $filesize=$_FILES['pdf']['size'];
if ($filesize < 100 && $filesize< 4000000){
   echo 'You Can not Upload Large File(4MB)'; 
    $errors=0;
   }
  //checking for Exsisting Doc File Files
  if(file_exists($target)){
   echo "File Of this Name Already Exist";
   echo "<br>";
   $errors=0;
  }
 // Check if $errors is set to 0 by an error
 if($errors==0){
  echo 'Your File Not Uploaded';
     echo "<script type='text/javascript'>alert('Upload/Modify your CV')</script>";
 }else{
  //if not error encountered 
   //Moving The PDF or Doc file to Desired Directory
  $uplaod_success=move_uploaded_file($_FILES['pdf']['tmp_name'],$target);
  if($uplaod_success==TRUE){
	  echo 'Uploaded';
   //Getting Selected PDF Information
   $name=$_FILES['pdf']['name'];
   $size=$_FILES['pdf']['size'];
  

 
	$sql=mysqli_query($connection,"select * from student where Roll_No='$rno'");
	echo mysqli_num_rows($sql);
	if(mysqli_num_rows($sql)==0){
		
        $sql2="INSERT INTO student(Roll_No,CV,Name,Dept_Name,Prog_Name,CPI,Phone_No,Email,Website,Locality,District,State,Gender,Day,Month,Yr,validity,Year_Of_Admission)VALUES
		('$rno','$name','$uname','$dept','$prgm','$cpi','$cno','$eml','$webs','$locl','$dist','$stat','$gender','$day','$month','$year','1','$yr')";
		
         if ( mysqli_query($connection,$sql2))
        {		
           
		 echo "--------Done-------";
          }
		  else
			  echo "<script type='text/javascript'>alert('Error!!!!')</script>";

	
	}
	
		  else{
		  echo "<script type='text/javascript'>alert('Details of user already exist go to <UPDATE> to update them!!!!!')</script>";
		 echo "<script language='javascript' type='text/javascript'> location.href='studentalogin.php' </script>";
		  }
  }
}
 $type1=pathinfo($target1,PATHINFO_EXTENSION);
 //Allow Certain File Format To Upload
 if($type1!='jpg' && $type1!='jpeg' &&$type1!='bmp' &&$type1!='png' &&$type1!='gif' &&$type1!='eps' && $type1!='tif'){
  echo "Only IMAGE files format are allowed to Upload";
  $err=0;
 }
 //Checking for File Size 1000000 bytes== 1MB
  $filesize=$_FILES['prof']['size'];
if ($filesize < 100 && $filesize< 5000000){
   echo 'You Can not Upload Large File(5MB)'; 
    $err=0;
   }
  //checking for Exsisting Doc File Files
  if(file_exists($target1)){
   echo "Profile Pic Of This Name Already Exist";
   echo "<br>";
   $err=0;
  }
 // Check if $errors is set to 0 by an error
 if($err==0){
  echo 'Your Profile Pic Not Uploaded';
   echo "<script type='text/javascript'>alert('Upload/Modify your Profile Picture')</script>";
 }else{
  //if not error encountered 
   //Moving The PDF or Doc file to Desired Directory
  $uplaod_success=move_uploaded_file($_FILES['prof']['tmp_name'],$target1);
  if($uplaod_success==TRUE){
	  echo 'Profile Pic Uploaded';
   //Getting Selected PDF Information
   $name1=$_FILES['prof']['name'];
   $size=$_FILES['prof']['size'];
  

 
	
        $sql5="UPDATE student set Profile='$name1' where Roll_No='$rno'";
         if ( mysqli_query($connection,$sql5))
        {		
           
		 echo "<script type='text/javascript'>alert('You have added your details')</script>";
		 echo "<script language='javascript' type='text/javascript'> location.href='studentalogin.php' </script>";
          }
	
	
		  else{
		  echo "<script type='text/javascript'>alert('Details of user already exist go to ---<UPDATE>--- to update them!!!!!')</script>";
		echo "<script language='javascript' type='text/javascript'> location.href='studentalogin.php' </script>";
		  }
  }
}
	}
	else
		echo "Check details";
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
