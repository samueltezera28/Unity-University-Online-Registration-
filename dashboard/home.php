<?php
session_start();
include('database.php');

$sql = "SELECT course.code,course.title,course.CreditHour,course.type,instructor.fname,instructor.lanme 
    from student_registration 
    JOIN course 
    on student_registration.Course_Code=course.code 
    JOIN instructor 
    on student_registration.INSTID = instructor.INSTID
    WHERE student_registration.S_ID ={$_SESSION['student_id']} and student_registration.Flag=0";

$sql1 = "SELECT * FROM `upcomming events` where student_id={$_SESSION['student_id']} OR department='dep01' or Ge_Sp='G' LIMIT 3; ";

?>


<!DOCTYPE html>
<html>

<head>
    <title style="color:aliceblue;">Student Dashboard</title>
    <link rel="stylesheet" href="../dashboard/css/home.css">
    <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">

</head>

<body>

    <div class="header">
        <h1>Student Dashboard</h1>
    </div>
    <div class="container-wrapper">
        <div class="nav">
            <ul>
                <li><a href="../dashboard/home.php"><i class="fa fa-home"></i>Home</a></li>
                <li><a href="#" onclick="showPlanning()"><i class="fa fa-calendar"></i>My Planning</a></li>
                <li><a href="#" onclick="showCourse()"><i class="fa fa-graduation-cap"></i> Course</a></li>
                <li><a href="#" onclick="showBooks()"><i class="fa fa-book"></i>Books/Modules</a></li>
                <li><a href="#" onclick="showGrade()"><i class="fa fa-calculator"></i>Grade</a></li>
                <li><a href="#" onclick="showProfile()"><i class="fa fa-user"></i>My Profile</a></li>
            </ul>
        </div>
        <div id="container" class="container">
            <div class="container-home">
                <div class="left">
                    <h2>Upcoming Events</h2>
                    <ul class="events">
                        <?php
                        $event = array();
                        $result_event = $conn->query($sql1);
                        if ($result_event->num_rows > 0) {
                            while ($row_event = $result_event->fetch_assoc()) {


                                $dateString = $row_event['endDate'];
                                $montNumber = date('m', strtotime($dateString));
                                $dateNumber = date('d', strtotime($dateString));
                                $message_title = $row_event['message_title'];
                                $message_event = $row_event['message_event'];
                                $time = $row_event['Times'];
                                $location = $row_event['location'];
                                $monthWord = date('M', mktime(0, 0, 0, $montNumber, 1));
                                array_push($event, $monthWord, $dateNumber, $message_title, $message_event, $time, $location);

                                // echo "<li class=\"event-item\">
                                // <div class=\"event-date\">{$monthWord} <br>{$dateNumber}</div>
                                //  <div class=\"event-title\">{$row_event['message_title']}</div>
                                //  <div class=\"event-description\">{$row_event['message_event']}</div>
                                //  <div class=\"event-info\">
                                // <span>Time: 10:00 AM - 12:00 PM</span>
                                //  <span>Location: Room 101</span>
                                // </div>
                                // </div>
                                // </li>";
                            }
                        }
                        ?>

                        <li class="event-item">
                            <div class="event-date"><?php echo "$event[6] " ?><br><?php echo "$event[7]" ?></div>
                            <div class="event-details">
                                <div class="event-title"><?php echo "$event[8]" ?></div>
                                <div class="event-description"><?php echo "$event[9]" ?></div>
                                <div class="event-info">
                                    <span>Time: <?PHP echo "$event[10]" ?></span>
                                    <span>Location: <?php echo "$event[11]" ?></span>
                                </div>
                            </div>
                        </li>
                        <li class="event-item">
                            <div class="event-date"><?php echo "$event[12] " ?><br><?php echo "$event[13]" ?></div>
                            <div class="event-details">
                                <div class="event-title"><?php echo "$event[14]" ?></div>
                                <div class="event-description"><?php echo "$event[15]" ?></div>
                                <div class="event-info">
                                    <span>Time: <?PHP echo "$event[16]" ?></span>
                                    <span>Location: <?php echo "$event[17]" ?></span>
                                </div>
                            </div>
                        </li>
                        <li class="event-item">
                            <div class="event-date"><?php echo "$event[0] " ?><br><?php echo "$event[1]" ?></div>
                            <div class="event-details">
                                <div class="event-title"><?php echo "$event[2]" ?></div>
                                <div class="event-description"><?php echo "$event[3]" ?></div>
                                <div class="event-info">
                                    <span>Time: <?PHP echo "$event[4]" ?></span>
                                    <span>Location: <?PHP echo "$event[5]" ?></span>
                                </div>
                            </div>
                        </li>


                        <!-- <li>Event 1</li> -->
                    </ul>
                    <a href="#" class="button">View All Events</a>
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
                    <a href="#" onclick="showCourse()" class="button">View All Courses</a>
                </div>

            </div>
        </div>
    </div>
    <script src="./script/router.js"></script>
</body>

</html>