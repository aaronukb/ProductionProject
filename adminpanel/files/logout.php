<?php
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);   
   echo "<script type= 'text/javascript'>
			alert('Logged out successfully.');
			</script>";
   header('Refresh: 1; URL = index.php?action=adminlogin.php');
?>