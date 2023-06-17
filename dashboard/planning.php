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

    <div class="key-note">
        <p>Key/Note:</p>
        <ol>
            <div class="left">
                <li>8:30 - 9:25 AM</li>
                <li>9:30 - 10:25 AM</li>
                <li>10:30 - 11:25 AM</li>
                <li>11:30 - 12:25 AM</li>
            </div>

            <div class="right">
                <li>1:30 - 2:25 PM</li>
                <li>2:30 - 3:25 PM</li>
                <li>3:30 - 4:25 PM</li>
                <li>4:30 - 5:25 PM</li>
            </div>



            <!-- Add more time slots if needed -->
        </ol>
    </div>



</body>

</html>