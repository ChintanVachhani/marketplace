<?php
extract($_POST);
// db connection
$dbc = mysqli_connect("localhost", "root", "password", "marketplace");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
// hash the password
$pass = hash("sha256", $password);
// query check
$query = "SELECT email, password FROM users WHERE email=" . quote($email) . " AND password=" . quote($pass) . ";";
$response = mysqli_query($dbc, $query);
//$row = mysqli_fetch_assoc($response);
mysqli_close($dbc);
// check if there is the row in db
if (mysqli_num_rows($response) > 0) {
    //start session when login session end when user close browser
    session_start();
    $_SESSION["logged"] = true;
    $_SESSION["user"] = $email;
    redirect("index.php");
} else {
    echo $query;
    //redirect("login.php");
}

/*--------------------------helper function------------------------*/
function quote($text)
{
    return "'" . $text . "'";
}

function redirect($url)
{
    //header("Location:  " . $url);
    print "<script type='text/javascript'>
   	     	window.location = '" . $url . "'; </script>";
    exit();
}

?>
