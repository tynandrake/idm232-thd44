<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$dbname = "local_idm232_recipe";
$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (mysqli_connect_error()) {
    die("database connection failed: " .
        mysqli_connect_error() .
        " (" . mysqli_connect_errno() . ")");
}
?>