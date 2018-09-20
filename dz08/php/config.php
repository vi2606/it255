<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "methotels";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Konekcija ima grešku: " . $conn->connect_error);
} else {
    // echo "All good";
}
