<?php include 'navbar.html'; ?>

<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            border-collapse: collapse;
            width: 40%;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
        }

        th,
        td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #3498db;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:nth-child(odd) {
            background-color: #ffffff;
        }

        a {
            text-decoration: none;
            color: #3498db;
        }

        a:hover {
            color: #2980b9;
        }

        .export-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>
<button class="export-button" onclick="exportToExcel()">Export</button>
    <!-- Centered table container -->
    <table style="margin: 80px auto;">
        <tr>
            <th>GENE1</th>
            <th>GENE2</th>
            <th>predict_gi</th>
            <th>MAX</th>
        </tr>

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "data";

        $g1 = $_POST["gene1"];
        $g2 = $_POST["gene2"];
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if ($g1 != null || $g2 != null) {
            $sql = "SELECT * FROM data";

            // Adjust the logic to handle any gene input in either box
            if ($g1 != null && $g2 != null) {
                $sql .= " WHERE (a='$g1' AND b='$g2') OR (a='$g2' AND b='$g1')";
            } elseif ($g1 != null) {
                $sql .= " WHERE a='$g1' OR b='$g1'";
            } elseif ($g2 != null) {
                $sql .= " WHERE a='$g2' OR b='$g2'";
            }

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["a"] . "</td>";
                    echo "<td>" . $row["b"] . "</td>";
                    echo "<td>" . $row["c"] . "</td>";
                    echo "<td>" . $row["d"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>0 results</td></tr>";
            }
        } else {
            $sql = "SELECT * FROM data";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["a"] . "</td>";
                    echo "<td>" . $row["b"] . "</td>";
                    echo "<td>" . $row["c"] . "</td>";
                    echo "<td>" . $row["d"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>0 results</td></tr>";
            }
        }

        $conn->close();
        ?>

    </table>

    <!-- Export button and script -->
    <!-- Export button and script -->

<!-- Export button and script -->
<!-- Export button and script -->


<script>
    function exportToExcel() {
        const table = document.querySelector('table');
        const rows = Array.from(table.querySelectorAll('tr'));

        // Extract header columns
        const headerColumns = Array.from(rows[0].querySelectorAll('th'));
        const headerData = headerColumns.map(column => column.innerText);

        // Extract data rows
        const rowData = rows.slice(1).map(row => {
            const columns = Array.from(row.querySelectorAll('td'));
            return columns.map(column => column.innerText);
        });

        const csvContent = `${headerData.join('\t')}\n${rowData.map(row => row.join('\t')).join('\n')}`;

        const blob = new Blob([csvContent], { type: 'application/vnd.ms-excel' });
        const link = document.createElement('a');
        link.href = URL.createObjectURL(blob);
        link.download = 'report.xls';
        link.click();
    }
</script>



</body>

</html>
