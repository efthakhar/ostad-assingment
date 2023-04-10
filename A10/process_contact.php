<?php

session_start();

// Validate form inputs
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];


// Check if all fields are filled out
if ( empty($name) || empty($email) || empty($phone) ||  empty($message) ) 
{
  $_SESSION["required_error"] = true;
 
}

// Check if email is in a valid format
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
{
  $_SESSION["email_error"] = true;
}






if( $_SESSION["required_error"] || $_SESSION["email_error"] )
{
  header('Location: contact.php');
  exit();

}


// save user data to CSV file  
$user_data = array($name, $email, $phone, $message);

$fp = fopen('form-submissions.csv', 'a');

if(fputcsv($fp, $user_data))
{
  $_SESSION['success'] = true;

}else{

  $_SESSION['success'] = false;

}

fclose($fp);

header('Location: contact.php');
exit();



