    <?php
    	//$hostname='localhost';
    	//$user = 'root';
    	//$password = '';
    	//$mysql_database = 'pms';
    	//$db = mysql_connect($hostname, $user, $password,$mysql_database);
    	//mysql_select_db("dbproject", $db);
		//php
		$connection = mysqli_connect('localhost', 'root', '');
		if (!$connection){
		die("Database Connection Failed" . mysqli_error($connection));
		}
		$select_db = mysqli_select_db($connection, 'pms');
		if (!$select_db){
		die("Database Selection Failed" . mysqli_error($connection));
		}
    ?>
