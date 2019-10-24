<html>
<head>
</head>
<body>
<form method="POST" action="">
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" />
    <input type="submit" name="submit" value="Ok" />
</form>
<?php
if(isset($_POST['submit'])){
    $email=$_POST['email'];
	echo $email;
    $subject = 'Selected at Google';
    $message = 'This is to inform you that you have been selected to work with google!!Congrats';
	ini_set("SMTP","ssl://smtp.gmail.com");
ini_set("smtp_port","465");
$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Your name shivam21ballia@gmail.com' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
mail($email, $subject, $message, $headers);
}

?>
</body>
</html>