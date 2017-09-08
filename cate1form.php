<?php
include "sqlconn.php";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$a=$_POST["name"];
$b=$_POST["emailaddress"];
$c=$_POST["message"];
$sql = "INSERT INTO cate1 values('".$a."','".$b."','".$c."')";

if ($conn->query($sql) === TRUE) {
    header("Location: cate1.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
