<?php error_reporting(E_ERROR); ?>
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
	<?php

include("configure.php");
session_start();
$username = $_SESSION["Rollno"];
$get1="select * from student where Roll_No='$username'";
$get2="select * from student_login where Rollno='$username'";
$sql1=mysqli_query($connection,$get1);
$sql2=mysqli_query($connection,$get2);
//$get = @mysql_query("SELECT * FROM items WHERE owner = '$username'");
    
    $check1 = mysqli_num_rows($sql1);

    if($check1 == 0)
        echo "You have no Student Detail enteries in database.";

    while($row = mysqli_fetch_assoc($sql1))
    {
       // echo "<p>Roll Number:" . $row['Roll_No'] . "</p></br>";
        $a=$row['Roll_No'];
 	//echo "<p>Name  :" . $row['Name'] . "</p></br>";
        $b=$row['Name']; 
	//echo "<p>Department name :" . $row['Dept_Name'] . "</p></br>";
   	$c=$row['Dept_Name'];
	//echo "<p>Program:" . $row['Prog_Name'] . "</p></br>";
	$d=$row['Prog_Name'];
	//echo "<p>CPI  :" . $row['CPI'] . "</p></br>";
	$e=$row['CPI'] ;
	//echo "<p>Phone Number :" . $row['Phone_No'] . "</p></br>";
	$f=$row['Phone_No'] ;
	//echo "<p>Email :" . $row['Email'] . "</p></br>";
	$g=$row['Email'] ;
	//echo "<p>Website :" . $row['Website'] . "</p></br>";
	$h=$row['Website'] ;
	//echo "<p>Locality :" . $row['Locality'] . "</p></br>";
	$i= $row['Locality'];
	//echo "<p>District :" . $row['District'] . "</p></br>";
 	$j=$row['District'];
	//echo "<p>State :" . $row['State'] . "</p></br>";
	$k=$row['State'];
        //echo "<p>Gender :" . $row['Gender'] . "</p></br>";
	$l=$row['Gender'];
	//echo "<p>Day :" . $row['Day'] . "</p></br>";
	$m=$row['Day'];
	//echo "<p>Month :" . $row['Month'] . "</p></br>";
	$n=$row['Month'];
	//echo "<p>Year :" . $row['Yr'] . "</p></br>";
	$o=$row['Yr'];	
	$z=$row['CV'];
	$zz=$row['Profile'];
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
	
    }

?>
		<div class="limiter">
		
		<div class="container-login100">
		
			<div class="wrap-login100">
			<br><br>
<a href="studentalogin.php"><i class="fa fa-arrow-circle-left" style="font-size:36px; align:right;"></i></a>
        <form action="" class="register" method="post" enctype="multipart/form-data">
            <h1>Updation</h1>
            <fieldset class="row1">
                <legend><br><br><h3>Login Details</h3><br>
                </legend>
                <p>
					<table>
                    <tr>
                                <td>Roll Number</td><td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td width="100%"><input class="input100" id="rno" name=
                                "rno" type="number" maxlength="7" placeholder="e.g. 1601050" value=<?php echo $a ; ?> readonly ></td>
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
                <legend><h3>Personal Details</h3>
                </legend><br>
                <p>
                    <table>
                    <tr>
                                <td>Name</td><td>&nbsp;</td>
                                <td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input class="input100" id="name" name=
                                "name" type="text" placeholder="Name" value=<?php echo $b ; ?> readonly></td>
                            </tr>
					</table>
                </p>
				<br>
				<p>
							
				Upload Profile Image(File name must start with your Roll number)<br>
				<input type="file" name="prof" /> <span><?php echo $zz ?></span>
                </p>
				<br>
				<p>
                    <table>
                    <tr>
                                <td>Department Name</td><td>&nbsp;</td>
                                <td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input class="input100" id="dept" name=
                                "dept" type="text"onfocus="this.value=''" placeholder="CSE/ECE" value=<?php echo $c ; ?>></td>
                            </tr>
					</table>
                </p><br>
				<p>
                    <table>
                    <tr>
                                <td>Programme</td><td>&nbsp;</td>
                                <td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input class="input100" id="prog" name=
                                "prog" type="text" onfocus="this.value=''"  placeholder="BTech/Mtech/Phd" value=<?php echo $d ; ?>></td>
                            </tr>
					</table>
                </p><br>
				<p>
                    <table>
                    <tr>
                                <td>CPI</td><td>&nbsp;</td>
                                <td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input class="input100" id="cpi" name=
                                "cpi" type="number" onfocus="this.value=''" step=".01" placeholder="e.g. 8.8" value=<?php echo $e ; ?>></td>
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
                                "phone" type="phone" placeholder="Contact No." onfocus="this.value=''"  value=<?php echo $f ; ?>></td>
                            </tr>
					</table>
                </p><br>
				<p>
                    <table>
                    <tr>
                                <td>Email</td><td>&nbsp;</td>
                                <td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input class="input100" id="email" name=
                                "email" type="email" placeholder="Email" onfocus="this.value=''"  value=<?php echo $g ; ?>></td>
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
                                "locality" type="text" placeholder="area" onfocus="this.value=''"  value=<?php echo $i ; ?>></td>
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
                                "distt" type="text" placeholder="District" onfocus="this.value=''" value=<?php echo $j ; ?>></td>
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
                                "state" type="text" placeholder="e.g.U.p." onfocus="this.value=''" value=<?php echo $k ; ?>></td>
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
                                "website" type="url" onfocus="this.value=''" value=<?php echo $h ; ?>/></td>
                            </tr>
					</table>
				</p><br>
				<p>
				Upload CV (File name must start with your Roll number)<br>
				<input type="file" name="pdf"/><span><?php echo $z ?></span>
				</p><br>
            </fieldset>
			<hr><hr>
            <fieldset class="row3">
                <legend><h3>Further Information</h3>
                </legend><br>
                <p>
                    <label>Gender</label>
                    <input id="gen" type="radio" value="Male" name="gen" >Male
					<input id="gen" type="radio" value="Female"  name="gen" >Female
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
                    <input name="year" type="text" onfocus="this.value=''" size="4" maxlength="4" value=<?php echo $o ?> placeholder="year"/>
                </p><br>
                
</input>
            </fieldset>
			<hr><hr>
			<div class="container-login100-form-btn">
						
						<div><input type='submit' name='submit' class="login100-form-btn" value="Confirm Update"/></div>&nbsp;&nbsp;&nbsp;&nbsp;<div>
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
	echo "Connected to Database";
        //session_start();
        $rno=$_POST['rno'];
        $uname=$_POST['name'];
	$pass=$_POST['pass'];
	$dept=$_POST['dept'];
	$prgm=$_POST['prog'];
	$cpi=$_POST['cpi'];
	$cno=$_POST['phone'];
	$eml=$_POST['email'];
	$webs=$_POST['website'];
    $locl=$_POST['locality'];
	$dist=$_POST['distt'];
	$gender=$_POST['gen'];
	$stat=$_POST['state'];
	$day=$_POST['date'];
	$month=$_POST['month'];
	$year=$_POST['year'];
	
	
	
	$target1=$target1.basename($_FILES['prof']['name']);
$target=$target.basename($_FILES['pdf']['name']);
$f1=1;
$f2=1;
echo $target;
echo $target1;
if($target=="files/")
	$f1=0;
if($target1=="profile/")
	$f2=0;
 //Getting Selected PDF Type
 if($f1==1){
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
 }else{
  //if not error encountered 
   //Moving The PDF or Doc file to Desired Directory
  $uplaod_success=move_uploaded_file($_FILES['pdf']['tmp_name'],$target);
  if($uplaod_success==TRUE){
	  echo 'Uploaded';
   //Getting Selected PDF Information
   $name=$_FILES['pdf']['name'];
   $size=$_FILES['pdf']['size'];
  
        $sql2="update student set CV='$name',Dept_Name='$dept',Prog_Name='$prgm',CPI='$cpi',Phone_No='$cno',Email='$eml',  
		Website='$webs',Locality='$locl',District='$dist',State='$stat',Gender='$gender',Day='$day',Month='$month',Yr='$year' where Roll_No='$rno'";
         if (mysqli_query($connection,"update student_login set Password='$pass' where Rollno='$rno'") && mysqli_query($connection,$sql2))
        {		
           
		 echo "--------Done-------";
          }
	
		  else{
		  echo "<script type='text/javascript'>alert('Details of user already exist go to <UPDATE> to update them!!!!!')</script>";
		  echo "<script language='javascript' type='text/javascript'> location.href='studentalogin.php' </script>";
		  }
  }
}
 }
 else{
        $sql2="update student set Dept_Name='$dept',Prog_Name='$prgm',CPI='$cpi',Phone_No='$cno',Email='$eml',  
		Website='$webs',Locality='$locl',District='$dist',State='$stat',Gender='$gender',Day='$day',Month='$month',Yr='$year' where Roll_No='$rno'";
         if (mysqli_query($connection,"update student_login set Password='$pass' where Rollno='$rno'") && mysqli_query($connection,$sql2))
        {		
           
		 echo "--------Done-------";
          }
	
		  else{
		  echo "<script type='text/javascript'>alert('Error!!')</script>";
		 // echo "<script language='javascript' type='text/javascript'> location.href='studentalogin.php' </script>";
		  }
 }
 if($f2==1){
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
		  echo "<script type='text/javascript'>alert('Error!!!!!')</script>";
		echo "<script language='javascript' type='text/javascript'> location.href='studentalogin.php' </script>";
		  }
  }
}
 }
 else{
	    
		 echo "<script type='text/javascript'>alert('You have addedddd your details')</script>";
		 echo "<script language='javascript' type='text/javascript'> location.href='studentalogin.php' </script>";
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
