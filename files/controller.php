<?php
// include ("classes/User.php");
// include ("classes/Db.php");
?>
<?php 
if ($_POST) {
	if (isset($_POST['register']))
	{		
		$first_name = $_POST['first_name'];
		$last_name =  $_POST['last_name'];
		$password =  $_POST['password'];
		$address =  $_POST['address'];
		$email =  $_POST['email'];
		$contact = $_POST['contact'];	
		$sql = "insert into user (first_name, last_name, password, address,  email,  contact)	
		                  values ('$first_name', '$last_name', '$password', '$address', '$email', '$contact')";
		$user = new User();
		$result = $user->register($sql);
		if ($result) {
			echo "<script type= 'text/javascript'>
			alert('User Registration Successful. Please Proceed To User Panel.');
            window.location('?action=index.php');
			</script>";			
		} else {
			echo "Sorry input not accepted.";
		}
	}
if (isset($_POST['checkout']))
    {       
        $first_name = $_POST['first_name'];
        $last_name =  $_POST['last_name'];
        $telephone =  $_POST['telephone'];
        $address =  $_POST['address'];
        $email =  $_POST['email'];         
        $sql = "insert into checkout (first_name, last_name, telephone, email,  address)   
                          values ('$first_name', '$last_name', '$telephone', '$email', '$address')";
        $user = new User();
        $result = $user->checkout($sql);
        if ($result) {
            echo'<script>alert("Checked out successfully");</script>';
        echo '<script type="text/javascript">' . "\n"; 
        echo 'window.location="http://localhost/Projectsite/index.php?action=thankyou";'; 
        echo '</script>';        
        } else {
            echo "Sorry input not accepted.";
        }
    }
     else  if (isset($_POST['login'])) {         
            $email = $_POST['email'];
            $password = $_POST['password'];
            $sql = "select * from user where email= '$email'and password = '$password' ";
            $user = new User();
            $result = $user->login($sql);
            if ($result) {                
               $_SESSION["email"] = $result->email;
               $_SESSION["id"] = $result->id;               
                header("Location: ?action=userpanel");
                echo "login success";
            } else {
                $_SESSION['success'] = "Incorrect user credentials. Try again";
                header('location:index.php?action=login');           
        }        
    }
      else if (isset($_POST['update'])) {
        $id = $_GET['id'];
        $user = new User();
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $contact = $_POST['contact'];
        $query = "update user set first_name ='$first_name', last_name ='$last_name' , password='$password', email='$email' , address ='$address' , contact ='$contact' where id= '$id'";

        $result = $user->editUser($query);

        if ($result) {
           // $_SESSION['success'] = "Profile updated successfully"; 
           echo'<script>alert("Profile update successfully.");</script>';
        echo '<script type="text/javascript">' . "\n"; 
        echo 'window.location="http://localhost/Projectsite/index.php?action=userpanel";'; 
        echo '</script>'; 
        }
    }
}
?>