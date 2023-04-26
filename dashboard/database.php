<?php 

$servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "unity_university";
        $db_server = "localhost";
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
