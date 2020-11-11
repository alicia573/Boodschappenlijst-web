
<html lang="en">
    <head>
        <title></title>

    </head>
    <body>
        <table>

            <?php
            $conn = mysqli_connect("localhost", "root", "", "boodschappen");
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT * FROM product";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["idproduct"]. "</td><td>" . $row["omschrijving"] ."</td></tr>";
                }

            } else { echo "0 results"; }
            $conn->close();

            ?>
        </table>
    </body>
</html>