<?php
 $hostName = "localhost";
 $userName = "root";
 $password = "";
 $dbName = "school_db";

// Create a connection
$conn = mysqli_connect($hostName, $userName, $password,$dbName );

// Check the connection
if ($conn) {
    echo 'Connection established' . "<br />";
}else {
    echo 'Connection failed ';
}

// SQL query to drop the database
// $sql = "DROP DATABASE $dbName";

// // Execute the query
// if (mysqli_query($conn, $sql)) {
//     echo "Database $dbName deleted successfully";
// } else {
//     echo "Error deleting database: " . mysqli_error($conn);
// }



// // Sample data to insert
$userName = "ebukassssdd3sjhbvjkbk Doe";
$email = "ebukadoe@example.com";
$password = 23;

// SQL query to insert data into a table
$sql = "INSERT INTO students_tbl (username, email, password) VALUES ('$userName', '$email', $password)";

// Execute the query
if (mysqli_query($conn, $sql)) {
    echo "Record inserted successfully";
} else {
    echo "Error inserting record: " . mysqli_error($conn);
}





// SQL query to retrieve data
// $sql = "SELECT id, username, email, password FROM students_tbl";
// $result = mysqli_query($conn, $sql);

// // Check if the query was successful
// if ($result) {
//     // Fetch data and display it
//     while ($row = mysqli_fetch_assoc($result)) {
//         echo "ID: " . $row["id"] . "<br>";
//         echo "Name: " . $row["username"] . "<br>";
//         echo "Email: " . $row["email"] . "<br>";
//         echo "Age: " . $row["password"] . "<br>";
//         echo "-----------------------<br>";
//     }
// } else {
//     // If the query fails, display an error
//     echo "Error retrieving data: " . mysqli_error($conn);
// }

// Set the number of records per page
$recordsPerPage = 10;

// Get the current page number from the query string or set a default value
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;

// Calculate the offset for the SQL query
$offset = ($page - 1) * $recordsPerPage;

// SQL query to retrieve paginated data
$sql = "SELECT id, username, email, password FROM students_tbl LIMIT $offset, $recordsPerPage";
$result = mysqli_query($conn, $sql);

// Check if the query was successful
if ($result) {
    // Fetch data and display it
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["id"] . "<br>";
        echo "Name: " . $row["username"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        echo "Age: " . $row["password"] . "<br>";
        echo "-----------------------<br>";
    }

    // Pagination links
    $totalRecords = mysqli_num_rows(mysqli_query($conn, "SELECT id FROM students_tbl"));
    $totalPages = ceil($totalRecords / $recordsPerPage);

    echo "<div style='text-align: center;'>";
    for ($i = 1; $i <= $totalPages; $i++) {
        echo "<a href='?page=$i'>$i</a> ";
    }
    echo "</div>";
} else {
    // If the query fails, display an error
    echo "Error retrieving data: " . mysqli_error($conn);
}

// Sample data to update
// $idToUpdate = 1;
// $newName = "Updated Name";
// $newEmail = "updated.email@example.com";
// $newAge = 30;

// // SQL query to update data
// $sql = "UPDATE students_tbl SET username='$newName', email='$newEmail', password=$newAge WHERE id=$idToUpdate";

// // Execute the query
// if (mysqli_query($conn, $sql)) {
//     echo "Record updated successfully";
// } else {
//     echo "Error updating record: " . mysqli_error($conn);
// }


// Sample data to delete
// $idToDelete = 1;

// // SQL query to delete data
// $sql = "DELETE FROM students_tbl WHERE id=$idToDelete";

// // Execute the query
// if (mysqli_query($conn, $sql)) {
//     echo "Record deleted successfully";
// } else {
//     echo "Error deleting record: " . mysqli_error($conn);
// }






// Specify the path where you want to save the backup file
$backupPath = "./folder";

// Generate a unique filename for the backup
$backupFilename = "backup_" . date("Y-m-d_H-i-s") . ".sql";
$backupFilePath = $backupPath . $backupFilename;

// Create the mysqldump command
$command = "mysqldump -u $username -p$password -h  $dbname > $backupFilePath";

// Execute the command
exec($command, $output, $result);

// Check if the backup was successful
if ($result == 0) {
    echo "Backup created successfully. Filename: $backupFilename";
} else {
    echo "Error creating backup: " . implode("\n", $output);
}

?>