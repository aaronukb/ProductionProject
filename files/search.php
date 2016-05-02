<?php
$str = $_GET['st'];
$connection = mysqli_connect("localhost", "root", "", "eshop");
$sql = "select productname from product where productname LIKE '%{$str}%'";
$result = mysqli_query($connection, $sql);

$array = array();
while($row = mysqli_fetch_assoc($result)) {
    $array[] = $row['productname'];
}
echo json_encode($array);
?>