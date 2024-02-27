<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // set variables
    $_SESSION["myset"] = "white";
    $_SESSION["mybeast"] = "raven";
    echo "Session variables are set.";
    session_destroy();
    echo "<br>";
    print_r($_SESSION);

    echo "<br>";    
    // Echo session variables that were set on previous page
    echo "Favorite color is " . $_SESSION["myset"] . ".<br>";
    echo "Favorite animal is " . $_SESSION["mybeast"] . ".";


    ?>




</body>
</html>