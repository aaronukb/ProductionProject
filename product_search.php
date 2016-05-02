<?php include'includes/header.php';?>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "eshop";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $sql = "SELECT * FROM product WHERE productname LIKE '%".$_GET['text_supplied']."%' ORDER BY productname ASC";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        ?>
  <h2 class="text-center">Available Products</h2>
 <div class="container">
        <div class="row text-center">
            <?php while($row = $result->fetch_assoc()) { ?>
            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                     <img alt="blog" style="height:200px;width:90%;" src="adminpanel/uploads/products/<?php echo $row['image'];?> ">
                    <div class="caption">
                        <h3><?php echo $row['price']; ?></h3>
                        <p><?php echo $row['description']; ?></p>
                        <p>
                            <a class="btn btn-default btn-info" href="index.php?action=detail&id=<?php echo $row['id']; ?>"><?php echo $row['productname']; ?></a>
                        </p>
                    </div>
                </div>
            </div><?php  } ?>
        </div>
        </div><br> <br> <br><br> <br><br><br>
<?php

} else {
    echo "No products found";
}
?>
<?php
include("includes/footer.php");
?>
