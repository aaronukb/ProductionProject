<?php
$db    = new db();


     if(isset($_SESSION['id'])) {
     	

			$db->updateCart($_POST['id'][0],$_POST['quan'][0]);


}
?>