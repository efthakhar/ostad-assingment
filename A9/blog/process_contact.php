<?php

session_start();

// Validate form inputs
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

echo $name;

// save user data to CSV file  
$user_data = array($name, $email, $subject, $message);

$fp = fopen('submissions.csv', 'a');

if(fputcsv($fp, $user_data))
{
  $_SESSION['success'] = true;
}else{
  $_SESSION['success'] = false;
}

fclose($fp);

header('Location: contact.php');
exit();



