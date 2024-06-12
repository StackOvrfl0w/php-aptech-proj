<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php";

$database = new mysqli($servername, $username, $password, $dbname);

if ($database->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>
