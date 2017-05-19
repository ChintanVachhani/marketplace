<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "marketplace";

$w_id = $_GET['id'];
// create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// check connection
if ($conn->connect_error) {
    echo "Connection error: " . $conn->connect_error;
} else {
    $sql = "SELECT product_id FROM ratings where website_identifier = " . $w_id . " GROUP BY product_id ORDER BY round(avg(rating)) DESC LIMIT 5";

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