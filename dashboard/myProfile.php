<?php
session_start();
include('database.php');

$sql = "SELECT Fname,Lname,department.Department_name,student_data.batch,student_data.entry
         from student_data 
        join department 
        on student_data.department = department.Department_code 
        join student_apply 
        on student_apply.App_id =student_data.App_ID 
        where student_data.S_id={$_SESSION['student_id']} ";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./css/myprofile.css">
</head>

<body>

    <div class="container">
        <div class="myprofile">
            <h2>My Profile</h2>
        </div>
        <div class="profile-section">
            <img src="../img/user.jpg" alt="Student Picture" class="profile-picture">
        </div>

        <div class="student-data">
            <p><span>Full Name:</span> <?php echo ucwords($row['Fname']);
                                        echo " ";
                                        echo ucwords($row['Lname']); ?></p>
            <p><span> ID Number:</span> <?php echo $_SESSION['student_id'] ?></p>
            <p><span> Department: </span><?php echo ucwords($row['Department_name']); ?> </p>
            <p><span> Batch Year: </span><?php echo $row['entry'] ?></p>
        </div>
    </div>


    <!--  <h1>helo student <?php echo "{$_SESSION['student_id']}" ?></h1> -->
    <button id="logout"><a href="../html/logout.php">Logout</a></button>
</body>

</html>