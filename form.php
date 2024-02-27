<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST"){
        //Retrieving values from a form using the POST method
        $name = $_REQUEST["name"];
        $email = $_REQUEST["email"];

        echo "<p> Submitted using POST method</p>";
        echo "<p>Name: <strong>$name</strong";
        echo "<strong>Email: <strong>$email</strong";
        }


        




    ?>


    
    <!-- <form action="welcome.php" method="post"> -->
        <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
        NAME:
        <input type="text" name="name" reqired><br>
        EMAIL:
        <input type="email" name="email" required><br>
        <input type="submit">
    </form>
</body>
</html>