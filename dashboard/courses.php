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
                        echo "<td><input type='text' class='credit-hours' value='{$row['CreditHour']}'></td>";
                        echo "<td><input type='text' class='grade' value='{$row['Grade']}'></td>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
        <p>Your GPA: <span id="gpa">-</span></p>
        <button onclick="calculateGPA()">Calculate GPA</button>
    </div>
    <script src="./script/grade.js"></script>
</body>

</html>