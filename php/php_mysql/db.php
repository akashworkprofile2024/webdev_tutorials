<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = 'demo';

$con = mysqli_connect($host, $user, $pass, $db);

if (!$con) {
    die("Connection Failed" . mysqli_connect_error());
} else {
    //  echo "connected";
}
