<?php
include("./database.php")
?>


<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./css/planning.css">
    <title>Student Schedule</title>
</head>

<body>
    <table>
        <tr>
            <th>No</th>
            <th>COURSE TITLE</th>
            <th>TIME SCHEDULE</th>
            <th>LAB(ROOM)</th>
        </tr>

        <?php
        $sql = "SELECT * FROM student_event";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $no = 0;
            while ($row = $result->fetch_assoc()) {
                $no += 1;
                echo "<tr>";
                echo "<td>";
                echo "<div>{$no}</div>";
                echo "</td>";
                echo "<td>";
                echo "<div>{$row['event_title']}</div>";
                echo "</td>";
                echo "<td>";
                echo "<div>{$row['time']}</div>";
                echo "</td>";
                echo "<td>";
                echo "<div>{$row['location']}</div>";
                echo "</td>";
                echo "</tr>";
            }
        }

        ?>

    </table>



</body>

</html>