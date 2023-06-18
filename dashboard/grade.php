<?php
session_start();
include('database.php');

$sql = "SELECT student_registration.Grade, course.code, course.title, course.CreditHour, course.type, instructor.fname, instructor.lanme 
    FROM student_registration 
    JOIN course ON student_registration.Course_Code = course.code 
    JOIN instructor ON student_registration.INSTID = instructor.INSTID
    WHERE student_registration.S_ID = {$_SESSION['student_id']} AND student_registration.Flag = 1";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dashboard/css/grade.css">
    <title>Document</title>
</head>

<body>
    <div class="gpa-calculator">
        <h2>GPA Calculator</h2>
        <p>Enter the credit hours and corresponding grades to calculate your GPA:</p>
        <table>
            <thead>
                <tr>
                    <th>Course</th>
                    <th>Credit Hours</th>
                    <th>Grade</th>
                </tr>
            </thead>
            <tbody id="gpa-table-body">
                <?php
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>{$row['title']}</td>";
                        echo "<td class='credit-hours'>{$row['CreditHour']}</td>";
                        echo "<td><input type='text' class='grade' value='{$row['Grade']}'></td>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
        <p>Your CGPA: <span id="gpa">-</span></p>
        <button onclick="calculateGPA()">Calculate GPA</button>
    </div>
    <script src="./script/grade.js"></script>
</body>

</html>