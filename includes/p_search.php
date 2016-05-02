<?php

$text_supplied = ((isset($_REQUEST['text_supplied']))?sanitize($_REQUEST['text_supplied']):'');

?>

<h2 class="text-center">Search By</h2><hr>
<h4 class="text-center">Price <span class="glyphicon glyphicon-search"></span></h4><hr>
<form action="product_search.php" method="get">
	
	

	<input class="textbox text-center" type="text" name="text_supplied" class="info" placeholder="Search" value="<?=$_GET['text_supplied'];?>">
	

<input type="submit" value="Search" class="btn btn-xs btn-primary"> <br>
</form>

<style>

label {
	 margin-left: 3px;
	}

  .textbox { 
    background: white; 
    border: 1px solid #DDD; 
    border-radius: 5px; 
    box-shadow: 0 0 5px #DDD inset; 
    color: #666; 
    outline: none; 
    height:25px; 
    width: 70px; 
   } 
 </style> 



