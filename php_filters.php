<?php

$userInput = $_POST['user_email']; //is assuring that the user is from a POST request

//Validate email address
if (filter_var($userInput, FILTER_VALIDATE_EMAIL)) {
    //sanitize the email
    
}

?>