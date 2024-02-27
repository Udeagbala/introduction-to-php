<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if the file was uploaded without errors
    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        // Specify the directory where you want to upload the file
        $target_dir = 'uploads/';
        
        // Specify the maximum allowed file size in bytes (e.g., 5 MB)
        $max_file_size = 50 * 1024 * 1024; // 5 MB

        // Check file size
        if ($_FILES['file']['size'] > $max_file_size) {
            echo 'Sorry, the file is too large. Maximum allowed size is ' . $max_file_size / (1024 * 1024) . ' MB.';
        } else {
            $target_file = $target_dir . basename($_FILES['file']['name']);

            // Check if the file already exists
            if (file_exists($target_file)) {
                echo 'Sorry, file already exists.';
            } else {
                // Move the file to the specified directory
                if (move_uploaded_file($_FILES['file']['name'], $target_file)) {
                    echo 'The file ' . htmlspecialchars(basename($_FILES['file']['name'])) . ' has been uploaded.';
                } else {
                    echo 'Sorry, there was an error uploading your file.';
                }
            }
        }
    } else {
        echo 'ERROR: ' . $_FILES['file']['error'];
    }
}

?>
