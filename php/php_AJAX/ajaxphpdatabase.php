<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'ajax_learning';
$conn = mysqli_connect($hostname, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
    // echo "Connected successfully";
}

$name = intval($_GET['name']);

mysqli_select_db($conn, $database);
$sql = "SELECT * FROM emplist WHERE id = '".$name."'";
$result = mysqli_query($conn, $sql);

echo "<table>
<tr>
<th>Id</th>
<th>Name</th>
<th>LastName</th>
<th>Age</th>
<th>Hometown</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['fname'] . "</td>";
    echo "<td>" . $row['lname'] . "</td>";
    echo "<td>" . $row['age'] . "</td>";
    echo "<td>" . $row['hometown'] . "</td>";
    echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>
