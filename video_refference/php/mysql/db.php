<?php
$hostname='localhost';
$username='root';
$password='';
$database='demo';

$con=mysqli_connect($hostname,$username,$password,$database);
echo $database.' Database Connected'.'<br><br>';

?>