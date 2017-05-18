<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "marketplace";

// create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// check connection
if ($conn->connect_error) {
    echo "Connection error: ".$conn->connect_error;
}
else {
    $sql = "SELECT * FROM visits ORDER BY visits DESC LIMIT 5;";
    $result = $conn->query($sql);
    $rows = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    $jsonText = json_encode($rows);

    echo $jsonText;
}

//close connection
mysqli_close($conn);
?>