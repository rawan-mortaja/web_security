<html>

<body>
    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "chatapp";


    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT msg FROM chat";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            //echo $_SESSION['username'];
            // echo "" .$row["msg"] . "<br><br>";
            echo "" . htmlentities($row["msg"]) . "<br><br>";
        }
    } else {
        echo "no messages have been exchanged yet";
    }
    $conn->close();
    ?>
</body>

</html>