<?php

extract($_POST);
// db connection
$dbc = mysqli_connect("localhost", "root", "root", "marketplace");

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$query = "INSERT INTO marketplace.reviews(comments,product_id,user_email,timestamp) 
VALUES ('" . $comment . "'," . $prod_id. ",'" . $user_id . "','" . date('Y-m-d H:i:s') ."');";

$response = mysqli_query($dbc, $query);

$fetch_ratings = "SELECT * FROM marketplace.ratings WHERE product_id = " . $prod_id .
    " AND user_email = '" . $user_id . "';";

$fetch_response = mysqli_query($dbc, $fetch_ratings);

if (mysqli_num_rows($fetch_response) > 0) {
    $upd_ratings = "UPDATE marketplace.ratings set rating = " . $rating . " 
    WHERE product_id = " . $prod_id . " AND user_email = '" . $user_id . "';";

    $upd_response = mysqli_query($dbc, $upd_ratings);
}
else{
    $ratings_query = "INSERT INTO marketplace.ratings(product_id,rating,user_email) 
    VALUES ('" . $prod_id . "'," . $rating . ",'". $user_id ."');";

    $ratings_response = mysqli_query($dbc, $ratings_query);

}

mysqli_close($dbc);

redirect("product.php?id=$prod_id&w=$identifier_id");

function redirect($url)
{
    //header("Location:  " . $url);
    print "<script type='text/javascript'>
   	     	window.location = '" . $url . "'; </script>";
    exit();
}

?>