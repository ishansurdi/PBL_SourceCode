<?php
//DB CONNECTION FILE
//NOT TO BE CHANGED
$servername = "localhost"; // Change this to your database server
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "library"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    // echo "Connection Established <br>";
}
?>
