<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
    <title>Student Dashboard</title>

</head>

<body>
    <div class="header">
        <h1>Student Dashboard</h1>
    </div>
    <div class="container-wrapper">
        <div class="nav">
            <ul>
                <li><a href="#" onclick="showHome() "><i class="fa fa-home"></i>Home</a></li>
                <li><a href="#" onclick="showPlanning()"><i class="fa fa-calendar"></i>My Planning</a></li>
                <li><a href="#" onclick="showCourse()"><i class="fa fa-graduation-cap"></i> Course</a></li>
                <li><a href="#" onclick="showBooks()"><i class="fa fa-book"></i>Books/Modules</a></li>
                <li><a href="#" onclick="showGrade()"><i class="fa fa-calculator"></i>Grade</a></li>
                <li><a href="#" onclick="showProfile()"><i class="fa fa-user"></i>My Profile</a></li>
            </ul>
        </div>
        <div id="container" class="container">
            <h2>Welcome to the Student Dashboard!</h2>
            <p></p>
        </div>
    </div>
    <script src="./script/router.js"></script>
</body>

</html>