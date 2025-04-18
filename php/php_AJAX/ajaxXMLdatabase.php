<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "ajax_learning";

// Create database connection
$conn = mysqli_connect($hostname, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the 'id' from query string
$id = intval($_GET['name']); // Ensure it's an integer

// Query the database
$sql = "SELECT * FROM emplist WHERE id = $id";
$result = mysqli_query($conn, $sql);

// Check if a row is found
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    echo "<b>First Name:</b> " . htmlspecialchars($row['fname']) . "<br>";
    echo "<b>Last Name:</b> " . htmlspecialchars($row['lname']) . "<br>";
    echo "<b>Age:</b> " . htmlspecialchars($row['age']) . "<br>";
    echo "<b>Hometown:</b> " . htmlspecialchars($row['hometown']) . "<br>";
} else {
    echo "No employee found with ID: $id";
}

mysqli_close($conn);
?>
