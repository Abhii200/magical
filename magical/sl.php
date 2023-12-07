<?php
include 'navbar.html';
?>
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
    </style>
</head>

<body>

    <!-- Centered table container -->

        <table style="margin: 80px auto;">
            <tr>
                <th>GENE1</th>
                <th>GENE2</th>
                <th>predict_gi</th>
                <th>MAX</th>
            </tr>

            <?php
           include 'dataconnect.php';


            
                $sql = "SELECT * FROM `data2` WHERE c='SL' ";

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
           

            $conn->close();
            ?>

        </table>
   
</body>

</html>
