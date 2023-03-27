<?php 

session_start(); 

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>User Registration Form</title>
    <style>

        .success {
            padding: 20px;
            background-color: green;
            color: white;
        }
        .error {      
            color: red;
            margin:5px;
        }
        .content{
            max-width: 400px;
            margin:20px auto;
        }
        input, select {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
        }
        
        input[type=submit] {
          width: 100%;
          background-color: #4CAF50;
          color: white;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          border-radius: 4px;
          cursor: pointer;
        }
        
        input[type=submit]:hover {
          background-color: #45a049;
        }
        
        div {
          border-radius: 5px;
          background-color: #f2f2f2;
          padding: 20px;
        }
        </style>
  </head>
  <body>

  <?php

      
      
      if(!empty($_SESSION["registration_success"]))
      {
        ?>
            <div class="success">
            <strong>Welcome ! You are registered Successfully</strong> 
            </div>
        <?php

      }

   ?>

  

    <div class="content">

        <h1>Registration Form</h1>

        <form action="handle-register.php" method="post" enctype="multipart/form-data">

        <?php  echo  !empty($_SESSION["required_error"]) && $_SESSION["required_error"]==true? "<p class='error'>Please Fill all Fileds</p>" :'' ?>
        
        <label for="first_name">First Name:</label>
        <input type="text" id="name" name="first_name"
         value="<?php echo $_SESSION['first_name']??''  ?>" >
        <br>

        <label for="last_name">Last Name:</label>
        <input type="text" id="name" name="last_name"
        value="<?php echo $_SESSION['last_name']??''  ?>"
         >
        <br>

        
        <label for="email">Email:</label>
        
        <?php  echo  !empty( $_SESSION["invalid_email_error"]) &&  $_SESSION["invalid_email_error"]==true? "<p class='error'>Please Provide a valid email</p>" :'' ?>

        <input type="email" id="email" name="email"  value="<?php echo $_SESSION['email']??''  ?>">
        <br>

        <label for="password">Password:</label>
        <?php  echo !empty( $_SESSION["password_mismatch_error"]) &&  $_SESSION["password_mismatch_error"]==true? "<p class='error'>Password not matched with confirm password</p>" :'' ?>
        <input type="password" id="password" name="password"  value="<?php echo $_SESSION['password']??'' ?>" >
        <br>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="password" name="confirm_password"  value="<?php echo $_SESSION['confirm_password']??''  ?>" >
        <br>

        <input type="submit" value="Submit">

        </form>
        
    </div>

  </body>
</html>

<?php 

session_destroy(); 

?>
