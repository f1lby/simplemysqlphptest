<?php
$conn = new mysqli('localhost', 'root', 'supers3cret!1234', 'mysql');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to MySQL<br>";

// Run a simple query
$sql = "SELECT NOW() AS current_time";
$result = $conn->query($sql);

if ($result && $row = $result->fetch_assoc()) {
    echo "Current time from DB: " . $row['current_time'];
} else {
    echo "Query failed: " . $conn->error;
}

$conn->close();
?>
