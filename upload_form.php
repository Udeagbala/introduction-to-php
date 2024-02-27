<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File upload form</title>
</head>
<body>
    <h2>File upload form</h2>
    <form action="upload.php" method="post" enctype= "multipart/form-data">
        <label for="file">Select a file:</label>
        <input type="file" name="file" id="file" required>
        <br>
        <input type="submit" name="Submit" value="Upload">
        
    </form>
</body>
</html>