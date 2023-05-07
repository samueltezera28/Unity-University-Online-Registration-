<?php
session_start();
include('database.php');

$sql = "SELECT course.code,course.title,course.CreditHour,course.type,instructor.fname,instructor.lanme 
    from student_registration 
    JOIN course 
    on student_registration.Course_Code=course.code 
    JOIN instructor 
    on student_registration.INSTID = instructor.INSTID
    WHERE student_registration.S_ID ={$_SESSION['student_id']}";
?>


<!DOCTYPE html>
<html>

<head>
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="../dashboard/css/home.css">
</head>

<body>
    <h1>Student Dashboard</h1>
    <div class="containeer">
        <div class="left">
            <h2>Upcoming Events</h2>
            <ul class="events">
                <!-- <li>Event 1</li>
                <li>Event 2</li>
                <li>Event 3</li>
                <li>Event 4</li> -->
            </ul>
            <!-- <a href="#" class="button">View All Events</a> -->
        </div>
        <div class="right">
            <h2>My Courses</h2>
            <table class="table">
                <tr>
                    <th>Course Code</th>
                    <th>Course Title</th>
                    <th>Course Cr</th>
                    <th>Course Type</th>
                    <th>Instructor</th>
                </tr>
                <?php
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>{$row['code']}</td>";
                        echo "<td>{$row['title']}</td>";
                        echo "<td>{$row['CreditHour']}</td>";
                        echo "<td>{$row['type']}</td>";
                        echo "<td>Dr.{$row['fname']} {$row['lanme']}</td>";
                        echo "</tr>";
                    }
                }
                ?>
            </table>
            <a href="#" class="button">View All Courses</a>
        </div>
    </div>
</body>

</html>