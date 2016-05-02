<?php
     $db    = new db();
     $cart = $db->cartDetail($id = $_GET['id']);
     if(isset($_SESSION['id'])) {
	 $db->addCart($id = $_GET['id'], $_SESSION['id']);
	}
?>   