<?php
session_start();
session_unset();
session_destroy();
echo "<script language='javascript' type='text/javascript'> location.href='nm.php' </script>";
?>