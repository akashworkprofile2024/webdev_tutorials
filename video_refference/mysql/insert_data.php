<?php
// Connect Database

include 'db.php';

$name="rahul";
$lname="kumar";
$username="rahul3000";
$password="rahul#@123";


// Create query 
$sql="INSERT INTO student VALUES(?,?,?,?,?)";
$ps=$con->prepare($sql); //return of prepare method is an object Prepare Statement
$ps->bind_param("issss",$id,$name,$lname,$username,$password);
$ps->execute();
echo "Record inserted Successfully";

?>
<!-- 
1. Connection
2. Query
3. Close


int =i
string=s
float=f
boolean=b

-->