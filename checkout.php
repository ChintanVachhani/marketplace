<?php
session_start();
$i = 1;
while (isset($_POST['quantity_' . $i])) {
    $quantity = $_POST['quantity_' . $i];
    $id = $_POST['shipping_' . $i];
    $image = $_POST['shipping2_' . $i];
    $name = $_POST['item_name_' . $i];
    $amount = $_POST['amount_' . $i] * $_POST['quantity_' . $i];
    $user = $_SESSION['user'];
    $website_identifier = "";
    //set up database connection
    $dbc = mysqli_connect("localhost", "root", "password", "marketplace");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $query = "SELECT website_identifier FROM ratings WHERE product_id = " . $id . " GROUP BY website_identifier;";

    $fetch_response = mysqli_query($dbc, $query);

    if (mysqli_num_rows($fetch_response) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_array($fetch_response, MYSQLI_ASSOC)) {
            $website_identifier = $row['website_identifier'];
        }
    }

    $fetch_cart = "SELECT * FROM cart WHERE product_id = " . quote($id) . " AND  user_email = " . quote($user) . ";";

    $fetch_response = mysqli_query($dbc, $fetch_cart);
    $row = mysqli_fetch_array($fetch_response, MYSQLI_ASSOC);
    if (mysqli_num_rows($fetch_response) > 0) {
        $quantity += $row['quantity'];
        $amount += $row['amount'];
        $upd_cart = "UPDATE cart set quantity = " . quote($quantity) . ", amount = " . quote($amount) . " WHERE product_id = " . quote($id) . " AND user_email = " . quote($user) . ";";
        $upd_response = mysqli_query($dbc, $upd_cart);
    } else {
        $query = "INSERT INTO cart (user_email, product_id, product_image, quantity, amount, website_identifier, product_name) VALUES (" . quote($user) . "," . quote($id) . "," . quote($image) . "," . quote($quantity) . "," . quote($amount) . "," . quote($website_identifier) . "," . quote($name) . ");";
        $response = mysqli_query($dbc, $query);
        //display to browser
        if ($response !== TRUE) {
            redirect("products.php");
        }
    }

    mysqli_close($dbc);

    $i++;
}
print "<script type='text/javascript'>window.localStorage.clear();</script>";
redirect("cart.php");
/*--------------------------helper function------------------------*/
function quote($text)
{
    return "'" . $text . "'";
}

function redirect($url)
{
    //header("Location:  " . $url);
    print "<script type='text/javascript'> window.location = '" . $url . "'; </script>";
    exit();
}

?>