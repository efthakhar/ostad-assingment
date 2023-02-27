|<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    
    <?php
    
        echo "<h3>Instance of Person Class</h3>";

        include('PersonClass.php');

        $person = new Person();

        $person->setName('efthakhar');
        $person->setEmail('efthakhar@gmail.com');

        $name = $person->getName();
        $email = $person->getEmail();
            
        echo "Name: $name";
        echo "<br/>";
        echo "Email: $email";

    ?>

</body>
</html>