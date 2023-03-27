<?php

session_start();


// Validate form inputs
$_SESSION['first_name'] = $_POST['first_name'];
$_SESSION['last_name']= $_POST['last_name'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['password']= $_POST['password'];
$_SESSION['confirm_password']= $_POST['confirm_password'];

// Check if all fields are filled out
if (empty($_SESSION['first_name']) || empty($_SESSION['last_name']) || empty($_SESSION['email']) || empty($_SESSION['password']) || empty($_SESSION['confirm_password'])) 
{
  $_SESSION["required_error"] = true;
  header('Location: register-form.php');
  exit;
}

// Check if email is in a valid format
if (!filter_var($_SESSION['email'], FILTER_VALIDATE_EMAIL)) 
{
    $_SESSION["invalid_email_error"] = true;
    header('Location: register-form.php');
    exit;
}


// Check if password and confirm password have matched
if($_SESSION['password']!=$_SESSION['confirm_password'])
{
    $_SESSION["password_mismatch_error"] = true;
    header('Location: register-form.php');
    exit;
}




// save user data to CSV file  
$user_data = array($_SESSION['first_name'],$_SESSION['last_name'], $_SESSION['email'], $_SESSION['password']);
$fp = fopen('users.csv', 'a');
fputcsv($fp, $user_data);
fclose($fp);

$_SESSION["registration_success"] = true;

header('Location: register-form.php');
exit();







