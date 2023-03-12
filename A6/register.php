<?php
// Validate form inputs
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Check if all fields are filled out
if (empty($name) || empty($email) || empty($password)) {
echo "Please fill out all fields.";
exit();
}

// Check if email is in a valid format
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
echo "Invalid email format.";
exit();
}


if (  $_FILES["profile_picture"]['name']!==''  ) {

    // save profile picture to the server
    $uploads_dir ='uploads/';
    $tmp_name = $_FILES['profile_picture']['tmp_name'];
    $filename =  uniqid(). "_" .date( "Y-m-d-H-i-s" ) . "_" . basename( $_FILES['profile_picture']['name'] );
    if(move_uploaded_file($tmp_name,  $uploads_dir."/".$filename ))
    {

            // save user data to CSV file  
            $user_data = array($name, $email, $filename);
            $fp = fopen('users.csv', 'a');
            fputcsv($fp, $user_data);
            fclose($fp);


            // start a new session and set cookie
            session_start();
            setcookie('user_name', $name);


            // Redirect to success page
            header('Location: users.php');
            exit();

    }else{
        die( "Error: Profile picture upload failed" );
    }

} else {
    die( "Error: Profile picture is required." );
}







