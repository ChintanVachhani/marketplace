<?php
//set up database connection
$dbc = mysqli_connect("localhost", "root", "password", "marketplace");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

extract($_POST);

//prepare, process query
$pass = hash("sha256", $password);
$query = "INSERT INTO users VALUES (" . quote($firstName) . ", " . quote($lastName) . ", " . quote($email) . ", " . quote($pass) . ");";
$response = mysqli_query($dbc, $query);
mysqli_close($dbc);

//display to browser
if ($response == TRUE) {
    //start session when login session end when user close browser
    session_start();
    $_SESSION["logged"] = true;
    $_SESSION["user"] = $email;
    redirect("index.php");
} else {
    redirect("login.php");
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

