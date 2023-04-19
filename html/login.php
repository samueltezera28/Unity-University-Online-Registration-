<?php
$conn = "";

$conn = mysqli_connect("localhost", "root", "", "student");

if (isset($_POST['submit'])) {
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
    // $username = $_POST['username'];
    // $password = $_POST['password'];
    $sql = mysqli_query($conn, "select HashedPassword from student_login where username='$username'");
    if ($row = mysqli_fetch_array($sql)) {
        if ($password == $row['HashedPassword']) {
            header("location:../dashboard/index.php");
            exit();
        } else
            echo "invalid Password";
    } else
        echo "User Not found";
}
