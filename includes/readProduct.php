<?php
require_once(dirname(__FILE__) . "/dbcontroller.php");

$db_handle = new DBController();
if(!empty($_POST["keyword"])) {
$query ="SELECT * FROM product WHERE productname like '" . $_POST["keyword"] . "%' ORDER BY productname LIMIT 0,6";
$result = $db_handle->select($query);
if(!empty($result)) {
?>
<ul id="product-list">
<?php
foreach($result as $product) {
?>
<li onClick="selectProduct('<?php echo $product["productname"]; ?>');"><?php echo $product["productname"]; ?></li>
<?php } ?>
</ul>
<?php } } ?>