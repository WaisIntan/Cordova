<?php
header("Access-Control-Allow-Origin: *");
$servername = "localhost";
$username = "id12777837_tugas4";
$password = "sariwais";
$datab = "id12777837_cordova";

// Create connection
$conn = new mysqli($servername, $username, $password, $datab);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
};
?>