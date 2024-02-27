<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'school_db';

// Create connection
$conn = new mysqli($host, $user, $password);

// Check connection
if ($conn) {
    echo "yeah boi!";
}else {
    echo "Connection failed successfully";

}

// //SQL querry to drop the database
// $sql = "DROP DATABASE $dbname";

// // Execute the query
// if(mysqli_query($conn, $sql)) {
//     echo "Database $dbname deleted successfully";
// }else {
//     echo "error deleting database: " . mysqli_error(conn);
// }

// //Close the connection
// mysqli_close($conn);
?>

