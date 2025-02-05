<?php
$host = 'localhost';
$db_user = 'root';
$db_pass = 'root'; // Ensure the password is correct
$db_name = 'bookflixdb';

$conn = new mysqli($host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to database: " . $conn->query("SELECT DATABASE()")->fetch_row()[0];
}
?>
