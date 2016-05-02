<?php
//include ("classes/Product.php");
//include ("classes/Db.php");
?>

<?php
$errmsz = "";
if (isset($_POST['addproducts'])) {

        $productname = $_POST['productname'];
        $brand = $_POST['brand'];
        $price = $_POST['price'];
        
        $description = $_POST['description'];

 if ((!empty($_FILES["avatar"])) && ($_FILES['avatar']['error'] == 0)) {

        $mypic = basename($_FILES['avatar']['name']);

        $ext = substr($mypic, strrpos($mypic, '.') + 1);
        if (($ext == "jpg") && ($_FILES["avatar"]["type"] == "image/jpeg") &&
                ($_FILES["avatar"]["size"] < 350000)) {
            $newloc = "uploads/products/$mypic";
            if (!file_exists($newloc)) {
                $nws = $_FILES["avatar"]["tmp_name"];


                move_uploaded_file($nws, "uploads/products/$mypic");

               $sql = "insert into product (productname, brand, price, image, description) values('$productname','$brand','$price','$mypic','$description')";

        $product = new Product();
        $result = $product->register($sql);
        // var_dump($result);die;
        if ($result) {
           echo'<script>alert("Product Added successfully.");</script>';
        echo '<script type="text/javascript">' . "\n"; 
        echo 'window.location="http://localhost/Projectsite/adminpanel/index.php?action=editproducts";'; 
        echo '</script>';
      

                if ($result) {
                    $errmsz = "Product Updated successfully";
                }
            } else {
                $errmsz = "Image File Already Exist";
            }
        } else {
            $errmsz = "Image file is not supported";
        }
    }

    else if (isset($_POST['update'])) {

        //var_dump($_FILES);
        //die;

        // $tmp_name = $_FILES["avatar"]["tmp_name"];
        // $name = $_FILES["avatar"]["name"];
        // move_uploaded_file($tmp_name, "uploads/$name");

        $id = $_GET['id'];
        $product = new Product();
        $productname = $_POST['productname'];
        $brand = $_POST['brand'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        
        $query = "update product set productname='$productname', brand ='$brand', price ='$price' , description='$description' where id= '$id'";

        $result = $product->editProduct($query);

        if ($result) {
            session_start();
            $_SESSION['success'] = "Product updated successfully"; 
           header('location: ?action=editproduct');
        }
    }
}


}

?>