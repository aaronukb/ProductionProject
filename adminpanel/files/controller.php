<?php
if ($_POST) {
	if (isset($_POST['register']))
	{
		$first_name = $_POST['fname'];
		$second_name = $_POST['sname'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$country = $_POST['country'];
		$sql = "insert into admin_tbl (first_name, second_name, username, password, email, address, country)	
		values ('$first_name', '$second_name', '$username', '$password', '$email', '$address', '$country')";
		$user = new User();
		$result = $user->register($sql);
		if ($result) {
			echo "<script type= 'text/javascript'>
			alert( Registration Successful. Please Proceed To admin panel.');
			</script>";
			header('Location: ?action=home');
		} else {
			echo "Sorry input not accepted.";
		}

	} else if (isset($_POST['login'])) 
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql = "select * from admin_tbl where username = '$username' and password= '$password'";
		$user = new User();
		$result = $user->login($sql);
		if ($result) {
			$_SESSION['id'] = $result[0]['id'];
			header('Location: ?action=viewusers');
		} 
		else {
			echo "<script type= 'text/javascript'>
			alert('Wrong credentials. Please Try Again');
			</script>";
		}
	}
	else  if (isset($_POST['delete'])) {
		$id = $_GET['id'];
		$product = new Product(); 
		$productname = $_POST['productname']; 
		$brand = $_POST['brand'];             
		$price = $_POST['price'];
		$description = $_POST['description'];
		$sql = "delete from product where id='$id'";
		$result = $product->deleteProduct($sql);
		if ($result) {
			$_SESSION['success'] = "Successfully deleted";
			header('Location: ?action=editproducts');
		}
	}
	else  if (isset($_POST['deleteuser'])) {
		$id = $_GET['id'];
		$user = new User(); 
		$first_name = $_POST['firstname']; 
		$last_name = $_POST['lastname'];             
		$email = $_POST['email'];
		$address = $_POST['address'];
		$sql = "delete from user where id='$id'";
		$result = $user->deleteUser($sql);
		if ($result) {
			$_SESSION['success'] = "Successfully deleted";
			header('Location: ?action=editusers');
		}
	}
	 else if (isset($_POST['update'])) {
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
           header('location: ?action=editproducts');
        }
    }
}
?>