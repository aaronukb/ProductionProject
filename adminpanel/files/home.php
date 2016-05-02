<?php 
if(!isset($_SESSION['username']))
{
header ('location:index.php?action=adminlogin');
}
?>

<?php
include("includes/header.php");
?></br>
  <p><h3>Welcome to admin panel!</h3></p>
			Hello Admin
