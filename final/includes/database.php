<?php

$dbhost = "localhost";
$dbuser = "tynandra_admin";
$dbpass = "Srx7bmw27@";
$dbname = "tynandra_idm232";
$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (mysqli_connect_error()) {
    die("database connection failed: " .
        mysqli_connect_error() .
        " (" . mysqli_connect_errno() . ")");
}
?>