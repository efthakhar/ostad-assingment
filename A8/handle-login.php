<?php

$email = $_POST['email'];
$password = $_POST['password'];

$fp = fopen('users.csv', 'r');

while ($data = fgetcsv($fp))
{    
    session_start();  
    
    if($data[2]==$email && $data[3]==$password)
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
