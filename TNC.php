<?php
// Custom error handler function
function customErrorHandler($errno, $errstr, $errfile, $errline) {
    echo "<b>Error:<b> [$errstr] $errstr in $errfile on line $errline<br>";
}

// Set custom error handler
set_error_handler("customErrorHandler");

// Function to divide two numbers
function divide($dividend, $divisor) {
    if ($divisor == 0) {
        throw new Exception("Division by zero");
    }
    return $dividend / $divisor;
}

// Examples of exception handling
try {
    // Attempt division
    $result = divide(10,0);
    echo "result: $result<b>"; // This line won't be executed
} catch (Exception $e) {
    // Handle the exception
    echo "<b> Caught exception: <b>" . $e->getMessage() . "</b>";
} finally {
    echo "<b>Finally block executed</b>";
}

// Example of triggering an error
$undefinedVariable = $nonExistentVariable; //This will trigger an error

// This line won't be executed due to the error
echo "this line wont be executed";
?>

<?php
$file = 'example.txt';

// Attempt to pen a file
$handle = fopen($file, 'r');
// 'r' means to read the file

// check if the file was successfully opened
if (!$handle) {
    die("Unable to open file: $file"); // Terminate the script with an error message
}// exit() can also be used instead of die().

// Continue with the rest of the script if the file was opened successfully
echo "File opened successfully.";

// Close the file handle
fclose($handle);

?>