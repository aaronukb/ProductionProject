<?php
$firstnameerror = "";
$lastnameerror = "";
$subjecterror = "";
$messageerror = "";
$success = "";
$emailerror="";


if (isset($_POST['contact'])) {
    if (empty($_POST['firstname'])) {
            $nameerror= "Field should not be empty";
    } else {
        if (!preg_match("/^[a-zA-Z ]*$/", ($_POST['firstname']))) {
            $nameerror = "First Name field should only contain letter";
        } else {
            $firstname = $_POST['firstname'];
        }
    }
    if (empty($_POST['lastname'])) {
            $nameerror= "Field should not be empty";
    } else {
        if (!preg_match("/^[a-zA-Z ]*$/", ($_POST['firstname']))) {
            $nameerror = "Last Name field should only contain letter";
        } else {
            $lastname = $_POST['lastname'];
        }
    }       
    if (empty($_POST['message'])) {
            $messageerror = "Field should not be empty";
    } else {
        if (!preg_match("/^[a-zA-Z ]*$/", ($_POST['message']))) {
            $subjecterror  = "Message field should only contain letter";
        } else {
            $message = $_POST['message'];
        }
    }
    if (empty($_POST['subject'])) {
            $subjecterror = "Field should not be empty";
    } else {
        if (!preg_match("/^[a-zA-Z ]*$/", ($_POST['subject']))) {
            $subjecterror  = "Subject field should only contain letter";
        } else {
            $subject = $_POST['subject'];
        }
    }
    if (empty($_POST['email'])) {
         $emailerror = "Email Field is required";
    } else {
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $emailerror = "Invalid email format";           
        } else {
            $email = $_POST['email'];
        }
    }
    if (!empty($email) && !empty($firstname) && !empty($lastname) && !empty($subject) && !empty($message)) {
        mail("koiralabiplov@gmail.com", "message", $message);       
        $query = "insert into contact (firstname, lastname, email, subject, message) values('$firstname', '$lastname', '$email', '$subject', '$message')";       
        $user = new User();
        $results = $user->register($query);
        
        if ($results==true) {       
            $success = '<script>alert("Thank You for contacting us. We will reply you soon");</script>';           
        } else {
            $success = '<script>alert("Sorry your message could not be delevered");</script>';
        }
    }
}
?>