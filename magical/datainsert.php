<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSV File Upload</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input, button {
            margin-bottom: 10px;
        }

        button {
            padding: 10px;
            cursor: pointer;
        }

        #result {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>CSV File Upload</h1>
        <form id="uploadForm" enctype="multipart/form-data">
            <input type="file" id="fileInput" name="file" accept=".csv" required>
            <button type="button" onclick="uploadFile()">Upload</button>
        </form>
        <div id="result"></div>
    </div>
    <script>
        function uploadFile() {
            var fileInput = document.getElementById('fileInput');
            var file = fileInput.files[0];

            var formData = new FormData();
            formData.append('file', file);

            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'upload.php', true);

            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById('result').innerHTML = xhr.responseText;
                }
            };

            xhr.send(formData);
        }
    </script>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
        $uploadOk = 1;
        $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if file is a CSV file
        if ($fileType != "csv") {
            echo "<script>alert('Invalid file. Please upload a CSV file.');</script>";
            $uploadOk = 0;
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "<script>alert('Sorry, file already exists.');</script>";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["file"]["size"] > 500000) {
            echo "<script>alert('Sorry, your file is too large.');</script>";
            $uploadOk = 0;
        }

        // Upload file if everything is ok
        if ($uploadOk == 0) {
            echo "<script>alert('Sorry, your file was not uploaded.');</script>";
        } else {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                // Import CSV data into MySQL database
                $conn = new mysqli("localhost", "root", "", "data");

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $csvFile = fopen($target_file, "r");

                while (($data = fgetcsv($csvFile, 1000, ",")) !== false) {
                    // Assuming the CSV file has columns in the order a, b, c, d
                    $a = $conn->real_escape_string($data[0]);
                    $b = $conn->real_escape_string($data[1]);
                    $c = $conn->real_escape_string($data[2]);
                    $d = $conn->real_escape_string($data[3]);

                    // Modify the SQL query based on your table structure
                    $sql = "INSERT INTO data (col_a, col_b, col_c, col_d) VALUES ('$a', '$b', '$c', '$d')";
                    $conn->query($sql);
                }

                fclose($csvFile);
                unlink($target_file); // Delete the uploaded CSV file after importing

                echo "<script>alert('File uploaded and data imported successfully.');</script>";
            } else {
                echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
            }
        }
    }
    ?>
</body>
</html>
