<?php
// Database connection details

include 'dataconnect.php';
// Process file uploads
$uploadDir = "files"; // Directory to store uploaded files

for ($i = 1; $i <= 3; $i++) {
    $fileName = $_FILES["file{$i}"]["name"];
    $tmpName = $_FILES["file{$i}"]["tmp_name"];

    // Move uploaded file to the designated directory
    $destination = $uploadDir . $fileName;
    if (move_uploaded_file($tmpName, $destination)) {
        // Insert file information into the database
        $sql = "INSERT INTO files (file_name) VALUES ('$fileName')";
        if ($conn->query($sql) === TRUE) {
            echo "File uploaded successfully.";
        } else {
            echo "Error inserting data into database: " . $conn->error;
        }
    } else {
        echo "Error moving uploaded file.";
    }
}

// Close the database connection
$conn->close();

// Redirect back to the upload form
header("Location: download.php");
exit();
?>
