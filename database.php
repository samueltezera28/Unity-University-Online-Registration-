<?php
// $db_server = "localhost";
// $db_user = "root";
// $db_pass = "";
// $db_name = "student";
// $conn = "";

// $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

// if ($conn) {
//     echo "you are connected";
// } else {
//     echo "could not connect";
// }
// Step 1: Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";
$db_server = "localhost";
$conn = mysqli_connect($servername, $username, $password, $dbname);
// $conn = new mysqli($servername, $username, $password, $dbname);
if ($conn) {
    echo "you are connected";
}
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
