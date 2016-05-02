<div class="container">
<?php
	$message="";
	if(count($_POST)>0) {
		$conn = mysql_connect("localhost","root","");
		mysql_select_db("eshop",$conn);
		$result = mysql_query("SELECT * FROM user WHERE first_name='" . $_POST["first_name"] . "' and password = '". $_POST["password"]."'");
		$row  = mysql_fetch_array($result);
		if(is_array($row)) {
			$_SESSION["id"] = $row['id'];
			$_SESSION["first_name"] = $row['first_name'];
		} else {
			echo'<script>alert("Invalid credentials. Please try again");</script>';
		echo '<script type="text/javascript">' . "\n"; 
		echo 'window.location="http://localhost/Projectsite/index.php?action=userlogin";'; 
		echo '</script>'; 
		}
	}
	if(isset($_SESSION["id"])) {
		echo'<script>alert("Logged in successfully.");</script>';
		echo '<script type="text/javascript">' . "\n"; 
		echo 'window.location="http://localhost/Projectsite/index.php?action=userpanel";'; 
		echo '</script>'; 
	}
	?>
</div>
