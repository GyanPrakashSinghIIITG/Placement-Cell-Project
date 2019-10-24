
		<?php
       if (isset($_GET['jid']))
            {     
		$jid = $_GET['jid'];
		
        include("configure.php");
	
        session_start();
	
		$roll=$_SESSION['rolll'];
		
        $sql2="INSERT INTO records select * from record where Rollno='$roll' and jid='$jid'";
		$sql3="update record set validity='0' where Rollno='$roll' and jid='$jid'";
         if (mysqli_query($connection,$sql2))
        {		
           if(mysqli_query($connection,$sql3))
		 echo "<script language='javascript' type='text/javascript'> location.href='viewoffer.php' </script>";  
          }
          else
          {
        echo "<script type='text/javascript'>alert('Error!!')</script>";
		echo "<script language='javascript' type='text/javascript'> location.href='viewoffer.php' </script>";  
        }
			}
        ?>
