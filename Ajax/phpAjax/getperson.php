<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "ajax_learning";
$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_select_db($conn, "ajax_learning");

$show = intval($_GET['show']);
$sql = "SELECT * FROM emplist WHERE id = '".$show."'";
$result = mysqli_query($conn, $sql);

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Home-Town</th>
</tr>";

while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
    <td>" . $row["fname"] . "</td>
    <td>" . $row["lname"] . "</td>
    <td>" . $row["age"] . "</td>
    <td>" . $row["hometown"] . "</td>
    </tr>";
}
echo "</table>";

mysqli_close($conn);
?>
