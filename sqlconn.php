<?php
$servername = "localhost";
$username = "id2814326_adityaritvijkrishan";
$password = "aditya@ritvij@krishan";
$dbname = "id2814326_forum";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>