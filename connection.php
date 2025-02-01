<?php
$host = "localhost";  
$username = "root";  
$password = "";  
$dbname = "user_db";

$conn = new mysqli($host, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Lidhja dështoi: " . $conn->connect_error);
}
?>