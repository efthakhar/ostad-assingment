<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Page</title>
</head>
<body>

    <?php



        if ($_SERVER['REQUEST_METHOD'] == 'POST') 
        {
            $name = $_POST['name'];
            $email = $_POST['email'];
           
            include('../TASK2/PersonClass.php');
            
            $person = new Person();
            $person->setName($name);
            $person->setEmail($email);

            $name_to_display = $person->getName();
            $email_to_display = $person->getEmail();

        } else {
            echo "<p>Error: invalid form submission method.</p>";
        }

        echo "<div>
                <h2>Submitted Form Data:</h2>
                <p>Name  : {$name_to_display} </p>
                <p>Email :  {$email_to_display} </p>
             </div>" ;     
    ?>

</body>
</html>