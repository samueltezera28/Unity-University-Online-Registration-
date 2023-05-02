<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>helo student <?php echo "{$_SESSION['student_id']}" ?></h1>
    <button id="logout"><a href="../html/logout.php">Logout</a></button>
</body>

</html>