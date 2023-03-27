<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .alert {
            padding: 20px;
            background-color: #f44336;
            color: white;
        }
        .info {
            padding: 20px;
            background-color: green;
            color: white;
        }

    </style>
</head>

<body>

   
   <?php

   session_start();

   
   if($_SESSION['login'] == true)
   {
     ?>
        <div class="info">
        <strong>Welcome <?php echo $_SESSION["first_name"] ?> ! You are logged in</strong> 
        </div>
     <?php

   }else{
    
        ?>
            <div class="alert">
            <strong>Opps! Attempt to login fails</strong> 
            </div>
        <?php
   }

   ?>
   

</body>

</html>