<?php
include("configure.php");
        session_start();
?>
<html>
    <head>
        <title>Job Form</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <!--<link rel="stylesheet" type="text/css" href="css/default.css"/>-->
		<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    </head>
    <body>    
        <form action="" class="register" method="post">
           
			<div class="limiter">
		
		<div class="container-login100">
		
			<div class="wrap-login100">
			 <h1>Job Registration</h1>
            <fieldset class="row1">
			
                <legend><br><br><h3>Job Details</h3><br>
                </legend>
               
				<p>
                    <table>
                    <tr>
                                <td>Position Offering</td><td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input id="posn" name=
                                "posn" class="input100" type="text" placeholder="Offering Position"></td>
                            </tr>
					</table>
                </p><br>
				<p>
                    <table>
                    <tr>
                                <td>Salary Offering</td><td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input id="sal" name=
                                "sal" class="input100" type="number"></td>
                            </tr>
					</table>
                </p>
				<br>
				<p>
                    <table>
                    <tr>
                                <td>Number of Vacancies</td><td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input id="vacancy" name=
                                "vacancy" class="input100" type="number"></td>
                            </tr>
					</table>
                </p><br>
                <p>
                    <table>
                    <tr>
                                <td>Job Location</td><td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input id="loc" name=
                                "loc" class="input100" type="text" placeholder="Work Location"></td>
                            </tr>
					</table>
                </p><br>
				<p>
                    <table>
                    <tr>
                                <td>Bond Year</td><td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input id="bond" name=
                                "bond" class="input100" type="number" placeholder="e.g.2/3/4...."></td>
                            </tr>
					</table>
                </p><br>
                    <hr><hr><hr>
            </fieldset>
            <fieldset class="row2">
                <legend><h3>Job Requirement</h3><br>
                </legend>
               <p>
                    <table>
                    <tr>
                                <td>CPI</td><td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input class="input100" id="cpi" name=
                                "cpi" step=".01" type="number" placeholder="e.g. 9.0"></td>
                            </tr>
					</table>
                </p><br>
				<p>
                    <table>
                    <tr>
                                <td>Preferred Department</td><td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input id="deptt" name=
                                "deptt" class="input100" type="text" placeholder="CSE/ECE"></td>
                            </tr>
					</table>
					
                </p><br>
				<p>
                    <table>
                    <tr>
                                <td>Preferred Programme</td><td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input id="prog" name=
                                "prog" class="input100" type="text" placeholder="Btech/Mtech.PhD"></td>
                            </tr>
					</table>
					
                </p><hr><hr><hr>
				</fieldset>
				<fieldset class="row3">
                <legend><h3>Recruitment Procedure and Schedule</h3><br>
                </legend>
               <p>
                    <label>Mode</label><td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                    <input type="radio"value="online" name="gender">&nbsp;&nbsp;&nbsp;&nbsp;Online&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="radio" value="offline" name="gender">&nbsp;&nbsp;&nbsp;&nbsp;Offline
                </p><br>
				<p>
                    <table>
                    <tr>
                                <td>Number of Rounds</td><td>&nbsp;</td><td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input id="rounds" name=
                                "rounds" class="input100" type="number"></td>
                            </tr>
					</table>
					
                </p><br>
				 <p>
                    <label>Recruitment Start date
                    </label>
                    <select name="startday">
                        <option value="01">01
                        </option>
                        <option value="02">02
                        </option>
                        <option value="03">03
                        </option>
                        <option value="04">04
                        </option>
                        <option value="05">05
                        </option>
                        <option value="06">06
                        </option>
                        <option value="07">07
                        </option>
                        <option value="08">08
                        </option>
                        <option value="09">09
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
                    <select name="startmonth">
                        <option value="01">January
                        </option>
                        <option value="02">February
                        </option>
                        <option value="03">March
                        </option>
                        <option value="04">April
                        </option>
                        <option value="05">May
                        </option>
                        <option value="06">June
                        </option>
                        <option value="07">July
                        </option>
                        <option value="08">August
                        </option>
                        <option value="09">September
                        </option>
                        <option value="10">October
                        </option>
                        <option value="11">November
                        </option>
                        <option value="12">December
                        </option>
                    </select>
                    <input name="startyear" type="number" size="4" maxlength="4" placeholder="2018"/>
                </p><br>
				 <p>
                    <label>Recruitment End Date
                    </label>
                    <select name="endday">
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
                    <select name="endmonth">
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
                    <input name="endyear" type="number" size="4" maxlength="4" placeholder="2018"/>
                </p><hr><hr><hr>
				</fieldset>
			<hr><hr>
			<div class="container-login100-form-btn">
						
						<div><input type='submit' name='submit' class="login100-form-btn" value="Add Job"/></div>&nbsp;&nbsp;&nbsp;&nbsp;<div>
						<input type='reset' name='reset' class="login100-form-btn" value="Reset"/></div>
					</div>
        </form>
		<?php
       if (isset($_POST['submit']))
            {     
		$c_id=$_SESSION["c_id"];
        $posn=$_POST['posn'];
	$sal=$_POST['sal'];
	$vac=$_POST['vacancy'];
	$loc=$_POST['loc'];
	$bond=$_POST['bond'];
	$cpi=$_POST['cpi'];
	$dept=$_POST['deptt'];
	$prog=$_POST['prog'];
        $mode=$_POST['gender'];
	$rounds=$_POST['rounds'];
	$std=$_POST['startday'];
	$stm=$_POST['startmonth'];
	$sty=$_POST['startyear'];
	$etd=$_POST['endday'];
	$etm=$_POST['endmonth'];
	$ety=$_POST['endyear'];
	$start= $std.'/'.$stm.'/'.$sty;
	$end=$ety.'/'.$etm.'/'.$etd;
        $sql2="INSERT INTO jobs(C_ID,Position_offering,Vacancies,Job_location,Salary,Bond,
		CPI_req,Preffered_deptt,Exam_process,No_of_rounds,Recruitment_start,Recruitment_end)VALUES
		('$c_id','$posn','$vac','$loc','$sal','$bond','$cpi','$dept','$mode','$rounds','$start','$end')";
         if (mysqli_query($connection,$sql2))
        {		
           
		 echo "<script type='text/javascript'>alert('You have successfully added this job!')</script>";
		 echo "<script language='javascript' type='text/javascript'> location.href='form/companyalogin.php' </script>";  
          }
          else
          {
        echo "<script type='text/javascript'>alert('Error adding!!!Try again')</script>";
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





