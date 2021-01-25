<?php
$host = "localhost";
$db = "vina";
$username = "jovana13";
$password = "1310";

$conn = new mysqli($host, $username, $password, $db);

if ($conn->connect_errno) {
    exit("Neuspesno povezivanje sa bazom: " . $conn->connect_errno);
}