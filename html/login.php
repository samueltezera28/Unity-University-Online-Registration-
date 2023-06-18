<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="main-nav">
            <img src="../img/Unity_University_logo.png" alt="" class="logo">
            <ul class="main-menu">
                <li><a href="../index.html">Home</a></li>
                <li><a href="#">Apply</a></li>
                <li><a href="#">Alumni</a></li>
                <li><a href="./html/login.html">Login</a></li>
            </ul>
        </div>
    </div>

    <div class="login">
        <div class="login-container">
            <form action="login.php" method="post" id="login" class="form">
                <h1>Student Login</h1>
                <div class="form-field">
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username" autocomplete="off">
                    <small></small>
                </div>
                <div class="form-field">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" autocomplete="off">
                    <p id="text">WARNING! Caps lock is ON</p>
                    <small id="error-msg"></small>
                </div>
                <div class="form-field">
                    <button><a href="./forget_pass.php">forget password ?</a></button>
                </div>
                <div class="form-field">
                    <input type="submit" value="Log in" id="sub" name="submit">
                </div>
            </form>
        </div>

    </div>
    <script>
        var input = document.getElementById("password");
        var text = document.getElementById("text");
        input.addEventListener("keyup", function(event) {
            if (event.getModifierState("CapsLock")) {
                text.style.display = "block";
            } else {
                text.style.display = "none"
            }
        });
    </script>
    <!-- <script src="../script/login.js"></script> -->
</body>

</html>

<?php
$conn = "";

$conn = mysqli_connect("localhost", "root", "", "unity_university");

if (isset($_POST['submit'])) {
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    // $username = $_POST['username'];
    // $password = $_POST['password'];
    $sql = mysqli_query($conn, "select HashedPassword from student_login where username='$username'");
    if ($row = mysqli_fetch_array($sql)) {
        if ($password == $row['HashedPassword']) {
            $_SESSION['student_id'] = "{$username}";

            $sql0 = "SELECT department FROM `student_data` where S_id=$username";
            $result = $conn->query($sql0);
            $row = $result->fetch_assoc();
            $dep_code = $row['department'];
            $_SESSION['student_dep'] = "{$dep_code}";

            header("location:../dashboard/home.php");
            exit();
        } else
            echo '<script>document.getElementById("error-msg").innerHTML = "Invalid Password";</script>';
    } else
        echo '<script>document.getElementById("error-msg").innerHTML = "User Not Found";</script>';
}
