<?php
	session_destroy();
		echo "<script type= 'text/javascript'>
			alert('Logged out successfully.');
			</script>";
		echo '<script type="text/javascript">' . "\n"; 
		echo 'window.location="http://localhost/Projectsite/index.php?action=home";'; 
		echo '</script>';   
?>	