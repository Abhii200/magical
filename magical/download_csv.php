<?php
include 'dataconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $fileId = $_GET["id"];

    // Fetch file name from the database
    $sql = "SELECT file_name FROM files WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $fileId);
    $stmt->execute();
    $stmt->bind_result($fileName);
    $stmt->fetch();
    $stmt->close();

    if ($fileName) {
        $filePath = 'files' . $fileName;

        // Set headers for download
        header('Content-Type: application/csv');
        header('Content-Disposition: attachment; filename="' . $fileName . '"');

        // Output file contents
        readfile($filePath);
        exit;
    } else {
        echo "File not found.";
    }
    
}

$conn->close();
?>
