<?php
extract($_POST);
session_start();
$_SESSION["logged"] = true;
$_SESSION["user"] = $email;
$_SESSION["firstName"] = $firstName;
$_SESSION["lastName"] = $lastName;
?>