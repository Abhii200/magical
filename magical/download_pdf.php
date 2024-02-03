<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "record";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

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
        $pdfPath = 'files' . $fileName;

        // Set headers for download
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="' . $fileName . '"');

        // Output file contents
        readfile($pdfPath);
        exit;
    } else {
        echo "PDF file not found.";
    }
}

$conn->close();
?>
