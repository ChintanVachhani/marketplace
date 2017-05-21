<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "marketplace";

// create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// check connection
if ($conn->connect_error) {
    echo "Connection error: " . $conn->connect_error;
} else {
    $sql = "SELECT product_id,website_identifier FROM ratings WHERE rating > 0 GROUP BY product_id,website_identifier ORDER BY round(avg(rating)) DESC;";
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