<?php
$file = fopen("example.txt", "r"); //Open for reading

$content = fread($file, filesize("example.txt"));

echo $content;

// Reading from a file

// To read the contents of a file, you can use functions like fread() or fgets()
// OR
while (!feof($file)) {
    $line = fgets($file);
    // process each line
}

// writing to a file
// To write data to a file, use funcions like fwrite()

$file = fopen("example.txt", "w"); // Open for writing
fwrite($file, "Hello, World!\n");
fclose($file);

// Appending to a file
// To append data to an existing file, use the function "a"(append) with fopen()
$file = fopen("example.txt", "a"); // Open for writing
fwrite($file, "Appending new data.\n");
fclose($file);

// Closing a file
// Always close a file when you are done with it using fclose()
fclose($file);

// Cecking file existence
//to check if a file exists, use the file_exists() function.
if (file_exists("example.txt")) {
    //File exists
}else{
    //File does not exist
}

// Deleting a file
// to delete a file, use the ulnink() function
unlink("example.txt");

// File permissions
// You can set file permissions using chmod().
chmod("example.txt", 0644); // example read and write for owner, read for others

// Working with directories
// php also provides functions for working with directories, such as mkdir() to create a directory and rmdir() to remove a directory
mkdir("new_directory");
rmdir("new_directory");

?>