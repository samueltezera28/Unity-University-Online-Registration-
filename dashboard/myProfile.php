<?php
session_start();
include('./dashboard/database.php')
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
            <p><span>Full Name:</span> John Doe</p>
            <p><span> ID Number:</span> 123456789</p>
            <p><span> Department: </span>Computer Science</p>
            <p><span> Batch Year: </span>2021</p>
        </div>
    </div>


    <!--  <h1>helo student <?php echo "{$_SESSION['student_id']}" ?></h1> -->
    <button id="logout"><a href="../html/logout.php">Logout</a></button>
</body>

</html>

<?php
$sql = "SELECT Fname,Lname,department.Department_name,student_data.batch
         from student_data 
        join department 
        on student_data.department = department.Department_code 
        join student_apply 
        on student_apply.App_id =student_data.App_ID 
        where student_data.S_id={$_SESSION['student_id']} ";
?>