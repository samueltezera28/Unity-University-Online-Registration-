<?php
session_start();
include('database.php');

$sql = "SELECT student_registration.Grade, course.code, course.title, course.CreditHour, course.type, instructor.fname, instructor.lanme 
    FROM student_registration 
    JOIN course ON student_registration.Course_Code = course.code 
    JOIN instructor ON student_registration.INSTID = instructor.INSTID
    WHERE student_registration.S_ID = {$_SESSION['student_id']} AND student_registration.Flag = 1";

$sql1 = "SELECT * FROM course where course.code not in (select student_registration.Course_Code from student_registration where student_registration.S_ID={$_SESSION['student_id']} and course.department='dep01')"
?>

<!DOCTYPE html>
<html>

<head>
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="../dashboard/css/courses.css">
</head>

<body>
    <h1></h1>

    <h2>Course History</h2>
    <table>
        <thead>
            <tr>
                <th>Course Code</th>
                <th>Course Title</th>
                <th>Course Cr</th>
                <th>Course Type</th>
                <th>Instructor</th>
                <th>Grade</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>{$row['code']}</td>";
                    echo "<td>{$row['title']}</td>";
                    echo "<td>{$row['CreditHour']}</td>";
                    echo "<td>{$row['type']}</td>";
                    echo "<td>Dr. {$row['fname']} {$row['lanme']}</td>";
                    echo "<td>{$row['Grade']}</td>";
                    echo "</tr>";
                }
            }
            ?>
        </tbody>
    </table>

    <h2>Upcomming Courses</h2>
    <table>
        <thead>
            <tr>
                <th>Course Code</th>
                <th>Course Title</th>
                <th>Course Cr</th>
                <th>Course Type</th>
                <th>Instructor</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = $conn->query($sql1);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>{$row['code']}</td>";
                    echo "<td>{$row['title']}</td>";
                    echo "<td>{$row['CreditHour']}</td>";
                    echo "<td>{$row['type']}</td>";
                    echo "<td>TBA</td>";
                    echo "</tr>";
                }
            }
            ?>
        </tbody>
    </table>

</body>

</html>