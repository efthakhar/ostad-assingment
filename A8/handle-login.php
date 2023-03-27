<?php

session_start();

$_SESSION['login_email'] = $_POST['email'];
$_SESSION['login_password']= $_POST['password'];


if ( $_SESSION['login_email'] || $_SESSION['login_password'] ) 
{
  $_SESSION["login_required_error"] = true;
  header('Location: login-form.php');
  exit;
}


// $email = $_POST['email'];
// $password = $_POST['password'];

$fp = fopen('users.csv', 'r');

while ($data = fgetcsv($fp))
{    
    session_start();  
    
    if($data[2]==$_SESSION['login_email'] && $data[3]==$_SESSION['login_password'])
    {
        
        $_SESSION["login"] = true;
        $_SESSION["first_name"] = $data[0];
        break;
       
    }else{

        $_SESSION["login"] = false;
        $_SESSION["first_name"] = '';
       
    }
}




// redirect to welcome page 
header('Location: welcome.php');
exit();

fclose($fp);
