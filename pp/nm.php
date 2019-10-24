<!DOCTYPE html>
<html>
<title>Placement Cell</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Comic Sans MS", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
#myVideo {
    right:0px;
    bottom: 0;
    min-width: 100%; 
    min-height: 100%;
}

.content {
    position: absolute;
    bottom: 0px;
    
    color: #f1f1f1;
    width: 100%;
	height:87%;
    padding: 60px;
}
.content1 {
    bottom: 0px;
    background: rgba(0, 0, 0, 0.5);
    color: #f1f1f1;
    width: 100%;
    padding: 0px;
}
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
<div class="w3-bar w3-white w3-card w3-large" >
</div>
  <div class="w3-bar w3-black w3-card w3-left-align w3-large">
    <!--<a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>-->
    <a href="nm.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Home</a>
    <a href="Login/Loginstudent.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Student</a>
    <a href="Login/Logincompany.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Company</a>
    <a href="Login/Loginadmin.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Admin</a>
	 <a href="Login/form/currentrecord.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Placement Records</a>
		   
  </div>

</div>
<!-- Header -->
<header class="w3-container w3-black w3-center">
<video autoplay muted loop id="myVideo">
  <source src="Aq.mp4" type="video/mp4">
</video>
<div class="content">
  <h1 class="w3-margin w3-jumbo"><font color="white">PLACEMENT CELL</font></h1>
  <p class="w3-xlarge"><font color="white">Indian Institute Of Information Technology Guwahati</font></p>
  <br><br><br>
  <h3><p><font color="red">Doing the best at this moment puts you in the best place for the next moment.
  </br>
  Know About Us.....Click Below..</font></p></h3>
	<button class="w3-button w3-black w3-padding-large w3-large w3-margin-top" onclick="location.href='aboutus.html'">About Us</button>
	</div>
</header>
<div class="content1">
<!-- Footer -->
<div class="col-md-3 ftr_navi ftr w3-half">
	<div class="w3-bar w3-cyan w3-left-align w3-large">
					<h3>MEMBERS</h3>
					<ul "display:inline-block">
						<li>
							<a href="http://www.iiitg.ac.in/"><font color="blue">Home Page</font></a>
						</li>
						<li>
							<a href="http://iiitg.ac.in/placements/contactus.html"><font color="blue">Contact US</font></a>
						</li>
						<li>
							<a href="http://iiitg.ac.in/faculty_cse.php"><font color="blue">Faculty Support</font></a>
						</li>
							<li>
							<a href="Login/form/oldrecord.php"><font color="blue">Past Placement Records</font></a>
						</li>
					</ul>

					<br><br><br><br>
					</div>
				</div>
				<div class="col-md-3 get_in_touch ftr w3-rest">
				<div class="w3-bar w3-cyan w3-card w3-right-align w3-large">
					<h3>GET IN TOUCH  </h3>
					<p>Gyan Prakash Singh,IIITG Boys Hostel  </p>
					<p>Borjhar,Santola Road  </p>
					<p>Guwahati,Assam,India  </p>
					<p>8318659080,9648064402  </p>
					<a href="singhprakashjnv@gmail.com"><font color="blue">singhprakashjnv@gmail.com </font> </a>
					<br><br>
				</div>
				</div>
				<div class="col-md-3 ftr-logo w3-center">
					<p>Copyright &copy; 2018 IIITG-PlacementCell | Developed by
              <a href="singhprakashjnv@gmail.com/" target="_parent">Gyan Prakash Singh</a>
			  </div>
				
<footer class="w3-container w3-sand w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
 <p>Powered by <a href="http://www.iiitg.ac.in/" target="_blank">IIITG</a></p>
</footer>
</div>

</body>
</html>
